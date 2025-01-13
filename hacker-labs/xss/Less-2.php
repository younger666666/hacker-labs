<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Less-2 XSS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<style>
	.footer {
		text-align: center;
		margin-top: 30px;
		font-size: 14px;
		color: #777;
	}
</style>
<body>
    <h1 align=center>欢迎来到Less-2</h1>
	<h2 class="text-center">你看过这个动画吗？</h2>
	<center>
		<img src="猫和老鼠.png" alt="" width="400" height="250">
	</center>
<?php
$str = $_GET["keyword"];
    echo 
	'	<center>
		<label for="name-input">这是什么动画？</label>
        <form action=Less-2.php method=GET>
            <input name=keyword  value="' . $str . '">
            <input type=submit name=submit value="提交"/>
        </form>
    </center>' . PHP_EOL;
	
	if (isset($_GET['submit'])) {
    if (empty($_GET['keyword'])) {
        echo "	<h2 align=center>你居然没看过" . htmlspecialchars($str) . "</h2>" . PHP_EOL;
    } else if($_GET['keyword']==='猫和老鼠'){
        echo "	<h2 align=center>没错，就是" . htmlspecialchars($str) . "</h2>" . PHP_EOL;
    } else {
        echo "	<h2 align=center>不，并不是" . htmlspecialchars($str) . "</h2>" . PHP_EOL;
	}
}
?>
	<div class="footer">
		<p>© 2025 Hacker-Labs Web Application</p>
		<p><strong>关于我们：</strong> Hacker-Labs 是一个使用PHP编写的网络安全靶场，致力于为网络安全学习者提供模拟攻击与防御环境。</p>
		<p><strong>免责声明：</strong> 本平台仅供学习和研究使用，禁止用于任何非法行为。请在合法的测试环境中进行操作，使用本平台的一切行为风险自负。</p>
	</div>
</body>
</html>

<!-- 提示： -->
<!-- htmlspecialchars函数主要用于将HTML中的特殊字符转换为对应的HTML实体，以防止潜在的XSS攻击
	 它会将以下几个字符转义为 HTML 实体：
     &（和号）转义为 &amp;
     "（双引号）转义为 &quot;
     '（单引号）转义为 &#39; 或 &apos;
     <（小于号）转义为 &lt;
     >（大于号）转义为 &gt; 
-->
<!-- 你可以去尝试闭合 -->