<html>
<haed><link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin.css">
</haed>
    
    
    
<body>
    
    <div id="div1">
        <div class="menu">    <a href="#"  id="h"><span class="fa fa-home fa-fw">Home</span></a></div>
        <div class="menu">    <a href="#" class="fa fa-book fa-fw">Library</a></div>
        <div class="menu">  <a href="#" class="fa fa-mobile fa-fw">Contact</a> </div>
        <div class="menu">  <a href="#" ><span class="fa fa-refresh fa-spin fa-fw"></span>Refresh</a></div>
        
        <div class="menu"> <a href="#" ><span class="fa fa-user fa-fw"></span>Help</a></div>        
        <div class="menu"> <a href="login1.php" id="a2" ><span class="fa fa-power-off fa-fw"></span>Logout</a></div>
    </div>
    <div id="div2">
        
        
        
    <div id="div2-1">    <marquee><b>Welcome <i><?php session_start();  echo $_SESSION['name']; ?></i></b></marquee></div>
    <div id="div2-2"> <img src="aadhar.jpg" height="150px" width="110px"><br><a href="#" id="p"><?php echo $_SESSION['name']; ?></a> </div>
    
    
    </div>
    
    </body>
</html>