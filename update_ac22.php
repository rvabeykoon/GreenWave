<?php
 $con=mysqli_connect("localhost","root","","greenwave"); //Create connection
   session_start();
if (!$con)  //Check connection  
  {
  die('Failed to connect to MySQL: ' . mysqli_connect_error());
  }

// update data in mysql database
$sql="UPDATE users SET firstname='$_POST[firstname]', lastname='$_POST[lastname]', email='$_POST[email]' WHERE username='$_POST[username]'";
$result=mysqli_query($con, $sql);

// if mysqli_query is successfully updated
if($result){
echo "Successful updated the record";
echo "<BR><BR>";
echo "<a href='viewImage.php'>View result</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href = 'logout.php'>Sign Out</a>";
}

else {
echo " Data Update Error";
}

?> 