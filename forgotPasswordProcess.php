<?php
require "connection.php";

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_GET["e"])) {

    $email = $_GET["e"];
    $rs = Database::search("SELECT * FROM users WHERE email = '" . $email . "'");
    $n = $rs->num_rows;

    if ($n == 1) {

        $code = uniqid();
        Database::iud("UPDATE users SET `verification_code` = '" . $code . "' WHERE `email` = '" . $email . "'");

        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ilbandara141@gmail.com';
        $mail->Password = 'kuqgtwjtrvslyaid';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('ilbandara141@gmail.com', 'Reset Password');
        $mail->addReplyTo('ilbandara141@gmail.com', 'Reset Password');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'mkshop Forget Password Verification Code';
        $bodyContent = '<h1 style="color:green">Your Verification Code is ' . $code . '</h1>';
        // $bodyContent .= '******************';
        $mail->Body    = $bodyContent;

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'success';
            Database::iud("UPDATE users SET `verification_code` = '" . $code . "' WHERE `email` = '" . $email . "'");
        }
    } else {
        echo ("Invaild Email Address");
    }
} else {
    echo ("please enter your email address first");
}
