<?php
    require_once("../common/common.php");
    require_once("../config/db-config.php");

    $query = "SELECT `content`, `count` FROM `services_meta` WHERE `service_id` = 1";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        echo mysqli_error($conn);
        die($query);
    }

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $content_top = $row['content'];
    $count = $row['count'];

    $query = "SELECT `serial`, `heading`, `content` FROM `services` WHERE `service_id` = 1";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        echo mysqli_error($conn);
        die($query);
    }

    $heading = array();
    $content = array();
    for($i = 0; $i < $count; $i ++) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $heading[] = $row['heading'];
        $content[] = $row['content'];
    }
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
                    <?= $content_top ?>
                </p>
            </div>

            <?php
                for($i = 1; $i <= $count; $i ++) {
                    switch ($i) {
                        case 1:
                            $type = "pre";
                            break;
                        case 2:
                            $type = "wed";
                            break;
                        case 3:
                            $type = "videos";
                            break;
                        default:
                            $type = "pre";
                            break;
                    }
            ?>
            <div class="services-block container pad-btm-3">
                <div class="caption"><?= $heading[($i - 1)] ?></div>
                <div class="content">
                    <?= $content[($i - 1)] ?>
                </div>
                <div class="row">
                    <div class="col-12">
                        <img class="img-res" src="../images/services/wedding/<?= $i ?>.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="<?= __ROOT__ ?>portfolio/wedding/<?= $type ?>" class="link-button">View Portfolio</a>
            </div>
            <?php
                }
            ?>

        </main>

        <?= $footer ?>
        <?= $script ?>
        <script>
            $(document).ready(function() {
                $(".nav-services-wedding, .nav-services").addClass("active");
                $("#nav-facebook").attr("href", "https://www.facebook.com/vowsnphereys/");
                $("#nav-instagram").attr("href", "https://www.instagram.com");
            });
        </script>

    </body>
</html>
