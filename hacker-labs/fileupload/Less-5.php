<?php
include 'config.php';

$is_upload = false;
$msg = null;
function deldot($filename) {
    // 去除文件名部分的末尾点
    $name_parts = pathinfo($filename);
    $basename = rtrim($name_parts['filename'], '.');
    return $basename . '.' . $name_parts['extension']; // 重新拼接扩展名
}
if (isset($_POST['submit'])) {
    if (file_exists(UPLOAD_PATH)) {
		$deny_ext = array(".php",".php5",".php4",".php3",".php2",".php1",".html",".htm",".phtml",".pht",".pHp",".pHp5",".pHp4",".pHp3",".pHp2",".pHp1",".Html",".Htm",".pHtml",".jsp",".jspa",".jspx",".jsw",".jsv",".jspf",".jtml",".jSp",".jSpx",".jSpa",".jSw",".jSv",".jSpf",".jHtml",".asp",".aspx",".asa",".asax",".ascx",".ashx",".asmx",".cer",".aSp",".aSpx",".aSa",".aSax",".aScx",".aShx",".aSmx",".cEr",".sWf",".swf",".ini");
        $file_name = $_FILES['upload_file']['name'];        
        $file_name = deldot($file_name); // 删除文件名末尾的点
        $file_ext = strrchr($file_name, '.');
        $file_ext = strtolower($file_ext); // 转换为小写
        $file_ext = str_ireplace('::$DATA', '', $file_ext); // 去除字符串::$DATA
        $file_ext = trim($file_ext); // 收尾去空

        if (!in_array($file_ext, $deny_ext)) {
            $temp_file = $_FILES['upload_file']['tmp_name'];
            $img_path = UPLOAD_PATH . '/' . $file_name;
            if (move_uploaded_file($temp_file, $img_path)) {
                $is_upload = true;
            } else {
                $msg = '上传出错！';
            }
        } else {
            $msg = '此文件不允许上传';
        }
    } else {
        $msg = UPLOAD_PATH . ' 文件夹不存在, 请手工创建！';
    }
}
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Less-5 文件上传</title>
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
    <h3>欢迎来到Less-5</h3>
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
<!-- 学习一下.htaccess怎么使用 -->

