<?php

// 学生信息管理控制器
namespace app\admin\controller;


class User extends Common
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
		/*$mod = M("user");
		// 获取总条数
		$total = $mod->count(); 
		// J-UI页大小
		$numPerPage = isset($_REQUEST['numPerPage'])?$_REQUEST['numPerPage']:5; 
		// 实例化分页对象
		$page = new \app\admin\org\Page( $total, $numPerPage );
		// 分配数据

		$re = $mod->join('wb_user_details ON wb_user.id = wb_user_details.uid')->select();
		//dump($re);

		$this->assign("list", $mod->join('wb_user_details ON wb_user.id = wb_user_details.uid')->order("uid asc")->limit($page->limit())->select());
		// 分配页大小
		$this->assign("numPerPage", $numPerPage);
		// 分配总数据条数
		$this->assign("totalCount", $page->maxRows);
		// 分配当前页
		$this->assign("currentPage", $page->page);

		// 渲染模板
		return $this->fetch();*/
		$map=array();
        $keyword = I("post.keyword");
        if(!empty($keyword)){
            $map['nickname'] = array('like',"%{$keyword}%");
        }

		$mod = M("user_details");
		// 获取总条数
		$total = $mod->where($map)->count(); 
		// J-UI页大小
		$numPerPage = isset($_REQUEST['numPerPage'])?$_REQUEST['numPerPage']:5;
		// 实例化分页对象
		$page = new \app\admin\org\Page( $total, $numPerPage );
		// 分配数据

		$res = $mod -> where($map) ->limit($page->limit())-> select();
		foreach($res as $k=>$v){
			$r = M('user') -> where("id={$v['uid']}") -> find();
			$res[$k]['username'] = $r['username'];
		}
		$this -> assign('list',$res);
		// 分配页大小
		$this->assign("numPerPage", $numPerPage);
		// 分配总数据条数
		$this->assign("totalCount", $page->maxRows);
		// 分配当前页
		$this->assign("currentPage", $page->page);

		// 渲染模板
		return $this->fetch();
	}

	public function del($id=0)
    {   
    	$mod = M('user_details');
    	$res = $mod ->where("uid={$id}")->find();
    	if($res['status'] == 1){
	        $data['status'] = 0;
	        $m = $mod -> where("uid={$id}") -> save($data);
	        if($m>0){
	            return $this->success("屏蔽成功");
	        }else{
	            return $this->error("屏蔽失败");
	        }
    	}else{
    		$data['status'] = 1;
	        $m = $mod -> where("uid={$id}") -> save($data);
	        if($m>0){
	            return $this->success("恢复成功");
	        }else{
	            return $this->error("回复失败");
	        }
    	}
    }

    public function add()
	{
		return $this->fetch();
	}

    public function insert()
    {
  
        $data['username'] = $_POST['username'];
        $data['passwd'] = $_POST['paswd'];
        $m = M('user') ->add($data);
      	$da['uid'] = $m;
      	$da['regtime'] = time();
      	$da['ip'] = "管理员注册".$_SERVER["REMOTE_ADDR"];
      	$da['nickname'] = $_POST['username'];
       	$n = M('user_details')->add($da);
        if($m>0 && $n>0){
            return $this->success("添加成功");
        }else{
            return $this->error("添加失败");
        }
        
    }

    public function edit($id=0)
    {
    	$this -> assign('id',$id);
        return $this->fetch("edit");
    }

    public function update()
    {
    	if($_POST['pwd1'] === $_POST['pwd2']){
    		$d['passwd'] = md5($_POST['pwd1']);
    		$id=$_POST['uid'];
    		$m = M('user') -> where("id={$id}") ->save($d);
    		if($m>0){
	            return $this->success("修改成功");
	        }else{
	            return $this->error("修改失败");
	        }
    	}else{
    		return $this->error("添加失败,密码不一致");
    	}

    }


	 

}