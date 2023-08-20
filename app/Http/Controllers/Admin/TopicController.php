<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Topic::get();
        return view('admin.topics.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Topic::get();
    

        return view('admin.topics.create',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Topic::create([
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
        $data = Topic::findorfail($id);
        return view('admin.topics.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Topic::findorfail($id);
        return view('admin.topics.edit',['data'=>$data]); 
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
        $dep = Topic::findorfail($id);
        $dep->update([
        'id'=>$request->id,
        'name'=>$request->name,
        ]);
        return redirect()->route('topics.index',$dep['id'])->with('msg','Updated successsfully.....');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dep=Topic::findorfail($id);
        $dep->delete();
        return redirect()->route('topics.index')->with('msg','deleted..');
    }

}