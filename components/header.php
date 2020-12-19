<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blogs</a>
                </li>
                <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<li class='nav-item'><a class='nav-link' href='profile.php'>Profile Page</a></li>";
                    echo "<li class='nav-item'><a class='nav-link' href='includes/logout.inc.php'>Logout</a></li>";
                } else {
                    echo "<li class='nav-item'><a class='nav-link' href='signup.php'>Sign up</a></li>";
                    echo "<li class='nav-item'><a class='nav-link' href='login.php'>Log in</a></li>";
                }
                ?>
            </ul>
        </div>
    </nav>