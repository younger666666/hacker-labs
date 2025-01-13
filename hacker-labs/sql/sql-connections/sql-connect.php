<?php
include("../sql/sql-connections/db-creds.inc");
@$con = mysql_connect($host,$dbuser,$dbpass);
if (!$con)
{
    die("连接失败: " . mysqli_connect_error());
}
    @mysql_select_db($dbname,$con) or die ( "无法连接数据库: $dbname");
?>