<?php
// 友情连接控制器
namespace app\admin\controller;


class Gonggao extends Common
{
	/**
	 * 首页显示
	 *  @param $mod;          实例化数据库
	 * 	@param $total;        数据库符合条件总数据条数
	 * 	@param $numPerPage;   J-UI页大小
	 * 	@param $page;         实例化分页对象
	 * 	@param $list;         使用分页条件显示数据
	 * 	@param $totalCount;   J-UI总数据条数
	 * 	@param $currentPage;  J-UI当前页
	 * 	return 渲染J-UI模板
	 */
	public function index()
	{	

		$map=array();
        $keyword = I("post.keyword");
        if(!empty($keyword)){
            $map['title'] = array('like',"%{$keyword}%");
        }

		$mod = M("gonggao");
		// 获取总条数
		$total = $mod->where($map)->count(); 
		// J-UI页大小
		$numPerPage = isset($_REQUEST['numPerPage'])?$_REQUEST['numPerPage']:5; 
		// 实例化分页对象
		$page = new \app\admin\org\Page( $total, $numPerPage );
		// 分配数据
		$this->assign("list", M("gonggao")->where($map)->order('order')->limit($page->limit())->select());
		// 分配页大小
		$this->assign("numPerPage", $numPerPage);
		// 分配总数据条数
		$this->assign("totalCount", $page->maxRows);
		// 分配当前页
		$this->assign("currentPage", $page->page);

		// 渲染模板
		return $this->fetch();
	}

	public function edit($id=0)
	{
        $this->assign("vo",M("gonggao")->find($id));
		return $this->fetch();
	}
	public function update()
	{	
		$id = $_POST['id'];
		$data['order'] = $_POST['order'];
		$data['content'] = $_POST['content'];
		$data['title'] = $_POST['title'];
		$data['status'] = $_POST['status'];
	
         // dump($data);exit;
        //执行编辑
        $mod = M('gonggao');
        $m = $mod->where("id={$id}")->save($data);

        //判断
        if($m>0){
            return $this->success("修改成功");
        }else{
            return $this->error("修改失败");
        }
        
    }

    public function del($id=0)
	{
		$mod = M('gonggao');
    	$res = $mod ->where("id={$id}")->find();
    	if($res['status'] == 1){
	        $data['status'] = 0;
	        $m = $mod -> where("id={$id}") -> save($data);
	        if($m>0){
	            return $this->success("隐藏成功");
	        }else{
	            return $this->error("隐藏失败");
	        }
    	}else{
    		$data['status'] = 1;
	        $m = $mod -> where("id={$id}") -> save($data);
	        if($m>0){
	            return $this->success("恢复成功");
	        }else{
	            return $this->error("回复失败");
	        }
    	}
	}

	public function insert()
	{
		// 实例化
		$mod = M("gonggao");
		$data =array(); 
		$data['order'] = $_POST['order'];
		$data['content'] = $_POST['content'];
		$data['title'] = $_POST['title'];
		$data['status'] = $_POST['status'];
		$data['time'] = time();
		// 执行添加并获取添加id
		$m = $mod->add($data);

		// 判断并返回相应操作
		if ( $m>0 ) {
			return $this->success("添加成功！");
		} else {
			return $this->error("添加失败！");
		}
	}
	public function add()
	{
		return $this->fetch();
	}

	
}