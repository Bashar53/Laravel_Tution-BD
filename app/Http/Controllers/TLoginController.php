<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class TLoginController extends Controller
{
    //
    public function updateTeacher()
    {
        return view('updateTeacher');
  
    }

    public function DeleteTeacher()
  {
   
    $teachers =DB::table('teachers')->get();
    return view('delete-teacher');
    
   
    
    
    

  }

  

  
  
    //
    public function login2 (Request $request)
    {
        //echo '<pre>';
       // echo print_r ($request);
       // die;

       $teachers = DB::table('teachers')
      
       ->where('email' , $request->email)
       ->where('password' , $request->password)
       
       ->get();
      // print_r(count($data));
      // die;

      if(count($teachers)>0)
      {
      //  $sucess ="Signed in Successfully";
      // return view('home',compact('sucess'));
      
     
       // echo'Email : ' ; echo  $_SESSION['email'] = $request -> email;
       //   echo '<br>';
          
        // echo 'Password: '; echo  $_SESSION['password'] = $request -> password;
        // echo 'name: '; echo  $_SESSION['name'] = $request -> name;

         // echo '<br>';
         // echo '<br>';
         // echo '<br>';
          



         
          
         $id='';
          $name='';
          $qualification='';
          $subject='';
          $location='';
          $phone='';
          $email='';
          $password='';
          
          foreach ($teachers as $user)
          {
              
             $id =$user->id;
               $name=$user->name;
               $qualification=$user->qualification;
               $subject=$user->subject;
               $location=$user->location;
               $phone=$user->phone;
               $email=$user->email;
              $password=$user->password;
             

              
          }
          session_id("session3");
          session_start();
          $succes="Signed in successfully";
          $_SESSION['id']=$id;
          $_SESSION['name']=$name;
          $_SESSION['qualification']=$qualification;
          $_SESSION['subject']=$subject;
          $_SESSION['location']=$location;
          $_SESSION['phone']=$phone;
          $_SESSION['email']=$email;
          $_SESSION['password']=$password;
         
       
         

          return view('edit-teacher',compact('succes'));
         
        
         
         

        
      }
      
      else 
      {
        $failed ="Signed in failed";
        return back()->with('failed','Sign in failed');
      }
    }



    
    
       

    

    

    
}
