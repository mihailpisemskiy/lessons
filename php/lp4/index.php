<?php

$testArr = [24, 42, 532, 265, 23, 456, 6, 4, 31, 2];

$min = $testArr[0];
$max = $testArr[0];

foreach($testArr as $number) {

    if($min > $number){
        $min = $number;
    }

    if($max < $number){
        $max = $number;
    }

}

var_dump($min);
var_dump($max);

?>