
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Teacher | login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/navigation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/log-design.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">

    

    

<style>
 
 body
 {
  background-image:url("resources/birds.jpg");
 }

  </style>
    




</body>
</html>

   




<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laravel8";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$conn->close();
?>


<ul>
  <li><a style = "padding:20px;text-decoration:none";  href="{{route('home')}}">Home</a></li>
  <li><a style = "padding:20px;text-decoration:none";  href='student'>Student Login</a></li>
  <li><a class="active" ; style ="padding:20px;text-decoration:none";  href='teacher'>Teacher Login</a></li>
  <li><a style = "padding:20px;text-decoration:none";  href="{{route('register-student')}}">Student Registration</a></li>
  <li><a style = "padding:20px;text-decoration:none";  href="{{route('register-teacher')}}">Teacher Registration</a></li>
  <li><a style = "padding:20px;text-decoration:none";  href="{{route('Find-student')}}">Find Student</a></li>
  <li><a style = "padding:20px;text-decoration:none";  href="{{route('Find-teacher')}}">Find Teacher</a></li>
</ul>





{{--<a style = "padding:20px"; href="{{route('home')}}">Home</a>

<a style = "padding:20px"; href="{{route('register-student')}}">Register as Student</a>

<a style = "padding:20px"; href="{{route('register-teacher')}}">Register as Teacher</a>

<br>
<br>
<a style = "padding:20px"; href="{{route('Find-student')}}">Find Student</a>

<a style = "padding:20px"; href="{{route('Find-teacher')}}">Find Teacher</a>

--}}


















<form class="container" method="post"  action="{{route('login2')}}">

<h1>LOGIN</h1>
@csrf


                 <input type="email" name="email" id="email"   placeholder="Email" >
            

            
              
                    
                 <input type="password" name="password" placeholder="Password" id="password">
            

          
           
                 <input type="submit" name ="submit_button" value="Login"   id = "submit_button">

               
@if(Session::has('failed'))
    <div class="alert alert-danger">
        {{ Session::get('failed') }}
    </div>

@endif
        
        
    

        </form>


        <?php

// Show all information, defaults to INFO_ALL
//phpinfo();

// Show just the module information.
// phpinfo(8) yields identical results.

?>


</body>


</html>





