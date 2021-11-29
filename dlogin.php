<!doctype html>  
<html>  
<head>
<meta charset="utf-8">  
<title>Login</title>
<script language="javascript" type="text/javascript">
</script>
<link rel="stylesheet" type="text/css" href="style2.css">
</style>
<style>
h1 {
  text-shadow: 2px 2px 5px red;
}
</style>
</head>  
<body>
<h1 align="center"><font color="white">HOSPITAL MANAGEMENT SYSTEM</font></h1><hr></center>
<div class="center">
<h2>Doctor Login</h2>
<form method="POST">
<div class="txt_field">
<input type="text" name="doctorname" required>
<span></span>
<label>User Name</label>
</div>
<div class="txt_field">
<input type="password" name="password" id="myInput" required>
<span></span>
<label>Password</label>
</div>
<div class="pass" onclick="myFunction()">Show Password</div>

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<input type="submit" value="Login" name="submit">
<div class="signup_link">
Not a member?<a href="dreg.php">SignUp</a>
</div>
<div class="signup_link"><a href="forgot.php">Forgot Password?</a></div>
</form>
</div>
<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['doctorname']) && !empty($_POST['password'])) {  
    $doctorname=$_POST['doctorname'];  
    $password=$_POST['password'];  
  
    $conn=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($conn,'hospital') or die("cannot select DB");  
  
    $query=mysqli_query($conn,"SELECT * FROM dreg WHERE doctorname='".$doctorname."' AND password='".$password."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbdoctorname=$row['doctorname'];  
    $dbpassword=$row['password'];  
    }  
  
    if($doctorname == $dbdoctorname && $password == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$doctor;
	/* Redirect browser */ 
    header("Location: module.html"); 
    }  
    } 
	else
	{ 
             echo "Invalid DoctorName or Password"; 
    }  
  
} 
else {  
         
echo "All fields are required"; 
}  
}  
?> 
</body>  
</html>   