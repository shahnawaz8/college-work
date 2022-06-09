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
    <form  method="post" action="otp.php">
        Enter your OTP for <br><b><?php session_start(); echo "+91"." ".$_SESSION['mobile'];?></b><br>
        <input type="number" /> <br><br>
        <input type="submit" name="otpsubmit"  ><br>
        <?php 
        if(isset($_POST['otpsubmit']))
            
{
            echo"<font color='green'>Sign up succecfull Submit</font>";
}
        
        
        ?>
      
        <!--<?php/*   $x=$_GET['mobile'];

    
        
       
 if(isset($_GET['submit']))
 {
     header('Enter OTP here for $x'); 

 }
    
     
      */  ?>        <input type="text">

        -->
        </form>
    </div>
    </body>

</html>