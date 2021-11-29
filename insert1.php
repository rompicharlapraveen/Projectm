<?php
	include("connect.php");
	$patientname=$_POST["patientname"];
	$fathername=$_POST["fathername"];
	$gender=$_POST["gender"];
	$bloodgroup=$_POST["bloodgroup"];
	$address=$_POST["address"];
	$phone=$_POST["phone"];
	$password=$_POST["password"];
	$confirmpassword=$_POST["confirmpassword"];
$sql=mysqli_query($conn,"insert into preg(patientname,fathername,gender,bloodgroup,address,phone,password,confirmpassword)values('$patientname','$fathername','$gender','$bloodgroup','$address','$phone','$password','$confirmpassword')");


if($sql)
{
	echo '<script type="text/javascript">';
  echo  'alert("successfully completed")'; 
  echo '</script>';
}
else
{
   echo '<script type="text/javascript">';
   echo 'alert("Not successfully completed")'; 
  echo '</script>';
}

include("plogin.php");
?>