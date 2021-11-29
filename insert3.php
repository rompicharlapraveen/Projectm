<?php
include("Connect.php");


	$doctorname=$_POST["doctorname"];
	$department=$_POST["department"];
	$experience=$_POST["experience"];
	$address=$_POST["address"];
	$phone=$_POST["phone"];
	$date=$_POST["date"];
$sql=mysqli_query($conn,"insert into details(doctorname,department,experience,address,phone,date)values('$doctorname','$department','$experience','$address','$phone','$date')");


if($sql)
{
	echo '<script type="text/javascript">';
  echo  'alert("successfully Inserted")'; 
  echo '</script>';
}
else
{
   echo '<script type="text/javascript">';
   echo 'alert("Not Inserted successfully")'; 
  echo '</script>';
}
?>