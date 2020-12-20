<?php 
echo "1. Сравняване на числа </br><p></p>";
$numOne = 4;
$numTwo = 10;

if($numOne >= $numTwo) {
    echo $numTwo . ", " . $numOne;
} elseif($numOne < $numTwo) {
    echo $numOne . ", " . $numTwo;
}    

echo "<hr>";
echo "2. Сравняване на числа </br><p></p>";

$numThree = rand();

echo "<hr>";
echo "3. Четно или нечетно</br><p></p>";

$firstNum = 0;
$secondNum = 9;
$result = $firstNum * $secondNum;

if($result % 2 === 0 && $result !== 0) {
    echo 'even';
}elseif($result % 2 !== 0 && $result !== 0) {
    echo 'odd';
}else {
    echo 'zero';
}

echo "<hr>";
echo "4. Положително или отрицателно</br><p></p>";

 //1
 $nOne = -9;
$nTwo = 9;
//2
$total = $nOne + $nTwo;
//3
if($total < 0) {
    echo 'Less than zero';
    //4
}elseif($total > 0) {
    echo 'Greater than zero';
    //5
}else {
    echo 'Zero';
}

echo "<hr>";
echo "5. Триъгълник</br><p></p>";

$angleOne = 178;
$angleTwo = 1;
$angleThree = 1;
$oneHundredEighty = $angleOne + $angleTwo + $angleThree;

if($oneHundredEighty === 180) {
    echo 'yes';
}else {
    echo 'nope';
}

echo "<hr>";
echo "6. Страни на триъгълник</br><p></p>";

$a = 58;
$b = 10;
$c = 36;

if($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo 'yes';
}else {
    echo 'no';
}

echo "<hr>";
echo "7. Възраст</br><p></p>";

$age = 10;

if ($age >= 0) {
    if($age < 25) {
        echo 'go to school';
    }elseif ($age < 69) {
        echo 'go to work';
    }else {
        echo 'you are retired';

    }

}else {
    echo 'first get born';
}
?>

