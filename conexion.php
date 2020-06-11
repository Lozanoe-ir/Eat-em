<?php  

$servername = "localhost";
$database = "eatem";
$username = "root";
$password = "";
echo "Connected successfully";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{

	echo "Connected successfully";
}


?>