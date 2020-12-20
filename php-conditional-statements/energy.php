<?php 
$kw = 302;
$sum = 0;

if($kw > 50) {
    $sum = $sum + (50 * 0.10);
    $kw = $kw - 50;
    if($kw >= 100) {
        $sum = $sum + (100 * 0.15);
        $kw = $kw - 100;
        if($kw >= 100) {
            $sum = $sum + (100 * 0.25);
            $kw = $kw - 100;
            $sum = $sum + ($kw * 0.35);
        }
        else{
            $sum = $sum + ($kw * 0.25);
        }
        echo $sum * 1.2;
    }
    else{
        $sum = $sum + ($kw * 0.15);
        echo $sum * 1.2;
    }
}else{
    echo ($kw * 0.10) * 1.2;
}
?>