<?php

// require_once 'autoload.php';

use App\BaseModel;
use App\DemoStatic\DemoStatic;
use App\Product;

require_once '../vendor/autoload.php';
require_once __DIR__ . '/../config/Constant.php';
$product = new Product;
$homeController = new App\Http\Controllers\HomeController($product);
echo $homeController->index();
// echo '<br>';

