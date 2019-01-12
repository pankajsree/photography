<?php
    require_once("common/common.php");

    $file = file_get_contents('common/meta.json');
	$meta = json_decode($file, true);

    $count = $meta['home']['carousel'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Commercial Photography</title>
        <?= $head ?>
        <link rel="stylesheet" href="assets/css/home.css" />
    </head>
    <body>

        <?= $header ?>

        <main>
            <div id="carousel-container" class="container-fluid customed-fluid">
                <div id="home-carousel" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <?php
                            $display = "<li data-target=\"#home-carousel\" data-slide-to=\"0\" class=\"active\"></li>";
                            for($i = 1; $i < $count; $i ++) {
                                $display .= "
                                    <li data-target=\"#home-carousel\" data-slide-to=\"" . $i . "\"></li>
                                ";
                            }
                            echo $display;
                        ?>
                    </ul>

                    <div class="carousel-inner">
                        <?php
                            $display = "
                                <div class=\"carousel-item active\">
                                    <img class=\"d-block w-100\" src=\"images/home/carousel/1.jpg\" alt=\"First slide\">
                                </div>
                            ";
                            for($i = 1; $i < $count; $i ++) {
                                $display .= "
                                    <div class=\"carousel-item\">
                                        <img class=\"d-block w-100\" src=\"images/home/carousel/" . ($i + 1) . ".jpg\" alt=\"Second slide\" />
                                    </div>
                                ";
                            }
                            echo $display;
                        ?>
                    </div>

                    <a class="carousel-control-prev" href="#home-carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#home-carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="pad-v-5 block container">
                <h1><span class="pad-h-1 b-b-black">Litmass Media</span></h1>
                <div class="content-w-60">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <br /><br /><br />
                    <a href="about" class="link-button">Learn More</a>
                </div>
            </div>

            <div class="pad-v-5 block container">
                <!-- <div class="line"></div> -->
                <h2 class="mid-line"><span class="text">Wedding</span></h2>
                <div class="row flex-row colored-block">
                    <div class="col-12 col-lg-7 no-pad">
                        <div class="img-container">
                            <img src="<?= __ROOT__ ?>images/home/1.jpg" class="img-res" alt="Wedding">
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="content-block relative-middle">
                            <div class="content-w-60">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                <br /><br /><br />
                                <a href="portfolio/wedding" class="link-button">View Portfolio</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pad-v-5 block container">
                <h2 class="mid-line"><span class="text">Fashion</span></h2>
                <div class="row flex-row-reverse colored-block">
                    <div class="col-12 col-lg-7 no-pad">
                        <div class="img-container">
                            <img src="<?= __ROOT__ ?>images/home/2.jpg" class="img-res" alt="Fashion">
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="content-block relative-middle">
                            <div class="content-w-60">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                <br /><br /><br />
                                <a href="portfolio/fashion" class="link-button">View Portfolio</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pad-v-5 block container">
                <h2 class="mid-line"><span class="text">Food</span></h2>
                <div class="row flex-row colored-block">
                    <div class="col-12 col-lg-7 no-pad">
                        <div class="img-container">
                            <img src="<?= __ROOT__ ?>images/home/3.jpg" class="img-res" alt="Food">
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="content-block relative-middle">
                            <div class="content-w-60">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                <br /><br /><br />
                                <a href="portfolio/food" class="link-button">View Portfolio</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pad-v-5 block container">
                <h2 class="mid-line"><span class="text">Corporate</span></h2>
                <div class="row flex-row-reverse colored-block">
                    <div class="col-12 col-lg-7 no-pad">
                        <div class="img-container">
                            <img src="<?= __ROOT__ ?>images/home/4.jpg" class="img-res" alt="Corporate">
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="content-block relative-middle">
                            <div class="content-w-60">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                <br /><br /><br />
                                <a href="portfolio/corporate" class="link-button">View Portfolio</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="contact" class="link-button">Get in Touch</a>
            </div>
        </main>

        <?= $footer ?>
        <?= $script ?>
        <script src="assets/js/home.js"></script>
        <script>
            $(".nav-home").addClass("active");
        </script>

    </body>
</html>
