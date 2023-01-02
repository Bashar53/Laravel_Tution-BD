<?php

namespace App\Http\Controllers;




use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

use App\Http\Controllers\Controller;




class LoginController extends Controller
{

 
 


  public function update()
  {
    $students =DB::table('students')->get();
    return view('update');
    
    
    

  }

  public function Delete()
  {
    $students =DB::table('students')->get();
    return view('delete');
    
    
    

  }
  

  
  
    //
    public function login (Request $request)
    {
        //echo '<pre>';
       // echo print_r ($request);
       // die;

       $students = DB::table('students')
      
       ->where('email' , $request->email)
       ->where('password' , $request->password)
       
       ->get();
      // print_r(count($data));
      // die;

      if(count($students)>0)
      {
         // $sucess ="Signed in Successfully";
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
          $class='';
          $subject='';
          $location='';
          $phone='';
          $email='';
          $password='';
          
          foreach ($students as $user)
          {
              
             $id =$user->id;
               $name=$user->name;
               $class=$user->class;
               $subject=$user->subject;
               $location=$user->location;
               $phone=$user->phone;
               $email=$user->email;
              $password=$user->password;
             

              
          }
          session_id("session1");
          session_start();
          $succes="Signed in successfully";
          $_SESSION['id']=$id;
          $_SESSION['name']=$name;
          $_SESSION['class']=$class;
          $_SESSION['subject']=$subject;
          $_SESSION['location']=$location;
          $_SESSION['phone']=$phone;
          $_SESSION['email']=$email;
          $_SESSION['password']=$password;
         
       
         

          return view('edit-student',compact('succes'));
          
         
        
         
         

        
      }
      else 
      {
        $failed ="Signed in failed";
        return back()->with('failed','Sign in failed');
      }

      
    }



    
    
       

    

    

    

   
}
