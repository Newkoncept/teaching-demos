<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="background: red;"> <?php
        if(isset($_GET["error"])) {
            echo $_GET["error"];
        }

    ?>
    </div>
    <h2>Register</h2>
    <form action="functions.php" method="post" target="_blank">
        <input type="text" name="username" placeholder="Enter your username">
        <input type="text" name="email" placeholder="Enter your email">
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit" name="regBtn">Register</button>
    </form>
</body>

</html>