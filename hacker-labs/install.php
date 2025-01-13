<?php
header('Content-Type: text/html; charset=utf-8');

$servername = "localhost";
$username = "root";
$password = "root";

$link = new mysqli($servername, $username, $password);
if ($link->connect_error) {
    die("连接失败: " . $link->connect_error);
}
$link->set_charset("utf8mb4");

// 创建 hacker 数据库
$create_db = "CREATE DATABASE IF NOT EXISTS hacker CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
if (!mysqli_query($link, $create_db)) {
    exit('创建数据库 hacker 失败');
}

// 选择数据库
mysqli_select_db($link, 'hacker');

// 创建 user 表，确保 id 是自增的，并指定了 InnoDB 引擎
$create_user = "
    CREATE TABLE IF NOT EXISTS `user` (
        `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
        `username` VARCHAR(20) NOT NULL,
        `password` VARCHAR(255) NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
";
if (!mysqli_query($link, $create_user)) {
    exit('创建 user 表失败');
}

// 清空 user 表
$delete_user = "DELETE FROM `user`";
if (!mysqli_query($link, $delete_user)) {
    echo $link->error;
    exit('清空 user 表失败');
}

// 插入默认数据，不指定 id 列，自动递增
$insert_user = "INSERT IGNORE INTO `user` (`username`, `password`) 
                VALUES ('young', 'young'), ('xiaomei', 'xiaomei'), ('admin', 'admin')";
if (!mysqli_query($link, $insert_user)) {
    echo $link->error;
    exit('插入 user 表数据失败');
}

// 创建 email 表，确保 id 是自增的，并指定了 InnoDB 引擎
$create_email = "
    CREATE TABLE IF NOT EXISTS `email` (
        `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
        `mail_number` VARCHAR(50) NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
";
if (!mysqli_query($link, $create_email)) {
    exit('创建 email 表失败');
}

// 清空 email 表
$delete_email = "DELETE FROM `email`";
if (!mysqli_query($link, $delete_email)) {
    echo $link->error;
    exit('清空 email 表失败');
}

// 插入默认数据
$insert_email = "INSERT IGNORE INTO `email` (`mail_number`) 
                 VALUES ('young@hacker.com'), ('xiaomei@hacker.com'), ('admin@hacker.com')";
if (!mysqli_query($link, $insert_email)) {
    echo $link->error;
    exit('插入 email 表数据失败');
}
echo "数据库和表创建成功！";

$link->close();
?>
