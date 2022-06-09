<html><head></head>
<body>
    <form method="post" action="output.php">
    <table bgcolor="#C4C4C4" align="center" width="380" border="0">
        <tr><td align="cenetr" colspan="2"><font color="#0000FF" size="5">Inserted Data from Html Form</font></td></tr>
        <tr><td width="312"></td> <td width="172"></td> </tr>
        <tr><td> Your Name</td><td><input type="text" value="<?php echo $_POST['name'];?>"/> </td></tr>
        <tr><td> Your Email:</td><td><input type="email" value="<?php echo $_POST['email'];?>"/> </td></tr>
        <tr><td> Your password:</td><td><input type="password" value="<?php echo $_POST['pass'];?>"/></td> </tr>
        <tr><td> Your Mobile no.:</td><td><input type="number" value="<?php echo $_POST['mobile'];?>"/></td> </tr>
        <tr><td> Your Address:</td><td><textarea readonly=''><?php echo $_POST['add'];?></textarea></td> </tr>
        <td align="center" colspan="2"><input type="submit" value="Save" name="submit" /> </td>
        </table></form>
     </body>
</html>