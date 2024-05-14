<?php

 require'connection.php';
 session_start();

 
$uname = $_POST['uname'];

 $sql = "DELETE FROM admin WHERE Username = '$uname'";

if ($connection->query($sql) === TRUE) {
    echo "<h1>Deleted successful<h1>";
   
} else {
    echo "Error deleting record: " . $connection->error;
    
}


$connection->close();

?>