<?php

$con = mysqli_connect("localhost","root","", "greenwave");
session_start();

  if($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form 

  $myusername = mysqli_real_escape_string($con,$_POST['username']);
  $mypassword = mysqli_real_escape_string($con,$_POST['password']); 

  $sql = "SELECT username FROM users WHERE username = '$myusername' and password =  '$mypassword'";
  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);


  $count = mysqli_num_rows($result);


  // If result matched $myusername and $mypassword, table row must be 1 row

  if($count == 1) {

     $_SESSION['login_user'] = $myusername;
     $_SESSION['login_admin'] = $myusername;


     header("location: home.html");

  }

 if($_SESSION['login_admin'] == 'admin'){


     $_SESSION['login_admin'] = $myusername;

      header("location: homeadmin.html");

 }


  else {
     echo  "Your Login Name or Password is invalid";
  }




  }

 ?>