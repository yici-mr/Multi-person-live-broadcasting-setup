<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>商户登录 -  发卡网</title>
    <script src=" ./Public/Home/Index/js/jquery-3.3.1.min.js"></script>
    <script src=" ./Public/Home/Index/js/aos.js"></script>
    <script src=" ./Public/Home/Index/js/main.js"></script>
    <script src=" ./Public/Home/Index/js/formValidator_min.js"></script>
    <script src=" ./Public/Home/Index/js/formValidatorRegex.js"></script>

    <link href=" ./Public/Home/Index/css/aos.css" rel="stylesheet" type="text/css">
    <link href=" ./Public/Home/Index/css/style.css" rel="stylesheet" type="text/css">
    <link href=" ./Public/Home/Index/css/index.css" rel="stylesheet" type="text/css">
    
    <style type="text/css">
        .top_bg {
            /*height: 100px;*/
            background: linear-gradient(90deg, #658fe1, #5449d2);
            box-shadow: 0 0 2px #60619f;
            z-index: 1001;
            position: relative;
        }
    </style>
</head>
<body class="backFFF">
    <!--头-开始-->
    <div class="head top_bg top">
        <div class="headK">
            <div class="MenuPC fr">
                <a href="index.html#" id="Home" class="MenuA fl">首页</a>
                <a href="" id="Help" class="MenuA fl">帮助中心</a>
                <a href="" id="Statement" class="MenuA fl">免责声明</a>
                <a href="" id="Contact" class="MenuA fl">联系我们</a>
                <a href="" id="OrderQ" class="MenuA fl">查询订单</a>
                <a href="" id="OrderQ" class="MenuA fl">投诉结果</a>
                <a href="<?php echo U('Index/register');?>" class="hdReg fr">注册</a>
                <a href="" class="hdLog fr">登录</a>
            </div>
            <!--wap导航 -->
            <div class="hd_nav fr"><i></i></div>
            <div class="clear"></div>
        </div>
    </div>
    <!--头-结束-->
    <!--wap-导航 -->
    <div class="wap_nav">
        <div class="wap_navK">
            <a href="index.html#" class="">首页</a>
            <a href="" class="">帮助中心</a>
            <a href="" class="">免责声明</a>
            <a href="" class="">联系我们</a>
            <a href="" class="">查询订单</a>
            <a href="<?php echo U('Index/register');?>" class="">注册</a>
            <a href="" class="">登录</a>
        </div>
    </div>
    <!--wap-结束 -->
    
<div class="Login">
        <div class="LogTit">商户登录</div>
        <div class="logK logK1">
            <div class="logIc logP1 fl"></div>
            <input class="logIn fl" id="userEmail" maxlength="50" name="userEmail" placeholder="请输入邮箱" type="text" value="">
            <div class="clear"></div><span style="color: red" id="userEmailtp"></span>
        </div>
        <div class="logK logK2">
            <div class="logIc logP2 fl"></div>
            <input class="logIn fl" id="userPass" maxlength="16" name="userPass" placeholder="请输入密码" type="password">
            <div class="clear"></div><span  style="color: red" id="userPasstp"></span>
        </div>
        <div class="logNr" style="text-align:center">
            <a href="<?php echo U('Index/register');?>" class="fl">立即注册</a>
            <a href="#" class="fr">忘记密码？</a><div class="clear"></div>
            <button onclick="submit()" class="Logreg ButAN backB1">登录</button>
            <div class="clear"></div><span style="color: red" id="submittp"></span>
        </div>

</div>
<script type="text/javascript" src=" ./Public/Home/Index/js/layer.js"></script>
<script type="text/javascript" src=" ./Public/Home/Index/js/validate.js"></script>
<script type="text/javascript">
    function submit() {
    var userEmail = $('#userEmail').val();
    var pwd = $('#userPass').val();
    var reg = /^([a-zA-Z]|[0-9])(\w|\-)+@[a-zA-Z0-9]+\.([a-zA-Z]{2,4})$/;
        if(!reg.test(userEmail)){
            $('#userEmailtp').text("邮箱格式不正确！");
        }else{
            $('#userEmailtp').text("");
        }
        if(pwd < 6){
            $('#userPasstp').text("密码长度不正确！");
        }else{
            $('#userPasstp').text("");
        }
        if(userEmail || pwd){
            $.ajax({
                type:'post',
                data:{'userEmail':userEmail,'pwd':pwd},
                url:'<?php echo U("Index/logging");?>',
                success:function (data) {
                $('#submittp').text(data['msg']);
                window.location.href ='http://127.0.0.1/Commth.php'
                },
                error:function () {
                console.log('错误')
                }
            })
        }
    }

</script>


    
    <a href="#0" class="cd-top cd-is-visible">Top</a>
    
    <script type="text/javascript">
        AOS.init({
            easing: 'ease-in',
            duration: 800,
            disable: 'mobile'
        });

        jQuery(document).ready(function ($) {

        })
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            var currentPage = '#';
            if (currentPage != '#') {
                $(currentPage).addClass("backB1 MenuAo");
            }


            //下拉
            $('.HelpNs').click(function () {
                if ($(this).find('.HelpA').is(':visible')) {
                    $(this).find('.HelpA').slideUp(100);
                } else {
                    $(this).find('.HelpA').slideDown(200);
                }
            });
        })

    </script>
    <div style="display:none">
        <script>var _hmt = _hmt || [];(function() {var hm = document.createElement("script");hm.src = "https://hm.baidu.com/hm.js?bde7b1e504d756f791bddc958cbd097a";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(hm, s);})();</script>
    </div>
</body>
</html>