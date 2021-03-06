<?php

namespace App\Http\Controllers;

use App\Courses;
use App\Section;
use App\Subject;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class ManageSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.subjectlist');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = Courses::pluck('course','id')->all();
        return view('admin.createsubject')->with(compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Subject::create($input);
        return redirect('subject');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function sublist($id){

        $course = Courses::find($id);
        $course_id = $course->id;
        return view('admin.sublist',compact('course_id'));
    }
    public function getSubject($id)
    {

        return DataTables::of(Subject::query()->where('course_id',$id))->make(true);
    }
    public function viewsubjects($id){
        $section = Section::find($id);
        $m1 = Message::where(['to'=>Auth::user()->id,'status'=>'new'])->get();
        return view('teacher.viewsubjects')->with(compact('section','m1'));
    }
    public function getSubjects($id){
        $section = Section::find($id);
        $course_id = $section->course_id;
        return DataTables::of(Subject::query()->where('course_id',$course_id))->make(true);
    }
}
