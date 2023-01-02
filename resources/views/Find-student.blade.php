<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/navigation.css')}}">

    <title>Students List</title>



    
     
    

    

    <style>
    body
    {
        background-image:url("resources/birds.jpg");
    }

      table{
           border-collapse:collapse;
           width:80%;
           margin:auto;
      }
      td,th{

          padding: 5px;
          border: 1px solid;
          border-bottom: 1px solid #ddd;
      }
      td,th{

padding: 5px;
border: 1px solid;
border-bottom: 1px solid #ddd;
}

th {
background-color: #020202;
color: white;
}

tr:hover {
background-color:#03545f!important;
color: white;

}

tr:nth-child(odd) {background-color:#6487a2;}
tr:nth-child(even){background-color:#649ac5;}
     
    </style>
</head>
<body>

<ul>
  <li><a style = "padding:20px;text-decoration:none";  href="{{route('home')}}">Home</a></li>
  <li><a  style = "padding:20px;text-decoration:none";  href='student'>Student Login</a></li>
  <li><a  style = "padding:20px;text-decoration:none";  href='teacher'>Teacher Login</a></li>
  <li><a  style = "padding:20px;text-decoration:none";  href="{{route('register-student')}}">Student Registration</a></li>
  <li><a  style = "padding:20px;text-decoration:none";  href="{{route('register-teacher')}}">Teacher Registration</a></li>
  <li><a  class="active"; style = "padding:20px;text-decoration:none";  href="{{route('Find-student')}}">Find Student</a></li>
  <li><a  style = "padding:20px;text-decoration:none";  href="{{route('Find-teacher')}}">Find Teacher</a></li>
</ul>

<h1 style=" color : black;padding:15px; margin-left:500px;" > Students List </h1>




   
   


  
    <table>
    <tr>
    
    <th>ID</th>
    <th>Name</th>
    <th>Class</th>
    <th>Subject</th>
    <th>Location</th>
    <th>Phone</th>
    <th>Email</th>
   
  

   

    @foreach($students as $student)

   
    
   
   <tr> 
  
    
  

      
       <td>{{$student -> id}}</td>
       <td>{{$student -> name}}</td>
       <td>{{$student ->class}}</td>
       <td>{{$student ->subject }}</td>
       <td>{{$student-> location}}</td>
       <td>{{$student-> phone}}</td>
       <td>{{$student-> email}}</td>
       
   </tr>

   @endforeach

  
     



    </tabel>

   

</body>
</html>