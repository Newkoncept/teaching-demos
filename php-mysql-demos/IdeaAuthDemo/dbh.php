<?php

$connection = mysqli_connect("localhost", "root", "", "ideaChecker");

if (!$connection) {
    die("Database connection failed " . mysqli_connect_error($connection));
}