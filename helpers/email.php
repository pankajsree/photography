<?php

    $from = "help@litmassmedia.com";
    $to = "vowsnphereys@gmail.com";
    $subject = "Feedback - " . date("YmdHis");

    $name = $_POST['cus_name'];
    $email = $_POST['cus_email'];
    $tel = $_POST['cus_tel'];
    $co = $_POST['co_name'];
    $msg = $_POST['cus_message'];

    $message =  "<b>Name:</b> " . $name . "<br><b>From:</b> " . $email . "<br><b>Contact:</b> " . $tel . "<br><b>Company Name:</b> " . $co . "<br><br><b>Message:</b> " . $msg;
    // $message = wordwrap($message, 70);

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: 'Litmass Media' <help@litmassmedia.com>" . "\r\n";

    // echo $message;

    if(mail($to, $subject, $message, $headers)) {
        echo "Success";
    }
    else {
        echo "Failure";
    }

?>
