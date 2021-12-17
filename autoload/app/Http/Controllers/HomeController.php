<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;

class HomeController {
    public function index()
    {
        $user = new User;
        $users = $user->getListUser();

        $product = new Product;
        $products = $product->getListProduct();

        return $products;
    }
}
