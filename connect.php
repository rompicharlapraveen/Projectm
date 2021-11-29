<?php
$servername="localhost";
$username="root";
$password="";
$database="hospital";
$conn=mysqli_connect($servername,$username,$password);
$db=mysqli_select_db($conn,$database);
if(!$conn)
{
	echo "not connected";
}
else
{
	echo "connected";
}
?>
