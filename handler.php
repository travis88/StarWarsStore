<?php
require_once 'connect.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Данные</title>
    <style>
        * {
            font-family: Ubuntu, sans-serif;
        }
    </style>
</head>
<body>
<?php

$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];

$link->query("INSERT INTO order_info(name, email, phone) VALUES ('{$name}', '{$email}', '{$phone}')");
$isDoubled = false;
$result = $link->query("SELECT email FROM order_info");
echo "<p>email, имеющиеся в базе данных: </p><ul>";
while ($row = mysqli_fetch_row($result)) {
    echo "<li>email: {$row[0]}</li>";
    if (strcmp($email, $row[0]) == 0 and $isDoubled) {
        echo "<p>Данный email {$row[0]} уже существует. Пожалуйста авторизуйтесь</p>";
    }
    $isDoubled = true;
}

?>
</body>
</html>
