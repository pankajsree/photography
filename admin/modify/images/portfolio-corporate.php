<?php
    session_start();
    require_once("../../../common/common.php");
    require_once("../../check-login.php");
    require_once("../../../config/db-config.php");

    if(isset($_POST['updated_col'])) {
        $updated_col = $_POST['updated_col'];
        if($updated_col == "") {
            $col_count = 0;
        }
        else {
            $cols = explode(",", $updated_col);
            $col_count = count($cols);
        }

        for($i = 0; $i < $col_count; $i ++) {
            $textarea = "video" . $cols[$i];
            $link = mysqli_real_escape_string($conn, $_POST[$textarea]);
            $query = "UPDATE `videos_corporate` SET `link` = '$link' WHERE `serial` = $cols[$i]";
            $result = mysqli_query($conn, $query);
            if(!$result) {
                die("Query Error");
            }
        }

    ?>
    <script>
    alert("UPDATE Successful");
        function redirect() {
            window.location = "portfolio-corporate";
        }
        setTimeout(redirect(), 5000);

    </script>
    <?php
    }

    else {
        $query = "SELECT `p_corporate` FROM `images` WHERE `serial` = 1";
        $result = mysqli_query($conn, $query);
        if(!$result) {
            die("Query Error");
        }
        $row = mysqli_fetch_assoc($result);
        $count = $row['p_corporate'];

        $iframes = array();

        $query = "SELECT `link` FROM `videos_corporate` ORDER BY `serial` LIMIT $count";
        $result = mysqli_query($conn, $query);
        if(!$result) {
            echo mysqli_error($conn);
            die($query);
        }
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $iframes[] = $row;
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
                padding-top: 3.5rem;
            }
            img {
                margin-bottom: 5rem;
            }
            textarea {
                display: block;
                max-width: 750px;
                margin: 1rem auto;
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
        </style>
    </head>
    <body>

        <main class="container">
            <span id="admin-name">Admin - <span class="b-b-black"><?= $_SESSION['name'] ?></span></span>
            <a href="../../dashboard" id="dashboard" class="link-button">Dashboard</a>
            <a href="../../logout" id="logout" class="link-button">Logout</a>
            <form class="" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" value="" name="updated_col" id="updated-col" />
                <h2 class="mid-line"><span class="text">Corporate Video URLs</span></h2>
                <?php
                    $display = "";
                    for($i = 0; $i < $count; $i ++) {
                        $text = $iframes[$i]['link'];
                        $display .= "
                            <textarea id=\"video" . ($i + 1) . "\" class=\"video-link\" data-serial=\"" . ($i + 1) . "\" name=\"video" . ($i + 1) . "\" placeholder=\"Youtube link for Video " . ($i + 1) . "\">$text</textarea>
                        ";
                    }
                    echo $display;
                ?>

                <div class="text-right">
                    <input type="submit" id="btn-submit" class="link-button" name="submit" value="Save Changes" />
                </div>
            </form>
        </main>

        <?= $script ?>
        <script>
            var updated_col = [];
            var col = "";

            $(document).ready(function() {
                $(".video-link").change(function() {
                    $(this).off("change");
                    col = $(this).attr("data-serial");
                    updated_col.push(col);
                    $("#updated-col").val(updated_col);
                });
            });

        </script>
    </body>
</html>
