<?php
session_start();

require_once "dbh.php";

if (isset($_POST["signup-submit"])) {
    signUp();
}

if (isset($_POST["login-submit"])) {
    logIn();
}

function signUp()
{
    global $connection;

    $username = $_POST["username"];
    $password = $_POST["password"];
    $repeat_password = $_POST["repeat-password"];

    $query = detailExist($username);
    if (empty($username) || empty($password) || empty($repeat_password)) {
        header("Location: signup.php?signupError=empty&username={$username}");
    } else if ($password !== $repeat_password) {
        header("Location: signup.php?signupError=inconsistentPassword&username={$username}");
    } else if (mysqli_num_rows($query) > 0) {
        header("Location: signup.php?signupError=usernameExists&username={$username}");
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);


        $sql = "INSERT INTO users(username, password) VALUES('$username', '$password')";

        $result = mysqli_query($connection, $sql);

        if (!$result) {
            die("Result not inserted into the database " . mysqli_connect_error($connection));
        } else {
            $_SESSION["username"] = $username;
            header("Location: index.php?signup=success");
        }
    }
}

function logIn()
{
    $username = $_POST["username"];
    $password = $_POST["password"];


    $query = detailExist($username);
    $result = mysqli_fetch_assoc($query);

    if (empty($username) || empty($password)) {
        header("Location: login.php?loginError=empty&username={$username}");
    } else if (mysqli_num_rows($query) < 1) {
        header("Location: login.php?loginError=notFound&username={$username}");
    } else if (!password_verify($password, $result["password"])) {
        header("Location: login.php?loginError=wrongDetails&username={$username}");
    } else {
        $_SESSION["username"] = $username;
        header("Location: index.php?signup=success");
    }
}

function detailExist($username)
{
    global $connection;

    $sql = "SELECT * from users WHERE username='$username' LIMIT 1";
    $query = mysqli_query($connection, $sql);
    return $query;
}