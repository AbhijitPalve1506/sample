<?php
$host = 'db';  // match docker-compose service name
$dbname = 'attendence';
$user = 'root';
$pass = 'Palve@56';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>