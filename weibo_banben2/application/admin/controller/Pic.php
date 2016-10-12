<?php
namespace app\admin\controller;

//use think\Controller;

//自定义广告控制器
class Pic extends Common
{
	//显示图片信息
	public function index()
	{
		//判断封装搜索条件
        $map=array();
        $keyword = I("post.keyword");
        if(!empty($keyword)){
            $map['id'] = array('like',"%{$keyword}%");
        }
		//实例化
		$mod = M('pic');
        $total = $mod->where($map)->count(); //获取总条数
        $numPerPage = isset($_REQUEST['numPerPage'])?$_REQUEST['numPerPage']:10; //页大小
        $page = new \app\admin\org\Page($total,$numPerPage);//实例化分页对象
        $this->assign("piclist",$mod->where($map)->limit($page->limit())->select());
        $this->assign("numPerPage",$numPerPage);
        $this->assign("totalCount",$page->maxRows);
        $this->assign("currentPage",$page->page);
        return $this->fetch();
		
	}
	
	
	//执行图片删除
	public function del($id=-1)
	{
		//实例化
		$mod = M("pic");
		//获取图片名称信息
		$pic = $mod->find($id+0);
		//图片显示名称
		$picname = $pic['picname'];
		//图片所在相册id
		$photoid = $pic['photo_id'];
		//图片所属用户
		$uid = $pic['uid'];
		
		//获取当前用户相册的默认图片信息
		$photo = M('photo')->find($photoid);
		//相册默认封面原图片
		
		//执行删除
		$m = $mod->delete($id+0);
		//获取图片所在位置
		$url = "uploads/pic/".$picname;
		//删除图片
		if($m>0){
			
			if($picname == $photo['photoname']){
				//删除该图片后 判断该相册中是否有其他图片
				$mm = M('pic')->where("photo_id={$photoid}")->order("id")->limit(1)->select();
				if(count($mm)>0){
					//将相册中排序第一的图片名作为相册封面
					$photo = M('photo')->find($photoid);
					$data['photoname'] = $mm[0]['picname'];
					M('photo')->save($data);
				}else{
					//将相册相册封面名改为默认图片名
					$photo = M('photo')->find($photoid);
					$data['photoname'] = 'default.png';
					M('photo')->save($data);
				}
				
			}
			
			
			//执行删除图片
			unlink($url);
			//删除该图片的所有点赞数
			M('pic_dzan')->where("pic_id={$id}")->delete();
			//删除该图片的所有评论数
			M('pic_reply')->where("pic_id={$id}")->delete();
			
			
			
			
			return $this->success("删除成功");
		}
		
	}
	
	
	
	
}