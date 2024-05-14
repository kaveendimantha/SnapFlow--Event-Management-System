<?php

$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "event_photography";

// Create connection
$conn = new mysqli($serverName, $username, $password, $dbName);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}