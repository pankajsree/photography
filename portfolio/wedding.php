<?php
    require_once("../common/common.php");
    require_once("../config/db-config.php");

    if(!isset($_GET['type'])) {
        $type = "pre";
    }
    else {
        $type = $_GET['type'];
    }

    if($type == "pre" || $type == "wed" || $type == "films") {

    }
    else {
        http_response_code(404);
        require("../error/404.php");
        die();
    }

    $query = "SELECT `p_wedding_pre`, `p_wedding`, `p_wedding_video` FROM `images`";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        echo mysqli_error($conn);
        die($query);
    }

    $row_count = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $pre = $row_count['p_wedding_pre'];
    $wed = $row_count['p_wedding'];
    $vdo = $row_count['p_wedding_video'];

    $iframes = array();

    $query = "SELECT `link` FROM `videos_wedding` ORDER BY `serial` LIMIT $vdo";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        echo mysqli_error($conn);
        die($query);
    }
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $iframes[] = $row;
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Portfolio | Vows and Phereys</title>
        <?= $head ?>
        <link rel="stylesheet" href="<?= __ROOT__ ?>assets/css/portfolio.css" />
        <link rel="stylesheet" href="<?= __ROOT__ ?>assets/css/lightbox.min.css" />
    </head>
    <style>
        iframe {
            margin: 1rem 0;
            width: calc(50vw - 35px);
            height: 27vw;
        }
        @media only screen
            and (max-width: 767px) {
            iframe {
                width: calc(100vw - 35px);
                height: 56vw;
            }
        }
    </style>
    <body>

        <?= $header ?>

        <main id="p_wedding-page">

            <div class="pad-t-5 pad-btm-3 container">
                <h1><span class="pad-h-1 b-b-black">Vows &amp; Phereys</span></h1>
                <div class="action-container">
                    <div id="action-pre" class="action-button" data-url="pre">Pre Wedding</div>
                    <div id="action-wed" class="action-button" data-url="wed">Wedding</div>
                    <div id="action-films" class="action-button" data-url="films">Wedding Films</div>
                </div>
            </div>

            <?php
                if($type == "pre") {
                    ?>
            <div id="wedding-pre" class="img-grid-block container pad-btm-3">
                <?php
                    $display = "<div class=\"row\">";
                    for($i = 0; $i < $pre; $i ++) {
                        $display .= "
                            <div class=\"col-gap col-12 col-md-6 col-lg-4\">
                                <a href=\"".__ROOT__."images/portfolio/wedding/pre/" . ($i + 1) . ".jpg\" data-lightbox=\"Pre Wedding\" data-title=\"\">
                                    <img class=\"img-res\" src=\"".__ROOT__."images/portfolio/wedding/pre/square/" . ($i + 1) . ".jpg\" title=\"\" alt=\"\">
                                </a>
                            </div>
                        ";
                    }
                    $display .= "</div>";
                    echo $display;
                ?>
            </div>
                    <?php
                }
                else if($type == "wed") {
                    ?>
            <div id="wedding-wed" class="img-grid-block container pad-btm-3">
                <?php
                    $display = "<div class=\"row\">";
                    for($i = 0; $i < $wed; $i ++) {
                        $display .= "
                            <div class=\"col-gap col-12 col-md-6 col-lg-4\">
                                <a href=\"".__ROOT__."images/portfolio/wedding/wed/" . ($i + 1) . ".jpg\" data-lightbox=\"Wedding\" data-title=\"\">
                                    <img class=\"img-res\" src=\"".__ROOT__."images/portfolio/wedding/wed/square/" . ($i + 1) . ".jpg\" title=\"\" alt=\"\">
                                </a>
                            </div>
                        ";
                    }
                    $display .= "</div>";
                    echo $display;
                ?>
            </div>
                    <?php
                }
                else if($type == "films") {
                    ?>
            <div id="wedding-videos" class="img-grid-block container-fluid pad-btm-3">
                <?php
                    $display = "<div class=\"row justify-content-center\">";
                    for($i = 0; $i < $vdo; $i ++) {
                        $display .= "<div class=\"col-12 col-md-6\">";
                        $display .= $iframes[$i]['link'];
                        $display .= "</div>";
                    }
                    $display .= "</div>";
                    echo $display;
                ?>
            </div>
                    <?php
                }
                else {

                }
            ?>

        </main>

        <?= $footer ?>
        <?= $script ?>
        <script>
            $(document).ready(function() {
                var root = "<?= __ROOT__ ?>";
                var type = "<?= $type ?>";
                var action_url = root + "portfolio/wedding/";
                var action_id = "#action-" + type;
                $("#nav-facebook").attr("href", "https://www.facebook.com/vowsnphereys/");
                $("#nav-instagram").attr("href", "https://www.instagram.com/vowsnphereys/");
                $(".nav-portfolio, .nav-portfolio-wedding").addClass("active");
                $(action_id).addClass("active");

                $(".action-button").click(function() {
                    action_url += $(this).attr("data-url");
                    window.location = action_url;
                });
            });

        </script>
        <script src="<?= __ROOT__ ?>assets/js/lightbox-plus-jquery.min.js"></script>
    </body>
</html>
