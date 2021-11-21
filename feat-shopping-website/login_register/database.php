<meta charset="UTF-8">

<?php

// $connection = mysqli_connect('localhost','root','') or die('mysql连接服务器失败!');
// $db_selected = mysqli_select_db($connection,'registert') or die('mysql数据库连接失败');
// mysqli_query($connection,'set names utf8');

header("content-type:text/html;charset=utf8");
$connection = null;
function getConnection(){
    $hostname = 'localhost';
    $database = 'register';
    $userName = 'root';
    $password = '';
    global $connection;
    $connection = @mysqli_connect($hostname,$userName,$password)or die(mysqli_error());
    mysqli_query($connection,'set names utf8');
    @mysqli_select_db($connection,$database) or die(mysqli_error());
}

function closeConnection(){
    global $connection;
    if($connection){
        mysqli_close($connection) or die(mysqli_error());
    }
}

?>