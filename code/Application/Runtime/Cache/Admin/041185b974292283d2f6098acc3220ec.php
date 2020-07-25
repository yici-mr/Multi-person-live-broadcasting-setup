<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<script type="text/javascript" src="./Public/Admin/Index/js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="./Public/Admin/Index/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="./Public/Admin/Index/css/bootstrap.min.css" />

<body>

<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-body">
					<h4 class="modal-title" align="center">登录框</h4>
					<br/>
					<div class="form-horizontal" >
						<div class="form-group">
							<label for="name" class="col-sm-offset-2 col-sm-2 control-label">账号</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" id="name" placeholder="请输您的入账号">
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="col-sm-offset-2 col-sm-2 control-label">密码</label>
							<div class="col-sm-5">
								<input type="password" class="form-control" id="password" placeholder="请输入您的密码">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-5">
								<button onclick="buts()"class="btn btn-default btn-block btn-primary">登录</button>
								<span id="logs" style="color: red"></span>
							</div>
						</div>
						</div>
			</div>
			<div class="modal-footer">
			</div>
		</div>
		<!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
	function buts() {
		var name = $('#name').val();
		var pwd  = $('#password').val();
		$.ajax({
			type:'post',
			data:{'name':name,'pwd':pwd},
			url:'<?php echo U("logging");?>',
			success:function (data) {
				if(data['msg'] == 1){
					window.location.href = '<?php echo U("table");?>'
				}else {
					$('#logs').text(data['msg'])
				}

			}
		})
	}
</script>
<script type="text/javascript">
$(function(){


		$('#myModal').modal('show') //显示模态框

	
});
</script>
</body>
</html>