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
        <h1>欢迎来到 SQL注入 模块</h1>
        <div class="buttons">
			<?php
				for ($i = 1; $i <= 6; $i++) {
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
			<h3>SQL注入简介</h3>
			<p>SQL注入就像是黑客手中的“万能钥匙”，只要插入恶意代码，就能悄悄打开你网站背后的数据库，获取敏感数据、篡改内容，甚至完全控制它。想象一下，黑客在你的网站上插个小道消息，数据库就开始自曝其短。</p>
		</div>
		<div>
			<h3>SQL注入的危害</h3>
			<p>SQL注入的后果就像是黑客闯进了你的数据库宝库，不仅偷走了敏感信息，还可能篡改数据、删除内容，甚至直接控制你的数据库！想象一下，你的网站就是一个餐厅，黑客有了厨房的钥匙，随时能改菜单、偷食材。</p>
		</div>
		<div>
			<h3>如何防范SQL注入</h3>
			<ul>
				<li><strong>使用预处理语句：</strong>通过预处理语句，把SQL语句和数据分开处理，阻止黑客注入恶意代码。</li>
				<li><strong>输入验证：</strong>不要让用户随便输入“奇怪”的字符，像 `--` 或 `'` 这类字符应该视为危险物品，直接拦截。</li>
				<li><strong>最小权限原则：</strong>限制数据库账户的权限，确保即使黑客攻击成功，也无法进行重大破坏。</li>
				<li><strong>错误信息隐藏：</strong>别让数据库的错误信息暴露给前端，黑客通过错误信息可以找到“破解点”！</li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>