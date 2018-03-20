<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use App\Group;
use Illuminate\Support\Facades\Input;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::All();
        $students = Student::all();
        return view("students.index")->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::get();
        return view("students.create")->with('groups',$groups);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|max:5',
            'age' => 'required',
            'group' => 'required',
        ]
        );


        $name = $request->input('name');
        $age = $request->input('age');
        $group = $request->input('group');
        //
        $student = new Student();
        $student->name = $name;
        $student->age = $age;
        $student->group_id=$group;
        $student->save();

        return redirect('/students');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      
   
    }
    public function search(){
        $name = $_GET['name'];
        $students = Student::where([ 
            ['name', 'LIKE', '%' . $name . '%'],
         
        ])->get();
    
        return view('students.index', compact('students'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::with('group')->find($id);
        // $student->group();
        // return $student;
        
        $groups = Group::all();
        // return response()->json($groups);
        return view('students.edit',compact('student','groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
       $student->name     = Input::get('name');
       $student->age      = Input::get('age');
       $student->group_id = Input::get('group');
       $student->save();
       // return response()->json($student);
       return redirect('students')->with('students',$student);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::find($id)->delete();
        return redirect('/students');
    }
}
