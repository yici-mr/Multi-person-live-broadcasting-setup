<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>直播</title>
    <link href="/Public/Home/index/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-3.4.1.min.js"></script>
    <script src="/Public/Home/index/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">直播</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

                <a class="navbar-brand" href="#">关于</a>
                <!--<div class="form-group">
                    关于
                    <input type="email" placeholder="邮箱" class="form-control">
                </div>-->
                <div class="form-group">
                    <!-- <input type="password" placeholder="密码" class="form-control">-->
                 </div>
                <!--<button type="submit" class="btn btn-success">登录</button>-->

         </div>
     </div>
 </nav>
 <div class="jumbotron masthead">
 </div>


 <div class="container projects">
 <div class="row">


     <div class="col-sm-3 ">
         <div class="thumbnail ">
             <a href="<?php echo U(live,'room=01');?>">
                 <img class="lazy" src="/Public/Home/index/img/job.jpg"  >
             </a>
             <div class="caption">
                 <h3>
                     <a href="" ><br></a>
                 </h3>
                 <p><h4>测试</h4></p>
             </div>
         </div>
     </div>
     <div class="col-sm-3 ">
         <div class="thumbnail ">
             <a href="<?php echo U(live,'room=02');?>">
                 <img class="lazy" src="/Public/Home/index/img/game.jpg"  >
             </a>
             <div class="caption">
                 <h3>
                     <a href="" ><br></a>
                 </h3>
                 <p><h4>游戏</h4></p>
             </div>
         </div>
     </div>
     </div>
 </div>

 </body>
 </html>