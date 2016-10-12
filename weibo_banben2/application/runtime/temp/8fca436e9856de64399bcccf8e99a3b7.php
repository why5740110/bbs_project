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
		<div class=" gn_search_v222" style="width:500px;height:30px;background:#F2F2F5;float:left;margin-top:10px;line-height:30px;padding-left:10px;">
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
	  
	  <!-- ======================================================我的相册开始===============================================================-->
      <!--/F_rows-->
      <!--F_cols_main-->
	 <div class="F_rows_main"> 
      <div class="F_cols_main">
      	<!--幻灯浏览-->
      	<div class="m_browse_menu clearfix">
		<br>
            <div class="phto_count M_txta" node-type="photos_info">他的可见照片<span>(共<?php echo $gzpic_total; ?>张)</span></div><div class="browse_type"><!-- <a class="M_linke M_slide_sm" href="http://photo.weibo.com/2664098951/photos#" action-type="slide_open"><span class="M_ico M_icon12"></span>幻灯浏览</a> --></div>
        </div>
        <!--/幻灯浏览-->
		
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
        <!--组图浏览-->
        <div class="m_photo_list_a" node-type="photo_list">
		
			<ul class="photoList clearfix">
				<?php foreach($gzpic_list as $vo): ?>
				<li  action-data="pid=3642504728738567&amp;aid=3423857315111989&amp;type=2" >
					
					<dl class="m_photoItem m_photoItem_a">
						<dt class="photo myphoto" >
							<a href="<?php echo U('Picgz/picshow'); ?>?picid=<?php echo $vo['id']; ?>&uid=<?php echo $vo['uid']; ?>&photoid=<?php echo $vo['photo_id']; ?>" title="">
								<img src="<?php echo APP_INDEX; ?>uploads/pic/<?php echo $vo['picname']; ?>" width="200">
							</a>
						</dt>
						<dd class="ppicid">
							<div class="mark_box M_txtb">
								<p class="time"><?php echo date("Y-m-d",$vo['addtime']); ?></p>
								<!-- <a class="M_linke M_transmit_sm" href="http://photo.weibo.com/2664098951/photos#" title="分享" action-type="photo_forward">
									<span class="M_ico M_icon4"></span>0
								</a>
								<a class="M_linke M_comment_sm" title="评论" href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3642504728738567">
									<span class="M_ico M_icon5"></span>0
								</a>
								<a class="M_linke M_like_sm" title="赞" href="http://photo.weibo.com/2664098951/photos#" action-data="target_id=3642504728738567&amp;like_uid=2664098951&amp;type=2&amp;property=1&amp;count=0" action-type="like">
									<span class="M_ico M_icon6"></span>0
								</a> -->
							</div>
							<p class="picid" style="display:none;"><?php echo $vo['id']; ?></p>
							<p class="puid" style="display:none;"><?php echo $vo['uid']; ?></p>
							<p class="desc" title=""></p>图片描述:
							<span class="description"><?php echo $vo['descrip']; ?></span>
							<!-- <div class="edit_tip">
								<a href="javascript:void(0);" action-type="photo_edit">编辑</a>
								<span class="M_vline M_txtd"></span>
								<a href="<?php echo U('Pic/del'); ?>?picid=<?php echo $vo['id']; ?>&uid=<?php echo $vo['uid']; ?>" action-type="photo_del">删除</a>
							</div> -->
						</dd>
					</dl>
				</li>
				<?php endforeach; ?>
				
				<!--
				<li action-data="pid=3605345632135804&amp;aid=3423857315111989&amp;type=2"><dl class="m_photoItem m_photoItem_a"><dt class="photo"><a href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3605345632135804" title=""><img src="<?php echo APP_INDEX; ?>common/myphoto/9ecaec87gw1e73hc4ojczj203x03rwen.jpg"></a></dt><dd><div class="mark_box M_txtb"><p class="time">2013-07-29</p><a class="M_linke M_transmit_sm" href="http://photo.weibo.com/2664098951/photos#" title="分享" action-type="photo_forward"><span class="M_ico M_icon4"></span>0</a><a class="M_linke M_comment_sm" title="评论" href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3605345632135804"><span class="M_ico M_icon5"></span>0</a><a class="M_linke M_like_sm" title="赞" href="http://photo.weibo.com/2664098951/photos#" action-data="target_id=3605345632135804&amp;like_uid=2664098951&amp;type=2&amp;property=1&amp;count=0" action-type="like"><span class="M_ico M_icon6"></span>0</a></div><p class="desc" title=""></p><div class="edit_tip"><a href="http://photo.weibo.com/2664098951/photos#" action-type="photo_edit">编辑</a><span class="M_vline M_txtd"></span><a href="http://photo.weibo.com/2664098951/photos#" action-type="photo_del">删除</a></div></dd></dl></li><li action-data="pid=3492001052679519&amp;aid=3454582265827570&amp;type=2"><dl class="m_photoItem m_photoItem_a"><dt class="photo"><a href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3492001052679519" title=""><img src="<?php echo APP_INDEX; ?>common/myphoto/9ecaec87gw1dx1vw4a5sjj.jpg"></a></dt><dd><div class="mark_box M_txtb"><p class="time">2012-09-19</p><a class="M_txtb M_transmit_un" href="javascript:void(0)"><span class="M_ico M_icon4_un"></span><span>0</span></a><a class="M_linke M_comment_sm" title="评论" href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3492001052679519"><span class="M_ico M_icon5"></span>0</a><a class="M_linke M_like_sm" title="赞" href="http://photo.weibo.com/2664098951/photos#" action-data="target_id=3492001052679519&amp;like_uid=2664098951&amp;type=2&amp;property=2&amp;count=0" action-type="like"><span class="M_ico M_icon6"></span>0</a></div><p class="desc" title=""></p><div class="edit_tip"><a href="http://photo.weibo.com/2664098951/photos#" action-type="photo_edit">编辑</a><span class="M_vline M_txtd"></span><a href="http://photo.weibo.com/2664098951/photos#" action-type="photo_del">删除</a></div></dd></dl></li><li action-data="pid=3492001048485213&amp;aid=3454582265827570&amp;type=2"><dl class="m_photoItem m_photoItem_a"><dt class="photo"><a href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3492001048485213" title=""><img src="<?php echo APP_INDEX; ?>common/myphoto/9ecaec87gw1dx1vw4c2f5j.jpg"></a></dt><dd><div class="mark_box M_txtb"><p class="time">2012-09-19</p><a class="M_txtb M_transmit_un" href="javascript:void(0)"><span class="M_ico M_icon4_un"></span><span>0</span></a><a class="M_linke M_comment_sm" title="评论" href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3492001048485213"><span class="M_ico M_icon5"></span>0</a><a class="M_linke M_like_sm" title="赞" href="http://photo.weibo.com/2664098951/photos#" action-data="target_id=3492001048485213&amp;like_uid=2664098951&amp;type=2&amp;property=2&amp;count=0" action-type="like"><span class="M_ico M_icon6"></span>0</a></div><p class="desc" title=""></p><div class="edit_tip"><a href="http://photo.weibo.com/2664098951/photos#" action-type="photo_edit">编辑</a><span class="M_vline M_txtd"></span><a href="http://photo.weibo.com/2664098951/photos#" action-type="photo_del">删除</a></div></dd></dl></li><li action-data="pid=3492001044290904&amp;aid=3454582265827570&amp;type=2"><dl class="m_photoItem m_photoItem_a"><dt class="photo"><a href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3492001044290904" title=""><img src="<?php echo APP_INDEX; ?>common/myphoto/9ecaec87gw1dx1vw3cchdj.jpg"></a></dt><dd><div class="mark_box M_txtb"><p class="time">2012-09-19</p><a class="M_txtb M_transmit_un" href="javascript:void(0)"><span class="M_ico M_icon4_un"></span><span>0</span></a><a class="M_linke M_comment_sm" title="评论" href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3492001044290904"><span class="M_ico M_icon5"></span>0</a><a class="M_linke M_like_sm" title="赞" href="http://photo.weibo.com/2664098951/photos#" action-data="target_id=3492001044290904&amp;like_uid=2664098951&amp;type=2&amp;property=2&amp;count=0" action-type="like"><span class="M_ico M_icon6"></span>0</a></div><p class="desc" title=""></p><div class="edit_tip"><a href="http://photo.weibo.com/2664098951/photos#" action-type="photo_edit">编辑</a><span class="M_vline M_txtd"></span><a href="http://photo.weibo.com/2664098951/photos#" action-type="photo_del">删除</a></div></dd></dl></li><li action-data="pid=3492000700357656&amp;aid=3454582265827570&amp;type=2"><dl class="m_photoItem m_photoItem_a"><dt class="photo"><a href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3492000700357656" title=""><img src="<?php echo APP_INDEX; ?>common/myphoto/9ecaec87gw1dx1vunv8eej.jpg"></a></dt><dd><div class="mark_box M_txtb"><p class="time">2012-09-19</p><a class="M_txtb M_transmit_un" href="javascript:void(0)"><span class="M_ico M_icon4_un"></span><span>0</span></a><a class="M_linke M_comment_sm" title="评论" href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3492000700357656"><span class="M_ico M_icon5"></span>0</a><a class="M_linke M_like_sm" title="赞" href="http://photo.weibo.com/2664098951/photos#" action-data="target_id=3492000700357656&amp;like_uid=2664098951&amp;type=2&amp;property=2&amp;count=0" action-type="like"><span class="M_ico M_icon6"></span>0</a></div><p class="desc" title=""></p><div class="edit_tip"><a href="http://photo.weibo.com/2664098951/photos#" action-type="photo_edit">编辑</a><span class="M_vline M_txtd"></span><a href="http://photo.weibo.com/2664098951/photos#" action-type="photo_del">删除</a></div></dd></dl></li><li action-data="pid=3492000696163348&amp;aid=3454582265827570&amp;type=2"><dl class="m_photoItem m_photoItem_a"><dt class="photo"><a href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3492000696163348" title=""><img src="<?php echo APP_INDEX; ?>common/myphoto/9ecaec87gw1dx1vundhsgj.jpg"></a></dt><dd><div class="mark_box M_txtb"><p class="time">2012-09-19</p><a class="M_txtb M_transmit_un" href="javascript:void(0)"><span class="M_ico M_icon4_un"></span><span>0</span></a><a class="M_linke M_comment_sm" title="评论" href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3492000696163348"><span class="M_ico M_icon5"></span>0</a><a class="M_linke M_like_sm" title="赞" href="http://photo.weibo.com/2664098951/photos#" action-data="target_id=3492000696163348&amp;like_uid=2664098951&amp;type=2&amp;property=2&amp;count=0" action-type="like"><span class="M_ico M_icon6"></span>0</a></div><p class="desc" title=""></p><div class="edit_tip"><a href="http://photo.weibo.com/2664098951/photos#" action-type="photo_edit">编辑</a><span class="M_vline M_txtd"></span><a href="http://photo.weibo.com/2664098951/photos#" action-type="photo_del">删除</a></div></dd></dl></li><li action-data="pid=3492000478059314&amp;aid=3454582265827570&amp;type=2"><dl class="m_photoItem m_photoItem_a"><dt class="photo"><a href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3492000478059314" title=""><img src="<?php echo APP_INDEX; ?>common/myphoto/9ecaec87gw1dx1vtr2b0ij.jpg"></a></dt><dd><div class="mark_box M_txtb"><p class="time">2012-09-19</p><a class="M_txtb M_transmit_un" href="javascript:void(0)"><span class="M_ico M_icon4_un"></span><span>0</span></a><a class="M_linke M_comment_sm" title="评论" href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3492000478059314"><span class="M_ico M_icon5"></span>0</a><a class="M_linke M_like_sm" title="赞" href="http://photo.weibo.com/2664098951/photos#" action-data="target_id=3492000478059314&amp;like_uid=2664098951&amp;type=2&amp;property=2&amp;count=0" action-type="like"><span class="M_ico M_icon6"></span>0</a></div><p class="desc" title=""></p><div class="edit_tip"><a href="http://photo.weibo.com/2664098951/photos#" action-type="photo_edit">编辑</a><span class="M_vline M_txtd"></span><a href="http://photo.weibo.com/2664098951/photos#" action-type="photo_del">删除</a></div></dd></dl></li>-->
				
			</ul>
			<div style="text-align:center;font-size:18px;"><?php echo $picpageshow; ?></div>
		</div>
        <!--/组图浏览-->
        <!--翻页-->
        <div class="m_pages" node-type="photo_page"></div>
        <!--/翻页-->
      </div>
	 <!--点击55编辑 按钮弹出编辑框 ,修改图片描述信息-->
	 <script>
		$(function(){
			//点击编辑标签，让编辑框显示出来
			$("a[action-type='photo_edit']").click(function(){
				$(".L_layer").css('display','block');
				picid = $(this).parent().parent().children('.picid').html();
				description = $(this).parent().parent().children('.description');
				//alert(picid);
				
			});
			//获取取消按钮 让编辑框隐藏起来
			$("a[action-type='close']").click(function(){
				$(".L_layer").css('display','none');
				
			});
			//获去编辑框中的保存按钮添加点击事件，并发送ajax
			
			$("a[action-type='save']").click(function(){
				//获取描述内容
				var descrip = $("textarea[name='descrip']").val();
				//alert(descrip);
				//获取照片id值为picid
				//alert(picid);
				//获取发布照片用户的用户uid
				var uid = $(".puid").html();
				//alert(uid);
				//执行ajax
				$.ajax({
					url:"<?php echo U('Pic/update'); ?>",
					type:"post",
					data:{id:picid,uid:uid,descrip:descrip},//参数
					dataType:"html", //返回的数据类型
					async:true, //是否异步
					success:function(){
						//编辑框关闭
						$(".L_layer").css('display','none');
						description.html(descrip);
						alert("编辑成功！");
					   //spanid.html(8);
					   
					},
					error:function(){
						alert("删除失败！");
					}
			});
				
				
			});
			
		});
	 </script>
	 <!--编辑的div 55行编辑按钮-->
	 <div class="L_layer" node-type="outer" style="position: absolute; z-index: 100100; visibility: visible; top: 291px; left: 413px;display:none;" id="layer_14569860537111" stk-mask-key="14569860537112"><div class="bg"><table border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div class="content" node-type="layoutContent"><div node-type="title" class="title" style="cursor: move;"><span node-type="title_content">编辑照片</span></div><a node-type="close" action-type="close" title="关闭" href="javascript:void(0)" class="close"></a><div node-type="inner"><div class="L_editphoto">
		<dl class="m_Layform clearfix">
			<dt>照片描述：</dt>
			<dd class="contBox"><textarea class="M_txtarea" name="descrip" node-type="caption"></textarea></dd>
			<dd class="tipBox"><span class="M_txte" node-type="caption_w">140字以内</span></dd>
		</dl>
		<!-- <dl class="m_Layform clearfix">
			<dt>照片标签：</dt>
			<dd class="contBox">
				<div class="inputtxt">
					<div action-type="tag_box" class="inputbd clearfix">
						<div class="taglst m_tag_a M_linkc" node-type="photo_tags_3642504728738567"></div>
						<input title="标签间以空格隔开" type="text" name="3642504728738567" node-type="single_tag_input" value="标签间以空格隔开" class="M_txte">
						<input type="hidden" name="3642504728738567" node-type="pid">
					</div>
					<div class="tagarea">
						<div class="m_tag_a M_linkc" node-type="common_tags"></div>
					</div>
					<div class="setcover M_txtb">
						<label>
											</label>
					</div>
				</div>
			</dd>
		</dl> -->
		<div class="submit_centr">
			<a class="M_btn_e" action-type="save" href="javascript:void(0);"><span>保存</span></a><a class="M_btn_e" action-type="close" href="javascript:void(0);"><span >取消</span></a>
		</div>
	</div></div></div></td></tr></tbody></table></div></div>
	  
	  
      <!--/F_cols_main-->
      <!--F_cols_second-->
	  
      <div class="F_cols_second">
		<br>
      	<div class="album_count M_txta" node-type="album_info">共<?php echo $gzphoto_pic_total; ?>个可见专辑</div>
      	<!-- 图片列表 -->
        <div class="m_piclist">
          <ul node-type="album_list">
			<?php foreach($gzphoto_list as $pl): ?>
			<li action-data="aid=3423857315111989" style="border:1px solid #ccc;">
				<div class="m_cover m_cover_a" >
					<div class="img_wrap" style="border:1px solid #ccc;">
						<a title="<?php echo $pl['title']; ?>" href="<?php echo U('Picgz/photo'); ?>?uid=<?php echo $pl['uid']; ?>">
							<img height="90" width="90" src="<?php echo APP_INDEX; ?>uploads/pic/<?php echo $pl['photoname']; ?>">
						</a>
					</div>
				</div>
				<p style="color:red;font-weight:bold;">
					<a title="<?php echo $pl['title']; ?>" href="<?php echo U('Picgz/photo'); ?>?uid=<?php echo $pl['uid']; ?>" class="M_linkb"><?php echo $pl['title']; ?></a>
				</p>
				<p class="M_txtb"><?php echo $pl['content']; ?></p>
			</li>
			<?php endforeach; ?>
			<!-- <li action-data="aid=3560110618585734">
				<div class="m_cover m_cover_a"><div class="img_wrap"><a title="微博配图" href="http://photo.weibo.com/2664098951/talbum/index"><img height="90" width="90" src="<?php echo APP_INDEX; ?>common/myphoto/9ecaec87jw1e7mje43lwtj208c05kdfy.jpg"></a></div></div><p><a title="微博配图" href="http://photo.weibo.com/2664098951/talbum/index" class="M_linkb">微博配图</a></p><p class="M_txtb">(共52张)</p></li><li action-data="aid=3454582265827570"><div class="m_cover m_cover_a"><div class="img_wrap"><a title="默认专辑" href="http://photo.weibo.com/2664098951/albums/detail/album_id/3454582265827570"><img height="90" width="90" src="<?php echo APP_INDEX; ?>common/myphoto/9ecaec87gw1dx1vw4a5sjj(1).jpg"></a></div></div><p><a title="默认专辑" href="http://photo.weibo.com/2664098951/albums/detail/album_id/3454582265827570" class="M_linkb">默认专辑</a></p><p class="M_txtb">(共6张)</p>
			</li> -->
			<p><a href="<?php echo U('Picgz/photo'); ?>?uid=<?php echo $pusername['id']; ?>">查看更多...</a></p>
		</ul>
          <div class="m_listpage" node-type="album_page"></div>
        </div>
        <!--/图片列表 -->
      </div>
      <!--/F_cols_second-->
	</div>

	
	<!-- ======================================================我的相册结束===============================================================-->
	
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