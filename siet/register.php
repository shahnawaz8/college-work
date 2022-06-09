<?php
require_once 'config/database.php';
//print_r($_POST);
if(isset($_POST['reg']))
{
	extract($_POST);
    
    $query="SELECT * FROM `user_info` WHERE `user_email`='$user_email'";
    $run=mysqli_query($dbcon, $query);
    $result=mysqli_fetch_array($run);
    
	if(empty($user_fname) and empty($user_lname) and empty($user_email) and empty($user_pass) )
	{
		$msg="Please Fill The Information";
	}
	else
	{
		$er=1;
	}
	if($er==1)
        
        
	{  
        if($result['user_email']==$user_email)
         {
               $a="Email Already Registered*";
         }
     else
     {
         
    
		if($user_pass==$user_repass)
		{
			$query="INSERT INTO `user_info` (`id`, `user_fname`, `user_lname`, `user_email`, `user_pass`) VALUES (NULL, '$user_fname', '$user_lname', '$user_email', '$user_pass')";
			mysqli_query($dbcon,$query);
			
		}
		else
		{
			$msg="Password Do Not Match";
		}
	}
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SIET Collage</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
              	<h1>SIET Mail Box</h1>
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="post">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="user_fname" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="user_lname" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" name="user_email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                    <?php echo"<font style='color:red; font-style:italic; font-size: 80%;'>$a</font>";?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="user_pass" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="user_repass" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                  </div>
                </div>
                <input type="submit" name="reg" value="Register Account" class="btn btn-primary btn-user btn-block">
                <hr>
               
              </form>
              <?php echo @$msg;?>
              <hr>
              <div class="text-center">
                <a class="small" href="index.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
</body>
</html>
