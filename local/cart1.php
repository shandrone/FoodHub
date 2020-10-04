<?php
session_start();
include 'dbh.php';

//to display items
$ResID=$_GET['res'];
$sql1="SELECT * FROM item WHERE ResID='$ResID' ORDER BY ItemName";
$result1=mysqli_query($conn,$sql1);

//display items-sort by price
$ResID=$_GET['res'];
$sortsql="SELECT * FROM item WHERE ResID='$ResID' ORDER BY Price";
$sort=mysqli_query($conn,$sortsql); 


//to dislay image
$sql2="SELECT img FROM resturant WHERE ResID='$ResID'";
$result2=mysqli_query($conn,$sql2);
$loccheck2=mysqli_num_rows($result2);

//user id
if(isset($_SESSION['UserID']))
{
$uid=$_SESSION['UserID'];
}


?>


<html>
<!--design-->
<head>
<title> Resturants </title> 
<link href="style1.css" rel="stylesheet" type="text/css"></link>
<style type="text/css">
.t{
	background-color:rgb(255, 153, 102); align:center; margin:16 auto
	}
.t2{
	background-color:white; align:center; margin:16 auto
	}
.im{border:2px solid green; margin:16px}
.footer{ 
       position:relative;     
       align: center;    
       bottom: 0px; 
       width: 100%;
   } 
   .rate{background-color:rgba(0, 51, 102,0.5);
font-size: 30px;
           width: 300px;
		   text-align:center;
		   margin: 0 auto; 
		   color:white}
</style>
</head>




<body>
<!-- foodhub logo-->
<img src="logo.png" class="logo"/>
</br>
<?php
//displaying res-LOGO
if($loccheck2>0)
{
while($row=mysqli_fetch_assoc($result2))
{
 echo "<img src=" .$row["img"].  "height='200px' width='200px' class='im'/>";
}
} 
?>


<!-- input rating -->
<div>
<form action ="rating_script.php" method="POST">
	<input type ="number" name ="rate" value="1" min ="1" max ="5"/>
   <input type="hidden" name="R" value="<?php echo $ResID; ?>"/> 
   <input type="hidden" name="p" value="1">
    <input type="submit" name="RateUs" value="Rate-Us" />
</form>
<br/>
</div>


<?php
//displaying rating
$sqlr="SELECT avg(Rate) as ratt from rating WHERE ResID='$ResID'";
$resultr=mysqli_query($conn,$sqlr);
$loccheckr=mysqli_num_rows($resultr);
if($loccheckr>0)
{
while($row=mysqli_fetch_assoc($resultr))
{
	$rate=$row["ratt"];
}?>
<h3 class="rate"><?php echo $rate; ?> STARS<h3>
<?php

}
?>


<!-- displaying items -->
<table cellpadding="2" cellspacing="2" border="1" class="t">
<tr>
<th>Name</th>
<th>Price 
<br/>
<form action="cart1.php" method="GET"> 
<input type="hidden" name="res" value="<?php echo $ResID;?>"/>
<input type="hidden" name="p" value="2"/>
<button> SORT BY PRICE </button>
 </form>
</th>
<th colspan="2">Choose</br>Quantity</th>
<th></th>
</tr>
<?php 
if($_GET['p']==1)
{
while($item = mysqli_fetch_object($result1)){ ?>
<tr>
<td><?php echo $item->ItemName; ?></td>
<td><?php echo $item->Price; ?>Tk</td>
<form action="add1.php" method="post">
<td><input type="number" name="quantity"/></td>
<input type="hidden" name="id" value="<?php echo $item->ItemID; ?>" />
<input type="hidden" name="res" value="<?php echo $ResID; ?>" />
<td>
<input type="submit" name="add" value="Add" class="btnn" />
</td>
</form>
</tr>
<?php
 }
}
else 
{
	while($item = mysqli_fetch_object($sort)){ ?>
<tr>
<td><?php echo $item->ItemName; ?></td>
<td><?php echo $item->Price; ?>Tk</td>
<form action="add1.php" method="post">
<td><input type="number" name="quantity"/></td>
<input type="hidden" name="id" value="<?php echo $item->ItemID; ?>" />
<input type="hidden" name="res" value="<?php echo $ResID; ?>" />
<input type="hidden" name="p" value="1">
<td>
<input type="submit" name="add" value="Add" class="btnn"/>
</td>
</form>
</tr>
<?php
 }
}
 ?>

</table>


<?php
//fetching data for cart
$cartsql="SELECT cart.Quantity, cart.Cost, item.ItemName, item.ItemID, item.ResID FROM item INNER JOIN cart on item.ItemID=cart.ItemID WHERE UserID='$uid'";
$cartresult=mysqli_query($conn,$cartsql);
$cartcount=mysqli_num_rows($cartresult);
?>


<!-- display cart -->
<?php
if($cartcount>0)
{ ?>
<table>
<h1>MY CART</h1>
<table cellpadding="2" cellspacing="2" border="2" class="t2">
<tr>
<th>Item Ordered</th>
<th>Quantity</th>
<th>cost</th>
<th>REMOVE</th>
</tr>
<!--loop starts here-->
<?php
$subtotal=0;
$dcharge=0;
while($row=mysqli_fetch_assoc($cartresult))
	{  ?>
<tr>
<td><?php echo $row["ItemName"]; ?> </td>
<td><?php echo $row["Quantity"]; ?> </td>
<td><?php echo $row["Cost"]; ?> </td>
<td><form action="remove1.php" method="post">
<input type="hidden" name="id" value="<?php echo $row["ItemID"]; ?>" />
<input type="hidden" name="res" value="<?php echo $row["ResID"]; ?>" />
<input type="hidden" name="p" value="1">
<input type="submit" name="delete" value="X" />
</form></td>
</tr>
<?php 
$subtotal+=$row["Cost"];
} 
if($subtotal!=0)
$dcharge=60;
$total=$subtotal+$dcharge;
?>

<!--loop ends here-->
<tr>
<td colspan="2"><h5>Delivery Charge</h5></td>
<td colspan="2"><?php echo $dcharge; ?>Tk</td>
</tr>
<tr>
<td colspan="2"><h5>sub-total</h5></td>
<td colspan="2"><?php echo $subtotal; ?>Tk</td>
</tr>
<tr>
<td colspan="2"><h5>Total</h5></td>
<td colspan="2"><?php echo $total; ?>Tk</td>
</tr>
</table>


<!-- confirm button -->
<form action="address.php">
<button>
  <h3>Confirm Order</h3>
</button>
</form>
<?php } ?>

<!-- footer -->


<div class="footer">
<table align="center" cellspacing="100" >
<tr>
<td><a href="home.php">HOME </a> </td>
<td><a href="about_us.php"> ABOUT US </a> </td>
<td><a href="contact_us.php">CONTACT US </a></td>
</tr>
</table>
 </div>



<!-- logout button -->
<form action="logout.php">
<button class="btn">
  LOGOUT
</button>
</form>

 
</body>
</html>




































































