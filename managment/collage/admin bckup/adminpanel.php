<?php
session_start();

if(!$_SESSION['user_name']){
	header('location:admin_login.php?error=login first then come');
}

?>


 
 <!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Admin Panel SFK Collage</title>
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />

<link rel="stylesheet" href="../css/style.css" type="text/css">	

<style>

.maintext{ color:green; font-weight:bold;font-size:17pt;text-align:center;margin-top:14px;padding:33px;}


</style>

</head>
<body>
<!---------------------------header and fix sidebar-------------------------->

	<div class="header">
		<div class="coverhead">
			<a href="index.html" id="logo"><img src="../images/logo.png" alt="logo" height="58" width="381"></a>
			<div class="coverul">
				<div id="topbar"> 
  				   <ul>
  				 	
				 		
					
       					<li><a href="#"><i class="fa fa-user-circle-o fa-fw" aria-hidden="true"></i> <?php echo $_SESSION['user_name'];?></a></li>
						<li><a href="#"><i class="fa fa-gear fa-fw "></i>Setting</a></li>
						<li><a href="#"><i class="fa fa-address-book-o fa-fw" aria-hidden="true"></i>Profile</a></li>
						<li><a href="logout.php"><i class="fa fa-sign-out fa-fw fa-lg " aria-hidden="true"></i>Sign Out</a></li>
     				   </ul> 
  			
				</div>


				
				<ul class="selful">
					<li   class="selected">	<a href="../index.html"><i class="fa fa-home fa-fw"></i>Home</a></li>
					<li><a href="#">Managment</a></li>
					
					<li><a href="#">Admission</a></li>
					<li><a href="#">Careers</a></li>
					<li><a href="#">Downloads</a></li>
				
				
					
				</ul>
			</div>
		</div>
	</div>



	
	<div class="sidebar">	


				<ul class="sideul">
					<li><a href=""><i class="fa fa-info-circle fa-fw"></i>Classes</a></li>
					<li><a href="">Results</a></li>
					<li><a href="#"><i class="fa fa-ellipsis-v fa-fw "></i>Head Office</a></li>
					<li><a href="#">Public Holiday</a></li>
					<li><a href="#">Results</a></li>
					<li><a href="#">I am fk</a></li>
				</ul>



	</div>

<!-----------------------------library page content----------------->
<div class="marginl">
<div class="maintext">
Welecome <?php echo $_SESSION['user_name'];?> to Admin Panel
</div>


<div class="sidemenu marginl">
	<a href="">something</a>
	<a href="">something</a>
	<a href="">something</a>
	<a href="">something</a>
	<a href="">something</a>
	<a href="">something</a>

	

</div>
</div>
	
	
<!-------------footer----------------->
		
<div class="footer">

	<div class="foot1">
		<img src="../images/worldmap.png" alt=""  >
         	 <a href="#">Find School With Google Maps &raquo;</a>
        

	</div>

	<div class="foot2">
		
		<p>Stay Update with us</p>
		<ul class="faico clear">
        	  <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        	  <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        	  <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        	  <li><a class="faicon-flickr" href="#"><i class="fa fa-flickr"></i></a></li>
        	  <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
        	</ul>


	</div>
	<div class="foot3">
		
			<a class="f31" href="#">Administr</a>
			<a class="f32" href="#">Help Desk</a>
			<a class="f33" href="#">Feedback</a>
			<a class="f34" href="#">Complaints</a>
			
	
	</div>
	<div class="foot4">
		<div class="f41">
			<a href="index.html"><i class="fa fa-home fa-lg "></i></a>
			<a href="index.html"><i class="fa fa-info-circle fa-lg "></i></a>
			<a href="index.html"><i class="fa fa-address-book-o fa-lg "></i></a>
			<a href="index.html"><i class="fa fa-sign-out fa-lg "></i></a>
		</div>
		<div class="f42">
			<br>
			<i class="fa fa-envelope fa-fw"></i>realx4rd@gmail.com<br><br>
			<i class="fa fa-phone fa-fw"></i>0346-6882215
			
		</div>
	</div>

	
</div>


</body>
</html>