<?php 
session_start();
include 'dbh.php';
$ItemName=$_POST['name'];
$ItemPrice=$_POST['price'];
$ResName=$_POST['resname'];
$sql = "SELECT ResID from resturant WHERE ResName='$ResName'";
$result=mysqli_query($conn,$sql);
$loccheck=mysqli_num_rows($result);
if($loccheck>0)
{
while($row=mysqli_fetch_assoc($result))
{
	$Res=$row["ResID"];
}

}


//CHECKING EMPTY FIELDS


if(empty($ItemName))
{
	header('Location: adminitem.php?error=empty');
	exit();
}

if(empty($ItemPrice))
{
	header('Location: adminitem.php?error=empty');
	exit();
}
if(empty($ResName))
{
	header('Location: adminitem.php?error=empty');
	exit();
}




else{	

//Checking duplicate Restaurant

$sql="SELECT ItemNamw FROM item where ItemName='$ItemName'"; 
$result=mysqli_query($conn,$sql);
$rescheck=mysqli_num_rows($result);
if($rescheck> 0)
{

header('Location: adminitem.php?error=ResName');
	exit();


}


//Inserting values in Database table USER
else {
$sql1 = "INSERT INTO item(ItemName,ResID,Price)
VALUES ('$ItemName','$Res','$ItemPrice')";
$result=mysqli_query($conn,$sql1);

header('Location: adminitem_success.php');
}
}

?>