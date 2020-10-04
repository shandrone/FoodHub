<?php
include 'dbh.php';
$cid=$_POST['com'];
$sql="DELETE FROM comments WHERE ComID='$cid'";
$result=mysqli_query($conn,$sql);
header('Location:adminP2.php');
//echo $uid;
?>