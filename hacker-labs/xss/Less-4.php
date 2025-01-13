<?php
$html = '';
if (isset($_GET['submit'])) {
	$_GET[ 'name' ] = preg_replace( '/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i', '', $_GET[ 'name' ] ); 
    if (empty($_GET['name'])) {
        $html = "<p class='alert alert-danger'>杰瑞要被抓住了</p>" . PHP_EOL;
    } else {
		if (strstr($_GET['name'], 'alert') === false) {
			$html = "<p class='alert alert-danger'>杰瑞要被抓住了</p>" . PHP_EOL;
		} else {
			$html = "<center>
					<img src='Jerry.jpg' alt='' width='250' height='250'>
			</center>
			<p class='alert alert-danger'>杰瑞获救了</p>
			<p class='alert alert-info'>" . $_GET['name'] . "</p>" . PHP_EOL;
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Less-4 XSS</title>
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
			<h1 class="text-center">欢迎来到Less-4</h1>
			<h2 class="text-center">杰瑞要被抓了，如果你能制造个弹窗他就会获救</h2>
			<center>
				<img src="杰瑞.jpg" alt="" width="350" height="250">
			</center>
			<div class="form-group">
				<input id="name-input" class="form-control" type="text" maxlength="100" name="name" />
			</div>
			<button type="submit" name="submit" class="btn btn-primary btn-block">提交</button>
			<?php echo $html; ?>
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
<!-- <script>这回真的用不了了o(╥﹏╥)o -->