<?php
session_start();
?>

<html>
<head>
<title> Select Location </title> 

<link rel="stylesheet" type="text/css" href="style1.css"/>

<style type="text/css">
.loc{
    border:1px solid black;
	height:45px;
	width: 300px;
	font-size:18px;
	margin:20px;
	background-color: #fff;
	padding-left:30px;
}

p{
	color:white;
	margin: 16px;
	padding-top:25px;
	font-size: 50px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}	
	td{
		background-color:rgba(217,217,217,0.7)
	}

</style>

</head>

<body>

<img src="logo.png" class="logo">

<div class="container" style="background-color:rgba(68,114,19,0.5)">
<form action ="Resturants.php" method="GET">

<p>Select Your Location:</p>

<select name="loc" class="loc">
    <option style="font-size: 20px;" value="Baily Road">Baily Road</option>
	<option style="font-size: 20px;" value="Banani">Banani</option>
	<option style="font-size: 20px;" value="Dhanmondi">Dhanmondi</option>
	<option style="font-size: 20px;" value="Gulshan">Gulshan</option>
</select>

</br>

<input type="submit" name="submit" class="btn">
</form>

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
<form action="update.php">
<button class="btn">
  UPDATE PROFILE
</button>
</form>
<form action="logout.php">
<button class="btn">
  LOGOUT
</button>
</form>
</body>
</html>