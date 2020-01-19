<?php
  // create connection to the database
$con = mysqli_connect("localhost", "root", "","greenwave");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
 $sql="SELECT * FROM photos ORDER BY date ";
 $result_set=mysqli_query($con,$sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
        <td align="center"><?php echo $row['photo'] ?></td>
        <td align="left">
    <img src="uploads/<?php echo $row['photo'] ?>" 
        alt=" "
    style="width:200px;"></a>
  <div> <br><?php echo $row['username'] ?> <br> <?php echo $row['date'] ?> <br> <?php echo $row['description'] ?></div></td>
        </tr>
        <?php

 }
 // Close connection
  mysqli_close($con);
 ?>