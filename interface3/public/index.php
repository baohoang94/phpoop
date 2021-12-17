<?php

// require_once 'autoload.php';

use App\BaseModel;
use App\DemoStatic\DemoStatic;
use App\Mail\Mail;
use App\Mail\Slack;
use App\Product;

require_once '../vendor/autoload.php';
require_once __DIR__ . '/../config/Constant.php';
$product = new Product;
$slack = new Slack;
$homeController = new App\Http\Controllers\HomeController($product, $slack);
echo $homeController->index();
// echo '<br>';

