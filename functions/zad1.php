<?php

$arr = [25, 3, 2, 22, 28];
$biggestNum = 0;
$index;

function find_num() {
    global $arr, $biggestNum, $index;

    for($i = 0; $i < count($arr); $i++) {
        $num = $arr[$i];
        
        if($num > $biggestNum) {
            $biggestNum = $num;
            $index = $i;
        }
    }

    if($index === 0 && array_sum($arr) / count($arr) === $num) {
        $index = "no such element";
    }
}

find_num();

echo $index;