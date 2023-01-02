<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/navigation.css')}}">
    <title>Teachers List</title>


   


    

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
  <li><a  style = "padding:20px;text-decoration:none";  href="{{route('Find-student')}}">Find Student</a></li>
  <li><a class="active";   style = "padding:20px;text-decoration:none";  href="{{route('Find-teacher')}}">Find Teacher</a></li>
</ul>

<h1 style=" padding:15px; margin-left:500px;" > Teachers List </h1>


  
    <table>
    <tr>
    
    <th>ID</th>
    <th>Name</th>
    <th>Qualification</th>
    <th>Subject</th>
    <th>Location</th>
    <th>Phone</th>
    <th>Email</th>




    @foreach($teachers as $teacher)
   
   <tr>
       <td>{{$teacher -> id}}</td>
       <td>{{$teacher -> name}}</td>
       <td>{{$teacher ->qualification}}</td>
       <td>{{$teacher ->subject }}</td>
       <td>{{$teacher-> location}}</td>
       <td>{{$teacher-> phone}}</td>
       <td>{{$teacher-> email}}</td>
       
   </tr>

   @endforeach

    </tabel>

</body>
</html>