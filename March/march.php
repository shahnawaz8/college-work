<html>
    <head><title>Login</title>
    <style>
        .a{background-color:lightseagreen; border-radius: 5%; margin-left: 30%; margin-right: 30%; margin-top: 10%;}
        
        </style>
    </head>
    <body><div class="a">
        <form method="get">
            <center>
            Enter your Name here:
            <input type="text" name="uname" value=" " placeholder="Enter name"><br><br>
            Enter your email here:
            <input type="email" name="email" value="" placeholder="xyz@gmial.com"><br><br>
            Enter your Password here:
            <input type="password" name="pass" value="" placeholder="enter password"><br><br>
            <input type="submit" name="save" value="Save">
            </center>
        </form></div>
    </body>
<html></html>
    <?php
    $con=mysqli_connect("localhost","root","","project")or die("unable to coonect");
    if(isset($_GET['save'])){
        $uname=$_GET['uname'];
        $email=$_GET['email'];
        $pass=$_GET['pass'];
        $run=mysqli_query($con,"insert into userdata1(name,email,password) values('$uname','$email','$pass')");
        if($run==true)
        {
            echo"data is inserted";
        }
        else
        {
            echo"data is no inserted";
        }
        
    }
    ?>