<?php

// require_once 'autoload.php';
require_once '../vendor/autoload.php';

$homeController = new App\Http\Controllers\HomeController;
echo $homeController->index();
