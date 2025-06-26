<?php

$conn = mysqli_connect("localhost", "root", "", "middleware_auth");

if (!$conn) {
    echo "DB CONNECTION ERROR";
}