
<?php
session_start();
include 'dbh.php';
date_default_timezone_set('Asia/Dhaka');
if(isset($_SESSION['UserID']))
{
$id=$_SESSION['UserID'];
}
?>


<?php
if(isset($_POST["SubmitComment"]))
{
$comment=$_POST['message'];
$date= date('Y-m-d H:i:s');
$sql = "INSERT INTO comments(Com,date,uid) VALUES ('$comment','$date','$id')";
$result=mysqli_query($conn,$sql);
header("Location:comicomi.php");
}
?>

<?php
$sql="SELECT user.UserName, comments.Com, comments.date FROM comments INNER JOIN user ON comments.UID=user.UserID";
$result=mysqli_query($conn,$sql);
$loccheck=mysqli_num_rows($result);
?>



<html>
<head>
<title> Login-FoodHub </title> 

<link rel="stylesheet" type="text/css" href="style1.css"/>

<style type="text/css">
body{background-image:url(coffee.jpg)}
.back{  background-color:rgba(0, 204, 204,0.2);margin-left:15%;margin-right:15%}

input{
    border:1px solid black;
	height:45px;
	width: 300px;
	font-size:18px;
	margin-top: 50px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 30px;
}	


.btn-enter{
	padding: 15px; 
	color: #fff;
	border-radius: 4px;
	border:2px solid gray;
	background-color: rgb(0, 128, 128);
	margin-bottom: 16px;
	font-size: 20px;
	font-weight: bold;
	font-family:tahoma;
}

h1{color:white;
 margin-bottom:70px;
  margin-left:30px;
  margin-right:30px}
  

</style>
    
</head>
<body> 

<img src="logo.png" class="logo">



<div class="back">
<p><h1> DROP YOUR COMMENTS HERE</h1></p>
<form action="comicomi.php" method="POST">
<textarea style="resize:none" rows="10" cols="50" name="message"></textarea></br>
<input type="submit" name = "SubmitComment" value="Submit Comment" class="btn-enter"/>
</form>

<?php
if($loccheck> 0)
{   ?>
<table align="center" cellspacing="10">

<?php
  while ($row=mysqli_fetch_assoc($result))
  { ?>
  	<tr>
  	 <td>
  <strong> <?php echo  $row['UserName']; ?> </strong>
   </br>
  <?php echo $row['Com']; ?>
  </br>
   <?php echo $row['date']; ?> </td>
   </tr>
<?php } ?>

</table>
<?php }
?>



</div>

<div class="footer">
<table align="center" cellspacing="100" >
<tr>
<td><a href="home.php">HOME </a> </td>
<td><a href="about_us.php"> ABOUT US </a> </td>
<td><a href="contact_us.php">CONTACT US </a></td>
</tr>
</table>
 </div>

<form action="logout.php">
<button class="t">
  LOGOUT
</button>
</form>
</body>
</html>