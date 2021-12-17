<?php

namespace App\Databases;

class DB {
    protected static $instance;
    public static function getInstance() {
        if (empty(self::$instance)) {
            self::$instance = new \PDO('mysql:host=localhost;dbname=shopping', 'root', '');
        }
        return self::$instance;
    }
}