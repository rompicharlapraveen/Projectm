<!doctype html>  
<html>  
<head>
<meta charset="utf-8">  
<title>Login</title>
<link rel="stylesheet" type="text/css" href="style2.css">
<style>
h1 {
  text-shadow: 2px 2px 5px red;
}
</style>
</head>  
<body>
<h1 align="center"><font color="white">HOSPITAL MANAGEMENT SYSTEM</font></h1><hr></center>
<div class="center">
<h2>Patient Login</h2>
<form method="POST">
<div class="txt_field">
<input type="text" name="patientname" required>
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
Not a member?<a href="preg.php">SignUp</a>
<div class="signup_link"><a href="">Forgot Password?</a></div>
</div>
</form>
</div>
<?php  

if(isset($_POST["submit"])){  
  
if(!empty($_POST['patientname']) && !empty($_POST['password'])) {  
    $patientname=$_POST['patientname'];  
    $password=$_POST['password'];  
  
    $conn=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($conn,'hospital') or die("cannot select DB");  
  
    $query=mysqli_query($conn,"SELECT * FROM preg WHERE patientname='".$patientname."' AND password='".$password."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbpatientname=$row['patientname'];  
    $dbpassword=$row['password'];  
    }  
  
    if($patientname == $dbpatientname && $password == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$patientname;
	/* Redirect browser */   
    header("Location: book appointment.html");  
    }  
    } 
	else 
    {   
    
        echo "Invalid patient or password!";
    } 
  
}  
else{
       echo "All field are required";
    }
}  
?> 
</body>  
</html>   