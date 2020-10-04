<?php
include 'dbh.php';
$sql="SELECT user.UserName, comments.ComID , comments.Com, comments.date FROM comments INNER JOIN user ON comments.UID=user.UserID";
$result=mysqli_query($conn,$sql);
$check=mysqli_num_rows($result);
/*
if($check>0)
{
	while($row=mysqli_fetch_assoc($result))
	{   
	
		echo $row["UserName"]." ";
		echo $row["Com"]." ";
		echo $row["ComID"]." ";
		echo $row["date"]." ";
        echo "<br>";
	}
}
*/
/*
$sql="SELECT * FROM comments";
$result=mysqli_query($conn,$sql);
$check=mysqli_num_rows($result);

if($check>0)
{
	while($row=mysqli_fetch_assoc($result))
	{   
		$uid= $row["UID"];
		echo $row["UID"]." ";
		echo $row["Com"]." ";
		echo $row["ComID"]." ";
		echo $row["date"]." ";

	}
}
$sql1="SELECT UserName from user WHERE UserID='$uid'";
$result1=mysqli_query($conn,$sql1);
$check1=mysqli_num_rows($result1);
if($check1>0)
{
	while($row=mysqli_fetch_array($result1))
	{  
		echo $row["UserName"];
	}
}
*/
?>


<html>
<head>
<title> comment-FoodHub </title> 
<link rel="stylesheet" type="text/css" href="style3.css"/>
</head>


<body>
<img src="logo.png" class="logo">

<div>
<p><a href="adminP1.php">Users</a><span class="notLink">Comments</span><a href="adminP3.php">Resturants</a><a href="adminP4.php">Items</a><a href="adminP6.php">Orders</a><a href="adminP5.php">Add</a>  </p>
</div>

</br>

<hr/>

<div align="center">
<table class="list">
<?php
if($check>0)
{
	while($row=mysqli_fetch_assoc($result))
	{  ?> 
<tr>
<td>
<form action="delete_comment.php" method="post" class="containerr" style="font-family: Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Tahoma,sans-serif;">
<p class="lis"><input type="radio" name="com" value="<?php echo $row["ComID"];?> "/> <?php echo $row["ComID"]." "; ?> Name: <?php echo $row["UserName"]." "; ?><br>   COMMENT: <?php echo $row["Com"]." "; ?> <input type="submit" name="delete" value="delete"/></form></p>
</td>
</tr>
<?php 
} 

}
 ?>
</table>
</div>
<form action="admin_logout.php">
<button class="btn">
  LOGOUT
</button>
</body>
</html>