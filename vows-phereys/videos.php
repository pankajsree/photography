<?php
    require_once("../common/common.php");
    require_once("../config/db-config.php");

    $query = "SELECT `p_wedding_video` FROM `images` WHERE `serial` = 1";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        echo mysqli_error($conn);
        die($query);
    }

    $row_count = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = $row_count['p_wedding_video'];

    $iframes = array();

    $query = "SELECT `link` FROM `videos_wedding` ORDER BY `serial` LIMIT $count";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        echo mysqli_error($conn);
        die($query);
    }
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $iframes[] = $row;
    }
    // echo $iframes[0]['link'];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Commercial Photography</title>
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/portfolio.css" />
        <link rel="stylesheet" href="../assets/css/lightbox.min.css" />
    </head>
    <style>
        iframe {
            margin: 1rem 0;
        }
    </style>
    <body>

        <?= $header ?>

        <main>

            <div class="pad-t-5 pad-btm-3 container">
                <h1><span class="pad-h-1 b-b-black">Vows &amp; Phereys</span></h1>
            </div>

            <div class="img-grid-block container text-center pad-btm-3">
                <h2><span class="pad-h-1 b-b-black">Videos</span></h2>
                <?php
                    for($i = 0; $i < $count; $i ++) {
                        echo $iframes[$i]['link'];
                    }
                ?>
            </div>

            <div class="text-center">
                <a href="<?= __ROOT__ ?>services/wedding" class="link-button">View Services</a>
            </div>

        </main>

        <?= $footer ?>
        <?= $script ?>
        <script>
            $(document).ready(function() {
                $("#nav-facebook").attr("href", "https://www.facebook.com/vowsnphereys/");
                $("#nav-instagram").attr("href", "https://www.instagram.com");
            });
            $(".nav-vnp, .nav-vnp-videos").addClass("active");
        </script>
        <script src="../assets/js/lightbox-plus-jquery.min.js"></script>
    </body>
</html>