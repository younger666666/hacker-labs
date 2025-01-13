<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Less-6 SQL注入</title>
    <style>
        body {
            background-color: #f4f4f9;
            color: #333;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header {
            color: #007bff;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
        }

        .content {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-size: 18px;
        }

        .content span {
            font-weight: bold;
            color: #007bff;
        }

        .alert, .error {
            background-color: #ffcc00;
            color: #fff;
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
            font-size: 16px;
            text-align: center;
        }

        .btn-custom {
            background-color: #007bff;
            color: #fff;
            border: none;
            font-size: 16px;
            padding: 12px 20px;
            width: 100%;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            font-size: 14px;
            color: #777;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .hint {
            font-size: 18px;
            color: #007bff;
            margin-top: 20px;
            text-align: center;
        }

        .image-container {
            text-align: center;
            margin-top: 30px;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <center><h1>欢迎来到 Less-6</h1></center>
        <?php
        include("../sql/sql-connections/sql-connect.php");

        function check_addslashes($string) {
            $string = preg_replace('/'. preg_quote('\\') .'/', "\\\\\\", $string);
            $string = preg_replace('/\'/i', '\\\'', $string);
            $string = preg_replace('/\"/', "\\\"", $string);
            return $string;
        }
        if (isset($_GET['id'])) {
            $id = check_addslashes($_GET['id']);
            mysql_query("SET NAMES gbk");
            $sql = "SELECT * FROM user WHERE id='$id' LIMIT 0,1";
            $result = mysql_query($sql);
            $row = mysql_fetch_array($result);

            if ($row) {
                echo '<div class="content">';
                echo '用户名: <span>' . $row['username'] . '</span><br>';
                echo '密码: <span>' . $row['password'] . '</span>';
                echo '</div>';
            } else {
                echo '<div class="error">Error: ' . mysql_error() . '</div>';
            }
        } else {
            echo '<div class="error">请输入要查询的id</div>';
        }
        ?>

        <div class="hint">
            <?php
            function strToHex($string) {
                $hex = '';
                for ($i = 0; $i < strlen($string); $i++) {
                    $hex .= dechex(ord($string[$i]));
                }
                return $hex;
            }

            echo "您所查询的id为" . htmlspecialchars($id) . "<br>";
            ?>
        </div>
    </div>
	<div class="footer">
		<p>© 2025 Hacker-Labs Web Application</p>
		<p><strong>关于我们：</strong> Hacker-Labs 是一个使用PHP编写的网络安全靶场，致力于为网络安全学习者提供模拟攻击与防御环境。</p>
		<p><strong>免责声明：</strong> 本平台仅供学习和研究使用，禁止用于任何非法行为。请在合法的测试环境中进行操作，使用本平台的一切行为风险自负。</p>
	</div>
</body>
</html>
