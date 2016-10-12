<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0073)http://photo.weibo.com/2664098951/photos/detail/photo_id/3642504728738567 -->
<html><head><meta charset="UTF-8">
        
        <title><?php echo $pusername['username']; ?>专辑</title>
        <link href="<?php echo APP_INDEX; ?>common/picshow/common.css" rel="stylesheet" type="text/css">
        
        <link href="<?php echo APP_INDEX; ?>common/picshow/phtoshow.css" rel="stylesheet" type="text/css">
        <script src="<?php echo APP_INDEX; ?>common/picshow/jquery.js"></script>

		<link rel="Stylesheet" type="text/css" charset="utf-8" href="<?php echo APP_INDEX; ?>common/picshow/WB_outframe.css">
		<div style="position: absolute; top: -9999px;">
			<div id="js_style_css_module_global_WB_outframe">
			</div>
		</div>
		<style>
			.icon_shoucang{
				width:50px;
				height:20px;
				float:left;
			}
		</style>
	</head>
    <body class="P_phtoshow">
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
					<li><a href="<?php echo U('index/index'); ?>" nm="home" class="S_txt1" suda-uatrack="key=topnav_tab&amp;value=homepage" target="_top"><em class="W_ficon ficon_home S_ficon"></em><em class="S_txt1">首页</em><em class="W_new111"></em></a></li>
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
<script src="<?php echo APP_INDEX; ?>common/picshow/topInit.js"></script>

        <div class="F_album">
            <div class="m_nav" id="nav_small">
		<div class="nav_o clearfix">
		<h1 class="logo"><!-- <a href="http://photo.weibo.com/">photo</a> --></h1>
		<ul class="nav M_linkb">
		<li><a class="link" href="<?php echo U('Persongz/index'); ?>?uid=<?php echo $pusername['id']; ?>"><span class="valign">他的个人首页</span></a></li>
		<li><a class="link" href="<?php echo U('Picgz/index'); ?>?uid=<?php echo $pusername['id']; ?>"><span class="valign">相册首页</span></a></li>
		<li class="album" node-type="show_menu"><a class="link" href="<?php echo U('picgz/photo'); ?>?uid=<?php echo $pusername['id']; ?>"><span class="valign">他的相册</span><span class="M_arrw_dwSml"></span></a>
			<div class="panel">
				<ul class="menulist M_linkb">
					<li><a href="<?php echo U('Photo/index'); ?>">他的专辑</a></li>
                    <li><a href="http://photo.weibo.com/2664098951/likes/photos">他赞过的</a></li>
                    <li><a href="http://photo.weibo.com/2664098951/favorites/photos">他的</a></li>
                    <li><a href="http://photo.weibo.com/2664098951/profile">他动态</a></li>
				</ul>
			</div>
		</li>
	
		</ul>
       
	</div>
