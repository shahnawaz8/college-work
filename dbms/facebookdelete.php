<?php
$con=mysqli_connect("localhost","root","root","facebook")or die("connection failed");

$id=$_GET['id'];

$run=mysqli_query($con,"delete from client where id='$id'");

if($run==true)
{
   header("location:facebookfetch.php");
  // echo "data deleted"."<br><a href='facebookfetch.php'>Back</a>";
}
else
{
    echo "data not deleted";
} 

?>