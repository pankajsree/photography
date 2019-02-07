<?php
    session_start();
    require("../common/common.php");
    require_once("../config/db-config.php");
    require_once("../helpers/token.php");

    if(isset($_SESSION['email'])) {
        header("Location: dashboard");
    }

    if(isset($_POST['submit'])) {
        if ($_SESSION['code'] != $_POST["captcha"]) {
            ?>
            <script>
                alert("Captcha didn't match !!!");
            </script>
            <?php
        }
        else {
            if(isset($_POST['token']) && Token::check($_POST['token'])) {
                session_regenerate_id(true);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $password = mysqli_real_escape_string($conn, $_POST['password']);

                $query = "SELECT `admin_id`, `name`, `password` FROM `admin` WHERE `email` = '$email'";
                $result = mysqli_query($conn, $query);

                if(!$result) {
                    die($query);
                }

                if(mysqli_num_rows($result) != 0) {
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    if(password_verify($password, $row['password'])) {
                        $_SESSION['email'] = $email;
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['admin_id'] = $row['admin_id'];
                ?>
                        <script>window.location.href = "dashboard"</script>
                <?php
                    }
                    else {
                        echo "<script>alert(\"Password Mismatch, Try Again !!!\");</script>";
                        echo "<script>window.location.href = \"login\"</script>";
                    }
                }

                else {
                    echo "<script>alert(\"Password Mismatch, Try Again !!!\");</script>";
                    echo "<script>window.location.href = \"login\"</script>";
                }
            }
            else {
                echo "<script>alert(\"* * * The Website is CSRF Protected * * *\");</script>";
                echo "<script>window.location.href = \"login\"</script>";
            }
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin | Litmass Media</title>
        <meta name="author" content="Pankajsree Das">

        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/admin.css" />
        <link rel="stylesheet" href="../assets/css/form.css" />

    </head>
    <style>

        form {
            max-width: 750px;
            margin: 0 auto;
        }

        .link-button {
            letter-spacing: 5px;
        }

        #captcha-refresh {
            margin-left: 0.5rem;
            color: #800000;
        }

    </style>
    <body>

        <main>
            <div class="container">
                <h1 class="mid-line"><span class="text">Admin Login</span></h1>
                <form id="form-login" action="login.php" method="post">
                    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>" />
                    <div class="row">
                        <div class="col-12"><input type="email" id="email" name="email" value="" placeholder="Enter your Email ID" required /></div>
                    </div>
                    <div class="row">
                        <div class="col-12"><input type="password" id="password" name="password" value="" placeholder="Enter your Password" required /></div>
                    </div>
                    <div class="row">
                        <div class="col-4 text-center" >
                            <img id="img" class="d-inline" height="35" width="90" src="../helpers/captcha.php" />
                            <a id="captcha-refresh" href="javascript:void(0);"><i class="fas fa-sync-alt"></i></a>
                        </div>
                        <div class="col-8">
                            <input type="text" class="tbl-col" placeholder="Enter Captcha Here" id="captcha" name="captcha" required />
                        </div>
                    </div>
                    <div class="row b-b-theme-normal pad-btm-1">
                        <div class="col-12">
                            <input type="submit" class="d-inline-block link-button float-right" name="submit" value="Login" />
                        </div>
                    </div>
                </form>
            </div>
        </main>

        <?= $script ?>
        <script>
            $(document).ready(function() {
                $("#captcha-refresh").click(function() {
                    $("#img").attr("src", "../helpers/captcha.php?" + Math.random());
                });
            });
        </script>

    </body>
</html>
