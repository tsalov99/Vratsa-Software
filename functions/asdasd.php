<?php
$rows = 4;
$cols = 6;
function createArr($rows, $cols){
    $arr = [];
    $number = 1;
    for ($i = 0; $i < $rows; $i++) {
        $arr[$i] = [];
        for ($j = 0; $j < $cols; $j++) {
            $arr[$i][$j] = $number;
            $number+=2;
        }
    }
    return $arr;
}
function printArr($arr){
    echo "<table border='1'>";
    $rows = count($arr);
    for ($m = 0; $m < $rows; $m++){
        echo "<tr>";
        $cols = count($arr[$m]);
        for ($k = 0; $k < $cols; $k++){
            echo "<td>";
            echo $arr[$m][$k];
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
$arr = createArr($rows, $cols);
printArr($arr);
