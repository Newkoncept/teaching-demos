<?php

include_once "header.php";

?>

<head>
    <link rel="stylesheet" href="aa.css">
</head>

<body class="page1" id="top">
    <div class="main">
        <!--==============================
              header
=================================-->
        <?php

        include_once "navbar.php";

        ?>

        <!--=====================
          Content
======================-->

        <section class="container">
            <h1>Add Post</h1>
            <form action="process.php" method="post">
                <input type="text" placeholder="Post Title" name="title">
                <br>
                <textarea name="body" cols="30" rows="10" placeholder="Post body"></textarea>
                <br>
                <button type="submit" name="postBtn">Create New Post</button>
            </form>
        </section>