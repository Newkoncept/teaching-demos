<?php
include_once "head.php";
include_once "navbar.php";

?>

<div class="container">
    <h1 class="mb-5 mt-5 text-center">Register</h1>
    <form action="process.php" method="POST">
        <?php
        if (isset($_GET["error"])) {
            echo "
                <div class='bg-danger p-2 text-center mb-4 rounded text-light'> 
                    $_GET[error]
                </div>
            ";
        }
        ?>

        <input type="email" class="form-control mb-3" placeholder="Email Address" name="email">
        <input type="text" class="form-control mb-3" placeholder="First Name" name="firstName">
        <input type="text" class="form-control mb-3" placeholder="Last Name" name="lastName">
        <input type="password" class="form-control mb-3" placeholder="Password" name="pwd">
        <input type="password" class="form-control mb-3" placeholder="Confirm Password" name="confirmPwd">
        <button type="submit" class="btn btn-lg btn-primary" name="registerBtn">Register</button>
    </form>
</div>