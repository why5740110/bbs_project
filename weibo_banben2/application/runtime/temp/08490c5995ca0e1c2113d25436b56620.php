<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title>微博-首页</title>
    <link rel="stylesheet" href="<?php echo APP_PUBLIC; ?>/Css/nav.css" />
    <link rel="stylesheet" href="<?php echo APP_PUBLIC; ?>/Css/index.css" />
    <link rel="stylesheet" href="<?php echo APP_PUBLIC; ?>/Css/bottom.css" />
    <link rel="stylesheet" href="<?php echo APP_PUBLIC; ?>/Uploadify/uploadify.css"/>
    <script type="text/javascript" src="<?php echo APP_PUBLIC; ?>/Js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="<?php echo APP_PUBLIC; ?>/Js/index.js"></script>
    <script type="text/javascript" src="<?php echo APP_PUBLIC; ?>/Js/comment.js"></script>
    <script type="text/javascript" src="<?php echo APP_PUBLIC; ?>/Js/nav.js"></script>
    
</head>
<body>
<!--==========顶部固定导行条==========-->
    <div id='top_wrap'>
        <div id="top">
            <div class='top_wrap'>
                <div class="logo fleft"></div>
                <ul class='top_left fleft'>
                    <li class='cur_bg'><a href=''>首页</a></li>
                    <li><a href=''>私信</a></li>
                    <li><a href=''>评论</a></li>
                    <li><a href=''>@我</a></li>
                </ul>
                <div id="search" class='fleft'>
                    <form action='<?php echo U("Search/person/index"); ?>' method='get'>
                        <input type='text' name='search_val' id='sech_text' class='fleft' value='搜索微博、找人'/>
                        <input type='submit' value='' id='sech_sub' class='fleft'/>
                    </form>
                </div>
                <div class="user fleft"><a href="">新浪网</a></div>
                <ul class='top_right fleft'>
                    <li title='快速发微博' class='fast_send'><i class='icon icon-write'></i></li>
                    <li class='selector'><i class='icon icon-msg'></i>
                        <ul class='hidden'>
                            <li><a href="">查看评论</a></li>
                            <li><a href="">查看私信</a></li>
                            <li><a href="">查看收藏</a></li>
                            <li><a href="">查看@我</a></li>
                        </ul>
                    </li>
                    <li class='selector'><i class='icon icon-setup'></i>
                        <ul class='hidden'>
                            <li><a href="<?php echo U('UserSetting/index'); ?>">帐号设置</a></li>
                            <li><a href="">模版设置</a></li>
                            <li><a href="<?php echo U('login/Index/loginout'); ?>">退出登录</a></li>
                        </ul>
                    </li>
                <!--信息推送-->
                    <li id='news' class='hidden'>
                        <i class='icon icon-news'></i>
                        <ul>
                            <li class='news_comment hidden'>
                                <a href=""></a>
                            </li>
                            <li class='news_letter hidden'>
                                <a href=""></a>
                            </li>
                            <li class='news_atme hidden'>
                                <a href=""></a>
                            </li>
                        </ul>
                    </li>
                <!--信息推送-->
                </ul>
            </div>
        </div>
    </div>
<!--==========顶部固定导行条==========-->
<!--==========加关注弹出框==========-->
    <div id='follow'>
        <div class="follow_head">
            <span class='follow_text fleft'>关注好友</span>
        </div>
        <div class='sel-group'>
            <span>好友分组：</span>
            <select name="gid" id="gid">
                    <!-- <option value=""></option> -->
            </select>
        </div>
        <div class='fl-btn-wrap'>
            <input type="hidden" name='follow'/>
            <span data="<?php echo U('Indexajax/yiguanzhu'); ?>" class='add-follow-sub'>关注</span>
            <span class='follow-cencle'>取消</span>
        </div>
    </div>
