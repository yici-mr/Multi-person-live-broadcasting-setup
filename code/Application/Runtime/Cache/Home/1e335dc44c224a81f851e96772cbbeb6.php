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
    <link href="/Public/Home/index/css/video-js.css" rel="stylesheet">
    <script src="/Public/Home/index/js//video.js"></script>
    <script src="https://unpkg.com/videojs-contrib-hls/dist/videojs-contrib-hls.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <style>
        p {
            text-align: left;
            padding-left: 20px;
        }
        .sssss::-webkit-scrollbar {/*滚动条整体样式*/
            width: 4px;     /*高宽分别对应横竖滚动条的尺寸*/
            height: 1px;
        }
        .sssss::-webkit-scrollbar-thumb {/*滚动条里面小方块*/
            border-radius: 5px;
            -webkit-box-shadow: inset 0 0 5px rgba(0,0,0,0.2);
            background: rgba(0,0,0,0.2);
        }
        .sssss::-webkit-scrollbar-track {/*滚动条里面轨道*/
            -webkit-box-shadow: inset 0 0 5px rgba(0,0,0,0.2);
            border-radius: 0;
            background: rgba(0,0,0,0.1);
        }
    </style>
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
<div class="container projects" id = 'c1'>
    <div class="row">
        <div class="col-md-12">



                <video id="my_video_1" class="video-js vjs-default-skin vjs-big-play-centered "  style="width: 100%"   controls  width="850px" height="450px" preload="auto"
                       poster="http://live.yici.info/img/1586502796_4e39f3783dbca5988809bb1454802fef.jpg" data-setup='{  }'>
                    <?php if(is_array($pic)): foreach($pic as $key=>$v): ?><source src="<?php echo ($v['url']); ?>" type="application/x-mpegURL"><?php endforeach; endif; ?>
                </video>

        </div>
    </div>
</div>
<div class="container projects" id="c2">
    <div class="row">
    <div class="col-sm-6 col-md-6 " style="margin:0 auto">



    <video id="my_video_2" class="video-js vjs-default-skin vjs-big-play-centered "  controls  width="340px" height="200px" style="width: 100%" preload="auto"
           poster="http://live.yici.info/img/1586502796_4e39f3783dbca5988809bb1454802fef.jpg" data-setup='{  }'>
        <?php if(is_array($pic)): foreach($pic as $key=>$v): ?><source src="<?php echo ($v['url']); ?>" type="application/x-mpegURL"><?php endforeach; endif; ?>

    </video>

    </div>
         </div>
</div>
<div class="container projects" >
    <div class="row">
        <div class="col-sm-12 " style="margin:0 auto">
    <!--<div class="sssss" id="msg_list"  style="width: 100%;border:  1px solid #686868; height: 150px;overflow-y: scroll;float: left;">
    </div>-->
            <div class=" pre-scrollable sssss" style="height: 150px;width: 100%;border:  1px solid#686868"  id="msg_list">

            </div>
    <br>
        </div>
        <div class="col-sm-10" style="margin:0 auto;margin:0 auto">
            <input class="input-group" type="text" style="border:1px solid;width: 100%;height: 35px" id="msg_box" placeholder="输入弹幕....">

        </div>
        <div class="col-sm-2" style="margin:0 auto;margin:0 auto">
            <input class="btn btn-primary" style="width: 100%" type="button" value="发送" onclick="send()">
        </div>
    </div>
</div>
<script>
   var ws = new WebSocket("ws://192.168.0.105:2000");
   ws.onopen = function() {
       var room_id1 = getqust('room');
       var data = '{"room_id":"'+room_id1+'","cons":""}'
       ws.send(data);
   };

       ws.onmessage = function(e) {
           var msg=JSON.parse(e.data);
           var room_id1 = getqust('room');
           if (msg.room_id == room_id1){
               listMsg(msg.cons);
           }



   }
    function send() {
        var cons = $('#msg_box').val();
        var room_id = getqust('room');
        var data = '{"room_id":"'+room_id+'","cons":"'+cons+'"}'

        if(cons != ""){
                ws.send(data);
                $("#msg_box").val("");
            ws.onmessage = function(e) {
                var msg=JSON.parse(e.data);

                if (msg.room_id == room_id){
                    listMsg("用户"+msg.user+"："+msg.cons);
                }

            };

        }

    }
    function getqust(name){
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if(r != null){return decodeURIComponent(r[2]);}else{return null;}
    };
    function listMsg(data) {
        if(data){
            var msg_list = document.getElementById("msg_list");
            var msg = document.createElement("p");
            msg.innerHTML = data;
            msg_list.appendChild(msg);
            msg_list.scrollTop = msg_list.scrollHeight;
            $("p").css({"background-color":"#e4a97d","font-size":"200%"});
            var user_num = document.getElementById("user_num");
        }

    }







</script>
<script>
    if(screen.availWidth <= 767){
        $('#c1').css('display','none');
    }else {
        $('#c2').css('display','none');
    }

</script>
</body>
</html>