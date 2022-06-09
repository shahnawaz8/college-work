<html><head><title>Image uploading on the server</title></head>
<body>
<form method="post" enctype="multipart/form-data">
<center>
    Select image:
    <input type="file" name="img">
    <input type="submit" name="submit" value="Upload">
    </center></form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    
    $imgname=$_FILES['img']['name'];
    $tempname=$_FILES['img']['tmp_name'];
 $con=mysqli_connect("localhost","root","root","facebook")or die("Unable to connect");
    move_uploaded_file($tempname,"image/$imgname");
    $run=mysqli_query($con,"insert into img(image) values('$imgname')");
    
    
}

?>