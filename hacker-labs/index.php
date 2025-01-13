<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #2c3e50;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #ecf0f1;
        }

        .container {
            width: 80%;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-wrap: wrap;
        }

        .button-container {
            flex: 1;
            padding: 20px;
            background-color: #34495e;
            color: #ecf0f1;
            border-radius: 10px 0 0 10px;
            text-align: center;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .buttons {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="submit"] {
            padding: 15px;
            margin: 10px 0;
            font-size: 18px;
            width: 100%;
            box-sizing: border-box;
            cursor: pointer;
            background-color: #1abc9c;
            color: #fff;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.1s ease;
        }

        input[type="submit"]:hover {
            background-color: #16a085;
            transform: translateY(-3px);
        }

        input[type="submit"]:active {
            transform: translateY(2px);
        }

        .info-container {
            flex: 2;
            padding: 20px;
            background-color: #34495e;
            border-radius: 0 10px 10px 0;
        }

        .info-container h3 {
            color: #f39c12;
            font-size: 22px;
            margin-bottom: 10px;
        }

        .info-container p {
            font-size: 16px;
            line-height: 1.6;
        }

        .info-container em {
            color: #e67e22;
            font-style: normal;
        }
    </style>
    <title>hacker-labs</title>
</head>
<body>
<div class="container">
    <div class="button-container">
        <h1>欢迎来到</h1>
        <h1>hacker-labs</h1>
        <div class="buttons">
		    <?php
            echo '<form action="/hacker-labs/sql/sql_index.php" method="GET">' . PHP_EOL;  
            echo '<input type="submit" value="SQL注入">' . PHP_EOL;
            echo '</form>' . PHP_EOL;     
            ?>
            <?php
            echo '<form action="/hacker-labs/xss/xss_index.php" method="GET">' . PHP_EOL;  
            echo '<input type="submit" value="     xss     ">' . PHP_EOL;
            echo '</form>' . PHP_EOL;     
            ?>
            <?php
            echo '<form action="/hacker-labs/fileupload/fileupload_index.php" method="GET">' . PHP_EOL;  
            echo '<input type="submit" value=" 文件上传 ">' . PHP_EOL;
            echo '</form>' . PHP_EOL;     
            ?>
            <?php
            echo '<form action="/hacker-labs/fileinclusion/fileinclusion_index.php" method="GET">' . PHP_EOL;  
            echo '<input type="submit" value=" 文件包含 ">' . PHP_EOL;
            echo '</form>' . PHP_EOL;     
            ?>
            <?php
            echo '<form action="/hacker-labs/xxe/xxe_index.php" method="GET">' . PHP_EOL;  
            echo '<input type="submit" value="     XXE     ">' . PHP_EOL;
            echo '</form>' . PHP_EOL;     
            ?>
			<?php
            echo '<form action="/hacker-labs/leakage/leakage_index.php" method="GET">' . PHP_EOL;  
            echo '<input type="submit" value=" 信息泄露  ">' . PHP_EOL;
            echo '</form>' . PHP_EOL;     
            ?>
        </div>
    </div>
    <div class="info-container">
        <div>
            <h3>项目简介</h3>
            <p>Hacker-Labs 是一个使用PHP编写的网络安全靶场，专为网络安全初学者设计。我们的目标是帮助初学者入门网络安全领域，了解并掌握基本的网络攻防知识。</p>
        </div>
        <div>
            <h3>使用注意事项</h3>
            <p>每一关的解决方法可能不尽相同。如果你遇到难题，不妨查看代码注释，里面通常会提供一些提示，帮助你顺利完成挑战。<br><em>提示：别忘了动脑筋哦！</em></p>
            <h3>免责声明</h3>
            <p>本项目旨在为网络安全学习者提供教学和实战平台。任何非法用途或与本项目无关的活动，本人概不负责。</p>
        </div>
        <div>
            <h3>项目相关</h3>
            <p><strong>靶场名称：</strong>Hacker-Labs</p>
            <p><strong>作者：</strong>Young</p>
        </div>
    </div>
</div>
</body>
</html>