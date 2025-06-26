<?php
session_start();

function loggedIn()
{
    if (!isset($_SESSION["username"])) {
        header("location: login.php?msg=Access Denied");
    }

    // else {
    //     header("location: login.php?msg=Access Denied");
    // }
}