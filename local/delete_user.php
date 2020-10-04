<?php
include 'dbh.php';
$uid=$_POST['id'];
$sql="DELETE FROM user WHERE UserID='$uid'";
$result=mysqli_query($conn,$sql);
header('Location:adminP1.php');
//echo $uid;
?>