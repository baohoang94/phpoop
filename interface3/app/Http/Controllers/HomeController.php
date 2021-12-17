<?php

namespace App\Http\Controllers;

use App\Databases\DB;
use App\Interfaces\Notification;
use App\Mail\Mail;
use App\Product;
use App\Traits\Logger;
use App\Traits\UploadImage; // cú pháp khai báo để dử dụng trait trong 1 file khác
use App\User;

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class HomeController
{
    use UploadImage, Logger; // cú pháp khai báo để dử dụng nhiều hàm của nhiều trait trong 1 controller
    private $product;
    private $notification;
    function __construct(Product $product, Notification $notification)
    {
        $this->product = $product;
        $this->notification = $notification;
    }
    public function index()
    {
        $this->notification->send();
        echo 'send mail success';
    }
    public function login()
    {
        $this->notification->send();
        echo 'send mail success';
    }
}
