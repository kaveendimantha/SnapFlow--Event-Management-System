<?php

require'connection.php';
 session_start();


//get details
$First_Name = $_POST['firstname'];
$Last_Name = $_POST['lastname'];
$Username = $_POST['username'];
$Email = $_POST['email'];
$Address = $_POST['address'];
$Gender = $_POST['gender'];
$DateOfBirth = $_POST['dob'];
$phone = $_POST['contact'];


$sql = "INSERT INTO admin (FirstName,LastName,Username,Email,Address,Gender,DateOFBirth,ContactNumber) VALUES ('{$First_Name}','{$Last_Name}','{$Username}','{$Email}','{$Address}','{$Gender}','{$DateOfBirth}','{$phone}')";

if ($connection->query($sql) === TRUE) {
    echo '<h1>Added admin successfully.<h1>';

} else {
    echo 'Error adding Admin: ' . $connection->error;
    
}


$connection->close();
?>