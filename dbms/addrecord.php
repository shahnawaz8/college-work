<html><head>
    <style>
        body{
            background-image:url(163745_GOExlm6.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;                 
        }</style>
    </head><body><form method="get">
    <table border="1" align="center" style="margin-top:10%; font-size:110%; background-color:white">
        <tr><th colspan="2">Login Here</th></tr>
    <tr><th>Enter Username</th><th><input type="text" placeholder="enter username" name="username">  </th></tr>
    <tr><th>Enter Password</th><th><input type="password" placeholder="enter your password" name="pass">  </th></tr>
        <tr><th colspan="2"><input type="submit" name="Login" value="Login" style="width:38%; background-color:lightblue;"> 
            <input type="submit" name="signup" value="Sign Up" style="width:59%; background-color:lightgreen;">  </th></tr>
    </table></form></body></html>
<?php
$con=mysqli_connect("localhost","root","","newuser")or die("connection failed");



?>