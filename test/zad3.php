<?php

$rows = 10;
$columns = 10;
$std = 0;
$step = 0;
echo "<table border=1 width= 500px heigth= 500px>";

for($i = 1; $i <= $rows; $i++) {
    echo "<tr>";
    
        if ($i === 1) {
            for($j = 0; $j < $columns; $j++) {
            if($j === 0) {
                echo "<td> $i </td>";
                
            } else if ($j === 1) {
                $step = $i + 4;
            echo "<td>" . ($i + 4) . "</td>";
            } else {
                $step += 4;
                echo "<td>" . $step;
            }

            }
            
        } else {
            for($j = 0; $j < $columns; $j++) {
            if($j === 0) { 
                echo "<td>" . $i . "</td>";
                $std = (($i - 1) * 10) + 4;
            } else {
            echo "<td>" . ($std + $i) . "</td>";
            $step = (($i - 1) * 10) + 4;
            $std = $std + $step;
            
            }
        }
        
    }

    echo "</tr>";
    
}

echo "</table>";