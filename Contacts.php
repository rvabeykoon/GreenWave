<?php
$link = mysqli_connect("localhost", "root", "", "greenwave");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$date = mysqli_real_escape_string($link, $_REQUEST['date']);
$msg = mysqli_real_escape_string($link, $_REQUEST['msg']);

  

$sql = "INSERT INTO contacts (firstname, lastname, email,date,msg) VALUES ('$firstname', '$lastname', '$email','$date','$msg')";

         if(mysqli_query($link, $sql))
            {    echo "Records added successfully.";}
    else{
    echo "ERROR: Could not able to execute $sql." . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

     
    /* if (!empty($username)) {
        $username_query = mysqli_query("SELECT *
                                       FROM users
                                       WHERE username = '$username'");
        $count=mysqli_num_rows( $username_query);
        if($count!=0)
    echo "<script>alert('Username $username already exits in our database. Please try with Another!')</script>";
    } */
    ?>


    <br><br>
<button onclick="myFunction()">Back to Home</button>

<script>
function myFunction() {
  window.open("home.html");
}
</script>

