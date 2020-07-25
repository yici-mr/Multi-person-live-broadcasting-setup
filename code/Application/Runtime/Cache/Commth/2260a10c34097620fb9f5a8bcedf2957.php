<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>添加商品</title>
    <link href="../../../../Public/Commth/Index/dist/css/app.836de46e.css" rel="preload" as="style">
    <script src="../../../../Public/Home/Index/js/jquery-3.3.1.min.js"></script>
    <link href="../../../../Public/Commth/Index/dist/css/chunk-vendors.763df936.css" rel="preload" as="style">
    <link href="../../../../Public/Commth/Index/dist/js/app.21f0f929.js" rel="preload" as="script">
    <link href="../../../../Public/Commth/Index/dist/js/chunk-vendors.6ad9abe7.js" rel="preload" as="script">
    <link href="../../../../Public/Commth/Index/dist/css/chunk-vendors.763df936.css" rel="stylesheet">
    <link href="../../../../Public/Commth/Index/dist/css/app.836de46e.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="../Index/favicon.ico">


    <link rel="stylesheet" href="../../../../Public/Commth/Index/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../Public/Commth/Index/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../../Public/Commth/Index/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../../../Public/Commth/Index/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../../../Public/Commth/Index/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../../../../Public/Commth/Index/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../../../Public/Commth/Index/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="../../../../Public/Commth/Index/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="Commth.php"><img src="../../../../Public/Commth/Index/images/logo.png" alt="Logo"></a>
            <a class="navbar-brand hidden" href="Commth.php"><img src="../../../../Public/Commth/Index/images/logo2.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="Commth.php"> <i class="menu-icon fa fa-导航"></i>导航 </a>
                </li>
                <h3 class="menu-title">收入详情</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>订单</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="<?php echo U('table');?>">订单详情</a></li>
                    </ul>
                </li>
                <!--  <li class="menu-item-has-children active dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                      <ul class="sub-menu children dropdown-menu">
                          <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                          <li><i class="fa fa-table"></i><a href="table.html">Data Table</a></li>
                      </ul>
                  </li>
                  <li class="menu-item-has-children dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                      <ul class="sub-menu children dropdown-menu">
                          <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                          <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                      </ul>
                  </li>
-->

                <h3 class="menu-title">商品</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>商品</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="<?php echo U('setspot');?>">设置</a></li>
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="<?php echo U('shopdetails');?>">商店详情</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->

    <!-- Header-->
    <div data-v-4c8b4d2c="" class="app-wrapper showSidebar">



        <div data-v-4c8b4d2c="" class="main-container">
            <div data-v-4c8b4d2c="" style="width: auto;">
                <section data-v-4c8b4d2c="" class="app-main">
                    <div class="app-container">

                        <div class="el-form-item is-required">
                            <label for="category_id" class="el-form-item__label" style="width: 90px;">商店名称</label>
                            <div class="el-form-item__content" style="margin-left: 90px;">
                                <div class="el-select" ><!---->
                                    <div class="el-input el-input--suffix"><!---->
                                        <input style="width: 500px" type="text" id="shopname" placeholder="商店名称" class="el-input__inner"><!---->

                                    </div>

                                </div><!---->
                            </div>
                        </div>
                            <div class="el-form-item is-required">
                                <label for="name" class="el-form-item__label" style="width: 90px;">名称</label>
                                <div class="el-form-item__content" style="margin-left: 90px;">
                                    <div class="el-input"><!---->
                                        <input type="text" id="card" autocomplete="off" placeholder="商品名称，如：91游戏30元点卡" class="el-input__inner"><!----><!----><!----><!---->
                                    </div><!----><!---->
                                </div>
                            </div><!----><!---->
                            <div class="el-form-item is-required">
                                <label for="price" class="el-form-item__label" style="width: 90px;">售价(元)</label>
                                <div class="el-form-item__content" style="margin-left: 90px;">
                                    <div class="el-input"><!---->
                                        <input type="text" id='money' autocomplete="off" placeholder="请输入商品售价" class="el-input__inner"><!----><!----><!----><!---->
                                    </div><!----><!---->
                                </div>
                            </div>


                            <div class="el-form-item" style="margin-top: 36px;"><!---->
                                <div class="el-form-item__content" style="margin-left: 90px;">
                                    <button onclick="but()" class="el-button el-button--primary"><!----><!---->
                                        <span> 添加商品 </span>
                                    </button><!---->
                                    <span style="color: red" id="submittp"></span>
                                </div>
                            </div>

                    </div>
                </section>
            </div>
        </div>
    </div>
    <script>
        function but() {
           var shopname =  $('#shopname').val();
           var card = $('#card').val();
           var money = $('#money').val();
            if (shopname ==  ""){
                $('#submittp').text("不允许有空！");
            }else if(card == ""){
                $('#submittp').text("不允许有空！");
            }else if(money == ""){
                $('#submittp').text("不允许有空！");
            }else {
                $('#submittp').text("");
                $.ajax({
                    type:'post',
                    data:{'shopname':shopname,'card':card,'money':money},
                    url: '<?php echo U("setshops");?>',
                    success: function (data) {
                        $('#submittp').text(data['msg']);
                        setTimeout(function () {
                            window.location.href = '<?php echo U("setspot");?>'
                        },2000)

                    },
                    error:function () {
                        console.log('连接错误！');
                    }
                });
            }


        }
    </script>
    <script>
        var config = {"url":"https://www.kamiwu.cn","captcha":{"driver":"geetest","config":{"success":1,"gt":"966044e02173415ec212a67c03c434ed","challenge":"fa8322d767fcf066426b005c1d7a683f","key":"6z94nlzoazddmdg2nz6sz97gxmpag0nil"},"scene":{"auth":{"login":0,"register":1,"forget":1}}},"register":{"open":1},"apipay_open":1,"wechat_oa_open":1,"affiliate_open":0,"wechat_oa_login_open":1,"user_verify":{"open":1,"methods":[0],"show_in_withdraw":1,"need_picture":1,"alipay_price":0}};
    </script>





<!-- Right Panel -->


<script src="../../../../Public/Commth/Index/vendors/jquery/dist/jquery.min.js"></script>
<script src="../../../../Public/Commth/Index/vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="../../../../Public/Commth/Index/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../../../../Public/Commth/Index/assets/js/main.js"></script>


<script src="../../../../Public/Commth/Index/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../../../Public/Commth/Index/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../../../Public/Commth/Index/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../../../Public/Commth/Index/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="../../../../Public/Commth/Index/vendors/jszip/dist/jszip.min.js"></script>
<script src="../../../../Public/Commth/Index/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="../../../../Public/Commth/Index/vendors/pdfmake/build/vfs_fonts.js"></script>
<script src="../../../../Public/Commth/Index/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../../../../Public/Commth/Index/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../../../../Public/Commth/Index/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="../../../../Public/Commth/Index/assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>