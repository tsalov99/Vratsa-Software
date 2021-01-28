<?php

$age = 12;
$menuOne = ["coca-cola", "fanta", "sprite", "вода", "натурален сок"];
$menuTwo = ["уиски", "водка", "рИкия", "вино", "джин"];

if ($age <= 18) {
    for ($i=0; $i < count($menuOne); $i++) {
        echo "<ul><li>" . $menuOne[$i] . "</ul></li>";
    }
    echo "<p style=color:red>Закупуването и консумацията на алкохолни напитки не е позволена на лица, ненавършили 18 години!</p>";
} else if ($age > 18) {
    for ($j=0; $j < count($menuTwo); $j++) {
        echo "<ul><li>" . $menuTwo[$j] . "</ul></li>";  
    }
}