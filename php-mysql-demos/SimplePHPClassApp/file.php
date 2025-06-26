<?php

$userDetails = [
    "username" => "abc",
    "password" => 123456
];


$userInput = $_POST;


if($userDetails["username"] === $userInput["username"]){
    echo "Correct Details";
} else {
    echo "InCorrect Details";

}