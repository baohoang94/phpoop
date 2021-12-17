<?php

namespace App;

class Product extends BaseModel {
    public function getListProduct()
    {
        return 'list all product';
    }
    public function createProduct()
    {
        return '<h2>Create Basemodel extends class ' . $this->create() . '</h2>';
    }
}
