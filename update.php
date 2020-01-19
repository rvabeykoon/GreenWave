<?php
$con=mysqli_connect("localhost","root","","greenwave"); //Create connection
   session_start();
if (!$con)  //Check connection  
  {
  die('Failed to connect to MySQL: ' . mysqli_connect_error());
  }




// Retrieve data from database
$sql="SELECT * FROM users WHERE username='$username'";
$result=mysqli_query($con, $sql);

$rows=mysqli_fetch_array($result);
?>


<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<form name="form1" method="post" action="update_ac22.php">
<td>
<table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>&nbsp;</td>
<td colspan="3"><strong>Update data in mysql</strong> </td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center"><strong>First Name</strong></td>
<td align="center"><strong>Last Name</strong></td>
<td align="center"><strong>User Name</strong></td>
<td align="center"><strong>E mail</strong></td>
<td align="center"><strong>password</strong></td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="center">
<input name="firstname" type="text" id="firstname" value="<?php echo $rows['firstname']; ?>">
</td>
<td align="center">
<input name="lastname" type="text" id="lastname" value="<?php echo $rows['lastname']; ?>" size="20">
</td>
<td>
<input name="username" type="text" id="username" value="<?php echo $rows['username']; ?>" size="20">
</td>
<td>
<input name="email" type="text" id="email" value="<?php echo $rows['email']; ?>" size="20">
</td>
<td>
<input name="password" type="password" id="password" value="<?php echo $rows['password']; ?>" size="20">
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="center">
<input type="submit" name="Submit" value="Update">
</td>
<td>&nbsp;</td>
</tr>
</table>
</td>
</form>
</tr>
</table>

<?php
// close connection
mysqli_close($con);
?>