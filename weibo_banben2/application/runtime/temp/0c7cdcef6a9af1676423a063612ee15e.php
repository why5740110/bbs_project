<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0080)http://weibo.com/p/1005052664098951/home?from=page_100505&mod=TAB&is_all=1#place -->
<html style="margin-top: 0px; margin-right: 0px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" charset="UTF-8" src="<?php echo APP_INDEX; ?>common/person/person/webim.js"></script>
<script type="text/javascript" charset="utf-8" async="" src="<?php echo APP_INDEX; ?>common/person/person/exposure.js"></script>
<script type="text/javascript" charset="utf-8" async="" src="<?php echo APP_INDEX; ?>common/person/person/suda.js"></script>
<script type="text/javascript" src="<?php echo APP_INDEX; ?>common/person/jquery-1.8.2.min.js"></script>
<meta charset="utf-8">
<meta content="" name="keywords">
<meta content="" name="description">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="renderer" content="webkit">
<meta name="viewport" content="initial-scale=1,minimum-scale=1">

<link rel="mask-icon" sizes="any" href="http://img.t.sinajs.cn/t6/style/images/apple/wbfont.svg" color="black">
<link rel="shortcut icon" type="image/x-icon" href="http://weibo.com/favicon.ico">


<title><?php echo \think\Session::get('homeuser'); ?>的个人中心</title>
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo APP_INDEX; ?>common/person/person/frame.css" putoff="style/css/module/combination/extra.css?version=9052d930b85566f4">
<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo APP_INDEX; ?>common/person/person/PCD_profile_home_A.css" includes="style/css/module/pagecard/PCD_counter.css?version=9052d930b85566f4|style/css/module/pagecard/PCD_person_info.css?version=9052d930b85566f4|style/css/module/pagecard/PCD_user_a.css?version=9052d930b85566f4|style/css/module/pagecard/PCD_pictext_a.css?version=9052d930b85566f4|style/css/module/pagecard/PCD_piclist_a.css?version=9052d930b85566f4|style/css/module/pagecard/PCD_mydata.css?version=9052d930b85566f4|style/css/module/pagecard/PCD_photolist.css?version=9052d930b85566f4|style/css/module/list/comb_WB_feed_profile.css?version=9052d930b85566f4|style/css/module/global/WB_timeline.css?version=9052d930b85566f4|style/css/module/pagecard/PCD_profileme.css?version=9052d930b85566f4|style/css/module/tab/comb_WB_tab_profile.css?version=9052d930b85566f4|style/css/module/list/comb_webim.css?version=9052d930b85566f4">
		<link type="text/css" rel="stylesheet" charset="utf-8" href="<?php echo APP_INDEX; ?>common/person/person/skin.css" id="skin_style">
	<script type="text/javascript">
~function(l){var h = l.href, r = l.protocol +'//'+ l.host, i = h.indexOf('#!'), s = i != -1 ? h.substr(i + 2) : '';if ( (new RegExp("/[a-zA-Z0-9\\.\\-~!@#$%^&*+?:_/=<>]+", "gi")).test(s) ) l.replace(r + s);}(location)
</script>
<script type="text/javascript">
try{document.execCommand("BackgroundImageCache", false, true);}catch(e){}
</script>
<!-- $CONFIG -->

<!-- / $CONFIG -->
<div style="position: absolute; top: -9999px;"></div><style></style><link href="<?php echo APP_INDEX; ?>common/person/person/extra.css" type="text/css" rel="stylesheet"><link rel="Stylesheet" type="text/css" charset="utf-8" href="<?php echo APP_INDEX; ?>common/person/person/PCD_mplayer.css"><div style="position: absolute; top: -9999px; left: -9999px;"></div><link rel="stylesheet" type="text/css" href="<?php echo APP_INDEX; ?>common/person/person/Pl_Third_RightClub.css" id="FM_145641399051985"><link rel="stylesheet" type="text/css" href="<?php echo APP_INDEX; ?>common/person/person/PCD_ut_b.css" id="FM_145641399051988"><link rel="stylesheet" type="text/css" href="<?php echo APP_INDEX; ?>common/person/person/PCD_piclist_b.css" id="FM_145641399051990"><link rel="stylesheet" type="text/css" href="<?php echo APP_INDEX; ?>common/person/person/PCD_pictext_b.css" id="FM_145641399051996"><link rel="stylesheet" type="text/css" href="<?php echo APP_INDEX; ?>common/person/person/PCD_ut_a.css" id="FM_1456413990519100"><link rel="stylesheet" type="text/css" href="<?php echo APP_INDEX; ?>common/person/person/PCD_pictext_f.css" id="FM_1456413990519102">
<style>
	.WB_cardwrap p{
			color:green;
			font-size:16px;
		}
        .WB_cardwrap p a:hover{
			text-decoration:underline;
			color:blue;
		}
</style>	

</head><body class="FRAME_page B_page S_page" style="">
  <div class="WB_miniblog">
    <div class="WB_miniblog_fb">
      <div id="pl_common_top"><!--简易顶部导航拼页面用-->
    <div class="WB_global_nav WB_global_nav_alpha" node-type="top_all">
      <div class="gn_header clearfix">
        <div class="gn_logo" node-type="logo" data-logotype="logo" data-logourl="http://weibo.com?topnav=1&amp;mod=logo">
       	 <a bpfilter="main" href="javascrippt:void(0);" class="box" title="" node-type="logolink" suda-uatrack="">
                       	<span class="logo"><img src="<?php echo APP_INDEX; ?>common/weibo.jpg" width="140"></span>
                    	</a>
        </div>
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
	          	<li><a bpfilter="main" href="<?php echo U('index/index'); ?>" nm="home" class="S_txt1 home" suda-uatrack="key=topnav_tab&amp;value=homepage"><em class="W_ficon ficon_home S_ficon"></em><em class="S_txt1">首页</em><em class="W_new1"></em></a></li>
	            <li><a dot="pos55b9e1ad88ae4" href="javascript:void(0);" nm="find" class="S_txt1" suda-uatrack="key=topnav_tab&amp;value=discover"><em class="W_ficon ficon_found S_ficon"></em><em class="S_txt1">发现</em></a></li>
	            <li><a href="javascript:void(0);" nm="game" class="S_txt1" suda-uatrack="key=topnav_tab&amp;value=game"><em class="W_ficon ficon_game S_ficon"></em><em class="S_txt1">游戏</em></a></li>
	          	<li><a dot="pos55b9e0848171d" bpfilter="page_frame" href="<?php echo U('person/index'); ?>" nm="name" class="gn_name" suda-uatrack="key=topnav_tab&amp;value=profile"><em class="W_ficon ficon_user S_ficon"></em><em class="S_txt1"><?php echo \think\Session::get('homeuser'); ?></em></a></li>
	          </ul>
	        </div>
	        <!-- <div class="gn_set S_line1">
	          <div class="gn_set_list"><a href="javascript:void(0);" node-type="msg"><em class="W_ficon ficon_mail S_ficon"></em></a>
	            <div class="gn_topmenulist gn_topmenulist_notice" node-type="msgLayer" style="display:none">
	            </div>
	            <div class="gn_topmenulist_tips" style="display: none;" node-type="tips"></div>
	          </div>
	       
	        </div> -->
        </div>       
      </div>
    </div>
    <!--/简易顶部导航拼页面用-->
