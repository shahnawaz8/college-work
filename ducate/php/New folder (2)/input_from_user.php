<html><head>
    <title>Sum of two no.</title>
   
    
    
    </head>
    
    <body>
<form method="GET">
        <h2>Enter first no.</h2>
    <input type="text" name="f"/>
    <h2>Enter second no.</h2>
    <input type="text" name="s"/>
    <input type="submit" value="ADD"/>
        
        </form>
    
     
    
    </body><?php
    error_reporting(1);
    $x=$_GET['f'];
    $y=$_GET['s'];
    $z=$x+$y;
    echo"<font size='70px'>Sum of $x+$y=$z</font>";
        $con=mysqli_connect("localhost","root","","users");
    
     ?></html>