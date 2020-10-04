<?php
include 'dbh.php';
$rid=$_POST['res'];
$sql="DELETE FROM resturant WHERE ResID='$rid'";
$result=mysqli_query($conn,$sql);
header('Location:adminP3.php');

?>
