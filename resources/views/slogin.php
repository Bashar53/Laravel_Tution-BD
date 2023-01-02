
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
   
    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">

    

    


    


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




<a style = "padding:20px"; href="{{route('home')}}">Home</a>

<a style = "padding:20px"; href="{{route('register-student')}}">Register as Student</a>

<a style = "padding:20px"; href="{{route('register-teacher')}}">Register as Teacher</a>

<br>
<br>
<a style = "padding:20px"; href="{{route('Find-student')}}">Find Student</a>

<a style = "padding:20px"; href="{{route('Find-teacher')}}">Find Teacher</a>


















@if (Session::has('failed'))
<div class="alert alert-danger">
        <span>{{Session::get('failed')}}</span>
        @endif

<form class="container" method="post"  action="{{route('login')}}">

<h1>LOGIN</h1>
@csrf







   


  
           
   


           
          

                
              
                    
                 

                 <input type="text" name="email" id="email"   placeholder="Email" >
            

            
              
                    
                 <input type="password" name="password" placeholder="Password" id="password">
            

          
           
                 <input type="submit" name ="submit_button" value="Login"   id = "submit_button">
        
    

        </form>


        <?php

// Show all information, defaults to INFO_ALL
//phpinfo();

// Show just the module information.
// phpinfo(8) yields identical results.

?>


</body>


</html>





