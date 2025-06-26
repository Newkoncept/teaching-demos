<?php include_once "header.php"; ?>
<?php include_once "nav.php"; ?>
<section>
    <h1>SIGNUP PAGE</h1>

    <form action="functions.php" method="POST">
        <?php
        if (isset($_GET["signupError"])) {
        ?>
        <div class="error">

            <?php
                $error = $_GET["signupError"];

                switch ($error) {
                    case 'empty':
                        echo "All fields are mandatory";
                        break;

                    case 'inconsistentPassword':
                        echo "Inconsistent Password";
                        break;

                    case 'usernameExists':
                        echo "Username exists already";
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
        <label for="password">Repeat Password</label>
        <input type="password" name="repeat-password">
        <button type="submit" name="signup-submit">SIGUP</button>
    </form>

</section>
<?php include_once "footer.php"; ?>