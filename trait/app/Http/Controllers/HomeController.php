<?php

namespace App\Http\Controllers;

use App\Product;
use App\Traits\Logger;
use App\Traits\UploadImage; // cú pháp khai báo để dử dụng trait trong 1 file khác
use App\User;

class HomeController {
    use UploadImage, Logger; // cú pháp khai báo để dử dụng nhiều hàm của nhiều trait trong 1 controller
    private $product;
    function __construct(Product $product)
    {
        $this->product = $product;
    }
    public function index()
    {
        // $user = new User;
        // $users = $user->getListUser();

        $products = $this->product->getListProduct();

        return $products;
    }
    // public function uploadImages()
    // {
    //     return 'call uploadImages from HomeController';
    // }
}
