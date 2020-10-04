<?php
include 'dbh.php';
$Onum=$_POST['order'];


$sql1="DELETE FROM address WHERE OrderNum='$Onum'";
$result1=mysqli_query($conn,$sql1);

$sql2="DELETE FROM ordereditems WHERE OrderNum='$Onum'";
$result2=mysqli_query($conn,$sql2);

$sql3="DELETE FROM orders WHERE OrderNum='$Onum'";
$result3=mysqli_query($conn,$sql3);

header('Location:adminP6.php');



?>
