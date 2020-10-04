
<?php
include 'dbh.php';
$sql= "SELECT resturant.ResName,item.ItemID,item.ItemName FROM item INNER JOIN resturant ON item.ResID=resturant.ResID ORDER BY ItemID" ;
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
<p><a href="adminP1.php">Users</a><a href="adminP2.php">Comments</a><a href="adminP3.php">Resturants</a><span class="notLink">Items</span><a href="adminP6.php">Orders</a><a href="adminP5.php">Add</a> </p>
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
<form action="delete_item.php" method="post" style="font-family: Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Tahoma,sans-serif;" class="containerrr">
<p class="lis"><input type="radio" name="item" value="<?php echo $row["ItemID"];?>"/><?php echo $row["ItemID"];?><br> ItemName: <?php echo $row["ItemName"]; ?><br> Resturant Name: <?php echo $row["ResName"]; ?><br><input type="submit" name="delete" value="delete"/></form></p>
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