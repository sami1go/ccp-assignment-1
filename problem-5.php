<?php

$input = intval(readline());

$sum = 0;

while($input > 0 ){
    $remainder =  $input % 10;
    $sum = $sum + $remainder;
    $input = intdiv($input , 10) ;
}

echo $sum;