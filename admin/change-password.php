<?php
    session_start();
    require_once("../common/common.php");
    require_once("check-login.php");
    require_once("../config/db-config.php");
    require_once("../helpers/token.php");

	if(isset($_POST['password1']) && Token::check($_POST['token'])) {
        $old_password = mysqli_real_escape_string($conn, $_POST['password1']);
		$password = mysqli_real_escape_string($conn, $_POST['password2']);
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $query = "SELECT `password` FROM `admin` WHERE `admin_id`= " . $_SESSION['admin_id'];
        $result= mysqli_query($conn, $query);
        if(!$result) {
			die("Query Failed !!!");
			// die($query);
		}
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $old_pass_original = $row['password'];

        if(password_verify($old_password, $old_pass_original)) {
            $query = "UPDATE `admin` SET `password`='$password_hash' WHERE `admin_id`= " . $_SESSION['admin_id'];
    		$result= mysqli_query($conn, $query);
    		if(!$result) {
    			die("Query Failed !!!");
    			// die($query);
    		}
    		else {
    		?>
    			<script>alert("Password Changed Successfully");</script>
    		<?php
    			header("refresh: 0.1; url=dashboard");
    		}
        }
        else {
            ?>
            <script>alert("Old Password NOT Matching !!!");</script>
            <?php
        }
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Change Password</title>
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/admin.css" />
        <link rel="stylesheet" href="../assets/css/form.css" />
        <style>
            main {
                padding-top: 5rem;
            }
            form {
                max-width: 750px;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>

        <main>
            <span id="admin-name">Admin - <span class="b-b-black"><?= $_SESSION['name'] ?></span></span>
            <a href="dashboard" id="dashboard" class="link-button">Dashboard</a>
            <a href="logout" id="logout" class="link-button">Logout</a>
            <div class="container">
                <h1 class="mid-line"><span class="text">Change Password</span></h1>
                <form id="password-form" method="post" action="">
                    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>" />
                    <div class="row">
                        <div class="col-12">
                            <input type="password" id="password1" name="password1" class="tbl-col" placeholder="Old Password"required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="password" id="password2" name="password2" class="tbl-col" placeholder="New Password"required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="password" id="password3" name="password3" class="tbl-col" placeholder="Confirm Password" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-right">
                            <input type="submit" id="password-submit" class="link-button"value="Change Password" />
                        </div>
                    </div>
                </form>
            </div>
        </main>

        <?= $script ?>
        <script>
            $("#password-form").submit(function(event) {
                var newPass = $("#password2").val();
                var confirmPass = $("#password3").val();
                var cmp = newPass.localeCompare(confirmPass);
                if(cmp != 0) {
                    event.preventDefault();
                    alert("New Password doesn't match with Confirm Password !!!")
                }
            });
        </script>
    </body>
</html>
