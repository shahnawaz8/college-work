<?php
$con=mysqli_connect("localhost","root","","newuser")or die("connection failed");

$id=$_GET['id'];

$run=mysqli_query($con,"delete from user where id='$id'");

if($run==true)
{
   header("location:fetch_data2.php");
   //echo "data deleted";
}
else
{
    echo "data not deleted";
} 

?>