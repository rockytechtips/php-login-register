<?php include "components/header.php" ?>

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

    <?php include "components/footer.php" ?>