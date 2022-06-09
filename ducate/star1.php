<?php
for($i=1;$i<=10;$i++)
{
    for($j=1;$j<=9;$j++)
    {
        if($j<=6-$j && $j=4+$j)
        {
            echo "*";
        }
        else
        {
            echo"&nbsp";
        }
        
    }
   echo "<br>";
}





?>