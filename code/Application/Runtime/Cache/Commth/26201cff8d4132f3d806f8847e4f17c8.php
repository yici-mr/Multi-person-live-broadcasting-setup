<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title></title>
    <!--    模版页面样式文件开始-->
    <link href="../../../../Public/Commth/Index/css/pay_basic.css" rel="stylesheet" type="text/css">
	  <link href="../../../../Public/Commth/Index/css/thickbox.css" rel="stylesheet" type="text/css">
		<link href="../../../../Public/Commth/Index/css/tc.css" rel="stylesheet" type="text/css">
    <!--    模版页面样式文件结束-->
    <!--    点击购买遮罩弹窗开始-->
    <link href="../../../../Public/Commth/Index/css/nyro.css" rel="stylesheet" type="text/css">
    <script src="../../../../Public/Commth/Index/js/jquery.min.js"></script>
    <script src="../../../../Public/Commth/Index/js/nyro.js"></script>
    <!--    点击购买遮罩弹窗结束-->
    <!--    核心文件开始-->
    <script src="../../../../Public/Commth/Index/js/woodyapp.js"></script>
    <!--    核心文件结束-->
    <!--    支付方式样式文件开始-->
 
	    <script src="../../../../Public/Commth/Index/js/layer.js"></script>
    <script src="../../../../Public/Commth/Index/js/pay3.js"></script>
	<script src="../../../../Public/Commth/Index/js/thickbox.js"></script>

    <!--    支付方式样式文件结束-->
 <style>
