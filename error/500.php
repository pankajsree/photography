<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/common/common.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>HTTP 500: Internal Server Error | Litmass Media</title>
        <meta name="author" content="Pankajsree Das">
        <?= $head ?>
        <link rel="stylesheet" href="<?= __ROOT__ ?>assets/css/error.css">
    </head>

    <body>

        <?= $header ?>
        <main>
            <div class="err-content container text-center">
                <i class="fas fa-exclamation-triangle"></i>
                <h1>Error 500 - Internal Server Error</h1>
                <div class="row">
                  <div class="col-12">
                    <p>The server encountered an internal error. Please contact the server administrator at <a href="javascript:location='mailto:\u006b\u0061\u006d\u0061\u006c\u006d\u0063\u0061\u0030\u0033\u0040\u0067\u006d\u0061\u0069\u006c\u002e\u0063\u006f\u006d';void 0"><script type="text/javascript">document.write('\u006b\u0061\u006d\u0061\u006c\u006d\u0063\u0061\u0030\u0033\u0040\u0067\u006d\u0061\u0069\u006c\u002e\u0063\u006f\u006d')</script></a></p>
                    <p><a href="https://www.litmassmedia.com">Click Here</a>, to go to the Homepage of <span class="bold-sp-2">Litmass Media</span></p>
                  </div>
                </div>
            </div>
        </main>

        <?= $footer ?>
        <?= $script ?>
    </body>
</html>
