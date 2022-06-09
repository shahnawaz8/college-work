<html>
<head>
    <style>
        .w{ height: 100px;width: 100px; border-radius: 50px;background-color: green;     margin-left: 50%;margin-top: 5%;}
        .x{ height: 100px;width: 100px; border-radius: 50px;background-color: yellow;    margin-left: 50%;margin-top: 5%;}
        .y{ height: 100px;width: 100px; border-radius: 50px;background-color: red;       margin-left: 50%;margin-top: 5%;}
        .z{ height: 100px;width: 100px; border-radius: 50px;background-color: blue;      margin-left: 50%;margin-top: 5%;}
        .z1{height: 100px;width: 100px; border-radius: 50px;background-color: cyan;      margin-left: 50%;margin-top: 5%;}
        .z2{height: 100px;width: 100px; border-radius: 50px;background-color: magenta;   margin-left: 50%;margin-top: 5%;}
        .z3{height: 100px;width: 100px; border-radius: 50px;background-color: pink;      margin-left: 50%;margin-top: 5%;}
        .z4{height: 100px;width: 100px; border-radius: 50px;background-color: gold;      margin-left: 50%;margin-top: 5%;}
        .z5{height: 100px;width: 100px; border-radius: 50px;background-color: blueviolet;margin-left: 50%;margin-top: 5%;}
        .z6{height: 100px;width: 100px; border-radius: 50px;background-color: orange;    margin-left: 50%;margin-top: 5%;}
        
        
        
    </style>
</head>
    
<body>
    <form method="POST">    
    <input type="submit" name="b" value="Green"   style="background-color:     green;">
    <input type="submit" name="a" value="Yellow"  style="background-color:    yellow;">
    <input type="submit" name="c" value="Red"     style="background-color:       red;">
    <input type="submit" name="d" value="Blue"    style="background-color:      blue;">
    <input type="submit" name="e" value="Cyan"    style="background-color:      cyan;">
    <input type="submit" name="f" value="Magenta" style="background-color:   magenta;">
    <input type="submit" name="g" value="Pink"    style="background-color:      pink;">
    <input type="submit" name="h" value="Gold"    style="background-color:      gold;">
    <input type="submit" name="i" value="Violet"  style="background-color:blueviolet;">
    <input type="submit" name="j" value="orange"  style="background-color:    orange;">
    </form>

    <?php 
     if(isset($_POST['b']))
    {
    echo"<div class='w'></div>";
     }
     if(isset($_POST['a']))
    {
    echo"<div class='x'></div>";
     }
     if(isset($_POST['c']))
    {
    echo"<div class='y'></div>";
     }
     if(isset($_POST['d']))
    {
    echo"<div class='z'></div>";
     }
     if(isset($_POST['e']))
    {
    echo"<div class='z1'></div>";
     }
     if(isset($_POST['f']))
    {
    echo"<div class='z2'></div>";
     }
     if(isset($_POST['g']))
    {
    echo"<div class='z3'></div>";
     }
     if(isset($_POST['h']))
    {
    echo"<div class='z4'></div>";
     }
     if(isset($_POST['i']))
    {
    echo"<div class='z5'></div>";
     }
     if(isset($_POST['j']))
    {
    echo"<div class='z6'></div>";
     }
    
    ?>
    
   
    </body>
</html>