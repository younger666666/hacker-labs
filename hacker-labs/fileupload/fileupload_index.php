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
        <h1>欢迎来到 文件上传 模块</h1>
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
			<h3>文件上传简介</h3>
			<p>文件上传，表面看起来是个普通功能，用户可以上传图片、文档，甚至音视频文件，大家都很开心对吧？但如果你没有加点安全防护，那这些“礼物”说不定会让你的网站成为黑客的“派对”，而这些“礼物”里面，可能藏着炸弹。</p>
		</div>
		<div>
			<h3>文件上传的危害：</h3>
			<ul>
				<li><strong>服务器入侵：</strong>一旦黑客上传了恶意文件，可能就可以执行任意代码，甚至远程控制服务器，完全控制你的网站。你的网站就像开了一扇大门，黑客进得了“厨房”，接管了一切。</li>
				<li><strong>数据泄露：</strong>上传文件有时会包含敏感信息，如果你没有设置安全存储或权限控制，黑客可以轻松拿到这些数据。</li>
				<li><strong>拒绝服务攻击（DoS）：</strong>恶意用户可以通过上传大量文件，或者上传超大文件，填满服务器存储，最终导致服务器崩溃。</li>
			</ul>
		</div>
		<div>
			<h3>如何防范文件上传漏洞：别让“礼物”带来麻烦</h3>
			<ul>
				<li><strong>文件类型验证：</strong>永远不要只看文件扩展名（如 `.jpg`、`.pdf`），你需要验证文件的实际内容和类型。</li>
				<li><strong>文件大小限制：</strong>限制上传文件的最大尺寸，避免用户上传庞大的文件占用服务器空间。</li>
				<li><strong>权限管理：</strong>对上传的文件进行权限管理，确保即使文件被上传，用户也没有权限执行任何操作。”</li>
				<li><strong>文件扫描：</strong>上传后对文件进行病毒扫描，确保没有恶意代码。</li>
			</ul>
		</div>
	</div>
</div>
</body>
</html>