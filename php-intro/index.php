<?php
echo "<hr><p>Задача 1</p><hr>";
echo "<p> <font color=blue>I've gone to the store.</font> </p>";
echo "<p> <font color=red>“The harder’s the life, the sweeter’s the song.”</font> </p>";
echo "<hr><p>Задача 2</p><hr>";
$roleOne = "student";
$roleTwo = "assistant";
$roleThree = "lecturer";
$courseOne = 1;
$courseTwo = 2;
$courseThree = 3;
echo "Hi, username! You`ve been approved to take part in the course " . $courseTwo . " as a " . $roleOne . ". The course $courseTwo will
last for two days.";
echo "<br>";
echo "Hi, username! You`ve been approved to take part in the course " . $courseThree . " as a " . $roleThree . ". The course $courseThree will
last for two days.";
echo "<br>";
echo "Hi, username! You`ve been approved to take part in the course " . $courseOne . " as a " . $roleTwo . ". The course $courseOne will
last for two days.";
echo "<hr><p>Задача 3</p><hr>";
//Rectangle
$a = 10;    
$b = 20;
$result = $a * $b;
echo "Rectangle area: $result";

echo "<br>";
//Square
$a = 15;
$result = $a * $a;
echo "Square area: $result";


echo "<br>";
//Triangle
$a = 10;
$ha = 15;
$result = ($a * $ha) / 2;
echo "Triangle area: $result";


echo "<br>";
//Circle
$r = 15;
$result = 3.14 * $r * $r;
echo "Circle area: $result";
echo "<hr>"
?>