<html><head></head><body><div align="center">
    <h1>Adding Two no. Without Using "+" operator</h1>
    <form method="get">
    <h2>Enter numbers:</h2>
    <input type="number" name="num" autofocus placeholder="enter first number"><br><br>
    <input type="number" name="num1" autofocus placeholder="enter second number"><br><br>
    <input type="submit" name="submit" value="Find Sum"></form>
</div></body></html>
<?php
//$arr=$_GET['num'];
//
//if(isset($arr['submit']))
//{$temp=0;
//    for($i=0;$i<=$arr;$i++)
//    {
//        $temp=$temp+$arr;
//        $temp++;
//    }
//    echo $temp;
//
  $a=$_GET['num'];
  $b=$_GET['num1'];
    for($i=0;$i<$a;$i++)
    {
        $b++;
    }
    


?>
<div align="center" style="color:Green; font-size:100px;"><b><?php echo $a."+".$_GET['num1']."=".$b;  ?></b></div>