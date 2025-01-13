<?php
$html='';
if(isset($_GET['title'])){
    $filename=$_GET['title'];
    require "knowledge/$filename";
}
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Less-1 信息泄露</title>
    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styled as flex container for centering */
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(45deg, #ff6ec7, #f7b731);
            color: #fff;
            line-height: 1.6;
            min-height: 100vh; /* Ensures at least full height */
            display: flex; /* Enable flexbox */
            flex-direction: column; /* Stack children vertically */
            justify-content: center; /* Center content vertically */
            align-items: center; /* Center content horizontally */
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.4);
            overflow-x: hidden;
        }

        /* Main content container */
        .main-content {
            max-width: 960px;
            width: 100%;
            padding: 30px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            transform: scale(1);
            transition: transform 0.3s ease-in-out;
            margin-bottom: 20px; /* Reduced space between main content and footer */
        }

        .main-content:hover {
            transform: scale(1.05);
        }

        #dt_main {
            text-align: center;
            margin-bottom: 30px;
        }

        .dt_title {
            font-size: 34px;
            font-weight: bold;
            letter-spacing: 2px;
            color: #fff;
            text-transform: uppercase;
            text-shadow: 4px 4px 12px rgba(0, 0, 0, 0.4);
            margin-bottom: 20px;
            animation: slideIn 1s ease-in-out;
        }

        .dt_title:hover {
            color: #ff6ec7;
            transform: scale(1.1);
        }

        .dt_title a {
            color: #fff;
            text-decoration: none;
            font-size: 22px;
            padding: 12px 30px;
            background-color: #ff6ec7;
            border-radius: 30px;
            transition: all 0.3s ease;
            display: inline-block;
            margin-top: 20px;
            box-shadow: 0 0 20px rgba(255, 105, 180, 0.8);
        }

        .dt_title a:hover {
            background-color: #f7b731;
            transform: translateY(-5px);
            box-shadow: 0 0 25px rgba(255, 105, 180, 1);
        }

        /* Content container */
        .main-content div {
            padding: 20px;
            background-color: #222;
            border-radius: 10px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        }

        .main-content div:hover {
            background-color: #333;
        }

        /* Animation for the title */
        @keyframes slideIn {
            0% {
                transform: translateY(-50px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Footer styles */
        .footer {
            text-align: center;
            font-size: 14px;
            color: #777;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            width: 100%;
            margin-top: 20px; /* Reduced space */
        }

        .footer p {
            margin: 5px 0;
        }

        .footer strong {
            color: #ff6ec7;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .main-content {
                padding: 15px;
            }

            .dt_title {
                font-size: 28px;
            }

            .dt_title a {
                font-size: 18px;
            }

            .footer {
                font-size: 12px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="main-content">
        <div id="dt_main">
            <p class="dt_title">来学点知识吧！！！</p>
            <a class="dt_title" href="Less-1.php?title=knowledge.php">我是“知识”</a>
        </div>
        <div>
            <?php echo $html; ?>
        </div>
    </div>
    <div class="footer">
        <p>© 2025 Hacker-Labs Web Application</p>
        <p><strong>关于我们：</strong> Hacker-Labs 是一个使用PHP编写的网络安全靶场，致力于为网络安全学习者提供模拟攻击与防御环境。</p>
        <p><strong>免责声明：</strong> 本平台仅供学习和研究使用，禁止用于任何非法行为。请在合法的测试环境中进行操作，使用本平台的一切行为风险自负。</p>
    </div>
</body>
</html>

<!-- 提示： -->
<!-- 你能访问得到/etc/passwd.php文件吗？ -->

