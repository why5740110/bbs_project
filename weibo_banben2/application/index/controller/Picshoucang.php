<?php
	namespace app\index\controller;

	//use think\Controller;
	
	//自定义图片收藏控制器
	class Picshoucang extends Common
	{
		public function index()
		{
			
			$uid = session('id');
			
			$this->assign('photo_count',M('photo')->where("uid={$uid}")->count());
			//查看该用户的相册专辑
			//$this->assign('photo_list',M('photo')->where("uid={$uid}")->limit(5)->select());
			
			//获取该用户所有的照片
			$this->assign('pic_total',M('pic')->where("uid={$uid}")->count());
			//获取该用户所有相册专辑的照片总数
			$this->assign('photo_pic_total',M('pic')->where("uid={$uid}")->count());
			
			//获取该用户所有的点赞数
			$this->assign('dzan_total',M('pic_dzan')->where("zuid={$uid}")->count());
			//$this->assign('photopiclist',M('pic')->where("photo_id=20")->select());
			//实例化图片表
			$mod = M('pic');
			//查询图片信息
			$this->assign('pic_list',$mod->where("uid={$uid}")->select());
			//查询图片总数
			$this->assign('pic_count',$mod->where("uid={$uid}")->count());
			
			
			//通过当前登录用户的uid查询出用户收藏图片的
			$m = M('pic_shoucang')->where("suid={$uid}")->select();
			if(!empty($m)){
				foreach($m as $key=>$vo){
					//获取发布图片的用户puid
					$puid[] = $vo['puid'];
					//获取图片的picid
					$picid[] = $vo['pic_id'];
					//获取相册的photoid
					$photoid[] = $vo['photo_id'];
					
					//通过图片picid获取图片名称
					$picname[] = M('pic')->field("picname,id")->where("id={$picid[$key]}")->find();
					//通过photoid获取相册名称
					$title[] = M('photo')->field('title,id')->where("id={$photoid[$key]}")->find();
					//通过发布图片用户puid获取用户名
					$username[] = M('user')->field("username,id")->where("id={$puid[$key]}")->find();
				
					//遍历picname
					foreach($picname as $vo){
						$res[$key]['picname'] = $vo['picname'];
						$res[$key]['picid'] = $vo['id'];
					}
					//遍历title
					foreach($title as $to){
						$res[$key]['title'] = $to['title'];
						$res[$key]['photoid'] = $to['id'];
					}
					
					//遍历username
					foreach($username as $no){
						$res[$key]['username'] = $no['username'];
						$res[$key]['puid'] = $no['id'];
					}
				}	
				$this->assign('res',$res);
				$this->assign('listpage','');
				//dump($res);
				
			}else{
				$this->assign('res',array());
				$this->assign('listpage','目前没有收藏图片...');
			}
			//查询当前用户共收藏多少张图片
			$this->assign('shoucang_count',M('pic_shoucang')->where("suid={$uid}")->count());
			
			//查询当前用户收藏的所有专辑数
			$photocang = M('photo_shoucang')->where("suid={$uid}")->select();
			
			if(!empty($photocang)){
				foreach($photocang as $key=>$vt){
					//获取发布图片的用户puid
					$puid[] = $vt['puid'];
					//获取相册的phid
					$phid[] = $vt['photo_id'];
					
					//通过图片photoid获取相册标题 相册id 相册封面图片名
					$photoname[] = M('photo')->field("id,title,photoname")->where("id={$phid[$key]}")->find();
					
					//通过发布图片用户puid获取用户名
					$username[] = M('user')->field("username,id")->where("id={$puid[$key]}")->find();
				
					//遍历picname
					foreach($photoname as $vo){
						$photocanglist[$key]['photoname'] = $vo['photoname'];
						$photocanglist[$key]['photoid'] = $vo['id'];
						$photocanglist[$key]['title'] = $vo['title'];
					}
					//遍历username
					foreach($username as $no){
						$photocanglist[$key]['username'] = $no['username'];
						$photocanglist[$key]['puid'] = $no['id'];
					}
				}	
				
				$this->assign('photocanglist',$photocanglist);
				$this->assign('listpage1','');
				
				//dump($photocanglist);
				//dump($photocanglist);
				//dump($photocanglist);
				//dump($phid);
			
			}else{
				$this->assign('photocanglist',array());
				$this->assign('listpage1','目前没有收藏相册专辑...');
				
			}
			//查询当前用户共收藏多少张图片
			$this->assign('photoshoucang_count',M('photo_shoucang')->where("suid={$uid}")->count());
			
			//加载模版
			return $this->fetch();
			
		}
		
		//将收藏的图片信息写入到数据库中
		public function insert()
		{
			$mod = M('pic_shoucang');
			$suid = session('id');
			//判断登录用户是否存在该图片的点赞数据表中
			$cang = $mod->where("pic_id={$_POST['id']} and suid={$suid}")->select();
			//dump($zan);
			//exit();
			if($cang){
				//echo 'ddd';
				//如果存在 返回true
				return true;
			}else{
				//echo 'sssss';
				//如果不存在 将点赞信息添加到点赞数据表中
				
				$data['suid'] = $suid;
				$data['puid'] = I('post.puid');
				$data['pic_id'] = I('post.id');
				$data['photo_id'] = I('post.photoid');
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
		
		
		//当前用户取消收藏
		public function close($picid = -1)
		{
			//获取当前登录用户的uid
			$uid = session('id');
			//接收ajax穿过来的picid值
			$picid = I('post.picid');
			
			//在收藏数据表中执行删除该条信息
			M('pic_shoucang')->where("pic_id={$picid} and suid={$uid}")->delete();
			
		}
		
		
		
		
	}