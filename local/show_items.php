
<?php
include 'dbh.php';
$Onum=$_POST['Onum'];
$sql= "SELECT item.ItemName, ordereditems.Quantity, resturant.ResName FROM ordereditems INNER JOIN
item ON ordereditems.ItemID=item.ItemID INNER JOIN resturant ON item.ResID=
resturant.ResID WHERE OrderNum='$Onum'";
$result=mysqli_query($conn,$sql);
$check=mysqli_num_rows($result);

?>


<html>
<head>
<title> Resturants-FoodHub </title> 
<link rel="stylesheet" type="text/css" href="style3.css"/>
</head>


<body>
<img src="logo.png" class="logo">


</br>

<hr/>

<div align="center">
<table class="list">
<?php
if($check>0)
{
  while($row=mysqli_fetch_assoc($result))
  { ?>
<tr>
<td>
<p class="lis"> ItemName: <?php echo $row["ItemName"]; ?> Quantity: <?php echo $row["Quantity"]; ?> Resturant Name: <?php echo $row["ResName"]; ?></p>
</td>
</tr>
<?php } 
} ?>

</table>
</div>

<form action="admin_logout.php">
<button>
  LOGOUT
</button>

</body>
</html>