</div>
            <div class="WB_main clearfix" id="plc_frame"><div class="WB_frame">
        
        	<div class="WB_frame_a">
            	<div id="Pl_Official_Headerv6__1"><div class="PCD_header">
				<div class="pf_wrap" layout-shell="false" node-type="cover_wrap">
				<div class="cover_wrap banner_transition" node-type="cover" style="background-image:url('<?php echo APP_INDEX; ?>common/person/person/shadow.jpg')" cover-type="1">
				</div>
				<div class="shadow  S_shadow" layout-shell="false">
						<div class="pf_photo" node-type="photo">
						<p class="photo_wrap">
						 						 	<a href="javascript:void(0);" action-type="setPhoto" title="更换头像" suda-uatrack="key=profile_head&amp;value=head_host">
							<img src="<?php echo APP_INDEX; ?>uploads/txpic/<?php echo $userdetail['picname']; ?>" alt="" class="photo">
							</a>
						 						
						</p>
							<!-- <a suda-data="key=pc_apply_entry&amp;value=profile_icon_avatar  href=" http:="" club.weibo.com="" intro"="" class="icon_bed"><em title="微博达人" class="W_icon icon_pf_club" node-type="daren" suda-uatrack="key=profile_head&amp;value=vuser_host"></em></a> -->						</div>
						
						<div class="pf_username">
						<h1 class="username"><?php echo \think\Session::get('homeuser'); ?></h1>
						<span class="icon_bed"><a><i class="W_icon icon_pf_male"></i></a></span>												
						</div>
						<div class="pf_intro" style="font-size:30px;"><?php echo $userdetail['address']; ?></div>
											</div>
					<div class="upcover"><a href="javascript:void(0);" class="W_btn_b " node-type="custom" style="display: none;"><em class="W_ficon ficon_upload S_ficon">É</em>上传封面图</a></div>										<div style="display: none;" class="pf_use_num" node-type="use_num">超过<span class="W_Tahoma W_fb">6000</span>万人正在使用</div>
																<a href="javascript:void(0)" suda-data="key=tblog_mode_cover&amp;value=profile_home_tear" action-data="is_guilderBubble=0" node-type="set_skin" title="模板设置" class="W_icon icon_setskin" ontouchstart=""></a>
														</div>
			</div>
<div node-type="moreList" class="layer_menu_list_b" style="position:absolute; top:332px; left:900px; z-index:999;display: none;">	
	<div class="list_wrap">
		<div class="list_content W_f14">
  			<ul class="list_ul">
  			  			    		    			    			<li class="item"><a suda-data="key=tblog_otherprofile_v5&amp;value=whisper" href="javascript:void(0);" action-type="addQuietFollow" action-data="fuid=2664098951&amp;fname=江西王红影&amp;action=add" class="tlink" suda-uatrack="key=tblog_profile_v6&amp;value=silently_concern">悄悄关注</a></li>
    			    		    		<li class="item"><a action-data="title=%E6%8A%8A%E6%B1%9F%E8%A5%BF%E7%8E%8B%E7%BA%A2%E5%BD%B1%E6%8E%A8%E8%8D%90%E7%BB%99%E6%9C%8B%E5%8F%8B&amp;content=%E5%BF%AB%E6%9D%A5%E7%9C%8B%E7%9C%8B%E6%B1%9F%E8%A5%BF%E7%8E%8B%E7%BA%A2%E5%BD%B1%20%E7%9A%84%E5%BE%AE%E5%8D%9Ahttp://weibo.com/u/2664098951" href="javascript:void(0);" action-type="widget_publish" class="tlink" suda-uatrack="key=tblog_profile_v6&amp;value=suggest_to_friends">推荐给朋友</a></li>
  			</ul>
  						<ul class="list_ul">
										<li class="item"><a suda-data="key=tblog_otherprofile_v5&amp;value=join_blacklist" href="javascript:void(0);" action-type="block" class="tlink" suda-uatrack="key=tblog_profile_v6&amp;value=in_black_list">加入黑名单</a></li>
												<li class="item"><a suda-data="key=tblog_otherprofile_v5&amp;value=report" href="javascript:void(0);" onclick="javascript:window.open(&#39;http://service.account.weibo.com/reportspam?rid=2664098951&amp;from=10106&amp;type=3&amp;url=%2Fp%2F1005052664098951%2Falbum&amp;bottomnav=1&amp;wvr=5&#39;, &#39;newwindow&#39;, &#39;height=700, width=550, toolbar =yes, menubar=no, scrollbars=yes, resizable=yes, location=no, status=no&#39;);" class="tlink" suda-uatrack="key=tblog_profile_v6&amp;value=report">举报他</a></li>
  			  			</ul>
  					</div>
  </div>
</div>
</div>
                    	<div id="Pl_Official_Nav__2" name="place" anchor="-50"><div class="PCD_tab S_bg2">
	<div class="tab_wrap" style="width:60%">
		<table class="tb_tab" cellpadding="0" cellspacing="0">
			<tbody>
				<tr>
					<td class=" current1">
						<a bpfilter="page" href="<?php echo U('Person/index'); ?>" node-type="nav_link" suda-uatrack="key=tblog_profile_new&amp;value=tab_profile" class="tab_link">
							<span class="S_txt1 t_link">我的主页</span>
							<span class="ani_border"></span>
						</a>
					</td>
					<td class=" ">
					<a bpfilter="page" href="<?php echo U('Pic/index'); ?>" node-type="nav_link" suda-uatrack="key=tblog_profile_new&amp;value=tab_album" class="tab_link" otherhref="">
						<span class="S_txt1 t_link">我的相册</span>
						<span class="ani_border"></span>
					</a>
					</td>
					<!-- <td>
					<a bpfilter="page" href="http://weibo.com/p/1005052664098951/manage?from=page_100505&mod=TAB#place" node-type="nav_link" suda-uatrack="key=tblog_profile_new&amp;value=tab_manage" class="tab_link">
						<span class="S_txt1 t_link">管理中心</span>
						<span class="ani_border"></span>
					</a>
					</td> -->
				</tr>
		</tbody></table>
	</div>
</div>
</div>
</div>
	<div id="plc_main">		<div class="WB_frame_b" fixed-box="true">
		<div id="Pl_Core_T8CustomTriColumn__3" anchor="-50">	
			<div class="WB_cardwrap S_bg2">
				<div class="PCD_counter">
					<div class="WB_innerwrap">
						<table class="tb_counter" cellpadding="0" cellspacing="0">
							<tbody>
								<tr>
									<td class="S_line1">
										<a bpfilter="page_frame" class="t_link S_txt1" href="http://weibo.com/2664098951/follow?from=page_100505&wvr=6&mod=headfollow#place">
										<strong class="W_f18">77</strong><span class="S_txt2">关注</span>
										</a>
									</td>
									<td class="S_line1">
										<a bpfilter="page_frame" class="t_link S_txt1" href="http://weibo.com/2664098951/fans?from=100505&wvr=6&mod=headfans&current=fans#place"><strong class="W_f18">23</strong><span class="S_txt2">粉丝</span></a>
									</td>
									<td class="S_line1">
										<a bpfilter="page_frame" class="t_link S_txt1" href="http://weibo.com/p/1005052664098951/home?from=page_100505_profile&wvr=6&mod=data#place"><strong class="W_f18">40</strong><span class="S_txt2">微博</span></a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div id="Pl_Core_ThirdHtmlData__4" anchor="-50"></div>
		<div id="Pl_Third_Inline__5" anchor="-50"></div>
		<div id="Pl_Core_Ut2UserList__6" anchor="-50">
		</div>
		<div id="Pl_Core_P7MultiPicPlay__7" anchor="-50"></div>
		<div id="Pl_Core_UserInfo__8" anchor="-50"><div style="visibility: hidden;"></div><div style="z-index: 10; -webkit-transform: translateZ(0px); transform: translateZ(0px); position: relative; width: 300px;"><div class="WB_cardwrap S_bg2" fixed-inbox="true" fixed-id="13">
    <!-- v6 card 通用标题 -->
