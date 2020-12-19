<?php include "components/header.php" ?>

<div class="container my-5 pt-5 pb-3">
    <div class="text-center jumbotron py-5">
        <h3 class="mb-5 mt-3">Profile Page</h3>
        <div class="row justify-content-center">
            <div class="col-md-4 my-3">
                <div class="card border-0 shadow">
                    <a href="signup.php" class="text-decoration-none">
                        <div class="card-body">
                            <?php
                            if (isset($_SESSION["useruid"])) {
                                echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
                            }
                            ?>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "components/footer.php" ?>