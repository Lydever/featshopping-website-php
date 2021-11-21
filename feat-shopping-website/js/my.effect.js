/*
* page effect js
* 
*/


// header nav a
$(function(){
    $(".navbar-nav a").mouseover(function(){
        //鼠标放上去时当前a的其他兄弟元素 颜色为白色
        $(this).siblings("a").css("color","white");
        //a 样式为蓝 出现下边宽
        $(this).css("color","#287fec");
        $(this).css("border-bottom","2px solid #287fec");
    });

    //鼠标移出时边框为none ,颜色为白
    $(".navbar-nav a").mouseout(function(){
        $(this).css("border-bottom","none");
        $(this).css("color","white");
    });

    $(".navbar-nav a").click(function(){
        $(this).css("color","#287fec");
        $(this).css("border-bottom","2px solid #287fec");
    });

});