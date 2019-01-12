<?php
    require_once("../common/common.php");

    $file = file_get_contents('../common/meta.json');
	$meta = json_decode($file, true);

    $count = $meta['portfolio']['corporate']['count'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Commercial Photography</title>
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/portfolio.css" />
        <link rel="stylesheet" href="../assets/css/lightbox.min.css" />
    </head>
    <body class="">

        <?= $header ?>

        <main>

            <div class="pad-t-5 pad-btm-3 container">
                <h1><span class="pad-h-1 b-b-black">Corporate Portfolio</span></h1>
                <p class="content-w-60">
                    If you would like a no obligation quotation or have any queries about our services, please contact us using the form or contact details below.
                </p>
            </div>

            <div class="container">
                <div class="img-grid-block pad-btm-3">
                    <?php
                        $column1 ="<div class=\"column\">";
                        $column2 ="<div class=\"column\">";
                        $column3 ="<div class=\"column column-3\">";
                        $column3_1 ="<div id=\"column-3-1\">";
                        $column3_2 ="<div id=\"column-3-2\">";
                        for($i = 0; $i < $count; $i ++) {
                            if($i % 3 == 0) {
                                $column1 .= "
                                    <a href=\"../images/portfolio/corporate/" . ($i + 1) . ".jpg\" data-lightbox=\"Vows & Phereys\" data-title=\"\">
                                        <img src=\"../images/portfolio/corporate/" . ($i + 1) . ".jpg\" title=\"\" alt=\"\">
                                    </a>
                                ";
                            }
                            else if($i % 3 == 1) {
                                $column2 .= "
                                    <a href=\"../images/portfolio/corporate/" . ($i + 1) . ".jpg\" data-lightbox=\"Vows & Phereys\" data-title=\"\">
                                        <img src=\"../images/portfolio/corporate/" . ($i + 1) . ".jpg\" title=\"\" alt=\"\">
                                    </a>
                                ";
                            }
                            else if($i % 3 == 2) {
                                if($i % 2 == 0) {
                                    $column3_1 .= "
                                        <a href=\"../images/portfolio/corporate/" . ($i + 1) . ".jpg\" data-lightbox=\"Vows & Phereys\" data-title=\"\">
                                            <img src=\"../images/portfolio/corporate/" . ($i + 1) . ".jpg\" title=\"\" alt=\"\">
                                        </a>
                                    ";
                                }
                                else {
                                    $column3_2 .= "
                                        <a href=\"../images/portfolio/corporate/" . ($i + 1) . ".jpg\" data-lightbox=\"Vows & Phereys\" data-title=\"\">
                                            <img src=\"../images/portfolio/corporate/" . ($i + 1) . ".jpg\" title=\"\" alt=\"\">
                                        </a>
                                    ";
                                }
                            }
                            else {

                            }
                        }
                        $column1 .= "</div>";
                        $column2 .= "</div>";
                        $column3_1 .= "</div>";
                        $column3_2 .= "</div>";
                        $column3 .= $column3_1 . $column3_2 . "</div>";
                        $display = $column1 . $column2 . $column3;
                        echo $display;
                    ?>
                </div>
            </div>

            <div class="text-center">
                <a href="<?= __ROOT__ ?>services/corporate" class="link-button">View Services</a>
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

            <div class="other-portfolios">
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
            $(".nav-portfolio, .nav-portfolio-corporate").addClass("active");
        </script>
        <script src="../assets/js/lightbox-plus-jquery.min.js"></script>
    </body>
</html>
