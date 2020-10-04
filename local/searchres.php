<html>
<?php
session_start();
include 'dbh.php';
$resName=$_GET['search'];
$sql="SELECT * from resturant where ResName LIKE '%$resName%'";
$result=mysqli_query($conn,$sql);
$rescheck=mysqli_num_rows($result);
?>

<body>
<title>Search Results</title>
<style>
body {text-align:center; 
background-image:url(food.jpg);
background-size: auto;
}
.logo{max-height:275px;
    max-width:300px;
	border-bottom:8px dotted green;
	padding:16px;
	margin-bottom:25px}
	
a:link{color:white;
font-family: Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Tahoma,sans-serif;
       text-decoration:none;}
	   
a:visited{color:white;
font-family: Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Tahoma,sans-serif;
       text-decoration:none;}

a:hover{color:green;
        font-weight:bold}	

td{padding-top:16px;
   padding-bottom:16px;
   padding-left:22px;
   padding-right:22px;
   background-color: rgba(0,0,0, .6);
   text-align: center;
   font-family: Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Tahoma,sans-serif;
   width:150px;
   color:white;}
  h1{
	font-size: 40px;  
	font-family: Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Tahoma,sans-serif;  
	color: black;
	background-color:rgba(230, 230, 230, .7);
	margin-top:80px;
	margin-bottom:70px;
	text-align:center;
	width:600px;
	
  } 
  .results{
	font-size: 40px;  
	font-family: Trebuchet MS,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Tahoma,sans-serif;  
	color: black;
	background-color:rgba(0, 51, 135, .7);
	margin-top:80px;
	margin-bottom:70px;
	width:250px;
	
  } 
</style>

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

 <?php
echo "<center><h1>SEARCH RESULTS : </h1></center>". "<br>";
if($rescheck>0)
{
     while($row=mysqli_fetch_assoc($result))
  {?>

	<center><div class="results"><a href="index.php?res=<?php echo $row["ResID"]; ?>"><?php echo $row["ResName"]; ?></a></div></center>
<?php
  }
  }
else
{
  echo "<h1> No Restaurants Found</h1>";
}
mysqli_close($conn);
?>
</body>
</html>