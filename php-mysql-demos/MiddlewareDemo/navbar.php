<nav>
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <?php

    if (isset($_SESSION["username"])) {
        echo '
                    <li><a href="admin.php">admin</a></li>
                    <li><a href="logout.php">logout</a></li>
                ';
    } else {
        echo '
                <li><a href="login.php">login</a></li>
                <li><a href="register.php">register</a></li>
                ';
    }
    ?>
</nav>