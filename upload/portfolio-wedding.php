<?php
    require_once("../common/common.php");

    if(isset($_POST['submit'])) {

        $updated_col = $_POST['updated_col'];
        $cols = explode(",", $updated_col);
        $col_count = count($cols);

        for($i = 0; $i < $col_count; $i ++) {
            $target_dir = "../images/portfolio/wedding/";
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
            window.location = "../upload/portfolio-wedding";
        }
        setTimeout(redirect(), 5000);

    </script>
    <?php
    }

    else {
        $file = file_get_contents('../common/meta.json');
    	$meta = json_decode($file, true);

        $count = $meta['portfolio']['wedding']['count'];
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Modify Wedding Portfolio</title>
        <?= $head ?>
        <style>
            main {
                padding-top: 5rem;
                padding-bottom: 5rem;
            }
            img {
                margin-bottom: 1.5rem;
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
            .mar-t-3 {
                margin-top: 3rem;
            }
        </style>
    </head>
    <body>

        <main class="container">
            <form class="" action="portfolio-wedding.php" method="post" enctype="multipart/form-data">
                <input type="hidden" value="" name="updated_col" id="updated-col" />
                <?php
                    $display = "<div class=\"row\">";
                    for($i = 0; $i < $count; $i ++) {
                        if($i % 3 == 0 && $i != 0) {
                            $display .= "
                                </div>
                                <div class=\"row\">
                            ";
                        }
                        $display .= "
                            <div class=\"col-4 pos-rel\">
                                <img class=\"img-res\" src=\"../images/portfolio/wedding/" . ($i + 1) . ".jpg\" alt=\"\" />
                                <div class=\"edit\" data-serial=\"" . ($i + 1) . "\"><i class=\"fas fa-edit\"></i></div>
                            </div>
                            <input type=\"file\" accept=\"image/jpeg\" id=\"img" . ($i + 1) . "\" class=\"accept-img d-none\" data-serial=\"" . ($i + 1) . "\" name=\"img" . ($i + 1) . "\" />
                        ";
                    }
                    $display .= "</div>";
                    echo $display;
                ?>
                <div class="text-right">
                    <input type="submit" class="link-button mar-t-3" name="submit" value="Save Changes" />
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
