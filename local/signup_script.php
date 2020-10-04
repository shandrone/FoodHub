<?php 
session_start();
include 'dbh.php';
$UserName=$_POST['name'];
$UserEmail=$_POST['email'];
$UserPass=$_POST['password'];
$UserTel=$_POST['tel'];
$Address=$_POST['address'];

//CHECKING EMPTY FIELDS


if(empty($UserName))
{
	header('Location: signup.php?error=empty');
	exit();
}
if(empty($UserEmail))
{
	header('Location: signup.php?error=empty');
	exit();
}
if(empty($UserPass))
{
	header('Location: signup.php?error=empty');
	exit();
}
if(empty($UserTel))
{
	header('Location: signup.php?error=empty');
	exit();
}
if(empty($Address))
{
	header('Location: signup.php?error=empty');
	exit();
}





else{	

//Checking duplicate EMAIl

$sql="SELECT UserEmail FROM user where UserEmail='$UserEmail'";
$result=mysqli_query($conn,$sql);
$emailcheck=mysqli_num_rows($result);
if($emailcheck> 0)
{

header('Location: signup.php?error=UserEmail');
	exit();


}

else{
//Inserting values in Database table USER

$sql = "INSERT INTO user(UserName,UserEmail,UserPass,UserPhone,UserAddress)
VALUES ('$UserName','$UserEmail','$UserPass','$UserTel','$Address')";
$result=mysqli_query($conn,$sql);
header('Location: success.php');
}
}
?>