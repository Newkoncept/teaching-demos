<?php

include_once "constants.php";

$conn = new MYSQLi(DB_SERVER_NAME, DB_USER, DB_PWD, DB_NAME);

if($conn->connect_error) {
    echo "Database connection error detected";
    die();
}