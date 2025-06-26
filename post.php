<?php
require 'db_config.php';

$name = trim($_POST['name'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($message !== '') {
    if ($name === '') {
        $name = '匿名';
    }

    $stmt = $conn->prepare("INSERT INTO posts (name, message) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $message);
    $stmt->execute();
    $stmt->close();
}
$conn->close();

header('Location: index.php');
exit;

