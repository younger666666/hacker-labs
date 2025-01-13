<?php
include 'config.php';

$is_upload = false;
$msg = null;
if (isset($_POST['submit'])) {
    if (file_exists(UPLOAD_PATH)) {
        if (($_FILES['upload_file']['type'] == 'image/jpeg') || ($_FILES['upload_file']['type'] == 'image/png') || ($_FILES['upload_file']['type'] == 'image/gif')) {
            $temp_file = $_FILES['upload_file']['tmp_name'];
            $img_path = UPLOAD_PATH . '/' . $_FILES['upload_file']['name'];          
            if (move_uploaded_file($temp_file, $img_path)) {
                $is_upload = true;
            } else {
                $msg = '上传出错！';
            }
        } else {
            $msg = '文件类型不正确，请重新上传！';
        }
    } else {
        $msg = UPLOAD_PATH.'文件夹不存在,请手工创建！';
    }
}
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Less-2 文件上传</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }

        #upload_panel {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h3 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .input_file {
            display: inline-block;
            margin-bottom: 15px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
        }
		.footer {
			text-align: center;
			margin-top: 30px;
			font-size: 14px;
			color: #777;
		}
        .button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #45a049;
        }

        #msg {
            margin-top: 20px;
            font-size: 16px;
            color: #ff6347;
        }

        #img {
            margin-top: 20px;
        }

        #img img {
            max-width: 100%;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div id="upload_panel">
    <h3>欢迎来到Less-2</h3>
    <form enctype="multipart/form-data" method="post">
        <p>请选择要上传的图片：</p>
        <input class="input_file" type="file" name="upload_file"/>
        <br>
        <input class="button" type="submit" name="submit" value="上传"/>
    </form>
    <div id="msg">
        <?php 
            if($msg != null){
                echo "提示：".$msg;
            }
        ?>
    </div>
    <div id="img">
        <?php
            if($is_upload){
                echo '<img src="'.$img_path.'" width="250px" />';
            }
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

<!-- 提示： -->
<!-- 听说过content-type吗？ -->
<!-- 你可以把它换成图片形式来骗过系统 -->

