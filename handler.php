<?php
require_once 'connect.php';
?>
<!DOCTYPE HTML>
    <html>
<head>
    <meta charset="utf-8">
    <title>Данные</title>
    <style>
        * { font-family: Ubuntu, sans-serif; }
    </style>
</head>
<body>
<?php
//$name = trim(mysqli_real_escape_string($link, $_POST['name']));
//$email = trim(mysqli_real_escape_string($link, $_POST['email']));
//$phone = trim(mysqli_real_escape_string($link, $_POST['phone']));

$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
echo $name;
echo $email;
echo $phone;


$link->query("INSERT INTO order_info(name, email, phone) VALUES ('{$name}', '{$email}', '{$phone}')");

if ($link->affected_rows == 1) {
    echo '<p>Данные добавлены в базу</p>';
}
?>
</body>
</html>