</div>
	
	<!--针对下面 点赞 按钮的js控制-->
	<script>
		$(function(){
			//获取点赞按钮并绑定点击事件
			$("div[node-type='right_bar']").click(function(){
				//获取该图片的id和该图片对应的用户uid
				pid = $("#picshowid").html();
				//获取用户相册id
				photoid = $("#photoshowid").html();
				//alert(photoid);
				//用户id
				puid = $(".puid").html();
				//获取点赞数
				picdzancount = $(".picdzancount").html();
				//alert(picdzancount);
				//alert(puid);
				//发送ajax操作
				$.ajax({
					url:"<?php echo U('Picdzan/insert'); ?>",
					type:"post",
					data:{id:pid,puid:puid},//参数
					dataType:"html", //返回的数据类型
					async:true, //是否异步
					success:function(res){
						
						
						if(res){
							//$(".picdzancount").html(Math.abs(picdzancount));
							alert("已赞");
						}else{
							$(".picdzancount").html(Math.abs(picdzancount)+1);
							window.location.href="<?php echo U('Picgz/picshow'); ?>?picid="+pid+"&uid="+puid+"&photoid="+photoid;
							alert('赞+1');
						}
					   //spanid.html(8);
					   
					},
					error:function(){
						alert("失败！");
					}
				});
			
			});
			
			//获取收藏按钮 并绑定点击事件
			$("a[action-type='my_shoucang']").click(function(){
				//获取该图片的id和该图片对应的用户uid
				pid = $("#picshowid").html();
				//alert(pid);
				//获取用户相册id
				photoid = $("#photoshowid").html();
				//alert(photoid);
				//发布图片用户id
				puid = $(".puid").html();
				//alert(puid);
				//获取点赞数
				//picdzancount = $(".picdzancount").html();
				
				//发送ajax操作
				$.ajax({
					url:"<?php echo U('Picshoucang/insert'); ?>",
					type:"post",
					data:{id:pid,puid:puid,photoid:photoid},//参数
					dataType:"html", //返回的数据类型
					async:true, //是否异步
					success:function(res){
						if(res){
							//$(".picdzancount").html(Math.abs(picdzancount));
							alert("你已收藏过了");
						}else{
							//$(".picdzancount").html(Math.abs(picdzancount)+1);
							//window.location.href="<?php echo U('Picgz/picshow'); ?>?picid="+pid+"&uid="+puid+"&photoid="+photoid;
							alert('收藏到我的收藏中');
						}
					   //spanid.html(8);
					   
					},
					error:function(){
						alert("失败！");
					}
				});
			
			});
			
			
		});
	
	</script>
	<!--F_wrap-->
	<div class="F_wrap clearfix" id="pl_main">
    	<!--F_cols_main-->
    	<div class="F_cols_main">
        	<!--美化喜欢-->
            <div class="m_browse_menu clearfix">
				<div class="m_bread_crumb" node-type="list_crumbs"><a href="<?php echo U('Picgz/index'); ?>?uid=<?php echo $pusername['id']; ?>" class="M_linkb"><?php echo $pusername['username']; ?>的专辑</a><span class="arrow">&gt;</span><a href="<?php echo U('Picgz/photo'); ?>?uid=<?php echo $pusername['id']; ?>" class="M_linkb">他的相册</a><span class="arrow">&gt;</span><strong>当前照片</strong></div>
                <div class="m_share_like" node-type="right_bar">
				
					<!-- <a href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3642504728738567#" class="M_linkb M_transmit_bg" action-type="intransit"><span class="bg"><span class="M_ico M_icon8"></span>分享</span></a> -->
					<span class="M_dotted_y" node-type="dotted"></span>
					<a href="javascript:void(0);" class="M_linkb M_like_bg" action-type="biglike">
						<span class="bg">
							
							<?php if(1): ?>
								<span class="M_ico M_icon7_on"></span>赞(<em class="picdzancount"><?php echo $pic_dzan_count; ?></em>)
								<?php else: ?>
								<span class="M_ico M_icon7_on"></span>已赞(<em class="picdzancount"><?php echo $pic_dzan_count; ?></em>)
							<?php endif; ?>
						</span>
					</a>
				</div>
            </div>
            <!--/美化喜欢-->
        	<!--单照片-->
            <dl class="m_photoItem m_photoItem_c" node-type="bigImgContainer">
                <dd class="photo" node-type="photo" style="position:relative;"><!--class属性值 M_cur_ph_next向后一张  M_cur_ph_prev 向前一张-->
					<div class="leftclick" style="width:50px;height:100px;display:none;position:absolute;top:120px;left:25px;cursor:pointer;">
						<img src="<?php echo APP_INDEX; ?>common/picshow/left_click.jpg">
				   </div>
				   <p name="piclisall" style="display:none;"><?php echo $photo_pic_listcount; ?></p>
                   <?php foreach($pic_show as $show): ?>
				   <div class="img_wrap" id="bigImgWrap" node-type="bigImgWrap" style="margin-bottom: 0px;">
						<!--获取该图片的id号-->
						<div id="picshowid" style="display:none;"><?php echo $show['id']; ?></div>
						<div id="photoshowid" style="display:none;"><?php echo $show['photo_id']; ?></div>
						
						<img id="bigImg"  src="<?php echo APP_INDEX; ?>/uploads/pic/<?php echo $show['picname']; ?>" style="width: 475px; height: 353px;">
						
						<div class="like_btn" node-type="like_wrap" style="visibility: hidden;">
							<a href="javascript:void(0)" node-type="like_bar" class="v5W_btn_alpha" title="赞">
								<i class="icon_praised"></i>
								<span>(1)</span>
							</a>
						</div>
					</div>
					<?php endforeach; ?>
					<div class="rightclick" style="width:50px;height:100px;display:none;position:absolute;top:120px;left:615px;cursor:pointer;">
						<img src="<?php echo APP_INDEX; ?>common/picshow/right_click.jpg">
					</div>
                </dd>
				<dd node-type="photo_info">
					<div class="m_browse_menu m_browse_menu_a clearfix">
						<div class="operat" node-type="operat">

						</div>
					</div>
			        <p class="desc M_txtb" node-type="desc">
						<em style="display: none;"></em>
						<p class="picid" style="display:none;"><?php echo $show['id']; ?></p>
						<p class="puid" style="display:none;"><?php echo $show['uid']; ?></p>
						<span node-type="editdes" class="edit_tip">
							<!-- <a href="javascrip:viod(0);" action-type="photo_edit">编辑描述</a> -->
							图片描述:<span class="description"><?php echo $show['descrip']; ?></span>
						</span>
					</p>
			    	<div class="attr_box clearfix" node-type="info">
						<p class="time M_txtb">
							上传于<span class="date"><?php echo date("Y-m-d",$show['addtime']); ?></span>
							<!-- 来自<a href="http://app.weibo.com/t/feed/1FFmkH" title="微相册">微相册</a>  -->                   
							<span class="limit">
								<span class="M_ico " title=""></span>
							</span> 
							<a href="javascript:void(0);" class="M_linke M_fav_sm M_dotted_y" action-type="my_shoucang" title="收藏">
								收藏
							</a>
						</p> 
						
						<!-- <div class="mark_box">                     
							<a href="http://photo.weibo.com/2664098951/photos/large/photo_id/3642504728738567/album_id/3423857315111989" class="M_linke M_showbig_sm" node-type="get_big_img" target="_blank" title="查看大图">
								<span class="M_ico M_icon91"></span>查看大图
							</a>                                          
							<span class="M_txtb M_look_sm" title="浏览">
								<span class="M_ico M_icon10"></span>1
							</span>                     
							<a href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3642504728738567#" class="M_txtb M_transmit_sm" title="分享" node-type="intransit" action-type="intransit">
								<span class="M_ico M_icon4" action-type="intransit"></span>0
							</a>                     
							<a href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3642504728738567#" class="M_linke M_comment_sm" title="评论" action-type="comment">
								<span class="M_ico M_icon5" action-type="comment"></span>0
							</a>                     
							<a href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3642504728738567#" class="M_linke M_like_sm" title="赞" node-type="like_small" action-data="target_id=3642504728738567&amp;like_uid=2664098951&amp;type=2&amp;property=1&amp;is_private=false" action-type="unlike">
								<span class="M_ico M_icon6_on"></span>1
							</a>                     
						</div> -->
					</div>
			    </dd>
            </dl>
			
			<!--点击191编辑 按钮弹出编辑框 ,修改图片描述信息-->
			 <script>
				$(function(){
					//点击编辑标签，让编辑框显示出来
					$("a[action-type='photo_edit']").click(function(){
						$(".L_layer").css('display','block');
						picid = $(this).parent().parent().children('.picid').html();
						description = $('.description');
						
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
					
					
					//==================================================================================
					//获取图片显示的209行的dl标签 并绑定鼠标移入事件
					$("dd[node-type='photo']").mouseover(function(){
						//左右箭头显示出来
						$(".leftclick").show();
						$(".rightclick").show();
						
					}).mouseout(function(){
						//左右箭头隐藏出来
						$(".leftclick").hide();
						$(".rightclick").hide();
					});
					
					//获取数组
					//piclistcount = $("p[name='piclisall']").html();
					//i = $('.cur').index();
					
					//给右箭头绑定点击事件
					$(".rightclick").click( function(){
						//获取当前相册的总图片张数
						var piclistcount = $("p[name='piclisall']").html();
						//获取当前页的页码
						var page = $(".M_loading li .pagename").html();
						//算出当前相册可以分为最多多少页
						var total = Math.ceil(piclistcount/9);
						//获取当前小图片在遍历循环的索引位置
						var i = $('.cur').index();
						
						if(page < total){
							//将当前索引位置的li标签的class属性值设置为空
							$(".M_loading li").eq(i).attr('class','');
							//将索引位置i的值加1
							var i = i+1;
							//将索引位置为i的li标签的class属性值设置为cur
								$(".M_loading li").eq(i).attr('class','cur');
								//var aa = $(".M_loading li").eq(i).$("img").attr('src');
								//获取小图片的src连接
								var imgsrc = $(".M_loading .cur #imglist").attr('src');
								//获取当前图片的a连接的href 将这个连接赋值给当前页面window.location.href
								var ahref = $(".M_loading .cur a").attr('href');
								window.location.href = ahref;
							if(i>8){
								//将索引位置为i的li标签的class属性值设置为cur
								$(".M_loading li").eq(8).attr('class','cur');
								//var aa = $(".M_loading li").eq(i).$("img").attr('src');
								//获取小图片的src连接
								var imgsrc = $(".M_loading .cur #imglist").attr('src');
								//获取当前图片的a连接的href 将这个连接赋值给当前页面window.location.href
								var ahref = $(".M_loading .cur a").attr('href');
								window.location.href = ahref;
								alert('已经在当前页面 最后一张图片');
							}
						}
						
						if(page == total){
							//计算出最后一页中有多少张图片
							var picnum = piclistcount-(page-1)*9;
							
							//将当前索引位置的li标签的class属性值设置为空
							$(".M_loading li").eq(i).attr('class','');
							//将索引位置i的值加1
							var i = i+1;
							//将索引位置为i的li标签的class属性值设置为cur
							$(".M_loading li").eq(i).attr('class','cur');
							//var aa = $(".M_loading li").eq(i).$("img").attr('src');
							//获取小图片的src连接
							var imgsrc = $(".M_loading .cur #imglist").attr('src');
							//获取当前图片的a连接的href 将这个连接赋值给当前页面window.location.href
							var ahref = $(".M_loading .cur a").attr('href');
							window.location.href = ahref;
							
							if(i > (picnum-1)){
								//将索引位置为i的li标签的class属性值设置为cur
								$(".M_loading li").eq(picnum-1).attr('class','cur');
								//var aa = $(".M_loading li").eq(i).$("img").attr('src');
								//获取小图片的src连接
								var imgsrc = $(".M_loading .cur #imglist").attr('src');
								//获取当前图片的a连接的href 将这个连接赋值给当前页面window.location.href
								var ahref = $(".M_loading .cur a").attr('href');
								window.location.href = ahref;
								alert('已经在当前页面 最后一张图片');
							}
						}
					});
					
					//给左箭头绑定点击事件
					$(".leftclick").click( function(){
						//获取数组
						var piclistcount = $("p[name='piclisall']").html();
						var i = $('.cur').index();
						$(".M_loading li").eq(i).attr('class','');
						//alert(piclistcount);
						//获取当前图片所在的li的位置
						//alert(i);
						var i = i-1;
						//获取当前页的页码
						var page = $(".M_loading li .pagename").html();
						if(i < 0){
							$(".M_loading li").eq(0).attr('class','cur');
							var aa = $(".M_loading .cur #imglist").attr('src');
							$("#bigImg").attr("src",aa);
							//获取当前图片的a连接的href 将这个连接赋值给当前页面window.location.href
							var ahref = $(".M_loading .cur a").attr('href');
							window.location.href = ahref;
							alert('不能在前翻了，已经是本页的第一张咯 ~_~');
							//$("#bigImg").attr("src",imgsrc);
						}else{
							
							$(".M_loading li").eq(i).attr('class','cur');
							var aa = $(".M_loading .cur #imglist").attr('src');
							var ahref = $(".M_loading .cur a").attr('href');
							window.location.href = ahref;
							$("#bigImg").attr("src",aa);
						}
					});
					//==================================================================================
					
					
				});
			 </script>
			
			<!--编辑的div 191行编辑按钮-->
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
			
			
            <!--/单照片-->

        <!--评论_回复-->
		<!-- 给回复评论绑定事件 -->
		<script>
			$(function(){
				//获取评论节点 并绑定点击事件
				$(".M_btn_c").live('click',function(){
					//alert('你好');
					//控制submit提交
					//var reply = $("#reply").find("input[type='submit']");
					//获取图片id号
					pid = $("#picshowid").html();
					//获取用户相册id
					photoid = $("#photoshowid").html();
					//获取发布图片的用户id
					var uid = $(".puid").html();
					//alert(uid);
					//获取文本域写入的内容
					var reply = $("textarea[name='reply']").val();
					//alert(reply);
					//获取div框
					var div = $('div #p_replynum');
					//获取评论总数
					var replycount = $('.M_txtb #replytotal');
					
					var replynum = Math.abs(replycount.html())+1;
					//alert(replycount.html());
					//alert(replycount.html());
					//执行ajax操作
					$.ajax({
						url:"<?php echo U('Picreply/insert'); ?>",
						type:'post',
						data:{id:pid,reply:reply,uid:uid},
						dataType:'html',
						async:true,
						success:function(){
							
							//reply.trigger("click");
							
							//在div中添加的内容
							
							//var str = '<span>'+reply+'</span>';
							
							//添加行
							//div.append(data);
							replycount.html(replynum);
							window.location.href="<?php echo U('Picgz/picshow'); ?>?picid="+pid+"&uid="+uid+"&photoid="+photoid;
							alert('评论成功');
						},
						error:function(){
							alert('评论失败！');
						}
					
					});
				});
				
				
				//====================
				//点击点赞和评价选项
				//获取点赞和点击评论文字
			/*	$(".cmnt_count a").click(function(){
					
					var i = $(this).index();
					
					$(this).$('.m_commentList .m_replynum')..hide().eq(i).show();
					
				
				});*/
				
			});
		</script>
		
		<script>
			$(function(){
				$(".m_commentList p a").click(function(){
					
					//alert('sss');
					//获取点击位置
					var i = $(this).index();
					//alert(i);
					$('.m_commentList .m_replynum').hide().eq(i).show();
				});
			
			});
		
		</script>
		
		<script>
			/*$(function(){
				$('.cmnt_count .cmnt span').click(function(){
					alert($(this).html());
				});
			}); */
		</script>
        <div node-type="detail_comment" class="m_commentWrap">
			<div class="m_commentBox">
				<div class="cmnt_area" node-type="face_parent">
					
						<textarea class="M_txtarea" name="reply" node-type="comment_txt1456406623181" id="_1456406623537" placeholder="请输入评论内容..." style="overflow:hidden;" autocomplete="off"></textarea>
						
					<div class="submit M_txtb">
						<div class="forward">                    
							<span node-type="comment_face1456406623181" class="M_ico M_icon30"></span>
							<label class="t" style="display: none;">
								<input node-type="comment_intransit1456406623181" type="checkbox" class="M_checkbox">同时分享到微博
							</label>                    
						</div>
						<button class="M_btn_c" node-type="comment_reply_btn1456406623181" >评论</button>
					</div>
				</div>
			</div>
			
			
			<div class="m_commentList">
				<p class="cmnt_count M_txtb">
					<!--<a href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3642504728738567#" node-type="back_all1456406623181" class="backall M_linkc" style=""></a>-->
					<a class="like cmnt M_linkc" node-type="like_count_control" href="javascript:void(0);">赞 (<span class="picdzancount" node-type="like_count_wrap1456406623181"><?php echo $pic_dzan_count; ?></span>)</a>
					<span class="M_vline M_linkc"></span>
					<a class="cmnt M_linkc" node-type="count_control1456406623181" href="javascript:void(0);">评论 (
						<span id="replytotal" node-type="count_wrap1456406623181"><?php echo $pic_reply_count; ?></span>)
					</a>
				</p>
				<!--用户点赞 页面开始-->
				<div class="m_replynum" node-type="comment_allreply_wrap1456406623181" style="display:block;">
					<!-- <span>sssssssss</span> -->
					<?php foreach($pic_dzan_list as $key=>$vzan): ?>
					<dl class="reply_items clearfix" is_liker="true" node-data-name=" " node-data-user-id="2664098951" node-data-target="" node-data-uid="" uid="2664098951" style="border-bottom:1px solid #ccc;">                    
						<dt class="m_thumb m_thumb_b">                      
							<a title="" href="<?php echo U('Picgz/index'); ?>?uid=<?php echo $vzan['zuid']; ?>" action-type="get_card" action-data=" ">
								<img src="<?php echo APP_INDEX; ?>uploads/txpic/<?php echo $zpicname[$key]['picname']; ?>" width="50">
							</a>                    
						</dt>                    
						<dd class="reply_cont">                        
							<div class="contBox" node-type="reply_mini">                            
								<p class="M_txtb">                              
									<span class="reply_nm">                                
										<a href="<?php echo U('Picgz/index'); ?>?uid=<?php echo $vzan['zuid']; ?>" action-type="get_card" action-data=""><?php echo $uname[$key]['username']; ?>:</a>
										<!-- <a class="M_club" action-islogin="islogin" title="微博达人" href="http://club.weibo.com/intro" target="_blank"></a> -->
									</span>                              
									<span class="cont" node-type="comment_content1456406623181">
										<span class="M_ico M_icon6_on"></span> 赞了这张照片
									</span>                              
									<!-- <a href="http://photo.weibo.com/2664098951/likes/photos" class="likes">我还赞了 4 张</a>  -->                           
								</p>                            
						  <!-- <p class="time_reply M_txtb">
									<span class="time">&nbsp;</span>
								</p>   -->                          
								<!-- <div node-type="like_list1456406623181">
									<ul class="likeList clearfix">
										<li class="">
											<a href="http://photo.weibo.com/2664098951/likes/photo_detail/photo_id/3751047904624846">
												<img width="40" height="40" src="<?php echo APP_INDEX; ?>common/picshow/af9c22f4jw1ek0b0gb4chj20bs0b474h.jpg">
											</a>
										</li>
										<li class="">
											<a href="http://photo.weibo.com/2664098951/likes/photo_detail/photo_id/3488836198231224">
												<img width="40" height="40" src="<?php echo APP_INDEX; ?>common/picshow/a7572e36gw1dwrseueaboj.jpg">
											</a>
										</li>
									</ul>
								</div>      -->                   
							</div>                    
						</dd>             
					</dl>
					<?php endforeach; ?>
					<div style="text-align:center;font-size:12px;"><?php echo $zanpageshow; ?></div>
				</div>
				<!--用户点赞 页面结束-->
				
				<div class="m_replynum" style="display:none;"></div>
				<!--用户评论-->
				<!-- <div id="p_replynum" class="m_replynum" style="display:none;">
					
						<div style="border:1px solid #ccc;height:20px;"></div>
					
				</div> -->
				
				<!--+++++++++++++++++++++++++++==============评论公告========+++++++++++++++++++++++++-->
				<div class="m_replynum" style="display:none;" node-type="comment_allreply_wrap1457278734167">
					<?php foreach($pic_reply as $key=>$vo): ?>
					<dl class="reply_items clearfix" node-data-name="" node-data-user-id="2664098951" node-data-target="3642504728738567" node-data-uid="2664098951" node-data-id="3950126539403751">                    
						<dt class="m_thumb m_thumb_b">                      
							<a title="" href="<?php echo U('Picgz/index'); ?>?uid=<?php echo $vo['ruid']; ?>" action-type="get_card" action-data="">
								<img src="<?php echo APP_INDEX; ?>uploads/txpic/<?php echo $rpicname[$key]['picname']; ?>">
							</a>                    
						</dt>                    
						<dd class="reply_cont">                        
							<div class="contBox" node-type="reply_mini">                            
								<p class="M_txtb">                              
									<span class="reply_nm">                                
										<a href="<?php echo U('Picgz/index'); ?>?uid=<?php echo $vo['ruid']; ?>" action-type="get_card"><?php echo $runame[$key]['username']; ?></a>
										<a class="M_club" action-islogin="islogin" title="微博达人" href="http://club.weibo.com/intro" target="_blank"></a>:                               
									</span>                              
									<span class="cont" node-type="comment_content1457278734167"><?php echo $vo['reply']; ?></span>                            
								</p>                            
								<p class="time_reply M_txtb">                     
									<span class="time"><?php echo date('Y-m-d',$vo['reply_time']); ?></span>
									<!-- <span class="del_lk M_linkc">
										<a href="#" node-type="comment_del_btn1457278734167" node-data="2664098951">删除</a>
										<em class="M_vline"></em>
									</span> -->
									<!-- <span class="reply_lk M_linkc">
										<a href="#" node-type="comment_reply_txt1457278734167" node-data="2664098951">回复</a>
									</span>    -->           
								</p>                        
							</div>                    
						</dd>             
					</dl>
					<?php endforeach; ?>
					<div style="text-align:center;font-size:12px;"><?php echo $replypageshow; ?></div>
				</div>
				
				
				<!--+++++++++++++++++++++++++++======================+++++++++++++++++++++++++-->
				
				
				
			</div>
			<div class="m_pages m_pages_comment M_linke" style="padding:20px 10px 0 0;display:block;">
				
				
			
			</div>
		</div>
        <!--/评论_回复-->
        </div>
        <!--/F_cols_main-->
        <!--F_cols_second-->
        <div class="F_cols_second">
          <!--右侧-->
          <div class="m_aside clearfix">
            <!--用户头像-->
            <div class="widget user_data" node-type="user_box">
<div class="content">
	<div class="m_user_album clearfix">
		<dl class="user">
			<dt class="m_thumb m_thumb_d">
				<a href="<?php echo U('picgz/index'); ?>?uid=<?php echo $pusername['id']; ?>" title=" ">
				<img src="<?php echo APP_INDEX; ?>uploads/txpic/<?php echo $puserlist['picname']; ?>" width="180">
				</a>
			</dt>
			<dd class="user_info">
			  <div class="about">
				<div class="namebox clearfix">
					<p class="name">
					<a href="<?php echo U('picgz/index'); ?>?uid=<?php echo $pusername['id']; ?>" title=" " class="M_linkd name" style="font-weight:bold;"><?php echo $pusername['username']; ?></a>
					<a class="M_club" action-islogin="islogin" title="微博达人" href="http://club.weibo.com/intro" target="_blank"></a>
					</p>
					<div class="btn"></div>
				</div>
				<p class="M_txtb location"><span class="M_ico M_icon34"></span><?php echo (isset($puserlist['address']) && ($puserlist['address'] !== '')?$puserlist['address']:"江西 九江"); ?></p>
			  </div>
			  <div class="static_num clearfix">
			  	<dl>
					<dt><a href="<?php echo U('picgz/photo'); ?>?uid=<?php echo $pusername['id']; ?>"><?php echo $photo_count; ?></a></dt>
					<dd><a href="<?php echo U('picgz/photo'); ?>?uid=<?php echo $pusername['id']; ?>" class="M_linkb">专辑</a></dd>
				</dl>
				<dl class="M_dotted_y">
					<dt><a href="<?php echo U('Picgz/index'); ?>?uid=<?php echo $pusername['id']; ?>"><?php echo $pic_total; ?></a></dt>
					<dd><a href="<?php echo U('Picgz/index'); ?>?uid=<?php echo $pusername['id']; ?>" class="M_linkb">照片</a></dd>
				</dl>
				<dl class="M_dotted_y">
					<dt><a href="<?php echo U('Picgz/picdzan'); ?>?uid=<?php echo $pusername['id']; ?>"><?php echo $dzan_total; ?></a></dt>
					<dd><a href="<?php echo U('Picgz/picdzan'); ?>?uid=<?php echo $pusername['id']; ?>" class="M_linkb">赞过</a></dd>
				</dl>
			  </div>
			</dd>
		</dl>
	</div>
</div>
</div>
            <!--/用户头像-->
              <div class="widget pic_manage" node-type="picManage" style="display: none;">
                <div class="title M_txtc"><span class="tit">照片管理</span></div>
                <div class="content">
                    <div class="btn_box">
                        <a action-type="addToTag" class="M_btn_c" href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3642504728738567#">推荐至标签</a>
                    </div>
                    <p style="display:none;" class="addtag M_txtb" node-type="photo_tags"></p>
                </div>
              </div>
              <div class="widget thumbnail">
					<div class="content show_album" node-type="content_album">
						<div class="attrib">
							<a href="<?php echo U('Picgz/photopic'); ?>?uid=<?php echo $pusername['id']; ?>&photoid={}" class="count" style="" node-type="photo_counts">共<?php echo $photo_pic_count; ?>张</a>
							<p class="album_nm M_txtd">
								<span class="M_arrw_lf" style="display: none;"></span>
								<span class="link">
									<?php foreach($photo_name as $ph): ?>
								<a href="<?php echo U('picgz/photopic'); ?>?uid=<?php echo $ph['uid']; ?>&photoid=<?php echo $ph['id']; ?>" class="M_linkd" action-type="album_url" node-type="album_name" title="头像相册">专辑:<span><?php echo $ph['title']; ?><span></span></span></a>
									<?php endforeach; ?>
								</span>
							</p>
						</div>
						<div class="m_thumbnail">
							<div class="piclist">
								<ul class="M_loading">
									<?php foreach($photo_pic_list as $plist): ?>
									<li <?php if($pic_show[0]['id'] == $plist['id']): ?>class="cur"<?php endif; ?> big-pic="" type="2" uid="2664098951" album_id="<?php echo $plist['id']; ?>" data-id="3642504728738567" data-url="http://photo.weibo.com/2664098951/photos/detail/photo_id/3642504728738567/album_id/3423857315111989">
										<p class="pagename" style="display:none;"><?php echo $page; ?></p>
										<a href="<?php echo U('Picgz/picshow'); ?>?picid=<?php echo $plist['id']; ?>&uid=<?php echo $plist['uid']; ?>&photoid=<?php echo $plist['photo_id']; ?>&p=<?php echo $page; ?>">
											<img id="imglist" src="<?php echo APP_INDEX; ?>uploads/pic/<?php echo $plist['picname']; ?>" title="imglist">
										</a>
									</li>
									<?php endforeach; ?>
									<!-- <li big-pic="http://ww2.sinaimg.cn/mw690/9ecaec87gw1e73hc4ojczj203x03rwen.jpg" type="2" uid="2664098951" album_id="3423857315111989" data-id="3605345632135804" data-url="http://photo.weibo.com/2664098951/photos/detail/photo_id/3605345632135804/album_id/3423857315111989">
										<a href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3642504728738567#">
											<img src="<?php echo APP_INDEX; ?>common/picshow/9ecaec87gw1e73hc4ojczj203x03rwen.jpg" title="">
										</a>
									</li>
									<li class="empty" data-id="">
										<span class="empty_con"><em></em>
										</span>
									</li>
									<li class="empty" data-id="">
										<span class="empty_con"><em></em>
										</span>
									</li>
									<li class="empty" data-id="">
										<span class="empty_con"><em></em>
										</span>
									</li>
									<li class="empty" data-id=""><span class="empty_con"><em></em></span></li><li class="empty" data-id=""><span class="empty_con"><em></em></span></li><li class="empty" data-id=""><span class="empty_con"><em></em></span></li><li class="empty" data-id=""><span class="empty_con"><em></em></span>
									</li> -->
								</ul>
							</div>
							<div style="text-align:center;font-size:12px;"><?php echo $picpageshow; ?></div>
						</div>
					</div>
				</div>
                <script>
                /*(function(){
                    var hash = window.location.hash.slice(1);
                    if(hash==='' || hash == $GLOBAL_DETAIL['init_photo_id']){
						var photoInfo = $GLOBAL_DETAIL['photo_info'];
                        $('#bigImgWrap').html('<img id="bigImg" src="'+photoInfo['pic_host']+'/mw690/'+photoInfo['pic_name']+'">');
                        var url = $GLOBAL_INFO['base_url']+'photos/get_multiple?uid='+$GLOBAL_INFO['owner_uid'];
                        var index,i=0,ids = $GLOBAL_DETAIL['album_photo_ids'];
                        for(;i<ids.length;i++){
                            if(ids[i]==$GLOBAL_DETAIL['init_photo_id']){
                                index = i;
                                break;
                            }
                        }
                        if(index>=0){
                            var num = 10,
                                len = 9,
                                over = len + 2,
                                start = index-num <= 0 ? 0 : index-num,
                                end = index+num >= ids.length ? ids.length : index+num,
                                idary = ids.length < len ? ids : function(){
                                    if(index <= len ){
                                        start = 0;
                                        end = over;
                                    }else if(index >= ids.length - len){
                                        start = ids.length - over;
                                        end = ids.length;
                                    }
                                    return ids.slice(start,end);
                                }();
                            $.ajax({
                                url:url,
                                type:'get',
                                dataType:'json',
                                data:{
                                        ids:idary.join(','),
                                        type:$GLOBAL_DETAIL['album_info']['type']
                                },
                                success:function(json){
                                    if(json.result) $GLOBAL_DETAIL['mutiple_data'] = json.data;
                                }
                            });
                        }
                    }
                })();*/
            </script>
			<div class="widget pho_position" id="location_map" style="display: none;">
				<div class="title M_txtc clearfix">
					<span class="tit">照片位置:</span>
					<span class="M_txtb maptxt"><span class="M_ico M_icon53"></span><span node-type="address"></span></span> 
				</div>
			</div>
              <div class="widget box_tag" id="photo_tag">
                  <div class="title M_txtc" node-type="tag_menu">
					<span class="tit">标签</span>
				  <a href="javascript:void(0);" class="M_linka M_addTag" action-type="add_tag" node-type="tag"><span class="M_ico M_icon28"></span>新增标签</a></div>
                  <div class="content">
                      <div class="m_tab_b">
                          <div class="tag_box" node-type="tag_box">
                              <span class="tags" node-type="tag_list"><span class="no_tag" node-type="no-tag">暂无标签</span></span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="widget thumblst" id="photo_zoning">
                  <div class="title M_txtc" node-type="zoning_before"><span class="tit">照片中的人</span>  
<span class="t_btn" node-type="zoning_right"><a href="javascript:void(0);" action-type="add_zoning_photo" class="btn_point"><span class="M_ico M_icon13"></span><span>我要圈人</span></a></span>
</div>
                  <div class="content" node-type="zoning_list">
<div class="m_thumb_lst m_thumb_lst_b clearfix">
<span node-type="no_person">暂无圈中的人</span>
</div>
</div>
              </div>
              <div class="widget exif" style="display: none;" id="exif">
                  <div class="title M_txtc">
				  <span class="tit">拍摄信息</span>
				  <a class="more_link" style="display:none;" action-type="more_exif" href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3642504728738567#">更多EXIF信息</a>
				  </div>
                  <!--EXIF信息-->
                  <div class="content">
					<div class="m_browse_exif">
                      <div class="info M_txtb">
                          <div class="p1" node-type="exif"></div>
                          <!--/隐藏-->
                      </div>
					</div>
                  </div>
                  <!--/EXIF信息-->
              </div>           
			 
			  <div class="m_feedback">
                  <a target="_blank" href="javascript:void(0);" class="M_linke"><span class="M_ico M_icon14"></span>用户反馈</a><a href="javascript:void(0);" node-type="report" class="M_linke" data-url="javascript:void(0);"><span class="M_ico M_icon15"></span>举报不良图片</a>
              </div>
          </div>
          <!--/右侧-->
        </div>
        <!--/F_cols_second-->
    </div>
    <!--/F_wrap-->
</div>
<script type="text/template" id="T_Desc">
<em>{{&caption}}</em>{{&edit_bar}}
</script>
<script type="text/template" id="T_Info">
<p class="time M_txtb">
	上传于<span class="date">{{created_at}}</span>来自{{&from}}
	<span class="limit"><span class="M_ico {{limit_icon}}" title="{{limit_txt}}"></span>{{limit_txt}}</span>
</p>
<div class="m_handle">
<a class="M_btn_c_a M_arrw_d_c" href="#" action-type="top_edit"><span class="M_arrw_dwSml"></span><span class="t">更多操作</span></a>
<div node-type="edit_muen" style="display: none;" class="m_btnlayer M_linke">
<ul class="menulist">
<li><a title="幻灯浏览" href="#" action-type="slide_open">幻灯浏览</a></li>
<li><a title="向左旋转" href="#" action-type="turn_left">向左旋转</a></li>                     
<li><a title="向右旋转" href="#" action-type="turn_right">向右旋转</a></li>
</ul>
</div>
</div>
<!--操作(其中"收藏"仅在查看他人相册时显示，已收藏状态：将M_icon77改为M_icon77_on)-->
<div class="mark_box">
{{#favorites}}<a href="#" class="M_linke M_fav_sm M_dotted_y" action-type="my_favorites"><span class="M_ico M_icon77"></span>收藏</a>{{/favorites}}
<span class="M_txtb M_look_sm" title="浏览"><span class="M_ico M_icon10"></span>{{clicks}}</span>
<a href="#" class="M_linke M_transmit_sm" title="分享" node-type="intransit" action-type="intransit"><span class="M_ico M_icon4"></span>{{retweets}}</a>
<a href="#" class="M_linke M_comment_sm" title="评论" action-type="comment"><span action-type="comment" class="M_ico M_icon5"></span>{{comments}}</a>
<a href="#" class="M_linke M_like_sm" title="赞" node-type="like_small" action-data="target_id={{photo_id}}&like_uid={{uid}}&type={{type}}&property={{property}}&is_private={{is_private}}" {{likeaction}}><span class="M_ico M_icon6{{islike}}"></span>{{likes}}</a>
</div>			        
</script>

<script type="text/template" id="T_Exif">
{{#exif}}<p>{{key}}:&nbsp;&nbsp;{{value}}</p>{{/exif}}
</script>
<script type="text/template" id="T_Recommand_pic">
<div class="recomm_hd clearfix" node-type="recomm_tag_list">
{{tag_list}}
</div>
<div class="recomm_bd">
  <div class="m_thumbnail">
	  <div class="piclist" node-type="recomm_photo_list">{{photo_list}}</div>
  </div>
</div>					
</script>
<script type="text/template" id="T_lastTip">
<div node-type="lastTip" class="L_alpha L_alpha_a">
<div style="height:500px;" class="content">
<div class="closearea" action-type="close_tips"><span class="M_ico M_icon24" title="关闭"></span></div>
<div class="m_album m_album_info clearfix">
<div class="bd">
<div class="m_cover m_cover_a">
{{&top_main}}
</div>
<div class="txt">
<p class="tip M_txtc">
{{&last_txt}}
</p>
<div class="act clearfix">
{{&act_bar}}
<a action-type="GotoFirst" class="M_btn_f btn_seeagain M_linkc" href="#"><span class="M_ico M_icon48"></span>再看一遍</a>
</div>
</div>
</div>
</div>
<div class="m_album m_more_album">
<div class="hd">
<p class="t">
<a href="{{href}}">{{name}}</a><span class="M_txtb">还有更多相册专辑</span>
</p>
<div class="more">{{&more}}</div>
</div>
<div class="bd">
<ul class="lst M_linkb clearfix">
{{#album_list}}
<li>
    <div class="m_cover m_cover_d">
    <div class="img_wrap">
    <a href="{{albumURL}}">
    <img width="120" height="120" src="{{cover_pic_ret}}">
    </a>
    </div>
    </div>
    <p class="name"><a href="{{albumURL}}" title="{{caption}}">{{title}}</a></p>
    </li>
    {{/album_list}}
</ul>
</div>
</div>
<div class="m_album m_recommand_img">
<div class="hd">
<p class="t M_txtb">更多精彩照片</p>
<div class="more"><a href="{{recommend_more}}">进入相册广场&gt;&gt;</a></div>
</div>
<ul class="recmd_pht clearfix">
{{#recommendPhoto}}
<li><a href="{{href}}"><img width="90" height="90" src="{{thumb_url}}"></a></li>
{{/recommendPhoto}}</ul>
</div>
</div>
</div>
</script>
<script type="text/javascript">
/*<div class="m_thumb m_thumb_b">
    <a title="{{screen_name}}" href="{{myAlbumUrl}}"><img src="{{profile_image_url}}"></a>
</div>
<div class="user_info">
    <div class="user_name M_txtc" title="{{screen_name}}">
        <a title="{{screen_name}}" class="M_linkd name" href="{{myAlbumUrl}}">{{cutname}}</a>
        {{&ver}}<span node-type="follow_status" follow="{{is_follow}}">{{&attention}}</span>
    </div>
    <div class="to_column">
        <a href="{{myAlbumUrl}}">进入{{ta}}的相册&raquo;</a>
    </div>
</div>*/
</script>
<script type="text/template" id="T_userBox">
</script>
<!--
<div class="content">
	
	<div class="m_user_album clearfix">
		<dl class="user">
			<dt class="m_thumb m_thumb_d">
				<a href="{{myAlbumUrl}}" title="{{screen_name}}">
				<img src="{{profile_avatar_url}}" />
				</a>
			</dt>
			<dd class="user_info">
			  <div class="about">
				<div class="namebox clearfix">
					<p class="name">
					<a href="{{myAlbumUrl}}" title="{{screen_name}}" class="M_linkd name">{{cutname}}</a>
					{{&ver}}
					</p>
					<div class="btn">{{&attention}}</div>
				</div>
				<p class="M_txtb location">{{&sex}} {{location}}</p>
			  </div>
			  <div class="static_num clearfix">
			  	<dl >
					<dt><a href="{{albumURL}}">{{albums}}</a></dt>
					<dd><a href="{{albumURL}}" class="M_linkb">专辑</a></dd>
				</dl>
				<dl class="M_dotted_y">
					<dt><a href="{{photosURL}}">{{photos}}</a></dt>
					<dd><a href="{{photosURL}}" class="M_linkb">照片</a></dd>
				</dl>
				<dl class="M_dotted_y">
					<dt><a href="{{likesURL}}">{{likes}}</a></dt>
					<dd><a href="{{likesURL}}" class="M_linkb">赞过</a></dd>
				</dl>
			  </div>
			</dd>
		</dl>
	</div>
</div>-->

<script type="text/template" id="T_editMenu">
{{#prettify}}<div class="m_handle"><a class="M_btn_c" node-type="prettify" href="#" title="美化"><span class="M_ico M_icon11_on"></span><span class="t">美化</span></a></div>{{/prettify}}
{{#deletephoto}}<div class="m_handle"><a class="M_btn_c" href="#" action-type="del_photo" title="删除照片"><span class="M_ico M_icon24"></span><span class="t">删除</span></a></div>{{/deletephoto}}
{{#owner}}
<div class="m_handle">
	<a class="M_btn_c_a M_arrw_d_c" href="javascript:void(0)" action-type="top_edit"><span class="M_arrw_dwSml"></span><span class="t">更多操作</span></a>
	<div node-type="edit_muen" style="display:none;" class="m_btnlayer M_linke">
		<ul class="menulist">
            {{^islikepage}}<li><a title="幻灯浏览" href="#" action-type="slide_open">幻灯浏览</a></li>{{/islikepage}}
            <li><a title="向左旋转" href="#" action-type="turn_left">向左旋转</a></li>                     
            <li><a title="向右旋转" href="#" action-type="turn_right">向右旋转</a></li>
            {{#copy}}<li><a title="复制图片" href="#" action-type="copy_to">复制图片</a></li>{{/copy}}
            {{#move}}<li><a class="M_btn_c" href="#" action-type="move_to" title="移动照片">移动照片</a></li>{{/move}}
			{{#setcover}}<li><a title="设为封面" action-type="set_cover" href="#">设为封面</a></li>{{/setcover}}
			{{#setavatar}}<li><a title="设为头像" action-type="set_avatar" href="#">设为头像</a></li>{{/setavatar}}
        </ul>
	</div>
</div>
{{/owner}}
</script>
<script type="text/template" id="T_rightBar">
{{#transmit}}<a href="#" class="M_linkb M_transmit_bg" action-type="intransit"><span class="bg"><span class="M_ico M_icon8"></span>分享</span></a><span class="M_dotted_y" node-type="dotted"></span>{{/transmit}}
<a href="#" class="M_linkb M_like_bg" action-type="biglike"><span class="bg"><span class="M_ico M_icon7 {{#is_liked}}_on{{/is_liked}}"></span>赞(<em></em>)</span></a>
</script>
<script type="text/template" id="T_Property">
隐私权限<span class="t_set M_txtb">
<span class="M_ico {{limit_icon}}"></span>
{{limit_txt}}
</span>
</script>
<script type="text/template" id="T_zoning_before">  
<span class="t_btn" node-type="zoning_right"><a href="#" action-type="add_zoning_photo" class="btn_point"><span class="M_ico M_icon13"></span><span>我要圈人</span></a></span>
</script>
<script type="text/template" id="T_Persons">
<div class="m_thumb_lst m_thumb_lst_b clearfix">
{{#persons}}
    <ul class="thumb_lst" node-type="persons_wrap">
    {{#data}}
        <li data-id="{{id}}" node-type="zoning_per"><div class="m_thumb m_thumb_a"><a href="{{related_url}}" title="{{related_name}}"><img src="{{profile_image_url}}">{{#isSelf}}<span class="M_ico M_icon23" data-id="{{id}}" action-type="del_zoning"></span>{{/isSelf}}</a></div></li>
    {{/data}}
    </ul>
{{/persons}}
{{^persons}}
<span node-type="no_person">暂无圈中的人</span>
{{/persons}}
</div>
{{#more}}
<div class="more"><a href="#" node-type="more_User" class="more_link">查看更多</a></div>
{{/more}}
</script>
<script type="text/template" id="T_RecommendTag">
<div class="hd">
    <p class="M_txta tit">推荐标签</p>
</div>
<div class="bd">
    <div class="m_tag_a clearfix">
    {{#data}}
        <a title="{{.}}" href="#" action-type="recommend_tag">{{.}}</a>
    {{/data}}
    </div>
</div>
</script>
<script type="text/template" id="T_operate">
<div class="m_pho_operate" node-type="operate_area">
    <div class="operate">
        <ul class="operate_list clearfix">
            {{^islikepage}}<li><a title="幻灯浏览" href="#" action-type="slide_open"><span class="M_ico M_icon12"></span></a></li>{{/islikepage}}
            <li><a title="左转" href="#" action-type="turn_left"><span class="M_ico M_icon27"></span></a></li>
            <li><a title="右转" href="#" action-type="turn_right"><span class="M_ico M_icon26"></span></a></li>
        </ul>
    </div>
    <span class="M_arrw_lf" data-role="more"></span>
</div>
</script>
<script type="text/template" id="T_like">
<div class="like_btn" node-type='like_wrap'>
    <a href="javascript:void(0)" node-type="like_bar" class="v5W_btn_alpha" title="赞"><i class="icon_praise"></i><span></span></a>
</div>
</script>
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
</div>        
        <script type="text/javascript" src="<?php echo APP_INDEX; ?>common/picshow/mustache.js"></script>
<script type="text/javascript" src="<?php echo APP_INDEX; ?>common/picshow/backbone.js"></script>
        
        <script src="<?php echo APP_INDEX; ?>common/picshow/photoDetail.js"></script><div class="L_layer" style="display: none;"></div>
    	<!-- SUDA_CODE_START -->
		<script type="text/javascript" charset="utf-8" src="<?php echo APP_INDEX; ?>common/picshow/suda.js"></script>
		<!-- SUDA_CODE_END -->
 
    

<div class="m_pho_operate" node-type="operate_area" style="visibility: hidden;">
    <div class="operate">
        <ul class="operate_list clearfix">
            <li><a title="幻灯浏览" href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3642504728738567#" action-type="slide_open"><span class="M_ico M_icon12"></span></a></li>
            <li><a title="左转" href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3642504728738567#" action-type="turn_left"><span class="M_ico M_icon27"></span></a></li>
            <li><a title="右转" href="http://photo.weibo.com/2664098951/photos/detail/photo_id/3642504728738567#" action-type="turn_right"><span class="M_ico M_icon26"></span></a></li>
        </ul>
    </div>
    <span class="M_arrw_lf" data-role="more"></span>
</div><div node-type="suggest" class="L_menu_list" id="suggest_1456406623555" style="position: absolute; z-index: 11000; display: none; width: 180px; top: 704px; left: 184.5px;"></div></body></html>