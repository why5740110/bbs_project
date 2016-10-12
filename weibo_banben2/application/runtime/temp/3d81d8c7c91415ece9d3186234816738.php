<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
        
        <title>江西王红影的相册 - 微相册</title>
        <link href="<?php echo APP_INDEX; ?>common/top/common.css" rel="stylesheet" type="text/css">
		<link href="<?php echo APP_INDEX; ?>common/top/piczan.css" rel="stylesheet" type="text/css">
        <script>
           /* var $CONFIG = $GLOBAL_INFO = {
                base_url:'http://photo.weibo.com/',
                style_version:'wv28W7',
                script_version:'wv28W7',
                account_uid:2664098951,
                owner_uid: 2664098951,
                owner_data: {"id":2664098951,"name":"\u6c5f\u897f\u738b\u7ea2\u5f71","screen_name":"\u6c5f\u897f\u738b\u7ea2\u5f71","location":"\u6c5f\u897f \u4e5d\u6c5f","gender":"m","description":"\u52a1\u5b9e\u6c42\u662f","created_at":1331791949,"profile_image_url":"http:\/\/tp4.sinaimg.cn\/2664098951\/50\/22858760743\/1","avatar_large":"http:\/\/tp4.sinaimg.cn\/2664098951\/180\/22858760743\/1","profile_avatar_url":"http:\/\/tp4.sinaimg.cn\/2664098951\/180\/22858760743\/1","profile_url":"http:\/\/weibo.com\/u\/2664098951","verified":3,"is_verified":false,"verified_type":220,"domain":2664098951,"following":false,"follow_me":false,"type":1,"count":{"albums":3,"photos":8,"likes":4,"popularity":0,"messages":1,"followers":305,"friends":715,"statuses":453,"favourites":2}},
                account_data: {"id":2664098951,"name":"\u6c5f\u897f\u738b\u7ea2\u5f71","screen_name":"\u6c5f\u897f\u738b\u7ea2\u5f71","location":"\u6c5f\u897f \u4e5d\u6c5f","gender":"m","description":"\u52a1\u5b9e\u6c42\u662f","created_at":1331791949,"profile_image_url":"http:\/\/tp4.sinaimg.cn\/2664098951\/50\/22858760743\/1","avatar_large":"http:\/\/tp4.sinaimg.cn\/2664098951\/180\/22858760743\/1","profile_avatar_url":"http:\/\/tp4.sinaimg.cn\/2664098951\/180\/22858760743\/1","profile_url":"http:\/\/weibo.com\/u\/2664098951","verified":3,"is_verified":false,"verified_type":220,"domain":2664098951,"following":false,"follow_me":false,"type":1,"count":{"albums":3,"photos":8,"likes":4,"popularity":0,"messages":1,"followers":305,"friends":715,"statuses":453,"favourites":2}},
                settings: {"comment":true,"favorite":true,"exif":true,"like":false,"display_mode":"1"},
                account_settings: {"watermark":false,"like_tip":true,"guide":false,"wb_album_trip":false,"tag_trip":false},
                page: 1,
                is_editor : 0            }*/
        </script>
		
		
        <link href="<?php echo APP_INDEX; ?>common/top/album_home.css" rel="stylesheet" type="text/css">
        <script src="<?php echo APP_INDEX; ?>common/top/theia_1_4.js"></script>
        <script src="<?php echo APP_INDEX; ?>common/top/jquery-1.8.2.min.js"></script>
		<link href="<?php echo APP_INDEX; ?>common/index/user_album.css" rel="stylesheet" type="text/css">
		<link rel="Stylesheet" type="text/css" charset="utf-8" href="<?php echo APP_INDEX; ?>common/top/WB_outframe.css">
		<div style="position: absolute; top: -9999px;">
			<div id="js_style_css_module_global_WB_outframe">
			</div>
		</div>
		<style>
			#nav li:hover{
				background:blue;
			}
		</style>
	</head>
    <body class="P_myalbum">
        <div id="weibo_top_public"><!--spec start--><!--简易顶部导航拼页面用-->
    <div class="WB_global_nav " node-type="top_all">
      <div class="gn_header clearfix">
        <!-- logo -->
        <div class="gn_logo" node-type="logo" data-logotype="logo" data-logourl="javascript:void(0);">
	        <a href="javascript:void(0);" class="box" title="" node-type="logolink" suda-uatrack="key=topnav_tab&amp;value=weibologo" target="_top">
	        	<span class="logo"><img src="<?php echo APP_INDEX; ?>common/weibo.jpg" width="140"></span>
            </a>
        </div>
		<!-- logo -->
		<!-- 搜索    -->
		<div class=" gn_search_v222" style="width:543px;height:30px;background:#F2F2F5;float:left;margin-top:10px;line-height:30px;padding-left:10px;">
			<span class=" placeholder" style="font-zize:18px;">点击右边搜索按钮搜素内容...</span>
			<div style="width:63px;height:28px;float:right;">
				<a href="<?php echo U('search/index/index'); ?>" target="_blank">
					<img src="<?php echo APP_INDEX; ?>common/wb_search.jpg" width="63px" height="28px">
				</a>
			</div>
        </div>
        <!-- 搜索    -->            
        <div class="gn_position">
	        <div class="gn_nav">
	            <ul class="gn_nav_list">
					<li><a href="<?php echo U('index/index'); ?>" nm="home" class="S_txt1" suda-uatrack="key=topnav_tab&amp;value=homepage" target="_top"><em class="W_ficon ficon_home S_ficon"></em><em class="S_txt1">首页</em></a></li>
					<li><a href="javascript:void(0);" nm="find" class="S_txt1" suda-uatrack="key=topnav_tab&amp;value=discover" target="_top"><em class="W_ficon ficon_found S_ficon"></em><em class="S_txt1">发现</em></a></li>
	            	<li><a href="javascript:void(0);" nm="game" class="S_txt1" suda-uatrack="key=topnav_tab&amp;value=game" target="_top"><em class="W_ficon ficon_game S_ficon"></em><em class="S_txt1">游戏</em></a></li>
	            	<li><a href="<?php echo U('person/index'); ?>" nm="name" class="gn_name" suda-uatrack="key=topnav_tab&amp;value=profile" target="_top"><em class="W_ficon ficon_user S_ficon"></em><em class="S_txt1"><?php echo \think\Session::get('homeuser'); ?></em></a></li>
	            </ul>
	        </div>
	       <!--  <div class="gn_set S_line1">
	          <div class="gn_set_list"><a href="javascript:void(0);" node-type="msg" target="_top"><em class="W_ficon ficon_mail S_ficon">I</em></a>
	            <div class="gn_topmenulist gn_topmenulist_notice" node-type="msgLayer" style="display:none">
	            </div>
	            <div class="gn_topmenulist_tips" style="display: none;" node-type="tips"></div>
	          </div>
	          <div class="gn_set_list"><a href="javascript:void(0);" node-type="account" nm="account" target="_top"><em class="W_ficon ficon_set S_ficon">*</em> </a>
	            <div class="gn_topmenulist gn_topmenulist_set" node-type="accountLayer" style="display:none"><ul><li><a dot="pos55b99b65482fe" href="http://account.weibo.com/set/index?topnav=1&wvr=6" suda-data="key=account_setup&amp;value=account_setup">帐号设置</a></li><li><a dot="pos55b99bf4bba8f" target="_top" href="http://vip.weibo.com/?topnav=1&wvr=6" suda-data="top_account&amp;value=member_center">会员中心</a></li><li><a dot="pos55b9df2cc0557" target="_top" href="http://verified.weibo.com/verify?topnav=1&wvr=6" suda-data="key=pc_apply_entry&amp;value=home_top_entrance">V认证</a></li> <li><a dot="pos55b9df5d53f10" target="_top" href="http://security.weibo.com/account/security?topnav=1&wvr=6" suda-data="key=account_setup&amp;value=account_safe">帐号安全</a></li> <li><a dot="pos55b9df9b80cae" target="_top" href="http://account.weibo.com/set/privacy?topnav=1&wvr=6" suda-data="key=account_setup&amp;value=privacy_setup">隐私设置</a></li><li><a dot="pos55b9dfb6dd2f7" href="http://account.weibo.com/set/message?topnav=1&wvr=6" suda-data="key=account_setup&amp;value=notice_setup">消息设置</a></li><li><a dot="pos55b9dfda375ef" href="http://help.weibo.com/?topnav=1&wvr=6" suda-data="key=account_setup&amp;value=helpcenter">帮助中心</a></li><li class="line S_line1"></li><li class="gn_func"><a target="_top" suda-data="key=account_setup&amp;value=quit" href="http://weibo.com/logout.php?backurl=%2F">退出</a></li></ul><div class="W_layer_arrow"><span class="W_arrow_bor W_arrow_bor_t"><i class="S_line3"></i><em class="S_bg2_br"></em></span></div></div>
	          </div>
	          <div class="gn_set_list"><a href="http://weibo.com/" node-type="publish" suda-data="key=quick_pubblog&amp;value=quickpub_entrance" target="_top"><em class="W_ficon ficon_send S_ficon">?</em></a>
	          </div>
        	</div> -->
        </div>       
      </div>
    </div>
    <!--/简易顶部导航拼页面用-->
