<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        
        <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/navigation.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/Rdesign.css')}}">
        <title>Teacher Registration</title>

     
        
    </head>
    <body>

    <style>
      body{
   background-image:url("resources/birds.jpg");
      }


</style>
    
    
           
      
  <div style="height:10px;">      
    <ul>
  <li><a style = "padding:20px;text-decoration:none";  href="{{route('home')}}">Home</a></li>
  <li><a  style = "padding:20px;text-decoration:none";  href='student'>Student Login</a></li>
  <li><a  style = "padding:20px;text-decoration:none";  href='teacher'>Teacher Login</a></li>
  <li><a  style = "padding:20px;text-decoration:none";  href="{{route('register-student')}}">Student Registration</a></li>
  <li><a class="active"; style = "padding:20px;text-decoration:none";  href="{{route('register-teacher')}}">Teacher Registration</a></li>
  <li><a style = "padding:20px;text-decoration:none";  href="{{route('Find-student')}}">Find Student</a></li>
  <li><a  style = "padding:20px;text-decoration:none";  href="{{route('Find-teacher')}}">Find Teacher</a></li>
</ul>
</div>
        

      
       
        
        
		<div><h1 style=" padding:15px; margin:30px;" > Teacher Registration </h1> </div>
      
        
<form method="post"  class="container"; style=" margin-top:220px; " action="{{route('datasave_teacher')}}">
@csrf

   <table>
            <tr>
                <td style=" padding:15px;color:white">Name</td>
                    
                 <td><input type="text" name="name"  placeholder="Name"></td>
            </tr>

            <tr>
                <td style=" padding:15px;color:white">Qualification</td>
                    
                 <td><input type="text" name="qualification" placeholder="Qualification"></td>
            </tr>
             <tr>
               <td style=" padding:15px;color:white" > Subject</td>
                 <td><input type="text" name="subject"  placeholder="Subject"> </td>
            </tr>
             <tr>
               <td style=" padding:15px;color:white" >Location</td>
                 <td><input type="text" name="location"  placeholder="Location"> </td>
            </tr>

            <tr>
                <td style=" padding:15px;color:white">Phone</td>
                    
                 <td><input type="text" name="phone"  placeholder="Phone"></td>
            </tr>

            <tr>
                <td style=" padding:15px;color:white">Email</td>
                    
                 <td><input type="text" name="email"  placeholder="Email"></td>
            </tr>

            <tr>
                <td style=" padding:15px;color:white">Password</td>
                    
                 <td><input type="text" name="password"  placeholder="password"></td>
            </tr>

            <tr>
               <td></td>
                 <td style=" padding:15px;" > <input type="submit" value="submit" name=""></td>
            </tr>

            @if (Session::has('success'))
        <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
        
        @endif
        </table> 
</form>
        
    </body>
</html>
