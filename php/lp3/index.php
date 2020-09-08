<?php

$startNum = 20;
$endNum = 45;
$multiplicity = 5;

function sumNumber($startNum, $endNum, $multiplicity) {
    $sum = 0;

    if($endNum < $startNum){
        return false;
    }

    for ($i = $startNum; $i <= $endNum; $i++){
        if(fmod($i,$multiplicity)==0){
            $sum += $i;
        }
    }

    return $sum;
}

var_dump(sumNumber($startNum, $endNum, $multiplicity));
?>