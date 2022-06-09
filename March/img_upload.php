<?php
$image=$_FILES['img']['name'];
move_uploaded_file($_FILES['img']['tmp_name'],"image"/.$_FILES['img']['name']);
print_r($_POST);




?>
<html>
    <head><title>Login</title>
    <style>
        .a{background-color:lightseagreen; border-radius: 5%; margin-left: 30%; margin-right: 30%; margin-top: 10%;}
        
        </style>
    </head>
    <body><div class="a">
        <form method="post" enctype="multipart/form-data">
            <center>
            Enter your Image here:
            <input type="file" name="img"><br><br>
         <input type="submit" name="save" value="Save">
            </center>
        </form></div>
    </body>
<html></html>
</html>
