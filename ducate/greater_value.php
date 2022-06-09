<form method="get">Enter the value of X<br><input type="number" name="X"><br>Enter the value of Y<br><input type="number" name="Y"><br>Enter the value of Z<br><input type="number" name="Z"><br><input type="submit" name="s"> </form>

<?php

$x=$_GET['X'];
$y=$_GET['Y'];
$z=$_GET['Z'];
if($x>$y && $x>$z)
{
    echo"$x";
}
elseif($y>$x && $y>$z)
{
    echo"$y";
}
else {echo"$z";}

?>
