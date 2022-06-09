<html><head><title>Show data From facebook</title></head><body>
    <table border="1" align="center">
    <tr><th colspan="4">Present Data in Facebook database<a  href="facebookinsert.php">Add Record</a> </th></tr>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Delete</th>
    </tr>
<?php
$con=mysqli_connect("localhost","root","root","facebook")or die("unable to connect");
$query=mysqli_query($con,"select * from client");
    while($arr=mysqli_fetch_assoc($query))
    {
        ?>
        <tr>
            <td style="background-color:lightgreen"><?php echo $arr['Id']; ?>      </td>
            <td style="background-color:lightblue"><?php echo $arr['Username']; ?></td>
            <td style="background-color:red"><?php echo $arr['Password']; ?></td>
            <th> <a href="facebookdelete.php?id=<?php echo $arr['Id']; ?>">Delete</a> </th>
        </tr>
        <?php
        
        
    }

        ?>
        
    </table>
    
    </body></html>