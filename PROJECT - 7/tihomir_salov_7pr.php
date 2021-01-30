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

foreach($info as $call) {
    $call = explode("/", $call);

    foreach($call as $el) {
      // print_r($el . "<br>");
        
        // proverka dali tozi element sushtestvuva
        if (!array_key_exists($el, $result)) {
            array_push($result, $result["$el"] = 1);
            var_dump($result);  
            echo "<br>";
        }

        $type = substr($el, 0, strlen($el) - 1);
        $index = substr($el, -1);
       // echo "<p></p>" . $type . "<p></p>";
       // echo $index . "<p></p><br>";
    }
}