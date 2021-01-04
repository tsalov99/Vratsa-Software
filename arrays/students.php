<?php
$students = [["name" => "koko kokov hristov", "marks" => [4, 6, 2, 4]],
["name" => "joro jorov emanuilov", "marks" => [6, 6, 5, 6]],
["name" => "misho mishov ivanov", "marks" => [3, 2, 5, 5]],
["name" => "gergana gergova stoqnova", "marks" => [5, 4, 6, 6]],
["name" => "daniela danailova danova", "marks" => [2, 6, 6, 6]]];

$totalMarks = 0;
$averageMark = 0;
$allAverageMarks = 0;

echo "<table border=1 width=1000px height=300px>";
echo "<th>Ime</th><th colspan=4>Ocenki</th><th>Sredna ocenka</th>";

foreach ($students as $row) {
    echo "<tr>";
    echo "<td>";
    echo $row["name"];
    echo "</td>";
    $averageMark = 0;
    $totalMarks = 0;
        
    foreach($row["marks"] as $mark) {
            echo "<td>";
            echo $mark;
            echo "</td>";
            $averageMark += $mark;
            $totalMarks = count($row["marks"]);
        }
        $allAverageMarks += $averageMark / $totalMarks;
        echo "<td>";
        echo $averageMark / $totalMarks;
    echo "</tr>";
}
echo "<tr>";
echo "<td colspan=5>Общ среден успех:</td><td>$allAverageMarks</td>";
echo "</tr>";
echo "</table>";