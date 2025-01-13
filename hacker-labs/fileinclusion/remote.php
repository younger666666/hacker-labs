<?php
$html = '';
if (isset($_GET['submit']) && isset($_GET['filename']) && $_GET['filename'] != null) {
    $filename = $_GET['filename'];
    include "$filename";
}
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>远程文件包含</title>
    <style>
        /* Reset and basic styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
        }

        /* Main content container */
        .main-content {
            width: 90%;
            max-width: 900px;
            padding: 40px;
            background: white;
            border-radius: 15px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
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
        }

        /* Form styling */
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        input[type="radio"] {
            margin: 10px;
        }

        label {
            font-size: 18px;
            margin: 10px 0;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        label:hover {
            color: #FF4500;
        }

        .sub {
            margin-top: 20px;
            background: linear-gradient(45deg, #FF8C00, #FF4500);
            color: white;
            padding: 15px 30px;
            font-size: 18px;
            border-radius: 50px;
            border: none;
            font-weight: 600;
            transition: transform 0.2s ease, background 0.3s ease;
            cursor: pointer;
        }

        .sub:hover {
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

        /* Animation for fade-in */
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

        /* Responsive design */
        @media (max-width: 768px) {
            .fi_title {
                font-size: 28px;
            }
            .sub {
                font-size: 16px;
                padding: 12px 25px;
            }
            .content {
                font-size: 16px;
            }
        }

    </style>
</head>
<body>
<div class="main-content">
    <p class="fi_title">你了解四大名著吗？</p>
    <form method="get">
        <input type="radio" name="filename" value="file/file1.php" id="file1" />
        <label for="file1">《红楼梦》</label>
        <input type="radio" name="filename" value="file/file2.php" id="file2" />
        <label for="file2">《西游记》</label>
        <input type="radio" name="filename" value="file/file3.php" id="file3" />
        <label for="file3">《水浒传》</label>
        <input type="radio" name="filename" value="file/file4.php" id="file4" />
        <label for="file4">《三国演义》</label>
        <input class="sub" type="submit" name="submit" />
    </form>
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
<!-- 尝试把网址传给filename -->

