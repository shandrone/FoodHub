<?php 
session_start();
include 'dbh.php';
if(isset($_SESSION['UserID']))
{
$uid=$_SESSION['UserID'];
}

$house=$_POST['house'];
$road=$_POST['road'];
$area=$_POST['area'];

//empty field checking


if(empty($house))
{
	header('Location: address.php?error=empty');
	exit();
}
if(empty($road))
{
	header('Location: address.php?error=empty');
	exit();
}
if(empty($area))
{
	header('Location: address.php?error=empty');
	exit();
}


else
{
//adding order number-by inserting user id
$sql1="INSERT INTO orders(UserID) VALUES ('$uid')";
$result1=mysqli_query($conn,$sql1);



//fetching order number
$sqlo="SELECT max(OrderNum) as max FROM orders WHERE UserID='$uid'";
$resulto=mysqli_query($conn,$sqlo);
$counto=mysqli_num_rows($resulto);
if($counto>0)
{
	while($row=mysqli_fetch_assoc($resulto))
	{
		$Onum=$row["max"];
	}
	
}


//inserting data into ordereditems
$sqlins="INSERT INTO ordereditems (OrderNum, ItemID, Quantity) SELECT '$Onum', ItemID, Quantity FROM cart WHERE UserID='$uid'";
$resultins=mysqli_query($conn,$sqlins);





//emptying cart
$sqldel="DELETE FROM cart WHERE UserID='$uid'";
$resultdel=mysqli_query($conn,$sqldel);




//entering delivery address
$sqld="INSERT INTO address(OrderNum, House, Road, Area) VALUES ('$Onum', '$house', '$road', '$area')";
$resultd=mysqli_query($conn,$sqld);



header("Location:thanks.php");
}
?>