<?php
error_reporting(0);


?>
<html><head></head>
<body><center>
    <form method="post" enctype="multipart/form-data">
    <input type="file" name="img">
    <input type="submit" name="submit" value="upload">
    </form></center>
    </body>
</html>
<?php

//$image=$_FILES['img'];
//print_r($image);
$filename=$_FILES['img']['name'];
$tmpname=$_FILES['img']['tmp_name'];
$folder="student/".$filename;
move_uploaded_file($tmpname,$folder);
?>
<img src="<?php echo $folder; ?>" height="100px" wight="100px"/>