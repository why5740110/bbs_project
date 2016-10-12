<?php
	
	namespace app\index\controller;
	header('Content-type:text/html;charset=utf-8');

	//use think\Controller;
	
	//自定义好友之间查看对方的相册信息
	class Picgz extends Common
	{
		//查看好友的图片信息
		public function index()
		{
			
			//调用公共的方法
			$this->pub();
			//获取关注好友用户的用户id
			$uid = I('get.uid');
			$loginuid = session('id');
			
			//通过关注好友的uid获取好友的所有图片
			//$this->assign('gzpic_list',M('pic')->where("uid={$uid}")->select());
			//查看该用户的相册专辑
			//$this->assign('gzphoto_list',M('photo')->where("uid={$uid}")->limit(5)->select());
			
			//实例化分页类 
			//$page = new \app\index\org\Page(M('pic')->where("uid={$uid}")->count(),9);
			//查询图片信息
			//$this->assign('gzpic_list',M('pic')->where("uid={$uid}")->limit($page->limit())->select());
			//$this->assign('pageshow',$page->show());
			
			//右侧显示相册的可见相册信息
			//通过好友用户uid来查询该好友的好友粉丝用户fansid
			$fan = M('fans')->where("uid={$uid}")->select();
			//dump($fan);
			//exit();
			if(!empty($fan)){
				foreach($fan as $vo){
					$fansi[] = $vo['fansid'];
				}
				//dump($fansi);
				//exit();
				//判断登录用户是否是该用户的粉丝
				if(in_array($loginuid,$fansi)){
					//如果是好友的话 ，用户可以查看权限为好友可见的相册信息
					echo 'aaaaaaaaaaaaaa';
					$this->picfriendshow();
					$this->friendshow();
					
				}else{
					//如果不是好友的话 ，只能查看权限为所有的相册信息
					
					$this->picallshow();
					$this->allshow();
					
				}
			}else{
				//如果不是好友的话 ，只能查看权限为所有的相册信息
				$this->picallshow();
				$this->allshowindex();

			}
			//echo 'nmmmmmmmmm';
			
			//加载模版
			return $this->fetch();
			
		}
		
		
		//查看好友的相册专辑信息
		public function photo()
		{
			$mod = M('photo');
			//获取好友用户uid
			$uid = I('get.uid');
			//获取当前登录用户uid
			$loginuid = session('id');
			//调用公共方法
			$this->pub();
			//获取关注好友的uid
			//$uid = $_GET['uid'];
			//实例化
			
			
			/* //实例化分页类 
			$page = new \app\index\org\Page(M('photo')->where("uid={$uid}")->count(),6);
			
			//根据uid获取好友的相册专辑列表
			$this->assign('gzphoto_list',M('photo')->where("uid={$uid}")->limit($page->limit())->select());
			//显示分页条信息
			$this->assign('pageshow',$page->show());
			
			//根据该用户的id
			$photo = M('photo')->where("uid={$uid}")->select();
			foreach($photo as $vo){
				//相册的id
				$photoid = $vo['id'];
				//根据相册id号去查看该相册中有多少张图片
				$picnum[] = M('pic')->where("uid={$uid} and photo_id={$photoid}")->count();
				
			}
			$this->assign('picnum',$picnum); */
			//通过好友用户uid来查询该好友的好友粉丝用户fansid
			$fan = M('fans')->where("uid={$uid}")->select();
			//dump($fan);
			//exit();
			if(!empty($fan)){
				foreach($fan as $vo){
					$fansi[] = $vo['fansid'];
				}
				//dump($fansi);
				//exit();
				//判断登录用户是否是该用户的粉丝
				if(in_array($loginuid,$fansi)){
					//如果是好友的话 ，用户可以查看权限为好友可见的相册信息
					$this->friendshow();
					
				}else{
					//如果不是好友的话 ，只能查看权限为所有的相册信息
					$this->allshow();
					
				}
			}else{
				$this->allshow();
			}
			//加载模版
			return $this->fetch();
		}
		
		
		//查看好友的相册专辑下面的图片信息
		public function photopic()
		{
			//调用公共方法
			$this->pub();
			//获取关注好友的uid
			$uid = I('get.uid');
			$photoid = I('get.photoid');
			
			//获取当前登录用户uid
			$loginuid = session('id');
			//查询图片总数
			$this->assign('pic_count',M('pic')->where("photo_id={$photoid}")->count());
			
			//实例化分页类 
			$page = new \app\index\org\Pagepic(M('pic')->where("uid={$uid} and photo_id={$photoid}")->count(),6);
			
			//查询图片信息
			$this->assign('photopiclist',M('pic')->where("uid={$uid} and photo_id={$photoid}")->limit($page->limit())->select());
			//分页显示
			$this->assign('pageshow',$page->show());
			
			//获取该用户发布总专辑数
			$this->assign('photo_count',M('photo')->where("uid={$uid}")->count());
			
			//查看该用户的相册专辑
			//$this->assign('photo_list',M('photo')->where("uid={$uid}")->limit(5)->select());
			
			//通过好友用户uid来查询该好友的好友粉丝用户fansid
			$fan = M('fans')->where("uid={$uid}")->select();
			//dump($fan);
			//exit();
			if(!empty($fan)){
				foreach($fan as $vo){
					$fansi[] = $vo['fansid'];
				}
				//判断登录用户是否是该用户的粉丝
				if(in_array($loginuid,$fansi)){
					//如果是好友的话 ，用户可以查看权限为好友可见的相册信息
					$this->friendshow();
					
				}else{
					//如果不是好友的话 ，只能查看权限为所有的相册信息
					$this->allshow();
					
				}
			}else{
				$this->allshow();
			}
			
			//加载模版
			return $this->fetch();
		}
		
		
		
		//查看好友的单张图片信息
		public function picshow()
		{
			//调用公共方法
			$this->pub();
			//获取关注好友的uid
			$uid = $_GET['uid'];
			$picid = $_GET['picid'];
			//dump($picid);
			$photoid = $_GET['photoid'];
			
			//根据picid号显示图片
			$this->assign('pic_show',M('pic')->where("id={$picid}")->select());
			//获取登录用户是否对该图片有做点赞 点赞状态
			$this->assign('pic_dzan_status',M('pic_dzan')->field('status')->where("pic_id={$picid} and zuid={$uid}")->select());
			//获取当前图片的总赞数
			$this->assign('pic_dzan_count',M('pic_dzan')->where("pic_id={$picid} and puid={$uid}")->count());
			//获取评论总数
			$this->assign('pic_reply_count',M('pic_reply')->where("pic_id={$picid} and uid={$uid}")->count());
			
			//实例化已点赞分页类 
			$page = new \app\index\org\Pagepic(M('pic_dzan')->where("pic_id={$picid} and puid={$uid}")->count(),5);
			//获取当前图片的点赞列表
			$this->assign('pic_dzan_list',M('pic_dzan')->where("pic_id={$picid} and puid={$uid}")->order("id desc")->limit($page->limit())->select());
			$this->assign('zanpageshow',$page->show());
			
			//实例化已评论分页类
			$page = new \app\index\org\Pagepic(M('pic_reply')->where("pic_id={$picid} and uid={$uid}")->count(),5);
			//获取当前图片的评论列表
			$this->assign('pic_reply',M('pic_reply')->where("pic_id={$picid} and uid={$uid}")->order("reply_time desc")->limit($page->limit())->select());
			//显示已评论的分页条信息
			$this->assign('replypageshow',$page->show());
			
			
			//查看相册专辑总数
			$this->assign('photo_count',M('photo')->where("uid={$uid}")->count());
			//获取该用户所有的照片
			$this->assign('pic_total',M('pic')->where("uid={$uid}")->count());
			//获取该用户所有的点赞数
			$this->assign('dzan_total',M('pic_dzan')->where("zuid={$uid}")->count());
			//查看该图片所在相册的总图片数
			$this->assign('photo_pic_count',M('pic')->where("photo_id={$photoid} and uid={$uid}")->count());
			//显示该图片所在的相册名称
			$this->assign('photo_name',M('photo')->where("id={$photoid} and uid={$uid}")->select());
			
			//实例化该图片所在相册的所有图片分页类
			$page = new \app\index\org\Pagepic(M('pic')->where("photo_id={$photoid} and uid={$uid}")->count(),9);
			$p = $page->page;
			$this->assign('page',$p);
			//显示该图片所在相册的所有图片信息
			$this->assign('photo_pic_list',M('pic')->where("photo_id={$photoid} and uid={$uid}")->limit($page->limit())->select());
			//显示该图片所在相册的小图片分页条信息
			$this->assign('picpageshow',$page->show());
			//获取当前相册id下的所有图片的总张数
			$this->assign('photo_pic_listcount',M('pic')->where("photo_id={$photoid} and uid={$uid}")->count());
			
			
			//通过好友用户id和图片id获取哪些 人给这张图片点过赞
			$pzuid = M('pic_dzan')->where("puid={$uid} and pic_id={$picid}")->order("id desc")->select();
			//dump($pzuid);
			if(!empty($pzuid)){
				foreach($pzuid as $key=>$vo){
					//echo 'ffffff';
					$zuid = $vo['zuid'];
					//dump($zuid);
					//获取点赞用户的用户名
					$zuidname[] = M('user')->where("id={$zuid}")->find();
					//获取点赞用户的用户头像
					$zpicname[] = M('user_details')->where("uid={$zuid}")->find();
				}
				//dump($zuidname);
				$this->assign('uname',$zuidname);
				$this->assign('zpicname',$zpicname);
			}
			
			
			//通过好友用户id和图片id获取哪些 人给这张图片评论过
			$rpzuid = M('pic_reply')->where("uid={$uid} and pic_id={$picid}")->order("id desc")->select();
			//dump($rpzuid);
			if(!empty($rpzuid)){
				foreach($rpzuid as $key=>$vo){
					//echo 'ffffff';
					$ruid = $vo['ruid'];
					//dump($zuid);
					//获取评论用户的用户名
					$ruidname[] = M('user')->where("id={$ruid}")->find();
					//dump($ruidname);
					//获取点赞用户的用户头像
					$rpicname[] = M('user_details')->where("uid={$ruid}")->find();
				}
				//dump($zuidname);
				$this->assign('runame',$ruidname);
				$this->assign('rpicname',$rpicname);
			}
			
			
			
			
			
			$this->assign('userdetail',M('user_details')->where("uid={$uid}")->find());
			//加载模版
			return $this->fetch();
			
		}
		
		
		//查看好友的点赞信息
		public function picdzan()
		{
			//调用公共方法
			$this->pub();
			//获取关注好友的uid
			$uid = $_GET['uid'];
			
			//查询好友用户已点赞哪些了用户的图片
			$this->assign('gzdzan_list',M('pic_dzan')->where("zuid={$uid}")->group("puid")->select());
			
			$m = M('pic_dzan')->where("zuid={$uid}")->group("puid")->select();
			
			//dump($m);
			//dump($pic);
			if(!empty($m)){
				foreach($m as $key=>$vo){
					//获取发布图片的用户puid
					$puid[] = $vo['puid'];
					
					$pic[] = M('pic_dzan')->where("puid={$puid[$key]} and zuid={$uid}")->limit(5)->select();
					//$puid_id[] = $puid;
					//$this->assign('picidlist',M('pic_dzan')->where("puid={$puid[$key]}")->select());
					//获取发布图片用的图片数
					foreach($pic[$key] as $v_picid){
						//dump($v_picid['pic_id']);
						$picname = M('pic')->where("uid={$puid[$key]} and id={$v_picid['pic_id']}")->select();
						if(!empty($picname)){
							$pname[] = $picname[0]['picname']; 
						}
					}
				}
				
				
				reset($m);
				foreach($m as $key=>$v){
					//发布图片的用户id
					$yh = $v['puid'];
					//dump($yh);
					 foreach($pname as $re){
						//dump($re);
						//dump($yh);
						$data['uid']=$yh;
						$data['picname']=$re;
						$tf = M('pic')->where($data)->select();
						if($tf){
							$res[$yh][] = $re;
						}
					}	
					//echo "<hr>";
					
					//通过用户id获取到用户的名称
					$username[$yh] = M('user')->field("username,id")->where("id={$yh}")->find();
					
					
				} 
				
				//dump($username);
				//通过用户uid获取该用户的头像
				
				
				$this->assign('userlist',$username);
				$this->assign('res',$res);
				$this->assign('listpage','');
			
			}else{
				$this->assign('res',array());
				$this->assign('listpage','没有更多内容...');
			}
			
			//$this->assign('userlist',$username);
			//$this->assign('res',$res);
			$this->assign('userpic',M('user_details')->where("uid={$uid}")->select());
			
			
			
			return $this->fetch();
			
			
		}
		
		//获取改用的收藏图片页面
		public function picshoucang()
		{
			//调用公共方法
			$this->pub();
			//获取关注好友的uid
			$uid = $_GET['uid'];
			
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
					//$puid_id[] = $puid;
					//dump($pic[$key]);
					//$this->assign('picidlist',M('pic_dzan')->where("puid={$puid[$key]}")->select());
					//获取发布图片用的图片数
					/* foreach($pic[$key] as $v_picid){
						//dump($v_picid['pic_id']);
						$picname = M('pic')->where("uid={$puid[$key]} and id={$v_picid['pic_id']}")->select();
						//dump($picname);
						if(!empty($picname)){
							$pname[] = $picname[0]['picname']; 
						}
					} */
				
				$this->assign('res',$res);
				//dump($res);
				$this->assign('listpage','');
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
			
			
			
			return $this->fetch();
		}
		
		
		
		//获取该用户的公共信息 个人信息等
		public function pub()
		{
			//获取关注用户的用户id
			$uid = $_GET['uid'];
			
			//dump($uid);
			//dump(M('user')->where("id={$uid}")->select());
			//通过uid获取该用户的头像信息
			$this->assign('pusername',M('user')->where("id={$uid}")->find());
			//通过uid获取该用户详细信息
			$this->assign('puserlist',M('user_details')->where("uid={$uid}")->find());
			//获取该用户所有的照片的总数
			$this->assign('gzpic_total',M('pic')->where("uid={$uid}")->count());
			//获取该用户所有相册专辑的照片总数
			$this->assign('gzphoto_pic_total',M('photo')->where("uid={$uid}")->count());
			
			//获取该用户所有的点赞数
			$this->assign('gzdzan_total',M('pic_dzan')->where("zuid={$uid}")->count());
			
		}
		
		//========================================================================================================================
		//相册状态方法
		//自定义 所有人都能查看到好友中所有开放的相册方法 相册状态 status=0
		private function allshow()
		{
			$mod = M('photo');
			$uid = I('get.uid');
			
			
			//根据登录用户id获取用户的详细信息
			$this->assign('userdetail',M('user_details')->where("uid={$uid}")->find());
			//根据该用户的id
			$photo = M('photo')->where("uid={$uid} and status=1")->select();
			if(!empty($photo)){
				foreach($photo as $vo){
					//相册的id
					$photoid = $vo['id'];
					//根据相册id号去查看该相册中有多少张图片
					$picnum[] = M('pic')->where("uid={$uid} and photo_id={$photoid}")->count();
					
				}
				$this->assign('picnum',$picnum);
				//实例化分页类 
				$page = new \app\index\org\Pagepic($mod->where("uid={$uid} and status=1")->count(),10);
				//根据登录用户查询该用户的所有相册专辑
				$this->assign('gzphoto_list',$mod->where("uid={$uid} and status=1")->limit($page->limit())->select());
				//显示分页条信息
				$this->assign('photopageshow',$page->show());
				
			}else{
				//实例化分页类 
				//$page = new \app\index\org\Page($mod->where("uid={$uid} and status=1")->count(),10);
				$this->assign('gzphoto_list',array());
				//显示分页条信息
				$this->assign('photopageshow','用户没有发布相册专辑...');
				//$this->assign('picnum',0);
			}
			
			
			
			
			
			//获取该用户所有的照片的总数
			//$this->assign('gzpic_total',M('pic')->where("uid={$uid}")->count());
			//获取该用户所有相册专辑的照片总数
			$this->assign('gzphoto_pic_total',M('photo')->where("uid={$uid} and status=1")->count());
			
			//获取该用户所有的点赞数
			$this->assign('gzdzan_total',M('pic_dzan')->where("zuid={$uid}")->count());
			
			
		}
		
		//当前登录用户如果是相册用户的好友。 则可以查看他的开放相册
		private function friendshow() 
		{
			$mod = M('photo');
			$uid = I('get.uid');
			
			
			//根据登录用户id获取用户的详细信息
			$this->assign('userdetail',M('user_details')->where("uid={$uid}")->find());
			//根据该用户的id
			$photo = M('photo')->where("uid={$uid} and status in(1,3)")->select();
			if(!empty($photo)){
				foreach($photo as $vo){
					//相册的id
					$photoid = $vo['id'];
					//根据相册id号去查看该相册中有多少张图片
					$picnum[] = M('pic')->where("uid={$uid} and photo_id={$photoid}")->count();
					
				}
				$this->assign('picnum',$picnum);
				
				//实例化分页类 
				$page = new \app\index\org\Pagepic($mod->where("uid={$uid} and status in(1,3)")->count(),10);
				
				//根据登录用户查询该用户的所有相册专辑
				$this->assign('gzphoto_list',$mod->where("uid={$uid} and status in(1,3)")->limit($page->limit())->select());
				//显示分页条信息
				$this->assign('photopageshow',$page->show());
			}else{
				$this->assign('picnum',array());
			}
			//获取该用户所有的照片的总数
			//$this->assign('gzpic_total',M('pic')->where("uid={$uid}")->count());
			//获取该用户所有相册专辑的照片总数
			$this->assign('gzphoto_pic_total',M('photo')->where("uid={$uid} and status in(1,3)")->count());
			
			//获取该用户所有的点赞数
			$this->assign('gzdzan_total',M('pic_dzan')->where("zuid={$uid}")->count());
		
		}
		
		//============================================================================================================================
		//图片的显示
		//显示权限为所有人可见的相册中的所有图片方法
		private function picallshow()
		{
			//好友用户uid
			$uid = I('get.uid');
			//根据好友用户uid查询到该用户的相册权限为1的所有相册
			$photo = M('photo')->where("uid={$uid} and status=1")->select();
			if(!empty($photo)){
				foreach($photo as $vo){
					$photoid[] = $vo['id'];
					//通过$photoid查询到该相册中的所有图片
					//$pic[] = M('pic')->where("uid={$uid} and photo_id={$photoid}")->select();
				}
				$arr = implode(',',$photoid);
				$this->assign('gzpic_total',M('pic')->where("uid={$uid} and photo_id in ({$arr})")->count());
				//实例化分
				$page = new \app\index\org\Pagepic(M('pic')->where("uid={$uid} and photo_id in ({$arr})")->count(),6);
				$this->assign('gzpic_list',M('pic')->where("uid={$uid} and photo_id in ({$arr})")->limit($page->limit())->select());
				$this->assign('picpageshow',$page->show());
			}else{
				//实例化分
				//$page = new \app\index\org\Page(M('pic')->where("uid={$uid} and photo_id in ({$arr})")->count(),6);
				$this->assign('gzpic_list',array());
				//$this->assign('picpageshow',$page->show());
			}
			
			
			
			
		}
		
		//显示权限为仅好友可见的相册中的所有图片方法
		private function picfriendshow()
		{
			//好友用户uid
			$uid = I('get.uid');
			//根据好友用户uid查询到该用户的相册权限为1和3的所有相册
			$photo = M('photo')->where("uid={$uid} and status in (1,3)")->select();
			if(!empty($photo)){
				foreach($photo as $vo){
					$photoid[] = $vo['id'];
					//通过$photoid查询到该相册中的所有图片
					//$pic[] = M('pic')->where("uid={$uid} and photo_id={$photoid}")->select();
				}
				$arr = implode(',',$photoid);
				$this->assign('gzpic_total',M('pic')->where("uid={$uid} and photo_id in ({$arr})")->count());
				//实例化分页类
				$page = new \app\index\org\Pagepic(M('pic')->where("uid={$uid} and photo_id in ({$arr})")->count(),6);
				$this->assign('gzpic_list',M('pic')->where("uid={$uid} and photo_id in ({$arr})")->limit($page->limit())->select());
				$this->assign('picpageshow',$page->show());
			}else{
				$this->assign('gzpic_list',array());
			}
			
			
		}
		
		//==========================================
		private function allshowindex()
		{
			$mod = M('photo');
			$uid = I('get.uid');
			
			
			//根据登录用户id获取用户的详细信息
			$this->assign('userdetail',M('user_details')->where("uid={$uid}")->find());
			//根据该用户的id
			$photo = M('photo')->where("uid={$uid} and status=1")->select();
			if(!empty($photo)){
				foreach($photo as $vo){
					//相册的id
					$photoid = $vo['id'];
					//根据相册id号去查看该用户有多少张图片
					$picnum[] = M('pic')->where("uid={$uid}")->count();
					
				}
				$this->assign('picnum',$picnum);
				//实例化分页类 
				$page = new \app\index\org\Pagepic($mod->where("uid={$uid} and status=1")->count(),10);
				//根据登录用户查询该用户的所有相册专辑
				$this->assign('gzphoto_list',$mod->where("uid={$uid} and status=1")->limit($page->limit())->select());
				//显示分页条信息
				$this->assign('photopageshow',$page->show());
				
			}else{
				//实例化分页类 
				//$page = new \app\index\org\Page($mod->where("uid={$uid} and status=1")->count(),10);
				$this->assign('gzphoto_list',array());
				//显示分页条信息
				$this->assign('picpageshow',"没有更多内容....");
				//$this->assign('picnum',0);
				
			}
			
			
			
			
			
			//获取该用户所有的照片的总数
			//$this->assign('gzpic_total',M('pic')->where("uid={$uid}")->count());
			//获取该用户所有相册专辑的照片总数
			$this->assign('gzphoto_pic_total',M('photo')->where("uid={$uid} and status=1")->count());
			
			//获取该用户所有的点赞数
			$this->assign('gzdzan_total',M('pic_dzan')->where("zuid={$uid}")->count());
			
			
		}
		
		
		
		
		
		
		
		
	
	}