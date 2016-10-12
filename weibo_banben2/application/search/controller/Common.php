<?php
// 公共管理控制器的基类
namespace app\search\controller;

use think\Controller;

class Common extends Controller
{
	// ThinkPHP的自动执行的初始化方法
	public function _initialize()
	{
		$id = session("id");


		// 判断是否登录
		if ( empty($id) ) {
			// 跳转到登录页(重定向)
			return $this->redirect("login/index/index");
			exit();
		}
	}
}