<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
        
        <title><?php echo $pusername['username']; ?>的相册</title>
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
				<a href="<?php echo U('Search/person/index'); ?>" target="_blank">
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
	        <!-- <div class="gn_set S_line1">
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
        <li class="index "><a class="link" href="<?php echo U('Persongz/index'); ?>?uid=<?php echo $pusername['id']; ?>"><span class="valign">他的个人首页</span></a><span class="M_dotted_y"></span></li>
        <li class="index "><a class="link" href="<?php echo U('Picgz/index'); ?>?uid=<?php echo $pusername['id']; ?>"><span class="valign">相册首页</span></a><span class="M_dotted_y"></span></li>
        <li class="album " node-type="show_menu"><a class=" link" href="<?php echo U('Picgz/photo'); ?>?uid=<?php echo $pusername['id']; ?>"><span class="valign">他的相册</span><span class="M_arrw_dwSml"></span></a><span class="M_dotted_y"></span><!-- class = M_txtb  添加一个下箭头-->
            <div class="panel">
                <ul class="menulist M_linkb">
                    <li><a href="<?php echo U('Picgz/photo'); ?>?uid=<?php echo $pusername['id']; ?>">他的专辑</a></li>
                    <li><a href="<?php echo U('Picgz/picdzan'); ?>?uid=<?php echo $pusername['id']; ?>">他赞过的</a></li>
                    <!-- <li><a href="http://photo.weibo.com/2664098951/favorites/photos">我的收藏</a></li>
                    <li><a href="http://photo.weibo.com/2664098951/profile">我的动态</a></li> -->
                </ul>
            </div>
        </li>
        <!-- <li class="explore "><a class="link" href="http://photo.weibo.com/welcome/hot"><span class="valign">相册广场</span></a><span class="M_dotted_y"></span></li>
        <li class="upload "><a class="link" href="<?php echo U('Pic/picadd'); ?>"><span class="valign">上传</span></a></li> -->
        </ul>
        <!-- <div class="con">
            <a class="M_ico M_icon1" title="设置" href="http://photo.weibo.com/settings/index"></a>
        </div>
		<div class="search">
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
        <a href="<?php echo U('Picgz/index'); ?>?uid=<?php echo $pusername['id']; ?>" title="相册">
            <img width="138" height="138" src="<?php echo APP_INDEX; ?>uploads/txpic/<?php echo $puserlist['picname']; ?>">
        </a>
        </dt>
		
        <dd class="user_info">
            <div class="about">
                <div class="namebox">
					
                    <a class="M_linkd name" href="<?php echo U('Picgz/index'); ?>?uid=<?php echo $pusername['id']; ?>"><?php echo $pusername['username']; ?></a>
					
                                        <a class="M_club" title="微博达人" href="http://club.weibo.com/intro" target="_blank"></a>
                                        <span node-type="follow_status">
                                                                    </span>
                </div>
				
                <p class="location"><span class="M_ico M_icon34"></span><?php echo $puserlist['address']; ?></p>
                
            </div>
            <div class="static_num clearfix">
                <dl>
                    <dt><a href="<?php echo U('Picgz/photo'); ?>?uid=<?php echo $pusername['id']; ?>"><?php echo $gzphoto_pic_total; ?></a></dt>
                    <dd><a href="<?php echo U('Picgz/photo'); ?>?uid=<?php echo $pusername['id']; ?>" class="M_linkb">专辑</a></dd>
                </dl>
                <dl class="M_dotted_y">
                    <dt><a href="<?php echo U('Picgz/index'); ?>?uid=<?php echo $pusername['id']; ?>"><?php echo $gzpic_total; ?></a></dt>
                    <dd><a href="<?php echo U('Picgz/index'); ?>?uid=<?php echo $pusername['id']; ?>" class="M_linkb">照片</a></dd>
                </dl>
                <dl class="M_dotted_y">
                    <dt><a href="<?php echo U('Picgz/picdzan'); ?>?uid=<?php echo $pusername['id']; ?>"><?php echo $gzdzan_total; ?></a></dt>
                    <dd><a href="<?php echo U('Picgz/picdzan'); ?>?uid=<?php echo $pusername['id']; ?>" class="M_linkb">赞过</a></dd>
                </dl>

            </div>
        </dd>
		
    </dl>
    <!-- <div class="upload" >
        <a href="<?php echo U('Pic/picadd'); ?>" class="M_btn_e"><span>上传照片</span></a>
    </div> -->
</div>
<!--/用户信息-->
<!--二级导航-->
<div class="m_subnav">
    <div node-type="sub_nav" class="subnav clearfix">
        <ul id="nav" class="nav">
            <li><a href="<?php echo U('Picgz/index'); ?>?uid=<?php echo $pusername['id']; ?>">他的相册</a></li>
            <li><a href="<?php echo U('Picgz/photo'); ?>?uid=<?php echo $pusername['id']; ?>">他的专辑</a></li>
            <li><a href="<?php echo U('Picgz/picdzan'); ?>?uid=<?php echo $pusername['id']; ?>">他赞过的</a></li>
			<li><a href="<?php echo U('Picgz/picshoucang'); ?>?uid=<?php echo $pusername['id']; ?>">他的收藏</a></li>
           <!--  <li><a href="">我的动态</a></li> -->
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
			  //获取用户头像的节点 并绑定移入事件
			  $(".dzan_user .userimage").mouseover(function(){
				  //$(this).css('z-index','22');
				 //$(".userimage .pic").css('width','100px');
				  
			  });
			  //获取用户头像的节点 并绑定移出事件
			  $(".dzan_user .userimage").mouseout(function(){
				  //$(".userimage .pic").css('width','50px');
			  });
			  
			  
		  });
	  </script>
	  
	  <div style="width:950px;<!-- background:rgba(20,22,111,0.1); -->">
			<ul id="dzan_list">
				
					<?php foreach($res as $key=>$v): ?>
						<li class="dzan_user" style="height:60px;width:980;border-bottom:1px solid #ccc;padding-left:10px;margin-top:5px;position:relative">
							<div class="userimage" style="float:left;position:sbsolute;top:0px;left:0px;z-index:10;">
								<a href="<?php echo U('picgz/index'); ?>?uid=<?php echo $key; ?>">
									
									<img class="pic" src="<?php echo APP_INDEX; ?>uploads/txpic/<?php echo $puserlist['picname']; ?>" width=50px alt="头像" >
								</a>
							</div>
							<span style="margin-left:10px;">他已赞了 <a href="<?php echo U('Picgz/index'); ?>?uid=<?php echo $userlist[$key]['id']; ?>"><?php echo $userlist[$key]['username']; ?></a> 的照片</span>
							<?php foreach($res[$key] as $b): ?>
							
								<img src="<?php echo APP_INDEX; ?>uploads/pic/<?php echo $b; ?>" width="40">
							
							<?php endforeach; ?>
						</li>
					<?php endforeach; ?>
				
			</ul>
			<div style="text-align:center;font-size:15px;"><?php echo $listpage; ?></div>
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