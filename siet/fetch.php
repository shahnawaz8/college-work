<?php
require_once 'config/database.php';
        //$result=mysqli_fetch_array(mysqli_query($dbcon,"SELECT * FROM `user_info` WHERE `user_email`='$user_email'"));

$query="SELECT * FROM `user_info` WHERE `user_email`='$user_email'";
    $run=mysqli_query($dbcon, $query);
    $result=mysqli_fetch_array($run);
print_r('$result');

    ?>
        
        