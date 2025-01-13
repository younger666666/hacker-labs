<?php
$html = '';
if (isset($_GET['submit'])) {
    if (empty($_GET['animal'])) {
        $html = "<p class='alert alert-danger'>难道你不喜欢动物</p>" . PHP_EOL;
    } else {
        $html = "<p class='alert alert-success'>我也很喜欢{$_GET['animal']}</p>" . PHP_EOL;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Less-1 XSS</title>
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
	<div class="container mt-5">
		<form method="get" class="col-md-6 offset-md-3">
			<h1 class="text-center">欢迎来到Less-1</h1>
			<h2 class="text-center">你喜欢什么动物?</h2>
			<div class="form-group">
				<label for="animal-input">输入你喜欢的动物：</label>
				<input id="animal-input" class="form-control" type="text" maxlength="10" name="animal" />
			</div>
			<button type="submit" name="submit" class="btn btn-primary btn-block">提交</button>
			<?php echo $html; ?>
		</form>
		<div class="footer">
			<p>© 2025 Hacker-Labs Web Application</p>
			<p><strong>关于我们：</strong> Hacker-Labs 是一个使用PHP编写的网络安全靶场，致力于为网络安全学习者提供模拟攻击与防御环境。</p>
			<p><strong>免责声明：</strong> 本平台仅供学习和研究使用，禁止用于任何非法行为。请在合法的测试环境中进行操作，使用本平台的一切行为风险自负。</p>
		</div>
	</div>
</body>
</html>

<!-- 提示： -->
<!-- 长度不够？F12是个好东西 -->