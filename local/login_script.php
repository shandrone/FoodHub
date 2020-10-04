<?php
session_start();
include 'dbh.php';
$UserEmail=$_POST['email'];
$UserPass=$_POST['password'];
$sql="SELECT * FROM user WHERE UserEmail='$UserEmail' AND UserPass='$UserPass'";
$result=mysqli_query($conn,$sql);
if(!$row=mysqli_fetch_assoc($result))
{
	
	$_SESSION['errMsg']="Invalid ID or Password;Try Again";
	header('Location: login.php');
	
}
else
{
$_SESSION['UserID']= $row['UserID'];

	header('Location: location.php');
}


?>