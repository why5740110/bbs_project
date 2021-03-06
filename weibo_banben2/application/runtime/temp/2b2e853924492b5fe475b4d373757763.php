<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>微博登录首页  </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="<?php echo APP_INDEX; ?>css/login/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo APP_INDEX; ?>css/login/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="<?php echo APP_INDEX; ?>css/login/animate.min.css" rel="stylesheet">
    <link href="<?php echo APP_INDEX; ?>css/login/style.min.css" rel="stylesheet">
    <link href="<?php echo APP_INDEX; ?>css/login/login.min.css" rel="stylesheet">      
    <link rel="stylesheet" href="<?php echo APP_INDEX; ?>js/login/login/supersized.css">
    <link href="<?php echo APP_INDEX; ?>css/login/background.css" rel="stylesheet">

</head>

<body class="signin" style="font-size: 14px;">
    <div class="signinpanel">
        <div class="row">
            <div class="col-sm-7">
                <div class="signin-info">
                    <div class="logopanel m-b">
                        <img src=""><!--logo-->
                    </div>
                    <div class="m-b"></div>
                    <h4>欢迎使用 <strong>我们的微博</strong></h4>
                    <ul class="m-b">
                        <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 锄禾日当午</li>
                        <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 汗滴禾下土</li>
                        <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 谁知盘中餐</li>
                        <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i> 粒粒皆辛苦</li>
                        <li><i class="fa fa-arrow-circle-o-right m-r-xs"></i>  &nbsp;&nbsp;&nbsp;&nbsp;——《悯农》</li>
                    </ul>
                    <strong>还没有账号？ <a href="<?php echo U('register/index/index'); ?>">立即注册&raquo;</a></strong>
                </div>
            </div>
            <div class="col-sm-5">
                <form method="post" action="<?php echo U('index/dologin'); ?>">
                    <h4 class="no-margins">登录：</h4>
                    <p class="m-t-md">登录微博</p>
                    <input type="text" class="form-control uname" id="username" name="user" placeholder="用户名" />
                    <input type="password" class="form-control pword m-b" id="password" name="password" placeholder="密码" />
                    <a href="">忘记密码了？</a>
                    <a type="submit" id="btn_login" class="btn btn-success btn-block">登&nbsp;&nbsp;&nbsp;录</a>
                </form>
            </div>
        </div>
        <div class="signup-footer">
            <div class="pull-left">
                <?php echo C('address'); ?>&nbsp;&nbsp;&nbsp;<?php echo C('copyright'); ?>
            </div>
        </div>
    </div>
         
    <script src="<?php echo APP_INDEX; ?>js/login/login/jquery-1.8.2.min.js" ></script>
    <script src="<?php echo APP_INDEX; ?>js/login/login/supersized.3.2.7.min.js" ></script>
    <script src="<?php echo APP_INDEX; ?>js/login/login/supersized-init.js" ></script>      
    <script src="<?php echo APP_INDEX; ?>js/login/jquery.min.js?v=2.1.4"></script>
    <script src="<?php echo APP_INDEX; ?>js/login/bootstrap.min.js?v=3.3.5"></script>
	<script src="<?php echo APP_INDEX; ?>js/login/layer/layer.js"></script>
    <script>
            
            document.onkeydown=function(event){
               e = event ? event :(window.event ? window.event : null);
               if(e.keyCode==13){

                     $('#btn_login').click();
               }
            }
            $(function () {
               $('#btn_login').click(function(){

                   var u=$('#username').val();
                   var p=$('#password').val();
                   if (u == "") {

                           layer.msg('请输入用户名',function(){})
                           return false;
                   }
                   if (p == "") {

                          layer.msg('请输入密码',function(){})
                           return false;
                   }
                   $.ajax({
                       url: "<?php echo U('login/index/judge'); ?>",//judge：判断
                       type: "post",
                       data:{
                               'user':u,
                               'password':p
                               },
                       dataType:'json',
                       error:function(){
                  
	                        layer.msg('本网站暂时无法访问',function(){})
	                       
	                    },
                       success:function(data){
                            //返回的data要是用户的id
                            //成功以后跳转到用户主页去
                            if(data == false){
                                layer.msg('帐号或者密码不正确',function(){})
                                return false;   
                            }else{
                                window.location.href="<?php echo U('index/index/index'); ?>";
                            }     
                          
                       }
                   });
               });
           });

        </script>
</body>

</html>