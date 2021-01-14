<?php
$arr = array(1, 2, 3, 4);
foreach ($arr as &  $value) {
    $value = $value * 2;
}

echo var_dump($arr);

foreach ($arr as $key => $value) {
    // $arr[3] will be updated with each value from $arr...
    echo "{$key} => {$value} ";
    print_r($arr);
}

echo "</br>";
echo var_dump($arr);