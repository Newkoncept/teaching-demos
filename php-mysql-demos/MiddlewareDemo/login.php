<?php
$title = "Login Page";
include_once "header.php";
// loggedIn();

include_once "navbar.php"
?>

<h1>Login</h1>
<form action="logic.php" method="post">
    <input type="text" placeholder="email" name="email">
    <input type="password" name="pwd" placeholder="password">
    <button type="submit" name="submitBtn">Login</button>
</form>


</body>

</html>