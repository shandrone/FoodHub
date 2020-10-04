
<?php
//connection with database and session;

session_start();
include 'dbh.php';

?>


<html>

<head>
<title> Admin_Panel </title> 

<link rel="stylesheet" type="text/css" href="style1.css"/>

<style type="text/css">
input[type="text"],input[type="price"],input[type="number"]{
    border:1px solid black;
	height:45px;
	width: 300px;
	font-size:18px;
	margin-top:20px;
	background-color: #fff;
	padding-left:30px;
}	
	
.btn-signup{
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
<form action ="adminitem_script.php" method="POST">
<input type="text" name ="name"
placeholder ="Enter Food Name">
</br>
<input type="number" name ="price"
placeholder ="Enter Food Price">
<br>
<input type="text" name ="resname"
placeholder ="Enter Restaurant Name">
</br>
<input type="submit" name="submit"
value="ADD_FOOD " class="btn-signup">
</form>

<div >
<table align="center"  >
<tr>
<td><a href="adminitem.php">ADD MORE ITEM </a> </td>
</tr>
</table>
 </div>



<?php
//Checking Empty Fields


$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(strpos($url,'error=empty')!==false)

{
echo "<div style ='font:50px/71px Arial,tahoma,sans-serif;color:#ff0000'> FILL UP ALL THE FIELDS</div>";

}
else if(strpos($url,'error=ResName')!==false)

{
echo "<div style ='font:50px/71px Arial,tahoma,sans-serif;color:#ff0000'> THIS EMAIL ALREADY EXISTS</div>";

}


/*else{

	echo "No New Restaurant Is Added Yet";
}*/
?>















</div>

<div class="footer">
<table align="center" cellspacing="100" >
<tr>

<td><a href="home.php">HOME </a> </td>
<td><a href="adminP1.php" >Admin Panel</a></td>
<td><a href="location.php">Restaurants </a> </td>

</tr>
</table>
 </div>

</body>
</html>