<!--==========加关注弹出框==========-->
<!--==========内容主体==========-->
<div style='height:60px;opcity:10'></div>
    <div class="main">
    <!--=====左侧=====-->
    <div id="left" class='fleft'>
        <ul class='left_nav'>
            <li><a href=""><i class='icon icon-home'></i>&nbsp;&nbsp;首页</a></li>
            <li><a href=""><i class='icon icon-at'></i>&nbsp;&nbsp;提到我的</a></li>
            <li><a href=""><i class='icon icon-comment'></i>&nbsp;&nbsp;评论</a></li>
            <li><a href=""><i class='icon icon-letter'></i>&nbsp;&nbsp;私信</a></li>
            <li><a href=""><i class='icon icon-keep'></i>&nbsp;&nbsp;收藏</a></li>
        </ul>

        <div class="group">
            <fieldset><legend>分组</legend></fieldset>
            <ul>
                <li><a href=""><i class='icon icon-group'></i>&nbsp;&nbsp;全部</a></li>
                <?php foreach($user_group_list as $vo): ?>
                    <li>
                        <a href="" class="fenzu" data="<?php echo $vo['id']; ?>"><i class='icon icon-group'></i>&nbsp;&nbsp;<?php echo $vo['groupname']; ?></a>
                    </li>
                    <div class="user_fen_group" data="<?php echo $vo['id']; ?>" style="margin-left:35px;display:none;">
                        <?php foreach($haoyouliebiao as $vvo): if($vvo['gid']==$vo['id']): ?>
                                <br><a href="" guanzhuid="<?php echo $vvo['id']; ?>" style="color:#888888;font-size:13px;">&nbsp;&nbsp;<?php echo $vvo['nickname']; ?></a><br><br>
                            <?php endif; endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </ul>
            <span id='create_group'>创建新分组</span>
        </div>
    </div>
    
    <!--==========创建分组==========-->
    <div id='add-group' data="<?php echo U('Indexajax/create_group'); ?>" style="z-index:15;">
        <div class="group_head">
            <span class='group_text fleft'>创建好友分组</span>
        </div>
        <div class='group-name'>
            <span>分组名称：</span>
            <input type="text" name='name' id='gp-name'>
        </div>
        <div class='gp-btn-wrap'>
            <span data="<?php echo U('Indexajax/create_group'); ?>" class='add-group-sub'>添加</span>
            <span class='group-cencle'>取消</span>
        </div>
    </div>
    <!--==========创建分组==========-->
    <!-- <div class="right_left"></div> -->
    <!--=====中部=====-->
        <div id="middle" class='fleft'>
        <!--微博发布框-->
            <div class='send_wrap'>
                <div class='send_title fleft'></div>
                <div class='send_prompt fright'>
                    <span>还可以输入<span id='send_num'>140</span>个字</span>
                    <!-- <span align="right" style="line-height:80px;"><a  href="" style="line-height:30px;text-decoration:none;color:#eb7350;">微博直击两会！代表委员在现场，你在关注哪些民生热点？</a></span> -->
                </div>
                <div class='send_write'>
                    <form action="<?php echo U('index/insert'); ?>" method='post' enctype="multipart/form-data" name='weibo'>
                        <textarea sign='weibo' name='content'></textarea>
                        <span class='ta_right'></span>
                        <div class='send_tool'>
                            <ul class='fleft'>
                                <li style="text-align:17px;" title='表情'><i class='icon icon-phiz phiz' sign='weibo'></i>&nbsp;&nbsp;<a href="javascript:void(0)" style="color:#eb7350;line-height:17px;">表情</a></li>
                                <li title='图片'><i class='icon icon-picture'></i>&nbsp;&nbsp;<a href="javascript:void(0)" style="color:#eb7350;line-height:17px;">上传</a>
                                <!--图片上传框-->
                                    <div id="upload_img" class='hidden'>
                                        <div class='upload-title'><p>本地上传</p><span class='close'></span></div>
                                        <div class='upload-btn'>
                                            <!-- <input type="hidden" name='max' value=''/>
                                            <input type="hidden" name='medium' value=''/>
                                            <input type="hidden" name='mini' value=''/> -->
                                            <input type="file" name='pic[]' multiple id='picture'/><h4>多图请按Shift选中</h4>
                                        </div>
                                    </div>
                                <!--图片上传框-->
                                    <div id='pic-show' class='hidden'>
                                        <img src="" alt=""/>
                                    </div>
                                </li>
                            </ul>
                            <input type='submit' value='' class='send_btn fright' title='发布微博按钮'/>
                            <!-- 保存提交地址 -->
                            <div class="url" data="<?php echo U('Index/insert'); ?>"></div>
                        </div>
                    </form>
                </div>
            </div><br>
        <!--微博发布框-->
            <div class='view_line'>
                <strong>微博</strong>
            </div>
