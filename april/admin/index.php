<?php
require_once 'config/database.php';
if(isset($_POST['admin_login']))
{
	extract($_POST);
	$query="SELECT * FROM `admin` WHERE `admin_email`='$admin_email' and `admin_pass`='$admin_pass'";
	$admin_data=mysqli_query($dbcon,$query);
	$admin_res=mysqli_fetch_array($admin_data);
	/*
	echo '<pre>';
	print_r($admin_res);
	echo '</pre>';
	*/
	if($admin_res['admin_email']==$admin_email and $admin_res['admin_pass']==$admin_pass)
	{
		$_SESSION['admin_key']=$admin_res['admin_email'];
		header('location:admin.php');
	}
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CMS|| Admin Login</title>
<link href="css/style.css" rel="stylesheet">
<link href="css/profile.css" rel="stylesheet">
</head>

<body>
<div class="login">
<center>
<form method="post">
<p><input type="email" name="admin_email" placeholder="Enter Admin Email" class="txt" required></p>
<p><input type="password" name="admin_pass" placeholder="Enter Admin Password" class="txt" required></p>
<p><input type="submit" name="admin_login" value="Admin Login" class="btn"></p>
</form>
</center>
</div>
</body>
</html>