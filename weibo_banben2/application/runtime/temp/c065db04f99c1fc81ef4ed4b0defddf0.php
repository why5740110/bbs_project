<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0045)http://photo.weibo.com/upload/index?prel=p4_1 -->
<html>
<head>
<meta charset="UTF-8">
        
        <title>上传照片</title>
		 
        <link href="<?php echo APP_INDEX; ?>common/add/common.css" rel="stylesheet" type="text/css">
       
        <link href="<?php echo APP_INDEX; ?>common/add/up_pict.css" rel="stylesheet" type="text/css">
        <script src="<?php echo APP_INDEX; ?>common/add/theia_1_4.js"></script>

    <link rel="Stylesheet" type="text/css" charset="utf-8" href="<?php echo APP_INDEX; ?>common/add/WB_outframe.css"><div style="position: absolute; top: -9999px;"><div id="js_style_css_module_global_WB_outframe"></div></div><style></style></head>
    <body class="P_uppict">
        <div id="weibo_top_public"><!--spec start--><!--简易顶部导航拼页面用-->
    <div class="WB_global_nav " node-type="top_all">
      <div class="gn_header clearfix">
        <!-- logo -->
        <div class="gn_logo" node-type="logo" data-logotype="logo" data-logourl="http://weibo.com?topnav=1&amp;mod=logo">
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
	          	<li><a href="<?php echo U('index/index'); ?>" nm="home" class="S_txt1" suda-uatrack="key=topnav_tab&amp;value=homepage" target="_top"><em class="W_ficon ficon_home S_ficon"></em><em class="S_txt1">首页</em><em class="W_new11"></em></a></li>
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
<script src="<?php echo APP_INDEX; ?>common/add/topInit.js"></script>

        <div class="F_album">
            <div class="m_nav" id="nav_small">
	<div class="nav_o clearfix">
		<h1 class="logo"><!-- <a href="http://photo.weibo.com/">photo</a> --></h1>
		<ul class="nav M_linkb">
		<li><a class="link" href="<?php echo U('Person/index'); ?>"><span class="valign">个人首页</span></a></li>
		<li><a class="link" href="<?php echo U('Pic/index'); ?>"><span class="valign">相册首页</span></a></li>
		<li class="album" node-type="show_menu"><a class="M_arrw_d_b11 link" href="<?php echo U('Pic/index'); ?>"><span class="valign">我的相册</span><span class="M_arrw_dwSml"></span></a>
			<div class="panel">
				<ul class="menulist M_linkb">
					<li><a href="<?php echo U('Photo/index'); ?>">我的专辑</a></li>
                    <li><a href="">我赞过的</a></li>
                    <li><a href="http://photo.weibo.com/2664098951/favorites/photos">我的收藏</a></li>
                    <li><a href="http://photo.weibo.com/2664098951/profile">我的动态</a></li>
				</ul>
			</div>
		</li>
		<!-- <li><a class="link" href="http://photo.weibo.com/welcome/hot"><span class="valign">相册广场</span></a></li> -->
		<li><a class="link" href="<?php echo U('Pic/picadd'); ?>"><span class="valign">上传</span></a></li>
		</ul>
       <!--  <div class="con">
            <a class="M_ico M_icon1" title="设置" href="http://photo.weibo.com/settings/index"></a>
            <a class="M_ico M_icon42" target="_blank" title="帮助" href="http://help.weibo.com/topic/photo?refer=photo"></a>
            <a title="反馈" target="_blank" href="http://comment4.news.sina.com.cn/comment/skin/feedback.html?channel=ly&newsid=294" class="M_linke feedback">反馈</a>
        </div>
		<div class="search">
			<form name="searchForm">
				<input type="text" node-type="search_input" value="搜索您感兴趣的标签" class="s_input M_txte" title="搜索您感兴趣的标签">
				<a class="btn" href="http://photo.weibo.com/upload/index?prel=p4_1#" node-type="search_btn" title="搜索按钮"></a>
			</form>
		</div> -->
	</div>
</div>

