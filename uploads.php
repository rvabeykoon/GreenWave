<?php

if(isset($_POST['submit'])){    
// create connection to the database
$con = mysqli_connect("localhost", "root", "","greenwave");}
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
     
 $photo = rand(1000,100000)."-".$_FILES['photo']['name'];
    $file_loc = $_FILES['photo']['tmp_name'];
 $file_size = $_FILES['photo']['size'];
 $file_type = $_FILES['photo']['type'];
 $folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$photo);
 //query the database table
 $sql="INSERT INTO photos(photo,username,date,description) 
 VALUES('$photo','$_POST[username]','$_POST[date]','$_POST[description]')";

 if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);  
?>

<br><br>
<button onclick="myFunction()">Back to Home</button>

<script>
function myFunction() {
  window.open("home.HTML");
}
</script>