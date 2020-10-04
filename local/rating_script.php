<?php
include 'dbh.php';
$rate=$_POST['rate'];
//echo $_POST['R'];


$Res=$_POST['R'];
$p=$_POST['p'];
    
    $sql1 ="INSERT INTO rating (Rate,ResID) values ('$rate', '$Res')";
    $result=mysqli_query($conn,$sql1);
    header("Location:cart1.php?res=$Res&p=$p");


?>