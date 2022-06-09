<?php
$con=mysqli_connect("localhost","root","","newuser")or die("connection failed");



?>
<html>
<head>
    <title>Student Records</title>
    
</head>
<body>
    
<table border="1" align="center">

    <tr>
       <th colspan="7">  Student Records  <a href="insert1.php">Add Record</a> </th>
    </tr>
    <tr>
       <th>Srno</th>
        <th>Id</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>dob</th>
        <th>mobile</th>
        <th>delete</th>
    </tr>
    <?php
        $query=mysqli_query($con,"select * from user");
    $srno=1;
        while($arr=mysqli_fetch_object($query))
        {
            //echo $arr['uname']." ".$arr['email']." ".$arr['password']."<br>";
            ?>
              <tr>
                  <th> <?php echo $srno; ?>  </th>
                <th> <?php echo $arr->Id; ?> </th>
                <th> <?php echo $arr->firstname; ?> </th>
                <th> <?php echo $arr->lastname; ?> </th>
                <th> <?php echo $arr->dob; ?> </th>
                <th> <?php echo $arr->mobile; ?> </th>
                <th> <a href="delete.php?id=<?php echo $arr->Id; ?>">Delete</a> </th>
             </tr>
          <?php 
            $srno++;
        }
    
    ?>
</table>    
    
</body>
</html>