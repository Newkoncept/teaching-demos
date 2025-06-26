<?php
require_once "db.php";
include_once "header.php";


if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM posts where id = '$id'";

    $response = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($response);
}

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
            <h1>Edit Post</h1>
            <form action="process.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="text" placeholder="Post Title" name="title" value="<?php echo $data['title'] ?>">
                <br>
                <textarea name="body" cols="30" rows="10"
                    placeholder="Post body"> <?php echo $data['body'] ?></textarea>
                <br>
                <button type="submit" name="editBtn">Edit Post</button>
            </form>
        </section>