<!-- 	<div class="PCD_person_info"> -->
		<!-- <div class="verify_area W_tog_hover S_line2">
			<p class="verify clearfix">
				<span class="icon_bed W_fl"><a suda-data="key=pc_apply_entry&amp;value=profile_icon" target="_blank" href="http://club.weibo.com/intro?from=profile&wvr=6&loc=darenicon" class="W_icon icon_verify_club"></a></span>
				<span class="icon_group S_line1 W_fl"><a class="W_icon_level icon_level_c3" title="微博等级13 升级有好礼" href="http://level.account.weibo.com/level/mylevel?from=profile1" target="_black"><span>Lv.13</span></a><span class="icon_bed"><em class="W_icon icon_taobao"></em></span>&nbsp;</span>
			</p>		 		 	
			<p class="info"><span></span></p>
		</div> -->
		
		<!--个人详细信息-->
	<!-- 	<div class="WB_innerwrap">
			<div class="m_wrap">
				<div class="detail">
					<ul class="ul_detail">
						<li class="item S_line2 clearfix">
							<span class="item_ico W_fl"><em class="W_ficon ficon_cd_place S_ficon"></em></span>
							<span class="item_text W_fl">昵称:<?php echo $userdetail['nickname']; ?></span>
						</li>
						<li class="item S_line2 clearfix">
							<span class="item_ico W_fl"><em class="W_ficon ficon_cd_place S_ficon"></em></span>
							<span class="item_text W_fl">地址:<?php echo $userdetail['address']; ?></span>
						</li>
						<li class="item S_line2 clearfix">
							<span class="item_ico W_fl"><em class="W_ficon ficon_edu S_ficon"></em></span>
							<span class="item_text W_fl">性别:<?php echo ($userdetail['sex']==1)?"男":"女"; ?></span>
						</li>
						<li class="item S_line2 clearfix">
						    <span class="item_ico W_fl"><em class="W_ficon ficon_constellation S_ficon"></em></span>
    						<span class="item_text W_fl">年龄:<?php echo $userdetail['age']; ?></span>
						</li>
						<li class="item S_line2 clearfix">
						    <span class="item_ico W_fl"><em class="W_ficon ficon_pinfo S_ficon"></em></span>
    						 <span class="item_text W_fl">邮箱:<?php echo $userdetail['email']; ?></span>
						</li>
					</ul>
				</div>
						</div>
		</div>
		<a class="WB_cardmore S_txt1 S_line1 clearfix" href="<?php echo U('Person/userdetail'); ?>" bpfilter="page_frame" ontouchstart="">
	<span class="more_txt">编辑个人资料&nbsp;<em class="W_ficon ficon_arrow_right S_ficon"></em></span>
</a>
		
	</div> -->
</div>
<div style="height:1px;margin-top:-1px;visibility:hidden;"></div></div>
</div>
					<div id="Pl_Third_Inline__9" anchor="-50">  
           </div>
					<div id="Pl_Core_PicTextList__10" anchor="-50"></div>
					<div id="Pl_Core_UserGrid__11" anchor="-50"></div>
					<div id="Pl_Core_PicText__12" anchor="-50"></div>
					<div id="Pl_Third_Inline__13" anchor="-50"><div class="WB_cardwrap S_bg2" action-type="login"> 
    <!--个人图片-->
    <div class="PCD_photolist">
        <div class="WB_cardtitle_b S_line2">
            <h4 class="obj_name">
              <span class="main_title W_fb W_f14">
                <a href="http://weibo.com/p/1005052664098951/album?from=profile_right#wbphoto_nav" target="_blank" class="S_txt1">
                    相册                </a>
              </span>
            </h4>
        </div>
        <div class="WB_innerwrap">
            <div class="m_wrap">
                <ul class="clearfix">
                                                                                <li class=" big_pic">
                    <a href="http://photo.weibo.com/2664098951/talbum/detail/photo_id/3611319196907619" suda-uatrack="key=tblog_eightpic_new&amp;value=pic_click" target="_blank"><img src="<?php echo APP_INDEX; ?>common/person/person/9ecaec87jw1e7mje43lwtj208c05kdfy.jpg" width="156" height="156"></a>
                </li>
                                                                <li class="">
                    <a href="http://photo.weibo.com/2664098951/talbum/detail/photo_id/3605664116900532" suda-uatrack="key=tblog_eightpic_new&amp;value=pic_click" target="_blank"><img src="<?php echo APP_INDEX; ?>common/person/person/6cba0975jw1e6aynrl34lj20dc1mc458.jpg" width="72" height="72"></a>
                </li>
                                                                <li class="">
                    <a href="http://photo.weibo.com/2664098951/talbum/detail/photo_id/3587943443053582" suda-uatrack="key=tblog_eightpic_new&amp;value=pic_click" target="_blank"><img src="<?php echo APP_INDEX; ?>common/person/person/9ecaec87jw1e5jyq1sxudj208m08m0tb.jpg" width="72" height="72"></a>
                </li>
                                                                <li class="">
                    <a href="http://photo.weibo.com/2664098951/talbum/detail/photo_id/3574709885205670" suda-uatrack="key=tblog_eightpic_new&amp;value=pic_click" target="_blank"><img src="<?php echo APP_INDEX; ?>common/person/person/9ecaec87jw1e4dqvceq4wj20m80m811k.jpg" width="72" height="72"></a>
                </li>
                                                                <li class="">
                    <a href="http://photo.weibo.com/2664098951/talbum/detail/photo_id/3562285413300522" suda-uatrack="key=tblog_eightpic_new&amp;value=pic_click" target="_blank"><img src="<?php echo APP_INDEX; ?>common/person/person/9ecaec87jw1e3a3xtnrxwj.jpg" width="72" height="72"></a>
                </li>
                                                                <li class="">
                    <a href="http://photo.weibo.com/2664098951/talbum/detail/photo_id/3561874937440825" suda-uatrack="key=tblog_eightpic_new&amp;value=pic_click" target="_blank"><img src="<?php echo APP_INDEX; ?>common/person/person/9ecaec87jw1e38ssp23avj.jpg" width="72" height="72"></a>
                </li>
                                                </ul>
            </div>
        </div>
        <a href="http://weibo.com/p/1005052664098951/album?from=profile_right#wbphoto_nav" class="WB_cardmore S_txt1 S_line1 clearfix"> 
            <span class="more_txt">查看更多<em class="W_ficon ficon_arrow_right S_ficon">a</em>
            </span>
        </a>
     </div>
     <!--/个人图片-->
