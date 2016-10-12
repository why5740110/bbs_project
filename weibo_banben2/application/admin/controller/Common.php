<?php
// 公共管理控制器的基类
namespace app\admin\controller;

use think\Controller;

class Common extends Controller
{
	// ThinkPHP的自动执行的初始化方法
	public function _initialize()
	{
		$adminuser = session("adminuser");

		// 判断是否登录
		if ( empty($adminuser) ) {
			// 跳转到登录页(重定向)
			return $this->redirect("Male/login");
			exit();
		}
	}

	// /**
	//  * 后台公共数据库查询操作
	//  */
	// public function index()
 //    {
	// 	//列表过滤器，生成查询Map对象
	// 	$map = array();
	// 	// 查找控制器中的_filter封装搜索条件方法是否存在
 //        if(method_exists($this, '_filter')) {
	// 		$this->_filter($map);
	// 	}
	// 	//判断采用自定义的Model类
	// 	if(!defined(CONTROLLER_NAME)){
	// 	   $model = D(CONTROLLER_NAME);
	// 	}
	// 	if(!empty($model)) {
	// 		$this->_list($model, $map);
	// 	}
        
	// 	return $this->fetch();
	// }
	
	// //添加表单
	// public function add()
 //    {
	// 	return $this->fetch('add');
	// }
	
	// /**
	//  * 后台公共数据库添加操作
	//  */
 //    //执行添加
	// public function insert()
 //    {
	// 	$model = D(CONTROLLER_NAME);
		
	// 	if(false === $model->create()) {
	// 		return $this->error($model->getError());
	// 	}
	// 	//保存当前数据对象
	// 	if ($result = $model->add()) { //保存成功
	// 		//成功提示
	// 		return $this->success(L('新增成功'));
	// 	} else {
	// 		//失败提示
	// 		return $this->error(L('新增失败').$model->getLastSql());
	// 	}
		
	
	// }

	// /**
	//  * 后台公共数据库编辑表单
	//  */
	// //编辑表单
	// public function edit($id=0)
 //    {
	// 	$model = M(CONTROLLER_NAME);
	// 	//$model->getPk(); //获取主键名
	// 	$vo = $model->find($id);
	// 	$this->assign('vo', $vo);
	// 	return $this->fetch('edit');
	// }
	
	// /**
	//  * 后台公共修改操作
	//  */
 //    //执行编辑
	// public function update()
 //    {
	// 	$model = D(CONTROLLER_NAME);
	
	// 	if(false === $model->create()) {
	// 		return $this->error($model->getError());
	// 	}
	// 	// 更新数据
	// 	if(false !== $model->save()) {
	// 		//成功提示
	// 		return $this->success(L('更新成功'));
	// 	} else {
	// 		//错误提示
	// 		return $this->error(L('更新失败'));
	// 	}
	// }
	
	// /**
	//  * 后台公共删除操作
	//  */
	// public function del($id=0)
 //    {
	// 	//删除指定记录
	// 	$model = M(CONTROLLER_NAME);
	// 	if (!empty($model)) {
	// 		$pk = $model->getPk();
	// 		if (isset($id)) {
	// 			//批量删除
	// 			$condition = array($pk => array('in', explode(',', $id)));
	// 			if (false !== $model->where($condition)->delete()) {
	// 				return $this->success(L('删除成功'));
	// 			} else {
	// 				return $this->error(L('删除失败'));
	// 			}
	// 		} else {
	// 			return  $this->error('非法操作');
	// 		}
	// 	}
	// }
	
	// /**
	//  * 后台公共删除状态
	//  */
	// //删除状态
	// public function delete_tag($id=0)
 //    {
	// 	//删除指定记录
	// 	$model = M(CONTROLLER_NAME);
	// 	if (!empty($model)) {
	// 		$pk = $model->getPk();
	// 		if (isset($id)) {
	// 			$condition = array($pk => array('in', explode(',', $id)));
	// 			if (false !== $model->where($condition)->setField('is_delete',1)) {
	// 				return $this->success(L('删除成功'));
	// 			} else {
	// 				return $this->error(L('删除失败'));
	// 			}
	// 		} else {
	// 			return $this->error('非法操作');
	// 		}
	// 	}
	// }
	
	// /**
	//  * 根据表单生成查询条件
	//  * 进行列表过滤
	//  * @param Model $model 数据对象
	//  * @param HashMap $map 过滤条件
	//  */
	// protected function _list($model, $map=array())
 //    {
		
	// 	//排序字段 默认为主键名
 //        $_REQUEST['_order']=I("request._order")."";
 //        $order=!empty(I("request._order"))?I("request._order"):$model->getPk(); //被排序字段
   
	// 	//排序方式默认按照倒序排列
 //        $_REQUEST['_sort']=I("request._sort")."";
 //        $sort=!empty(I("request._sort"))?I("request._sort"):"desc"; //排序顺序
		
		
	// 	//取得满足条件的记录数
	// 	$count = $model->where($map)->count();
		
	// 	//每页显示的记录数
	// 	$numPerPage = isset($_REQUEST['numPerPage'])?$_REQUEST['numPerPage']:10; //页大小
		
	// 	//创建分页对象
	// 	$page = new \app\admin\org\Page($count,$numPerPage);//实例化分页对象
		
	// 	//分页查询数据
	// 	$list = $model->where($map)->order($order.' '.$sort)->limit($page->limit())->select();
	
	// 	//回调函数，用于数据加工，如将用户id，替换成用户名称
	// 	if (method_exists($this, '_tigger_list')) {
	// 		$this->_tigger_list($list);
	// 	}
		
	// 	//模板赋值显示
	// 	$this->assign('list', $list);
 //        $this->assign("numPerPage",$numPerPage);
 //        $this->assign("totalCount",$page->maxRows);
 //        $this->assign("currentPage",$page->page);
		
	// }
}