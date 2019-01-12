<?php
    require_once("../common/common.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Commercial Photography</title>
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/services.css" />
    </head>
    <body class="">

        <?= $header ?>

        <main>

            <div class="pad-t-5 pad-btm-3 container">
                <h1><span class="pad-h-1 b-b-black">Wedding Services</span></h1>
                <p class="content-w-60">
                    If you would like a no obligation quotation or have any queries about our services, please contact us using the form or contact details below.
                </p>
            </div>

            <!-- BLOCK I -->

            <div class="services-block container pad-btm-3">
                <div class="caption">Pre-Wedding Album</div>
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <div class="row">
                    <div class="col-12">
                        <img class="img-res" src="../images/services/wedding/1.jpg" alt="">
                    </div>
                </div>
            </div>

            <!-- BLOCK II -->

            <div class="services-block container pad-btm-3">
                <div class="caption">Wedding Album</div>
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <div class="row">
                    <div class="col-12">
                        <img class="img-res" src="../images/services/wedding/2.jpg" alt="">
                    </div>
                </div>
            </div>

            <!-- BLOCK III -->

            <div class="services-block container pad-btm-3">
                <div class="caption">Post-Wedding Album</div>
                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <div class="row">
                    <div class="col-12">
                        <img class="img-res" src="../images/services/wedding/3.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="<?= __ROOT__ ?>portfolio/wedding" class="link-button">View Portfolio</a>
            </div>

            <div class="container social-arena pad-v-5">
                <h2><span class="pad-h-1 b-b-black">Social Media Arena</span></h2>
                <div class="row">
                    <div class="col-3 text-center">
                        <a href='https://www.facebook.com/'>
                            <i class='fab fa-facebook'></i>
                        </a>
                    </div>
                    <div class="col-3 text-center">
                        <a href='https://twitter.com/'>
                            <i class='fab fa-twitter'></i>
                        </a>
                    </div>
                    <div class="col-3 text-center">
                        <a href='https://www.instagram.com/'>
                            <i class='fab fa-instagram'></i>
                        </a>
                    </div>
                    <div class="col-3 text-center">
                        <a href='https://www.linkedin.com/'>
                            <i class='fab fa-linkedin'></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="other-services">
                <ul>
                    <li>
                        <a href="fashion">Fashion</a>
                    </li><li>
                        <a href="food">Food</a>
                    </li><li>
                        <a href="corporate">Corporate</a>
                    </li>
                </ul>
            </div>

        </main>

        <?= $footer ?>
        <?= $script ?>
        <script>
            $(".nav-services-wedding, .nav-services").addClass("active");
        </script>

    </body>
</html>
