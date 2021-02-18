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

    if(empty($result)) {
        $result = ["$calls[0]" => 1,["$calls[1]" => 1,["$calls[2]" => 1]]];
        var_dump($result);
        echo "<br>";

        } else {
            if (!array_key_exists($calls[0], $result)) {
                array_push($result, ["$calls[0]"]);
                $result["$calls[0]"] = 1;

                if (!array_key_exists($calls[1], $result)) {
                    $result["$calls[1]"] = 1;

                    if(!array_key_exists($calls[2], $result)) {
                        $result["$calls[2]"] = 1;

                    } else {
                        $result["$calls[2]"] += 1;
                    }
                } else {
                    $result["$calls[1]"] += 1;
                }
                //print_r($result["projects"]);
                //echo "<br>";
            } else {
                $result["$calls[0]"] += 1;
            }
        }
    //print_r($result);
    //echo "<br>";
}
var_dump($result);