a:hover,a:active,a:focus{color:#ffffff;}
.ismianze{color:#ff9b06;cursor:pointer;}
.xxsmbox{ width:1048px; height:auto; overflow:hidden; border:#CCC solid 1px; margin-top:20px; background:#FFF}
.center{ margin:0 auto}
.mzsm1{ width:780px; height:auto; line-height:29px; color:#252525; font-size:13px; padding:15px 0;}
.dyxy{ width:1000px; height:40px; line-height:40px; text-align:center; margin-top:10px}

</style>

	<meta name="robots" content="nofollow">
</head>

<script>
    var user_popup_message = '0';
    var is_display = '0';
    var userid =153327;
    var cateid =0;
       
 var static_url = 'http://www.bxfaka.com';
        var dis_pwd_content = '<div style="padding:10px;color:#cc3333;line-height:24px"><p style="float:left;font-size:14px;font-weight:bold;color:blue;">访问密码：</p><div style="float:right; font-size:14px; padding-left:20px;"><a href="#" style="color:#0064ff;text-decoration:none;display:inline-block;display:none;background:url(/./Public/Commth/Index/buy/2017lanse/images/x.png) left no-repeat;padding-left:15px;" class="nyroModalClose">关闭</a></div><p style="clear:both;font-size:12px;font-weight:bold;color:red;"><input type="password" name="pwdforbuy" class="input" maxlength="20"> <input type="submit"  onclick="verify_pwdforbuy()" id="verify_pwdforbuy" style="font-size:12px;padding:3px 3px" value="验证密码"> <span id="verify_pwdforbuy_msg" style="display:none"><img src="/./Public/Commth/Index/link/2017lanse/images/load.gif"> 正在验证...</span><ul><li>1.本商品购买设置了安全密码</li><li>2.只有成功验证密码后才能继续购买</li></ul></p></div>';
    var goodid =0;
    var is_contact_limit =8;
    var is_contact_limit_default =8;
    var limit_quantity_tip = '无法修改购买数量，是因为本商品限制了购买数量。';

		


function testDisplay()   
{   
    var divD = document.getElementById("testD");   
    if(divD.style.display=="none")   
    {   
        divD.style.display = "block";   
    }   
    else   
    {   
        divD.style.display = "none";   
    }  
	var c = window.document.body.scrollHeight;
	window.scroll(0,c);  
}   
</script>


<body>


<div class="top_bg">
    <div class="container">
        <!--顶部导航-->
        <div class="top">
		
            <div class="logo"><img src="../../../../Public/Commth/Index/picture/logo.png" alt="" style="margin-top: 5px"></div>
            <div class="main_menu">
                <ul>
                    <li><a href="../Index/index.html">首页</a></li>
                    <li><a href="orderquery2.html">订单查询</a></li>
                    <!--<li><a href="/myorders">购买记录</a></li>-->
		<!--li><a href="/report?uid=153327&t=1&keepThis=true&TB_iframe=true&height=350&width=500" class="thickbox">投诉此商家</a></li-->
			<li><a href="#" target="_blank">投诉此商家</a></li>


                </ul>
				  <div style="clear:both"></div>
            </div>
        </div>

        <div class="main_bg">
            <form name="p" method="post" action="/req" target="_blank" class="nyroModal">
		
		
                <!--选择商品-->
                <div class="title"><img src="../../../../Public/Commth/Index/picture/title1.png" alt=""></div>
                <!--选择商品表单-->
                <div class="choose_good_form">

                                            <div class="my_box">
                            <div class="my_left">商品分类：</div>
                            <div class="my_right">
                                                                    <select name="cateid" id="cateid" onchange="selectcatei()">
                                        <option value="">请选择分类</option>
                                                                        <?php if(is_array($pic2)): foreach($pic2 as $key=>$v): ?><option  id="shop"><?php echo ($v); ?></option><?php endforeach; endif; ?>

                                                                                   </select>
                                                            </div>
                        </div>
                                        <div class="my_box">
                        <div class="my_left">商品名称：</div>
                        <div class="my_right">

                                   <input type="text" readonly ='readonly' id="classify">

                                                    </div>
                    </div>
                    <input type="hidden" name="userid" value="153327">
                    <input type="hidden" name="token" value="1584868394">
                    <input type="hidden" name="linkid" value="BE738EB4B83446C4">
                    <input type="hidden" name="cardNoLength" value="0">
                    <input type="hidden" name="cardPwdLength" value="0">
                    <input type="hidden" name="is_discount" id="is_discount" value="0">
					<input type="hidden" name="is_user_sxf" id="is_user_sxf" value="0">	
					<input type="hidden" name="is_user_sxffy" id="is_user_sxffy" value="0">						
                    <input type="hidden" name="coupon_ctype" value="0">
                    <input type="hidden" name="coupon_value" value="0">
                    <input type="hidden" name="sms_price" value="0">
					
						<input class="contact_limit" type="hidden" name="is_contact_limit" value="8">
                    <div class="my_box">
                        <div class="my_left">商品单价：</div>
                        <div class="my_right"><span class="big_text" id="price">元</span>
						<a href="javascript:void(0)" id="isdiscount_span" style="padding-left:15px; display:none">查看批发价格</a></div>
						<!--a style="display:none;top: 10px;" id="isdiscount_span" class="spsm" >[ 批发优惠 ]</a-->
						 
                    </div>
					 <div id="discountdetail" style="display:none;"></div>
 <script>
                    /*
                     * 显示批发优惠价格
                     */
                    $("#isdiscount_span").hover(
                        function () {
                            var index = layer.tips($("#discountdetail").html(), this, {
                                tips: [2, '#4B4B4B'],
                                time: 0
                            });
                            $(this).attr("data-index", index);
                        },
                        function () {
                            layer.close($(this).attr("data-index"));
                        });
                </script>
                    <script>
                        function selectcatei() {
                            var shop = $('#cateid').val()
                            var reg = new RegExp("(^|&)" + 'id' + "=([^&]*)(&|$)", "i");
                            var r = window.location.search.substr(1).match(reg);
                            $.ajax({
                                type:'post',
                                data:{'shop':shop,'id':unescape(r[2])},
                                url:'<?php echo U(classify);?>',
                                success:function (data) {
                                    $('#classify').val(data['data']['card']);
                                    $('#price').text(data['data']['money'])
                                console.log(data['data']);
                                },
                                errer:function () {

                                }

                            })
                            //if (r != null) return unescape(r[2]);

                        }
                    </script>
		  <div id="discountdetail" style="display:none;"></div>
                    <input type="hidden" name="paymoney" value="">
                    <input type="hidden" name="danjia" value="">
                    <div class="my_box">
                        <div class="my_left">购买数量：</div>
                        <div class="my_right" style="position: relative">
                            <input name="quantity" onkeyup="changequantity()" type="text" value="1">
                            <span class="green" id="goodInvent" style="position: absolute;right: 0;top:0"></span>
                        </div>
                    </div>
                    <div class="my_box">
                        <div class="my_left">联系方式：</div>
                        <div class="my_right">
                            <input class="phone_num" id="contact" type="text" placeholder="必须为QQ号码">
                        </div>
                    </div>









                </div>
                <!--卖家信息-->
                <div class="seller_info">
                    <h3>商家信息</h3>
                    <p><br>商家网站： <a href="javascript:;" target="_blank" style="color: #fff">点击浏览</a><br>商品类型： 数字卡密<br>发货类型： 自动发货

                </div>
                <div class="clear"></div>
                <!--付款方式-->
                <div class="title"><img src="../../../../Public/Commth/Index/picture/title2.png" alt=""></div>
                <div class="pay_box">

                    <input type="radio" style="display:none" name="paytype" value="bank" id="bank">
                    <input type="radio" style="display:none" name="paytype" value="alipay" id="alipay" checked="">

                    <!--                扫码支付-->
                    <div class="pay_list1">
                        <script>
                            //console.log();
                        </script>
                                                    <label class="lab3 checked2">
                                <input name="pid" value="alipay" type="radio" checked="">
                                <img src="../../../../Public/Commth/Index/picture/ALIPAY.jpg" width="142" height="42">
                            </label>
                                                                                                    <label class="lab3">
                                <input name="pid" value="alipay" type="radio">
                                <img src="../../../../Public/Commth/Index/picture/alihb.jpg" width="142" height="42">
                            </label>
                                                                            <label class="lab3">
                                <input name="pid" value="weixin" type="radio">
                                <img src="../../../../Public/Commth/Index/picture/WEIXIN.jpg" width="142" height="42">
                            </label>
                                            </div>
                    <!--                网银支付-->
                    




                        <input onclick="plays()" class="check_pay" value="确认支付">


                </div>
                <div class="clear"></div>
            </form>

        </div>
    </div>
</div>
 <style type="text/css">

        body .layui-layer-demo .layui-layer-content{
           color: #d80d0d;
        }
 </style> 
<script>
    function plays() {
        var cateid = $('#cateid').val();
       var classify =  $('#classify').val();
       var price =  $('#price').text();
       var qq = $('#contact').val();
        var reg = new RegExp("(^|&)" + 'id' + "=([^&]*)(&|$)", "i");
        var r = window.location.search.substr(1).match(reg);
        $.ajax({
            type:'post',
            data:{'shop':cateid,'id':unescape(r[2]),'classify':classify,'price':price,'qq':qq},
            url:'<?php echo U(play);?>',
            success:function (data) {
                window.location.href = "<?php echo U('error');?>"
            },
            errer:function () {

            }

        })
    }
</script>
<script>


jQuery(document).ready(function($) {
	//查询订单
	$('.tc_QueT a').click(function(){		
		if(!$(this).hasClass('tc_QueTao')){
			$('.tc_QueT a').removeClass('tc_QueTao');
			$(this).addClass('tc_QueTao');
			$('.tc_QueD').css('display','none');
			$('.'+$(this).attr('title')).css('display','block');
		}
	})
	
	$('.close').click(function(){
		$('.tc_TcBJ').fadeOut(100);
		$('.tc_TcK').slideUp(200);
	})
})
	

    function is_pwd_need() else{
            $("input[name='is_pwdforsearch']").val("");
        }
        var reg = /^([0-9A-Za-z]+){6,20}$/;
        if (pwdforsearch1 != '' && !reg.test(pwdforsearch1)) {
            layer.msg('请填写6-20位取卡密码！',{
                icon:2,
                time:2000,
            });
            $('[name=pwdforsearch1]').focus();
            return false;
        }
    }
    function is_pwd_not_need() else{
            $("input[name='is_pwdforsearch']").val("");
        }
        var reg = /^([0-9A-Za-z]+){6,20}$/;
        if (pwdforsearch2 != '' && !reg.test(pwdforsearch2)) {
            layer.msg('请填写6-20位取卡密码！',{
                icon:2,
                time:2000,
            });
            $('[name=pwdforsearch2]').focus();
            return false;
        }
    }
    function js_check_contact() $/;
        if (contact == '' || !reg.test(contact)) {
            layer.msg('请填写至少6位联系方式！',{
                icon:2,
                time:2000,
            });
            $('[name=contact]').focus();
            return false;
        }
    }
    function checkCoupon2() {
        var couponcode = $.trim($('[name=couponcode]').val());
        if (cateid == 0) {
            cateid = $('#cateid').val();
        }
        $('#checkcoupon').show();
        $.post('/ajax/checkcoupon', {
            couponcode: couponcode,
            userid: userid,
            cateid: cateid,
            t: new Date().getTime()
        }, function (data) {
            if (data) {
                data = eval(data);
                if (data.result == 0) {
                    $('#checkcoupon').html(data.msg);
                    $('[name=is_coupon]').val("0");//更新部分
                } else if (data.result == 1) {
                    $('[name=coupon_ctype]').val(data.ctype);
                    $('[name=coupon_value]').val(data.coupon);
                    $('[name=is_coupon]').val("1");//更新部分
                    $('#checkcoupon').html('<span class="blue">此优惠券可用</span>');
                    goodschk();
                } else {
                    $('#checkcoupon').html('验证失败！');
                }
            }
        }, "json");
    }
    //    $('input[name="is_rev_sms"]').click(function () {
    //        if ($(this).is(':checked')) {
    //            $('[name=sms_price]').val(0.1);
    //        } else {
    //            $('[name=sms_price]').val(0);
    //        }
    //        goodDiscount();
    //        goodschk();
    //        updateContactLimit();
    //    });
	
    /* $('#submit').click(function () {
        var contact = $.trim($("input[name='contact']").val());
        var reg = /^([0-9A-Za-z]+){6,20}$/;
        if (contact == '' || contact.length < 6) {
            layer.msg('请填写至少6位联系方式！',{
                icon:2,
                time:2000,
            });
            $('[name=contact]').focus();
            return false;
        }
    }); */
	
	   $('#is_rev_sms').click(function(){
            if($(this).attr('checked')){
                $('.phone_num').focus().attr('placeholder','必须为手机号码');
				$('.contact_limit').focus().attr('value','7');
            }
            else{
											
                $('.phone_num').blur().attr('placeholder', '必须为QQ号码');
				$('.contact_limit').focus().attr('value','8');
            }
        });
</script>
<div class="foot">Copyright © 河南仟狐信息技术有限公司. All Rights Reserved. 2018 联动发卡  版权所有</div>
</body>