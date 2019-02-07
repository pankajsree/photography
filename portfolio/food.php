<?php
    require_once("../common/common.php");
    require_once("../config/db-config.php");

    $query = "SELECT `p_food` FROM `images`";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        echo mysqli_error($conn);
        die($query);
    }

    $row_count = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = $row_count['p_food'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Commercial Photography</title>
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/portfolio.css" />
        <link rel="stylesheet" href="../assets/css/lightbox.min.css" />
    </head>
    <body>

        <?= $header ?>

        <main>

            <div class="pad-t-5 pad-btm-3 container">
                <h1><span class="pad-h-1 b-b-black">Food</span></h1>
            </div>

            <div class="img-grid-block container pad-btm-3">
                <?php
                    $display = "<div class=\"row\">";
                    for($i = 0; $i < $count; $i ++) {
                        $display .= "
                            <div class=\"col-gap col-12 col-md-6 col-lg-4\">
                                <a href=\"../images/portfolio/food/" . ($i + 1) . ".jpg\" data-lightbox=\"Vows & Phereys\" data-title=\"\">
                                    <img class=\"img-res\" src=\"../images/portfolio/food/square/" . ($i + 1) . ".jpg\" title=\"\" alt=\"\">
                                </a>
                            </div>
                        ";
                    }
                    $display .= "</div>";
                    echo $display;
                ?>
            </div>

            <div class="text-center">
                <a href="<?= __ROOT__ ?>services/food" class="link-button">View Services</a>
            </div>

        </main>

        <?= $footer ?>
        <?= $script ?>
        <script>
            $(".nav-portfolio, .nav-portfolio-food").addClass("active");
        </script>
        <script src="../assets/js/lightbox-plus-jquery.min.js"></script>
    </body>
</html>
