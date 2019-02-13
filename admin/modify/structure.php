<?php
    session_start();
    require_once("../../common/common.php");
    require_once("../check-login.php");
    require_once("../../config/db-config.php");

    if(isset($_POST['carousel'])) {

        $carousel = mysqli_real_escape_string($conn, $_POST['carousel']);
        $p_wedding_pre = mysqli_real_escape_string($conn, $_POST['p_wedding_pre']);
        $p_wedding = mysqli_real_escape_string($conn, $_POST['p_wedding']);
        $p_wedding_video = mysqli_real_escape_string($conn, $_POST['p_wedding_video']);
        $p_fashion = mysqli_real_escape_string($conn, $_POST['p_fashion']);
        $p_food = mysqli_real_escape_string($conn, $_POST['p_food']);
        $p_corporate = mysqli_real_escape_string($conn, $_POST['p_corporate']);
        $s_wedding = mysqli_real_escape_string($conn, $_POST['s_wedding']);
        $s_fashion = mysqli_real_escape_string($conn, $_POST['s_fashion']);
        $s_food = mysqli_real_escape_string($conn, $_POST['s_food']);
        $s_corporate = mysqli_real_escape_string($conn, $_POST['s_corporate']);

        $query_multi = "UPDATE `images` SET `carousel` = '$carousel', `p_wedding_pre` = '$p_wedding_pre', `p_wedding` = '$p_wedding', `p_wedding_video` = '$p_wedding_video', `p_fashion` = '$p_fashion', `p_food` = '$p_food', `p_corporate` = '$p_corporate' WHERE `serial` = 1;";
        $query_multi .= "UPDATE `services_meta` SET `count` = $s_wedding WHERE `service_id` = 1;";
        $query_multi .= "UPDATE `services_meta` SET `count` = $s_fashion WHERE `service_id` = 2;";
        $query_multi .= "UPDATE `services_meta` SET `count` = $s_food WHERE `service_id` = 3;";
        $query_multi .= "UPDATE `services_meta` SET `count` = $s_corporate WHERE `service_id` = 4;";
        // die($query_multi);

        if(!mysqli_multi_query($conn, $query_multi)) {
            die("Query Error");
        }

    ?>
    <script>
    alert("UPDATE Successful");
        function redirect() {
            window.location = "structure";
        }
        setTimeout(redirect(), 5000);

    </script>
    <?php
    }

    else {
        $query = "SELECT `carousel`, `p_wedding_pre`, `p_wedding`, `p_wedding_video`, `p_fashion`, `p_food`, `p_corporate` FROM `images` WHERE `serial` = 1";
        $result = mysqli_query($conn, $query);
        if(!$result) {
            die("Query Error");
        }
        $row = mysqli_fetch_assoc($result);

        $carousel = $row['carousel'];
        $p_wedding_pre = $row['p_wedding_pre'];
        $p_wedding = $row['p_wedding'];
        $p_wedding_video = $row['p_wedding_video'];
        $p_fashion = $row['p_fashion'];
        $p_food = $row['p_food'];
        $p_corporate = $row['p_corporate'];

        $query = "SELECT `count` FROM `services_meta`";
        $result = mysqli_query($conn, $query);
        if(!$result) {
            die("Query Error");
        }
        $services = array();
        while($row = mysqli_fetch_assoc($result)) {
            $services[] = $row;
        }

        $s_wedding = $services[0]['count'];
        $s_fashion = $services[1]['count'];
        $s_food = $services[2]['count'];
        $s_corporate = $services[3]['count'];
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Modify Home Page</title>
        <?= $head ?>
        <link rel="stylesheet" href="../../assets/css/admin.css" />
        <link rel="stylesheet" href="../../assets/css/form.css" />
        <style>
            main {
                padding-top: 3.5rem;
                padding-bottom: 5rem;
            }
            form {
                max-width: 400px;
                margin: 0 auto;
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
            .label {
                display: flex;
                align-items: center;
                font-weight: bold;
                letter-spacing: 1px;
                font-size: 1.1rem;
            }
        </style>
    </head>
    <body>

        <main class="container">
            <span id="admin-name">Admin - <span class="b-b-black"><?= $_SESSION['name'] ?></span></span>
            <a href="../dashboard" id="dashboard" class="link-button">Dashboard</a>
            <a href="../logout" id="logout" class="link-button">Logout</a>
            <h2 class="mid-line"><span class="text">Images / Films Count</span></h2>
            <form action="" method="post">
                <div class="row">
                    <div class="col-5 label">Carousel&nbsp;:</div>
                    <div class="col-7">
                        <input type="text" name="carousel" value="<?= $carousel ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 label">Pre Wedding&nbsp;:</div>
                    <div class="col-7">
                        <input type="text" name="p_wedding_pre" value="<?= $p_wedding_pre ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 label">Wedding&nbsp;:</div>
                    <div class="col-7">
                        <input type="text" name="p_wedding" value="<?= $p_wedding ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 label">Wedding Films&nbsp;:</div>
                    <div class="col-7">
                        <input type="text" name="p_wedding_video" value="<?= $p_wedding_video ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 label">Fashion&nbsp;:</div>
                    <div class="col-7">
                        <input type="text" name="p_fashion" value="<?= $p_fashion ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 label">Food&nbsp;:</div>
                    <div class="col-7">
                        <input type="text" name="p_food" value="<?= $p_food ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 label">Corporate Films&nbsp;:</div>
                    <div class="col-7">
                        <input type="text" name="p_corporate" value="<?= $p_corporate ?>" />
                    </div>
                </div>

                <h2 class="mid-line"><span class="text">Services</span></h2>

                <div class="row">
                    <div class="col-5 label">Wedding&nbsp;:</div>
                    <div class="col-7">
                        <input type="text" name="s_wedding" value="<?= $s_wedding ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 label">Fashion&nbsp;:</div>
                    <div class="col-7">
                        <input type="text" name="s_fashion" value="<?= $s_fashion ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 label">Food&nbsp;:</div>
                    <div class="col-7">
                        <input type="text" name="s_food" value="<?= $s_food ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-5 label">Corporate&nbsp;:</div>
                    <div class="col-7">
                        <input type="text" name="s_corporate" value="<?= $s_corporate ?>" />
                    </div>
                </div>


                <div class="text-right">
                    <input type="submit" id="btn-submit" class="link-button" name="submit" value="Save Changes" />
                </div>
            </form>
        </main>

        <?= $script ?>
    </body>
</html>
