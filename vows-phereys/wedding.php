<?php
    require_once("../common/common.php");
    require_once("../config/db-config.php");

    $query = "SELECT `p_wedding` FROM `images`";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        echo mysqli_error($conn);
        die($query);
    }

    $row_count = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = $row_count['p_wedding'];
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
                <h1><span class="pad-h-1 b-b-black">Vows &amp; Phereys</span></h1>
            </div>

            <div class="img-grid-block container pad-btm-3">
                <h2><span class="pad-h-1 b-b-black">Wedding</span></h2>
                <?php
                    $display = "<div class=\"row\">";
                    for($i = 0; $i < $count; $i ++) {
                        $display .= "
                            <div class=\"col-gap col-12 col-md-6 col-lg-4\">
                                <a href=\"../images/portfolio/wedding/wed/" . ($i + 1) . ".jpg\" data-lightbox=\"Pre Wedding\" data-title=\"\">
                                    <img class=\"img-res\" src=\"../images/portfolio/wedding/wed/square/" . ($i + 1) . ".jpg\" title=\"\" alt=\"\">
                                </a>
                            </div>
                        ";
                    }
                    $display .= "</div>";
                    echo $display;
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
            $(".nav-vnp, .nav-vnp-wedding").addClass("active");
        </script>
        <script src="../assets/js/lightbox-plus-jquery.min.js"></script>
    </body>
</html>
