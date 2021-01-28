<?php 

$laptops = [["Производител" => "HP", "Модел" => "XX11", "Процесор" => "Intel", "RAM" => 8 ,"HD" => 1000, "SSD" => 240, "P" => 1500],
            ["Производител" => "Asus", "Модел" => "FF12", "Процесор" => "AMD", "RAM" => 8 ,"HD" => 500, "SSD" => 120, "P" => 1300],
            ["Производител" => "Lenovo", "Модел" => "GG13", "Процесор" => "AMD", "RAM" => 12 ,"HD" => 1000, "SSD" => 500, "P" => 1700],
            ["Производител" => "Apple", "Модел" => "TT14", "Процесор" => "Apple chip", "RAM" => 8 ,"HD" => 500, "SSD" => 240, "P" => 1650],
            ["Производител" => "Acer", "Модел" => "KK15", "Процесор" => "Intel", "RAM" => 12 ,"HD" => 500, "SSD" => 500, "P" => 1450]];
$count = 0;
$ipk;
//$ipk = ((HD + SSD*3)+RAM)/P;

            echo "<table border=1>";
            echo "<th width=150px>Производител</th>";
            echo "<th width=150px>Модел</th>";
            echo "<th width=150px>Процесор</th>";
            echo "<th width=150px>RAM</th>";
            echo "<th width=150px>HD</th>";
            echo "<th width=150px>SSD</th>";
            echo "<th width=150px>P</th>";
            echo "<th width=150px>ИПК</th>";

            foreach ($laptops as $row) {

                echo "<tr><td>" . $row["Производител"];
                echo "<td>" . $row["Модел"];
                echo "<td>" . $row["Процесор"];
                echo "<td>" . $row["RAM"];
                echo "<td>" . $row["HD"];
                echo "<td>" . $row["SSD"];
                echo "<td>" . $row["P"];
                $ipk = (($row["HD"] + ($row["SSD"] * 3)) + $row["RAM"]) / $row["P"];
                echo "<td>" . $ipk;
                }

            echo "</table>";