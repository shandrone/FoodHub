<?php 
session_start();
include 'dbh.php';
$ResName=$_POST['name'];
$ResLocation=$_POST['location'];

$ResImg=$_POST['image'];





//CHECKING EMPTY FIELDS
/*

if(empty($ResName))
{
	header('Location: adminP5.php?error=empty');
	exit();
}
if(empty($ResLocation))
{
	header('Location: adminP5.php?error=empty');
	exit();
}
if(empty($ResRating))
{
	header('Location: adminP5.php?error=empty');
	exit();
}
if(empty($ResImg))
{
	header('Location: adminP5.php?error=empty');
	exit();
}




else{	

//Checking duplicate Restaurant

$sql="SELECT ResName FROM resturant where ResName='$ResName'"; 
$result=mysqli_query($conn,$sql);
$rescheck=mysqli_num_rows($result);
if($rescheck> 0)
{

header('Location: admin.php?error=ResName');
	exit();


}
else{
*/
//Inserting values in Database table res
$sql = "INSERT INTO resturant(ResName,Location,img)
VALUES ('$ResName','$ResLocation','\'$ResImg\'')";
$result=mysqli_query($conn,$sql);
//echo $ResName;
header('Location: adminsuccess.php');


?>