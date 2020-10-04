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
	font-family: Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Tahoma,sans-serif;  
	
	margin: 80px;
}

.container{background-color:rgb(179, 179, 179);
           width: 700px;
		   text-align:center;
		   margin: 16px auto;
		   border: 3px dotted white;
		   
		  } 

.start{max-height:85px;
       max-width:200px}		  

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
 
<div class="container">
<p>Your order has been confirmed.<br> Thank You for Ordering.</p>
</div>

 <form action="logout.php">
  <button class="btn">
  LOGOUT
  </button>
</form>
 
</body>
</html>
