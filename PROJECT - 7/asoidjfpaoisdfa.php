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
$projects = ["pcounter" => 0, "subprojects" => ["subproject" => ["scounter" => 0, "methods" => ["method" => 0]]]];
$subprojects = ["scounter" => 0, "methods" => []];
$methods = ["method" => 0 ];
$result = [];
$info = implode($_POST);
//var_dump($result);
echo "<p></p>";
$info = str_replace(" ", "", $info);
$info = str_replace("]", "", $info);
$info = str_replace("[", "", $info);
$info = str_replace('"', "", $info);
$info = explode(",", $info);

foreach($info as $calls) {
    $calls = explode("/", $calls);
    $calls = array_slice($calls, 1, count($calls) - 1);

    if(empty($result)) {
        $result["$calls[0]"] = ["pcounter" => 1, "subprojects" => ["$calls[1]" => ["scounter" => 1, "methods" => ["$calls[2]" => 1]]]];
        //var_dump($result);
    } else {
        if (array_key_exists($calls[0], $result)) {
            $result["$calls[0]"]["pcounter"] += 1;

            if (array_key_exists($calls[1], $result["$calls[0]"]["subprojects"])) {
               $result["$calls[0]"]["subprojects"]["$calls[1]"]["scounter"] += 1;

               if (array_key_exists($calls[2], $result["$calls[0]"]["subprojects"]["$calls[1]"]["methods"])) {
                   $result["$calls[0]"]["subprojects"]["$calls[1]"]["methods"]["$calls[2]"] += 1;
               } else {
                   $result["$calls[0]"]["subprojects"]["$calls[1]"]["methods"]["$calls[2]"] = 1;
               }
            } else {
                $result["$calls[0]"]["subprojects"]["$calls[1]"] = ["scounter" => 1, "methods" => ["$calls[2]" => 1]];
            }
           // $result["$calls[0]"]["subprojects"] += ["$calls[1]"] = ["scounter" => 1, "methods" => ["$calls[2]" => 1]]
        } else {
            $result += ["$calls[0]" => ["pcounter" => 1, "subprojects" => ["$calls[1]" => ["scounter" => 1, "methods" => ["$calls[2]" => 1]]]]];
            //var_dump($result);
            //echo "<br>";
        }
    }
    //var_dump($calls);
}
var_dump($result);