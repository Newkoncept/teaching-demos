<nav>
    <a href="index.php" class="logo">LOGO</a>

    <ul>
        <li><a href="index.php" class="nav-item">Home</a></li>
        <li><a href="#" class="nav-item">About</a></li>
        <li><a href="#" class="nav-item">Services</a></li>
        <li><a href="#" class="nav-item">Contact</a></li>
        <?php
        if (!isset($_SESSION["username"])) {
            echo '<li><a href="signup.php" class="nav-item">Sign Up</a></li>';
            echo '<li><a href="login.php" class="nav-item">Log in</a></li>';
        } else {
            echo '<li><a href="admin.php" class="nav-item">Admin Page</a></li>';
            echo '<li><a href="logout.php" class="nav-item">Log out</a></li>';
        }

        ?>

    </ul>
</nav>