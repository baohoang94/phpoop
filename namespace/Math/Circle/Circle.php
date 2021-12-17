<?php

namespace Math\Circle;

use Math\Constant; // cách 2
// use tên đầy đủ của namespace / tên class
// use Math\Constant as Constant1; // cách 2.1
require_once __DIR__ .  '/../Constant.php';
class Circle
{
    public function getAreaCircle($radius)
    {
        return Constant::PI * $radius * $radius; // cách 2
        // return Constant1::PI * $radius * $radius; // cách 2.1
        // return \Math\Constant::PI * $radius * $radius; // để thoát khỏi namespace hiện tại (gọi lớp Constant ở namespace Math trong namespace Math\Circle) phải thêm dấu gạch / và tên namespace của nó ở trước tên class (trong global namespace không cần dấu \ đằng trước nhưng trong 1 namespace phải cần) // cách 1

    }
}
// để thoát khỏi namespace hiện tại (gọi lớp Constant ở namespace Math trong namespace Math\Circle)
// cách 1: phải thêm dấu gạch / và tên namespace của nó ở trước tên class
// cách 2: sử dụng từ khóa use
