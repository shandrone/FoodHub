
<html>
<head>
<title> Thank You </title> 

<style type="text/css">


body {text-align:center; 
	background-image:url(foodd.jpg);
	background-size: cover;
	}

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
	margin-bottom:95px}
	
p{  color: white;
	font-size: 30px;
	font-weight: bold;
	font-style: italic;
	font-family:arial;
	margin: 80px;
}

a:link{color:black;
       text-decoration:none;}
	   
a:visited{color:black;
       text-decoration:none;}

a:hover{color:green;
        font-weight:bold}	

td{padding-top:16px;
   padding-bottom:16px;
   padding-left:22px;
   padding-right:22px;
   background-color: rgba(220,220,220,0.6);
   color:black;}

   .container{background-color:rgba(220, 220, 220, .5);
           width: 500px;
           height: 500px;
       text-align:center;
       margin: 16px auto;
       border: 3px dotted white;
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
input[type="pass"]{
    border:1px solid black;
	height:45px;
	width: 300px;
	font-size:18px;
	margin-top: 50px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 30px;
}		
</style>

</head>

<body>

<img src="logo.png" class="logo">


<h1>Update Profile</h1>

<div class="container">
<form action="update_address.php" method="POST" style="float:left ;font-family: Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Tahoma,sans-serif;">
Update Address:<input type="text" name="address" placeholder="enter address" />
<input type="submit" name="info" value="Enter">
</form>

<form action="update_phone.php" method="POST" style="float:left; font-family: Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Tahoma,sans-serif;">
Phone Number:<input type="text" name="phone" placeholder="enter number" />
<input type="submit" name="info" value="Enter">
</form>

<form action="update_pass.php" method="POST" style="float:left; font-family: Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Tahoma,sans-serif;">
Change Password:<input type="pass" name="pass" placeholder="New Password" /> 
<input type="submit" name="info" value="Enter">
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

 
 <form action="logout.php">
  <button class="btn">
  LOGOUT
  </button>
</form>
 
</body>
</html>
