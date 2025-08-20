<?php
require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
class Mailer
{
    protected $mail;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);

        $this->mail->isSMTP();
        $this->mail->Host = 'localhost';
        $this->mail->SMTPAuth = true;
        $this->mail->Username = 'admin@bcc.bi';
        $this->mail->Password = '12345678';
        //$this->mail->SMTPSecure = 'tls';
        $this->mail->Port = 25;

        $this->mail->setFrom('admin@bcc.bi', 'AHDLC');
        $this->mail->isHTML(true);
    }

    public function send($to, $subject, $viewPath, $data = [])
    {
        try {

            extract($data); // rend $name, $token, etc. disponibles
            require $viewPath.'.php';
            $body = ob_get_clean();

            $this->mail->clearAddresses();
            $this->mail->addAddress($to);
            $this->mail->Subject = $subject;
            $this->mail->Body = $body;
            $this->mail->AltBody = $altBody;
            $this->mail->CharSet = 'UTF-8';


            return $this->mail->send();
            
        } catch (Exception $e) {
            error_log("Mail error: " . $this->mail->ErrorInfo);
            return false;
        }
    }
}
