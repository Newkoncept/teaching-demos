<?php

$conn = mysqli_connect("localhost", "root", "", "quickauth");


if (isset($_POST["regBtn"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    if (strlen($username > 0) && strlen($email > 0) && strlen($pwd > 0)) {
        $result = emailChecker($email);

        if ($result === 0) {
            global $conn;
            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);


            $sql = "INSERT INTO users(name, email, password) VALUES('$username', '$email', '$hashedPwd')";

            if (mysqli_query($conn, $sql)) {
                header("Location: login.php");
            } else {
                echo "no";
            }
        } else {
            header("Location: register.php?error=duplicate Mail");
        }
    } else {
        header("Location: register.php?error=incomplete");
    }
}

if (isset($_POST["loginBtn"])) {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    if (lengthChecker($email) && lengthChecker($pwd)) {
    } else {
        header("Location: register.php?error=Incomplete message");
    }
}

function emailChecker($email)
{
    global $conn;

    $sql = "select * from users where email = '$email'";

    $result = mysqli_query($conn, $sql);

    return mysqli_num_rows($result);
}

function lengthChecker($value)
{
    $result = strlen($value);
    if ($result > 0) {
        return true;
    } else {
        return false;
    }
}