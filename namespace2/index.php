<?php
require 'Math/Circle/Circle.php';
// $circle = new Circle;
$circle = new Math\Circle\Circle; // gọi class có namespace trong global namespace (file index.php đang ở global namespace nên không cần dấu \ đằng trước Math\Circle\Circle)
echo $circle->getAreaCircle(10);
