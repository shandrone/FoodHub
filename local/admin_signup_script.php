<?php 
session_start();
include 'dbh.php';
$UserName=$_POST['name'];
$AdminEmail=$_POST['email'];
$UserPass=$_POST['password'];


//CHECKING EMPTY FIELDS


if(empty($UserName))
{
	header('Location: admin_signup.php?error=empty');
	exit();
}
if(empty($AdminEmail))
{
	header('Location: admin_signup.php?error=empty');
	exit();
}
if(empty($UserPass))
{
	header('Location: admin_signup.php?error=empty');
	exit();
}





else{	

//Checking duplicate EMAIl

$sql="SELECT AdminEmail FROM admin where AdminEmail='$AdminEmail'";
$result=mysqli_query($conn,$sql);
$emailcheck=mysqli_num_rows($result);
if($emailcheck> 0)
{

header('Location: admin_signup.php?error=AdminEmail');
	exit();


}

else{
//Inserting values in Database table USER

$sql = "INSERT INTO admin(AdminName,AdminEmail,AdminPass)
VALUES ('$UserName','$AdminEmail','$UserPass')";
$result=mysqli_query($conn,$sql);
header('Location: admin_login.php');
}
}
?>