<?php
	namespace app\index\controller;

	//use think\Controller;
	
	//自定义好友的个人首页控制器
	class Persongz extends Common
	{
		//加载好友个人首页页面
		public function index()
		{
			//调用公共方法
			$this->com();
			//调用广告控制器
			$guanggao = new \app\index\controller\Guanggao();
			//调用广告类的left方法
			$guanggao->left();
			//获取当前用户uid
			$uid = $_GET['uid'];
			//获取该用户关注的好友总数量
			$this->assign('user_gz_count',M('fans')->where("fansid={$uid}")->count());
			//获取该用户的粉丝总数量
			$this->assign('user_fans_count',M('fans')->where("uid={$uid}")->count());
			
			
			//加载个人首页界面
			return $this->fetch();
			
		}
		
		
		//加载个人中心编辑页面
		public function pdetails()
		{
			//调用公共方法
			$this->com();
			//调用广告控制器
			$guanggao = new \app\index\controller\Guanggao();
			//调用广告类的left方法
			$guanggao->left();
			//获取当前用户uid
			$uid = $_GET['uid'];
			//获取该用户关注的好友总数量
			$this->assign('user_gz_count',M('fans')->where("fansid={$uid}")->count());
			//获取该用户的粉丝总数量
			$this->assign('user_fans_count',M('fans')->where("uid={$uid}")->count());
			
			//加载个人中心编辑页面
			return $this->fetch();
		}
		
		
		
		
		
		
		//公共方法
		public function com()
		{
			
			//当前好友用户的uid
			$uid = $_GET['uid'];
			//根据当前用户id找到用户的详细信息
			$this->assign('userlist',M('user_details')->where("uid={$uid}")->find());
			//根据好友用户的id找到用户的用户名
			$this->assign('uname',M('user')->where("id={$uid}")->find());
			
			
		}
		
	
	
	}