<html><head></head>
<body>
    <form method="post" enctype="multipart/form-data">
    <table bgcolor="#C4C4C4" align="center" width="380" border="0">
        <tr><td align="cenetr" colspan="2"><font color="#0000FF" size="5">Registration Form</font></td></tr>
        <tr><td width="312"></td> <td width="172"></td> </tr>
        <tr><td>Enter your Name</td><td><input type="text" name="name"/> </td></tr>
        <tr><td>Enter your Email:</td><td><input type="email" name="email"/> </td></tr>
        <tr><td>Enter your password:</td><td><input type="password" name="pass"/></td> </tr>
        <tr><td>Enter your Mobile no.:</td><td><input type="number" name="mobile"/></td> </tr>
        <tr><td>Upload a Image:</td><td><input type="file" name="img"></td> </tr>
        <td align="center" colspan="2"><input type="submit" value="Save" name="submit" /> </td>
        </table></form>
     </body>
</html>
<?php
echo"<pre>";
//print_r($_FILES['img']);
$name=$_FILES['img']['name'];
$_Tname=$_FILES['img']['tmp_name'];
$_type=$_FILES['img']['type'];
$size=$_FILES['img']['size'];

echo $name."<br>".$_Tname."<br>".$_type."<br>"."$size";

?>
