<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/common/common.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>HTTP 404: Page Not Found | Litmass Media</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="<?= __ROOT__ ?>assets/css/error.css">
    </head>

    <body>

        <?= $header ?>
        <main>
            <div class="err-content container text-center">
                <i class="fas fa-exclamation-triangle"></i>
                <h1>Error 404 - Page Not Found</h1>
                <div class="row">
                  <div class="col-12">
                    <p>If you think what you&apos;re looking for should be here, please <a href="<?= __ROOT__ ?>contact">contact</a> the website owner.</p>
                    <p><a href="https://www.litmassmedia.com">Click Here</a>, to go to the Homepage of <span class="bold-sp-2">Litmass Media</span></p>
                  </div>
                </div>
            </div>
        </main>

        <?= $footer ?>
        <?= $script ?>
    </body>
</html>