<!--spec end--></div>
<script src="<?php echo APP_INDEX; ?>common/top/topInit.js"></script>

        <div class="F_album">
            <div class="m_nav_home" id="nav_normal">
    <div class="nav_home clearfix">
        <h1 class="logo"><!-- <a href="http://photo.weibo.com/">photo</a> --></h1>
                <ul class="nav M_linkd">
        <li class="index "><a class="link" href="<?php echo U('Person/index'); ?>"><span class="valign">个人首页</span></a><span class="M_dotted_y"></span></li>
        <li class="index "><a class="link" href="<?php echo U('Pic/index'); ?>"><span class="valign">相册首页</span></a><span class="M_dotted_y"></span></li>
        <li class="album" node-type="show_menu"><a class="M_arrw_d_b22 link" href="<?php echo U('Pic/index'); ?>"><span class="valign">我的相册</span><span class="M_arrw_dwSml"></span></a><span class="M_dotted_y"></span>
            <div class="panel">
                <ul class="menulist M_linkb">
                    <li><a href="<?php echo U('Photo/index'); ?>">我的专辑</a></li>
                    <li><a href="<?php echo U('Picdzan/index'); ?>">我赞过的</a></li>
                    <!-- <li><a href="http://photo.weibo.com/2664098951/favorites/photos">我的收藏</a></li>
                    <li><a href="http://photo.weibo.com/2664098951/profile">我的动态</a></li> -->
                </ul>
            </div>
        </li>
        <!-- <li class="explore "><a class="link" href="http://photo.weibo.com/welcome/hot"><span class="valign">相册广场</span></a><span class="M_dotted_y"></span></li> -->
        <li class="upload "><a class="link" href="<?php echo U('Pic/picadd'); ?>"><span class="valign">上传</span></a></li>
        </ul>
        <!-- <div class="con">
            <a class="M_ico M_icon1" title="设置" href="http://photo.weibo.com/settings/index"></a>
        </div> -->
		<!-- <div class="search">
        	<form name="searchForm">
	            <input type="text" node-type="search_input" value="搜索您感兴趣的标签" class="s_input M_txte" title="搜索您感兴趣的标签">
	            <a class="btn" href="http://photo.weibo.com/2664098951/photos#" node-type="search_btn" title="点击搜索"></a>
        	</form>
        </div> -->
    </div>
