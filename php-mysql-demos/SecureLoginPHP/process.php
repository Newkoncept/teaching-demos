<?php

require_once "db.php";

if (isset($_POST["registerBtn"])) {
    $email = $_POST["email"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $pwd = $_POST["pwd"];
    $confirmPwd = $_POST["confirmPwd"];

    // Validation 1 - emptiness
    if (empty($email) || empty($firstName) || empty($lastName) || empty($pwd) || empty($confirmPwd)) {
        header("Location: register.php?error=All fields are mandatory");
    } else {
        // Correct Email format - validation 2
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Same password with the confirm password - validation 3
            if ($pwd === $confirmPwd) {
                $pwd = password_hash($pwd, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users(firstname, lastname, email,password) VALUES('$firstName', '$lastName', '$email', '$pwd')";

                if (mysqli_query($conn, $sql)) {
                    header("Location: login.php?success=Successfully Registered. Please Login");
                } else {
                    header("Location: register.php?error=DB ISSUES From registration");
                }
            } else {
                header("Location: register.php?error=Password does not match");
            }
        } else {
            header("Location: register.php?error=Enter a valid email address");
        }
    }
}

if (isset($_POST["loginBtn"])) {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    $sql = "SELECT * from users where email ='$email'";
    $response = mysqli_query($conn, $sql);

    if (mysqli_num_rows($response) > 0) {
        $data = mysqli_fetch_assoc($response);
        if (password_verify($pwd, $data["password"])) {
        }
    } else {
        header("Location: login.php?error=Email Not found");
    }
}