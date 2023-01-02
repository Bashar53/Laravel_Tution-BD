<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/Treg.css') }}">
        <title>Update Data</title>

     
        
    </head>
    <body>

    <style>
        body{
            background-image:url("resources/nature.jpg");

        }


</style>
      
       
    
   
        
        
<form method="post" action="updateTeacher" >
@csrf


<td> 

   <table>

   <tr>
   <p style="float: right;  font-weight:bold"><?php echo $_SESSION['name']?>(<a href="/tution/home">Sign oUt</a>)</p>
                    
             <tr>
             <td style=" padding:15px;">ID</td>
            <td> <?php echo $_SESSION['id'] ?> </td>
                
                    
                 <td><input type="hidden" name="id" value=<?php echo $_SESSION['id']?>></td>

             </tr>    
            

            <tr>
                <td style=" padding:15px;">Name</td>
                
                    
                 <td><input type="text" name="name" value=<?php echo $_SESSION['name']?>></td>
            </tr>

            <tr>
                <td style=" padding:15px;">Qualification</td>
                    
                 <td><input type="text" name="qualification" value=<?php echo $_SESSION['qualification']?>></td>
            </tr>
             <tr>
               <td style=" padding:15px;" > Subject</td>
                 <td><input type="text" name="subject" value=<?php echo $_SESSION['subject']?>> </td>
            </tr>
             <tr>
               <td style=" padding:15px;" >Location</td>
                 <td><input type="text" name="location" value=<?php echo $_SESSION['location']?>> </td>
            </tr>

            <tr>
                <td style=" padding:15px;">Phone</td>
                    
                 <td><input type="text" name="phone" value=<?php echo $_SESSION['phone']?>></td>
            </tr>

            <tr>
                <td style=" padding:15px;">Email</td>
                    
                 <td><input type="text" name="email" value=<?php echo $_SESSION['email']?>></td>
            </tr>

            <tr>
                <td style=" padding:15px;">Password</td>
                    
                 <td><input type="text" name="password" value=<?php echo $_SESSION['password']?>></td>
            </tr>

            <tr>
               <td></td>
                 <td style=" padding:15px;" > <input type="submit" value="submit" name=""></td>

                 <td>  <a   style=" text-decoration:none ;width: 5px;
  padding: 0px;
  border: 3px ;
  background-color:white;
  margin: 0 ";
 type=""  href="delete-teacher"> Delete </a> </td>
            
            </tr>
            
            
        </table> 
</form>



<?php 
                $del = $_SESSION['id'];
                //print_r($del);
                
                session_write_close();

                session_id("session6");
                 session_start();
                 $_SESSION["delete-teacher"] = $del;
                //echo "<pre>", print_r($_SESSION, $del), "</pre>";
                //  print_r($del);
                 

                 
                    
                ?>
        
    </body>
</html>