</div>
</div>
					<div id="Pl_Core_Pt6Rank__14" anchor="-50">			</div>
					<div id="Pl_Core_Pt6Rank__15" anchor="-50">			</div>
					<div id="Pl_Core_UserGrid__16" anchor="-50"></div>
					<div id="Pl_Core_PicText__17" anchor="-50"></div>
					<div id="Pl_Core_Ut1UserList__18" anchor="-50">    <!--HTML 占位-->
					</div>
					
					<!--左侧广告的地方-->	
					<div id="Pl_Official_LikeMerge__19" anchor="-50">
						<?php foreach($guanggao_list_left as $vo): ?>
						<div class="WB_cardwrap S_bg2" style="width:300px;height:300px;position:relative;">
							<a href="<?php echo $vo['link']; ?>" target="_blank">
								<img src="<?php echo APP_INDEX; ?>uploads/guanggao/<?php echo $vo['imagename']; ?>" width="300" height="300">
							</a>
							<p  class="guanggaotitle" style="background:rgba(11,59,129,0.3);height:40px;width:100%;position:absolute;left:0px;top:260px;overflow:hidden;display:none;">
								<a href="<?php echo $vo['link']; ?>" target="_blank"><?php echo $vo['title']; ?></a>
							</p>
						</div>
						<?php endforeach; ?>
					</div>
					<!--js控制广告标题显示-->
					<script>
						$(function(){
							//获取div选择框 并绑定鼠标移入事件
							$("#Pl_Official_LikeMerge__19").mouseover(function(){
								//标题显示出来
								$(".guanggaotitle").css('display','block');
							
							}).mouseout(function(){
								//标题隐藏
								$(".guanggaotitle").css('display','none');
								
							});
							
						});
						
					</script>
				
					<div id="Pl_Official_MyPopularity__20" anchor="-50">
						<div class="WB_cardwrap S_bg2">
							<!-- <div class="PCD_mydata">
								<div class="WB_cardtitle_b S_line2">
									<div class="obj_name"><h2 class="main_title W_fb W_f14">我的微博人气</h2></div>
								</div>	
								 <div class="WB_empty">
									<div class="WB_innerwrap">
										<div class="empty_con clearfix">
											<p class="icon_bed"><i class="W_icon icon_warnB"></i></p>
											<p class="text">您的数据暂时无法算出，明天再来吧 。</p>
										</div>                 
									</div>          
								</div>
							</div> -->
						</div>
					</div>
					<div id="Pl_Guide_Bigday__21" anchor="-50"></div>
					<div id="Pl_Official_SeoInfo__22" anchor="-50"></div>
			</div>
	<div class="WB_frame_c" fixed-box="true">
	
					<div id="Pl_Official_MyProfileFeed__24" anchor="-50">        <div class="WB_feed WB_feed_profile">
        <div style="position:relative;" node-type="feedconfig" data-queryfix="is_all=1">
            <div style="position:absolute;top:-110px;left:0;width:0;height:0;" id="feedtop" name="feedtop"></div>
        </div>
    <!--feed内容 内容区域开始处========================================================================-->
	
	<div class="WB_frame_c" fixed-box="true">
		<div id="Pl_Official_PersonalInfo__65" anchor="-50">	
			<div class="WB_cardwrap S_bg2" style="padding-left:10px;">
				
				<div style="font-size:20px;font-weight:bold;font-family:'黑体';padding:15px 15px 0px 0px;">基本信息
					<p  name="editperson" class="editbuttom" style="width:50px;height:20px;float:right;border:1px solid #ccc;text-align:center;line-height:20px;font-size:15px;cursor:pointer;">
						<a href="javascript:void(0);" name="useredit">编辑</a>
					</p>
				</div>
				<hr>
				<div style="height:10px;"></div>
				<ul id="userdetail">
					<li style="height:40px;line-height:40px;font-size:15px;border-bottom:1px solid #ccc;">
						<span>登录名:</span>
						<span><?php echo \think\Session::get('homeuser'); ?></span>
					</li>
					<li style="height:40px;line-height:40px;font-size:15px;border-bottom:1px solid #ccc;">
						<span>昵称名:</span>
						<span><?php echo $userdetail['nickname']; ?></span>
					</li>
					<li style="height:40px;line-height:40px;font-size:15px;border-bottom:1px solid #ccc;">
						<span>性&nbsp;&nbsp;&nbsp; 别:</span>
						<span><?php echo ($userdetail['sex']==1)?"男":"女"; ?></span>
					</li>
					<li style="height:40px;line-height:40px;font-size:15px;border-bottom:1px solid #ccc;">
						<span>年&nbsp;&nbsp;&nbsp; 龄:</span>
						<span><?php echo $userdetail['age']; ?></span>
					</li>
					<li style="height:40px;line-height:40px;font-size:15px;border-bottom:1px solid #ccc;">
						<span>地&nbsp;&nbsp;&nbsp; 址:</span>
						<span><?php echo $userdetail['address']; ?></span>
					</li>
					<li style="height:40px;line-height:40px;font-size:15px;border-bottom:1px solid #ccc;">
						<span>邮&nbsp;&nbsp;&nbsp; 箱:</span>
						<span><?php echo $userdetail['email']; ?></span>
					</li>
					<li style="height:40px;line-height:40px;font-size:15px;border-bottom:1px solid #ccc;">
						<span>注册IP:</span>
						<span><?php echo (isset($userdetail['ip']) && ($userdetail['ip'] !== '')?$userdetail['ip']:"127.0.0.1"); ?></span>
					</li>
					<li style="height:40px;line-height:40px;font-size:15px;border-bottom:1px solid #ccc;">
						<span>注册时间:</span>
						<span><?php echo date("Y-m-d",$userdetail['regtime']); ?></span>
					</li>
					
					
					
					
				</ul>
			</div>
		</div>
	</div>
	<!--Js控制编辑页面显示并利用ajax发送后台并将数据修改过来-->
	<script>
		$(function(){
			//控制437行的编辑按钮 绑定点击事件 下面的个人编辑信息页面显示出来
			$("p[name='editperson']").click(function(){
				//让编辑框显示出来
				$(".editcontent").css('display','block');
			});
			//获取编辑框中的取消节点  关闭编辑框
			$("input[name='closeedit']").click(function(){
				//让编辑框隐藏起来
				$(".editcontent").css('display','none');
			});
			//将鼠标移动到取消按键上改变字体的大小和恢复到原大小
			$("a[name='closeedit']").mouseover(function(){
				$(this).css('fontSize','20px');
			});
			$("a[name='closeedit']").mouseout(function(){
				$(this).css('fontSize','15px');
			});
			//将鼠标移动到保存按键上改变字体的大小和恢复到原大小
			$("a[name='saveedit']").mouseover(function(){
				$(this).css('fontSize','20px');
			});
			$("a[name='saveedit']").mouseout(function(){
				$(this).css('fontSize','15px');
			});
			//当不点击性别的时候获取性别val值
			sex = $(".ra:checked").val();
			//alert(sex);
			
			//获取性别按钮 并绑定点击事件
			$("input[name='sex']").click(function(){
				sex = $(this).val();
				//alert(sex);
			});
			
			
			//获取保存按钮，并添加点击事件 将获取到的信息通过ajax发送到处理页面 
			$("a[name='saveedit']").click(function(){
				//获取用户id
				var uid = $("p[name='userid']").html();
				//alert(uid);
				//获取昵称名
				var nickname = $("input[name='nickname']").val();
				//获取性别
		
				
				//获取年龄
				var age = $("input[name='age']").val();
				//获取地址
				var address = $("input[name='address']").val();
				//获取邮箱地址
				var email = $("input[name='email']").val();
				//获取原图片的名称
				var jpicname = $("p[name='jpicname']").html();
				//执行ajax操作
				$.ajax({
					url:"<?php echo U('Person/update'); ?>",
					type:"post",
					data:{uid:uid,nickname:nickname,sex:sex,age:age,address:address,email:email,jpicname:jpicname},
					//data:{uid:1},
					dataType:"json", //返回的数据类型
					async:true, //是否异步
					success:function(res){
						
						
						//if(res){
							//$(".picdzancount").html(Math.abs(picdzancount));
							//alert("已赞");
						//}else{
							//$(".picdzancount").html(Math.abs(picdzancount)+1);
							//window.location.href="<?php echo U('Picgz/picshow'); ?>?picid="+pid+"&uid="+puid+"&photoid="+photoid;
							//$(".editcontent").css('display','none');
							alert('修改成功');
						//}
					   //spanid.html(8);
					   
					},
					error:function(){
						alert("修改失败！");
					}
				
				});
				
				
			});
			
			//控制id号为gerenmove的div层 并绑定鼠标按下事件 并绑定移动事件 以及鼠标松开事件
			$('#gerenmove').mousedown(function(event){ 
				var isMove = true; 
				var abs_x = event.pageX - $('div.editcontent').offset().left; 
				var abs_y = event.pageY - $('div.editcontent').offset().top; 
				$(document).mousemove(function(event){ 
					if (isMove) { 
						var obj = $('div.editcontent'); 
						if((event.pageX-abs_x)>0){
							obj.css({'left':Math.max((event.pageX - abs_x),0), 'top':(event.pageY - abs_y)});
						}
						//if((event.pageX-abs_x)>0 && (event.pageX-abs_x)<500){
							//obj.css({'left':event.pageX - abs_x, 'top':event.pageY - abs_y});
						//}
					} 
				}).mouseup(function(){ 
					isMove = false; 
				});
			});
		
		});
	</script>
	<!--编辑页面开始-->
	
	<div id="personmove" class="editcontent" style="width:600px;height:350px;background:#f2f2f2;position:absolute;top:450px;left:450px;z-inidex:10000000;border:1px solid #D5DCEE;display:none;overflow: hidden;">
		<form action="<?php echo U('Person/update'); ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $userdetail['id']; ?>">
			<input type="hidden" name="jpicname" value="<?php echo $userdetail['picname']; ?>">
			<p style="display:none" name="userid"><?php echo $userdetail['uid']; ?></p>
			<p style="display:none" name="jpicname"><?php echo $userdetail['picname']; ?></p>
			
			<div id="gerenmove" style="height:35px;background:#ccc;cursor:move;">
				<p style="text-align:center;line-height:35px;font-size:18px;font-weight:bold;">个人资料编辑</p>
			</div>
			<div style="height:330px;background:;padding:0 150px 0 15px;"> 
				<ul>
					<li style="height:30px;line-height:30px;font-size:15px;border-bottom:0px solid #ccc;">
						<span>登录名:</span>
						<span><?php echo \think\Session::get('homeuser'); ?></span>
					</li>
					<li style="height:30px;line-height:30px;font-size:15px;">
						<span>昵称名:</span>
						<span><input type="text" name="nickname" value="<?php echo $userdetail['nickname']; ?>"></span>
					</li>
					<li style="height:30px;line-height:30px;font-size:15px;">
						<span>个人头像:</span>
						<span><input type="file" name="picname"></span>
						
					</li>
					<img src="<?php echo APP_INDEX; ?>uploads/txpic/<?php echo $userdetail['picname']; ?>" width="100px" height="100px" style="float:right;">
					
					<li style="height:30px;line-height:30px;font-size:15px;">
						<span>性&nbsp;&nbsp;&nbsp; 别:</span>
						<span>
							<input type="radio" class="ra" name="sex" value="1" <?php if($userdetail['sex']==1) echo "checked"; ?>>男
							<input type="radio" class="ra" name="sex" value="0" <?php if($userdetail['sex']==0) echo "checked"; ?>>女
						</span>
					</li>
					<li style="height:30px;line-height:30px;font-size:15px;">
						<span>年&nbsp;&nbsp;&nbsp; 龄:</span>
						<span><input type="text" name="age" value="<?php echo $userdetail['age']; ?>"></span>
					</li>
					<li style="height:30px;line-height:30px;font-size:15px;">
						<span>地&nbsp;&nbsp;&nbsp; 址:</span>
						<span><input type="text" name="address" value="<?php echo $userdetail['address']; ?>"></span>
					</li>
					<li style="height:30px;line-height:30px;font-size:15px;">
						<span>邮&nbsp;&nbsp;&nbsp; 箱:</span>
						<span><input type="text" name="email" value="<?php echo $userdetail['email']; ?>"></span>
					</li>
					<li style="height:30px;line-height:30px;font-size:15px;">
						<span>注册IP:</span>
						<span><?php echo (isset($userdetail['ip']) && ($userdetail['ip'] !== '')?$userdetail['ip']:"127.0.0.1"); ?></span>
					</li>
					<li style="height:30px;line-height:30px;font-size:15px;">
						<span>注册时间:</span>
						<span><?php echo date("Y-m-d",$userdetail['regtime']); ?></span>
					</li>
					
					<li style="text-align:center;line-height:30px;">
						<input type="submit" value="编辑">&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="button" value="取消" name="closeedit">
					</li>
					
					<!-- <li style="text-align:center;line-height:30px;">
						<a href="javascript:void(0);" name="saveedit" style="font-size:16px;">保存</a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="javascript:void(0);" name="closeedit" style="font-size:16px;">取消</a>
					</li> -->
				</ul>
			</div>
		</form>
	</div>
	
	<!--编辑页面结束-->
	
	
	
	
	<!--内容区域结束处================================================================================-->
         
        </div>
    </div>
	
