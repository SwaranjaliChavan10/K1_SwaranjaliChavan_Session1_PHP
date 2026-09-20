<?php
function calArea($length, $width)
{
    return $length * $width;
}


$length = 10;
$width = 5;

$area = calArea($length, $width);


echo "Length = " . $length ;
echo "Width = " . $width ;
echo "Area of Rectangle = " . $area;

?>