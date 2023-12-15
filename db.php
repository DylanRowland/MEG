<?php

  // Server: sql3.freemysqlhosting.net
  // Name: sql3646476
  // Username: sql3646476
  // Password: kVU6cWRZ9P
  // Port number: 3306

$host = 'sql3.freemysqlhosting.net';
$db   = 'sql3646476';
$user = 'sql3646476';
$pass = 'kVU6cWRZ9P';
$charset = 'utf8mb4'; // This is a good charset to use for MySQL

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
