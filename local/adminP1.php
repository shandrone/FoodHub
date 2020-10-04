
<?php
include 'dbh.php';
$sql="SELECT * FROM user";
$result=mysqli_query($conn,$sql);
$check=mysqli_num_rows($result);
/*
if($check>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo $row["UserName"]." ";
		echo $row["UserID"]." ";
		echo $row["UserEmail"]." ";
		echo "<br>";
	}
}
*/
?>

<html>
<head>
<title> Users-FoodHub </title> 
<link rel="stylesheet" type="text/css" href="style3.css"/>

<style type="text/css">
   
</style>
</head>


<body>

<img src="logo.png" class="logo">

<div>
<p><span class="notLink">Users</span><a href="adminP2.php">Comments</a><a href="adminP3.php">Resturants</a><a href="adminP4.php">Items</a><a href="adminP6.php">Orders</a><a href="adminP5.php">Add</a>  </p>

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
<form action="delete_user.php" method="post" class="container" style="font-family: Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Tahoma,sans-serif;">
<p class="lis"><input type="radio" name="id" value="<?php echo $row["UserID"];?>"/>Name:<?php echo $row["UserName"]." ";?><br> ID:<?php echo $row["UserID"]." ";?><br> Email: <?php echo $row["UserEmail"]." ";?><input type="submit" name="delete" value="delete"/></p>
</form>
</td>
</tr> 
<?php } 
} ?>

</table>
</div>
<form action="admin_logout.php">
<button class="btn">
  LOGOUT
</button>

</body>
</html>