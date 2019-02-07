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
            $target_dir = "../../../images/services/corporate/";
            $file_serial = $cols[$i];
            $file_name = "img" . $file_serial;

            $image = $file_serial . ".jpg";
            $target_file = $target_dir . $image;
            if (file_exists($target_file)) {
    		    unlink($target_file);
    		}

    		if (!move_uploaded_file($_FILES[$file_name]["tmp_name"], $target_file)) {
    			die("Sorry, there was an error uploading image, try to Upload it Later. Keep in mind, MAX Upload Size 2 Mb.");
        	}
        }

    ?>
    <script>
    alert("UPDATE Successful");
        function redirect() {
            window.location = "services-corporate";
        }
        setTimeout(redirect(), 5000);

    </script>
    <?php
    }

    else {
        $query = "SELECT `count` FROM `services_meta` WHERE `service_id` = 4";
        $result = mysqli_query($conn, $query);
        if(!$result) {
            die("Query Error");
        }
        $row = mysqli_fetch_assoc($result);
        $count = $row['count'];
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Modify Home Page</title>
        <?= $head ?>
        <link rel="stylesheet" href="../../../assets/css/admin.css" />
        <style>
            main {
                padding-top: 3.5rem;
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
        </style>
    </head>
    <body>

        <main class="container">
            <span id="admin-name">Admin - <span class="b-b-black"><?= $_SESSION['name'] ?></span></span>
            <a href="../../dashboard" id="dashboard" class="link-button">Dashboard</a>
            <a href="../../logout" id="logout" class="link-button">Logout</a>
            <form class="" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" value="" name="updated_col" id="updated-col" />
                <h2 class="mid-line"><span class="text">Corporate Services</span></h2>
                <?php
                    $display = "";
                    for($i = 0; $i < $count; $i ++) {
                        $display .= "
                            <div class=\"row\">
                                <div class=\"col-12 pos-rel\">
                                    <img class=\"img-res\" src=\"../../../images/services/corporate/" . ($i + 1) . ".jpg\" alt=\"\" />
                                    <div class=\"edit\" data-serial=\"" . ($i + 1) . "\"><i class=\"fas fa-edit\"></i></div>
                                </div>
                            </div>
                            <input type=\"file\" accept=\"image/jpeg\" id=\"img" . ($i + 1) . "\" class=\"accept-img d-none\" data-serial=\"" . ($i + 1) . "\" name=\"img" . ($i + 1) . "\" />
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
            var serial = 0;
            var img_id = "";

            $(document).ready(function() {
                $(".edit").click(function() {
                    serial = $(this).attr("data-serial");
                    img_id = "#img" + serial;
                    $(img_id).trigger("click");
                });

                $(".accept-img").change(function() {
                    $(this).off("change");
                    col = $(this).attr("data-serial");
                    updated_col.push(col);
                    $("#updated-col").val(updated_col);
                });
            });

        </script>
    </body>
</html>
