# はじめに
こちらはサーバ構築研修で使用したデモ用の簡単な掲示板アプリケーションです。　　
アプリケーション構築の練習にお役立てください。

# 動作環境(推奨)
WEBサーバ: Apache（httpd）2.4.x  
データベース: MySQL 8.x  
言語: PHP 8.x（+ mysqli 拡張）  

# 構成例
/var/www/html/  
├── index.php  
├── post.php  
├── db_config.php  
└── style.css  

# インストール手順(Amazon Linux2023の場合)
```
sudo dnf -y install https://dev.mysql.com/get/mysql84-community-release-el9-1.noarch.rpm
sudo dnf -y install mysql mysql-community-client
sudo dnf -y install mysql-community-server
sudo yum install -y php php-mysqli httpd
sudo systemctl start httpd
sudo systemctl enable httpd
```