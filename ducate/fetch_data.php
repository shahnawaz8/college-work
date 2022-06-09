
<html>
<head></head>
<body>
    <table border="1" align="center" style="background-color:wheat;">
       <tr>
        <th colspan="5">Student data</th>
       </tr>
           <tr>
             <th>Sr.No</th>
             <th>First Name</th>
             <th>Last Name</th>
             <th>DOB</th>
             <th>Mobile</th>
           </tr>
    
    <?php
$con=mysqli_connect("localhost","root","root","newuser")or die("unable to connet");
$query=mysqli_query($con,"select * from user");

while($arr=mysqli_fetch_assoc($query))
{
    echo "<pre>";
   // echo $arr['firstname']." ".$arr['lastname']." ".$arr['dob']." ".$arr['mobile'];
    //print_r($arr);
    ?><tr>
        <th><?php echo $arr['Id']; ?></th>
        <th><?php echo $arr['firstname']; ?></th>
        <th><?php echo $arr['lastname'];?></th>
        <th><?php echo $arr['dob'];?></th>
        <th><?php echo $arr['mobile'];?></th>
        
        
        </tr>
    <?php
    
}
?>
    
    </table>
    
    
    </body></html>