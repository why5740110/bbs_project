<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>用户注册</title>
		<link rel="stylesheet" type="text/css" href="<?php echo APP_INDEX; ?>css/register/base.css">
	</head>
	<body>
		<div class="main">
			<form action="" method="" name="user">
				<input type="hidden" id="ur" value="<?php echo U('register/Index/judge'); ?>">
				<input type="hidden" id="ur2" value="<?php echo U('register/Index/doReg'); ?>">
				<input type="hidden" id="ur3" value="<?php echo U('login/Index/index'); ?>">
				<b>用户帐号:</b><input type="text" name="username" id="regname">
				<span id="name">请输入帐号</span>
				<br><br>
				<b>用户密码:</b><input type="password" name="pass1" id="regpwd1">
				<span id="pw1">请输入您的密码</span>
				<br><br>
				<b>确认密码:</b><input type="password" name="pass2" id="regpwd2">
				<span id="pw2">请确认您的密码</span>
				<br><br>
				<b>电子邮箱:</b><input type="text" name="email" id="email">
				<span id="emaildiv">请输入您的电子邮箱</span>
				<br><br>
				<!--验证码-->
				<b>验 证 码:</b>
				<input class="code" id="code" name="code" type="text" size="5" />
				<span><img src="<?php echo U('register/Index/verify'); ?>" alt="" width="75" height="24" onclick="this.src='<?php echo U('register/Index/verify'); ?>?a='+Math.random();" /></span>
			</form><br>
			
			
			&nbsp;&nbsp;&nbsp;&nbsp;
			<button id="regbtn" disabled="true">注册</button>
			&nbsp;&nbsp;
			<button id="lgbtn">登录</button>
		</div>
		<script src="<?php echo APP_INDEX; ?>js/register/base.js"></script>
		<script src="<?php echo APP_INDEX; ?>js/register/xmlhttprequest.js"></script>
		<script>
			var lg = document.getElementById('lgbtn');
			lg.onclick = function(){
				window.location.href="<?php echo U('login/index/index'); ?>";
			}
		</script>
	</body>
</html>