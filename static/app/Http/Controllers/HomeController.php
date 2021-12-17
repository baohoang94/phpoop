<?php

namespace App\Http\Controllers;

use App\Databases\DB;
use App\Product;
use App\Traits\Logger;
use App\Traits\UploadImage; // cú pháp khai báo để dử dụng trait trong 1 file khác
use App\User;

class HomeController
{
    use UploadImage, Logger; // cú pháp khai báo để dử dụng nhiều hàm của nhiều trait trong 1 controller
    private $product;
    function __construct(Product $product)
    {
        $this->product = $product;
    }
    public function index()
    {
        $databaseConnect = DB::getInstance();
        $sth = $databaseConnect->prepare("SELECT * FROM categories");
        $sth->execute();

        /* Fetch all of the remaining rows in the result set */
        print("Fetch all of the remaining rows in the result set:\n");
        $result = $sth->fetchAll();
        echo '<pre>';
        print_r($result);
        // $user = new User;
        // $users = $user->getListUser();

        // $products = $this->product->getListProduct();

        // return $products;

        require_once ROOT_PATH . '/resources/views/home.php';
    }
    // public function uploadImages()
    // {
    //     return 'call uploadImages from HomeController';
    // }
}
