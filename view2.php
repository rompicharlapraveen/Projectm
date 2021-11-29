<!DOCTYPE html>
<html>
<head>
<title>book appointment</title>
<style>
h1 {
  text-shadow: 2px 2px 5px red;
}
</style>
<style>
.button {
  background-color: blue;
  border: none;
  border-radius:10px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'>
  </script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js'>
  </script>
  <style>
  .btn-default {
      background: #cc0033;
      color: #fff;
   }
  .btn-default:hover {
      background: #fff;
      color: #cc0033;
   }
  </style>
<style>
table {
border-collapse: collapse;
width: 85%;
color: black;
font-family: monospace;
font-size: 20px;
text-align: center;
}
th {
background-color: green;
color: white;
}
tr:nth-child(even) {background-color:orange}
</style>
</head>
<body background="h2.jpeg">
<h1 align='center'><font color='black'>HOSPITAL MANAGEMENT SYSTEM</font></h1><hr></center>
<body>
<center>
<table border="" width='100%' height='50%'>
<tr>
<th><center>Patient Id</center></th>
<th><center>Doctor-Specialisation</center></th>
<th><center>Booking Date</center></th>
<th><center>Patient Name</center></th>
<th><center>Gender</center></th>
<th><center>Age</center></th>
<th><center>Patient-City</center></th>
<th><center>Hospital-Location</center></th>
<th><center>Hospital-Name</center></th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "hospital");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id,problem,date,patientname,gender,age,city,location,hname  FROM bookappointment";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["problem"] . "</td><td>"
. $row["date"]. "</td><td>" . $row["patientname"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["age"] . "</td><td>" . $row["city"] . "</td><td>" . $row["location"] . "</td><td>" . $row["hname"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</center>
</table></br>
<center><a style='text-decoration:none' href='module1.html'><button type='button' class='btn btn-default'>Cancel</button></a></center>
</body>
</html>