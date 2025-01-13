<?php
	$str1 = $_SERVER['HTTP_USER_AGENT'];
	$str2 = str_replace(">", "", $str1);
	$str3 = str_replace("<", "", $str2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Less-5 XSS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 5%;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2, h3 {
            text-align: center;
            color: #007bff;
        }

        img {
            display: block;
            margin: 20px auto;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .btn-secondary {
            margin-top: 20px;
            background-color: #6c757d;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-secondary:hover {
            background-color: #495057;
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
		<form method="get" style="max-width: 600px; margin: 0 auto;">
			<h1>欢迎来到Less-5</h1>
			<h2>你想学网络安全？那这个人你一定要认识</h2>
			<center>
				<img src="凯文·米特尼克.jpg" alt="凯文·米特尼克" width="250" height="250">
			</center>
			<h3>凯文·米特尼克(Kevin David Mitnick)，第一个被美国联邦调查局通缉的黑客。被CNN、福克斯新闻等主流媒体称为“世界上最著名的黑客”，也是第一位被 FBI 通缉的黑客。其传奇的黑客经历足以令全世界为之震惊。出版过《反欺骗的艺术》、《反入侵的艺术》、《线上幽灵:世界头号黑客米特尼克自传》。2023年7月16日，Dignity Memorial殡葬网站上的一则讣告宣告了凯文·米特尼克的离世（死于胰腺癌，享年59岁）。</h3>
			<input name="ua" value="<?php echo $str3; ?>" type="hidden">
		</form>
	</div>
	<div class="footer">
		<p>© 2025 Hacker-Labs Web Application</p>
		<p><strong>关于我们：</strong> Hacker-Labs 是一个使用PHP编写的网络安全靶场，致力于为网络安全学习者提供模拟攻击与防御环境。</p>
		<p><strong>免责声明：</strong> 本平台仅供学习和研究使用，禁止用于任何非法行为。请在合法的测试环境中进行操作，使用本平台的一切行为风险自负。</p>
	</div>
</body>
</html>

<!-- 提示： -->
<!-- 你知道UA吗? UA里面是可以写代码的 -->