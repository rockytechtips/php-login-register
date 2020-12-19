<?php include "components/header.php" ?>

    <h3 class="text-center my-5">Login</h3>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <form action="includes/login.inc.php" method="POST">
                <div class="form-group">
                    <label for="name">Username/Email</label>
                    <input name="uid" type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="pwd">Password</label>
                    <input name="pwd" type="password" class="form-control" id="pwd">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
            </form>
            <?php
            if (isset($_GET["error"])) {
                if (($_GET["error"]) == "emptyinput") {
                    echo "Fill in all the fields";
                } elseif (($_GET["error"]) == "wronglogin") {
                    echo "Incorrect Login information!";
                }
            }
            ?>
        </div>
    </div>

    <?php include "components/footer.php" ?>