<?php require_once 'config/database.php';
require_once 'config/function.php';
#######################################################
$query="SELECT * FROM `public_temp` WHERE `temp_mode`=1";
$temp_data=mysqli_query($dbcon,$query);
$temp_res=mysqli_fetch_array($temp_data);


#######################################################


head("CMS Project",$temp_res['site_css'],$temp_res['site_name']);
?>
<html>
    <body>
    <a href="page.php">New Page</a>
</body>
</html>