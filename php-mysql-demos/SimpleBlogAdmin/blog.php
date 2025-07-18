<?php
require_once "db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/stuck.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/script.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tmStickUp.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/touchTouch.jquery.js"></script>
    <script>
    $(document).ready(function() {
        $().UItoTop({
            easingType: 'easeOutQuart'
        });
        $('#stuck_container').tmStickUp({});
    });
    </script>
    <!--[if lt IE 9]>
 <div style=' clear: both; text-align:center; position: relative;'>
   <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
     <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
   </a>
</div>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">


<![endif]-->
</head>

<body class="" id="top">
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
        <section class="content">
            <div class="ic">More Website Templates @ TemplateMonster.com - June 02, 2014!</div>
            <div class="container">
                <div class="row">
                    <div class="grid_7">
                        <h3>Blog</h3>
                        <?php
                        $sql = "SELECT * from posts order by id desc";
                        $response = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($response) > 0) {

                            while ($data = mysqli_fetch_assoc($response)) {
                                echo "
                                <div class='blog'>
                            <time datetime=$data[created_at]><span class='fa fa-calendar'></span>
                            </time>
                            <div class='extra_wrapper'>
                                <div class='text1'><a href='#'>$data[title] </a></div>
                            </div>
                            <div class='clear'></div>
                            <img src='images/page4_img1.jpg' alt='' class='img_inner fleft'>
                            <div class='extra_wrapper'>
                                <p>Cras facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada
                                    nibh odio ut velit. Proin pharetra luctus diam, a scelerisque eros convallis
                                    accumsan. </p>
                                Maecenas vehicula egestas venenatis. Duis massa elit, auctor non pellentesque vel,
                                aliquet sit amet erat.
                                <br>
                                <a href='#' class='btn'>More</a>
                            </div>
                        </div>
                            ";
                            }
                        }
                        ?>

                    </div>


                    <div class="grid_4 preffix_1">
                        <h3>Categories</h3>
                        <ul class="list">
                            <li><a href="#">Lorem ipsum dolor sit tconsectetur</a></li>
                            <li><a href="#">Adipiscing elitIn mollis erat</a></li>
                            <li><a href="#">Mattis neque facilisiit amet um</a></li>
                            <li><a href="#">Cras facilisis nulla vel viverra auctor</a></li>
                            <li><a href="#">Oleo magna sodales felisquis</a></li>
                            <li><a href="#">Nalesuada nibh odio ut velioin</a></li>
                            <li><a href="#">Charetra luctus diam scelerisque</a></li>
                            <li><a href="#">Nros convallis accumsanecenas</a></li>
                        </ul>
                        <h3>Archive</h3>
                        <ul class="list">
                            <li><a href="#">Dorem ipsum dolor sit tconsectetur</a></li>
                            <li><a href="#">Ipiscing elitIn mollis erater</a></li>
                            <li><a href="#">Lattis neque facilisiit amet umto</a></li>
                            <li><a href="#">Nras facilisis nulla vel viverra auct</a></li>
                            <li><a href="#">Hleo magna sodales felisquisert</a></li>
                            <li><a href="#">Balesuada nibh odio ut velio</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--==============================
              footer
=================================-->
    </div>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <div class="socials">
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-google-plus"></a>
                        <a href="#" class="fa fa-pinterest"></a>
                    </div>
                    <div class="copyright">
                        <div class="color2"><strong>Arch</strong> &copy; <span id="copyright-year"></span> | <a
                                href="#">Privacy Policy</a></div>
                        Website designed by <a href="http://www.templatemonster.com/"
                            rel="nofollow">TemplateMonster.com</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>