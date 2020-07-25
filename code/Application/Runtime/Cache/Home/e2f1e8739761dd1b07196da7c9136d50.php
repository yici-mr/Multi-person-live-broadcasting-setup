<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>商户注册 -  </title>
    <meta name="keywords" content="发卡平台,发卡网,自动发卡平台,自动发卡,自动发卡网,寄售平台, ">
    <meta name="description" content=" 是一个专注于游戏、软件等虚拟商品在线交易自动发卡平台，致力于为广大商家提供卡密寄售服务，支付方式多元化，高转化率，安全稳定可靠，低费率，结算快，正规企业平台一直稳定运营。24小时不间断提供自动发卡服务，自动发卡，我们一直在路上。">
    

    <script src="./Public/Home/Index/js/jquery-3.3.1.min.js"></script>
    <script src="./Public/Home/Index/js/aos.js"></script>
    <script src="./Public/Home/Index/js/main.js"></script>
    <script src="./Public/Home/Index/js/formValidator_min.js"></script>
    <script src="./Public/Home/Index/js/formValidatorRegex.js"></script>

    <link href="./Public/Home/Index/css/aos.css" rel="stylesheet" type="text/css">
    <link href="./Public/Home/Index/css/style.css" rel="stylesheet" type="text/css">
    <link href="./Public/Home/Index/css/index.css" rel="stylesheet" type="text/css">
    
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
                <a href="#" id="Help" class="MenuA fl">帮助中心</a>
                <a href="#" id="Statement" class="MenuA fl">免责声明</a>
                <a href="#" id="Contact" class="MenuA fl">联系我们</a>
                <a href="#" id="OrderQ" class="MenuA fl">查询订单</a>
                <a href="#" id="OrderQ" class="MenuA fl">投诉结果</a>
                <a href="#" class="hdReg fr">注册</a>
                <a href="<?php echo U('Index/login');?>" class="hdLog fr">登录</a>
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
            <a href="" class="">首页</a>
            <a href="" class="">帮助中心</a>
            <a href="" class="">免责声明</a>
            <a href="" class="">联系我们</a>
            <a href="" class="">查询订单</a>
            <a href="" class="">注册</a>
            <a href="<?php echo U(Index/login);?>" class="">登录</a>
        </div>
    </div>
    <!--wap-结束 -->
    
<div class="register" >
    <div class="LogTit">商户注册</div>
        <input data-val="true" data-val-number="字段 parentId 必须是一个数字。" data-val-required="parentId 字段是必需的。" id="parentId" name="parentId" type="hidden" value="0">
        <div class="Regtit">卖家注册通道,买家请勿注册,谢谢</div>
        <div class="logK logK5">
            <div class="logIc logP4 fl"></div>
            <input class="logIn fl" id="userEmail" maxlength="50" name="userEmail" placeholder="请输入邮箱" type="text" value="">
            <div class="clear"></div><span id="userEmailTip" class="onShow"> </span>
        </div>

        <div class="logK logK2">
            <div class="logIc logP2 fl"></div>
            <input class="logIn fl" id="userPass" maxlength="16" name="userPass" placeholder="请输入密码" type="password">
            <div class="clear"></div><span id="userPassTip" class="onShow"> </span>
        </div>
        <div class="logK logK3">
            <div class="logIc logP2 fl"></div>
            <input class="logIn fl" id="ConfirmPassword" maxlength="16" name="ConfirmPassword" placeholder="请输入确认密码" type="password">
            <div class="clear"></div><span id="ConfirmPasswordTip" class="onShow"> </span>
        </div>
        <button onclick="submit()" class="Logreg ButAN backB1" style="border:none">注册</button>

    <div class="Regf">已有账号，<a href="login.html" class="">现在登录</a></div>

</div>
    <script>
        function submit() {
            var Email =  $('#userEmail').val();
            var pwd = $('#userPass').val();
            var ConfirmPassword = $('#ConfirmPassword').val()
            var reg = /^([a-zA-Z]|[0-9])(\w|\-)+@[a-zA-Z0-9]+\.([a-zA-Z]{2,4})$/;
            if(!reg.test(Email)){
                $('#userEmailTip').text("邮箱格式不正确！");
            }else{
                $('#userEmailTip').text("");
            }
            if(!pwd && pwd < 6){
                $('#userPassTip').text("密码不得小于6位！");
            }else {
                $('#userPassTip').text("");
            }
            if ( pwd != ConfirmPassword){
                $('#ConfirmPasswordTip').text("密码不一致！");
            }else {
                $('#ConfirmPasswordTip').text("");
                if(Email || pwd || ConfirmPassword){
                    $.ajax({
                        type:"post",
                        data:{'Email':Email,'pwd':pwd,'ConfirmPassword':ConfirmPassword},
                        url:'<?php echo U("index/reg");?>',
                        success:function (data) {
                            if (data['msg'] == 1){
                                window.location.href = '<?php echo U("Index/login");?>'

                            }else {
                                alert('错误！')
                            }

                        },
                        error:function () {
                            console.log('失败')
                        }
                    })
                }

            }

        }
    </script>
<script type="text/javascript" src="./Public/Home/Index/js/layer.js"></script>


    
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