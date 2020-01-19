<?php

if(isset($_POST['submit'])){    
// create connection to the database
$con = mysqli_connect("localhost", "root", "","greenwave");}
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
     
 $slip = rand(1000,100000)."-".$_FILES['slip']['name'];
    $file_loc = $_FILES['slip']['tmp_name'];
 $file_size = $_FILES['slip']['size'];
 $file_type = $_FILES['slip']['type'];
 $folder="donations/";
 
 move_uploaded_file($file_loc,$folder.$slip);
 //query the database table
 $sql="INSERT INTO donations(slip,username,date,email,description,price) 
 VALUES('$slip','$_POST[username]','$_POST[date]','$_POST[email]','$_POST[description]','$_POST[price]')";

 if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);  
?>

<br><br>
<button onclick="myFunction()">Back to service page</button>

<script>
function myFunction() {
  window.open("our_Services.HTML");
}
</script>