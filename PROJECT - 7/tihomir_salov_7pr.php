<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form action="" method="POST">
<input type="text" name="info">
<input type="submit">
</form>
</body>

<?php
$result = [];
$info = implode($_POST);
//var_dump($result);
echo "<p></p>";
$info = str_replace(" ", "", $info);
$info = str_replace("]", "", $info);
$info = str_replace("[", "", $info);
$info = str_replace('"', "", $info);
$info = explode(",", $info);
//print_r($info);
foreach($info as $calls) {
    $calls = explode("/", $calls);
    $calls = array_slice($calls, 1, count($calls) - 1);
    print_r($calls);
    echo "<br>";

    if(!in_array($calls[0], $result)) {
        array_push($result, $calls[0]);
    } else {
        //da dobavq broqch za dublirashtite se zaqvki

        if(!in_array($calls[1], $result)) {
            array_push($result[$calls[0]], $calls[1]);
        } else {

        }
    }
}