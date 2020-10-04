<?php
session_start();
include 'dbh.php';
$UserEmail=$_GET['email'];
$UserPass=$_GET['password'];
$sql="SELECT * FROM admin WHERE AdminEmail='$UserEmail' AND AdminPass='$UserPass'";
$result=mysqli_query($conn,$sql);
//User Retrive 

//login chck
if(!$row=mysqli_fetch_assoc($result))
{
	
	$_SESSION['errMsg']="Invalid ID or Password;Try Again";
	header('Location: admin_login.php');
	
}
else
{
$_SESSION['AdminID']= $row['AdminID'];

	header('Location: adminP1.php');
}



?>