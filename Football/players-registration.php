<!DOCTYPE html>
<html>
    <body>
        <form method="post">
            <input name="names" type="text" placeholder="Name...">
            <input name="birthDate" type="number" placeholder="Birthdate...">
            <input name="height" type="number" placeholder="Height...">
            <input name="weight" type="number" placeholder="Weight...">
            <input type="submit">
        </form>
    </body>
</html>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "pass";
    $dbname = "football";
    $name = $_POST['names'];
    $age = $_POST['birthDate'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die ("Има проблем с връзката. Моля опитайте отново");
    }

    $sql = "INSERT INTO players (`playerName`, `Age`, `Height`, `Weight`) VALUES ('$name', $age, $height, $weight)";
    $result = $conn->query($sql);

    var_dump ($result);