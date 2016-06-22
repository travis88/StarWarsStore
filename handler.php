<?php
require_once 'connect.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Спасибо за заказ!</title>
    <style>
        * {
            font-family: Ubuntu, sans-serif;
            color: white;
        }
    </style>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
//Получим данные из формы и запишем их в БД
$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];

$link->query("INSERT INTO order_info(name, email, phone) VALUES ('{$name}', '{$email}', '{$phone}')");


// Вывод email-ов, имеющихся в БД
//$result = $link->query("SELECT email FROM order_info");
//echo "<p>email, имеющиеся в базе данных: </p>";
//while ($row = mysqli_fetch_row($result)) {
//    echo "<p>email: {$row[0]}</p>";
//    if (strcmp($email, $row[$i]) == 0) {
//        echo "<p>Данный email {$row[0]} уже существует. Пожалуйста авторизуйтесь</p>";
//    }
//}
//$order = mysqli_query($lin, "SELECT id FROM order_info WHERE email = '{$email}'");
echo "<h3>Наш менеджер вам позвонит и уточнит оплату и доставку.</h3>";
//echo "<p>'{$order}'</p>";

?>
</body>
</html>
