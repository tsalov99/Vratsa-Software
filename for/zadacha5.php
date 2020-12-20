<?php 
echo "<table border=1>";
for($i = 1; $i < 11; $i++) {
    echo "<tr>";
    for ($a = 10; $a > 0; $a--) {
        echo "<td colspan=$a>$i "." * $a</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>