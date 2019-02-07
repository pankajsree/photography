<?php
    require_once("common/common.php");
    require_once("config/db-config.php");

    $query = "SELECT `about`, `abhi`, `deep` FROM `text_about`";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        echo mysqli_error($conn);
        die($query);
    }

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Commercial Photography</title>
        <?= $head ?>
        <link rel="stylesheet" href="assets/css/about.css" />
    </head>
    <body class="">

        <?= $header ?>

        <main>

            <div class="pad-v-5 block container">
                <h1><span class="pad-h-1 b-b-black">About us</span></h1>
                <p class="content-w-80"><?= $row['about'] ?></p>

                <div class="pad-t-5 container">
                    <div class="row flex-row colored-block">
                        <div class="col-12 col-md-4 col-lg-3 no-pad">
                            <div class="img-container relative-middle">
                                <img src="<?= __ROOT__ ?>images/about/1.jpg" class="img-res" alt="Products">
                            </div>
                        </div>
                        <div class="col-12 col-md-8 col-lg-9">
                            <div class="content-block relative-middle pad-h-2">
                                <h4 class="no-mar">Abhijit Deb</h4>
                                <p class="font-weight-bold">Commercial Photographer</p>
                                <p>
                                    <?= $row['abhi'] ?>
                                </p>
                                <p>
                                    <div class="social-container">
                                        <span class="b-b-black">Social Links</span><br />
                                        <a href='https://www.facebook.com/'>
                                            <i class='fab fa-facebook'></i>
                                        </a><a href='https://www.instagram.com/'>
                                            <i class='fab fa-instagram'></i>
                                        </a><a href='https://www.linkedin.com/'>
                                            <i class='fab fa-linkedin'></i>
                                        </a>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pad-t-5 container">
                    <div class="row flex-row-reverse colored-block">
                        <div class="col-12 col-md-4 col-lg-3 no-pad">
                            <div class="img-container relative-middle">
                                <img src="<?= __ROOT__ ?>images/about/2.jpg" class="img-res" alt="Products">
                            </div>
                        </div>
                        <div class="col-12 col-md-8 col-lg-9">
                            <div class="content-block relative-middle pad-h-2">
                                <h4 class="no-mar">Deep Roy</h4>
                                <p class="font-weight-bold">Commercial Photographer</p>
                                <p>
                                    <?= $row['deep'] ?>
                                </p>
                                <p>
                                    <div class="social-container">
                                        <span class="b-b-black">Social Links</span><br />
                                        <a href='https://www.facebook.com/'>
                                            <i class='fab fa-facebook'></i>
                                        </a><a href='https://www.instagram.com/'>
                                            <i class='fab fa-instagram'></i>
                                        </a><a href='https://www.linkedin.com/'>
                                            <i class='fab fa-linkedin'></i>
                                        </a>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?= $footer ?>
        <?= $script ?>
        <script src="assets/js/home.js"></script>
        <script>
            $(".nav-about").addClass("active");
        </script>

    </body>
</html>
