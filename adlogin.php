<html>
<head>
<title>HOSPITAL MANAGMENT</title>
<link rel="stylesheet" type="text/css" href="style1.css">
<style>
h1 {
  text-shadow: 2px 2px 5px red;
}
</style>
</head>
<body>
<center><h1><font color="white">HOSPITAL MANAGEMENT SYSTEM</font></h1><hr></center>

<div class="center">
  <h2>Admin Login</h2>
<form action="" method="POST">
  <div class="txt_field">
    <input type="text" name="username" required>
    <span></span>
   <label>User Name</label>
  </div>
  <div class="txt_field">
    <input type="password" name="password" id="myInput" required autocomplete="off">
  <span></span>
  <label>Password</label>
</div>
     <input type="checkbox" onclick="myFunction()">Show Password
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

</form>
</div>

<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['username']) && !empty($_POST['password'])) {  
    $username=$_POST['username'];  
    $password=$_POST['password'];  
    $conn=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($conn,'hospital') or die("cannot select DB");  
  
    $query=mysqli_query($conn,"SELECT * FROM adlogin WHERE username='".$username."' AND password='".$password."'");  
    $numrows=mysqli_num_rows($query); 
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($username == $dbusername && $password == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_adlogin']=$username;
?>
  <script type="text/javascript">
  alert('you are successfully login');
  window.location.href='module1.html';
  </script>
  <?php
 
    }  
    } 
	else 
	{  
     ?>
      <script type="text/javascript">
  alert('Invalid username or password!');
  </script>
  <?php
     }  
  } 
else { 
         echo "All fields are required!"; 

}  
}  
?>  

</script>


</body>
</html>

