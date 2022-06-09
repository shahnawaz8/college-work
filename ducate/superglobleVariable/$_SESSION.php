<form method="get">
    <pre>
<b>Enter username</b>     :<input type="text" name="username" placeholder="Enter username here"><br>
<b>Enter your Email</b>   :<input type="password" name="email" placeholder="Enter password here"><br>
<b>Enter your Password</b>:<input type="password" name="pass" placeholder="Enter password here"><br>
<input type="submit" name="submit" value="Submit">
</pre>
</form>


<?php
//mysqli_connect("host_name","database_Usermane","password","database_name");
$con=mysqli_connect("localhost","root","root","mysite")or die("connection failed");



session_start();
$_SESSION['username']=$_GET['username'];
$Username= $_SESSION['username'];
echo $Username;

?>