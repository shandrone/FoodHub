
<?php
include 'dbh.php';
$sql= "SELECT user.UserName, orders.OrderNum, address.House, address.Road, address.Area FROM address INNER JOIN orders ON address.OrderNum=orders.OrderNum INNER JOIN user ON orders.UserID=user.UserID ORDER BY OrderNum";
$result=mysqli_query($conn,$sql);
$check=mysqli_num_rows($result);
/*
if($check>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo $row["ResName"];
		echo "Item Name : ,".$row["ItemName"];
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
<p><a href="adminP1.php">Users</a><a href="adminP2.php">Comments</a><a href="adminP3.php">Resturants</a><a href="adminP4.php">Items</a>
<span class="notLink">Orders</span><a href="adminP5.php">Add</a> </p>
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
<form action="delete_order.php" method="post"style="font-family: Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Tahoma,sans-serif;" class="containerr">
<p class="lis"><input type="radio" name="order" value="<?php echo $row["OrderNum"];?>"/> <?php echo $row["OrderNum"];?>. <?php echo $row["UserName"];?><br> Address: House-<?php echo $row["House"]; ?> ,Road Number#<?php echo $row["Road"]; ?>, <?php echo $row["Area"]; ?><input type="submit" name="delete" value="delete"/></form>
<form action="show_items.php" method="post"> 
<input type="hidden" name="Onum" value="<?php echo $row["OrderNum"];?>" >
<center><input type="submit" name="items" value="Show Items"/> </center>
</form>
</p>
</td>
</tr>
<?php } 
} ?>

</table>
</div>

<form action="admin_logout.php">
<button>
  LOGOUT
</button>

</body>
</html>