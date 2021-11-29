<?php
echo "<html>";
echo "<head>";
echo "<title>HOSPITAL MANAGMENT</title>";
echo "<style>
h1 {
  text-shadow: 2px 2px 5px red;
}
</style>";
echo "<style>
     .roundtable{
         background:white;
         border-radius:10px;
      }
</style>";
 echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
  echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>";
  echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'>
  </script>";
  echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'>
  </script>";
  echo "<style>
  .btn-default {
      background: #cc0033;
      color: #fff;
   }
  .btn-default:hover {
      background: #fff;
      color: #cc0033;
   }
  </style>";
echo "</head>";
echo "<body background='praveen.jpg'>";
echo "<h1 align='center'><font color='white'>HOSPITAL MANAGEMENT SYSTEM</font></h1><hr></center>";
$link=new mysqli("localhost","root","","hospital");
if($link===false)
{
	die("Connection failed:" .mysqli_connect_error());
}
$sql="SELECT * FROM dreg";
if($result=mysqli_query($link,$sql))
{
	if(mysqli_num_rows($result)>0)
	{       
		echo "<table border='' align='center' class='roundtable' width='90%' height='70%'>";
		echo "<tr>";

                echo "<th><center>Doctor Id</center></th>";
		            echo "<th><center>Doctor Name</center></th>";
                echo "<th><center>Father Name</center></th>";
                echo "<th><center>Gender</center></th>";
                echo "<th><center>Experience</center></th>";
                echo "<th><center>Specialisation</center></th>";
                echo "<th><center>Address</center></th>";
                echo "<th><center>Mobile Number</center></th>";
                echo "<th><center>Email-Id</center></th>";
   		echo "</tr>";
            
	  while($row=mysqli_fetch_array($result))
	  {
               
		 echo "<tr>";
                      echo "<td>" .$row['id'] ."</td>";
		                  echo "<td>" .$row['doctorname'] ."</td>";
                      echo "<td>" .$row['fathername'] ."</td>";
                      echo "<td>" .$row['gender'] ."</td>";
                      echo "<td>" .$row['experience'] ."</td>";
                      echo "<td>" .$row['specialist'] ."</td>";
                      echo "<td>" .$row['address'] ."</td>";
                      echo "<td>" .$row['phone'] ."</td>";
                      echo "<td>" .$row['email'] ."</td>";
            
                      
		  echo "</tr>";
      
 	  }
       echo "</table>";
       echo "</br>";
	mysqli_free_result($result);
	}
	else
	{
		echo "No records matching your query were found.";
	}
}
 else
 {
	 echo "ERROR: Could not able to execute $sql." .mysqli_error($link);
 }
echo "<center><a style='text-decoration:none' href='module1.html'><button type='button' class='btn btn-default'>Cancel</button></a></center>";

echo "</body>";
echo "</html>";
?>
