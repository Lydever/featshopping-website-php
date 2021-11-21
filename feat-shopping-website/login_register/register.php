<meta charset="UTF-8">
<?php
header("content-type:text/html;charset=utf8");

include ("database.php");
include("file.php");
if (empty($_POST)) {
    exit("你提交的表单数据超过post_max_size的最大值!<br>");
}

$password = $_POST['password'];
$confirm= $_POST['confirm'];
if ($password!=$confirm) {
    exit("输入的密码和确认密码不相同!");
}

$userName = $_POST['userName'];
//判断用户名是否被占用
if (!$userName || !$password || !$confirm) {
    exit("用户名和密码不能为空!");
}

$userNameSQL = "select * from users where userName='$userName'";
getConnection();
$res = mysqli_query($connection,$userNameSQL);
if (mysqli_num_rows($res)>0) {
    closeConnection();
    exit("用户名已经被占用,请更换其他用户名!");
}


//获取用户输入的其他信息
$sex = $_POST['sex'];
if (empty($_POST['interests'])) {
    $interests = "";
}else{
    $interests = implode(";",$_POST['interests']);
}


$rew = @$_POST['rew'];
$myimg= @$_FILES['myimg']['name'];

$registerSQL = "insert into users values(null,'$userName','$password','$sex','$interests','$myimg','$rew')";
$message = @upload($_FILES['myimg'],"uploads");
if ($message=="文件上传成功!"||$message=="没有选择上传附件!") {
    mysqli_query($connection,$registerSQL);
    $userID = mysqli_insert_id($connection);
    echo "用户信息注册成功!<br>";
}else{
    exit($message);
}

//数据库再去获取用户信息
$userSQL = "select * from users where user_id=$userID";
$userRes = mysqli_query($connection,$userSQL);
if($user=mysqli_fetch_array($userRes)){
    echo "你注册的用户名为:".$user['userName'];
    header("refresh:30;url=index.html");
    echo "3秒后,自动跳至首页";
}else{
    exit("用户信息注册失败!");
}
closeConnection();

?>