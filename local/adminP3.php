<?php
include 'dbh.php';
$sql= "SELECT * FROM resturant";
$result=mysqli_query($conn,$sql);
$check=mysqli_num_rows($result);
/*
if($check>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo $row["ResID"];
		echo $row["ResName"];
		echo "<br>";
	}
}
*/
?>

<html>
<head>
<title> Resturants-FoodHub </title> 
<link rel="stylesheet" type="text/css" href="style3.css"/>
</head>


<body>
<img src="logo.png" class="logo">

<div>
<p><a href="adminP1.php">Users</a><a href="adminP2.php">Comments</a><span class="notLink">Resturants</span><a href="adminP4.php">Items</a><a href="adminP6.php">Orders</a><a href="adminP5.php">Add</a> </p>
</div>

</br>

<hr/>

<div align="center">
<table class="list">
<?php
if($check>0)

{ 
	while($row=mysqli_fetch_assoc($result))
	{ ?>
<tr>
<td>
<form action="delete_res.php" method="post" style="font-family: Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Tahoma,sans-serif;" class="container">
<p class="lis"><input type="radio" name="res" value="<?php echo $row["ResID"];?>"/><?php echo $row["ResID"];?> Name: <?php echo $row["ResName"]; ?>   <input type="submit" name="delete" value="delete"/></form></p>
</td>
</tr>
<?php 
} 

}
 ?>
</table>
</div>

<form action="admin_logout.php">
<button class="btn">
  LOGOUT
</button>

</body>
</html>