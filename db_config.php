<?php
$host = 'localhost';
$user = 'quickpost';
$dbname = 'quickpost';

// 接続
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die('データベース接続失敗: ' . $conn->connect_error);
}
$conn->set_charset("utf8mb4");
?>

