<?php 

$arr = [2, 8, 8, 32, 4, 0, 453, 34];
$biggestNum = $arr[0];

for($i = 0; $i < count($arr); $i++ ) {
    if($arr[$i] < $biggestNum && $arr[$i] > 0) {
        $biggestNum = $arr[$i];
    }
}

echo $biggestNum;
?>