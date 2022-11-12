<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\CourseCrud;
class CourseController extends Controller
{
    public function all_course(){
        $students=CourseCrud::all();
        return view('Course',compact('students'));
    }
    public function add_new_student(){
        return view('add_new_student');
    }
     public function store_student(Request $request)
     {
        $request->validate([
            'Student_name'=>'required',
            'Course_name'=>'required',
            'Fee'=>'required',
        ]);

        $company = new CourseCrud;
        $company->Student_name = $request->Student_name;
        $company->Course_name = $request->Course_name;
        $company->Fee = $request->Fee;
        $company->save();


        Session::flash('msg','Added Student Successfully');
        return redirect()->back();
   }
   public function edit_student($id){
        $student = CourseCrud::findOrFail($id);

        return view('edit_student',compact('student'));

   }
   public function update_student(Request $request,$id)
     {
        $request->validate([
            'Student_name'=>'required',
            'Course_name'=>'required',
            'Fee'=>'required',
        ]);

        $company = CourseCrud::findOrFail($id);
        $company->Student_name = $request->Student_name;
        $company->Course_name = $request->Course_name;
        $company->Fee = $request->Fee;
        $company->save();

        Session::flash('msg','Update Student Successfully');
        return redirect()->back();
    }
    public function delete_student($id){
        $student=CourseCrud::findOrFail($id);
        $student->delete();
        Session::flash('msg','Delete student Successfully');
            return redirect()->back();
    }
}
