<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

/* mysql_connect($host,$user,$password);
mysql_select_db($db); */
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection success!";
}

if (isset($_POST['adminname'])) {

    $uname = $_POST['adminname'];
    $password = $_POST['password'];

    $sql = "select * from adminlogin where adminname='" . $uname . "'AND password='" . $password . "' limit 1";

    $result = $conn($sql);

    if ($result == 1) {
        echo " You Have Successfully Logged in";
        exit();
    } else {
        echo " You Have Entered Incorrect Password";
        exit();
    }
}
?>