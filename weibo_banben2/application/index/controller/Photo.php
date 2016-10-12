<?php
	namespace app\index\controller;

	//use think\Controller;
	
	//自定义相册控制器
	class Photo extends Common
	{
		
		//显示加载相册列表信息
		public function index()
		{
		
			//实例化
			$mod = M('photo');
			$uid = session('id');
			
			
			
			//根据登录用户id获取用户的详细信息
			//$this->assign('userdetail',M('user_details')->where("uid={$uid}")->find());
			//根据该用户的id
			$photo = M('photo')->where("uid={$uid}")->select();
			//判断当前用户中是否有相册
			if(!empty($photo)){
				foreach($photo as $vo){
					//相册的id
					$photoid = $vo['id'];
					//根据相册id号去查看该相册中有多少张图片
					$picnum[] = M('pic')->where("uid={$uid} and photo_id={$photoid}")->count();
					
				}
				//实例化分页类 
				$page = new \app\index\org\Pagepic($mod->where("uid={$uid}")->count(),10);
				
				//根据登录用户查询该用户的所有相册专辑
				$this->assign('photo_list',$mod->where("uid={$uid}")->limit($page->limit())->select());
				//显示分页条信息
				$this->assign('pageshow',$page->show());
				$this->assign('picnum',$picnum);
			}else{
				$this->assign('photo_list',array());
				$this->assign('pageshow','你还没创建专辑...');
			}
			
			//获取该用户发布总专辑数
			$this->assign('photo_count',M('photo')->where("uid={$uid}")->count());
			//获取该用户所有的照片
			$this->assign('pic_total',M('pic')->where("uid={$uid}")->count());
			//获取该用户所有的点赞数
			$this->assign('dzan_total',M('pic_dzan')->where("zuid={$uid}")->count());
			
			return $this->fetch();
		
		}
		
		//执行添加相册信息
		public function insert()
		{
			//实例化
			$mod = M('photo');
			
			$data['uid'] = session('id');  //获取登录用户的id
			$data['title'] = $_POST['title'];
			$data['content'] = $_POST['content'];
			$data['photoname'] = "default.png";
			
			$data['status'] = $_POST['status'];
			//if($data['status'] != 4){
				//$data['question'] = "";
				//$data['answer'] = "";
			//}else{
				//$data['question'] = $_POST['question'];
				//$data['answer'] = $_POST['answer'];
			switch($_POST['status']){
				case 1:
					$data['staush'] = '所有人可见';
				break;
					
				case 2:
					$data['staush'] = '仅自己可见';
				break;
				
				case 3:
					$data['staush'] = '仅好友可见';
				break;
				
			}
			$data['addtime'] = time();
			//初始化
			$mod->create();
			//执行添加
			$id = $mod->add($data);
			
			$list = $mod->where("id={$id}")->select();
			$list[0]['addtime'] = date('Y-m-d',time());
			return json_encode($list);
			
		}
		
		//执行修改
		public function update($id=-1)
		{
			//实例化
			$mod = M("photo");
			
			$data['id'] = I('post.id');
			$data['uid'] = I('post.uid');
			$data['content'] = I('post.content');
			$data['title'] = I('post.title');
			$data['status'] = I('post.status');
			$data['addtime'] = time();
			
			//$data['content'] = $_POST['content'];
			
			//初始化
			//$mod->create();
			//$mod->addtime = time();
			switch($data['status']){
				case 1:
					$data['staush'] = '所有人可见';
				break;
					
				case 2:
					$data['staush'] = '仅自己可见';
				break;
				
				case 3:
					$data['staush'] = '仅好友可见';
				break;
			}
			
			//保存
			$mod->save($data);
			
		}
		
		//执行删除操作
		public function del($photoid)
		{
			//获取相册id
			$id = $_POST['photoid'];
			$uid = session('id');
			
			//通过相册的$id 去图片表中查询图片， 如果该相册中所有图片
			$pic = M('pic'); //实例化图片表
			
			$mod = M('photo'); //实例化相册表
			//$id = $_GET['id'];
			//$uid = $_GET['uid'];
			//dump($id);
			//通过相册id 找到该相册中所有图片id 并执行删除
			$m = $pic->where("photo_id={$id} and uid={$uid}")->select();
			//dump($m);
			
			if(!empty($m)){
				//echo '2222';
				//$mod = M('photo'); //实例化相册表
				
				foreach($m as $vo){
					//$picid = $vo['id'];
					$pic->where("id={$vo['id']}")->delete();
					//删除该相册中所有的图片信息
					unlink('./uploads/pic/'.$vo['picname']);
					//删除所有图片的点赞数
					M('pic_dzan')->where("pic_id={$vo['id']}")->delete();
					//删除所有图片的评论数
					M('pic_reply')->where("pic_id={$vo['id']}")->delete();
				}
				//$picid1 = implode(',',$picid);
				//$m->where("id in ({$picid1})")->delete();
				//执行删除操作
				$mod->where("id={$id} and uid={$uid}")->delete();
				//return $this->success("删除成功");
				//$this->success("<script>alert('删除成功')</script>");
				
				//return $this->error("相册中有内容，禁止删除！！");
				
			}else{
				
				//$mod = M('photo'); //实例化相册表
				//执行删除操作
				$mod->where("id={$id} and uid={$uid}")->delete();
				//return $this->success("删除成功");
			}
			
			
		}
		
		//查询单条数据信息
		public function find($id=-1,$uid)
		{
			//实例化
			$mod = M('photo');
			$id = $_POST['id'];
			$uid = $_POST['uid'];
			$data = $mod->where("id={$id} and uid={$uid}")->find();
			//dump($data);
			return json_encode($data);
			
		}
		
		//相册收藏操作
		public function photoshoucang()
		{
			//实例话photo收藏表
			$mod = M('photo_shoucang');
			//获取当前登录用户uid
			$suid = session('id');
			//获取ajax传送过的值
			///$photoid = I('post.photoid');
			//$puid = I('post.puid');
			//$title = I('post.title');
			
			//判断登录用户是否存在该图片的点赞数据表中
			$cang = $mod->where("photo_id={$_POST['photoid']} and suid={$suid}")->select();
			
			if($cang){
				//echo 'ddd';
				//如果存在 返回true
				return true;
			}else{
				//echo 'sssss';
				//如果不存在 将点赞信息添加到点赞数据表中
				
				$data['suid'] = $suid;
				$data['puid'] = I('post.puid');
				$data['photo_id'] = I('post.photoid');
				$data['title'] = I('post.title');
				$data['status'] = 2;
				//dump($data);
				//exit();
				//初始化
				$mod->create();
				//执行添加
				$mod->add($data); 
				
				return false;
				
			}
		}
		
		//取消相册收藏
		public function close()
		{
			//获取当前登录用户的uid
			$uid = session('id');
			//接收ajax穿过来的picid值
			$photoid = I('post.photoid');
			
			//在收藏数据表中执行删除该条信息
			M('photo_shoucang')->where("photo_id={$photoid} and suid={$uid}")->delete();
			
			
		}
		
		
		
		
		
	}