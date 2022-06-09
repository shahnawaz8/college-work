<html><head>
   <link rel="stylesheet" href="login.css">
    </head><body bgcolor="blue">
   
    
    <center>
        <div id="div2">
        
        
        <form method="post">
            <div id="div1">Login</div>
    <h3>Enter your UserName:</h3>
        <input class="i1" type="text" name="id" placeholder="Enter your userid">
    <h3>Enter your password:</h3>
        <input class="i1" type="password" name="pass" placeholder="Enter your Password"><br><br>
        <input  type="submit"  name="ss" value="Submit">
    
            </form><a href="signUp.php">Create new Acount</a><br> 
            <?php
            $con=mysqli_connect("localhost","root","","facebook")or die("unable to connect");
    error_reporting(1);
    $x=$_POST['id'];
    $y=$_POST['pass'];
    if(isset($_POST['ss']))
    {
        if($x=="mohdshahnawaz846@gmail.com" && $y=="mohd123")
        {
         header('location:admin.php');
        }
        else /*if($x=="8650090359" && Sy=="123")
        {
          header('location:table.php');  
            
        }
        else*/
        {
            echo"<font color='red'>Invalid id or password</font>";
        }
        
    }
    
            ?>
        </div></center>
    </body></html>