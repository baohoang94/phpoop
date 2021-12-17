<?php

// require_once 'autoload.php';

use App\Product;

require_once '../vendor/autoload.php';
$product = new Product;
$homeController = new App\Http\Controllers\HomeController($product);
echo $homeController->index();
