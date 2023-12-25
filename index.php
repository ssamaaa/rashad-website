<?php 

@$firstname=$_REQUEST['firstname'];
@$secondname=$_REQUEST['secondname'];
@$phonenumber=$_REQUEST['phonenumber'];


if(isset($_POST['btntest']))
{

   $host="localhost";
   $user="root";
   $password="";
   $db="rashad";

  @$conn = mysqli_connect ($host,$user,$password,$db);

  @$insert="insert into users values('$firstname','$secondname','$phonenumber')";
  mysqli_query($conn,$insert);
   if($conn){
    echo("<h1 style='color:green;'> done! </h1>");
 
    }else{
        echo("<h1 style 'color:red;'> failed! </h1>");
    }

   
   }




?>