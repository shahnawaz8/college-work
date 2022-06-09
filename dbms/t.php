<table border="1"><?php
for($i=1;$i<=30;$i++)
{
$con=mysqli_connect("localhost","root","root","facebook")or die("unable to connect");
$query=mysqli_query($con,"select * from client where id='$i'");
    
    while($arr=mysqli_fetch_assoc($query))
{
     ?>
        <tr>
            <td style="background-color:lightgreen"><?php echo $arr['Id']; ?>      </td>
            <td style="background-color:lightblue"><?php echo $arr['Username']; ?></td>
            <td style="background-color:red"><?php echo $arr['Password']; ?></td>
        </tr>
        <?php
        
}
}
    ?></table>