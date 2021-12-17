<?php

namespace App\Mail;

use PHPMailer\PHPMailer\PHPMailer;

class Mail {
    public function sendMail()
    {
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
    }
}