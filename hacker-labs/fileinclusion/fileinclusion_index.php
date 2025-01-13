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
        <h1>欢迎来到 文件包含 模块</h1>
        <div class="buttons">
			<?php
				echo '<form action="local.php" method="GET">' . PHP_EOL;	
				echo '                <input type="submit" value="本地文件包含">' . PHP_EOL;
				echo '            </form>' . PHP_EOL;							
			?>
			<?php
				echo '<form action="remote.php" method="GET">' . PHP_EOL;	
				echo '                <input type="submit" value="远程文件包含">' . PHP_EOL;
				echo '            </form>' . PHP_EOL;							
			?>
        </div>
    </div>
	<div class="info-container">
		<div>
			<h3>文件包含简介</h3>
			<p>文件包含漏洞（File Inclusion）其实就像给黑客开了一扇“传送门”。看似简单的文件加载功能，结果黑客只要找对路径，就能悄悄加载恶意文件，甚至执行可怕的代码！你以为加载的是一张图片，实际上却是个“地雷”！</p>
		</div>
		<div>
			<h3>文件包含的两大类型</h3>
			<ul>
				<li><strong>本地文件包含（LFI）：</strong>黑客可以通过提供本地文件的路径，让服务器读取本地文件，甚至系统文件。这样一来，黑客就能读取服务器上的敏感信息，甚至可能执行系统命令。</li>
				<li><strong>远程文件包含（RFI）：</strong>如果你的网站没有正确限制文件包含的来源，黑客就可以引入一个远程服务器上的恶意文件。这时，黑客就像拿到了一张“外星菜单”，不仅能加载文件，还能把恶意代码注入到你的网站中。</li>
			</ul>
		</div>
		<div>
			<h3>如何避免文件包含漏洞</h3>
			<ul>
				<li><strong>严格验证文件路径：</strong>绝对不要让用户输入路径来加载文件。</li>
				<li><strong>禁止远程文件包含：</strong>禁用远程文件包含，让黑客无法通过网络“点外卖”来攻击你的服务器。</li>
				<li><strong>使用绝对路径：</strong>永远使用绝对路径来加载文件，避免用户通过路径遍历漏洞绕过限制。</li>
				<li><strong>输入检查与过滤：</strong>对所有输入进行严格验证，过滤掉任何可能导致路径遍历的字符。</li>
				<li><strong>文件权限管理：</strong>确保只有授权的人员可以访问敏感文件，防止黑客随意窃取数据。</li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>

