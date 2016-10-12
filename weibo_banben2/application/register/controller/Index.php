<?php
namespace app\register\controller;
use think\Controller;


class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function judge()
    {	
    	\think\Log::init(['type'=>'Test']);
    	$name = $_GET['name'];
    	$mod = M("user");
    	$res = $mod -> where("username = '{$name}'") -> select();
    	
    	if($res){
    		return 2;
    	}else{
    		return 1;
    	}
    	
    	

    }
    public function doReg(){
    	\think\Log::init(['type'=>'Test']);

    	$verify = new \org\Verify();
        if(!$verify->check(I("get.code"))){
           $this->assign("errorinfo","验证码错误！");
           return "2";
        }
        //注册用户的基本信息
    	$name = $_GET['name'];
    	$pwd = $_GET['pwd'];
    	$mod = M('user');
    	$data['username'] = $name;
    	$data['passwd'] = md5($pwd);
    	$m = $mod -> data($data) -> add();

        //注册用户的详情信息，默认的
        $data = array();
        $data['nickname'] = $name;
        $data['ip'] = $_SERVER['REMOTE_ADDR'];
        $data['regtime'] = time();
        $data['uid'] = $m;
        M('user_details') -> add($data);

        //给用户添加默认分组信息
        $data = array();
        $data['uid'] = $m;
        M('user_group') -> add($data);
        
    	return 1;

    }

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
