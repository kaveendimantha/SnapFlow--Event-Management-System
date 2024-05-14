<?php

function invalidUserID($username) {
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        return true;
    } else {
        return false;
    }
}


function passwordMatch($password, $confirmpassword) {
    if ($password !== $confirmpassword) {
        return false;
    } else {
        return true;
    }
}

function userExistsSignup($conn, $username, $email) {
    $sql = "SELECT * FROM `user` WHERE Username = ? OR Email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../register.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    if (mysqli_fetch_assoc($resultData)) {
        return true;
    } else {
        return false;
    }
}

function createUser($conn, $firstname, $lastname, $usersname, $email, $contact, $address, $gender, $dob, $password) {
    $sql = "INSERT INTO user (FirstName, LastName, Username, Email, Address, Gender, DateOfBirth, ContactNumber, Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../register.php?error=stmtfailed");
        exit();
    }
    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sssssssss", $firstname, $lastname, $usersname, $email, $address, $gender, $dob, $contact, $hashedpassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../register.php?error=none");
    exit();
}