<?php if(empty($article)): ?>
    没有发布的微博
<?php else: foreach($article as $vo): if($vo['istrue']==1): ?>
<!--====================普通微博样式====================-->
            <div class="weibo">
                <!--头像-->
                <div class="face">
                    <a href="">
                        <img style="border-radius:100px;"   src="<?php echo APP_PUBLIC; ?>/Images/1.jpg" width='50' height='50'/>
                    </a>
                </div>
                <div class="wb_cons">
                    <dl>
                    <!--用户名-->
                        <dt class='author'>
                            <a href=""><?php echo $vo['nickname']; ?></a>
                        </dt><br>
                    <!--发布内容-->
                        <dd class='content'>
                            <p style="font-size:15px;"><?php echo $vo['content']; ?></p>
                        </dd>
                    <!--微博图片-->
                    <if condition="">
                        <dd>
                            <div class='wb_img'>
                            <!--小图-->
                            <?php if(!empty($vo['pic'])): foreach($vo['pic'] as $vvo): ?>
                                <img src="<?php echo APP_PUBLIC; ?>/uploads/weibo/<?php echo $vvo; ?>" width=80; class='mini_img'/>
                                <?php endforeach; endif; ?>
                                <div class="img_tool hidden">
                                    <ul>
                                        <li>
                                            <i class='icon icon-packup'></i>
                                            <span class='packup'>&nbsp;收起</span>
                                        </li>
                                        <li>|</li>
                                        <li>
                                            <i class='icon icon-bigpic'></i>
                                            <a href="" target='_blank'>&nbsp;查看大图</a>
                                        </li>
                                    </ul>
                                <!--中图-->
                                    <div class="img_info"><img src="" width="300"/></div>
                                </div>
                            </div>
                        </dd>
                    </if>
                    </dl>
                <!--操作-->
                    <div class="wb_tool">
                    <!--发布时间-->
                        <span class="send_time">8分钟前 来自 军报微博聚合平台</span><br>
                        <div>
                            <ul>
                                <li><span class='turn' id=''>转发 12<if condition=''></if></span></li>
                                <li><span class='keep' data="<?php echo $vo['id']; ?>" url="<?php echo U('Indexajax/shoucang'); ?>"> <span class="shoucang" >收藏</span> <a><?php echo $vo['shoucang']; ?></a></span></li>
                                <li><span class='comment' test="show" data="<?php echo $vo['id']; ?>" url="<?php echo U('Indexajax/showpinlun'); ?>">评论 14<if condition=''></if></span></li>
                                <li><span class='dianzan' data="<?php echo $vo['id']; ?>" url="<?php echo U('Indexajax/dianzan'); ?>" ><img class="zantu" src="<?php echo APP_PUBLIC; ?>/Images/weizan.png" /></span><span class="dianzan_num" data="<?php echo $vo['dianzan']; ?>"><?php echo $vo['dianzan']; ?></span></li>
                            </ul>    
                        </div>
                    </div>
                <!--=====回复框=====-->
                    <div class='comment_load hidden'>
                        <img src="<?php echo APP_PUBLIC; ?>/Images/loading.gif" >评论加载中，请稍候...
                    </div>
                    <div class='comment_list hidden' style="height:150px;">
                        <textarea name="pinlunkuang" sign=''></textarea>
                        <ul>
                            <li class='phiz fleft' sign=''></li>
                            <li class='comment_turn fleft'>
                                <!-- <label> -->
                                    <!-- <input type="checkbox" name=''/>同时转发到我的微博 -->
                                <!-- </label> -->
                            </li>
                            <li class='comment_btn fright' wid='<?php echo $vo['id']; ?>' url="<?php echo U('Indexajax/showpinlun'); ?>">评论</li>
                        </ul>
                        <ul>
                            <?php if(!empty($vo['reply'])): foreach($vo['reply'] as $voo): ?>
                                    <li class="pinlun" style="margin-bottom:10px;"><span style="font-size:14px;color:#888888;"><?php echo $voo['nickname']; ?>:</span><?php echo $voo['content']; ?></li> 
                                <?php endforeach; endif; ?>
                        </ul>
                    </div>
                <!--=====回复框结束=====-->
                </div>
            </div>
            <span class="end"></span>
    <?php endif; ?>
