<?php
namespace app\index\controller;

use think\Controller;

//自定义广告控制器
class Guanggao extends Controller
{
	//显示右侧广告
	public function index(){
	
		//实例化
		//$mod = M('guanggao');
		
		//查询前5条广告信息  通过order字段降序排序
		//$this->assign('list_right',$mod->limit(5)->where("position='right'")->order('orderid desc')->select());
		
		//$m = M('ss');
		//$this->assign('ss',$m->show());
		//加载模版
		//return $this->fetch();
		
		
		//=============================================
		//查询前5条广告信息  通过order字段降序排序
		//$this->assign('list_left',$mod->limit(1)->where("position='left'")->order('orderid desc')->select());
		
		//加载模版
		$this->right();
		$this->left();
		
		
		return $this->fetch();
	
	}
	
	//显示左侧广告
	public function right(){
	
		//实例化
		$mod = M('guanggao');
		
		//查询前5条广告信息  通过order字段降序排序
		$this->assign('guanggao_list_right',$mod->limit(2)->where("position='right'")->order('orderid desc')->select());
		
		//加载模版
		//return $this->fetch("index");
	
	}
	
	
	//显示左侧广告
	public function left(){
	
		//实例化
		$mod = M('guanggao');
		
		//查询前5条广告信息  通过order字段降序排序
		$this->assign('guanggao_list_left',$mod->limit(2)->where("position='left'")->order('orderid desc')->select());
		
		//加载模版
		//return $this->fetch("index");
	
	}
	
	
	//显示底部广告
	public function buttom()
	{
	
		//实例化
		$mod = M('guanggao');
		$a = $mod->where("position='buttom'")->limit(1)->find();
		//查询前5条广告信息  通过order字段降序排序
		// dump($a);die();
		$this->assign('guanggao_list_buttom', $a);
		//加载模版
		//return $this->fetch();
	
	}
	
	//显示顶部广告
	public function top(){
	
		//实例化
		$mod = M('guanggao');
		
		//查询前5条广告信息  通过order字段降序排序
		$this->assign('guanggao_list_top',$mod->limit(1)->where("position='top'")->order('orderid desc')->select());
		
		//加载模版
		//return $this->fetch();
	
	}
	
	//显示中间广告
	public function middle(){
	
		//实例化
		$mod = M('guanggao');
		
		//查询前5条广告信息  通过order字段降序排序
		$this->assign('guanggao_list_middle',$mod->limit(1)->where("position='middle'")->order('orderid desc')->select());
		
		//加载模版
		//return $this->fetch();
	
	}
	
	
	
	
	
}
