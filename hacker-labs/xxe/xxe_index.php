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
        <h1>欢迎来到 XXE 模块</h1>
        <div class="buttons">
			<?php
				echo '<form action="xxe.php" method="GET">' . PHP_EOL;	
				echo '                <input type="submit" value="进入靶场">' . PHP_EOL;
				echo '            </form>' . PHP_EOL;							
			?>
        </div>
    </div>
	<div class="info-container">
		<div>
			<h3>XXE漏洞简介</h3>
			<p>XXE（XML外部实体注入），简而言之，就是让你的服务器像“傻白甜”一样去帮别人处理恶意的XML数据，结果你不知道它会偷偷帮黑客去访问你本地的文件，甚至向外部发送敏感信息。就像你请一个朋友吃饭，结果他竟然帮别人把你家的密钥送到了外面。</p>
		</div>
		<div>
			<h3>XXE怎么运作？</h3>
			<p>想象一下，你的应用程序就像是一个忠实的服务员，接到了一个包含外部实体的XML文件。它大意地把这个文件交给解析器，结果解析器看到里面写着“去访问一下我的电脑上的文件”或者“去找找黑客的网站”，然后乖乖地照办了，搞得你自己都懵了！</p>
		</div>
		<div>
			<h3>如何防止XXE漏洞？</h3>
			<ul>
				<li><strong>禁用外部实体解析：</strong>确保XML解析器不允许解析外部实体，以防止恶意文件通过外部实体访问本地文件或发起远程请求。</li>
				<li><strong>严格验证输入数据：</strong>对所有输入的XML数据进行严格验证，确保其格式和内容符合预期，避免恶意代码注入。</li>
				<li><strong>限制文件访问权限：</strong>合理配置文件访问权限，确保应用程序只能访问必要的文件，避免泄露敏感数据。</li>
				<li><strong>使用XML Schema验证：</strong>通过XML Schema对输入的XML数据进行验证，确保数据结构合法且符合预定规范。</li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>