</div>
<div class="F_wrap clearfix">
      <!--F_rows-->
       <div class="F_main">
        <div id="user_info" class="m_user_album clearfix">
    <dl class="user">
        <dt class="m_thumb m_thumb_d">
        <a href="" title="">
            <img width="138" height="138" src="<?php echo APP_INDEX; ?>uploads/txpic/<?php echo $userdetail['picname']; ?>">
        </a>
        </dt>
		
        <dd class="user_info">
            <div class="about">
                <div class="namebox">
					
                    <a class="M_linkd name" href="<?php echo U('Photo/index'); ?>"><?php echo (\think\Session::get('homeuser') !== ''?\think\Session::get('homeuser'):"aa"); ?></a>
					
                                        <a class="M_club" title="微博达人" href="http://club.weibo.com/intro" target="_blank"></a>
                                        <span node-type="follow_status">
                                                                    </span>
                </div>
				
                <p class="location"><span class="M_ico M_icon34"></span><?php echo (isset($userdetail['address']) && ($userdetail['address'] !== '')?$userdetail['address']:"江西 九江"); ?></p>
                
            </div>
            <div class="static_num clearfix">
                <dl>
                    <dt><a href="<?php echo U('Photo/index'); ?>"><?php echo $photo_count; ?></a></dt>
                    <dd><a href="<?php echo U('Photo/index'); ?>" class="M_linkb">专辑</a></dd>
                </dl>
                <dl class="M_dotted_y">
                    <dt><a href="<?php echo U('Pic/index'); ?>"><?php echo $pic_total; ?></a></dt>
                    <dd><a href="<?php echo U('Pic/index'); ?>" class="M_linkb">照片</a></dd>
                </dl>
                <dl class="M_dotted_y">
                    <dt><a href="<?php echo U('Picdzan/index'); ?>"><?php echo $dzan_total; ?></a></dt>
                    <dd><a href="<?php echo U('Picdzan/index'); ?>" class="M_linkb">赞过</a></dd>
                </dl>

            </div>
        </dd>
		
    </dl>
    <div class="upload" >
        <a href="<?php echo U('Pic/picadd'); ?>" class="M_btn_e"><span>上传照片</span></a>
    </div>
</div>
<!--/用户信息-->
<!--二级导航-->
<div class="m_subnav">
    <div node-type="sub_nav" class="subnav clearfix">
        <ul id="nav" class="nav">
            <li><a href="<?php echo U('Pic/index'); ?>">我的相册</a></li>
            <li><a href="<?php echo U('Photo/index'); ?>">我的专辑</a></li>
            <li><a href="<?php echo U('Picdzan/index'); ?>">我赞过的</a></li>
			<li><a href="<?php echo U('Picshoucang/index'); ?>">我的收藏</a></li>
            <!-- <li><a href="">我的动态</a></li> -->
        </ul>
    </div>
