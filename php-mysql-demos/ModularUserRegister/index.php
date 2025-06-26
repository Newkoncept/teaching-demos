<?php
include_once "path.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sample</title>
    <link rel="stylesheet" href=<?php echo BASE_URL . "/assets/css/style.css"; ?>>
</head>

<body>
    <h1>REGISTER PAGE</h1>
    <div class="message">
        <?php
        if (isset($_GET["signup"])) {
            if ($_GET["signup"] !== "success") {
                ; ?>
                <div class="msg error">
                    <?php
                    $errorMsg = $_GET["signup"];
                    switch ($errorMsg) {
                        case 'empty':
                            echo "<p>Unauthorized Access</p>";
                            break;
                        case 'missingfield':
                            echo "<p>All Fields are compulsory</p>";
                            break;
                        case 'passwordnotmatch':
                            echo "<p>Password not matching with password Confirmation</p>";
                            break;
                        case 'nameproblem':
                            echo "<p>Name contains only a-z or A-Z</p>";
                            break;
                        case 'invalidemail':
                            echo "<p>Invalid email format</p>";
                            break;
                        case 'emailExist':
                            echo "<p>Email exists already!!!!</p>";
                            break;
                        case 'usernameExist':
                            echo "<p>Username has been taken</p>";
                            break;
                    }
                    ?>
                </div>
                <?php
            } elseif ($_GET["signup"] === "success") {
                echo "<div class='msg success'>USER REGISTERED SUCCESSFULLY</div>";
            }
        }
        ?>
    </div>
    <form action="<?php echo BASE_URL . "/app/controller/users.php"; ?>" method="post">
        <?php
        if (!isset($_GET['firstName'])) {
            echo '<input type="text" name="firstName" placeholder="Enter your first name" value="">';
        } else {
            echo '<input type="text" name="firstName" placeholder="Enter your first name" value="' . $_GET['firstName'] . '">';
        }
        ?>
        <?php
        if (!isset($_GET['lastName'])) {
            echo '<input type="text" name="lastName" placeholder="Enter your last name" value="">';
        } else {
            echo '<input type="text" name="lastName" placeholder="Enter your last name" value="' . $_GET['lastName'] . '">';
        }
        ?>
        <?php
        if (!isset($_GET['username'])) {
            echo '<input type="text" name="username" placeholder="Enter your Username" value="">';
        } else {
            echo '<input type="text" name="username" placeholder="Enter your Username" value="' . $_GET['username'] . '">';
        }
        ?>
        <?php
        if (!isset($_GET['email'])) {
            echo '<input type="email" name="email" placeholder="Enter your email address" value="">';
        } else {
            echo '<input type="email" name="email" placeholder="Enter your email address" value="' . $_GET['email'] . '">';
        }
        ?>
        <input type="password" name="pwd" placeholder="Enter a chosen password">
        <input type="password" name="pwdConf" placeholder="Confirm your password">
        <button type="submit" name="registerBtn">Submit</button>
    </form>

</body>

</html>