<!--====================转发样式====================-->
    <?php if($vo['istrue']==2): ?>
            <div class="weibo">
            <!--头像-->
                <div class="face">
                    <a href="">
                        <img style="border-radius:100px;" src="<?php echo APP_PUBLIC; ?>/Images/1.jpg" width='50' height='50'/>
                    </a>
                </div>
                <div class="wb_cons">
                    <dl>
                    <!--用户名-->
                        <dt class='author'>
                            <a href=""><?php echo $vo['nickname']; ?></a>
                        </dt><br>
                    <!--发布内容-->
                        <dd class='content'>
                            <p style="font-size:15px;"><?php echo $vo['truecontent']; ?></p>
                        </dd>
                    <!--转发的微博内容-->
                        <dd>
                            <div class="wb_turn">
                                <dl>
                                <!--原作者-->
                                    <dt class='turn_name'>
                                        <a href="">@IT工程师</a>
                                    </dt>
                                <!--原微博内容-->
                                    <dd class='turn_cons'>
                                        <p><?php echo $vo['content']; ?></p>
                                    </dd>
                                <!--原微博图片-->
                                <if condition=''>
                                    <dd>
                                        <div class="turn_img" >
                                        <!--小图-->
                                            <div style="width:260px">
                                            <?php if(!empty($vo['pic'])): foreach($vo['pic'] as $vvo): ?>
                                                <img src="<?php echo APP_PUBLIC; ?>/uploads/weibo/<?php echo $vvo; ?>" width=80; class='mini_img'/>
                                                <?php endforeach; endif; ?>
                                               </div>
                                            <div class="turn_img_tool hidden">
                                                <ul>
                                                    <li>
                                                        <i class='icon icon-packup'></i>
                                                        <span class='packup'>&nbsp;收起</span></li>
                                                    <li>|</li>
                                                    <li>
                                                        <i class='icon icon-bigpic'></i>
                                                        <a href="" target='_blank'>&nbsp;查看大图</a>
                                                    </li>
                                                </ul>
                                            <!--中图-->
                                                <div class="turn_img_info">
                                                    <img src=""/>
                                                </div>
                                            </div>
                                        </div>
                                    </dd>
                                </if>
                                </dl>
                                <!--转发微博操作-->
                                <div class="turn_tool">
                                    <span class='send_time'>
                                    2月23日 19:12 来自 微博 weibo.com                                        
                                    </span>
                                    <ul>
                                        <li><a href="">转发<if condition=''></if></a></li>
                                        <li><a href="">评论<if condition=''></if></a></li>
                                        <li><span class="dianzan" data="<?php echo $vo['id']; ?>" url="<?php echo U('Indexajax/dianzan'); ?>" ><img data="<?php echo U('Indexajax/dianzan'); ?>" src="<?php echo APP_PUBLIC; ?>/Images/weizan.png" /></span><if condition=''></if></li>
                                    </ul>
                                </div>
                            </div>
                        </dd>
                    </dl>
                    <!--操作-->
                    <div class="wb_tool">
                        <!--发布时间-->
                        <span class="send_time">
                        </span>
                        <ul>
                            <li><span class='turn' id=''>转发 12<if condition=''></if></span></li>
                            <li><span class='keep' data="<?php echo $vo['id']; ?>" url="<?php echo U('Indexajax/shoucang'); ?>"> <span class="shoucang" >收藏</span> <a><?php echo $vo['shoucang']; ?></a></span></li>
                            <li><span class='comment' wid=''>评论 14<if condition=''></if></span></li>
                            <li><span class='dianzan' data="<?php echo $vo['id']; ?>" url="<?php echo U('Indexajax/dianzan'); ?>" ><img class="zantu" src="<?php echo APP_PUBLIC; ?>/Images/weizan.png" /></span><span class="dianzan_num" data="<?php echo $vo['dianzan']; ?>"><?php echo $vo['dianzan']; ?></span></li>
                        </ul>
                    </div>
                    <!--回复框-->
                    <div class='comment_load hidden'>
                        <img src="<?php echo APP_PUBLIC; ?>/Images/loading.gif">评论加载中，请稍候...
                    </div>
                    <div class='comment_list hidden'>
                        <textarea name="" sign='comment'></textarea>
                        <ul>
                            <li class='phiz fleft' sign='comment'></li>
                            <li class='comment_turn fleft'>
                                <label>
                                    <input type="checkbox" name=''/>同时转发到我的微博
                                </label>
                            </li>
                            <li class='comment_btn fright' wid='' uid=''>评论</li>
                        </ul>
                    </div>
                    <!--回复框结束-->
                </div>
            </div>
            <span class="end"></span>
        <?php endif; ?>
