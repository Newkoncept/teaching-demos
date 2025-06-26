<?php
$title = "Register Page";
    require "head.php";
    include "navbar.php";
  ?>

<div class="container">
    <form action="file.php" method="post">
        <h1>Register</h1>
        <input type="text" placeholder="Enter your username" name="uid" />
        <input type="password" name="pwd" placeholder="Enter your password" />
        <input type="Number" name="phone" placeholder="Enter your phone number" />
        <input type="button" value="Register" name="login-btn" />
    </form>
</div>
</body>

</html>