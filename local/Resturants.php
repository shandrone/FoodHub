<?php
session_start();
include 'dbh.php';
$location=$_GET['loc'];
$sql="SELECT ResName, ResID FROM resturant WHERE Location='$location'";

$result=mysqli_query($conn,$sql);
$loccheck=mysqli_num_rows($result);

?>

<html>
<head>
<title> Resturants </title> 


<link href="style4.css" rel="stylesheet" type="text/css"></link>

<style type="text/css">
body{text-align:center}
</style>

</head>


<body>
<img src="logo.png" class="logo">

</br>
<div>
<ul>
<li><a href="#">HOME </a> </li>
<li><a href="#"><a href="about_us.php">ABOUT US </a></li>
<li><a href="#"><a href="contact_us.php">CONTACT US </a> </li>
<li><a href="#"> <a href="comment.php">COMMENT</a></li>
<ul></ul>
</div>

</br>
<p><h1><?php echo $location; ?></h1></p>

<div>
<form action="searchres.php" method ="GET">
<table align="center">
<tr>
<td><input type="text" name="search" placeholder="Search Resturants" maxlength="10"/></td>
<td><input type="submit" value="GO"></td>
</table>
</form>
</div>
 
 <?php
if($loccheck> 0)
{    
echo "<table align='center'>
  <tr>
    <th>RESTURANTS</th>
  </tr>;
<form action='cart1.php' method='GET' >";
  while($row=mysqli_fetch_assoc($result))
  {


echo  "<tr>
    
    <td><input type='radio' name='res' value=".$row["ResID"]." />".$row["ResName"]."</td>

      </tr>";

  }
  echo "</table>
  <input type='hidden' name='p' value='1' />
   <input type='submit' value='Select'/ class='t'>
</form>" ;

}
else
{

  echo "<h1>0 results</h1>";
}

mysqli_close($conn);
?>
</br></br>
<form action="logout.php">
<button class="t">
  LOGOUT
</button>
</form>

</body>



</html>
