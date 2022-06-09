<?php
require_once 'config/database.php';
if($_SESSION['admin_key']=='')
{
	header('location:index.php');
}
$admin_key=$_SESSION['admin_key'];
$query="SELECT * FROM `admin` WHERE `admin_email`='$admin_key'";
$admin_data=mysqli_query($dbcon,$query);
$admin_res=mysqli_fetch_array($admin_data);
##############################################################################
//Insert New Post
if(isset($_POST['insert_post']))
{
	extract($_POST);
	//print_r($_POST);
$query="INSERT INTO `post` (`id`, `post_title`, `post_msg`, `post_tag`) VALUES (NULL, '$post_title', '$post_msg', '$post_tag')";
mysqli_query($dbcon,$query);

}
###############################################################################
//Upadte Post
if(@$_GET['action']=='update')
{
	$post_id=$_GET['post_id'];
	$query="UPDATE `post` SET `post_title`=[value-2],`post_msg`=[value-3],`post_tag`=[value-4] WHERE 1";
}


#################################################################################






?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $admin_res['admin_name'];?></title>
<link href="css/profile.css" rel="stylesheet">
</head>
<body>
<!------------------------Header Section--------------------------->
<div class="head">
	<div class="sub-head">
		<div class="logo fl"><h1>Job Admin</h1></div>
        <div class="nav fr">
        	<ul>
            	<li><a href="admin.php">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Setting</a></li>
                <li><a href="?admin_page=logout">logout</a></li>
            </ul>
        </div>
        <div class="clr"></div>
    </div>
</div>
<!------------------------Header Section--------------------------->
<!------------------------Mid Section--------------------------->
<div class="mid">
	<div class="mid-left fl">
    	<ul>
            <li><a href="?admin_page=add_post">Add Post</a></li>
            <li><a href="?admin_page=view_post">View Post</a></li>
            <li><a href="?admin_page=update_post">Update Post</a></li>
            <li><a href="?admin_page=delete_post">Delete Post</a></li>
            <li><a href="?admin_page=active_post">Active post</a></li>
            <hr>
            <li><a href="#">Template Site</a></li>
            <li><a href="#">Aside</a></li>
            <li><a href="#">User Management</a></li>
        </ul>
    </div>
    <div class="mid-right fr">
    <?php
    @$admin_page=$_GET['admin_page'];
	switch($admin_page)
	{
		case 'add_post':
		include_once 'add_post.php';
		break;
		case 'view_post':
		include_once 'view_post.php';
		break;
		case 'update_post':
		include_once 'update_post.php';
		break;
		case 'delete_post':
		include_once 'delete_post.php';
		break;
		case 'active_post':
		include_once 'active_post.php';
		break;
		case 'logout':
		session_destroy();
		header('location:index.php');
		break;
		
	}
	
	
	?>
    
    
    
    
    
    </div>
	<div class="clr"></div>
</div>
<!------------------------Mid Section--------------------------->
<!------------------------Footer Section--------------------------->
<div class="footer">
	<h4>Copyright &copy; myunitbook.com</h4>
</div>
<!------------------------Footer Section--------------------------->



</body>
</html>