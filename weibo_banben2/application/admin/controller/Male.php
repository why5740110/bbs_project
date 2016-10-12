<?php
//公共外部控制器
namespace app\admin\controller;

use think\Controller;

class Male extends Controller
{
    //加载登录表单
    public function login()
    {
        return $this->fetch();
    }
    
    //执行登录
    public function doLogin()
    {
        //校验验证码
        $verify = new \org\Verify();
        if(!$verify->check(I("post.code"))){
           $this->assign("errorinfo","验证码错误！");
           return $this->fetch("login");
        }
         
         //执行登录判断
         $mod = M("Admin_user");
         //获取登录者信息
         $username = I("post.username");
         $passwd = I("post.passwd");
         $user = $mod->where("username='{$username}'")->find();
         if($user){
            //验证密码
            if($user['passwd'] == $passwd){
                //此处表示登录成功
                //将登录成功用户信息放入到session
                session("adminuser",$user);
                //
                $this->redirect("Index/index");
                exit();
            }else{
                $this->assign("errorinfo","登录密码错误！");
                return $this->fetch("login");
            }
            
         }else{
            $this->assign("errorinfo","登录账号不存在！");
            return $this->fetch("login");
         }
        
    }
    
    //执行退出
    public function logout()
    {
        session("adminuser",null); //清除登录信息
        $this->redirect("Male/login");
    }
    
    //验证码
    public function verify()
    {
        $Verify = new \org\Verify();
        $Verify->fontSize = 40;
        $Verify->length   = 4;
        //$Verify->useNoise = false;
        $Verify->useCurve = false;
        die($Verify->entry());
    }
}
