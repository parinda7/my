<?php
$servername = "localhost";
$username = "parinda";
$password = "14012546jK.";
$db = "rin";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>