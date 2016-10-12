<?php
namespace app\admin\controller;

//use think\Controller;

//自定义广告控制器
class Guanggao extends Common
{
	//后台显示广告页面
	public function index()
	{
		//判断封装搜索条件
        $map=array();
        $keyword = I("post.keyword");
        if(!empty($keyword)){
            $map['title'] = array('like',"%{$keyword}%");
        }
		//实例化
		$mod = M('guanggao');
        $total = $mod->where($map)->count(); //获取总条数
        $numPerPage = isset($_REQUEST['numPerPage'])?$_REQUEST['numPerPage']:5; //页大小
        $page = new \app\admin\org\Page($total,$numPerPage);//实例化分页对象
        $this->assign("list",$mod->where($map)->limit($page->limit())->select());
        $this->assign("numPerPage",$numPerPage);
        $this->assign("totalCount",$page->maxRows);
        $this->assign("currentPage",$page->page);
        return $this->fetch();
		
	}
	
	//加载添加广告页面
	public function add()
	{
		//实例化
		return $this->fetch();
	}
	
	//执行添加广告信息操作
	public function doAdd()
	{
		C('default_return_type',"JSON");
		//调用上传
		$info = $this->doUpload();
		if(!empty($info)){
            return $info;
        }
		//实例化
		$mod = M('guanggao');
		unset($_POST['ajax']);
		/* //执行添加内容
		$data['title'] = $_POST['title'];
		$data['imagename'] = $info['imagename']['savename'];
		$data['link'] = $_POST['link'];
		$data['position'] = $_POST['position'];
		$data['orderid'] = $_POST['orderid']; */
		//初始化
		$mod->create();
		
		//执行添加
		$m = $mod->add();
		//dump($m);
		if($m>0){
			return $this->success("添加成功");
		}else{
			return $this->error("添加失败");
		}
		
	}
	
	//加载修改页面
	public function edit($id=0)
	{
		
		$this->assign('vo',M('guanggao')->find($id));
		
		return $this->fetch('edit');
		
	}
	
	//执行修改广告信息
	public function update()
	{
		C('default_return_type',"JSON");
		/* dump($_FILES);
		exit(); */
		if($_FILES['imagename']['error']==4){
			//未上传任何图片
			$mod = M("guanggao");
			$_POST['imagename'] = $_POST['jiuimagename'];
			unset($_POST['ajax']);
			unset($_POST['jiuimagename']);
			$mod->create();
			$m = $mod->save();
			//dump($m);
			//判断
			if($m>0){
				return $this->success("修改成功");
			}else{
				return $this->error("修改失败");
			}
		}else{
			//上传
			//调用上传函数
			$info = $this->doUpload();
			//判断
			if(!empty($info)){
				return $info;
			}
			$mod = M("guanggao");
			$jiutu = $_POST['jiuimagename'];
			unset($_POST['ajax']);
			unset($_POST['jiuimagename']);
			
			$mod->create();
			
			$m = $mod->save();
			//判断
			if($m>0){
				
				unlink('./uploads/guanggao/'.$jiutu);
				return $this->success("修改成功");
			}else{
				return $this->error("修改失败");
			}
		}
		
		//调用上传函数
		$info = $this->doUpload();
		//判断
		if(!empty($info)){
            return $info;
        }
		$mod = M("guanggao");
        unset($_POST['ajax']);
        //初始化
        $mod->create();
		/* $mod->title = $_POST['title'];
		$mod->link = $_POST['link'];
		$mod->orderid= $_POST['orderid'];
		//先查询原广告信息
		$guanggao = M('guanggao')->find($id); 
		mod->position = $guanggao['position'];
		mod->imagename = $guanggao['imagename'];
		 */
        //执行编辑
        $m = $mod->save();
        //判断
        if($m>0){
            return $this->success("修改成功");
        }else{
            return $this->error("修改失败");
        }
	}
		
	//执行广告删除
	public function del($id=-1)
	{
		//实例化
		$mod = M("guanggao");
		//获取图片名称信息
		$image = $mod->find($id+0);
		//图片显示名称
		$imagename = $image['imagename'];
		//执行删除
		$m = $mod->delete($id+0);
		//获取图片所在位置
		$url = "uploads/guanggao/".$imagename;
		//删除图片
		if($m>0){
			//执行删除图片
			unlink($url);
			return $this->success("删除成功");
		}
	}
	
	//执行上传
    private  function doUpload()
    {
       //配置上传信息
        $config = array();
        $config['maxSize'] = 3145728 ;// 设置附件上传大小
        $config['exts']    = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $config['rootPath']= './uploads/guanggao/'; // 设置附件上传目录
        $config['autoSub'] =false; //不创建子目录
      	// $config['callcack'] =false; 
        // $config['callback'] =false; 
        $upload = new \org\Upload($config,"LOCAL");
        $info = $upload->upload();
        if(!$info){
            //上传错误提示错误信息
            return $this->error($upload->getError());
        }else{
            // 上传成功
            //执行图片缩放
            //$img = \org\Image::init(); //获取GD库图片处理对象
            //打开图片
            //$img->open("./uploads/guanggao/".$info['imagename']['savename']);
            //进行缩放后另存为s_前缀
            // $img->thumb(200,200)->save("./uploads/guanggao/".$info['imagename']['savename']);
            //执行信息封装
            $_POST['imagename'] = $info['imagename']['savename'];
            return null;
        }
    }
}