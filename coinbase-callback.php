<?php
    require 'PHP Mailer/PHPMailerAutoload.php';
    header('Content-type: application/json'); 

    $mail = new PHPMailer();
    $ok = false;

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $data = file_get_contents("php://input");
        $data = json_decode($data);

        $message .= "Hello,\n Thank you for purchasing a mining guide from Primecoin. \n You'll find your guide attached to this email.\r\n";

        $order   = array("\r\n", "\n", "\r");
        $replace = '<br />';
        $html_messasge = str_replace($order, $replace, $message);

        $mail->From = 'guides@primecoin.io';
        $mail->FromName = 'Primecoin Guides';
        $mail->addAddress($data->customer->email);
        $mail->Subject = 'Primecoin Guide Purchase Delivery';
        $mail->isHTML(true);
        $mail->Body = $html_messasge;
        $mail->AltBody = $message;

        $mail->addAttachment('guides/' . $data->order->custom . '.pdf');

        if($mail->send())
            $ok = true;
        else 
            $ok = false;
    }
    else {
        $ok = false;
    }
    echo $ok ? 'success' : $mail->ErrorInfo;
?>