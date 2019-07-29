<?php
namespace app\login\controller;
use think\Controller;


class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
	
	//执行登录
    public function judge()
    {
    	$username = $_POST['user'];
    	$passwd = md5($_POST['password']);

    	$mod = M('user');
    	$user = $mod -> where("username = '{$username}' AND passwd = '{$passwd}'") -> select();
    	if($user){//login introduce
            //$_SESSION['id'] = $user[0]['id'];
            session('id',$user[0]['id']);
            $res = M("user_details") -> where("uid = {$user[0]['id']}") ->find();
            session('userinfo',$res);
			session('homeuser',$_POST['user']);
			session('id',$res['uid']);
			// $this->redirect("index");
             //exit();
			
    		return json_encode($user);
    	}else{
    		return json_encode(false);
    	}
    	
    }
	
	//执行退出
    public function loginout()
    {
        session("id",null); //清除登录信息
        $this->redirect("login/index/index");
    }
	
}
