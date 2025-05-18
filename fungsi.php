<?php

// function sum($a,$b,$c,$d,$e){
//     return $a + $b + $c +$d +$e;
// }

// $jangkung = [5, 5, 5, 5, 5];

// $result = sum(...$jangkung);//sum(1, 2, 3)
// echo $result;

//==============================================================================================================


function sum(...$input){
    $result = 10;
    foreach ($input as $value){
        $result = $result * $value;
    }
    return $result;
}

$value = [5, 5, 5, 5, 5];

$result = sum(...$value);//sum(1, 2, 3)
echo $result;