<!--====================转发样式结束====================-->
<?php endforeach; endif; ?>
          <div width="500" style="margin-left:200px;"><div><?php echo $showpage; ?></div></div>
            <div></div>    
        </div>

<!-- 瀑布流 -->
<!--==========右侧==========-->
        <div class="right_left"></div>
        <div id="right">
            <!-- <div class="edit_tpl"><a href="" id='set_model'></a></div> -->
            <!-- 用户头像开始 -->
            <dl class="user_face">
                <dt>
                    <a href=""><img style="border-radius:100px;width:60px;height:60px;" src="<?php echo APP_PUBLIC; ?>/Images/touxiang.jpg" width='80' height='80' alt="" /></a>
                </dt>
                <!-- <dd><a href=""><?php echo $userinfo['nickname']; ?></a></dd> -->
            </dl><br>
            <!-- 用户头像结束 -->
            <!-- 用户名 -->
            <div class="renming"><div class="right_left"></div><a href=""><?php echo $userinfo['nickname']; ?></a></div>
            <!-- 用户粉丝关注信息开始 -->
            <ul class='num_list'>
                <li><a href=""><strong><?php echo $guanzhu; ?></strong><span>关注</span></a></li>
                <li><a href=""><strong><?php echo $fans; ?></strong><span>粉丝</span></a></li>
                <li class='noborder'><a href=""><strong><?php echo $weiboshu; ?></strong><span>微博</span></a></li>
            </ul>
            <!-- 用户粉丝关注信息结束 -->
            <!-- <div class="touming"></div> -->
            <!-- 可能感兴趣的人开始 -->
            <div class="maybe">
                <fieldset>
                    <legend>可能感兴趣的人</legend>
                    <ul>
                        <?php if(!empty($hyxx)): foreach($hyxx as $vo): ?>
                            <li>
                                <dl>
                                    <dt>
                                        <a href=""><img style="border-radius:100px;" src="<?php echo APP_PUBLIC; ?>/Images/11.jpg" alt="" width='30' height='30'/></a>
                                    </dt>
                                    <dd><a href=""><?php echo $vo['nickname']; ?></a></dd>
                                    <dd>共<?php echo $vo['gthy']; ?>个共同好友</dd>
                                </dl>
                                <span class='heed_btn add-fl' uid='<?php echo $vo['id']; ?>' data="<?php echo U('Indexajax/guanzhu'); ?>" userid="<?php echo $userinfo['id']; ?>"><strong>+&nbsp;</strong>关注</span>
                            </li>
                            <?php endforeach; else: ?>
                            <li><span>你没有共同好友！赶紧寻找小伙伴吧！</span></li>
                        <?php endif; ?>
                    </ul>
                </fieldset>
            </div>
            <!-- 可能感兴趣的人结束 -->
            <!-- <div class="touming"></div> -->
            <!-- 广告开始 -->
            <div class="maybe">
                <fieldset>
                    <legend>推荐商品</legend>
                    <ul>
                        <?php foreach($guanggao_list_right as $vo): ?>
                        <li>
                            <dl>
                                <dt>
                                    <a href="<?php echo $vo['link']; ?>"><img src="<?php echo APP_PUBLIC; ?>/uploads/guanggao/<?php echo $vo['imagename']; ?>" alt="" width='50'/></a>
                                </dt>
                                <dd align="center"><a style="line-height:50px;" href="<?php echo $vo['link']; ?>" title="<?php echo $vo['title']; ?>"><?php echo $vo['title']; ?></a></dd>
                                <!-- <dd>共10个共同好友</dd> -->
                            </dl>
                            <!-- <span class='heed_btn'><strong>+&nbsp;</strong>关注</span> -->
                        </li><br>
                        <?php endforeach; ?>
                    </ul><br><br>
                </fieldset>
            </div>
            <!-- 广告结束 -->            
            <!-- <div class="touming"></div> -->
            <!-- 公告开始 -->
            <div class="post">
                <div class='post_line'>
                    <span>公告栏</span>
                </div>
                <ul>
                    <li><a href="">新浪网DIV+CSS视频教程</a></li>
                    <li><a href="">新浪网PHP视频教程</a></li>
                    <li><a href="">新浪网MySQL视频教程</a></li>
                </ul>
            </div>
            <!-- 公告结束 -->
        </div>
    </div>
        
