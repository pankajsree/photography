<?php
    session_start();
    require_once("../../../common/common.php");
    require_once("../../check-login.php");
    require_once("../../../config/db-config.php");

    if(isset($_POST['text_about'])) {

        $about = mysqli_real_escape_string($conn, $_POST['text_about']);
        $abhi = mysqli_real_escape_string($conn, $_POST['text_abhi']);
        $deep = mysqli_real_escape_string($conn, $_POST['text_deep']);

        $query = "UPDATE `text_about` SET `about` = '$about', `abhi` = '$abhi', `deep` = '$deep'";
        // die($query);
        $result = mysqli_query($conn, $query);
        if(!$result) {
            die("Query Error");
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
                    window.location = "about";
                });
            </script>
        </body>
    </html>

    <?php
    }

    else {
        $query = "SELECT `about`, `abhi`, `deep` FROM `text_about` WHERE `serial` = 1";
        $result = mysqli_query($conn, $query);
        if(!$result) {
            die("Query Error");
        }
        $row = mysqli_fetch_assoc($result);

        $about = $row['about'];
        $abhi = $row['abhi'];
        $deep = $row['deep'];
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
        </style>
    </head>
    <body>

        <main class="container">
            <span id="admin-name">Admin - <span class="b-b-black"><?= $_SESSION['name'] ?></span></span>
            <a href="../../dashboard" id="dashboard" class="link-button">Dashboard</a>
            <a href="../../logout" id="logout" class="link-button">Logout</a>
            <form action="" method="post">
                <h2 class="mid-line"><span class="text">About</span></h2>
                <textarea rows="3" id="text_about" name="text_about" placeholder="About section content"><?= $about ?></textarea>

                <h2 class="mid-line"><span class="text">Abhijit Deb</span></h2>
                <textarea rows="3" id="text_abhi" name="text_abhi" placeholder="Abhijit Deb Bio"><?= $abhi ?></textarea>

                <h2 class="mid-line"><span class="text">Deep Roy</span></h2>
                <textarea rows="3" id="text_deep" name="text_deep" placeholder="Deep Roy Bio"><?= $deep ?></textarea>

                <div class="text-right">
                    <input type="submit" id="btn-submit" class="link-button" name="submit" value="Save Changes" />
                </div>
            </form>
        </main>

        <?= $script ?>
    </body>
</html>
<?php } ?>
