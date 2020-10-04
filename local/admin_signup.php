
<?php
//connection with database and session;

session_start();
include 'dbh.php';

?>


<html>

<head>
<title> admin_SignUp-ADMIN </title> 

<link rel="stylesheet" type="text/css" href="style1.css"/>

<style type="text/css">
input[type="text"],input[type="email"],input[type="password"],input[type="password"],input[type="tel"],input[type="address"]{
    border:1px solid black;
	height:45px;
	width: 300px;
	font-size:18px;
	margin-top:20px;
	background-color: #fff;
	padding-left:30px;
}	
	
.btn-admin_signup{
	padding: 15px 30px; 
	color: #fff;
	border-radius: 4px;
	border:2px solid gray;
	background-color: rgb(107,142,35);
	margin-bottom: 16px;
	margin-top: 16px;
	font-size: 20px;
	font-weight: bold;
	font-family:tahoma;
}
</style>

</head>

<body>

<img src="logo.png" class="logo">

<div class="container">
<form action ="admin_signup_script.php" method="POST">
<input type="text" name ="name"
placeholder ="Enter Admin Name">
</br>
<input type="email" name ="email"
placeholder ="Enter Email Address">
</br>
<input type="password" name ="password"
placeholder ="Enter Password">
</br>

<input type="submit" name="submit"
value="admin_SIGNUP" class="btn-admin_signup">
</form>





<?php
//Checking Empty Fields


$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(strpos($url,'error=empty')!==false)

{
echo "<div style ='font:50px/71px Arial,tahoma,sans-serif;color:#ff0000'> FILL UP ALL THE FIELDS</div>";

}
else if(strpos($url,'error=AdminEmail')!==false)

{
echo "<div style ='font:50px/71px Arial,tahoma,sans-serif;color:#ff0000'> THIS EMAIL ALREADY EXISTS</div>";

}


if(isset($_SESSION['AdminID']))
{

	echo "You are already logged in";

}
else{

	echo "You are not logged in";
}
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

</body>
</html>