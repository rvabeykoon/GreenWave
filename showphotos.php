<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 1</title>
</head>

<body>

<div align="center">
	<table cellpadding="0" cellspacing="0" width="1052" height="919">
		<!-- MSTableType="layout" -->
		<div align="center"><tr></tr>
	<table cellpadding="0" cellspacing="0" width="1000" height="919">
			<!-- MSCellType="empty" -->
			<tr >
    <td valign="top" align="center" bgcolor="#ff0088"><b><font size="4" color="#FFFFFF">&nbsp;Name</font></b></td>
    <td valign="top" align="center" bgcolor="#ff0088"><b><font size="4" color="#FFFFFF">&nbsp;Username</font></b></td>
	<td valign="top" align="center" bgcolor="#ff0088"><b><font size="4" color="#FFFFFF">&nbsp;Gender</font></b></td>
	<td valign="top" align="center" bgcolor="#ff0088"><b><font size="4" color="#FFFFFF">&nbsp;Birthday</font></b></td>
    <td valign="top" align="center" bgcolor="#ff0088"><b><font size="4" color="#FFFFFF">&nbsp;Email</font></b></td>
    </tr>
    <?php
	// create connection to the database
$con = mysqli_connect("localhost", "root", "","greenwave");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
 $sql="SELECT * FROM photos ORDER BY id ";
 $result_set=mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
        <td align="center"><?php echo $row['id'] ?></td>
		<td align="center"> <a href="uploads/<?php echo $row['photo'] ?>" >
		<img src="uploads/<?php echo $row['photo'] ?>" alt=" " style="width:300px; height: 200px"></a></td>
        <td><?php echo $row['username'] ?></td>
		<td><?php echo $row['date'] ?></td>
		<td><?php echo $row['description'] ?></td><br>
        </tr>
        <?php
 }
 // Close connection
	mysqli_close($con);
 ?>	</tr>
	</table>
</div>

</body>

</html>
