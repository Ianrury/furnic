<?php


// File: App/Email.php
namespace Importa\Furnic\PHP\FFI\App;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../../vendor/phpmailer/phpmailer/src/Exception.php';
require_once __DIR__ . '/../../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/../../vendor/phpmailer/phpmailer/src/SMTP.php';

class Email
{
    public static function send($to, $subject, $body): bool
    {
        $mail = new PHPMailer(true);
        try {
            // SMTP config
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'importafurnic@gmail.com'; // Email kamu
            $mail->Password = 'ajxk uakq kyqq xhnr';               // Password Gmail atau App Password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Email content
            $mail->setFrom('importafurnic@gmail.com', 'Importa Furnic');
            $mail->addAddress($to);
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->isHTML(true); // supaya HTML dirender di email
            $mail->SMTPDebug = 2;
            $mail->Debugoutput = 'error_log';

            $mail->send();
            return true;
        } catch (Exception $e) {
            error_log("Mailer Error: " . $mail->ErrorInfo);
            return false;
        }
    }
}


