<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();

        //$subjects = Subject::query()->where("name","like","%AFP1%")->get();
        // return view('mainpage.subjects')->with(compact("subjects"));
        return view('admin.checkAll')->with(compact("subjects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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