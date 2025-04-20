<?php
$host = 'localhost';
$dbname = 'habittracker';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname) or die('Could not connect to database');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>