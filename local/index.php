<?php
session_start();
include 'dbh.php';

$ResID=$_GET['res'];
$sql1="SELECT * FROM item WHERE ResID='$ResID' ORDER BY ItemName";
$result1=mysqli_query($conn,$sql1);

//images
$sql2="SELECT img FROM resturant WHERE ResID='$ResID'";
$result2=mysqli_query($conn,$sql2);
$loccheck2=mysqli_num_rows($result2);
$uid=$_SESSION['UserID'];

?>

<html>
<head>
<title> Resturants </title> 
<link href="style1.css" rel="stylesheet" type="text/css"></link>
<style type="text/css">
.t{background-color:rgb(255, 218, 185); align:center; margin:16 auto}
.t2{background-color:white; align:center; margin:16 auto}
.im{border:2px solid green; margin:16px}
.rate{background-color:rgba(0, 51, 102,0.5);
font-size: 50px;
           width: 300px;
		   text-align:center;
		   margin: 0 auto; 
		   color:white}
</style>
</head>

<body>
<img src="logo.png" class="logo"/>

</br>


<?php
if($loccheck2>0)

{
while($row=mysqli_fetch_assoc($result2))
{
 echo "<img src=" .$row["img"].  "height='200px' width='200px' class='im'/>";
}
} 
//rating
?>

<form action ="rating_script.php" method="POST">
	<input type ="number" name ="rate" value="1" min ="1" max ="5"  >



</br>
<input type="hidden" name="R" value="<?php echo $ResID; ?>"> 
<input type="submit" name="submit" value="Rate Us" class="btn">
</form>


<center><div class="rate">
<?php

$sqlr="SELECT avg(Rate) as ratt from rating WHERE ResID='$ResID'";

$resultr=mysqli_query($conn,$sqlr);


$loccheckr=mysqli_num_rows($resultr);

if($loccheckr>0)

{

while($row=mysqli_fetch_assoc($resultr))
{
	$fing=$row["ratt"];
}
echo $fing;
}

?>
</div></center>





<table cellpadding="2" cellspacing="2" border="1" class="t">
<tr>
<th>Name</th>
<th>Price </th>
<th colspan="2">Choose</br>Quantity</th>
<th></th>
</tr>
<?php 
while($item = mysqli_fetch_object($result1)){ ?>
<tr>
<td><?php echo $item->ItemName; ?></td>
<td><?php echo $item->Price; ?>Tk</td>
<form action="add.php" method="post">
<td><input type="number" name="quantity"/></td>
<input type="hidden" name="id" value="<?php echo $item->ItemID; ?>" />
<input type="hidden" name="res" value="<?php echo $ResID; ?>" />
<td>
<input type="submit" name="add" value="Add"/ class="btnn">
</td>
</form>
</tr>
<?php } ?>
</table>



<?php
$sqlmax="SELECT max(OrderNum) as max FROM orders";
$resultmax=mysqli_query($conn,$sqlmax);
$check=mysqli_num_rows($resultmax);
if($check>0)
{
	while($row=mysqli_fetch_assoc($resultmax))
	{
		$Onum=$row["max"];
	}
	
}
$sqlorder="SELECT ordereditems.Quantity, item.ItemName, item.Price FROM item INNER JOIN ordereditems on item.ItemID=ordereditems.ItemID where OrderNum='$Onum'";
$resultorder=mysqli_query($conn,$sqlorder);
$checkorder=mysqli_num_rows($resultorder);

		
	


if($checkorder>0)
{?>
<table>
<h1>MY CART</h1>
<table cellpadding="2" cellspacing="2" border="2" class="t2">
<tr>
<th>Item Ordered</th>
<th>Quantity</th>
<th>cost</th>
<th>REMOVE</th>
</tr>
<!--loop here-->
<?php
while($row=mysqli_fetch_assoc($resultorder))
	{ ?>
<tr>
<td><?php echo $row["ItemName"]; ?></td>
<td><?php echo $row["Quantity"]; ?></td>
<td><?php echo ($row["Price"]*$row["Quantity"]); ?></td>
<td><form action="index.php" method="post"><input type="submit" name="delete" value="X" /></form></td>
</tr>
	<?php } ?>
<!--ends here-->
<tr>
<td colspan="2"><h5>Delivery Charge</h5></td>
<td colspan="2">Tk</td>
</tr>
<tr>
<td colspan="2"><h5>sub-total</h5></td>
<td colspan="2">Tk</td>
</tr>
<tr>
<td colspan="2"><h5>Total</h5></td>
<td colspan="2">Tk</td>
</tr>
</table>
<?php } ?>

<button>
  <a href="thanks.php"><h3>Confirm Order</h3></a>
</button>

<div class="footer">
<table align="center" cellspacing="100" >
<tr>
<td><a href="home.php">HOME </a> </td>
<td><a href="about_us.php"> ABOUT US </a> </td>
<td><a href="contact_us.php">CONTACT US </a></td>
<td><a href="login.php">COMMENT</a> </td>
</tr>
</table>
 </div>
 
 
 <form action="logout.php">
<button class="btn">
  LOGOUT
</button>
</form>

 
</body>
</html>
