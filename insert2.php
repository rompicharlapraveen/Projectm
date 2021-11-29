<?php
include("connect.php");
	$problem=$_POST["problem"];
	$date=$_POST["date"];
	$patientname=$_POST["patientname"];
	$gender=$_POST["gender"];
	$age=$_POST["age"];
        $city=$_POST["city"];
        $location=$_POST["location"];
        $hname=$_POST["hname"];
    

$sql=mysqli_query($conn,"insert into bookappointment(problem,date,patientname,gender,age,city,location,hname)values('$problem','$date','$patientname','$gender','$age','$city','$location','$hname')");

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
include("book appointment.html");
?>