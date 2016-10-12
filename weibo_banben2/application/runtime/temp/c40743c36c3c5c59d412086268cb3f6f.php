<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>网站后台管理</title>
	<link href="<?php echo APP_PUBLIC; ?>/jui/themes/default/style.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="<?php echo APP_PUBLIC; ?>/jui/themes/css/core.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="<?php echo APP_PUBLIC; ?>/jui/themes/css/print.css" rel="stylesheet" type="text/css" media="print"/>
	<link href="<?php echo APP_PUBLIC; ?>/jui/uploadify/css/uploadify.css" rel="stylesheet" type="text/css" media="screen"/>
	<!--[if IE]>
	<link href="<?php echo APP_PUBLIC; ?>/jui/themes/css/ieHack.css" rel="stylesheet" type="text/css" media="screen"/>
	<![endif]-->

	<!--[if lte IE 9]>
	<script src="<?php echo APP_PUBLIC; ?>/jui/js/speedup.js" type="text/javascript"></script>
	<![endif]-->

	<script src="<?php echo APP_PUBLIC; ?>/jui/js/jquery-1.7.2.js" type="text/javascript"></script>
	<script src="<?php echo APP_PUBLIC; ?>/jui/js/jquery.cookie.js" type="text/javascript"></script>
	<script src="<?php echo APP_PUBLIC; ?>/jui/js/jquery.validate.js" type="text/javascript"></script>
	<script src="<?php echo APP_PUBLIC; ?>/jui/js/jquery.bgiframe.js" type="text/javascript"></script>
	<script src="<?php echo APP_PUBLIC; ?>/jui/xheditor/xheditor-1.2.1.min.js" type="text/javascript"></script>
	<script src="<?php echo APP_PUBLIC; ?>/jui/xheditor/xheditor_lang/zh-cn.js" type="text/javascript"></script>
	<script src="<?php echo APP_PUBLIC; ?>/jui/uploadify/scripts/jquery.uploadify.js" type="text/javascript"></script>

	<!-- svg图表  supports Firefox 3.0+, Safari 3.0+, Chrome 5.0+, Opera 9.5+ and Internet Explorer 6.0+ -->
	<script type="text/javascript" src="<?php echo APP_PUBLIC; ?>/jui/chart/raphael.js"></script>
	<script type="text/javascript" src="<?php echo APP_PUBLIC; ?>/jui/chart/g.raphael.js"></script>
	<script type="text/javascript" src="<?php echo APP_PUBLIC; ?>/jui/chart/g.bar.js"></script>
	<script type="text/javascript" src="<?php echo APP_PUBLIC; ?>/jui/chart/g.line.js"></script>
	<script type="text/javascript" src="<?php echo APP_PUBLIC; ?>/jui/chart/g.pie.js"></script>
	<script type="text/javascript" src="<?php echo APP_PUBLIC; ?>/jui/chart/g.dot.js"></script>



	<!-- 可以用dwz.min.js替换前面全部dwz.*.js (注意：替换是下面dwz.regional.zh.js还需要引入)-->
	<script src="<?php echo APP_PUBLIC; ?>/jui/js/dwz.min.js" type="text/javascript"></script>

	<script src="<?php echo APP_PUBLIC; ?>/jui/js/dwz.regional.zh.js" type="text/javascript"></script>

	<script type="text/javascript">
	$(function(){
		DWZ.init("<?php echo APP_PUBLIC; ?>/jui/dwz.frag.xml", {
			//loginUrl:"login_dialog.html", loginTitle:"登录",	// 弹出登录对话框
			//loginUrl:"login.html",	// 跳到登录页面
			statusCode:{ ok:200, error:300, timeout:301}, //【可选】
			pageInfo:{ pageNum:"pageNum", numPerPage:"numPerPage", orderField:"_order", orderDirection:"_sort"}, //【可选】
			debug:false,	// 调试模式 【true|false】
			callback:function(){
				initEnv();
				$("#themeList").theme({themeBase:"<?php echo APP_PUBLIC; ?>/jui/themes"}); // themeBase 相对于index页面的主题base路径
			}
		});
	});

	</script>
</head>
	
