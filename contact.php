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
        <title>Contact us | Litmass Media</title>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11563.265567706088!2d73.75599968775963!3d18.599093948364924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b97aaf571bed%3A0xc67346ba5a76673!2sWakad%2C+Pimpri-Chinchwad%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1549563765543" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

        </main>

        <?= $footer ?>
        <?= $script ?>
        <?= $swal_all ?>
        <script src="assets/js/contact.js"></script>

    </body>
</html>
