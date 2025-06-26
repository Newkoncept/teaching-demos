<?php
$title = "Login Page";
    require "head.php";
    include "navbar.php";
  ?>

<div class="container">
    <form action="file.php" method="post">
        <h1>LOGIN</h1>
        <input type="text" placeholder="Enter your username" name="uid" />
        <input type="password" name="pwd" placeholder="Enter your password" />
        <input type="button" value="Login" name="login-btn" />
    </form>
</div>
</body>

</html>