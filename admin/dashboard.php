<?php
    session_start();
    require_once("../common/common.php");
    require_once("check-login.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Dashboard | Litmass Media</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="../assets/css/admin.css" />
    </head>
    <body>


        <div class="container">
            <h1 class="mid-line"><span class="text">Admin Dashboard</span></h1>
            <span id="admin-name">Admin - <span class="b-b-black"><?= $_SESSION['name'] ?></span></span>
            <a href="logout" id="logout" class="link-button">Logout</a>

            <h2><span class="pad-h-1 b-b-black">Security &amp; Structure</span></h2>
            <div class="dash-blocks">
                <a href="change-password" class="link-button">Change Password</a>
                <a href="modify/structure" class="link-button">Modify Structure</a>
            </div>

            <h2><span class="pad-h-1 b-b-black">Edit Text Content</span></h2>
            <div class="dash-blocks">
                <a href="modify/text/home" class="link-button">Home</a>
                <a href="modify/text/about" class="link-button">About us</a>
                <a href="modify/text/contact" class="link-button">Contact us</a>
                <a href="modify/text/services-wedding" class="link-button">Services Wedding</a>
                <a href="modify/text/services-fashion" class="link-button">Services Fashion</a>
                <a href="modify/text/services-food" class="link-button">Services Food</a>
                <a href="modify/text/services-corporate" class="link-button">Services Corporate</a>
            </div>

            <h2><span class="pad-h-1 b-b-black">Add / Modify Images &amp; Films</span></h2>
            <div class="dash-blocks">
                <a href="modify/images/home" class="link-button">Home</a>
                <a href="modify/images/about" class="link-button">About us</a>
                <a href="modify/images/services-wedding" class="link-button">Services Wedding</a>
                <a href="modify/images/services-fashion" class="link-button">Services Fashion</a>
                <a href="modify/images/services-food" class="link-button">Services Food</a>
                <a href="modify/images/services-corporate" class="link-button">Services Corporate</a>
                <a href="modify/images/portfolio-pre-wedding" class="link-button">Portfolio Pre-Wedding</a>
                <a href="modify/images/portfolio-wedding" class="link-button">Portfolio Wedding</a>
                <a href="modify/images/portfolio-wedding-films" class="link-button">Portfolio Wedding Films</a>
                <a href="modify/images/portfolio-fashion" class="link-button">Portfolio Fashion</a>
                <a href="modify/images/portfolio-food" class="link-button">Portfolio Food</a>
                <a href="modify/images/portfolio-corporate" class="link-button">Portfolio Corporate Films</a>
            </div>
        </div>

        </div>
        <?= $script ?>
    </body>
</html>
