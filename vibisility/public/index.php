<?php

// require_once 'autoload.php';

use App\BaseModel;
use App\Product;

require_once '../vendor/autoload.php';
$product = new Product;
$homeController = new App\Http\Controllers\HomeController($product);
// echo $homeController->index();

$baseModel = new BaseModel;

// truy cập phương thức create từ bên ngoài class
// echo $baseModel->create();

// truy cập phương thức create từ bên trong class đó
echo $baseModel->createFromBaseModel();

// truy cập phương thức create từ lớp kế thừa
echo $product->createProduct();
