<?php

class Footballers {
    public $name;
    public $number;
    function __construct($a, $b) {
        $this-> name = $a;
        $this-> number = $b;
    }
}

$players = [["Ivo Ivanov", 8], ["Bai Tishe", 3], ["Kantar4o", 5]];

foreach ($players as $player) {
    $a = $player[0];
    $b = $player[1];
    $igra4 = new Footballers($a, $b);
    //print_r($igra4);
}
print_r($igra4);
?>