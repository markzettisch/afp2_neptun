<?php

namespace App\Http\Controllers;

use App\Models\marks;
use App\Models\Subject;
use App\Models\Students;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarkController extends Controller
{
    private $user_id;
    private $name;
    private $hallgato;
    private $mark;
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->rank_id != 0){
            return redirect("/");
        }

        $user_id = auth()->user()->id;
        $marks = marks::all()->where("user_id", "=", $user_id);
        return view('mainpage.marksstudents')->with(compact("marks"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $this->user_id = $request->_token;
        $this->name = $request->subject_id;
        $this->hallgato = $request->student_id;
        $this->mark = $request->mark;

        $this->check_array = [$this->user_id, $this->name, $this->hallgato, $this->mark];

        foreach($this->check_array as $item)
        {
            if(empty($item) || $item == null or $item == "")
            {
                $this->error = 1;
                break;
            }
            else
            {
                $this->error = 0;
            }
        }

        if($this->error == 0)
        {
            DB::table('marks')->insert([
                'user_id' => $this->hallgato,
                'name' => $this->name,
                'created_at' => now(),
                'updated_at' => now(),
                'hallgato' => User::where("id", "=", $this->hallgato)->first()->name,
                'mark' => $this->mark,
            ]);
        }

        return redirect('/teacher/marks');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(marks $marks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(marks $marks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, marks $marks)
    {
        $marks->mark = $request->get("mark");
        $this->check_array = [$marks->mark];
        $marks->save();
        $marks = marks::all();
        $subjects = Subject::all();
        return redirect('teacher/marks')->with(compact("marks","subjects"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
       
        $id = $request["deletebutton"];      
        marks::destroy($id);       
        return redirect()->back();
    }
    
    public function showMarksandSubjects()
    {
        if (auth()->user()->rank_id < 1){
            return redirect("/");
        }
        $marks = marks::all();
        $subjects = Subject::all();
        $students = User::all()->where("rank_id", "=", 0);

        return view('mainpage.marksteacher')->with(compact("marks", "subjects", "students")); // ?????? 
        
        //$subjects = Subject::query()->where("name","like","%AFP1%")->get();

    }






}
