<?php

include("connect.php");
	
	$doctorname=$_POST["doctorname"];
	$fathername=$_POST["fathername"];
	$gender=$_POST["gender"];
	$experience=$_POST["experience"];
	$specialist=$_POST["specialist"];
	$timings=$_POST["timings"];
	$address=$_POST["address"];
	$phone=$_POST["phone"];
	$password=$_POST["password"];
	$confirmpassword=$_POST["confirmpassword"];
        $email=$_POST["email"];
        
$sql=mysqli_query($conn,"insert into dreg(doctorname,fathername,gender,experience,specialist,timings,address,phone,password,confirmpassword,email)values('$doctorname','$fathername','$gender','$experience','$specialist','$timings','$address','$phone','$password','$confirmpassword','$email')");


if($sql)
{
	echo '<script type="text/javascript">';
  echo  'alert("Successfully completed")'; 
  echo '</script>';
}
else
{
   echo '<script type="text/javascript">';
   echo 'alert("Not completed")'; 
  echo '</script>';
}
include("dlogin.php");
?>