</div>
	</div>
	</div></div>
            <div class="WB_footer S_bg2" id="pl_common_footer"><div class="WB_footer S_bg2">
        <div class="footer_link clearfix">
           <dl class="list">
            <dt>微博精彩</dt>
            <dd><a class="col1 S_txt2" target="_blank" href="http://hot.plaza.weibo.com/?bottomnav=1&wvr=6&type=re&act=day">热门微博</a><a class="col1 S_txt2" target="_blank" href="http://huati.weibo.com/?bottomnav=1&wvr=6">热门话题</a></dd>
            <dd><a class="col1 S_txt2" target="_blank" href="http://verified.weibo.com/?bottomnav=1&wvr=6">名人堂</a><a class="col1 S_txt2" target="_blank" href="http://vip.weibo.com/home?bottomnav=1&wvr=6">微博会员</a></dd>
            <dd><a class="col1 S_txt2" target="_blank" href="http://photo.weibo.com/?bottomnav=1&wvr=6">微相册</a><a class="col1 S_txt2" target="_blank" href="http://game.weibo.com/?bottomnav=1&wvr=6">微游戏</a></dd>
            <dd><a class="col1 S_txt2" target="_blank" href="http://data.weibo.com/index/?bottomnav=1&wvr=6">微指数</a></dd>
          </dl>
          <dl class="list">
            <dt>手机玩微博</dt>
            <dd><a class="T_code col2">
                    <img src="<?php echo APP_INDEX; ?>common/person/person/footer_code.jpg" alt="二维码">
                </a>
                <a class="T_txt S_txt2 " href="http://m.weibo.cn/client/guide/show">扫码下载，更多版本<br>戳这里</a>
            </dd>
          </dl>
          <dl class="list">
            <dt>认证&amp;合作</dt>
            <dd><a class="col3 S_txt2" target="_blank" href="http://verified.weibo.com/verify?bottomnav=1&wvr=6">申请认证</a><a class="col3 S_txt2" target="_blank" href="http://open.weibo.com/?bottomnav=1&wvr=6">开放平台</a></dd>
            <dd><a class="col3 S_txt2" target="_blank" href="http://e.weibo.com/introduce/introduce?bottomnav=1&wvr=6">企业微博</a><a class="col3 S_txt2" target="_blank" href="http://open.weibo.com/connect?bottomnav=1&wvr=6">链接网站</a></dd>
            <dd><a class="col3 S_txt2" target="_blank" href="http://weibo.com/static/logo?bottomnav=1&wvr=6">微博标识</a><a class="col3 S_txt2" target="_blank" href="http://tui.weibo.com/?bottomnav=1&wvr=6">广告服务</a></dd>
            <dd><a class="col3 S_txt2" target="_blank" href="http://xueyuan.weibo.com/?bottomnav=1&wvr=6">微博商学院</a></dd>
          </dl>
          <dl class="list">
            <dt>微博帮助</dt>
            <dd><a class="col4 S_txt2" target="_blank" href="http://help.weibo.com/faq/q/358?bottomnav=1&wvr=6">常见问题</a></dd>
            <dd><a class="col4 S_txt2" target="_blank" href="http://help.weibo.com/selfservice?bottomnav=1&wvr=6">自助服务</a></dd>
          </dl>
        </div>
        <div class="other_link S_bg1 clearfix">
            <p class="copy">
            			<a href="http://ir.weibo.com/?bottomnav=1&wvr=6" class="S_txt2" target="__blank"><i class="W_icon icon_weibo"></i>关于微博</a><a href="http://help.weibo.com/?refer=didao&bottomnav=1" target="_blank" class="S_txt2">微博帮助</a><a class="S_txt2" href="http://help.weibo.com/newtopic/suggest?bottomnav=1" target="_blank">意见反馈</a><a class="S_txt2" target="_blank" href="http://weibo.com/aj/static/report.html?_wv=6">舞弊举报</a><a class="S_txt2" href="http://open.weibo.com/?bottomnav=1" target="_blank">开放平台</a><a class="S_txt2" href="http://hr.weibo.com/?bottomnav=1" target="_blank">微博招聘</a><a class="S_txt2" href="http://news.sina.com.cn/guide/?bottomnav=1" target="_blank">新浪网导航</a><a class="S_txt2" href="http://service.account.weibo.com/?bottomnav=1" target="_blank">社区管理中心</a><a class="S_txt2" href="http://service.account.weibo.com/roles/gongyue?bottomnav=1" target="_blank">微博社区公约</a><a class="S_txt2" href="http://weibo.com/aj/static/jicp.html?_wv=6" target="_blank">京ICP证100780号</a><a class="S_txt2" href="http://weibo.com/aj/static/medi_license.html?_wv=6" target="__blank">互联网药品服务许可证</a><a class="S_txt2" href="http://weibo.com/aj/static/medi_health_license.html?_wv=6" target="__blank">互联网医疗保健许可证</a></p>
            <p class="company"><span class="copy S_txt2">Copyright © 2009-2016 WEIBO 北京微梦创科网络技术有限公司</span><span><a class="S_txt2" href="http://weibo.com/aj/static/jww.html?_wv=6" target="_blank">京网文[2014]2046-296号</a><a class="S_txt2" href="http://www.miibeian.gov.cn/" target="_blank">京ICP备12002058号</a><a class="S_txt2" href="http://weibo.com/aj/static/license.html?_wv=6" target="_blank">增值电信业务经营许可证B2-20140447</a>
            <select node-type="changeLanguage" suda-data="key=tblog_home_click&amp;value=language_versions_click">
                <option value="zh-cn" selected="">中文(简体)</option>
                <option value="zh-tw">中文(台灣)</option>
                <option value="zh-hk">中文(香港)</option>
                <option value="en">English</option>
              </select></span></p>
            <p class="T_server S_txt2">服务热线：4000 960 960（个人/企业）服务时间9:00-21:00  4000 980 980（广告主）服务时间9:00-18:00 （按当地市话标准计算）        </p></div>
		</div>
		<div class="W_fold">
			<a href="javascript:void(0);">
				<em class="W_ficon ficon_arrow_right S_ficon">b</em>
			</a>
		</div>
		<!--置顶的图标-->
		<!--获取置顶图标-->
		<script>
           $(function(){
                $(window).scroll(function(){
					//alert(1);
				   if($(this).scrollTop()>20){
						//alert(1);
                        //$("#topding").show();
						$("#topding").css('display','block');
                    }else{
                        //$("#topding").hide();
						$("#topding").css('display','none');
                    }
				  // $("#topding").css('display','block');
				   
				   
                });
                
                $("#topding").click(function(){
                   $("body,html").animate({scrollTop:0},800);
				   //alert(1);
                });
           });
           
        </script>
		
		<!--置顶的图标-->
		<!-- <a class="W_gotop" id="base_scrollToTop" href="javascript:void(0);" style="visibility: visible; -webkit-transform: translateZ(0px); transform: translateZ(0px); position: fixed; bottom: 40px; top: auto; display:block;">
			<em class="W_ficon ficon_backtop">↑Top</em>
		</a> -->
		<div id="topding" style="width:41px;height:47px;background:url('<?php echo APP_INDEX; ?>common/person/person/top.png') no-repeat 0px -47px;position:fixed;right:120px;bottom:100px;display:none;"></div>
		
		
		
		
	</div>
