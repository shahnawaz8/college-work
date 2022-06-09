<html>
<head><title>PHP FUNCTION</title></head>
<body><center><form method="get">
    Enter First NO:
<input type="text" name="f"><br>
    Enter Second NO:
<input type="text" name="s">
    <input type="submit" name="submit" value="submit">
    </form></center>
<?php
    
    if(isset($_GET['submit']))
    {
        @$f=$_GET['f'];
    $s=$_GET['s'];
        $x=$f+$s;
        echo $x;
        

        
    }
    ?>
    
</body>
</html>