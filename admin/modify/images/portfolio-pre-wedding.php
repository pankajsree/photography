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

        $updated_col_2 = $_POST['updated_col_2'];
        if($updated_col_2 == "") {
            $col_count_2 = 0;
        }
        else {
            $cols_2 = explode(",", $updated_col_2);
            $col_count_2 = count($cols_2);
        }

        for($i = 0; $i < $col_count; $i ++) {
            $target_dir = "../../../images/portfolio/wedding/pre/";
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

        for($i = 0; $i < $col_count_2; $i ++) {
            $target_dir_2 = "../../../images/portfolio/wedding/pre/square/";
            $file_serial_2 = $cols_2[$i];
            $file_name_2 = "img_sq_" . $file_serial_2;

            $image_2 = $file_serial_2 . ".jpg";
            $target_file_2 = $target_dir_2 . $image_2;
            if (file_exists($target_file_2)) {
    		    unlink($target_file_2);
    		}

    		if (!move_uploaded_file($_FILES[$file_name_2]["tmp_name"], $target_file_2)) {
    			die("Sorry, there was an error uploading image, try to Upload it Later. Keep in mind, MAX Upload Size 2 Mb.");
        	}
        }

    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Success</title>
            <?= $script ?>
            <?= $swal_all ?>
        </head>
        <body>
            <script>
                Swal.fire({
                    title: 'Done☺',
                    text: 'Text updated Successfully !!!',
                    type: 'success'
                }).then(function() {
                    window.location = "portfolio-pre-wedding";
                });
            </script>
        </body>
    </html>

    <?php
    }

    else {
        $query = "SELECT `p_wedding_pre` FROM `images` WHERE `serial` = 1";
        $result = mysqli_query($conn, $query);
        if(!$result) {
            die("Query Error");
        }
        $row = mysqli_fetch_assoc($result);
        $count = $row['p_wedding_pre'];

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
            .edit {
                position: absolute;
                right: 15px;
                top: 0;
                background-color: rgba(255, 255, 255, 0.8);
                padding: 2rem;
                cursor: pointer;
            }
            .edit i {
                font-size: 2.5rem;
            }
            .edit-sq {
                position: absolute;
                left: 15px;
                top: 0;
                background-color: rgba(255, 255, 255, 0.8);
                padding: 1rem;
                cursor: pointer;
            }
            .edit-sq i {
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
                <input type="hidden" value="" name="updated_col_2" id="updated-col-2" />
                <h2 class="mid-line"><span class="text">Pre - Wedding</span></h2>
                <?php
                    $display = "";
                    for($i = 0; $i < $count; $i ++) {
                        $display .= "
                            <div class=\"row\">
                                <div class=\"col-12 pos-rel\">
                                    <img class=\"img-res\" src=\"../../../images/portfolio/wedding/pre/square/" . ($i + 1) . ".jpg\" alt=\"\" />
                                    <div class=\"edit\" id=\"edit_" . ($i + 1) . "\" data-serial=\"" . ($i + 1) . "\"><i class=\"fas fa-edit\"></i></div>
                                    <div class=\"edit-sq\" id=\"edit_sq_" . ($i + 1) . "\" data-serial=\"" . ($i + 1) . "\"><i class=\"fas fa-edit\"></i></div>
                                </div>
                            </div>
                            <input type=\"file\" accept=\"image/jpeg\" id=\"img" . ($i + 1) . "\" class=\"accept-img d-none\" data-serial=\"" . ($i + 1) . "\" name=\"img" . ($i + 1) . "\" />
                            <input type=\"file\" accept=\"image/jpeg\" id=\"img_sq_" . ($i + 1) . "\" class=\"accept-img-sq d-none\" data-serial=\"" . ($i + 1) . "\" name=\"img_sq_" . ($i + 1) . "\" />
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
        <script src="<?= __ROOT__ ?>assets/js/upload-img.js"></script>
        <script>
            var updated_col = [];
            var updated_col_2 = [];
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

                $(".edit-sq").click(function() {
                    serial = $(this).attr("data-serial");
                    img_id = "#img_sq_" + serial;
                    $(img_id).trigger("click");
                });

                $(".accept-img-sq").change(function() {
                    $(this).off("change");
                    col = $(this).attr("data-serial");
                    updated_col_2.push(col);
                    $("#updated-col-2").val(updated_col_2);
                });
            });

        </script>
    </body>
</html>
<?php } ?>
