<meta charset="UTF-8">
<?php

function upload($file,$filePath){
    $error  = $file['error'];
    switch ($error) {
        case 0:
            $fileName = $file['name'];
            $fileTemp = $file['tmp_name'];
            $dest = $filePath.'/'.$fileName;
            move_uploaded_file($fileTemp,$dest);
            return '文件上传成功!';

        case 1:
            return '文件过大!';
        case 2:
            return '文件超过了form表单中的限制值!';
        case 3:
            return '附件只有部分被上传!';
        case 4:
            return '没有选择文件上传!';
    }
}
?>