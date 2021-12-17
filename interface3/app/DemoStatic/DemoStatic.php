<?php

namespace App\DemoStatic;

class DemoStatic {
    public $count = 0;
    public static $countStatic = 0;
    public function __construct()
    {
        $this->count++;
        self::$countStatic++;
    }
    public function getCountStatic()
    {
        return self::$countStatic;
    }
}