<!--==========内容主体结束==========-->
<!--==========底部==========-->
    <div style="margin:0 auto;width:980px;">
        <a href="<?php echo $guanggao_list_buttom['link']; ?>"><img width="980" src="<?php echo APP_PUBLIC; ?>/uploads/guanggao/<?php echo $guanggao_list_buttom['imagename']; ?>" alt=""/></a>
    </div>
    <div id="bottom">
        <div class='link'>
            <?php foreach($linkList as $linkList): ?>
            <a href="<?php echo $linkList['url']; ?>"><?php echo $linkList['linkname']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <?php endforeach; ?>
        </div>
        <div id="copy">
            <div>
                <p>
                    版权所有：新浪网 京ICP备10027771号-1 站长统计 All rights reserved, houdunwang.com services for Beijing 2008-2012 
                </p>
            </div>
        </div>
    </div>
<!--==========自定义模版==========-->
    <div id='model' class='hidden'>
        <div class="model_head">
            <span class="model_text">个性化设置</span>
            <span class="close fright"></span>
        </div>
        <ul>
            <li class='style1'></li>
            <li class='style2'></li>
            <li class='style3'></li>
            <li class='style4'></li>
        </ul>
        <div class='model_operat'>
            <span class='model_save'>保存</span>
            <span class='model_cancel'>取消</span>
        </div>
    </div>
<!--==========自定义模版==========-->

<!--==========转发输入框==========-->
    <div id='turn' class='hidden'>
        <div class="turn_head">
            <span class='turn_text fleft'>转发微博</span>
            <span class="close fright"></span>
        </div>
        <div class="turn_main">
            <form action='<?php echo U("Index/turn"); ?>' method='post' name='turn'>
                <p></p>
                <div class='turn_prompt'>
                    你还可以输入<span id='turn_num'>140</span>个字</span>
                </div>
                <textarea name='content' sign='turn'></textarea>
                <ul>
                    <li class='phiz fleft' sign='turn'></li>
                    <li class='turn_comment fleft'>
                        <label>
                            <input type="checkbox" name='becomment'/>同时评论给<span class='turn-cname'></span>
                        </label>
                    </li>
                    <li class='turn_btn fright'>
                        <input type="hidden" name='id' value=''/>
                        <input type="hidden" name='tid' value=''/>
                        <input type="submit" value='转发' class='turn_btn'/>
                    </li>
                </ul>
            </form>
        </div>
    </div>
