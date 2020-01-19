<?php
$link = mysqli_connect("localhost", "root", "", "greenwave");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$lastname = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$bday = mysqli_real_escape_string($link, $_REQUEST['bday']);  
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$cpassword = mysqli_real_escape_string($link, $_REQUEST['cpassword']);


     if($firstname==''){
     echo "<script>alert('Please enter First name')
     </script>";
    exit();
    }
    if($username==''){
     echo "<script>alert('Please enter Username')
     </script>";
    exit();    
    }

    if($lastname==''){
     echo "<script>alert('Please enter Last name')
     </script>";
    exit();
    }

    if($email==''){
     echo "<script>alert('Please enter E-mail')
     </script>";
    exit();
    }

    if($password=='' and strlen($password) < 8 ){
     echo "<script>alert('Please enter Password')</script>";
    exit();
    }

    if($cpassword==''){
     echo "<script>alert('Please enter Confirm Password')
     </script>";
    }

    if($password != $cpassword){
       echo "<script>alert('passwords doesn't match')</script>";
    }

   

$sql = "INSERT INTO users (firstname, lastname, email,username,password,bday,gender) VALUES ('$firstname', '$lastname', '$email','$username','$password','$bday','$gender')";

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
<button onclick="myFunction()">Back to login page</button>

<script>
function myFunction() {
  window.open("index.html");
}
</script>

   <br><br>
<button onclick="aFunction()">Back to register page</button>

<script>
function aFunction() {
  window.open("signup.html");
}
</script>