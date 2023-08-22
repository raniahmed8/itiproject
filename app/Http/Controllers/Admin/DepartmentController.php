<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Department::get();
        return view('admin.departments.index',['data'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Department::get();


        return view('admin.departments.create',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Department::create([
            'id'=>$request->id,
            'name'=>$request->name,


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
        $data = Department::findorfail($id);
        return view('admin.departments.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Department::findorfail($id);
        return view('admin.departments.edit',['data'=>$data]);
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
        $dep = Department::findorfail($id);
        $dep->update([
        'id'=>$request->id,
        'name'=>$request->name,
        ]);
        return redirect()->route('departments.index')->with('msg','Updated successsfully.....');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dep=Department::findorfail($id);
        $dep->delete();
        return redirect()->route('departments.index')->with('msg','deleted..');
    }

    public function archive(){
        // return $dept;
        $data = Department::onlyTrashed()->get();
        return view('admin.departments.archive',['data'=>$data]);
    }

    public function restore($id){
        $dept=Department::withTrashed()->findOrFail($id);
        $dept->restore();
       return redirect()->back()->with('msg','Restored successfully..');

    }

    public function deleteArchive($id){
        $dept=Department::withTrashed()->findOrFail($id);
        $dept->forceDelete();
        return redirect()->back()->with('msg','Deleted successfully..');
    }
}
