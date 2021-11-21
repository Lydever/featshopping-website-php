<meta charset="UTF-8">
<?php
include ("database.php");
//获取表单提交的数据
$userName = $_POST['userName'];
$password = $_POST['password'];

//连接数据库服务
getConnection();
//判断输入的用户名和密码是否正确
$sql = "select * from users where userName='$userName' and password='$password'";
$res = mysqli_query($connection,$sql);
if(mysqli_num_rows($res)>0){
	header("location:loginsuccess.html");
	header("loaction:../index.html");
}else{
	echo "用户名和密码输入错误!登录失败!";
}

closeConnection();