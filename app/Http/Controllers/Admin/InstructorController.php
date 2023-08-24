<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InstructorRequest;
use App\Models\course;
use App\Models\Department;
use App\Models\Instructor;
use Illuminate\Http\Request ;


//use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depts=Department::select('id','name')->get();
        // return $dept;
        $instructors = Instructor::all();
        return view('admin.instructors.index',['instructors'=>$instructors,'depts' =>$depts]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $deptData=Department::select('id','name')->get();
        return view('admin.instructors.create',['deptData'=>$deptData]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InstructorRequest $request)
    {

        Instructor::create([
            'name'=> $request->name,
            'salary'=> $request->salary,
            'address'=> $request->address,
            'hourRate'=> $request->hourRate,
            'department_id'=> $request->department_id,
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

        $instructor=Instructor::findorfail($id);

        return view('admin.instructors.show',['instructor'=>$instructor]);




    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $data=Instructor::findorfail($id);
        $deptData=Department::select('id','name')->get(); // select * from employees
        return view('admin.instructors.edit',['data'=>$data,'deptData'=>$deptData]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InstructorRequest $request, $id)
    {
        $instructor=Instructor::findorfail($id);
        $instructor->update([
            'name'=> $request->name,
            'salary'=> $request->salary,
            'address'=> $request->address,
            'hourRate'=> $request->hourRate,
            'department_id'=> $request->department_id,
        ]);

        return redirect()->route('instructors.edit',$instructor['id'])->with('msg','updated..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instructor=Instructor::findorfail($id);
        $instructor->delete();
        return redirect()->route('instructors.index')->with('msg','deleted..');

    }

    public function archive(){
        $depts=Department::select('id','name')->get();
        // return $dept;
        $instructors = Instructor::onlyTrashed()->get();
        return view('admin.instructors.archive',['instructors'=>$instructors,'depts' =>$depts]);
    }

    public function restore($id){
        $inst=Instructor::withTrashed()->findOrFail($id);
        $inst->restore();
       return redirect()->back()->with('msg','Restored successfully..');

    }

    public function deleteArchive($id){
        $inst=Instructor::withTrashed()->findOrFail($id);
        $inst->forceDelete();
        return redirect()->back()->with('msg','Deleted successfully..');
    }

    public function createCourses($id){
        $courses=course::select('id','name')->get();
        return view('admin.instructors.addCourses',['courses'=>$courses ,'id'=>$id]);
    }


    public function addCourses(Request $request){
        // return $request;
        $instructor=Instructor::findorfail($request->instructor_id);
        $instructor->courses()->syncWithoutDetaching($request->courses);
        return redirect()->back()->with('msg','added successfully..');
  }
}