</div>
<!--/二级导航-->        <!--/二级导航-->
</div>
   
   <!-- ======================================================我的专辑开始===============================================================-->
   <!--/F_rows-->
   <!--F_main-->
   <div class="F_main">
     <!--创建专辑-->
     <div class="m_browse_menu clearfix" node-type="album_info"><div class="tit M_txta">专辑列表<span class="M_txtb">(共<?php echo $photo_count; ?>个)</span></div><div class="album_count M_txta"><span class="creat">
	 
	 <!--  JS控制添加相册 页面-->
	 <script>
		$(function(){
			//获取创建专辑按钮
			
			$("#createphoto").live('click',function(){
				//alert('sssssss');
				$("div #myalbum").css('display','block');
				$("div #showceng").css('display','block');
				
			
			});
			
			//给添加相册框绑定鼠标移动事件
			$("div #myalbum").mousemove(function(){
				
			});
			
			//获取关闭按钮节点操作
			$("a[action-type='photoclose'").click(function(){
				$("div #myalbum").css('display','none');
				$("div #showceng").css('display','none');
			});
			
			//获取权限单选框的val值
			//$(function(){
			//获取权限单选框中的值
			$("li input[name='quanxian']").click(function(){
				//获取权限的val值
				quanxianval = $(this).val();
				//获取隐藏的图片链接地址
				//photoname = $(this).parent().parent().children('.photoname').html();
				//alert(quanxianval);
				/*if(quanxianval==4){
					//alert('ssssss');
					//$(this).click(function(){
						$("#myphotoul .huidawenti").css('display','block');
					//});
					
				}else{
					$("#myphotoul .huidawenti").css('display','none');
				}*/
			});
			//});
			
			
			//获取添加
			
			$("a[action-type='photoadd']").click(function(){
				//获取相册名称值
				var ptitle = $("input[name='ptitle']").val();
				//获取相册描述
				var pcontent = $("textarea[name='pcontent']").val();
				//获取问题值
				//var  question = $("input[name='question']").val();
				//获取问题答案值
				//var answer = $("input[name='answer']").val();
				
				
				//获取权限按钮
				//var quanxian = $("td input[name='quanxian']");
				//alert(quanxianval);
				//var i = quanxian.index();
				//alert(i);
				//quanxianval = quanxian.eq(i).val();
				//var quanxianval = "";
				//alert(quanxianval);
				
				//给单选按钮遍历点击事件
				//quanxian.click(function(){
				//	quanxianval1 = $(this).val();
				//	quanxianval = quanxianval1;
				//	alert(quanxianval);
				//});
				//alert(photoname);
				//执行ajax操作
				$.ajax({
					url:"<?php echo U('Photo/insert'); ?>",
					type:'post',
					data:{title:ptitle,content:pcontent,status:quanxianval},
					dataType:'json',
					async:true,
					success:function(res){
						//alert('添加成功');
						$("div #myalbum").css('display','none');
						$("div #showceng").css('display','none');
						//$("#wb_photo").load("index.html");
						
						for(var i=0;i<res.length;i++){
							//alert(res[i]['title'])
						
						
						//alert(res['title']);
						//拼接添加相册字串
						var str = "<li action-data='aid=3423857315111989&property=1'>";
	
						str += "<div class='m_fav_album'>";
						str += "<div class='m_cover m_cover_c'>";
						str += "<div class='img_wrap'>";
						str += "<a title='在线相册' href='' undefined=''>";
						str += "<img width='150' height='150' class='img' src='<?php echo APP_INDEX; ?>uploads/pic/default.png'>";
						str += "<span class='count'>2 张</span>";
						str += "</a></div></div>";
						str += "<div class='detail'>";
						str += "<p class='title'>";
						str += "<a class='M_linkb' href='' undefined=''>";
						str += "<strong title='"+res[i]['title']+"'>"+res[i]['title']+"</strong>";
						str += "</a></p>";
						str += "<p class='status M_txtb'>";
						str += "<span title='所有人可见' class='M_ico '></span>";
						str += "<span class='M_txtb time'>"+res[i]['addtime']+"</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
						str += "<span style='color:#0A8CD2;'>"+res[i]['staush']+"</span></p>";
						//str += "</p><p class='edit M_txtd'></p></div></div></li>";
						
						str += "图片描述:<span class='description'>"+pcontent+"</span>";
						
						str += "<p class='edit M_txtd'>";
						str +=	"<a href='javascript:void(0);' action-type='album_edit'>编辑</a>"
						str +=	"<span class='M_vline'></span>";
						str +=	"<a href='javascript:void(0)' action-type='album_del' action-data='album_id=3454582265827570'>删除</a></p>"
						str += "</div></div></li>";
						
						//在div内部插入一条语句
						$("div #photolist_ul").append(str);
						
						window.location.href="<?php echo U('Photo/index'); ?>"
						//$("#wb_photo").load("#wb_photo");
						alert('添加成功');
						
						}
					},
					error:function(){
						alert('添加失败！');
					}
				});
				
			});
		
		});
	 
	 </script>
	 
	<span class="M_btn_c" id="createphoto" action-type="album_add">创建专辑</span>
	<p class="photoname" style="display:none;"><?php echo APP_INDEX; ?>uploads/pic/default.png</p>
	 
	 <!-- </span><span class="sequence"><a class="M_btn_c" href="http://photo.weibo.com/2664098951/albums/album_sort">专辑排序</a></span> --></div></div>
      <!--/创建专辑-->
     <!--用户专辑列表-->
	 
	 <!--  JS控制添加相册 页面-->
	 <!--添加相册专辑 开始处 -->
	 
	 <div class="L_layer" node-type="outer" style="position: absolute; z-index: 100100; visibility: visible; top: 369px; left: 413px;display:none;" id="myalbum" stk-mask-key="145698623223612">
		<div class="bg">
			<table border="0" cellspacing="0" cellpadding="0">
				<tbody>
					<tr>
						<td>
							<div class="content" node-type="layoutContent">
								<div node-type="title" class="title" style="cursor: move;">
									<span node-type="title_content">新建专辑(相册)</span>
								</div>
								<a node-type="close" action-type="close" title="关闭" href="javascript:void(0)" class="close"></a>
								<div node-type="inner">
									<div class="L_editalbum">
										<form name="albumForm" node-type="album_form">
											<div class="m_ly_tip" node-type="error_tip" style="display:none"></div>
												<div class="album_info">
													<dl class="m_Layform clearfix">
														<dt>专辑(相册)名称：</dt>
														<dd class="contBox">
															<input type="text" name="ptitle" class="M_inpt" node-type="ptitle" value="">
														</dd>
														<dd class="tipBox">
															<span class="M_txte" node-type="caption_w">15字以内</span>
														</dd>
													</dl>
													<dl class="m_Layform clearfix">
														<dt>专辑描述：</dt>
														<dd class="contBox">
															<textarea name="pcontent" title="讲讲你和照片的故事...（非必填）" class="M_txtarea" node-type="pcontent"></textarea>
														</dd>
														<dd class="tipBox">
															<span class="M_txte" node-type="description_w">140字以内</span>
														</dd>
													</dl>
												</div>
												<div class="authority">
												    <dl class="set_authort clearfix">
														<dt>设置权限：</dt>
														<dd class="M_txtb">
															<p>谁可以看到这个专辑？</p>
															<ul class="userlist">
																<li>
																	<input type="radio" value="1" class="M_radio" id="all" name="quanxian" action-type="change_permission">
																	<label for="all">所有人</label>
																</li>
																<li>
																	<input type="radio" value="2" class="M_radio" id="each_o" name="quanxian" action-type="change_permission">
																	<label for="each_o">仅自己</label>
																</li>
																<li>
																	<input type="radio" value="3" class="M_radio" id="self" name="quanxian" action-type="change_permission">
																	<label for="self">仅好友</label>
																</li>
																<!-- <li>
																	<input type="radio" value="5" class="M_radio" id="ask" name="quanxian" action-type="change_permission">
																	<label for="ask">问题访问</label>
																</li> -->
															</ul>
															<input type="hidden" name="album_id" value="3454582265827570">
														</dd>
													</dl>
													<div class="ask_q" node-type="ask_layer" style="display:none">
														<dl class="m_Layform clearfix">
															<dt>问题：</dt>
															<dd class="contBox"><input type="text" name="question" value="" class="M_inpt" node-type="question"></dd>
															<dd class="tipBox"><span class="M_txte" node-type="question_w">20/20</span></dd>
														</dl>
														<dl class="m_Layform clearfix">
															<dt>答案：</dt>
															<dd class="contBox"><input type="text" name="answer" value="" class="M_inpt" node-type="answer"></dd>
															<dd class="tipBox"><span class="M_txte" node-type="answer_w">20/20</span></dd>
														</dl>
													</div>
												</div>
												<div class="save_cal">
													<a href="javascript:void(0);" action-type="photoadd" class="M_btn_e">
														<span>保存</span>
													</a>
													<a href="javascript:void(0);" action-type="photoclose" class="M_btn_e">
														<span>取消</span>
													</a>
												</div>
										</form>
									</div>
								</div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	 
	 
	 
	 
	 <!-- 添加相册div页面	-->	 
	 <!--
	 <div id="myalbum" style="background:#eee;position:absolute;top:350px;left:500px;z-index:5;border:1px solid #ccc;width:250px;display:none;padding-left:50px;">
		
		<ul id="myphotoul" style="list-style:none;">
			<li>
				<span>相册名称:</span>
				<input type="text" name="ptitle">
			</li><br>
			<li>
				<span>相册描述:</span>
				<input type="text" name="content">
			</li><br>
			<li>
				<span>权限:</span>
				<input type="radio" name="quanxian" value="1">所有人
			</li>
			<li>
				<span>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;</span>
				<input type="radio" name="quanxian" value="2">仅自己
			</li>
			<li>
				<span>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;</span>
				<input type="radio" name="quanxian" value="3">仅好友
			</li>
			<li>
				<span>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;</span>
				<input type="radio" name="quanxian" value="4">回答问题查看
			</li>
			
			<li id="question" class="huidawenti" style="display:none;">
				<span>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;</span>
				<span>问题:</span>
				<input type="text" name="question">
			</li><br>
			
			<li id="answer" class="huidawenti" style="display:none;">
				<span>&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;</span>
				<span>答案:</span>
				<td><input type="text" name="answer"></td>
			</li><br>
			
			<li style="align:center;">
				<button name="myphotoadd">添加</button>&nbsp;&nbsp;
				<button name="photoclose">关闭</button>
			</li>
		</ul>
		
	 </div>-->
	 
	 <!--======================================-->
	 <!--页面class="myphoto"  的dt的js控制-->
		<script>
			$(function(){
				$('.myphoto').mouseover(function(){
					$(this).css('border','1px solid #56A1DB');
					$(this).css('background','#FAFAFA');
				});
				$('.myphoto').mouseout(function(){
					$(this).css('border','none');
					$(this).css('background','#fff');
				});
			});
		</script>
	 
	 
      <div id="wb_photo" class="m_user_albumlist" node-type="album_list">
		<ul id="photolist_ul" class="albumlists clearfix">
			<?php foreach($photo_list as $key=>$vo): ?>
			<li action-data="aid=3423857315111989&amp;property=1">
				<div class="m_fav_album">
					<div class="m_cover m_cover_c">
						<div class="img_wrap myphoto">
							<a title="<?php echo $vo['title']; ?>" href="<?php echo U('Pic/photopicshow'); ?>?photoid=<?php echo $vo['id']; ?>&uid=<?php echo $vo['uid']; ?>" undefined="">
								<img width="150" class="img" src="<?php echo APP_INDEX; ?>uploads/pic/<?php echo $vo['photoname']; ?>">
								<span class="count" style="font-weight:bold;font-size:15px;color:red;">共<?php echo $picnum[$key]; ?>张</span>
							</a>
						</div>
					</div>
					<div class="detail">
						<p class="title">
							<a class="M_linkb" href="<?php echo U('Pic/photopicshow'); ?>?photoid=<?php echo $vo['id']; ?>&uid=<?php echo $vo['uid']; ?>" undefined="">
								<strong class="phototitle" title="<?php echo $vo['title']; ?>"><?php echo $vo['title']; ?></strong>
							</a>
						</p>
						<p class="status M_txtb">
							<span title="所有人可见" class="M_ico "></span>
							<span class="M_txtb time"><?php echo date("Y-m-d",$vo['addtime']); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<span style="color:#0A8CD2;"><?php echo $vo['staush']; ?></span>
						</p>
						<p class="photoid" style="display:none;"><?php echo $vo['id']; ?></p>
						<p class="puid" style="display:none;"><?php echo $vo['uid']; ?></p>
						<p class="photostatus" style="display:none;"><?php echo $vo['status']; ?></p>
						
						图片描述:
						<span class="description"><?php echo $vo['content']; ?></span>
						
						<p class="edit M_txtd">
							<a href="javascript:void(0);" action-type="album_edit">编辑</a>
							<span class="M_vline"></span>
							<a href="javascrippt:void(0);" action-type="album_del" action-data="album_id=3454582265827570">删除</a>
						</p>
						
					</div>
				</div>
			</li>
			<?php endforeach; ?>
			<!--<li action-data="aid=3560110618585734&amp;property=1">
				<div class="m_fav_album">
					<div class="m_cover m_cover_c">
						<div class="img_wrap">
							<a title="微博配图" href="http://photo.weibo.com/2664098951/talbum/index" undefined="">
								<img width="150" height="150" class="img" src="<?php echo APP_INDEX; ?>common/index/9ecaec87jw1e7mje43lwtj208c05kdfy.jpg">
								<span class="count">52 张</span>
							</a>
						</div>
					</div>
					<div class="detail">
						<p class="title">
							<a class="M_linkb" href="http://photo.weibo.com/2664098951/talbum/index" undefined="">
								<strong title="微博配图">微博配图</strong>
							</a>
						</p>
						<p class="status M_txtb">
							<span title="所有人可见" class="M_ico "></span>
							<span class="M_txtb time">更新于2013-08-14</span>
						</p>
						<p class="edit M_txtd"></p>
					</div>
				</div>
			</li>-->
		</ul>
		<div style="text-align:center;font-size:18px;"><?php echo $pageshow; ?></div>
	</div>
	
	<!--删除相册 点击删除按钮 355行 删除-->
	<script>
		$(function(){
			//获取删除按钮
			$("a[action-type='album_del']").click(function(){
				//获取相册id
				photoid = $(this).parent().parent().children('.photoid').html();
				
				//执行ajax操作
				if(confirm("确定删除吗?")){
					$.ajax({
						url:"<?php echo U('Photo/del'); ?>",
						type:'post',
						data:{photoid:photoid},
						dataType:'html',
						async:true,
						success:function(){
							
							window.location.href="<?php echo U('Photo/index'); ?>";
							alert('删除成功');
						},
						error:function(){
							alert('删除失败！');
						}
						
						
					});
				}
				
			});
		});
	</script>
	
	<!--======================================-->
      <!--/用户专辑列表-->
      <!--翻页-->
      <div class="m_pages" node-type="album_page"></div>
      <!--/翻页-->
   </div>
   <!--/F_main-->
   
   <!--点击286编辑 按钮弹出编辑框 ,修改图片描述信息-->
	 <script>
		$(function(){
			//点击编辑标签，让编辑框显示出来
			$("a[action-type='album_edit'").click(function(){
				$(".L_layer").css('display','block');
				//获取相册id
				photoid = $(this).parent().parent().children('.photoid').html();
				//获取相册标题
				phototitle = $(this).parent().parent().children().children().children('.phototitle').html();
				//获取相册标题节点
				titlewz = $(this).parent().parent().children().children().children('.phototitle');
				//获取相册描述节点
				description = $(this).parent().parent().children('.description');
				//获取相册描述
				photocontent = description.html();
				//获取当前权限值
				photostatus = $(this).parent().parent().children('.photostatus').html();
				
				
				//alert(photostatus);
				//将相册标题传给显示的表单中
				$("input[name='title']").val(phototitle);
				//将相册描述传给显示的表单中
				$("textarea[name='description']").html(photocontent);
				//将获取的状态值传给显示的表单中 
				$("input[value="+photostatus+"]").attr('checked','checked');
				
				
			});
			
			
			//获取取消按钮 让编辑框隐藏起来
			$("a[action-type='close']").click(function(){
				$(".L_layer").css('display','none');
				
			});
			
			//获取显示修改框中的单选框中的val值
			$("input[name='property']").click(function(){
				//获取用户权限的状态
				status = $(this).val();
			});
			
			
			//获去编辑框中的保存按钮添加点击事件，并发送ajax
			
			$("a[action-type='save']").click(function(){
				//获取修改的相册标题
				var title = $("input[node-type='title']").val();
				//获取修改后的相册描述内容
				var descrip = $("textarea[name='description']").val();
				
				//alert(status);
				//获取发布相册用户的用户uid
				uid = $(".puid").html();
				//alert(uid);
				//执行ajax
				$.ajax({
					url:"<?php echo U('Photo/update'); ?>",
					type:"post",
					data:{id:photoid,uid:uid,content:descrip,title:title,status:status},//参数
					dataType:"html", //返回的数据类型
					async:true, //是否异步
					success:function(){
						//编辑框关闭
						$(".L_layer").css('display','none');
						titlewz.html(title);
						description.html(descrip);
						window.location.href="<?php echo U('Photo/index'); ?>";
						alert("编辑成功！");
					   //spanid.html(8);
					   
					},
					error:function(){
						alert("编辑失败！");
					}
				});
			});
			
			//控制编辑框移动
			$('.bg').mousedown(function (event) { 
				var isMove = true; 
				var abs_x = event.pageX - $('div.L_layer').offset().left; 
				var abs_y = event.pageY - $('div.L_layer').offset().top; 
				$(document).mousemove(function(event){ 
					if (isMove) { 
						var obj = $('div.L_layer'); 
						obj.css({'left':event.pageX - abs_x, 'top':event.pageY - abs_y}); 
					} 
				}).mouseup(function(){ 
					isMove = false; 
				}); 
			}); 
			
		});
	 </script>
   
   
   
   <!--相册编辑框 开始处 文件286行编辑按钮-->
	
	<div class="L_layer" node-type="outer" style="position: absolute; z-index: 100100; visibility: visible; top: 369px; left: 413px;display:none;" id="layer_145698623223611" stk-mask-key="145698623223612">
		<div class="bg">
			<table border="0" cellspacing="0" cellpadding="0">
				<tbody>
					<tr>
						<td>
							<div class="content" node-type="layoutContent">
								<div node-type="title" class="title" style="cursor: move;">
									<span node-type="title_content">编辑专辑(相册)</span>
								</div>
								<a node-type="close" action-type="close" title="关闭" href="javascript:void(0)" class="close"></a>
								<div node-type="inner">
									<div class="L_editalbum">
										<form name="albumForm" node-type="album_form">
											<div class="m_ly_tip" node-type="error_tip" style="display:none"></div>
												<div class="album_info">
													<dl class="m_Layform clearfix">
														<dt>专辑(相册)名称：</dt>
														<dd class="contBox">
															<input type="text" name="title" class="M_inpt" node-type="title" value="">
														</dd>
														<dd class="tipBox">
															<span class="M_txte" node-type="caption_w">15字以内</span>
														</dd>
													</dl>
													<dl class="m_Layform clearfix">
														<dt>专辑描述：</dt>
														<dd class="contBox">
															<textarea name="description" title="讲讲你和照片的故事...（非必填）" class="M_txtarea" node-type="description"></textarea>
														</dd>
														<dd class="tipBox">
															<span class="M_txte" node-type="description_w">140字以内</span>
														</dd>
													</dl>
												</div>
												<div class="authority">
												    <dl class="set_authort clearfix">
														<dt>设置权限：</dt>
														<dd class="M_txtb">
															<p>谁可以看到这个专辑？</p>
															<ul class="userlist">
																<li>
																	<input type="radio" value="1" class="M_radio" id="all" checked="" name="property" action-type="change_permission">
																	<label for="all">所有人</label>
																</li>
																<li>
																	<input type="radio" value="2" class="M_radio" id="each_o" name="property" action-type="change_permission">
																	<label for="each_o">仅自己</label>
																</li>
																<li>
																	<input type="radio" value="3" class="M_radio" id="self" name="property" action-type="change_permission">
																	<label for="self">仅好友</label>
																</li>
																<!-- <li>
																	<input type="radio" value="5" class="M_radio" id="ask" name="property" action-type="change_permission">
																	<label for="ask">问题访问</label>
																</li> -->
															</ul>
															<input type="hidden" name="album_id" value="3454582265827570">
														</dd>
													</dl>
													<div class="ask_q" node-type="ask_layer" style="display:none">
														<dl class="m_Layform clearfix">
															<dt>问题：</dt>
															<dd class="contBox"><input type="text" name="question" value="" class="M_inpt" node-type="question"></dd>
															<dd class="tipBox"><span class="M_txte" node-type="question_w">20/20</span></dd>
														</dl>
														<dl class="m_Layform clearfix">
															<dt>答案：</dt>
															<dd class="contBox"><input type="text" name="answer" value="" class="M_inpt" node-type="answer"></dd>
															<dd class="tipBox"><span class="M_txte" node-type="answer_w">20/20</span></dd>
														</dl>
													</div>
												</div>
												<div class="save_cal">
													<a href="javascript:void(0);" action-type="save" class="M_btn_e">
														<span>保存</span>
													</a>
													<a href="#" action-type="close" class="M_btn_e">
														<span>取消</span>
													</a>
												</div>
										</form>
									</div>
								</div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<!--相册编辑框 结束处 文件286行编辑按钮-->

