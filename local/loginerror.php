<html>
<head>
<title> Login-FoodHub </title> 

<link rel="stylesheet" type="text/css" href="style1.css"/>

<style type="text/css">
.back{background-color:rgba(255, 218, 185,0.5);margin-left:15%;margin-right:15%}

input[type="text"]{
    border:1px solid black;
	height:45px;
	width: 300px;
	font-size:18px;
	margin-top: 50px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 30px;
}	

input[type="password"]{
    border:1px solid black;
    height:45px;
	width: 300px;
	font-size:18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 30px;
}	

.btn-login{
	padding: 15px 30px; 
	color: #fff;
	border-radius: 4px;
	border:2px solid gray;
	background-color: rgb(107,142,35);
	margin-bottom: 16px;
	font-size: 20px;
	font-weight: bold;
	font-family:tahoma;
}

p{font-size:22px;
  margin-bottom:70px;
  margin-left:30px;
  margin-right:30px}
  
span{font-style:italic; font-weight:bold}
</style>
    
</head>
<body> 

<img src="logo.png" class="logo">

<div class="back">
<form action ="login_script.php" method="POST">
<h1>Wrong ID or Password</h1>
<input type="email" name="email" size="42"  placeholder="Enter Your Email"/>
<br/>
<br/>
<input name="password" type="password" size="30" placeholder="Password"/>
<br/>
<input name="login" type="submit" value="Login" class="btn-login"/>
</form>

<p>Don't have an account? <a href="signup.php"><span>Sign Up!</span></a></p>
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