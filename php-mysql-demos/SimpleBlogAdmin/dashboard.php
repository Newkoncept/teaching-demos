<?php

include_once "header.php";
include_once "db.php";

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
            <h1>Blog Posts</h1>

            <a href="add.php">
                <button class="add">Add</button>
            </a>

            <table border="1">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Post Title</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * from posts order by id desc";
                    $response = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($response) > 0) {
                        $counter = 1;
                        while ($data = mysqli_fetch_assoc($response)) {
                            echo "
                                <tr>
                                    <td>$counter</td>
                                    <td>$data[title]</td>
                                    <td><a href=edit.php?id=$data[id] class='edit'>Edit</a></td>
                                    <td><a href=process.php?delete_id=$data[id] class='delete'>Delete</a></td>
                                </tr>
                            ";
                            $counter++;
                        }
                    }
                    ?>


                </tbody>
            </table>
        </section>