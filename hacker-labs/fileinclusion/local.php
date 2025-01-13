<?php
$html = '';
if (isset($_GET['filename']) && $_GET['filename'] != null) {
    $filename = $_GET['filename'];
    include "file/$filename";
}
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>本地文件包含</title>
    <style>
        /* Reset and basic styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background: #e0f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
        }

        /* Main content container */
        .main-content {
            width: 90%;
            max-width: 1000px;
            padding: 30px;
            background: white;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            animation: fadeIn 0.5s ease-in;
        }

        /* Header title */
        .fi_title {
            font-size: 36px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 30px;
            letter-spacing: 1px;
            text-transform: uppercase;
            text-align: center;
        }

        /* Navigation buttons */
        ul {
            list-style: none;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        ul li {
            margin: 15px 0;
        }

        ul li a {
            text-decoration: none;
            background: linear-gradient(45deg, #FF8C00, #FF4500);
            color: white;
            padding: 15px 30px;
            font-size: 18px;
            border-radius: 50px;
            font-weight: 600;
            transition: transform 0.2s ease, background 0.3s ease;
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.15);
        }

        ul li a:hover {
            background: linear-gradient(45deg, #FF4500, #FF8C00);
            transform: scale(1.1);
            box-shadow: 0px 12px 20px rgba(0, 0, 0, 0.2);
        }

        /* Content area styling */
        .content {
            margin-top: 30px;
            font-size: 18px;
            color: #7f8c8d;
            line-height: 1.8;
            text-align: left;
            padding: 20px;
            border-radius: 10px;
            background-color: #f9f9f9;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Animation for fade in */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .fi_title {
                font-size: 30px;
            }
            ul li a {
                font-size: 16px;
                padding: 12px 25px;
            }
            .content {
                font-size: 16px;
            }
        }

        /* Footer styling */
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #777;
            border-top: 1px solid #ddd;
            padding-top: 20px;
            padding-bottom: 10px;
        }

        .footer p {
            margin-bottom: 5px;
        }

    </style>
</head>
<body>

<div class="main-content">
    <p class="fi_title">你了解四大名著吗？</p>
    <ul>
        <li><a href="?filename=file1.php">《红楼梦》</a></li>
        <li><a href="?filename=file2.php">《西游记》</a></li>
        <li><a href="?filename=file3.php">《水浒传》</a></li>
        <li><a href="?filename=file4.php">《三国演义》</a></li>
    </ul>
    <div class="content">
        <?php echo $html; ?>
    </div>
	<div class="footer">
		<p>© 2025 Hacker-Labs Web Application</p>
		<p><strong>关于我们：</strong> Hacker-Labs 是一个使用PHP编写的网络安全靶场，致力于为网络安全学习者提供模拟攻击与防御环境。</p>
		<p><strong>免责声明：</strong> 本平台仅供学习和研究使用，禁止用于任何非法行为。请在合法的测试环境中进行操作，使用本平台的一切行为风险自负。</p>
	</div>
</div>
</body>
</html>

<!-- 提示： -->
<!-- 既然是通过filename接收参数来进行文件跳转的，那么是不是可以传给filename邪恶的文件呢？ -->