<body scroll="no">
	<div id="layout">
		<div id="header">
			<div class="headerNav">
				<a class="logo" href="http://j-ui.com">标志</a>
				<ul class="nav">
					
					<li><a href="#">你好！<?php echo (\think\Session::get('adminuser')['username'] !== ''?\think\Session::get('adminuser')['username']:""); ?></a></li>
					<li><a href="http://weibo.com/dwzui" target="_blank">微博</a></li>
					<li><a href="<?php echo U('Male/logout'); ?>">退出</a></li>
				</ul>
				<ul class="themeList" id="themeList">
					<li theme="default"><div class="selected">蓝色</div></li>
					<li theme="green"><div>绿色</div></li>
					<li theme="purple"><div>紫色</div></li>
					<li theme="silver"><div>银色</div></li>
					<li theme="azure"><div>天蓝</div></li>
				</ul>
			</div>

			<!-- navMenu -->
			
		</div>

		<div id="leftside">
			<div id="sidebar_s">
				<div class="collapse">
					<div class="toggleCollapse"><div></div></div>
				</div>
			</div>
			<div id="sidebar">
				<div class="toggleCollapse"><h2>主菜单</h2><div>收缩</div></div>

			
				<div class="accordion" fillSpace="sidebar">
					<!-- 网站菜单 -->
					
					
					<div class="accordionHeader">
						<h2><span>Folder</span>学生管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder collapse">
                            <li><a>学生信息管理</a>
                                <ul>
                                    <li><a href="<?php echo U('Stu/index'); ?>" target="navTab" rel="stulist">浏览学生信息</a></li>
                                    <li><a href="<?php echo U('Stu/add'); ?>" target="dialog" rel="addstu">添加学生信息</a></li>
                                </ul>
                            </li>
						</ul>
					</div>

                    <div class="accordionHeader">
					<h2><span>Folder</span>用户管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder collapse">
                            <li><a>用户信息管理</a>
                                <ul>
                                    <li><a href="<?php echo U('User/index'); ?>" target="navTab" rel="stulist">浏览用户信息</a></li>
                                    <li><a href="<?php echo U('user/add'); ?>" target="dialog" rel="addstu">添加用户信息</a></li>
                                </ul>
                            </li>
						</ul>
					</div>
                    
                    <div class="accordionHeader">
						<h2><span>Folder</span>微博管理</h2>
					</div>
                    <div class="accordionContent">
						<ul class="tree treeFolder collapse">
							<li><a href="<?php echo U('Weibo/index'); ?>" target="navTab" rel="weibolist" title="微博浏览">浏览微博</a></li>
							<li><a href="<?php echo U('Weibo/wb_hsz'); ?>" target="navTab" rel="wb_hsz_list" title="微博浏览">微博回收站浏览</a></li>
						</ul>
					</div>
					
					<div class="accordionHeader">
						<h2><span>Folder</span>友链管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder collapse">
                            <li><a>友链管理</a>
                                <ul>
                                    <li><a href="<?php echo U('Link/index'); ?>" target="navTab" rel="linkList">浏览友链</a></li>
                                    <li><a href="<?php echo U('Link/add'); ?>" target="dialog" rel="addlinkList">添加友链</a></li>
                                </ul>
                            </li>
						</ul>
					</div>

					<!--热点搜索-->
					<div class="accordionHeader">
						<h2><span>Folder</span>热搜管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder collapse">
                            <li><a>热搜管理</a>
                                <ul>
                                    <li><a href="<?php echo U('Hot/index'); ?>" target="navTab" rel="linkList">浏览热搜</a></li>
                                    <li><a href="<?php echo U('Hot/add'); ?>" target="dialog" rel="addlinkList">添加热搜</a></li>
                                </ul>
                            </li>
						</ul>
					</div>


					<div class="accordionHeader">
						<h2><span>Folder</span>公告管理</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder collapse">
                            <li><a>公告管理</a>
                                <ul>
                                    <li><a href="<?php echo U('Gonggao/index'); ?>" target="navTab" rel="linkList">浏览公告</a></li>
                                    <li><a href="<?php echo U('Gonggao/add'); ?>" target="dialog" rel="addlinkList">添加公告</a></li>
                                </ul>
                            </li>
						</ul>
					</div>
					<!--后台广告设置-->
					<div class="accordionHeader">
						<h2><span>Folder</span>广告设置</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder collapse">
							<li><a>广告信息管理</a>
								<ul>
									<li><a href="<?php echo U('Guanggao/index'); ?>" target="navTab" rel="guanggaolist">浏览广告信息</a></li>
									<li><a href="<?php echo U('Guanggao/add'); ?>" target="dialog" rel="addguanggao">添加广告信息</a></li>
								</ul>
							</li>
						</ul>
					</div>
					
					<!--用户图片设置-->
					<div class="accordionHeader">
						<h2><span>Folder</span>用户图片设置</h2>
					</div>
					<div class="accordionContent">
						<ul class="tree treeFolder collapse">
							<li><a>图片信息管理</a>
								<ul>
									<li><a href="<?php echo U('Pic/index'); ?>" target="navTab" rel="piclist">浏览图片信息</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<!-- 网站菜单 -->
				</div>
			</div>
		</div>
		<!-- 页面主体start -->
		<div id="container">
			<div id="navTab" class="tabsPage">
				<div class="tabsPageHeader">
					<div class="tabsPageHeaderContent"><!-- 显示左右控制时添加 class="tabsPageHeaderMargin" -->
						<ul class="navTab-tab">
							<li tabid="main" class="main"><a href="javascript:;"><span><span class="home_icon">我的主页</span></span></a></li>
						</ul>
					</div>
					<div class="tabsLeft">left</div><!-- 禁用只需要添加一个样式 class="tabsLeft tabsLeftDisabled" -->
					<div class="tabsRight">right</div><!-- 禁用只需要添加一个样式 class="tabsRight tabsRightDisabled" -->
					<div class="tabsMore">more</div>
				</div>
				<ul class="tabsMoreList">
					<li><a href="javascript:;">我的主页</a></li>
				</ul>
				<div class="navTab-panel tabsPageContent layoutBox">
					<div class="page unitBox">
						<div class="accountInfo">
							<div class="alertInfo">
								<p><a href="https://code.csdn.net/dwzteam/dwz_jui/tree/master/doc" target="_blank" style="line-height:19px"><span>DWZ框架使用手册</span></a></p>
								<p><a href="http://pan.baidu.com/s/18Bb8Z" target="_blank" style="line-height:19px">DWZ框架开发视频教材</a></p>
							</div>
							<div class="right">
								<p style="color:red">DWZ官方微博 <a href="http://weibo.com/dwzui" target="_blank">http://weibo.com/dwzui</a></p>
							</div>
							<p><span>DWZ富客户端框架</span></p>
							<p>DWZ官方微博:<a href="http://weibo.com/dwzui" target="_blank">http://weibo.com/dwzui</a></p>
						</div>
						<div class="pageFormContent" layoutH="80" style="margin-right:230px">

						</div>
						
					</div>
					
				</div>
			</div>
		</div>
		<!-- 页面主体end -->
	</div>
	<div id="footer">Copyright &copy; 2014 <a href="demo_page2.html" target="dialog">LAMP93期</a> 京ICP备123456789号-10</div>
</body>
</html>