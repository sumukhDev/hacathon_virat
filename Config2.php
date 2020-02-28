<?php
$servername = "192.168.43.31";
$username = "admin";
$password = "admin";
$dbname = "hackathon";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
?>