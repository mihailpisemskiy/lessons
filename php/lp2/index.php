<?php


function searchCountNumInNum($inputNumber, $searchNumber)
{
    $count = 0;
    $inputNumber = strval($inputNumber);

    for ($i = 0; $i < strlen($inputNumber); $i++) {
        if ($inputNumber[$i] == $searchNumber) {
            $count++;
        }
    }
    
    return $count;
}



$num = 442158755745; //введенное число
$searchNum = 5; //ищем число

var_dump(searchCountNumInNum($num, $searchNum));
