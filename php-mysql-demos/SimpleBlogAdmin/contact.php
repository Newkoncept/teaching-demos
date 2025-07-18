<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contacts</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/form.css">
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
    <script src="js/TMForm.js"></script>

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
            <article class="content_bg1 pad__2">
                <div class="container">
                    <div class="row">
                        <div class="grid_12">
                            <h3>Find Us</h3>
                            <div class="map">
                                <div class="row">
                                    <div class="grid_9">
                                        <figure class="">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24214.807650104907!2d-73.94846048422478!3d40.65521573400813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395650655094"
                                                style="border:0"></iframe>
                                        </figure>
                                    </div>
                                    <div class="grid_3">
                                        <address class="address1">
                                            <div class="text2 color3">Address:</div>
                                            9870 St Vincent Place, <br>Glasgow, DC 45 Fr 45.
                                            <div class="clear"></div>
                                            <div class="text2 color3">Phones:</div>
                                            +1 800 559 6580 <br>+1 800 603 6035
                                            <div class="clear"></div>
                                            <div class="text2 color3">Email:</div>
                                            <a href="#">mail@demolink.org</a>
                                        </address>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="grid_9">
                                    <p>24/7 support is on for all TemplateMonster’s <span class="color1"><a
                                                href="http://www.templatemonster.com/" rel="nofollow">premium
                                                themes</a></span>. Free templates go without it. <br> Need assistance in
                                        customization? Ask guys from <span class="color1"><a
                                                href="http://www.templatetuning.com/ "
                                                rel="nofollow">TemplateTuning</a></span>.</p>
                                    Kas facilisis, nulla vel viverra auctor, leo magna sodales felis, quis malesuada
                                    nibh odio ut velitoin pharetra luctus diama scelerisque eros convallis accumsan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <div class="container">
                <div class="row">
                    <div class="grid_12">
                        <h3>Contact Form</h3>
                        <form id="form">
                            <div class="success_wrapper">
                                <div class="success-message">Contact form submitted</div>
                            </div>
                            <label class="name">
                                <input type="text" placeholder="Name:" data-constraints="@Required @JustLetters" />
                                <span class="empty-message">*This field is required.</span>
                                <span class="error-message">*This is not a valid name.</span>
                            </label>
                            <label class="email">
                                <input type="text" placeholder="E-mail:" data-constraints="@Required @Email" />
                                <span class="empty-message">*This field is required.</span>
                                <span class="error-message">*This is not a valid email.</span>
                            </label>
                            <label class="phone">
                                <input type="text" placeholder="Phone:" data-constraints="@Required @JustNumbers" />
                                <span class="empty-message">*This field is required.</span>
                                <span class="error-message">*This is not a valid phone.</span>
                            </label>
                            <label class="message">
                                <textarea placeholder="Message:"
                                    data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                                <span class="empty-message">*This field is required.</span>
                                <span class="error-message">*The message is too short.</span>
                            </label>
                            <div>
                                <div class="clear"></div>
                                <div class="btns">
                                    <a href="#" data-type="submit" class="btn">Submit</a>
                                </div>
                            </div>
                        </form>
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