<?php
  if(isset($_POST['submit'])){
  $name=$_POST['name'];
  
   // check if name only contains letters and whitespace
  if(preg_match("/^[  a-zA-Z]+/", $name)){
  
  //remove the php injections
$name=mysql_real_escape_string($name);

// create connection to the database
$con = mysqli_connect("localhost", "any", "","company");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
  //query the database table
  $sql="SELECT  * FROM employee WHERE efname LIKE '%" . $name .  "%' OR elname LIKE '%" . $name ."%' ";
 
  //run the query against the mysql query function
  $result=mysqli_query($con,$sql);
  
  //create while loop and loop through result set
while($row=mysqli_fetch_array($result)){
          $FName  =$row['efname'];
          $LName=$row['elname'];
          $ID=$row['id'];
		  
  //display the result of the array
  echo "<ul>\n";
  echo "<li>" . "<a  href=\"viewsearchid.php?id=$ID\">"   .$FName . " " . $LName .  "</a></li>\n";
  echo "</ul>";
  }
  }
  else{
  echo  "<p>No Results, Please enter a search string</p>";
  }
  }

?> 