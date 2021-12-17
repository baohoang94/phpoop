<?php

namespace App;

class BaseModel {
    private function create()
    {
        return 'create BaseModel';
    }
    public function createFromBaseModel()
    {
        return '<h2>Create Basemodel inside ' . $this->create() . '</h2>';
    }
}
