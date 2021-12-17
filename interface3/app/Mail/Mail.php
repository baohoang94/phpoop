<?php

namespace App\Mail;

use PHPMailer\PHPMailer\PHPMailer;
use App\Interfaces\Notification;

class Mail implements Notification {
    public function send()
    {
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
    }
}
