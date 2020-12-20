<?php 
echo "<table border=1>";
for($i = 1; $i < 11; $i++) {
    echo "<tr>";
    for ($a = 1; $a <= $i; $a++) {
        $sum = $a * $i;
        echo "<td>$i * $a = $sum </td>";
            if ($a === $i && $i < 10) {
                $col = 10 - $i;
                echo "<td colspan=$col></td>";
            }
    }
    echo "</tr>";
}
echo "</table>";
?>