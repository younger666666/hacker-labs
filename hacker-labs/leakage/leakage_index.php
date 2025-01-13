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
        <h1>欢迎来到 信息泄露 模块</h1>
        <div class="buttons">
			<?php
				for ($i = 1; $i <= 2; $i++) {
					if ($i == 1){
						echo '<form action="Less-' . $i . '.php" method="GET">' . PHP_EOL;	
						echo '                <input type="submit" value="Less-' . $i . '">' . PHP_EOL;
						echo '            </form>' . PHP_EOL;							
					} else {
						echo '            <form action="Less-' . $i . '.php" method="GET">' . PHP_EOL;
						echo '                <input type="submit" value="Less-' . $i . '">' . PHP_EOL;
						echo '            </form>' . PHP_EOL;					
					}
				}
			?>
        </div>
    </div>
	<div class="info-container">
		<div>
			<h3>信息泄露简介</h3>
			<p>信息泄露漏洞就像是把你私密的日记本丢到了街头，任何路人都能轻松翻开。黑客通过网站的漏洞，轻松地获取本不该公开的敏感数据，比如数据库密码、API密钥、用户信息等。想象一下，你的服务器就像一个公共厕所的公告板，所有的敏感信息都写在上面，结果黑客看到后顺手抄走了。</p>
		</div>
		<div>
			<h3>信息泄露的严重后果</h3>
			<ul>
				<li><strong>用户信息泄露：</strong>如果用户的个人信息（如姓名、地址、密码等）被泄露，可能导致身份盗窃、诈骗等问题。黑客直接拿到了“黑市名片”，就能开始“为非作歹”了。</li>
				<li><strong>数据库暴露：</strong>如果数据库连接字符串或者其他敏感配置文件泄露，黑客可以轻松访问你的数据库，窃取、篡改甚至删除数据。</li>
				<li><strong>系统入侵：</strong>通过版本信息泄露，黑客可以准确地找出漏洞，进而发起攻击。就像是在你家门口写着“门锁老旧”的告示，黑客立马知道该怎么“攻入”了。</li>
			</ul>
		</div>
		<div>
			<h3>如何防止信息泄露？</h3>
			<ul>
				<li><strong>限制文件访问：</strong>确保敏感文件（如配置文件、备份文件等）不可通过URL直接访问。</li>
				<li><strong>定期审计日志：</strong>定期检查服务器日志，确保没有意外的敏感数据泄露。</li>
				<li><strong>控制响应头：</strong>确保服务器响应头中没有暴露版本信息等敏感信息。</li>
				<li><strong>加密敏感数据：</strong>对于敏感的用户数据，要使用加密存储，即使泄露也无法被轻易利用。</li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>