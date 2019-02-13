<?php

    define('__ROOT__', '/photography/');

    $head = "
    <meta charset='utf-8'>
    <meta name=\"author\" content=\"Pankajsree Das\">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='shortcut icon' href='" . __ROOT__ . "images/favicon.png'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.1/css/all.css' integrity='sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz' crossorigin='anonymous'>
    <link rel='stylesheet' href='" . __ROOT__ . "assets/css/common.css'>
    ";

    $header = "
    <header>
        <nav id='nav-2' class='navbar navbar-expand-xl'>
            <button id='hamburger-container' class='navbar-toggler' type='button' data-toggle='collapse' data-target='#mobile-menu'>
                <div id='ham-one' class='ham'></div>
                <div id='ham-two' class='ham'></div>
                <div id='ham-three' class='ham'></div>
            </button>

            <a class='nav-brand' href='" . __ROOT__ . "'><img src='" . __ROOT__ . "images/logo.png' /></a>
            <div class='collapse navbar-collapse justify-content-center' id='mobile-menu'>
                <ul class='navbar-nav'>
                    <li>
                        <a class='nav-home' href='" . __ROOT__ . "'>Home<div class='underline'></div></a>
                    </li><li>
                        <a class='nav-vnp' href='" . __ROOT__ . "vows-and-phereys'>Vows &amp; Phereys<div class='underline'></div></a>
                    </li><li>
                        <a class='nav-services' href='javascript:void(0);' data-toggle='collapse' data-target='#sm-services'>Services<div class='underline'></div></a>
                        <div id='sm-services' class='sm-sub-menu collapse d-xl-none'>
                            <ul>
                                <li>
                                    <a class='nav-services-wedding' href='" . __ROOT__ . "services/wedding'>Wedding<div class='underline'></div></a>
                                </li>
                                <li>
                                    <a class='nav-services-fashion' href='" . __ROOT__ . "services/fashion'>Fashion<div class='underline'></div></a>
                                </li>
                                <li>
                                    <a class='nav-services-food' href='" . __ROOT__ . "services/food'>Food<div class='underline'></div></a>
                                </li>
                                <li>
                                    <a class='nav-services-corporate' href='" . __ROOT__ . "services/corporate'>Corporate<div class='underline'></div></a>
                                </li>
                            </ul>
                        </div>
                        <div class='sub-menu'>
                            <ul>
                                <li>
                                    <a class='nav-services-wedding' href='" . __ROOT__ . "services/wedding'>Wedding<div class='underline'></div></a>
                                </li>
                                <li>
                                    <a class='nav-services-fashion' href='" . __ROOT__ . "services/fashion'>Fashion<div class='underline'></div></a>
                                </li>
                                <li>
                                    <a class='nav-services-food' href='" . __ROOT__ . "services/food'>Food<div class='underline'></div></a>
                                </li>
                                <li>
                                    <a class='nav-services-corporate' href='" . __ROOT__ . "services/corporate'>Corporate<div class='underline'></div></a>
                                </li>
                            </ul>
                        </div>
                    </li><li>
                        <a class='nav-portfolio' href='javascript:void(0);' data-toggle='collapse' data-target='#sm-portfolio'>Portfolio<div class='underline'></div></a>
                        <div id='sm-portfolio' class='sm-sub-menu collapse d-xl-none'>
                            <ul>
                                <li>
                                    <a class='nav-portfolio-wedding' href='" . __ROOT__ . "portfolio/wedding'>Wedding<div class='underline'></div></a>
                                </li>
                                <li>
                                    <a class='nav-portfolio-fashion' href='" . __ROOT__ . "portfolio/fashion'>Fashion<div class='underline'></div></a>
                                </li>
                                <li>
                                    <a class='nav-portfolio-food' href='" . __ROOT__ . "portfolio/food'>Food<div class='underline'></div></a>
                                </li>
                                <li>
                                    <a class='nav-portfolio-corporate' href='" . __ROOT__ . "portfolio/corporate'>Corporate<div class='underline'></div></a>
                                </li>
                            </ul>
                        </div>
                        <div class='sub-menu'>
                            <ul>
                                <li>
                                    <a class='nav-portfolio-wedding' href='" . __ROOT__ . "portfolio/wedding'>Wedding<div class='underline'></div></a>
                                </li>
                                <li>
                                    <a class='nav-portfolio-fashion' href='" . __ROOT__ . "portfolio/fashion'>Fashion<div class='underline'></div></a>
                                </li>
                                <li>
                                    <a class='nav-portfolio-food' href='" . __ROOT__ . "portfolio/food'>Food<div class='underline'></div></a>
                                </li>
                                <li>
                                    <a class='nav-portfolio-corporate' href='" . __ROOT__ . "portfolio/corporate'>Corporate<div class='underline'></div></a>
                                </li>
                            </ul>
                        </div>
                    </li><li>
                        <a class='nav-about' href='" . __ROOT__ . "about'>About us<div class='underline'></div></a>
                    </li><li>
                        <a class='nav-contact' href='" . __ROOT__ . "contact'>Contact us<div class='underline'></div></a>
                    </li><li>
                        <a class='nav-faqs' href='" . __ROOT__ . "faqs'>FAQs<div class='underline'></div></a>
                    </li>
                </ul>
                <div class='d-block d-xl-inline-block nav-social'>
                    <div class='social-container'>
                        <a id='nav-facebook' href='https://www.facebook.com/Litmassmedia/' target='_blank'>
                            <i class='fab fa-facebook'></i>
                        </a><a id='nav-instagram' href='https://www.instagram.com/litmassmedia/' target='_blank'>
                            <i class='fab fa-instagram'></i>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <div class='height-4-5'></div>
    </header>
    <!-- Anchor Top -->
    <div id='anchor-top'>
        <i class='fas fa-angle-up'></i>
    </div>
    ";

    $footer = "
    <!-- <div class='footer-top'></div> -->
    <footer>
        <div class=\"container\">
            <div class='row text-center pad-btm-1'>
                <div class='col-12 d-block d-sm-none'>
                    <div class='content-w-60 d-inline-block pad-btm-1'>
                        <img class='img-res' src='" . __ROOT__ . "images/logo-sq.png' alt='' />
                    </div>
                </div>
                <div id='footer-block-1' class='col-6 col-sm-4 col-lg-4 b-r-footer'>
                    <div class='relative-middle d-inline-block text-right'>
                        Litmass Media<br />
                        Wakad, Pune - 411057<br />
                        Maharashtra, India<br />
                        <i class='fas fa-phone'></i>&nbsp;+91 - 96373 07615<br />
                        <i class='fas fa-phone'></i>&nbsp;+91 - 96506 59479<br />
                        <i class='far fa-envelope'></i>&nbsp;litmassmedia@gmail.com
                    </div>
                </div>
                <div id='footer-block-3' class='col-6 col-sm-4 d-none d-sm-block text-right text-sm-center'>
                    <div class='relative-middle'>
                        <img class='v-middle limit-img img-res' src='" . __ROOT__ . "images/logo-sq.png' alt='' />
                    </div>
                </div>
                <div id='footer-block-5' class='col-6 col-sm-4 col-lg-4 b-l-footer'>
                    <div class='relative-middle d-inline-block text-center'>

                        <h4>Litmass Media</h4>
                        <a href='https://www.facebook.com/Litmassmedia/' target='_blank'><i class='fab fa-facebook'></i></a>
                        <a href='https://www.instagram.com/litmassmedia/' target='_blank'><i class='fab fa-instagram'></i></a>

                        <h4>Vows &amp; Phereys</h4>
                        <a href='https://www.facebook.com/vowsnphereys/' target='_blank'><i class='fab fa-facebook'></i></a>
                        <a href='https://www.instagram.com/vowsnphereys/' target='_blank'><i class='fab fa-instagram'></i></a>
                    </div>
                </div>
            </div>
            <div class='copyright d-block'>
                &copy;2019 LITMASS MEDIA - All rights reserved
            </div>
            <div class='disclaimer d-block text-center'>
                <a href='#'>Disclaimer</a> |
                <a href='#'>Hyperlink Policy</a> |
                <a href='#'>Feedback</a>
            </div>
        </div>
    </footer>
    ";

    $script = "
    <script src='https://code.jquery.com/jquery-3.3.1.min.js' integrity='sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' integrity='sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy' crossorigin='anonymous'></script>
    <script src='" . __ROOT__ . "assets/js/common.js'></script>
    ";
    $swal_all = "<script src='" . __ROOT__ . "assets/sweetalert2/dist/sweetalert2.all.min.js'></script>";

?>
