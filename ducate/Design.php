<html>
<head><title>www.royaleshoes.in</title>
    
    <link rel="stylesheet" href="web.css">
</head>
<body>
    
     <?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 
    
    
    <h1><marquee>Welcome To Rolaye Shoes Collection</marquee></h1>
    
    </body>

</html>