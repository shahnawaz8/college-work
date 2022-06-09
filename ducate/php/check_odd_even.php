<html><head> </head><body><center> <form method="get"><h1 >Check here the no. is odd or even</h1><h2>Enter the no. you want to check</h2> <input type="text" name="1"/> <input type="submit" name="3" value="check"/>  </form>  <?php
    error_reporting(1);
    $x=$_GET['1'];
    if(isset($_GET['3']))
    {
        if($x%2=="0")
        {
            echo"<font color='blue'size='100px'>The no.$x is Even</font>";
        }
        else
        {
            echo"<font color='red' size='100px'>The no.$x is ODD</font>";
        }
    }
    ?></center></body></html>