<!-- ======================================================我的专辑结束===============================================================-->
             <div class="m_footer">
    <div class="footer_link clearfix">
        <div class="help_link">
            <p>
                                    <a href="http://ir.weibo.com/?bottomnav=1&wvr=5" target="_blank">关于微博</a>　
                                <a href="http://help.weibo.com/topic/photo?refer=photo" target="_blank">帮助</a>　
                <a href="http://weibo.com/k/weijianyi" target="_blank">意见反馈</a>　
                <a href="http://open.weibo.com/" target="_blank">开放平台</a>　
                <a href="http://hr.t.sina.com.cn/" target="_blank">微博招聘</a>　
                <a href="http://news.sina.com.cn/guide/" target="_blank">新浪网导航</a>　
                <a href="http://weibo.com/z/guize/gongyue.html" target="_blank">社区管理中心</a>
            </p>
            <p>服务热线：4000 960 960（个人/企业）服务时间9:00-21:00  4000 980 980（广告主）服务时间9:00-18:00 （按当地市话标准计算）</p>
        </div>
        <div class="copy">
            <p class="copyright">Copyright ? 2009-2015 WEIBO</p>
            <p>北京微梦创科网络技术有限公司 京ICP备12002058号</p>
        </div>
    </div>
</div>        </div>
                
        <script src="<?php echo APP_INDEX; ?>common/footer/photoIndex.js"></script>
    	<!-- SUDA_CODE_START -->
		<script type="text/javascript" charset="utf-8" src="<?php echo APP_INDEX; ?>common/footer/suda.js"></script>
		<!-- SUDA_CODE_END -->
 
    

</body></html>