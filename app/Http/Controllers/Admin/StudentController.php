<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Models\course;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Student::get();
        // [
        //     ['id'=>'1', 'fname'=>'ahmed','lname'=>'ali','age'=>'20','address'=>'cairo'],
        //     ['id'=>'2', 'fname'=>'khaled','lname'=>'ahmed','age'=>'21','address'=>'alex']
        // ];
        return view('admin.students.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data=[
        //     ['id'=>'1', 'fname'=>'ahmed','lname'=>'ali','age'=>'20','address'=>'cairo'],
        //     ['id'=>'2', 'fname'=>'khaled','lname'=>'ahmed','age'=>'21','address'=>'alex']
        // ];
        return view('admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        Student::create([
         'id'=>$request->id,
         'fname'=>$request->fname,
         'lname'=>$request->lname,
         'age'=>$request->age,
         'address'=>$request->address

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
        $data = Student::findorfail($id);
        return view('admin.students.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Student::findorfail($id);
        return view('admin.students.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, $id)
    {
        $stu = Student::findorfail($id);
         $stu->update([
            'id'=>$request->id,
         'fname'=>$request->fname,
         'lname'=>$request->lname,
         'age'=>$request->age,
         'address'=>$request->address
         ]);
         return redirect()->route('students.index')->with('msg','Updated successsfully.....');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stu = Student::findorfail($id);
         $stu->delete();
         return redirect()->route('students.index')->with('msg','Deleted successsfully.....');

    }
    public function archive(){
        $data= Student::onlyTrashed()->select('id','fname','lname','age','address')->get();
        return view('admin\students\archive',['data'=>$data]);
    }
    public function restore($id){
        $stu=Student::withTrashed()->findOrFail($id);
        $stu->restore();
       return redirect()->back()->with('msg','Restored successsfully.....');

    }
    public function deleteArchive($id){
        $stu=Student::withTrashed()->findOrFail($id);
        $stu->forceDelete();
        return redirect()->back()->with('msg','Deleted successsfully.....');

        }

        public function createCourses($id){
            $courses=course::select('id','name')->get();
            return view('admin.students.addCourses',['courses'=>$courses ,'id'=>$id]);
        }


        public function addCourses(Request $request){
            // return $request;
            $student=Student::findorfail($request->student_id);
            $student->courses()->syncWithoutDetaching($request->courses);
            return redirect()->back()->with('msg','added successfully..');
      }
}
