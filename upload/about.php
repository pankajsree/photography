<?php
    require_once("../common/common.php");

    if(isset($_POST['submit'])) {

        $updated_col = $_POST['updated_col'];
        $cols = explode(",", $updated_col);
        $col_count = count($cols);

        for($i = 0; $i < $col_count; $i ++) {
            $target_dir = "../images/about/";
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
            window.location = "../upload/about";
        }
        setTimeout(redirect(), 5000);

    </script>
    <?php
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Modify Fashion Services</title>
        <?= $head ?>
        <style>
            main {
                padding-top: 5rem;
                padding-bottom: 5rem;
            }
            img {
                margin-bottom: 5rem;
            }
            .edit {
                position: absolute;
                right: 15px;
                top: 0;
                background-color: rgba(255, 255, 255, 0.8);
                padding: 1rem;
                cursor: pointer;
            }
            .edit i {
                font-size: 1.5rem;
            }
            .link-button {
                letter-spacing: 2px;
            }
        </style>
    </head>
    <body>

        <main class="container">
            <form class="" action="about.php" method="post" enctype="multipart/form-data">
                <input type="hidden" value="" name="updated_col" id="updated-col" />

                <div class="row">
                    <div class="col-12 pos-rel text-center">
                        <img src="../images/about/1.jpg" alt="" />
                        <div class="edit" data-serial="1"><i class="fas fa-edit"></i></div>
                    </div>
                </div>
                <input type="file" accept="image/jpeg" id="img1" class="accept-img d-none" data-serial="1" name="img1" />

                <div class="row">
                    <div class="col-12 pos-rel text-center">
                        <img src="../images/about/2.jpg" alt="" />
                        <div class="edit" data-serial="2"><i class="fas fa-edit"></i></div>
                    </div>
                </div>
                <input type="file" accept="image/jpeg" id="img2" class="accept-img d-none" data-serial="2" name="img2" />

                <div class="text-right">
                    <input type="submit" class="link-button" name="submit" value="Save Changes" />
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
