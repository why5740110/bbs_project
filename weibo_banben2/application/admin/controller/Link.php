<?php
// 友情连接控制器
namespace app\admin\controller;


class Link extends Common
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
		$mod = M("link");
		// 获取总条数
		$total = $mod->count(); 
		// J-UI页大小
		$numPerPage = isset($_REQUEST['numPerPage'])?$_REQUEST['numPerPage']:5; 
		// 实例化分页对象
		$page = new \app\admin\org\Page( $total, $numPerPage );
		// 分配数据
		$this->assign("list", M("link")->order('status desc,order_id')->limit($page->limit())->select());
		// 分配页大小
		$this->assign("numPerPage", $numPerPage);
		// 分配总数据条数
		$this->assign("totalCount", $page->maxRows);
		// 分配当前页
		$this->assign("currentPage", $page->page);

		// 渲染模板
		return $this->fetch();
	}

	/**
	 * 添加模板
	 * 
	 */
	public function add()
	{
		return $this->fetch();
	}

	/**
	 * 执行添加操作
	 */
	public function insert()
	{
		// 实例化
		$mod = M("Link");

		// 初始化
		$mod->create();

		// 执行添加并获取添加id
		$m = $mod->add();

		// 判断并返回相应操作
		if ( $m>0 ) {
			return $this->success("添加成功！");
		} else {
			return $this->error("添加失败！");
		}
	}
	/**
	 * 删除友情删除操作
	 */
	public function del($id=0)
	{
		// 实例化Link表执行删除并获取影响行数
		$m = M("Link")->delete($id);
		// 判断影响行数并返回对应提示信息
        if($m>0){
            return $this->success("删除成功");
        }else{
            return $this->error("删除失败");
        }
	}

	/**
	 * 加载修改表单
	 */
	public function edit($id=0)
	{
        $this->assign("vo",M("Link")->find($id));
		return $this->fetch();
	}

	/**
	 * 执行修改操作
	 * 
	 */
	public function update()
	{
		$mod = M("Link");
        //初始化
        $mod->create();
        //执行编辑
        $m = $mod->save();
        //判断
        if($m>0){
            return $this->success("修改成功");
        }else{
            return $this->error("修改失败");
        }
        
    }
}