<?php
 $con=mysqli_connect("localhost","root","","greenwave"); //Create connection
   session_start();
if (!$con)  //Check connection  
  {
  die('Failed to connect to MySQL: ' . mysqli_connect_error());
  }
 
// update data in mysql database
$username=$_GET['username'];
$sql="DELETE from users  WHERE username='$username'";
$result=mysqli_query($con, $sql);

// if successfully updated.
if($result){
echo "Successful Delete the Record";
echo "<BR>";
echo "<a href='viewImage.php'>View result</a>&nbsp; &nbsp;&nbsp;&nbsp;  <a href = 'logout.php'>Sign Out</a>";
}

else {
echo "ERROR";
}

?> 