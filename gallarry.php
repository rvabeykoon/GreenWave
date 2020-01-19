<html>

<head>
<title>Users for admins</title>
</head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #255B5C;
  border-radius: 12px;

}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  size: 156px;
  text-align: center;
  padding: 20px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #DBAA4B;
}
.button {
  background-color:#255B5C;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
}
.button:hover {
  background-color: #DBAA4B;
/*..................................................................*/

* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}

 
}

</style>

<body bgcolor="#339966" style="font-family:Lucida Sans Unicode;">

<div align="center">
		<table>
			<a href="eco_tips.html"><p>Back To Eco Tips</p></a>

		</table>	
	
		<table bgcolor="#F5E4F6 " width="800">
		<table>
    <tr><tr >
      <td valign="top" align="center" bgcolor="#ff0088"><b><font size="4" color="#FFFFFF">&nbsp;ID</font></b></td>
    <td valign="top" align="center" bgcolor="#ff0088"><b><font size="4" color="#FFFFFF">&nbsp;Photo</font></b></td>
    <td valign="top" align="center" bgcolor="#ff0088"><b><font size="4" color="#FFFFFF">&nbsp;Username</font></b></td>
  <td valign="top" align="center" bgcolor="#ff0088"><b><font size="4" color="#FFFFFF">&nbsp;Date added</font></b></td>
  <td valign="top" align="center" bgcolor="#ff0088"><b><font size="4" color="#FFFFFF">&nbsp;Description</font></b></td>
    <td valign="top" align="center" bgcolor="#ff0088"><b><font size="4" color="#FFFFFF">&nbsp;</font></b></td>
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
    <td><?php echo $row['description'] ?></td>
        </tr>
        <?php
 }
 // Close connection
  mysqli_close($con);
 ?> </tr>
		
	</table>
</div>

</body>

</html>