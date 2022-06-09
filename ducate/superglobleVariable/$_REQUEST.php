<form method="get">
    <pre>
<b>Enter username</b>     :<input type="text" name="username" placeholder="Enter username here"><br>
<b>Enter your Password</b>:<input type="password" name="pass" placeholder="Enter password here"><br>
</pre>
</form>


<form method="post">
    <pre>
<b>Enter username</b>     :<input type="text" name="username" placeholder="Enter username here"><br>
<b>Enter your Password</b>:<input type="password" name="pass" placeholder="Enter password here"><br>
<input type="submit" name="submit" value="Submit">
</pre>
</form>

<?php
session_start();
//print_r($_POST);
echo "Your Username Is:"."<b>".$_SESSION['username']."</b>"."<br>";
echo "Your Curent Password Is:"."<b>".$_REQUEST['pass']."</b>";

?>