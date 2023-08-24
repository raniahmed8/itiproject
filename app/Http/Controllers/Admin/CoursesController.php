<?php

namespace App\Http\Controllers\Admin;
use App\Models\course;
use App\Http\Controllers\Controller;
use App\Http\Requests\courseRequest;
use App\Models\Topic;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=course::get();

        return view('admin.courses.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topData=Topic::all();

        return view('admin.courses.create',['topData'=>$topData]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(courseRequest $request)
    {
        // return $request;
        course::create([
         'name'=> $request->name,
         'duration'=> $request->duration,
         'discribtion'=> $request->discribtion,
         'top_id'=> $request->top_id

        ]);
        return redirect()->back()->with('msg','Added successsfully.....');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = course::findorfail($id);
      
        return view('admin.courses.show',['data'=>$data]);
    }


    public function edit($id)
    {
        $topData=Topic::all();

        $data = course::findorfail($id);
        return view('admin.courses.edit',['data'=>$data,'topData'=>$topData]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(courseRequest $request, $id)
    {
        $course=course::findorfail($id);

         $course->update([
         'name'=> $request->name,
         'duration'=> $request->duration,
         'discribtion'=> $request->discribtion,
         'top_id'=> $request->top_id

         ]);
        //   return redirect()->route('instructors.edit',$instructor['id'])->with('msg','updated..');
        return redirect()->route('courses.edit',$course['id'])->with('msg','updated..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = course::findorfail($id);
         $course->delete();
         return redirect()->route('courses.index')->with('msg','Deleted successsfully.....');

    }

    public function archive(){

        // return $dept;
        $data = course::onlyTrashed()->get();
        return view('admin.courses.archive',['data'=>$data]);

    }

    public function restore($id){
        $course=course::withTrashed()->findOrFail($id);
        $course->restore();

       return redirect()->back()->with('msg','Restored successfully..');


    }

    public function deleteArchive($id){
        $course=course::withTrashed()->findOrFail($id);
        $course->forceDelete();

        return redirect()->back()->with('msg','Deleted successfully..');
    }

}


