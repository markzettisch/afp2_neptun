<?php

namespace App\Http\Controllers;

use App\Models\marks;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marks = marks::all();
        return view('mainpage.marksstudents')->with(compact("marks"));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(marks $marks)
    {
        //
    }
    
    public function showMarks()
    {
        $marks = marks::all();
        //$subjects = Subject::query()->where("name","like","%AFP1%")->get();

        return view('mainpage.marksteacher')->with(compact("marks")); // ?????? 



    }
}