</div>
</div>
<div id="pl_common_base"></div>
<div id="pl_common_forword"></div>
<div id="pl_common_dynamicskin"></div>
<div id="pl_lib"></div>
<div id="pl_common_webim"></div>

<div id="WB_webim" class="WB_webim" style="position: fixed; bottom: 0px; right: 0px; z-index: 1024;"><iframe id="cometd_imsdk_1" style="position: absolute; left: -100px; top: -100px; height: 1px; width: 1px; visibility: hidden;"></iframe>

<!--在线聊天小工具 隐藏-->
<div class="webim_fold clearfix" style="top: -40px; right: 0px; visibility: visible;display:none;" node-type="chatMiniRoot" action-type="chatmini" action-data="from=chatmini">    <div class="fold_bg"></div>    <p class="fold_cont clearfix">        <span class="fold_icon W_fl"></span>        <em class="fold_font W_fl W_f14" node-type="miniContent">私信聊天</em>    </p><div class="webim_hb" node-type="envolopeTip" action-type="getenvolope" style="top:-19px;left:214px;display:none;"></div><div></div></div></div><div i-am-music-player="" node-type="box" style="display: none;">
<div class="PCD_mplayer_layer" style="position: fixed; bottom: 90px; left: 30px; display: none;" node-type="confirm">
    <div class="content">
        <p class="main_txt"><span class="txt">确认要隐藏播放器吗？</span></p>
        <p class="sub_txt S_txt2">隐藏后点击页面任意播放按钮即可再次出现</p>
        <div class="btn">
            <a href="javascript:void(0);" action-type="hide" class="btn_a" suda-data="key=tblog_musicpageplayer&amp;value=click_close">确认</a>
            <a href="javascript:void(0);" action-type="hide_confirm" class="btn_b">取消</a>
        </div>
        <div class="layer_arrow"><span class="arrow_bor arrow_bor_b"><i class="arrow_a"></i><em class="arrow_b"></em></span></div>
    </div>
