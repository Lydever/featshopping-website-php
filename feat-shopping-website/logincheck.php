<?php
include('database.php');
if (!isset($_POST['submit'])) {
	exit('登录错误!');
}

$userName = $_POST['userName'];
$password = $_POST['password'];

$checked = mysql_query("select * from users where userName='$userName' and password='$password'");
$res = mysql_fetch_array($checked);
if ($res) {
	echo '登录成功!';
	exit;
}else{
	echo "登录失败,请重试!";
	exit;
}

?>