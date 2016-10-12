<?php
// 微博后台管理
namespace app\admin\controller;

class Weibo extends Common
{
	/**
	 * 修改博文状态模板
	 */
	public function index()
	{	
		//判断封装搜索条件
        $map=array();
        $keyword = I("post.keyword");
        if(!empty($keyword)){
            $map['content'] = array('like',"%{$keyword}%");
        }

        //处理排序
     
        // $_POST['_order']= $_POST['_order']."";
        // $_POST['_sort']=$_POST['_sort']."";
        
        // $order= !empty($_POST['_order'])?$_POST['_order']:"time"; //被排序字段
        // $sort= !empty($_POST['_sort'])?$_POST['_sort']:"asc"; //排序顺序

		//实例化
		$mod = M('Article');
        $total = $mod->where($map)->count(); //获取总条数
        $numPerPage = isset($_REQUEST['numPerPage'])?$_REQUEST['numPerPage']:5; //页大小
        $page = new \app\admin\org\Page($total,$numPerPage);//实例化分页对象
        // 遍历发布人并放入list数组中
        $list = $mod->where("status=1")->where($map)->order("time desc")->limit($page->limit())->select();
        for ($i = 0; $i < count($list); $i++) {
        	// 查询对应的人名
        	$a = M("User_details")->where("uid={$list[$i]['uid']}")->find();
        	$list[$i]['nickname'] = $a['nickname'];
        	// 将一张图片放入显示中
        	$b = M("Article_pic")->where("article_id={$list[$i]['id']}")->find();
        	$pic = $b['articlepic'];
        	$list[$i]['articlepic'] = $pic;
        }
        $this->assign("list",$list);
        $this->assign("numPerPage",$numPerPage);
        $this->assign("totalCount",$page->maxRows);
        $this->assign("currentPage",$page->page);
        return $this->fetch();
	}

	/**
	 * 执行删除操作
	 */
	public function del($id=0)
	{
		// 执行状态修改
		$data['id'] = $id;
		$data['status'] = 2;
		// 实例化
		$mod = M("article");
		// 执行修改
		$a = $mod->save($data);

		// 判断
		if ( $a ) {
			return $this->success("放入回收站成功！");
		} else {
			return $this->error("放入回收站失败！");
		}
	}

	/**
	 * 微博回收站模板
	 */
	public function wb_hsz()
	{
		//实例化
		$mod = M('Article');
        $total = $mod->count(); //获取总条数
        $numPerPage = isset($_REQUEST['numPerPage'])?$_REQUEST['numPerPage']:5; //页大小
        $page = new \app\admin\org\Page($total,$numPerPage);//实例化分页对象
        // 遍历发布人并放入list数组中
        $list = $mod->where("status=2")->limit($page->limit())->select();
        for ($i = 0; $i < count($list); $i++) {
        	// 查询对应的人名
        	$a = M("User_details")->where("uid={$list[$i]['uid']}")->find();
        	$list[$i]['nickname'] = $a['nickname'];
        	// 将一张图片放入显示中
        	$b = M("Article_pic")->where("article_id={$list[$i]['id']}")->find();
        	$pic = $b['articlepic'];
        	$list[$i]['articlepic'] = $pic;
        }
        $this->assign("list",$list);
        $this->assign("numPerPage",$numPerPage);
        $this->assign("totalCount",$page->maxRows);
        $this->assign("currentPage",$page->page);
        return $this->fetch("weibo/wb_hsz");	
	}

	/**
	 * 微博回收站恢复
	 */
	public function wb_huifu($id=0)
	{
		// 执行状态修改
		$data['id'] = $id;
		$data['status'] = 1;
		// 实例化
		$mod = M("article");
		// 执行修改
		$a = $mod->save($data);

		// 判断
		if ( $a ) {
			return $this->success("恢复成功！");
		} else {
			return $this->error("恢复失败！");
		}
	}
}