<div class="F_wrap clearfix" id="uploadPanel">
    <div class="F_main" node-type="upload" _tel="upload">
      <div class="m_path_tit clearfix">
          <div class="h M_btn">上传照片</div>
      </div>
      <!--m_browse_menu-->
	
	  
		  <div class="m_browse_menu clearfix">
			  <div class="lf M_txta">
				<!-- <span class="sa">上传至：</span> -->
				  <!--相册切换下拉菜单-->
				
				  <!-- <div node-type="album_select" class="se">
					  
				  <div class="m_smltSelect"><div class="select"><span class="name M_txtb">默认专辑(6)<span title="仅自己可见" class="M_ico  M_icon39"></span></span><span class="chose_btn M_ico"></span></div><div class="items M_linkb" style="display: none; z-index: 0;"></div><input type="hidden" name="select" value="3454582265827570"></div></div> -->
				  <!--/相册切换下拉菜单-->
			   <!--  <span class="crt">
					<a class="M_btn_c" action-type="album_add" href="http://photo.weibo.com/upload/index?prel=p4_1#">创建专辑</a>
								</span> -->
			  </div>
			  
			  <!--推荐活动-->
						<!--/推荐活动-->
			  
		  </div>
      <!--/m_browse_menu-->
      <!--图片上传-->
        <div class="flash_up" id="flash_upload" style="border:1px solid #ccc;width:800px;;height:300px;padding-top:50px;">
            
			<form action="<?php echo U('Pic/insert'); ?>" method="post" enctype="multipart/form-data">
				<span class="sa">上传至相册：</span>
				 <!--相册切换下拉菜单-->
				<select name="photoid">
					<?php foreach($photo_list as $vo): ?>
					<option value="<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></option>
					<!-- <option value="21">相册2</option> -->
					<?php endforeach; ?>
				</select><br><br>
					
				<input type="file" name="picname[]" multiple >
				
				<input type="submit" value="上传">
			</form>
			
        </div>
		
	
        <div class="m_upPic" id="common_upload" style="display:none"></div>
      <!--/flash-->
    </div>
    <div class="F_main" style="display:none;" node-type="upload" _tel="edit">
          <div class="m_path_tit clearfix">
              <div class="h M_txtc" node-type="upload_info"></div>
          </div>
          <div class="m_yllw_clew m_yllw_clew_a" node-type="tag_tip" style="display:none">
              <div class="inner">
                  <div class="detail">
                      <p>给照片<span class="M_txti tag"><span class="M_ico M_icon79"></span><strong>打标签</strong></span></p>
                      <p>让更多人看到你的照片！</p>
                  </div>
                  <div class="option">
                      <label for="chkbox_tag_tip" class="M_txtb remind"><input type="checkbox" id="chkbox_tag_tip" class="M_checkbox">不再提醒我</label>
                  </div>
                  <a title="关闭" action-type="close_tag_tip" class="M_ico M_icon29"></a>
                  <span class="M_triangle M_triangle_top"><em></em></span>
              </div>  
          </div>
          <!--m_add_tag-->
          <div class="m_add_tag">
              <div class="save_tag clearfix">
                  <p class="M_txta tit">批量添加标签:</p>
                  <div class="iptbd" action-type="tag_batch_box">
                      <div class="m_tag_a" node-type="photo_tags_batch">
                      </div>
                      <input class="M_txte" type="text" name="batch" node-type="batch_tag_input" value="单个标签10个字以内，最多10个标签，以空格隔开" title="单个标签10个字以内，最多10个标签，以空格隔开">
                      <input type="hidden" value="" name="batch">
                  </div>
                  <a class="M_btn_c" href="http://photo.weibo.com/upload/index?prel=p4_1#" action-type="submit">保存并发布</a>
              </div>
              <!--标签模块-->
              <div class="m_tag_a recom" node-type="common_tags">
              </div>
              <!--/标签模块-->
          </div>
          <!--/m_add_tag-->
          <!--图片列表-->
            <form name="uploadEditForm" onsubmit="return false">
            <ul class="plst clearfix" node-type="photo_list"></ul>
            </form>
          <!--/图片列表-->
          <div class="save"><a class="M_btn_a" href="http://photo.weibo.com/upload/index?prel=p4_1#" action-type="submit"><span>保存并发布</span></a>
		</div>
    </div>
	
	<!--新建专辑-->
	
		<div class="L_layer" node-type="outer" style="position: absolute; z-index: 100100; visibility: visible; top: 178px; left: 545px;display:none;" id="layer_14568856568821" stk-mask-key="14568856568823"><div class="bg"><table border="0" cellspacing="0" cellpadding="0"><tbody><tr><td><div class="content" node-type="layoutContent"><div node-type="title" class="title" style="cursor: move;"><span node-type="title_content">新建专辑</span></div><a node-type="close" action-type="close" title="关闭" href="javascript:void(0)" class="close"></a><div node-type="inner"><div class="L_editalbum">
	  <form name="albumForm" node-type="album_form">
		<div class="m_ly_tip" node-type="error_tip" style="display:none"></div>
		<div class="album_info">
			<dl class="m_Layform clearfix">
				<dt>专辑名称：</dt>
				<dd class="contBox"><input type="text" value="" name="caption" class="M_inpt" node-type="caption"></dd>
				<dd class="tipBox"><span class="M_txte" node-type="caption_w">15/15</span></dd>
			</dl>
			<dl class="m_Layform clearfix">
				<dt>专辑描述：</dt>
				<dd class="contBox"><textarea name="description" title="讲讲你和照片的故事...（非必填）" class="M_txtarea" node-type="description">讲讲你和照片的故事...（非必填）</textarea></dd>
				<dd class="tipBox"><span class="M_txte" node-type="description_w">124/140</span></dd>
			</dl>
		</div>
		<div class="authority">
		  <dl class="set_authort clearfix">
			<dt>设置权限：</dt>
			<dd class="M_txtb">
				<p>谁可以看到这个专辑？</p>
	<ul class="userlist">
	<li><input type="radio" value="1" class="M_radio" id="all" checked="" name="property" action-type="change_permission"><label for="all">所有人</label></li>
	<li><input type="radio" value="4" class="M_radio" id="each_o" name="property" action-type="change_permission"><label for="each_o">相互关注的人</label></li>
	<li><input type="radio" value="2" class="M_radio" id="self" name="property" action-type="change_permission"><label for="self">仅自己</label></li>
	<li><input type="radio" value="5" class="M_radio" id="ask" name="property" action-type="change_permission"><label for="ask">问题访问</label></li>
	</ul>
						<input type="hidden" name="album_id" value="">
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
			<a href="#" action-type="submit" class="M_btn_e"><span>创建</span></a><a href="#" action-type="close" class="M_btn_e"><span>取消</span></a>
		</div>
	  </form>
	</div></div></div></td></tr></tbody></table></div></div>
	
	
</div>            


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
            <p class="copyright">Copyright ? 2015-2025 WEIBO</p>
            <p>北京微梦创科网络技术有限公司 京ICP备12002058号</p>
        </div>
    </div>
</div>        </div>
                
        <script src="<?php echo APP_INDEX; ?>common/add/upload.js"></script>
    	<!-- SUDA_CODE_START -->
		<script type="text/javascript" charset="utf-8" src="<?php echo APP_INDEX; ?>common/add/suda.js"></script>
		<!-- SUDA_CODE_END -->
 
    

</body></html>