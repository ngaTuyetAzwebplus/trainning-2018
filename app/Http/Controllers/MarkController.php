<?php

namespace App\Http\Controllers;

use App\Mark;
use App\Student;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marks = Mark::all();
        return view("marks.index_mark")->with('marks', $marks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $students = Student::get();
        // return view("marks.create")->with('groups',$groups);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
        $php = $request->input('php');
        $mySQl = $request->input('mySQl');
        $java = $request->input('java');
        $student_id = $request->input('id');
        } 
        catch (Exception $e)
         {
        return 'ko nhap dc';
                }
        
        $mark = new Mark();
        
        $mark->php = $php;
        $mark->mySQl = $mySQl;
        $mark->java = $java;
        $mark->student_id = $student_id;
        $mark->save();
        return redirect('/marks');

       
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('marks.create')->with('student',$student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function edit(Mark $mark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mark $mark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mark  $mark
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mark $mark)
    {
        //
    }
}
