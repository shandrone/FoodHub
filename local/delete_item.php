<?php
include 'dbh.php';
$iid=$_POST['item'];
$sql="DELETE FROM item WHERE ItemID='$iid'";
$result=mysqli_query($conn,$sql);
header('Location:adminP4.php');

?>
