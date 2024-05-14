<?php

require'connection.php';



// Retrieve edit details from the form
$First_Name = $_POST['firstName'];
$Last_Name = $_POST['lastName'];
$Username = $_POST['UserName'];
$Email = $_POST['email'];
$Address = $_POST['address'];
$Gender = $_POST['gender'];
$DateOfBirth = $_POST['dob'];
$phone = $_POST['phone'];




// update SQL statement
$sql = "UPDATE admin SET FirstName='$First_Name', LastName='$Last_Name', Gender='$Gender', DateOfBirth='$DateOfBirth', Email='$Email', ContactNumber='$phone', Address='$Address'
        WHERE Username='$Username'";



if ($connection->query($sql) === TRUE) {
     echo 'UPDATED';
} else {
    echo 'Errorupdating the details: ' . $conn->error;
}

$connection->close();

?>
