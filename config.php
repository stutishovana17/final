<?php


  $con=mysqli_connect("localhost:3308","root","","login") or die($con);

  if(!empty($_POST))
  {
  
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="INSERT INTO user(username,password) VALUES('$username','$password')";
    $insertData = mysqli_query($con,$sql);
    if($insertData){
      echo"successfully added";

    }
    else{
      echo"faied";
    }
  }
 ?>
  