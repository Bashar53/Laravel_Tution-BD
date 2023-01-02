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


$NAME =  $_POST['name'];
$class =  $_POST['class'];
$subject =  $_POST['subject'];
$location =  $_POST['location'];
$phone =  $_POST['phone'];
$email =  $_POST['email'];
$password =  $_POST['password'];

$ID =  $_POST['id'];

/*echo   $_POST['id'];
echo '<br>';
$name = "BASHAR";
$ok=1;
*/





$sql = "UPDATE students SET name='$NAME', class = '$class', subject = '$subject' , location = '$location' , phone = '$phone' , email = '$email' ,email_verified_at = ' ', password ='$password' WHERE id='$ID'";



if ($conn->query($sql) === TRUE  ) {
  echo "Record updated successfully";

  

  

  


  
} else {
  echo "Error updating record: " . $conn->error;
}


$conn->close();
?>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Tution BD </title>

  <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/UI.css') }}">

    

  

    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">

    
    <style>
      body
      {
        background-image:url("resources/birds.jpg");
        

      }

    

      
      

      </style>



</head>
<body  >



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

{{--<div class="Banner" class="image-style"  >
        <img class="image-style" src="resources/Capture.png" >
</div>
--}}

<ul>
  <li><a style = "padding:20px;text-decoration:none";  href="{{route('home')}}">Home</a></li>
  <li><a class="active"; style = "padding:20px;text-decoration:none";  href='student'>Student Login</a></li>
  <li><a  style = "padding:20px;text-decoration:none";  href='teacher'>Teacher Login</a></li>
  <li><a  style = "padding:20px;text-decoration:none";  href="{{route('register-student')}}">Student Registration</a></li>
  <li><a  style = "padding:20px;text-decoration:none";  href="{{route('register-teacher')}}">Teacher Registration</a></li>
  <li><a style = "padding:20px;text-decoration:none";  href="{{route('Find-student')}}">Find Student</a></li>
  <li><a  style = "padding:20px;text-decoration:none";  href="{{route('Find-teacher')}}">Find Teacher</a></li>
</ul>



{{--

<div class="main-content">

       <div class = "left-content">


       <div class="button1">

       <button type="button" class="btn1"> <b> <a style = " text-decoration:none ;padding:20px"; href="student"> Student Login</a> </b></button>

      

</div>


<div class="button2">

<button type="button" style=" text-decoration: none;" class="btn2"> <b> <a style = " text-decoration: none ;padding:20px"; href="teacher">Teacher Login</a> </b></button>



</div>

      



          </div>

          <div class = "middle-content">


          <div class="">

<button type="button" style=" text-decoration: none;" class="btn3"> <b> <a  style = " text-decoration: none ;padding:20px"; href="{{route('register-student')}}">Student Register</a> </b></button>



</div>





<div class="">

<button type="button" style=" text-decoration: none;" class="btn4"> <b> <a style = " text-decoration: none ;padding:20px"; href="{{route('register-teacher')}}">Teacher Register</a> </b></button>



</div>


         </div>

         <div class="right-content">


         <div class="">

       <button type="button" class="btn5"> <b> <a style = " text-decoration: none ;padding:20px"; href="{{route('Find-student')}}"> Find Student</a> </b></button>

      

</div>



<div class="">

<button type="button" class="btn6"> <b> <a style = " text-decoration: none; text-decoration: none ;padding:20px"; href="{{route('Find-teacher')}}"> Find Teacher</a> </b></button>



</div>

      
    </div>

    --}}


    <div class="footer">
     
    <b>   Office :  </b>

    <p>   225,Main Road , Anderkilla  </p>
    <p>   Chattogram , Bangladesh  </p>
    <p>   Mobile : 01832224195  </p>


    










</div>




    





{{--<a style = "padding:20px"; href="{{route('home')}}">Home</a>


<a style = "padding:20px"; href="{{route('register-student')}}">Register as Student</a>

<a style = "padding:20px"; href="{{route('register-teacher')}}">Register as Teacher</a>

<br>
<br>
<a style = "padding:20px"; href="{{route('Find-student')}}">Find Student</a>

<a style = "padding:20px"; href="{{route('Find-teacher')}}">Find Teacher</a>

<a style = "padding:20px"; href="student">Student Login</a>
<a style = "padding:20px"; href="teacher">Teacher Login</a>
--}



   {{--
    <a style = "padding:20px"; href="divisions/create">Division</a> 
<a style = "padding:20px"; href="districts/create">District</a>
<a style = "padding:20px"; href="upozilas/create">Upazilla</a>

<a style = "padding:20px"; href="address">address</a>
--}
{{-- [YOUR CODE/TEXT HERE] --}}




<h1> </h1>









</body>


</html>




