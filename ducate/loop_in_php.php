<?php
for($i=1;$i<=10;$i++){
for($j=1;$j<=10;$j++){
    if($j==5 or $j==6)
    {
        continue;
    }
    else
    {
 echo $i*$j." ";          
    }
}
echo"<br>"; 
}
?>