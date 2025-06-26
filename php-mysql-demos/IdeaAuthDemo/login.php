<?php include_once "header.php"; ?>
<?php include_once "nav.php"; ?>
<section>
    <h1>LOGIN PAGE</h1>

    <form action="functions.php" method="post">
        <?php
        if (isset($_GET["loginError"])) {
        ?>
        <div class="error">

            <?php
                $error = $_GET["loginError"];

                switch ($error) {
                    case 'empty':
                        echo "All fields are mandatory";
                        break;

                    case 'wrongDetails':
                        echo "Incorrect Password";
                        break;

                    case 'notFound':
                        echo "Username does not exist";
                        break;
                } ?>
        </div>
        <?php } ?>

        <label for="username">Username</label>
        <?php
        if (isset($_GET["username"])) { ?>
        <input type="text" name="username" value="<?php echo $_GET["username"]; ?>">
        <?php } else {
            echo '<input type="text" name="username">';
        }
        ?>
        <label for="password">Password</label>
        <input type="password" name="password">
        <button type="submit" name="login-submit">LOGIN</button>
    </form>

</section>
<?php include_once "footer.php"; ?>