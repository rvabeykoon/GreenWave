<?php
   $con=mysqli_connect("localhost","root","","greenwave"); //Create connection
   session_start();
   
  

if (mysqli_connect_errno())    // Check connection
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,"SELECT * FROM users");

?>
<!-- create table to show the results -->
<table cellpadding="0" cellspacing="0" width="843" height="450" align="center" border="1">
	<tr>
		<td valign="top" align="center" bgcolor="#008000"><b>
		<font size="5" color="#FFFFFF">Your Logo</font></b></td>
		<td valign="top" align="left" colspan="5" height="75" bgcolor="#008000"><b>
		<font size="5" color="#FFFFFF"><img src="./uploads/banner.png"></font></b></td>
	</tr>
	<tr>
		<td valign="top" align="center" colspan="3" height="50" bgcolor="#C0C0C0">
		<p align="left"><b>&nbsp;<a href="./index.php">HOME</a>&nbsp; |&nbsp;
		<a href="./uploadform.php">REGISTER</a>&nbsp;&nbsp; |&nbsp; 
		<a href="./viewImage.php">VIEW</a>&nbsp;&nbsp; |&nbsp;
		<a href="./update_delete.php">ADMIN</a>&nbsp;&nbsp; |&nbsp; 		
		<a href="./search.php">SEARCH 1</a>&nbsp;&nbsp; |&nbsp;
		<a href="./search3.php">SEARCH 2</a></b></td>
	</tr>
	<tr>
	
<td colspan="5" ><strong>List data from Database table </strong> </td>
</tr>

<tr >
<td align="center"><strong>Username</strong></td>
<td align="center"><strong>E-mail</strong></td>
<td align="center"><strong>First name</strong></td>
<td align="center"><strong>Last name</strong></td>
<td align="center"><strong>Update</strong></td>
<td align="center"><strong>Delete</strong></td>
</tr>

<?php
while($rows=mysqli_fetch_array($result)){
?>

<tr>
<td align="center"><?php echo $rows['username']; ?></td>
<td align="center"><?php echo $rows['email']; ?></td>
<td align="center"><?php echo $rows['firstname']; ?></td>
<td align="center"><?php echo $rows['lastname']; ?></td>
<td align="center"><?php echo $rows['password']; ?></td>

<!-- link to update.php and send value of id -->
<td align="center"><a href="update22.php?username=<?php echo $rows['username']; ?>">update</a></td>

<!-- link to delete.php and send value of id -->
<td align="center"><a href="delete.php?usernme=<?php echo $rows['username']; ?>" onclick="return confirm('Are you sure to delete this Record?');"> Delete</a></td>
</tr>
<?php
}
?>

</table>
</td>
</tr>
</table>
<br><a href="./index.php"> Home page </a> | <a href = "logout.php">log Out</a><br>
<?php
mysqli_close($con);
?>