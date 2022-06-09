<?php
$con=mysqli_connect("localhost","root","","project")or die(unable to connect);
$query=mysqli_query($con,"select * from userdata1");
while(mysqli_fetch_assoc())
?>