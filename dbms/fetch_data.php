<?php
$con=mysqli_connect("localhost","root","","newuser")or die("connection failed");



?>
<html>
<head>
    <title>Student Records</title>`
    
</head>
<body>
    
<table border="1" align="center">

    <tr>
       <th colspan="5">  Student Records </th>
    <th><a href="insert1.php">Insert</a> </th>
    </tr>
    <tr>
       <th>Srno</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>dob</th>
        <th>mobile</th>
        <th>Update</th>
    </tr>
    <?php
        $query=mysqli_query($con,"select * from user");
    
        while($arr=mysqli_fetch_assoc($query))
        {
            //echo $arr['uname']." ".$arr['email']." ".$arr['password']."<br>";
            
            ?>
              <tr>
                <th> <?php echo $arr['Id']; ?> </th>
                <th> <?php echo $arr['firstname']; ?> </th>
                <th> <?php echo $arr['lastname']; ?> </th>
                <th> <?php echo $arr['dob']; ?> </th>
                <th> <?php echo $arr['mobile']; ?> </th>
                <th><a href="?postid=<?php echo $arr['Id'];?>&action=update">edit</a> </th>
             </tr>
          <?php    
        }
    
    ?>
</table>    
    
</body>
</html>