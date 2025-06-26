<?php require 'db_config.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>QuickPost</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>QuickPost</h1>
    <form action="post.php" method="post">
        <input type="text" name="name" placeholder="名前（省略可）">
        <input type="text" name="message" placeholder="投稿内容を入力" required>
        <button type="submit">投稿</button>
    </form>

    <div class="posts">
        <h2>投稿一覧</h2>
        <ul>
            <?php
                $sql = "SELECT name, message, created_at FROM posts ORDER BY created_at DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $name = htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8');
                        $message = htmlspecialchars($row['message'], ENT_QUOTES, 'UTF-8');
                        $time = $row['created_at'];
                        echo "<li><strong>{$name}</strong> ({$time})<br>{$message}</li>";
                    }
                } else {
                    echo '<li>まだ投稿はありません。</li>';
                }
                $conn->close();
            ?>
        </ul>
    </div>
</body>
</html>

