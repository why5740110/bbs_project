<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>风险管理平台</title>
<link href="<?php echo APP_PUBLIC; ?>/jui/themes/css/login.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="login">
		<div id="login_header">
			<h1 class="login_logo">
				<a href="http://demo.dwzjs.com"><img src="<?php echo APP_PUBLIC; ?>/jui/themes/default/images/login_logo.gif" /></a>
			</h1>
			<div class="login_headerContent">
				<div class="navList">
					<ul>
						<li><a href="#">设为首页</a></li>
						<li><a href="http://bbs.dwzjs.com">反馈</a></li>
						<li><a href="doc/dwz-user-guide.pdf" target="_blank">帮助</a></li>
					</ul>
				</div>
				<h2 class="login_title"><img src="<?php echo APP_PUBLIC; ?>/jui/themes/default/images/login_title.png" /></h2>
			</div>
		</div>
		<div id="login_content">
			<div class="loginForm">
				<form action="<?php echo U('Male/doLogin'); ?>" method="post">
					<p>
						<label>用户名：</label>
						<input type="text" name="username" size="10" class="login_input" />
					</p>
					<p>
						<label>密码：</label>
						<input type="password" name="passwd" size="10" class="login_input" />
					</p>
					<p>
						<label>验证码：</label>
						<input class="code" name="code" type="text" size="5" />
						<span><img src="<?php echo U('Male/verify'); ?>" alt="" width="75" height="24" onclick="this.src='<?php echo U('Male/verify'); ?>?a='+Math.random();" /></span>
					</p>
					<div class="login_bar">
						<input class="sub" type="submit" value=" " />
					</div>
                    <br/><br/>
                    <div style="color:red;text-align:center;"><?php echo (isset($errorinfo) && ($errorinfo !== '')?$errorinfo:""); ?></div>
				</form>
			</div>
			<div class="login_banner"><img src="<?php echo APP_PUBLIC; ?>/jui/themes/default/images/login_banner.jpg" /></div>
			<div class="login_main">
                <a href="__APP__/Home/Index/index">前台</a>
			</div>
		</div>
		<div id="login_footer">
			Copyright &copy; 2009 www.dwzjs.com Inc. All Rights Reserved.
		</div>
	</div>
</body>
</html>