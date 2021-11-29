<html>
<head>
	<style>
		body{
			background-color: grey;
		}
	  table,th,td{
	  	border: 2px solid black;
	  	width: 1100px;
	  	background-color: lightgreen; 
	  }
	  .btn{
	  	width: 10%;
	  	height: 5%;
	  	font-size: 22px;
	  	padding: 0px;
	  }
	</style>
</head>
<body>
	<center>
		<h1> HOSPITAL MANAGEMENT SYSTEM</h1><hr>
		<h2> Retrive Search Data</h2>
		<div class="container">
			<form action="" method="POST">
				<input type="text" name="id" class="btn" placeholder="Enter Doctor Name">
				<input type="submit" name="Search" class="btn" value="Search By Doctor Name">
			</form>	
			<table>
				<tr>
					<th>Doctor Name & Specialist</th>
					<th>Date</th>
					<th>Patient Name</th>
					<th>Gender</th>
					<th>Age</th>
					<th>Patient Location</th>
					<th>Hospital Location</th>
					<th>Hospital Name</th>
				</tr><br>
				<?php
				$connection = mysqli_connect("localhost","root","");
				$db=mysqli_select_db($connection,'hospital');

				if (isset($_POST['submit']))
				 {
					$id=$POST['id'];
					$query="select * from bookappointment where id='$id' ";
					$query=mysqli_query($connection,$query);

					while($row=mysqli_fetch_array($query_run))
					{
						?>
						<tr>
							<td><?php echo $row['problem'];?></td>
							<td><?php echo $row['date'];?></td>
							<td><?php echo $row['patientname'];?></td>
							<td><?php echo $row['gender'];?></td>
							<td><?php echo $row['age'];?></td>
							<td><?php echo $row['city'];?></td>
							<td><?php echo $row['location'];?></td>
							<td><?php echo $row['hname'];?></td>
						</tr>
						<?php

					}
				}
			    ?>
			</table>
		</div>
	</center>
</body>
</html>