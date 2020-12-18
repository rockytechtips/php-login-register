<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat)
{
    $result = false;
    // if any input field is empty then return true 
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUid($username)
{
    $result = false;
    //if there's a mistake in password then return true
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email)
{
    $result = false;
    // if it is not a proper email then return true 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat)
{
    $result = false;
    // if password does not match then return true 
    if ($pwd !== $pwdRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email)
{
    // "?" is a placeholder
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    // run this sql statement inside the database and checks for an error
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    // executes the statement $stmt
    mysqli_stmt_execute($stmt);

    // grab the data
    // gets the result from particular stmt
    $resultData = mysqli_stmt_get_result($stmt);

    //fetching the data and associated to the array
    // if there is data inside the DB with this username then grab the data with the username
    // then assign the data into the $row variable
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    //if there is no data inside the DB with this username then return false
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}


function createUser($conn, $name, $email, $username, $pwd)
{
    // declaring the statement to insert data into Database
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    // run this sql statement inside the database and checks for an error
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    //encrypts the password
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    // executes the statement $stmt
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd)
{
    $result = false;
    // if any input field is empty then return true 
    if (empty($username) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd)
{
    $uidExists = uidExists($conn, $username, $username);

    // if username/email is false then displays error
    if ($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    //this checks if input password and db password are same then return true  
    $checkPwd = password_verify($pwd, $pwdHashed);

    //if password is false then display error
    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }     
    //if password is true then redirect to homepage
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("location: ../index.php");
        exit();
    }
}
