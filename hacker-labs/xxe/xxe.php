<?php
if (isset($_POST['submit']) && !empty($_POST['xml'])) {
    $xml = $_POST['xml'];
    // 启用外部实体处理，导致 XXE 漏洞
    $data = @simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOENT);
}
?>

<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XXE</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #5a5a5a;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input[type="text"] {
            width: 70%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            width: 80%;
            padding: 10px;
            background-color: #5cb85c;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
        .result-box, .error-box {
            background-color: #e9f7f7;
            padding: 15px;
            margin-top: 20px;
            border-radius: 4px;
            border: 1px solid #b2d8d8;
        }
        .error-box pre {
            white-space: pre-wrap;
            word-wrap: break-word;
            font-size: 14px;
        }
        .result-box {
            background-color: #f2dede;
            border-color: #ebccd1;
        }
        .result-box p {
            color: #a94442;
            font-size: 16px;
        }
		.footer {
			text-align: center;
			margin-top: 30px;
			font-size: 14px;
			color: #777;
		}
    </style>
</head>
<body>
<div class="container">
    <h1>空空如也~</h1>
    <form method="post">
        <input type="text" name="xml" " />
        <input type="submit" name="submit" value="提交">
    </form>
    <?php if (isset($data)): ?>
        <?php if ($data): ?>
            <div class="result-box"><pre><?php echo htmlspecialchars($data); ?></pre></div>
        <?php else: ?>
            <div class="error-box"><p>你了解XXE了吗？</p></div>
        <?php endif; ?>
    <?php endif; ?>
</div>
	<div class="footer">
		<p>© 2025 Hacker-Labs Application</p>
		<p><strong>关于我们：</strong> Hacker-Labs 是一个使用PHP编写的网络安全靶场，致力于为网络安全学习者提供模拟攻击与防御环境。</p>
		<p><strong>免责声明：</strong> 本平台仅供学习和研究使用，禁止用于任何非法行为。请在合法的测试环境中进行操作，使用本平台的一切行为风险自负。</p>
	</div>
</body>
</html>


<!-- 提示： -->
<!-- 这里没有禁止外部实体的加载哦~ -->
