<form method="get">
    <pre>
<b>Enter username</b>     :<input type="text" name="username" placeholder="Enter username here"><br>
<b>Enter your Email</b>   :<input type="email" name="email" placeholder="Enter password here"><br>
<b>Enter your Password</b>:<input type="password" name="pass" placeholder="Enter password here"><br>
<input type="submit" name="submit" value="submit">
</pre>
</form>


<?php
//mysqli_connect("host_name","database_Usermane","password","database_name");
$con=mysqli_connect("localhost","root","root","mysite")or die("connection failed");

$arr=$_GET;
echo "<pre>";
print_r($arr);
session_start();
echo $_SESSION['mobile'];
if(isset($arr['submit']))
{
    $username=$arr['username'];
    $password=$arr['pass'];
    $email=$arr['email'];
$run=mysqli_query($con,"insert into student(Username,Email,Password) values('$username','$email','$password')");
   if($run==true)
   {
       echo"Data Inserted";
   }
    else
    {
        echo"Not inserted";
    }
    
}
//$_SESSION['username']=$_GET['username'];
//$Username= $_SESSION['username'];

?>