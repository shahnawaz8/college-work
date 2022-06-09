<html><head><title>Insert date into database</title></head><body>
    <form method="get">
       <table border="1" align="center" style="margin-top:130px; background-color:rgba(211, 211, 211, 0.71);">
        <tr><th colspan="3">Insert data into the FACEBOOK database</th></tr>
        <tr><th>Enter Username:<font color="red">*</font></th><th colspan="2"><input type="text" name="username" placeholder="enter username here" required> </th></tr>
        <tr><th>Enter Password:<font color="red">*</font></th><th colspan="2"><input type="password" name="password" required placeholder="enter password here"> </th></tr>
        <tr><th><a href="facebookfetch.php">View Record</a></th><th style="background-color:green"><input style="background-color:lightgreen" type="submit" name="submit" value="Add Record to Database"></th><th><a href="login1.php">Login</a></th></tr>
       </table>
    </form>
    </body></html>
<?php
$con=mysqli_connect("localhost","root","root","facebook")or die("Unable to connect");
if(isset($_GET['submit']))
{
    $username=$_GET['username'];
    $password=$_GET['password'];
    $run=mysqli_query($con,"insert into client(Username,Password) values('$username','$password')");
    if($run==true)
    {
        echo "<font size='110px' color='green'>Data succesfully inserted</font><br>"."<a href='login1.php'>Login</a>";
        
        
    }
    else
    {
        echo "<font size='110px' color='red'>Data not inserted</font>";
    }
}

?>