
<?php
$host = 'localhost';
$dbname = 'rapsdb';
$user = 'root';
$pass = '';
$port = 3306;

$dsn = "mysql:host=".$host.";port=".$port.";dbname=".$dbname;
$options = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
}catch(PDOException $e) {
    echo 'Ошибка: Не подключено' . $e->getMessage();
}