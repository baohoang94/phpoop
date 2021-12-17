<?php

// require_once 'autoload.php';

use App\BaseModel;
use App\DemoStatic\DemoStatic;
use App\Mail\Mail;
use App\Product;

require_once '../vendor/autoload.php';
require_once __DIR__ . '/../config/Constant.php';
$product = new Product;
$mail = new Mail;
$homeController = new App\Http\Controllers\HomeController($product, $mail);
echo $homeController->index();
// echo '<br>';