</div>
<div class="PCD_mplayer clearfix" node-type="mini" style="-webkit-transition:left .3s ease;-moz-transition:left .3s ease;-o-transition:left .3s ease;-ms-transition:left .3s ease;transition:left .3s ease;position:fixed;bottom:33px;left:0;z-index:9999;">
    <div class="mini clearfix">
        <div class="mini_panel_area">
            <a href="javascript:void(0)" class="mini_btn_area pause_state" node-type="mini_toggle_play" action-type="toggle_play">
                <i class="ico_ctrl ico_mini_state"></i>
                <span class="mask"></span>
                <img node-type="mini_photo" src="<?php echo APP_INDEX; ?>common/person/person/2862927.jpg" class="pic">
            </a>
        </div>
        <a href="javascript:void(0)" class="mini_fold_ctrl_area" action-type="toggle_fold">
            <i class="ico_ctrl ico_unfold"></i>
        </a>
        <a href="javascript:void(0);" action-type="show_confirm" class="ico_ctrl ico_close" title="关闭"></a>
    </div>
</div>
<div class="PCD_mplayer clearfix" node-type="player" style="-webkit-transition:left .5s ease;-moz-transition:left .5s ease;-o-transition:left .5s ease;-ms-transition:left .5s ease;transition:left .5s ease;position:fixed;bottom:20px;left:-690px;z-index:9999;">
    <div class="player_bg" node-type="">
        <div class="panel_area" node-type="list" style="display:none;">
    <div class="title_box">
        <div class="opt_btn">
            <a action-type="toggle_list" href="javascript:void(0);" class="ico_ctrl ico_close" title="关闭"></a>
        </div>
        <ul class="ul_title" node-type="songTitles"></ul>
        <div class="opt_box">
            <div class="search_box">
                <input node-type="searchinput" type="text" class="ipt_txt" placeholder="搜索歌曲/歌手">
                <a href="javascript:void(0)" action-type="list_searchBtn" class="search_btn"><i class="ico_mplayer ico_search"></i></a>
            </div>
        </div>
    </div>
    <div class="list_area">
        <div node-type="songlists" style="height:250px;width:685px;position:relative;left:0px;-webkit-transition:left .3s ease;-webkit-transition:left .3s ease;-moz-transition:left .3s ease;-o-transition:left .3s ease;transition:left .3s ease;">
            <div node-type="list_search_box" style="height:100%;width:685px;float:left;overflow:hidden;position:relative;"><div style="overflow:hidden;width:100%;height:100%;position:relative;_background:url(about:blank);"><div style="position:relative;height:100%;width:100%;overflow-y:scroll;overflow-x:hidden;-webkit-overflow-scrolling:touch;margin-right:-30px;padding-right:30px;">
                <div class="list_wrap" style="width:685px;height:auto;">
                    <div class="list_box">
                        <ul class="ul_list" node-type="list_search_area"></ul>
                    </div>
                    <div class="empty_box" node-type="list_search_area_loading" style="display:none">
                        <div style="height:30px;"></div>
                        <p class="text" node-type="list_search_area_empty_text">努力搜索中, 请稍后...</p>
                    </div>
                    <div class="empty_box" node-type="list_search_area_empty" style="display:none">
                        <i class="ico_ctrl ico_list_warn"></i>
                        <p class="text" node-type="list_search_area_empty_text">对不起，没有找到相应结果。</p>
                    </div>
                </div>
            </div></div><div class="scroll_box" style="bottom: 10px; visibility: hidden;"><div class="scroll_bar" style="top:0%; height:0;"></div></div></div>
        </div>
    </div>
</div>
        <div class="unfold_area">
            <div class="unfold_bg">
                <div class="time_wrap">
                    <div class="time_bar" node-type="progress_range_out">
                        <div class="cur_time_bg" style="width: 0%;" node-type="progress_range">
                            <a class="cur_time" href="javascript:void(0);" title="进度"></a>
                        </div>
                    </div>
                    <div class="time_count tcol_sub" node-type="time"><em>00</em>:<em>00</em></div>
                    <div class="layer_time" style="top:-20px; left:200px;z-index:1;pointer-events:none;display:none;" node-type="time_tip">
                        <div class="content">
                            <i class="ico_ctrl ico_time_arrow"></i>
                            <span node-type="time_tip_text">00:00</span>
                        </div>
                    </div>
                 </div>
                <div class="main_panel clearfix">
                    <div node-type="info" class="music_info"><!--temp start--><div class="music_pic"><a target="_blank" href="http://ting.weibo.com/?from=page_101515_player" title="微音乐" class="pic"><img src="<?php echo APP_INDEX; ?>common/person/person/default_cover.jpg"></a></div><div class="music_detail">    <p class="name_bar">        <a target="_blank" class="name autocut" href="http://ting.weibo.com/?from=page_101515_player" title="微音乐">微音乐</a>    </p>    <p class="author_bar autocut">                <a target="_blank" class="author tcol_sub" href="http://ting.weibo.com/?from=page_101515_player" title="微音乐">微音乐</a>            </p>    </div><!--temp end--></div>
                    <div class="contrl_panel">
                        <p class="layer_loop" style="display: none;" node-type="play_type_select">
                                <a href="javascript:void(0);" title="随机播放" class="ico_ctrl ico_rand" node-type="play_type_select_rand" action-type="play_type_select"></a>
                                <a href="javascript:void(0);" title="单曲循环" class="ico_ctrl ico_solo" node-type="play_type_select_solo" action-type="play_type_select"></a>
                                <a href="javascript:void(0);" title="列表循环" class="ico_ctrl ico_loop" node-type="play_type_select_loop" action-type="play_type_select"></a>
                            </p>
                        <div class="contrl_bar clearfix">   
                            <div class="base_ctrl">
                                <a href="javascript:void(0);" class="ico_ctrl ico_prev" action-type="prev" title="上一首"></a>
                                <a href="javascript:void(0);" class="ico_ctrl ico_play" node-type="toggle_play" action-type="toggle_play" title="播放/暂停"></a>
                                <a href="javascript:void(0);" class="ico_ctrl ico_next" action-type="next" title="下一首"></a>
                                <a href="javascript:void(0);" class="ico_ctrl ico_loop" node-type="play_type" action-type="play_type" title="列表循环"></a>
                            </div>
                            <div class="vol_ctrl">
                                <a href="javascript:void(0);" class="ico_ctrl ico_vol" title="音量" action-type="toggle_mute" node-type="toggle_mute"></a>
                                <div class="ctrl_bar" node-type="volume_range_out">
                                    <div class="cur_vol cur_volmute" style="width: 90%;" node-type="volume_range">
                                        <a href="javascript:void(0);" class="ico_ctrl ico_curvol" title="音量调节"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="opt_ctrl clearfix">
                                <a href="javascript:void(0);" class="ico_ctrl ico_like" action-type="like" node-type="like"></a>
                                <a href="javascript:void(0);" class="ico_ctrl ico_share" action-type="share" title="分享"></a>
                                <a href="javascript:void(0);" class="ico_ctrl ico_list" node-type="toggle_list" title="展开列表" action-type="toggle_list"></a>
                                <a href="javascript:void(0);" class="ico_lyric ico_lyric_open" node-type="toggle_lrc" action-type="toggle_lrc" title="显示歌词">词</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fold_ctrl_area" title="展开" action-type="toggle_fold" node-type="toggle_fold"><div class="mask"><a href="javascript:void(0);" class="ico_ctrl ico_unfold ico_fold"></a></div></div>
        <div class="lyric_wrap" node-type="lrc" style="display:none">
    <div class="lyric_bg">
        <a href="javascript:void(0);" class="ico_ctrl ico_close" title="关闭" action-type="toggle_lrc"></a>
        <div class="content" style="cursor: pointer;">
            <div class="tcol_sub" node-type="lrc_content" style="margin-top: 15px;"></div>
        </div>
    </div>
