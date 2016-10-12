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
	  
	    <!-- ======================================================我已赞开始===============================================================-->
        <!--/F_rows-->
        <!--F_cols_main-->
	    <!--鼠标移动上去 头像的放大到100px 移出恢复到原来大小-->
	    <script>
		    $(function(){
				//获取图片取消收藏按钮 并绑定点击事件
				$("a[action-type='cancel_favorite']").click(function(){
					//获取该图片的picid
					var picid = $(this).parent().parent().children('.picid').html();
					//alert(picid);
					//执行ajax请求 执行取消收藏功能
					if(confirm("确定取消收藏该图片吗？")){
						$.ajax({
							url:"<?php echo U('Picshoucang/close'); ?>",
							type:'post',
							data:{picid:picid},
							dataType:'html',
							async:true,
							success:function(){
								window.location.href="<?php echo U('Picshoucang/index'); ?>";
								alert('已成功取消收藏图片');
							},
							error:function(){
								alert('失败！');
							}
						});
					}
				});
				
				//获取相册取消收藏按钮 并绑定点击事件
				$("a[action-type='cancel_photofavorite']").click(function(){
					//获取该图片的picid
					var photoid = $(this).parent().parent().children('.photoid').html();
					//alert(photoid);
					//执行ajax请求 执行取消收藏功能
					if(confirm("确定取消收藏该相册吗？")){
						$.ajax({
							url:"<?php echo U('Photo/close'); ?>",
							type:'post',
							data:{photoid:photoid},
							dataType:'html',
							async:true,
							success:function(){
								window.location.href="<?php echo U('Picshoucang/index'); ?>";
								alert('已成功取消收藏相册');
							},
							error:function(){
								alert('失败！');
							}
						});
					}
				});
				
				
				//=================================================================================
				//控制收藏的照片和收藏的专辑按钮 并选择各自的div显示并展示出来
				//获取收藏的照片 按钮
				$("a[action-type='pic_shoucang']").click(function(){
					//收藏图片的div显示
					$(".Fic_main").css("display","block");
					//收藏相册的div隐藏
					$(".Fhoto_main").css("display","none");
					//共计几张图片显示
					$("span[node-type='pic_info']").css("display","block");
					//共计几张专辑隐藏
					$("span[node-type='photo_info']").css("display","none");
					
				});
				
				//获取收藏的专辑 按钮
				$("a[action-type='photo_shoucang']").click(function(){
					//收藏图片的div隐藏
					$(".Fic_main").css("display","none");
					//收藏相册的div显示
					$(".Fhoto_main").css("display","block");
					//共计几张图片隐藏
					$("span[node-type='pic_info']").css("display","none");
					//共计几张专辑显示
					$("span[node-type='photo_info']").css("display","block");
				});
				
			 
		    });
	    </script>
	    <div style="width:950px;">
			<div class="m_menutab M_linkc clearfix">
				<ul class="tab" node-type="inner_nav">
					<li class="it"><a href="javascript:void(0);" action-type="pic_shoucang">收藏的照片</a></li>                       
					<li class="it"><a href="javascript:void(0);" action-type="photo_shoucang">收藏的专辑</a></li>
				</ul>
				<span class="count M_txta" node-type="pic_info" style="display:block;">共<?php echo $shoucang_count; ?>张照片</span>
				<span class="count M_txta" node-type="photo_info" style="display:none;">共<?php echo $photoshoucang_count; ?>张专辑</span>
			</div>
			<div style="width:100%;height:20px;"></div>
			
			<!--用户收藏的图片信息列表开始处-->
			<div class="Fic_main" style="display:block;">
				<!--用户专辑列表-->
				<div class="m_user_piclist" node-type="pic_list" >
					<ul class="user_photolist clearfix" >
						<?php foreach($res as $key=>$vo): ?>
						<li style="float:left;width:237px;height:282px;">
							<dl class="m_fav_pic">
								<dt class="photo">
									<a title="" href="<?php echo U('Picgz/picshow'); ?>?picid=<?php echo $vo['picid']; ?>&photoid=<?php echo $vo['photoid']; ?>&uid=<?php echo $vo['puid']; ?>">
										<img class="img" title="收藏图片" alt="收藏图片" src="<?php echo APP_INDEX; ?>uploads/pic/<?php echo $vo['picname']; ?>" width="200" height="200">
									</a>
								</dt>
								<dd>
									<p class="title">所在专辑 
										<a class="M_linkb" href="<?php echo U('Picgz/photopic'); ?>?uid=<?php echo $vo['puid']; ?>&photoid=<?php echo $vo['photoid']; ?>">
											<strong title="<?php echo $vo['username']; ?>"><?php echo $vo['title']; ?></strong>
										</a>
									</p>
									<p class="status M_txtb">来自：
										<a href="<?php echo U('Picgz/index'); ?>?uid=<?php echo $vo['puid']; ?>" title="<?php echo $vo['username']; ?>"><?php echo $vo['username']; ?></a>
									</p>
									<p class="picid" style="display:none;"><?php echo $vo['picid']; ?></p>
									<p class="edit M_txtd">
										<a href="javascript:void(0);" action-data="target_id=3781636289355776&amp;type=2" action-type="cancel_favorite">取消收藏</a>
									</p>
								</dd>
							</dl>
						</li>
						<?php endforeach; ?>
					</ul>
					<div style="text-align:center;font-size:15px;"><?php echo $listpage; ?></div>
				</div>
				<!--/用户专辑列表-->
				<!--翻页-->
				<div class="m_pages" node-type="photo_page"></div>
				<!--/翻页-->
			</div>
			<!--用户收藏的图片信息列表结束处-->
			
			<!--用户收藏的相册信息列表开始处-->
			<div class="Fhoto_main" style="display:none;">
				<!--用户专辑列表-->
				<div class="m_user_photolist" node-type="photo_list" >
					<ul class="user_photolist clearfix" >
						<?php foreach($photocanglist as $key=>$vt): ?>
						<li style="float:left;width:237px;height:282px;">
							<dl class="m_fav_pic">
								<dt class="photo">
									<a title="" href="<?php echo U('Picgz/photopic'); ?>?uid=<?php echo $vt['puid']; ?>&photoid=<?php echo $vt['photoid']; ?>">
										<img class="img" title="收藏专辑" alt="收藏专辑" src="<?php echo APP_INDEX; ?>uploads/pic/<?php echo $vt['photoname']; ?>" width="200" height="200">
									</a>
								</dt>
								<dd>
									<p class="title">所在专辑 
										<a class="M_linkb" href="<?php echo U('Picgz/photopic'); ?>?uid=<?php echo $vt['puid']; ?>&photoid=<?php echo $vt['photoid']; ?>">
											<strong title="<?php echo $vt['username']; ?>"><?php echo $vt['title']; ?></strong>
										</a>
									</p>
									<p class="status M_txtb">来自：
										<a href="<?php echo U('Picgz/index'); ?>?uid=<?php echo $vt['puid']; ?>"><?php echo $vt['username']; ?></a>
									</p>
									<p class="photoid" style="display:none;"><?php echo $vt['photoid']; ?></p>
									<p class="edit M_txtd">
										<a href="javascript:void(0);" action-data="" action-type="cancel_photofavorite">取消收藏</a>
									</p>
								</dd>
							</dl>
						</li>
						<?php endforeach; ?>
					</ul>
					<div style="text-align:center;font-size:15px;"><?php echo $listpage1; ?></div>
				</div>
				
			
				
				<!--/用户专辑列表-->
				<!--翻页-->
				<div class="m_pages" node-type="photo_page"></div>
				<!--/翻页-->
			</div>
			<!--用户收藏的相册信息列表结束处-->
			
			
	    </div>
	  
	  
	  
	  
	  
	 
	
	<!-- ======================================================我已赞结束===============================================================-->
	
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