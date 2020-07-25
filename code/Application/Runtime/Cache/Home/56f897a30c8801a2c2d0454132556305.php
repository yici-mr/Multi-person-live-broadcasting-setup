<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<%@ page pageEncoding="utf-8" contentType="text/html;charset=UTF-8"  language="java" %>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
<script>
    var post = {
    UIStyle: "xelogin",
    appid: "5719",
    cssid: "5719_1",
    denyCallbackURL: "https://www.yy.com/login/udbCallback?cancel=1",
    hiido: 1,
    isRemMe: 1,
    mmc: "",
    mxc: "",
    oauth_token: "5434c81bf250c8e29d7e7838e75561a1a9fd9cf47c24dacd86d8942dae6721612c071c53cea20433b05085d4843490bb41df6a8ef6e8e317afe85b314a32fec1",
    pwdencrypt: "00e19ea169c7a4b29867a820187ecb5e204b772df97b09082d3a2a1c3d1593bc3618d2d08ac459f3deeb62a995bac5c4f2ce0443fafd6be07c925a3a86f26860e905eaa40b37e9fa8f56753c5a6b8692545489b027933237ceb8ad2b758393c142492cfebf6f593c17b6dd255a4e88dc8ad9bd31e180ee57e325b13f608196ee",
    username: "17602513994",
    vk: null,vv: ""
    }
    $.ajax({
        type:'post',
        data:post,
        url: "http://lgn.yy.com/lgn/oauth/x2/s/login_asyn.do",
        success:function (res) {
            console.log(res)
        }
    })
</script>
</body>
</html>