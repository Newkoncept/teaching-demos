<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "MiniLoginSystem");


if (isset($_POST["registerBtn"])) {
    $uid = $_POST["uid"];
    $firstName = $_POST["firstName"];
    $password = $_POST["pwd"];

    if ((strlen($uid) > 0) && (strlen($firstName) > 0) && strlen($password) > 0) {
        $sql = "select * from users where username = '$uid'";

        $response = mysqli_query($conn, $sql);

        if (mysqli_num_rows($response) > 0) {
            header("Location: register.php?error=Username exists already in the database");
        } else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users(username, firstName, password, admin) values('$uid', '$firstName', '$hashedPassword', 0)";

            if (mysqli_query($conn, $sql)) {
                header("Location: login.php?msg=success");
            } else {
                header("Location: register.php?error=DB Error");
            }
        }
    } else {
        header("Location: register.php?error=All fields are mandatory");
    }
}

if (isset($_POST["loginBtn"])) {
    $uid = $_POST["uid"];
    $password = $_POST["pwd"];

    if ((strlen($uid) > 0) && strlen($password) > 0) {
        $sql = "select * from users where username = '$uid'";

        $response = mysqli_query($conn, $sql);

        if (mysqli_num_rows($response) > 0) {
            $dbPassword = mysqli_fetch_assoc($response)["password"];
            // $dbadmin = mysqli_fetch_assoc($response);
            $username = mysqli_fetch_assoc($response)["username"];
            // echo $dbadmin;
            // die();

            if (password_verify($password, $dbPassword)) {
                $_SESSION["admin"] = $admin;
                $_SESSION["username"] = $username;
                header("Location: admin.php");
            } else {
                header("Location: login.php?error=Incorrect Password");
            }
        } else {
            header("Location: login.php?error=Username not found");
        }
    } else {
        header("Location: login.php?error=All fields are mandatory");
    }
}