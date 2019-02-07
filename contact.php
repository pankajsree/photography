<?php
    require_once("common/common.php");
    require_once("config/db-config.php");

    $query = "SELECT `content` FROM `contact`";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        echo mysqli_error($conn);
        die($query);
    }

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $content = $row['content'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Commercial Photography</title>
        <?= $head ?>
        <link rel="stylesheet" href="assets/css/contact.css" />
    </head>
    <body>

        <?= $header ?>

        <main>

            <div class="pad-t-5 pad-btm-3 container">
                <h1><span class="pad-h-1 b-b-black">Contact us</span></h1>
                <p class="content-w-60">
                    <?= $content ?>
                </p>
            </div>

            <div class="container pad-btm-3">
                <form id="contact-form" action="">
                    <div class="row">
                        <div class="col-12 col-sm-6 xs-pad-btm-1">
                            <input type="text" id="cus_name" name="cus_name" value="" placeholder="Your Name" required />
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="email" id="cus_email" name="cus_email" value="" placeholder="Email Address" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 xs-pad-btm-1">
                            <input type="text" id="cus_tel" name="cus_tel" value="" placeholder="Telephone (optional)" />
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="text" id="co_name" name="co_name" value="" placeholder="Company Name (optional)" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <textarea id="cus_message" name="cus_message" rows="8" placeholder="Your Message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <input type="submit" id="submit-btn" class="link-button" name="" value="Send Message" />
                            <span id="sending"><img src="images/icons/loading4.gif" alt="Sending" /></span>
                        </div>
                    </div>
                </form>
            </div>

            <div class="container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14598.50135623127!2d91.2705290388054!3d23.831918352786868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3753f41283c7cd73%3A0xad36cf4a148d70e0!2sRMS+Chowmuhani%2C+Krishna+Nagar%2C+Agartala%2C+Tripura+799001!5e0!3m2!1sen!2sin!4v1540726510566" allowfullscreen></iframe>
            </div>

        </main>

        <?= $footer ?>
        <?= $script ?>
        <script src="assets/js/contact.js"></script>

    </body>
</html>
