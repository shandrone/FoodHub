<?php
include 'dbh.php';
session_start();
if(isset($_SESSION['UserID']))
{
$uid=$_SESSION['UserID'];
}
$address=$_POST['pass'];
$sql="UPDATE user SET UserPass='$address' WHERE UserID='$uid' ";
$result=mysqli_query($conn,$sql);
header('Location:update.php');
?>