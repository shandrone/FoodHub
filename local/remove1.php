<?php
session_start();
include 'dbh.php';

//info from cart1
$id=$_POST['id'];
$resid=$_POST['res'];
$p=$_POST['p'];
if(isset($_SESSION['UserID']))
{
$uid=$_SESSION['UserID'];
}



$removesql="DELETE FROM cart WHERE UserID='$uid' AND ItemID='$id'";
$removeresult=mysqli_query($conn,$removesql);
header("Location:cart1.php?res=$resid&p=$p");


?>