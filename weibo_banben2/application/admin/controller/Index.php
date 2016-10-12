<?php
// 后台首页控制器
namespace app\admin\controller;


// 首页显示
class Index extends Common
{
	public function index()
	{
		return $this->fetch();
	}
}