
<html>
<head>
<title>patient reg</title>
  <link rel="stylesheet" href="style5.css">
 <script language="javascript" type="text/javascript" src="validate.js">
  </script>
  <style>
h1 {
  text-shadow: 2px 2px 5px white;
}
</style>

<style>
     .roundtable{
         background:rgba(255,0,255,0.2);
         
         border-radius:10px;
      }
</style>
<style>
.button1 {
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
<body background="h1.png">
<h1><center><font color="black">HOSPITAL MANAGEMENT SYSTEM</font></center></h1><hr>
<center><h2><font color="blue">Patient Registration</font></h2></center>
<form name="f1" action="insert1.php" method="POST">
<center>
<table class="roundtable" width="400px" height="400px">
<tr>
<td><b>Patient Name:</b><font color="red">*</font></td><td>&nbsp;<input type="text" name="patientname" placeholder="Enter Patient Name"></input></td>
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
<td><b>Bloodgroup:</b><font color="red">*</font></td><td>&nbsp;<select name="bloodgroup" select>
<option>A+</option>
<option>B+</option>
<option>O+</option>
<option>AB+</option>
<option>A-</option>
<option>B-</option>
<option>AB-</option></select></td>
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
</table>
<table>
<tr>
<div class="container">
<td><center><input type="submit" class="btn btn4" value="Submit" onClick="return validate()"></center></td>
<td><center><button type="reset" class="btn btn4">Reset</center></td>
<td><center><a style="text-decoration:none;" href="plogin.php" class="btn btn4">Cancel</a></center></td>
</div>
</tr>
</table>
</form>
</body>
</html>



