<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "password";

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];


// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


$sql = "INSERT INTO `sameer`.`users` ( `username`, `email` , `password`) VALUES ( '".$username."','".$email."','".$password."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
