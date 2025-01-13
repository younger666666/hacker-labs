<?php
include("../sql/sql-connections/sql-connect.php");
error_reporting(0);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM user WHERE id='$id' LIMIT 0,1";
    $result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	
	if($row)
	{
  	echo '输入合法';
  	}
	else 
	{
	echo 'hacker! 走开！！！';
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Less-3 SQL注入</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f9;
            color: #333;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
        }
        .alert {
            margin-top: 20px;
        }
        .header {
            color: #007bff;
            font-size: 32px;
            font-weight: bold;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-custom {
            background-color: #007bff;
            color: #fff;
            border: none;
            font-size: 16px;
            padding: 10px 20px;
            width: 100%;
        }
        .btn-custom:hover {
            background-color: #0056b3;
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
    <div class="container mt-5">
        <form method="get" class="col-md-6 offset-md-3">
        <h1 class="text-center">欢迎来到 Less-3</h1>
            <div class="form-group">
                <label for="id-input">用户ID：</label>
                <input id="id-input" class="form-control" type="text" name="id" required placeholder="请输入用户ID" />
            </div>
            <button type="submit" name="submit" class="btn btn-primary btn-block">查询</button>
        </form>
        <div class="result mt-3">
            <?php echo $html; ?>
        </div>
    </div>
	<div class="footer">
		<p>© 2025 Hacker-Labs Web Application</p>
		<p><strong>关于我们：</strong> Hacker-Labs 是一个使用PHP编写的网络安全靶场，致力于为网络安全学习者提供模拟攻击与防御环境。</p>
		<p><strong>免责声明：</strong> 本平台仅供学习和研究使用，禁止用于任何非法行为。请在合法的测试环境中进行操作，使用本平台的一切行为风险自负。</p>
	</div>
</body>
</html>

<!-- 提示： -->
<!-- SQL注入也是可以上传木马的 -->

