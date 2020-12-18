<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <h3 class="text-center my-5">Sign up</h3>
    <div class="row justify-content-center w-100 mx-auto">
        <div class="col-md-4">
            <form action="includes/signup.inc.php" method="post">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input name="name" type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="uid">Username</label>
                    <input name="uid" type="text" class="form-control" id="uid">
                </div>
                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input name="pwd" type="password" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label for="pwdrepeat">Repeat Password</label>
                    <input name="pwdrepeat" type="password" class="form-control" id="pwdrepeat">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Sign up</button>
            </form>

            <?php
            if (isset($_GET["error"])) {
                if (($_GET["error"]) == "emptyinput") {
                    echo "Fill in all the fields";
                } elseif (($_GET["error"]) == "invaliduid") {
                    echo "Choose a proper username!";
                } elseif (($_GET["error"]) == "invalidemail") {
                    echo "Choose a proper email!";
                } elseif (($_GET["error"]) == "passwordsdontmatch") {
                    echo "Passwords dont match!";
                } elseif (($_GET["error"]) == "stmtfailed") {
                    echo "Something went wrong!";
                } elseif (($_GET["error"]) == "usernametaken") {
                    echo "Username already taken!";
                } elseif (($_GET["error"]) == "none") {
                    echo "You have signed up!";
                }
            }
            ?>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>