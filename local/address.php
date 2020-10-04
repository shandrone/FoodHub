<html>
<head>
<title> Thank You </title> 

<link href="style1.css" rel="stylesheet" type="text/css"></link>
<style type="text/css">

.footer{ 
       position:relative;     
       align: center;    
       bottom: 0px; 
       width: 100%;
   } 
   
.logo{max-height:275px;
    max-width:300px;
	border-bottom:8px dotted green;
	padding:16px;
	margin-bottom:75px}
	
p{  color: white;
	font-size: 30px;
	font-weight: bold;
	font-style: italic;
	font-family:arial;
	margin: 80px;
}

 h1{
	font-size: 40px;  
	font-family: Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Tahoma,sans-serif;  
	color: black;
	background-color:rgba(230, 230, 230, .7);
	margin-top:10px;
	margin-bottom:70px;
	
  } 
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
input[type="address"]{
    border:1px solid black;
	height:45px;
	width: 300px;
	font-size:18px;
	margin-top: 50px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 30px;
}	
.btn{
	padding: 15px 30px; 
	color: #fff;
	border-radius: 4px;
	border:none;
	background-color: #33cccc;
	border-bottom:4px solid #00ffff;
	margin-bottom: 20px;
}	 
.back{background-color:rgba(255, 218, 185,0.5);margin-left:15%;margin-right:15%}  
</style>

</head>

<body>

<img src="logo.png" class="logo">

<div class="footer">
<table align="center" cellspacing="100" >
<tr>
<td><a href="home.php">HOME </a> </td>
<td><a href="about_us.php"> ABOUT US </a> </td>
<td><a href="contact_us.php">CONTACT US </a></td>
</tr>
</table>
 </div>
 
<h1> Enter Delivery Address </h1>
<div class="back">
<form action="confirm.php" method="POST">
House Number:<input type="text" name="house" size="42" placeholder="House Number" /><br>
Road Number:<input type="text" name="road" size="42" placeholder="Road Number" /><br>
Area:<input type="text" name="area" size="42" placeholder="Area" /><br>
<input type="submit" name="address" value="Enter" class="btn">
</form>
</div>
<?php
//Checking Empty Fields


$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(strpos($url,'error=empty')!==false)

{
echo "<div style ='font:50px/71px Arial,tahoma,sans-serif;color:#ff0000'> FILL UP ALL THE FIELDS</div>";

}
?>
 <form action="logout.php">
  <button class="btn">
  LOGOUT
  </button>
</form>
 
</body>
</html>
