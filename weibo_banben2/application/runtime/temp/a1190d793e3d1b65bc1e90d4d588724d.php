<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>综合搜索</title>
		<link rel="stylesheet" type="text/css" href="<?php echo APP_INDEX; ?>css/search/p_top.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo APP_INDEX; ?>css/search/p_hidden.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo APP_INDEX; ?>css/search/p_gaoji.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo APP_INDEX; ?>css/search/p_condition2.css" />

	</head>
	<body>
		<div class="nav_top">
			<img class="t_log" src="<?php echo APP_INDEX; ?>images/search/search_logo.gif">
			<ul class="t_n">
				<li value="1"><b>综合&nbsp;&nbsp;</b></li>
				<li value="2" class="selected"><b>找人&nbsp;&nbsp;</b></li>
				<li value="3"><b>图片</b></li>
			</ul>
		</div>

		<div class="s_top">
			<!--这里是隐藏需要数据的地方-->
			<input type="text" name="" id="val" value="<?php echo $s_v; ?>"><div class="s_search"></div>
			<input id="aa" type="hidden" value="<?php echo U('search/person/search_nickname'); ?>">
			<input id="search_index" type="hidden" value="<?php echo U('search/person/index'); ?>">
			<input id="clear_one" type="hidden" value="<?php echo U('search/history/clear_one'); ?>">
			<input id="clear_all" type="hidden" value="<?php echo U('search/history/clear_all'); ?>">
			<input id="s_v" type="hidden" value="<?php echo $s_v; ?>">
			<input id="ur_s_c" type="hidden" value="<?php echo U('search/person/condition2'); ?>">
			<input id="ur_gj" type="hidden" value="<?php echo U('search/person/gj'); ?>">


			<ul class="t_s">
				<li value="4"><b>高级搜索&nbsp;</b></li>
				<li value="5"><b>设置&nbsp;</b></li>
				<li value="6"><b>帮助</b></li>
			</ul>

			<div class="condition1">
				&nbsp;&nbsp;
				<a href="javascript:void(0)" >全部</a>
				&nbsp;
				<a href="javascript:void(0)"><b>昵称</b></a>
				&nbsp;
				<a href="javascript:void(0)">标签</a>
				&nbsp;
				<a href="javascript:void(0)">学校</a>
				&nbsp;
				<a href="javascript:void(0)">公司</a>
			</div>
			<div class="condition2">
				&nbsp;
				<span class="dq">所有地区</span>
				<a href="javascript:void(0)" id="dq">[切换]</a>
				|	
				<a href="javascript:void(0)" id="yh">所有用户</a>
				|
				<a href="javascript:void(0)" id="xb"><?php echo !empty($s_s)?$s_s:"不限性别"; ?></a>
				|
				<a href="javascript:void(0)" id="nl"><?php echo !empty($s_a)?$s_a:"不限年龄"; ?></a>
			</div>
			<div class="history">
				<b style="font-size:13px">搜索历史</b>&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a id="do_clear_all" href="javascript:void(0)">清除</a>
				<hr>
				<div class="clear_all">
				<?php foreach($history as $v): ?>
					<div class="history_link">
						<div class="search_history" value="<?php echo $v['content']; ?>"><?php echo $v['content']; ?></div>
						<div class="clear_history" value="<?php echo $v['id']; ?>">&nbsp;X&nbsp;</div>
					</div>
					<span>&nbsp;</span>
				<?php endforeach; ?>
				</div>
			</div>
		</div>

		<div class="main">
			<div class="zw">
				<table>
				<?php if($content): foreach($content as $v): ?>
						<tr>
							<td>
								<image src="<?php echo APP_INDEX; ?>uploads/txpic/<?php echo $v['picname']; ?>" height="60px" width="80px">
							</td>
							<td>
								<a href="<?php echo U('index/persongz/index'); ?>?uid=<?php echo $v['uid']; ?>" value="<?php echo $v['uid']; ?>">昵称:<?php echo $v['nickname']; ?></a><br>
								性别:<?php echo !empty($v['sex'])?"男":"女"; ?><br>
								年龄:<?php echo $v['age']; ?><br>
								地址:<?php echo !empty($v['address'])?$v['address']:"未填写"; ?>
							</td>
						</tr><br>
					<?php endforeach; else: ?>
					<image src="<?php echo APP_INDEX; ?>images/search/no_1.png">
				<?php endif; ?>
				</table>
			</div>

		</div>

		<div class="hid">
			
			<!--切换用户-->
			<div class="h_user">
				<div class="h_user_type">
				<a href="javascript:void(0)">所有用户</a>
				</div>
				<div class="h_user_type">
				<a href="javascript:void(0)">机构认证</a>
				</div>
				<div class="h_user_type">
				<a href="javascript:void(0)">个人认证</a>
				</div>
				<div class="h_user_type">
				<a href="javascript:void(0)">普通用户</a>
				</div>
			</div>
			<!--切换性别-->
			<div class="h_sex">
				<div class="h_user_sex">
				<a href="javascript:void(0)">不限性别</a>
				</div>
				<div class="h_user_sex">
				<a href="javascript:void(0)">性别男性</a>
				</div>
				<div class="h_user_sex">
				<a href="javascript:void(0)">性别女性</a>
				</div>
			</div>
			<!--切换年龄-->
			<div class="h_age">
				<div class="h_user_age">
				<a href="javascript:void(0)">不限年龄</a>
				</div>
				<div class="h_user_age">
				<a href="javascript:void(0)">20岁以下</a>
				</div>
				<div class="h_user_age">
				<a href="javascript:void(0)">20岁~40岁</a>
				</div>
				<div class="h_user_age">
				<a href="javascript:void(0)">40岁以上</a>
				</div>
			</div>

			<!--切换地区-->
			<div class="h_city">
				<div class="h_city_top">
					<div id="h_city_l">
						&nbsp;地区:<span class="sheng"></span><span class="shi"></span>
					</div>
					<div id="h_city_r">
						注册地:
						<span class="re_city"><a href="javascript:void(0)">河北-廊坊</a></span>&nbsp;
						<span><a id="h_city_close" href="javascript:void(0)">关闭</span>
					</div>
				</div>
				<hr>
				<div class="c_list">
					
					<?php foreach($list as $v): ?>
						<a href="javascript:void(0)" value="<?php echo $v['id']; ?>"><?php echo $v['name']; ?></a>
					<?php endforeach; ?>
		
				</div>
			</div>

			<div class="p_search_hid">
				<!--这里先要遍历一个上次搜索的历史，或者推荐榜单，后台要判断有没有历史-->
				<?php foreach($hot as $v): ?>
					<a href='javasript:void(0)' class='s_input_val'><?php echo $v['content']; ?></a><br>
				<?php endforeach; ?>
			</div>
		</div>
		<!--遮盖-->
		<div class="big">
		</div>

		<div class="gjk">
			<div class="g_top">
				&nbsp;&nbsp;<span>高级搜索</span>
			</div>
			<div class="g_main">
				<form method="" action="" name="g_tj">
					<input type="hidden" class="ur_city" value="<?php echo U('search/person/city'); ?>">
					<input type="hidden" class="ur_form" value="<?php echo U('search/person/doForm'); ?>">
					<br><br>
					&nbsp;昵称:<input type="text" name="nickname" id="s_v_g"><br><br>
					&nbsp;标签:<input type="text" name="tag"><br><br>
					&nbsp;学校:<input type="text" name="school"><br><br>
					&nbsp;公司:<input type="text" name="company"><br><br>
					&nbsp;用户:<select name="g_user">
						<option value="1">所有用户</option>
						<option value="2">机构认证</option>
						<option value="3">个人认证</option>
						<option value="4">普通用户</option>
					</select>
					<br><br>
					&nbsp;地点:<span class="city"><select name="g_city" class="g_city">
						<option value="1">所有地区</option>
						<?php foreach($list as $vo): ?>
                			<option value="<?php echo $vo['id']; ?>"><?php echo $vo['name']; ?></option>
           				<?php endforeach; ?>
						
					</select>
					</span>
					<br><br>

					&nbsp;年龄:<select name="g_age" id="nl_g">
						<option value="1">不限</option>
						<option value="2">20岁以下</option>
						<option value="3">20~40岁</option>
						<option value="4">40岁以上</option>
					</select>
					<br><br>

					&nbsp;性别:<select name="g_sex" id="xb_g">
						<option value="1">不限</option>
						<option value="2">男</option>
						<option value="3">女</option>
					</select>
				</form>
				<br>
				&nbsp;<button class="tj">提交</button>
				&nbsp;<button class="qx">取消</button>
			</div>
		</div>
	<script type="text/javascript" src="<?php echo APP_INDEX; ?>js/search/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="<?php echo APP_INDEX; ?>js/search/p_base.js"></script>
	<script type="text/javascript" src="<?php echo APP_INDEX; ?>js/search/p_hidden.js"></script>
	<script type="text/javascript" src="<?php echo APP_INDEX; ?>js/search/p_gaoji.js"></script>
	<script type="text/javascript" src="<?php echo APP_INDEX; ?>js/search/p_condition2.js"></script>
	<script type="text/javascript" src="<?php echo APP_INDEX; ?>js/search/p_search.js"></script>
	<script type="text/javascript" src="<?php echo APP_INDEX; ?>js/search/p_history.js"></script>
	</body>
</html>