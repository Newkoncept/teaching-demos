<?php
require_once "db.php";
session_start();

if (isset($_POST["submitBtn"])) {
    $_SESSION["username"] = "sample";
    header("location: index.php");
}