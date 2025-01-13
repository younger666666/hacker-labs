<?php
$link = mysqli_connect('localhost', 'root', 'root', 'hacker');
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}
$html = '';
if (isset($_GET['submit'])) {
    if ($_GET['username'] != null && $_GET['password'] != null) {
        $username = $_GET['username'];
        $password = $_GET['password'];
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) == 1) {
            header("Location: key.php");
            exit;
        } else {
            $html .= "<p class='notice'>您输入的账号或密码错误</p>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Less-2 信息泄露</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #f06, #ff8c00);
        }
        .login-box {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 350px; /* 限制最大宽度 */
            text-align: center;
        }
        .login-box h2 {
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }
        .login-box input[type="text"],
        .login-box input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        .login-box input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #ff8c00;
            border: none;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-box input[type="submit"]:hover {
            background-color: #f06;
        }
        .notice {
            color: #e74c3c;
            margin-top: 10px;
            font-size: 14px;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #777;
            background-color: #222;
            color: #fff;
            padding: 15px;
            border-top: 1px solid #444;
        }
        .footer p {
            margin: 5px 0;
        }
        .footer a {
            color: #3498db;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="login-box">
        <h2>用户登录</h2>
        <form method="get">
            <input type="text" name="username" placeholder="请输入用户名" required />
            <input type="password" name="password" placeholder="请输入密码" required />
            <input class="submit" name="submit" type="submit" value="登录" />
        </form>
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
<!-- 你能访问得到key.php文件吗？ -->
<!-- 对了，其实你也不一定要登录进来 -->

