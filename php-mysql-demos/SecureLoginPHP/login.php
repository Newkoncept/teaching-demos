<?php
include_once "head.php";
include_once "navbar.php";
?>

<div class="container">
    <h1 class="mb-5 mt-5 text-center">Login</h1>
    <form action="process.php" method="POST">
        <?php
        if (isset($_GET["success"])) {
            echo "
                <div class='bg-success p-2 text-center mb-4 rounded text-light'> 
                    $_GET[success]
                </div>
            ";
        }
        if (isset($_GET["error"])) {
            echo "
                <div class='bg-danger p-2 text-center mb-4 rounded text-light'> 
                    $_GET[error]
                </div>
            ";
        }
        ?>

        <input type="email" class="form-control mb-3" placeholder="Email Address" name="email">
        <input type="password" class="form-control mb-3" placeholder="Password" name="pwd">
        <button type="submit" class="btn btn-lg btn-primary" name="loginBtn">Login</button>
    </form>
</div>