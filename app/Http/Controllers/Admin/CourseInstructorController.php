<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\course;
use App\Models\Instructor;
use Illuminate\Http\Request;

class CourseInstructorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    $instructors=Instructor::select('id','name')->get();
        $courses=course::select('id','name')->get();
        return view('admin.courseInstructor.create',['instructorS'=>$instructors, 'courses'=>$courses]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        // return $request;

       $request->validate([
            'evaluation'=>'required|max:20|min:4|string',
            'course_id'=>'numeric|required',
            'instructor_id'=>'numeric|required',
        ]);


        CourseInstructorController::create([
            'evaluation'=>$request->evaluation,
            'course_id'=>$request->course_id,
            'instructor_id'=>$request->instructor_id
        ]);

        return redirect()->back()->with('msg','Added Successfuly..');

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


}


