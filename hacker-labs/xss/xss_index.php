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
			height: 566px;
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
        <h1>欢迎来到 XSS 模块</h1>
        <div class="buttons">
			<?php
				for ($i = 1; $i <= 5; $i++) {
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
			<h3>XSS简介</h3>
			<p>XSS（跨站脚本攻击），简单来说，就是黑客偷偷在你的网站里藏了一只小猴子，然后这只猴子跑到每个用户的浏览器里捣乱、偷东西或者让页面看起来“怪怪的”。它的工作原理就是通过注入恶意脚本代码，让浏览器执行这些不速之客。这个漏洞通常会影响网站的用户，目标是偷偷窃取信息、篡改页面或传播病毒。</p>
		</div>
		<div>
			<h3>XSS三种常见类型</h3>
			<ul>
				<li><strong>反射型 XSS：</strong>黑客发个“带毒链接”，点开后，页面就会把恶意代码反射回来并执行。</li>
				<li><strong>存储型 XSS：</strong>这货藏得更深，把恶意脚本存到服务器上，结果每个访问该页面的用户都中招。</li>
				<li><strong>DOM型 XSS：</strong>不需要服务器帮忙，黑客通过修改网页的“骨架”直接操控页面内容，让浏览器自动执行脚本。</li>
			</ul>
			<h3>XSS的危害</h3>
			<p>XSS攻击就像“黑暗料理”，结果是让你的网站变得“非人类”，用户会丢失敏感信息，网页被改得面目全非，甚至传播恶意病毒。总之，搞得你一团乱。</p>
		</div>
	</div>
</div>
</body>
</html>