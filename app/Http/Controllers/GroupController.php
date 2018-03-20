<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\Input;
class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::all();
        return view("groups.index")->with('groups', $groups);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::all();
        return view("groups.create")->with('groups',$groups);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $name = $request->input('name');
        $year = $request->input('year');
        //
        $group = new Group();
        $group->name = $name;
        $group->year = $year;
        $group->save();

        return redirect('/groups');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show($id)
   {
       $group = Group::find($id);
       $students  = Student::Where('group_id','=',$id)->get();
       return view('students.index',compact('group','students'));
   }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group = Group::find($id);
       
        
        return view("groups.edit")->with('group',$group);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $group = Group::find($id);
        $group->name      = $request->input('name');
        $group->year     = $request->input('year');
        $group->save();
        // return response()->json($student);
        return redirect("groups");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        //
    }
}
