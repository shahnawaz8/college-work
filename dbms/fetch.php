<?php
$con=mysqli_connect("localhost","root","","newuser")or die("unable to connect");
$query=mysqli_query($con,"select * from user");
$arr=mysqli_fetch_assoc($query);
echo "<pre>";
//print_r($arr);
while($arr=mysqli_fetch_assoc($query))
{
    echo $arr['Id']."<br>";
    echo $arr['firstname']."<br>";
    echo $arr['lastname']."<br>";
    echo $arr['dob']."<br>";
    echo $arr['mobile'];
}

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    


?>