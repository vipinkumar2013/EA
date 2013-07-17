<?php
$con=mysqli_connect("localhost","root","","my_db3");
if(mysqli_connect_errno())
{
	echo "NOT CONNECTED TO DATABASE";
}
else
{

	$id=$_POST['i'];
	echo "id=".$id;exit;
	$sql="SELECT name FROM users WHERE id=$id";
	$res=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($res)
	{
	echo $row[0];
	}
	
	
}
?>