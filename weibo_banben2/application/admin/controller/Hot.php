<?php
// 友情连接控制器
namespace app\admin\controller;


class Hot extends Common
{
	public function index()
	{	
		$map=array();
        $keyword = I("post.keyword");
        if(!empty($keyword)){
            $map['content'] = array('like',"%{$keyword}%");
        }

		$mod = M("search_hot");
		// 获取总条数
		$total = $mod->where($map)->count(); 
		// J-UI页大小
		$numPerPage = isset($_REQUEST['numPerPage'])?$_REQUEST['numPerPage']:5; 
		// 实例化分页对象
		$page = new \app\admin\org\Page( $total, $numPerPage );
		// 分配数据
		$this->assign("list", M("search_hot")->where($map)->order('hot_height desc')->limit($page->limit())->select());
		// 分配页大小
		$this->assign("numPerPage", $numPerPage);
		// 分配总数据条数
		$this->assign("totalCount", $page->maxRows);
		// 分配当前页
		$this->assign("currentPage", $page->page);

		// 渲染模板
		return $this->fetch();
	}

	public function edit()
	{
		$this -> fetch();
	}

	public function add(){
		$mod = M("search_history");
		$res = $mod -> group("content") -> select();
		//dump($res);
		foreach($res as $v){
			//echo $v['content']."<br>";
			$content = $v['content'];
			$n = $mod -> where("content='{$content}'") -> count();
			$m = M("search_hot");
			$res_h = $m -> where("content = '{$content}'") -> find();
			if($res_h){
				//当数据库里有这内容则只需要修改他的热度
				//还需要你更改的值是否没变，没变会报错，所以判断没变跳过
				if($res_h['hot_height'] == $n){

				}else{
					$data = array();
					$data['hot_height'] = $n;
					$m -> where("content = '{$content}'") -> save($data);
				}

			}else{
				//没有数据插入
				$data = array();
				$data['content'] = $content;
				$data['hot_height'] = $n;
				$data['status'] = 1;
				$m -> add($data);
			}
		}

	}

	public function del($id=0)
	{
		$mod = M('search_hot');
    	$res = $mod ->where("id={$id}")->find();
    	if($res['status'] == 1){
	        $data['status'] = 0;
	        $m = $mod -> where("id={$id}") -> save($data);
	        if($m>0){
	            return $this->success("屏蔽成功");
	        }else{
	            return $this->error("屏蔽失败");
	        }
    	}else{
    		$data['status'] = 1;
	        $m = $mod -> where("id={$id}") -> save($data);
	        if($m>0){
	            return $this->success("恢复成功");
	        }else{
	            return $this->error("恢复失败");
	        }
    	}
	}

	
}