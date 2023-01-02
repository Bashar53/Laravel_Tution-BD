<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Crypt;
use DB;

class TutionController extends Controller
{
    public function home()
    {
        return view('home');

    }


    public function register_student()
    {
        return view('register-student');
    }

    public function datasave(Request $request)
    {
        DB::table('students') ->insert([
            'name'=>$request->name,
            'class'=>$request->class,
            'subject'=>$request->subject,
            'location'=>$request->location,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=>Crypt::encrypt($request->password)
        ]);

        return redirect()->back()->with('success','Registration is Successfull');





       
    }





    public function register_teacher()
    {
        return view('register-teacher');
    }


    public function datasave_teacher(Request $request)
    {
        DB::table('teachers') ->insert([
            'name'=>$request->name,
            'qualification'=>$request->qualification,
            'subject'=>$request->subject,
            'location'=>$request->location,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=>$request->password
        ]);

        return redirect()->back()->with('success','Registration is Successfull');


       
    }


    

    public function StudentList()
    {
        $students =DB::table('students')->get();
        return view('Find-student' , compact('students'));
    }


    public function TeacherList()
    {
        $teachers =DB::table('teachers')->get();
        return view('Find-teacher' , compact('teachers'));
    }












   



    
}
