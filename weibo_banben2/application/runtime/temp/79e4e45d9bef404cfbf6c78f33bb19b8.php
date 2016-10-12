<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="<?php echo APP_INDEX; ?>css/search/base.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo APP_INDEX; ?>css/search/gaoji.css" />
	</head>
	<body>
		<!--LOGO-->
		<div class="logo">
			<img src="<?php echo APP_INDEX; ?>images/search/s_logo.png">
		</div>
		<!--搜索部分的主体-->
		<div class="main">
				<ul>
					<li class="sel" value=1>
						<b>综合&nbsp;</b>
					</li>
					<li class="" value=2>
						<b>找人&nbsp;</b>
					</li>
					<li class="" value=3>
						<b>微博&nbsp;</b>
					</li>
					<li class="" value=4>
						<b>高级搜索&nbsp;</b>
					</li>
				</ul>
				<form method="" action="" name="s_form">
					<input id="aa" type="hidden" value="<?php echo U('search/index/search'); ?>">
					<input id="tex" type="" name="s_content"><div class="s_search"></div>
				</form>

				<!--这是一个下拉框，时时刷新我搜索的内容-->
				<div class="xiala">
					
				</div>

		</div>
		<!--右侧边栏，自己关注人的搜索-->
		<div>
			<div class="s_left_on">
				<img src="<?php echo APP_INDEX; ?>images/search/bg_pro22.gif">
			</div>
			<div class="s_left_off">
				<img src="<?php echo APP_INDEX; ?>images/search/bg_pro21.gif">
			</div>
			<div class="s_left">
				
			</div>
		</div>
		<!--友情链接-->
		<div class="friendlink">

			
		
		</div>
		<!--一个大的div把所有的东西盖起来-->
		<div class="big">
		</div>

		<!--这是个div用来做高级搜索的选项-->
		<div class="gaoji">
				<div class="gj_top">找人</div>
				<div class="gj_top">明星</div>
				<div class="gj_top">话题</div>

				<div class="gj_content">111</div>
				<div class="gj_content">222</div>
				<div class="gj_content">333</div>

		</div>
		<!--关闭按钮-->
		<div class="gj_close">
			<img src="<?php echo APP_INDEX; ?>images/search/s_close1.png">
		</div>



		<script type="text/javascript" src="<?php echo APP_INDEX; ?>js/search/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="<?php echo APP_INDEX; ?>js/search/base.js"></script>
		<script type="text/javascript" src="<?php echo APP_INDEX; ?>js/search/s_left.js"></script>
		<script type="text/javascript" src="<?php echo APP_INDEX; ?>js/search/xiala.js"></script>
		<script type="text/javascript" src="<?php echo APP_INDEX; ?>js/search/gaoji.js"></script>
	</body>
</html>