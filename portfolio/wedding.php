<?php
    require_once("../common/common.php");
    require_once("../config/db-config.php");

    if(!isset($_GET['type'])) {
        $type = "pre";
    }
    else {
        $type = $_GET['type'];
    }

    if($type == "pre" || $type == "wed" || $type == "videos") {

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
        <title>Commercial Photography</title>
        <?= $head ?>
        <link rel="stylesheet" href="<?= __ROOT__ ?>assets/css/portfolio.css" />
        <link rel="stylesheet" href="<?= __ROOT__ ?>assets/css/lightbox.min.css" />
    </head>
    <body>

        <?= $header ?>

        <main id="p_wedding-page">

            <div class="pad-t-5 pad-btm-3 container">
                <h1><span class="pad-h-1 b-b-black">Vows &amp; Phereys</span></h1>
                <div class="action-container">
                    <div id="action-pre" class="action-button" data-url="pre">Pre Wedding</div>
                    <div id="action-wed" class="action-button" data-url="wed">Wedding</div>
                    <div id="action-videos" class="action-button" data-url="videos">Wedding Videos</div>
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
                else if($type == "videos") {
                    ?>
            <div id="wedding-videos" class="img-grid-block container pad-btm-3">
                <?php
                    for($i = 0; $i < $vdo; $i ++) {
                        echo $iframes[$i]['link'];
                    }
                ?>
            </div>
                    <?php
                }
                else {

                }
            ?>

            <div class="text-center">
                <a href="<?= __ROOT__ ?>services/wedding" class="link-button">View Services</a>
            </div>

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
                $("#nav-instagram").attr("href", "https://www.instagram.com");
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
