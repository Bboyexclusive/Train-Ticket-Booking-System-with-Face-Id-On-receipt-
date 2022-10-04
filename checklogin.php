<?php
ob_start();
include('connect.php');

// Define $myusername and $mypassword 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($dbcon,$myusername);
$mypassword = mysqli_real_escape_string($dbcon,$mypassword);
$sql="SELECT * FROM admin WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($dbcon,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
	$_SESSION['myusername'] = $myusername;
header("location:main/index.php");
}
else {
echo "<script>alert('Login was Unsuccessful! Please Try Again!')</script>";
echo "<script>window.open('index.php','_self')</script>";
}
ob_end_flush();
?>
<html>
<head>
	<title>Login</title>
</head>
</html>