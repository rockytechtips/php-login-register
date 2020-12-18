<?php

if (isset($_POST["submit"])) {
    // Get the values from the input and declare it in a variable
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    // including Database connection file 
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    // error handlers
    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);
} else {
    header("location: ../login.php");
    exit();
}
