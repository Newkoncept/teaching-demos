<?php
session_start();
?>

<header>
    <!--==============================
            Stuck menu
=================================-->
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <div class="socials">
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-pinterest"></a>
                </div>
                <div class="clear"></div>
                <h1>
                    <a href="index.php">
                        <img src="images/logo.png" alt="Logo alt" />
                    </a>
                </h1>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</header>

<div id="stuck_container">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <div class="navigation">
                    <nav>
                        <ul class="sf-menu">
                            <li class="current"><a href="index.php">Home</a></li>
                            <li><a href="project.php">Projects</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <!-- <li><a href="contact.php">Contacts</a></li> -->
                            <?php
                            if (isset($_SESSION["username"])) {
                                echo '<li><a href="dashboard.php">Dashboard</a></li>';
                                echo '<li><a href="logout.php">Logout</a></li>';

                            } else {
                                echo '
                                    <li><a href="login.php">Login</a></li>
                                ';
                            }
                            ?>

                        </ul>
                    </nav>

                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
</div>