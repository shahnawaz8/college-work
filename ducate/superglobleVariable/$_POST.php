<form method="post">
    <pre>
<b>Enter username</b>     :<input type="text" name="username" placeholder="Enter username here"><br>
<b>Enter your Password</b>:<input type="password" name="pass" placeholder="Enter password here"><br>
<input type="submit" name="submit" value="Submit">
</pre>
</form>
<?php
//print_r($_POST);

echo "Your Username Is:"."<b>".$_POST['username']."</b>"."<br>";
echo "Your Password Is:"."<b>".$_POST['pass']."</b>";

?>
