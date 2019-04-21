<?php
    require_once("common/common.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>FAQs | Litmass Media</title>
        <?= $head ?>
        <style>
            h1 {
                margin-bottom: 4rem;
            }
            .question {
                font-weight: bold;
            }
            .answer {
                margin-bottom: 3rem;
            }
            .question, .answer {
                font-size: 1.1rem;
            }
        </style>
    </head>
    <body>

        <?= $header ?>

        <main>
            <div class="pad-top-5 block container">
                <h1><span class="pad-h-1 b-b-black">Frequently Asked Questions(FAQs)</span></h1>

                <div class="question">Q1.&nbsp;&nbsp;Do you guys shoot outside Pune?</div>
                <div class="answer"><b>Answer:</b>&nbsp;&nbsp;Yes definitely, all over India and abroad as well!</div>

                <div class="question">Q2.&nbsp;&nbsp;Do you take only take photos or do you make wedding videos as well?</div>
                <div class="answer"><b>Answer:</b>&nbsp;&nbsp;Yes, we make cinematic wedding films as well.</div>

                <div class="question">Q3.&nbsp;&nbsp;Do you guys provide wedding albums?</div>
                <div class="answer"><b>Answer:</b>&nbsp;&nbsp;Yes, in a variety of sizes. We specifically design the Photobook exclusively to suit the tone of your images.</div>

                <div class="question">Q4.&nbsp;&nbsp;How much time to do you take to deliver the final photos/ videos/ album?</div>
                <div class="answer"><b>Answer:</b>&nbsp;&nbsp;It all depends on the final number of images and the final duration of your wedding film but, to give a rough idea, we generally take 45-60 days to deliver the entire set of products. Although, we provide a set of 20-30 edited images after a couple of weeks of the wedding day.</div>

                <div class="question">Q5.&nbsp;&nbsp;How can we get in touch with you?</div>
                <div class="answer"><b>Answer:</b>&nbsp;&nbsp;You can mail us at <a href="mailto:vowsnphereys@gmail.com">vowsnphereys@gmail.com</a> or <a href="mailto:litmassmedia@gmail.com">litmassmedia@gmail.com</a> or you can call us at <a href="tel:9650659479">9650659479</a> or <a href="tel:9637307615">9637307615</a>.</div>

                <div class="question">Q6.&nbsp;&nbsp;What kind of packages do you provide?</div>
                <div class="answer"><b>Answer:</b>&nbsp;&nbsp;We believe that every project is different and accordingly have their individual needs, but we have a few standard packages which we customize in accordance with the needs and budget of the client.</div>

                <div class="question">Q7.&nbsp;&nbsp;Do you provide candid and traditional photography/videography services as well?</div>
                <div class="answer"><b>Answer:</b>&nbsp;&nbsp;Yes, we do.</div>

                <div class="question">Q8.&nbsp;&nbsp;What kind of equipment do you use?</div>
                <div class="answer"><b>Answer:</b>&nbsp;&nbsp;We love gadgets! We have a variety of high end still photography and video cameras along with a variety of lenses, Canon 5D Mk-IV, Sony A7 M-III, Sigma 35mm f1.4, Sony 24-70 f2.8 G master etc are some of them. Apart from these, we have a drone as well for the clients who need an aerial perspective. Also, we have various other accessories like electronic gimbal, Elinchrome strobes etc.</div>

                <div class="question">Q9.&nbsp;&nbsp;Do you provide props for pre-wedding shoots?</div>
                <div class="answer"><b>Answer:</b>&nbsp;&nbsp;We have a standard set of props, if anything specific is required other than those then we can surely arrange them.</div>

                <div class="question">Q10.&nbsp;&nbsp;What is the structure and mode of your payment?</div>
                <div class="answer"><b>Answer:</b>&nbsp;&nbsp;We take 50% payment in advance,  the client can pay us using: NEFT, RTGS, Google pay etc.</div>

                <div class="question">Q11.&nbsp;&nbsp;Do you provide the RAW images?</div>
                <div class="answer"><b>Answer:</b>&nbsp;&nbsp;We generally don’t but we are open to discussions.</div>

                <div class="question">Q12.&nbsp;&nbsp;Do your charges include traveling & lodging charges as well?</div>
                <div class="answer"><b>Answer:</b>&nbsp;&nbsp;No, all our charges are exclusive of the food and lodging of the traveling team.</div>

            </div>
        </main>

        <?= $footer ?>
        <?= $script ?>
        <script>
            $(".nav-faqs").addClass("active");
        </script>

    </body>
</html>