<!--==========转发输入框==========-->

<!--==========表情选择框==========-->
    <div id="phiz" class='hidden'>
        <div>
            <p>常用表情</p>
            <span class='close fright'></span>
        </div>
        <ul>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/hehe.gif" alt="呵呵" title="呵呵" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/xixi.gif" alt="嘻嘻" title="嘻嘻" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/haha.gif" alt="哈哈" title="哈哈" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/keai.gif" alt="可爱" title="可爱" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/kelian.gif" alt="可怜" title="可怜" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/wabisi.gif" alt="挖鼻屎" title="挖鼻屎" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/chijing.gif" alt="吃惊" title="吃惊" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/haixiu.gif" alt="害羞" title="害羞" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/jiyan.gif" alt="挤眼" title="挤眼" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/bizui.gif" alt="闭嘴" title="闭嘴" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/bishi.gif" alt="鄙视" title="鄙视" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/aini.gif" alt="爱你" title="爱你" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/lei.gif" alt="泪" title="泪" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/touxiao.gif" alt="偷笑" title="偷笑" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/qinqin.gif" alt="亲亲" title="亲亲" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/shengbin.gif" alt="生病" title="生病" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/taikaixin.gif" alt="太开心" title="太开心" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/ldln.gif" alt="懒得理你" title="懒得理你" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/youhenhen.gif" alt="右哼哼" title="右哼哼" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/zuohenhen.gif" alt="左哼哼" title="左哼哼" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/xiu.gif" alt="嘘" title="嘘" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/shuai.gif" alt="衰" title="衰" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/weiqu.gif" alt="委屈" title="委屈" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/tu.gif" alt="吐" title="吐" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/dahaqian.gif" alt="打哈欠" title="打哈欠" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/baobao.gif" alt="抱抱" title="抱抱" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/nu.gif" alt="怒" title="怒" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/yiwen.gif" alt="疑问" title="疑问" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/canzui.gif" alt="馋嘴" title="馋嘴" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/baibai.gif" alt="拜拜" title="拜拜" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/sikao.gif" alt="思考" title="思考" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/han.gif" alt="汗" title="汗" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/kun.gif" alt="困" title="困" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/shuijiao.gif" alt="睡觉" title="睡觉" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/qian.gif" alt="钱" title="钱" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/shiwang.gif" alt="失望" title="失望" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/ku.gif" alt="酷" title="酷" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/huaxin.gif" alt="花心" title="花心" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/heng.gif" alt="哼" title="哼" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/guzhang.gif" alt="鼓掌" title="鼓掌" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/yun.gif" alt="晕" title="晕" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/beishuang.gif" alt="悲伤" title="悲伤" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/zuakuang.gif" alt="抓狂" title="抓狂" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/heixian.gif" alt="黑线" title="黑线" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/yinxian.gif" alt="阴险" title="阴险" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/numa.gif" alt="怒骂" title="怒骂" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/xin.gif" alt="心" title="心" /></li>
            <li><img src="<?php echo APP_PUBLIC; ?>/Images/phiz/shuangxin.gif" alt="伤心" title="伤心" /></li>
        </ul>
    </div>
<!--==========表情==========-->

<!--[if IE 6]>
    <script type="text/javascript" src="<?php echo APP_PUBLIC; ?>/Js/DD_belatedPNG_0.0.8a-min.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('#top','background');
        DD_belatedPNG.fix('.logo','background');
        DD_belatedPNG.fix('#sech_text','background');
        DD_belatedPNG.fix('#sech_sub','background');
        DD_belatedPNG.fix('.send_title','background');
        DD_belatedPNG.fix('.icon','background');
        DD_belatedPNG.fix('.ta_right','background');
    </script>
<![endif]-->
</body>
</html>