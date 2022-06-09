<html><head><title></title>
    <link rel="stylesheet" href="login.css"> </head>
<body>
    <form method="get">
    <Center>
    <div id="d"><div id="sd1">LOGIN</div>
        Enter User ID: 
    <input type="text" name="userid" placeholder="Enter your user Id" /><br>
        Enter Password:
    <input type="password" name="pass" placeholder="Enter Your Password" /><br><br>
    <input type="button" name="submit" value="SUBMIT"/><br><br>
    <a href="#">Create a New Acount</a>      
    </div>
        </Center></form>
    </body>
    
</html>
<?php
    $con=mysqli_connect("localhost","root","","pubg")or die("unble to connect");
    if(isset($_GET['submit']))
    {
    $userid=$_GET['userid'];
    $password=$GET['pass'];
    $run=mysqli_query($con,"insert into sanhok(Userid,Password) values('$userid','$password')");
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