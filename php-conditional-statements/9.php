<?php 
$num = 35;
$check= "";

if($num % 3 === 0) {
    $check = $check . '3 ';
}

if($num % 5 === 0) {
    $check = $check . '5 ';
}

if ($num % 7 === 0) {
    $check = $check . '7 ';
}

if($check === "") {
    echo 'not a valid entry';
}else {
    echo $check;
}
  $i = 0;
    switch ($i) {
        case 0:
            echo "i equals 0";
            break;
        case 1:
            echo "i equals 1";
            break;
        case 2:
            echo "i equals 2";
            break;
    }