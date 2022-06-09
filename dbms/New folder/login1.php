<html><head>
   <link rel="stylesheet" href="login1.css">
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
    
            </form><a href="facebookinsert.php">Create new Acount</a><br> 
            <?php
            session_start();
            $_SESSION['name']=$_POST['id'];
            $name=$_SESSION['name'];
            $con=mysqli_connect("localhost","root","","facebook")or die("unable to connect");
            $query=mysqli_query($con,"select * from client");
            while($arr=mysqli_fetch_assoc($query))
            {
                   $t=$arr['Username'];
                   $z=$arr['Password'];
                
                   
                   $x=$_POST['id'];
                   $y=$_POST['pass'];
                      if(isset($_POST['ss']))
                       {
                          if($x==$t && $y==$z)
                            {
                             header('location:admin.php');
                            
                            }
                        
                       }
            }
            
    ?>
        </div></center>
    </body></html>