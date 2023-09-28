<?php
require "PHPMailer/PHPMailerAutoload.php";
/** 
 * Cette fonction créer un token unique
 * @param int $length
 * @return string
 */

function GenerateToken($length) {
    $token = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
    return substr(str_shuffle(str_repeat($token, $length)), 0, $length);
}

function SendEmail($id, $token, $email, $msg, $object, $name) {
    function smtpmailer($to, $from, $from_name, $subject, $body) {
        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->SMTPAuth = true;

        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp-mail.outlook.com';
        
        $mail->Port = 587;
        $mail->Username = $from;
        $mail->Password = 'DWWMauboue';

        $mail->isHTML();
        $mail->From = $from;
        $mail->FromName = $from_name;
        $mail->Sender = $from;
        $mail->addReplyTo($from, $from_name);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->addAddress($to);

        if (!$mail->Send()) {
            echo "Le mail ne c'est pas envoyé ressayez plus tard";
        } else {
            echo "le mail c'est envoyé avec succés";
        }
    }
    $msg = "Lien pour réinitialiser votre mot de passe : http://localhost/cours/Sigthee.github.io/correction/connexion_C/reset.php?id=$id&token=$token";
    smtpmailer($email, 'dwwm.auboue@hotmail.com', $name, $object, $msg);
}