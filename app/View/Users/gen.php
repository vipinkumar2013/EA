<?php
$con=mysqli_connect("localhost","root","","my_db3");
if(mysqli_connect_errno())
{
	echo "NOT CONNECTED TO DATABASE";
}
else
{
	$regn=$_GET['p'];
	$regn=md5($regn);
	$sql="INSERT INTO users(password) VALUES($regn)";
	mysqli_query($con,$sql);
	
	
}
?>