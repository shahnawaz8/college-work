<html><head></head><body></body>
<form method="get">
    Enter First No.<br><input type="number" name="H"><br>Enter Second No.<br><input type="number" name="I"> <br>
    <input type="submit" name="e">
    </form><?php
$x=$_GET['H'];
$y=$_GET['I'];
    
    if(isset($_GET['e']))
    {
echo"$x<br>";
       
    }
 $g= $x*3.84628;
        echo"<input type='text' value='$g' readonly=''/>"

    ?></html>