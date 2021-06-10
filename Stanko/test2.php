<!DOCTYPE html>
<html>
    <head>
    <title>Stanimir Kirilov</title>
    </head>
    
    <body>
    <form action="" method="POST">
    <input type="text" name="file1" placeholder="file 1...">
    <input type="text" name="file2" placeholder="file 2...">
    <input type="submit">
    </form>

    <table id="one" border=1>
    
    </table>
    </body>
</html>


<?php
$fileOneName = $_POST["file1"] . ".txt";
if (isset($fileOneName) === false) {
    echo "Please select existing file";
}
$fileTwoName = $_POST["file2"] . ".txt";
$firstFile = fopen($fileOneName, 'r');
$secondFile = fopen($fileTwoName, "w+");
$content1 = file($fileOneName);

// first table from first file

echo "<table border=1>";
echo "<th>File 1</th>";
            for($i=0; $i < count($content1); $i++) {
            echo "<tr>";
                for ($j=0; $j < 5 && $i < count($content1); $j++) {
                echo "<td>" . $content1[$i] . "</td>";
                $i += 1;
            }
            echo "</tr>";
        }
        echo "</table>";

$content2 = $content1;
sort($content2);

// second table from second file
echo "<table border=1>";
echo "<th>File 2</th>";
            for ($k=0; $k < count($content2); $k++) {
            echo "<tr>";
                for ($n=0; $n < 5 && $k < count($content2); $n++) {
                echo "<td>" . $content2[$k] . "</td>";
                $k += 1;
            }
            echo "</tr>";
        }
        echo "</table>";

$newTable = implode("", $content2);
fwrite($secondFile, $newTable);
?>