<?php
    session_start();
    require_once("../../../common/common.php");
    require_once("../../check-login.php");
    require_once("../../../config/db-config.php");

    $service_id = 3;

    if(isset($_POST['service_count'])) {

        $count = $_POST['service_count'];
        $service_content = mysqli_real_escape_string($conn, $_POST['service_content']);

        $query_multi = "UPDATE `services_meta` SET `content` = '$service_content' WHERE `service_id` = $service_id;";

        for($i = 0; $i < $count; $i ++) {
            $serial = $i + 1;
            $heading_id = "heading_" . $serial;
            $content_id = "content_" . $serial;
            $heading_update = mysqli_real_escape_string($conn, $_POST[$heading_id]);
            $content_update = mysqli_real_escape_string($conn, $_POST[$content_id]);
            $query_multi .= "UPDATE `services` SET `heading` = '$heading_update', `content` = '$content_update' WHERE `serial` = $serial AND `service_id` = $service_id;";
        }

        $result = mysqli_multi_query($conn, $query_multi);
        if(!$result) {
            die("Query Error");
        }

    ?>
    <script>
    alert("UPDATE Successful");
        function redirect() {
            window.location = "services-fashion";
        }
        setTimeout(redirect(), 5000);

    </script>
    <?php
    }

    else {
        $query = "SELECT `service_name`, `content`, `count` FROM `services_meta` WHERE `service_id` = $service_id";
        $result = mysqli_query($conn, $query);
        if(!$result) {
            die("Query Error");
        }
        $row = mysqli_fetch_assoc($result);

        $service_name = $row['service_name'];
        $content = $row['content'];
        $count = $row['count'];

        $query = "SELECT `heading`, `content` FROM `services` WHERE `service_id` = $service_id ORDER BY `serial`";
        $result = mysqli_query($conn, $query);
        if(!$result) {
            die("Query 2 Error");
        }

        $services = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $services[] = $row;
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Modify Home Page</title>
        <?= $head ?>
        <link rel="stylesheet" href="../../../assets/css/admin.css" />
        <link rel="stylesheet" href="../../../assets/css/form.css" />
        <style>
            main {
                padding-top: 5rem;
                padding-bottom: 5rem;
            }
            img {
                margin-bottom: 5rem;
            }
            .edit, .edit-h {
                position: absolute;
                right: 15px;
                top: 0;
                background-color: rgba(255, 255, 255, 0.8);
                padding: 1rem;
                cursor: pointer;
            }
            .edit i, .edit-h i {
                font-size: 1.5rem;
            }
            .link-button {
                letter-spacing: 2px;
            }
            .mid-line {
                position: relative;
                text-align: center;
                margin-bottom: 3rem;
            }
            .mid-line:after {
                content: '';
                position: absolute;
                left: 5%;
                top: 50%;
                width: 90%;
                height: 1px;
                background-color: #111;
                z-index: -1;
            }
            .mid-line .text {
                background-color: #fff;
                padding: 0 2rem;
            }
            #btn-submit {
                position: fixed;
                top: 1rem;
                right: 8.5rem;
            }
            h2 {
                margin-top: 5rem;
            }
            input {
                margin-bottom: 2rem;
            }
        </style>
    </head>
    <body>

        <main class="container">
            <span id="admin-name">Admin - <span class="b-b-black"><?= $_SESSION['name'] ?></span></span>
            <a href="../../dashboard" id="dashboard" class="link-button">Dashboard</a>
            <a href="../../logout" id="logout" class="link-button">Logout</a>
            <h1 class="mid-line"><span class="text"><?= $service_name ?> Services</span></h1>
            <form action="" method="post">
                <input type="hidden" name="service_count" value="<?= $count ?>" />
                <textarea rows="3" id="service_content" name="service_content" placeholder="<?= $service_name ?> Header Content"><?= $content ?></textarea>

                <?php
                    for($i = 0; $i < $count; $i ++) {
                        $serial = $i + 1;
                        $heading_id = "heading_" . $serial;
                        $content_id = "content_" . $serial;
                ?>
                <h2 class="mid-line"><span class="text">Section <?= $serial ?></span></h2>
                <input type="text" id="<?= $heading_id ?>" name="<?= $heading_id ?>" placeholder="Section <?= $serial ?> Heading" value="<?= $services[$i]['heading'] ?>" />

                <textarea rows="3" id="<?= $content_id ?>" name="<?= $content_id ?>" placeholder="Section <?= $serial ?> Content"><?= $services[$i]['content'] ?></textarea>
                <?php
                    }
                ?>

                <div class="text-right">
                    <input type="submit" id="btn-submit" class="link-button" name="submit" value="Save Changes" />
                </div>
            </form>
        </main>

        <?= $script ?>
    </body>
</html>
