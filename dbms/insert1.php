<html><head><style>
    #d1{ border: 2px solid blue;
        border-bottom-left-radius: 20px;
        border-top-right-radius: 20px;
        height: 300px;
        width: 210px;
        padding-left: 30px;
        background-color: lightcyan;
       margin-left: 40%;
        margin-top: 5%;
        
    }
    
    
    
    </style></head>
    
    
    
    <body bgcolor="gray">
        <div id="d1">
    <form action="" method="get">
        Enter your first name:<br>
        <input type="text" name="fname" value="" required placeholder="First name"><br><br>
        Enter your last name:<br>
        <input type="text" name="lname" value="" required placeholder="last name"><br><br>
        Enter your DOB:<br>
        <input type="date" name="dob" value="" required><br><br>
        Enter your Mobile No.<br>
        <input type="number" name="mobile" required placeholder="ex +91##########"><br><br>
        <input type="submit" name="submit" value="Add Record" >
        <a href="fetch_data.php">Veiw Record</a>
            </form>
    </div>
    </body>

</html>
<?php
$con=mysqli_connect("localhost","root","","newuser")or die("unable to connect");
$arr=$_GET;
if(isset($arr['submit']))
{
    $firstname=$arr['fname'];
    $lastname=$arr['lname'];
    $dob=$arr['dob'];
    $mobile=$arr['mobile'];
    
    $run=mysqli_query($con,"insert into user(firstname,lastname,dob,mobile) values('$firstname','$lastname','$dob','$mobile')");
    if($run==true)
    {
        echo "Data succesful inserted";
        //header("location:fetch_data2.php");
    }
    else
    {
        echo "not inserted";
    }
    
    
    
}



?>