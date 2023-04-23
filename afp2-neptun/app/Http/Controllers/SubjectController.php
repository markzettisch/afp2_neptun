<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    private $name;
    private $description;
    private $suggested_semester;
    private $credit;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();

        //$subjects = Subject::query()->where("name","like","%AFP1%")->get();
        return view('mainpage.subjects')->with(compact("subjects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $this->name = $request->name;
        $this->description = $request->description;
        $this->suggested_semester = $request->suggested_semester;
        $this->credit = $request->credit;

        $this->check_array = [$this->name, $this->description, $this->suggested_semester, $this->credit];

        foreach($this->check_array as $item)
        {
            if(empty($item))
            {
                $this->error = 1;
            }
            else
            {
                $this->error = 0;
            }
        }

        if($this->error == 0)
        {
            DB::table('subjects')->insert([
                'user_id' => 1, // Ezt majd cserélni kell.
                'name' => $this->name,
                'created_at' => now(),
                'updated_at' => now(),
                'desc' => $this->description,
                'suggested_semester' => $this->suggested_semester,
                'credit' => $this->credit
            ]);
        }

        return redirect('/admin/subjects');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Subject::create($request->except("_token"));

    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {
        $subject->name = $request->get("name");
        $subject->desc = $request->get("desc");
        $subject->suggested_semester = $request->get("suggested_semester");
        $subject->credit = $request->get("credit");
        
        $subject->save();


        $success = "Edited successfully! ";
        $subjects = Subject::all();
       return view('admin.checkAll')->with(compact("success","subjects"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        //
    }   

    public function showSubjects()
    {
        $subjects = Subject::all();
        //$subjects = Subject::query()->where("name","like","%AFP1%")->get();

        return view('admin.checkAll')->with(compact("subjects")); // ?????? 



    }
}