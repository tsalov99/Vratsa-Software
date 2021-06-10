<!DOCTYPE html>
<html>
    <body>
        <form method="post">
            <input name="firstName" type="text" placeholder="Име">
            <input name="secondName" type="text" placeholder="Презиме">
            <input name="lastName"type="text" placeholder="Фамилия">
            <input type="submit">
        </form>
    </body>
</html>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "pass";
    $dbname = "football";
    $firstname = $_POST['firstName'];
    $secondname = $_POST['secondName'];
    $thirdname = $_POST['lastName'];
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die ("Има проблем с връзката. Моля опитайте отново");
    }
    var_dump($_POST);

    $sql = "SELECT player_id, playerFirstName FROM players";
    $result = $conn->query($sql);

    var_dump ($sql);
    ?>