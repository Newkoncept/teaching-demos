<?php
require_once "db.php";

if (isset($_POST["subBtn"])) {
    $email = $_POST["email"];

    if (empty($email)) {
        header("Location: index.php?error=All fields are mandatory");
    } else {
        $sql = "INSERT INTO newsletter(email) VALUES('$email')";

        if (mysqli_query($conn, $sql)) {
            header("Location: index.php?success= Inserted successfully");
        }
    }
}

if (isset($_POST["postBtn"])) {
    $title = $_POST['title'];
    $body = $_POST['body'];

    $query = "INSERT INTO posts(title, body) VALUES('$title', '$body')";
    if (mysqli_query($conn, $query)) {
        header("Location: dashboard.php?success=Post Inserted Succesfully");
    }
}

if (isset($_POST["editBtn"])) {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $id = $_POST["id"];

    $query = "UPDATE posts set title='$title', body='$body' where id ='$id' ";

    if (mysqli_query($conn, $query)) {
        header("Location: dashboard.php?success=Post Updated Succesfully");
    }
}

if (isset($_GET["delete_id"])) {
    $id = $_GET["delete_id"];

    $query = "DELETE FROM posts where id ='$id' ";

    if (mysqli_query($conn, $query)) {
        header("Location: dashboard.php?success=Post Deleted Succesfully");
    }
}

if (isset($_GET["login"])) {
    session_start();
    $_SESSION["username"] = "Sample";
    header("Location: index.php");
}


if (isset($_GET["logout"])) {
    session_start();
    unset($_SESSION["username"]);
    header("Location: index.php");
}