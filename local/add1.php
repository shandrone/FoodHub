<?php
session_start();
include 'dbh.php';

//info from cart1
$id=$_POST['id'];
$resid=$_POST['res'];
$p=$_POST['p'];
$quantity=$_POST['quantity'];
if(isset($_SESSION['UserID']))
{
$uid=$_SESSION['UserID'];
}


//retiving item price
$psql="SELECT Price FROM item WHERE ItemID='$id'";
$pres=mysqli_query($conn,$psql);
$pcount=mysqli_num_rows($pres);
if($pcount>0)
{
	while($row=mysqli_fetch_assoc($pres))
	{
		$price=$row["Price"];
	}
}




//adding to cart
$cost=$price*$quantity;
$addsql= "INSERT INTO cart(UserID,ItemID,Quantity,Cost) VALUES
('$uid','$id','$quantity','$cost')";
$addresult=mysqli_query($conn,$addsql);
header("Location:cart1.php?res=$resid&p=$p");
?>