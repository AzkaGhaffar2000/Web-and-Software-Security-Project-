<?php
$host = "localhost";
$port = 8889; 
$username = "root";
$password = "root";
$dbName = "nat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName );
 //Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>