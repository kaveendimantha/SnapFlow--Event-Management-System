<?php
if (isset$_post["submit"]){
    $username = $_post["username"];
    $password = $_post["password"];

    require_once 'config.php';
    require_once 'function.inc.php'

    if(emptyInputs($username, $password) !== false){
        exit();
    }

    loginUser($username, $password);

}
else{
    header('location:../php/login.php');
}