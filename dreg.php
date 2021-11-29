<html>
<head>
<title>Dreg</title>
  <link rel="stylesheet" href="style5.css">
 <script language="javascript" type="text/javascript" src="validate4.js">
  </script>
  
<style>
        .roundtable{
         background:rgba(255,0,255,0.2);
         border-radius:10px;
      }
</style>
<style>
.button {
  background-color: green;
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

</head>
<body background="h4.jpg">
<h1><center>HOSPITAL MANAGEMENT SYSTEM</center></h1><hr>
<center><h2><font color="blue">Doctor Registration</font></h2></center>
<form name="f1" action="insert4.php" method="POST">
<center>
<table class="roundtable" width="400px" height="400px">
<tr>
<td><b>Doctor Name:</b><font color="red">*</font></td><td>&nbsp;<input type="text" name="doctorname" placeholder="Enter Doctor Name"></input></td>
</tr>
<tr>
<td><b>Father Name:</b><font color="red">*</font></td><td>&nbsp;<input type="text" name="fathername" placeholder="Enter Father Name"></input></td>
</tr>
<tr>
<td><b>Gender:</b><font color="red">*</font></td><td>&nbsp;<input type="radio" name="gender" value="male"checked><b>Male</b></input>
<input type="radio" name="gender" value="female"><b>Female</b></input>
</td>
</tr>
<tr>
<td><b>Experience:</b><font color="red">*</font></td><td>&nbsp;<input type="text" name="experience" placeholder="Enter Experience"></input></td>
</tr>
<tr>
<td><b>Specialisation:</b><font color="red">*</font></td><td>&nbsp;<input type="text" name="specialist" placeholder="Enter Specialist"></input></td>
</tr>
<tr>
<td><b>Timings:</b><font color="red">*</font></td><td>&nbsp;<input type="text" name="timings" placeholder="Enter Timings"></input></td>
</tr>

<tr>
<td><b>Address:</b><font color="red">*</font></td><td>&nbsp;<textarea name="address" placeholder="Enter your Address" rows="4" cols="30"></textarea></center></td>
</tr>
<tr>
<td><b>Mobile Number:</b><font color="red">*</font></td><td>&nbsp;<input type="text" name="phone" placeholder="Enter Mobile Number"></input></center></td>
</tr>
<tr>
<td><b>Password:</b><font color="red">*</font></td><td>&nbsp;<input type="password" name="password" placeholder="Enter Password"></input></td>
</tr><tr>
<td><b>Confirm Password:</b><font color="red">*</font></td><td>&nbsp;<input type="password" name="confirmpassword" placeholder="Enter Confirm Password"></input></td>
</tr>
<tr>
<td><b>Email Id:</b><font color="red">*</font></td><td>&nbsp;<input type="text" name="email" placeholder="Enter EmailId"></input></td>
</tr>
</table>
<table>
<tr>
<div class="container">
<td><center><input type="submit" class="btn btn4" value="Submit" onClick="return validate4()"></center></td>
<td><center><button type="reset" class="btn btn4">Reset</button></center></td>
<td><center><a style="text-decoration:none;" href="dlogin.php" class="btn btn4">Cancel</a></center></td>
</div>
</tr>
</table>
</form>
</body>
</html>