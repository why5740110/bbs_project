<?php
// 公共管理控制器的基类
namespace app\index\controller;

use think\Controller;

class Common extends Controller
{
	/* // ThinkPHP的自动执行的初始化方法
	public function _initialize()
	{
		
		//$id = session("id");
		// 判断是否登录
		if () {
			
			// 跳转到登录页(重定向)
			$this->redirect("login/Index/index");
			exit();
		}else{
			$uid = session('id');
			$this->assign('userdetail',M('user_details')->where("uid={$uid}")->find());
			
		}
	} */
	
	// ThinkPHP的自动执行的初始化方法
	public function _initialize()
	{
		$id = session("id");

		// 判断是否登录
		if ( empty($id) ) {
			// 跳转到登录页(重定向)
			$this->redirect("login/index/index");
			exit();
		}else{
			//根据登录用户id获取用户的详细信息
		$this->assign('userdetail',M('user_details')->where("uid={$id}")->find());
		}
	}
	
}