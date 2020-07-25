<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="./Public/Commth/Index/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Public/Commth/Index/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./Public/Commth/Index/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="./Public/Commth/Index/vendors/flag-icon-css/css/flag-icon.min.css">
    <script src=" ./Public/Home/Index/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="./Public/Commth/Index/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="./Public/Commth/Index/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="./Public/Commth/Index/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="./Public/Commth/Index/assets/css/style.css">

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
                <a class="navbar-brand" href="Commth.php"><img src="./Public/Commth/Index/images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="Commth.php"><img src="./Public/Commth/Index/images/logo2.png" alt="Logo"></a>
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

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>导航</h1>
                    </div>
                </div>
            </div>

        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">数据表</strong>
                            </div>
                            <div class="card-body">
                                <table  class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>收货方式</th>
                                            <th>订单</th>
                                            <th>时间</th>
                                            <th>支付状态</th>
                                        </tr>
                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="./Public/Commth/Index/vendors/jquery/dist/jquery.min.js"></script>
    <script src="./Public/Commth/Index/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="./Public/Commth/Index/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./Public/Commth/Index/assets/js/main.js"></script>


    <script src="./Public/Commth/Index/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="./Public/Commth/Index/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="./Public/Commth/Index/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="./Public/Commth/Index/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="./Public/Commth/Index/vendors/jszip/dist/jszip.min.js"></script>
    <script src="./Public/Commth/Index/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="./Public/Commth/Index/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="./Public/Commth/Index/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="./Public/Commth/Index/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="./Public/Commth/Index/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="./Public/Commth/Index/assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>