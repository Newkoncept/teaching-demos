<?php
include_once "../../path.php";
include_once ROOT_PATH."/app/database/reusable.php";

$url = BASE_URL;


if(!isset($_POST['registerBtn'])) {
    $url .= "?signup=empty";
    header("Location: ". $url);
} else {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdConf = $_POST["pwdConf"];

    $formValue = "&firstName=$firstName&lastName=$lastName&username=$username&email=$email";

    // Checking for empty fields
    if(empty($firstName) || empty($lastName) || empty($username) || empty($email) || empty($pwd) || empty($pwdConf)) {
        $url .= "?signup=missingfield".$formValue;
        header("Location: ". $url);
    }
    // Confirming the password and passwrd confirm field 
    elseif ($pwd !== $pwdConf) {
        $url .= "?signup=passwordnotmatch".$formValue;
        header("Location: ". $url);
    } 
    // Checking the user input for the first and last name
    elseif(!preg_match("/^[a-zA-Z-']*$/", $firstName) || !preg_match("/^[a-zA-Z-']*$/", $lastName)) {
        $url .= "?signup=nameproblem".$formValue;
        header("Location: ". $url);
    } 
    // Validating the email field 
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $url .= "?signup=invalidemail".$formValue;
        header("Location: ". $url);
    }
    // Checking the database for previous input(email, username)
    else {
        $dbEmail = selectOne("users", ["email" => $email]);
        $dbUsername = selectOne("users", ["username" => $username]);
        if(isset($dbEmail)) {
            $url .= "?signup=emailExist".$formValue;
            header("Location: ". $url);
        } elseif(isset($dbUsername)) {
            $url .= "?signup=usernameExist".$formValue;
            header("Location: ". $url);
        } 
        // Registering the user to the database
        else {
            // Removing the unneccessary field (pwdConf, registerBtn)
            unset($_POST['pwdConf'], $_POST['registerBtn']);
            // Securing the password
            $_POST['pwd'] = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
            // Adding the admin properties
            $_POST['admin'] = 0;
            $userId = create("users", $_POST);
            $user = selectOne("users", ['id' => $userId]);
            header("Location: ".BASE_URL . "?signup=success");
        }


    }
}