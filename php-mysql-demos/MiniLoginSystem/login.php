<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
    .error {
        background-color: red;
        text-align: center;
        color: white;
        padding: 20px 0;
        margin-bottom: 20px;
    }
    </style>
</head>

<body>
    <h1>Login page</h1>

    <?php
    if (isset($_GET["error"])) {
        echo "<div class='error'>";
        echo $_GET["error"];
        echo "</div>";
    }
    ?>


    <form action="functions.php" method="post">
        <input type="text" name="uid" placeholder="Enter your username">
        <input type="password" name="pwd" placeholder="Enter your password">
        <button type="submit" name="loginBtn">Login</button>
    </form>

</body>

</html>