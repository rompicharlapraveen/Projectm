<?php
include('connect.php');
$sql_query="SELECT * FROM dreg";
$result_set=mysqli_query($conn,$sql_query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>view</title>
<style>

a:link {
    color: #6699ff;
}
a:visited {
    color: #6699ff;
}

a:hover {
    color: #0044cc;
}
.button2 {background-color: #D6EBD6;}
</style>
</head>
<body background="praveen.jpg">
  <h1><center><font color="white">HOSPITAL MANAGEMENT SYSTEM</font></center></h1><hr>
<center>
   <div id="header">
 <div id="content">
    <label><h2><font color="cyan">Doctor Names</font></h2></label>
    </div>
</div>
<div id="body">
 <div id="content">
   <table align="center" width="30%" background="rp.jpg" border="1" bordercolor="#D6EBD6" cellspacing="0" cellpadding="0">
    <tr>
    <th>Doctor Name</th>
    <th>Click View</th>
    </tr>
    <?php
 if(mysqli_num_rows($result_set)>0)
 {
  while($row=mysqli_fetch_row($result_set))
  {
   ?>
   <tr><tr>
            <td><?php echo $row[1]; ?></td>
            
            
            <td align="center"><a href="book.php?edit_id=<?php echo $row[0]; ?>"><img src="view img.png" alt="Edit" /></a></td>
            </tr>
            <?php
  }
 }
 else
 {
  ?>
        <tr>
        <th colspan="2">There's No data found !!!</th>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>


</center>
</body>
</html>