</div>
    </div>
</div>
</div><textarea id="_____textarea_____" style="width: 226.09375px; font-size: 12px; font-family: Arial, &#39;Microsoft YaHei&#39;; line-height: 18px; padding: 5px 2px 0px 6px; top: -1000px; height: 0px; position: absolute; overflow: hidden;"></textarea><div node-type="outer" style="position: fixed; top: 0px; left: 0px; width: 1349px; height: 623px; opacity: 0.3; z-index: 9999; display: none; background: rgb(0, 0, 0);"></div><div style="display: none;"><div class="layer_menu_list"><ul node-type="suggestWrap"></ul></div></div>

<!--用户头像显示div框-->
<div class="W_layer W_layer_pop " id="layer_14564139908511" style="left: 140.833333333333px; top: 948px;display:none;"><div class="content"><div class="layer_personcard" layout-shell="true" node-type="inner"><div class="layer_personcard">
	<div style="background-image:url(http://img.t.sinajs.cn/t6/skin/skinvip749/images/profile_cover_m.jpg?version=ace53fa98f147584)" class="nc_head">
    <div class="pic_box"><a href="http://weibo.com/u/3551024063?from=usercardnew&refer_flag=0000020001_" target="_blank"><img width="50" height="50" src="http://tp4.sinaimg.cn/3551024063/180/5720190319/1" imgtype="head" uid="3551024063" title="二货是怎样炼成的" suda-uatrack="key=tblog_usercard_new&amp;value=chick_iconver" class="W_face_radius"></a>
    <a target="_blank" suda-data="key=pc_apply_entry&amp;value=feed_card_icon" "="" href="http://verified.weibo.com/verify" class="icon_bed"><i title="知名搞笑幽默博主" class="W_icon icon_pf_approve"></i></a>    </div>
    
    <div class="mask">
        <div class="name"><a class="W_f14" target="_blank" href="http://weibo.com/u/3551024063?from=usercardnew&refer_flag=0000020001_" suda-uatrack="key=tblog_usercard_new&amp;value=chick_nick" title="二货是怎样炼成的" uid="3551024063">二货是怎样炼成的</a>
    		    		<em class="W_icon male" title="男"></em>
    		<a action-type="ignore_list" title="微博会员" target="_blank" href="http://vip.weibo.com/personal?from=main"><em class="W_icon icon_member5"></em></a>    	</div>
        <div class="intro W_autocut">
        
            	        	   <span title="知名搞笑幽默博主">简介：知名搞笑幽默博主</span>
    	                    </div>
    </div>
</div>

<div class="nc_content">
    <div class="c_count">
        <span class="c_follow W_fb"><a target="_blank" href="http://weibo.com/3551024063/follow?refer=usercard&wvr=5&from=usercardnew" suda-uatrack="key=tblog_usercard_new&amp;value=chick_attnum">关注<em class="num  W_fb">141</em></a></span>
        <span class="c_fans W_fb"><a target="_blank" href="http://weibo.com/3551024063/fans?refer=usercard&wvr=5&from=usercardnew&current=fans" suda-uatrack="key=tblog_usercard_new&amp;value=chick_fansnum">粉丝<em class="num W_fb">97万</em></a></span>
        <span class="c_weibo W_fb"><a target="_blank" href="http://weibo.com/3551024063/profile?refer=usercard&wvr=5&from=usercardnew&mod=weibo" suda-uatrack="key=tblog_usercard_new&amp;value=chick_pubnum">微博<em class="num W_fb">3584</em></a></span>
    </div>
    
    
    <div class="user_info">
	<ul class="info_ul clearfix">
		    				    <li class="info_li"><a class="interval W_autocut S_txt1" target="_blank" href="http://s.weibo.com/user?type=tag&tag=%E5%8C%97%E4%BA%AC" title="北京" suda-uatrack="key=tblog_usercard_new&amp;value=chick_area">北京</a>
		    </li>
							</ul>
</div>

    <div class="c_btnbox" node-type="followBtnBox" action-data="uid=3551024063&amp;fnick=二货是怎样炼成的&amp;f=1&amp;template=1&amp;refer_sort=card&amp;refer_flag=followed&amp;refer_flag=0000020001_&amp;refer_lflag=">
			<a href="javascript:void(0)" class="W_btn_b" action-type="follow" diss-data="refer_sort=card" action-data="uid=3551024063&amp;fnick=二货是怎样炼成的&amp;f=1&amp;extra=refer_sort:card"><em class="W_ficon ficon_add">+</em>关注他</a>
	 	      	<a class="W_btn_b" href="javascript:void(0)" action-type="webim.conversation" action-data="uid=3551024063&amp;nick=二货是怎样炼成的" suda-uatrack="key=V6newcard&amp;value=privateletter">私信</a>
		<a href="javascript:void(0);" class="W_btn_b W_btn_pf_menu" node-type="more"><em class="W_ficon ficon_menu S_ficon">=</em></a>
	
</div>
</div>

			<div class="nc_foot">
    <div class="other_item other_item_hover">
	    <div class="item_type W_fb">关系</div>
	        	    	<div class="item W_autocut">
    		<em>共同关注(5)：</em>
    		<span class=""><a class="S_txt1" target="_blank" title="青春如歌-乡村教师代言人-马云" href="http://weibo.com/mayun?from=usercardnew&mod=bothfollow" suda-uatrack="key=tblog_usercard_new&amp;value=chick_att_both">青春如歌-乡村教师代言人-马云</a>、<a class="S_txt1" target="_blank" title="笑到你肚子疼" href="http://weibo.com/liguohuang?from=usercardnew&mod=bothfollow" suda-uatrack="key=tblog_usercard_new&amp;value=chick_att_both">笑到你肚子疼</a>、<a class="S_txt1" target="_blank" title="内裤都笑松了" href="http://weibo.com/570855112?from=usercardnew&mod=bothfollow" suda-uatrack="key=tblog_usercard_new&amp;value=chick_att_both">内裤都笑松了</a>、<a class="S_txt1" target="_blank" title="姚晨" href="http://weibo.com/yaochen?from=usercardnew&mod=bothfollow" suda-uatrack="key=tblog_usercard_new&amp;value=chick_att_both">姚晨</a></span>
    	</div>
    		
</div>
		</div>
</div></div><div class="W_layer_arrow"><span class="W_arrow_bor W_arrow_bor_b" node-type="arrow" style="left: 117.666666666667px;"><i class="S_line3"></i><em class="S_bg2_br"></em></span></div></div></div></body></html>