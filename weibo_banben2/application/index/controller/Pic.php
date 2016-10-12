<?php
	namespace app\index\controller;

	//use think\Controller;
	
	//自定义图片控制器
	class Pic extends Common
	{
		
		//显示图片信息
		public function index()
		{
			
			//将登录用户的用户名存入到session中
			//session('homeuser','wang');
			//$user = M('user')->where("username='zhang'")->select();
			//dump($user);
			//session('user',$user);
			//session('id',$user[0]['id']);
			$uid = session('id');
			//dump($uid);
			//根据登录用户id获取用户的详细信息
			//$this->assign('userdetail',M('user_details')->where("uid={$uid}")->find());
			//实例化用户详情表
			//$user_detail = M('user_details');
			//$userdetail = M('user_details')->where("uid={$uid}")->select();
			//var_dump($userdetail);
			//将用户详情信息存入到session中
			//session('userdetail',$userdetail);
			//dump(session("userdetail"));
			//获取该用户发布总专辑数
			$this->assign('photo_count',M('photo')->where("uid={$uid}")->count());
			//查看该用户的相册专辑
			$this->assign('photo_list',M('photo')->where("uid={$uid}")->limit(5)->select());
			
			//获取登录用户的所有相册专辑的id号
			/* $photo = M('photo')->where("uid={$uid}")->select();
			//$photoid = $photo['id'];
			foreach($photo as $vo){
				foreach($vo as $photoid){
					//dump($photoid);
				
				}
			}
			dump($photoid); */
			//获取该用户所有的照片
			$this->assign('pic_total',M('pic')->where("uid={$uid}")->count());
			//获取该用户所有相册专辑的照片总数
			$this->assign('photo_pic_total',M('photo')->where("uid={$uid}")->count());
			
			//获取该用户所有的点赞数
			$this->assign('dzan_total',M('pic_dzan')->where("zuid={$uid}")->count());
			//$this->assign('photopiclist',M('pic')->where("photo_id=20")->select());
			
			
			//实例化图片表
			$mod = M('pic');
			
			//查看当前用户的所有图片
			$m = M('pic')->where("uid={$uid}")->select();
			//判断
			if(!empty($m)){
				//实例化分页类 
				$page = new \app\index\org\Pagepic($mod->where("uid={$uid}")->count(),6);
				
				//查询图片信息
				$this->assign('pic_list',$mod->where("uid={$uid}")->limit($page->limit())->select());
				$this->assign('pageshow',$page->show());
			}else{
				$this->assign('pic_list',array());
				$this->assign('pageshow','您没有上传图片....');
			}
			//查询登录用户所有图片总数
			$this->assign('pic_count',$mod->where("uid={$uid}")->count());
			
			//实例化评论类
			$reply = new \app\index\controller\Picreply();
			
			$reply->index();
			$reply->reply_count();
			
			//渲染模版
			return $this->fetch();
		}
		
		//各个相册下的图片显示
		public function photopicshow()
		{
			//加载index()方法
			$uid = session('id');
			$photoid = $_GET['photoid'];
			//根据登录用户id获取用户的详细信息
			//$this->assign('userdetail',M('user_details')->where("uid={$uid}")->find());
			
			//查看该用户的相册专辑
			$this->assign('photo_list',M('photo')->where("uid={$uid}")->select());
			//获取该用户发布总专辑数
			//$this->assign('photo_count',M('photo')->where("uid={$uid}")->count());
			//获取该用户所有的照片
			$this->assign('pic_total',M('pic')->where("uid={$uid}")->count());
			//获取该用户所有的点赞数
			$this->assign('dzan_total',M('pic_dzan')->where("zuid={$uid}")->count());
			//实例化图片表
			$mod = M('pic');
			//查询图片信息
			$this->assign('pic_list',$mod->select());
			//查询图片总数
			$this->assign('pic_count',$mod->where("photo_id={$photoid}")->count());
			//获取该用户发布总专辑数
			$this->assign('photo_count',M('photo')->where("uid={$uid}")->count());
			//查看该用户的相册专辑
			$this->assign('photo_list',M('photo')->where("uid={$uid}")->limit(5)->select());
			
			//实例化分页类 
			$page = new \app\index\org\Page(M('pic')->where("uid={$uid} and photo_id={$photoid}")->count(),6);
			
			//查询图片信息
			$this->assign('photopiclist',M('pic')->where("uid={$uid} and photo_id={$photoid}")->limit($page->limit())->select());
			$this->assign('pageshow',$page->show());
			
			//$this->index();
			//实例化图片表
			//$mod = M('pic');
			//查询图片信息
			//$this->assign('photopiclist',M('pic')->where("uid={$uid} and photo_id={$photoid}")->select());
			//$this->index();
			return $this->fetch();
			
		}
		
		//显示单张图片信息
		public function picshow()
		{
			
			$uid = session('id');
			//实例化图片表
			$mod = M('pic');
			$picid = $_GET['picid'];
			$photoid = $_GET['photoid'];
			//查看相册专辑总数
			$this->assign('photo_count',M('photo')->where("uid={$uid}")->count());
			//查看该图片所在相册的总图片数
			$this->assign('photo_pic_count',M('pic')->where("photo_id={$photoid} and uid={$uid}")->count());
			
			//获取该用户所有的照片
			$this->assign('pic_total',M('pic')->where("uid={$uid}")->count());
			//获取该用户所有的点赞数
			$this->assign('dzan_total',M('pic_dzan')->where("zuid={$uid}")->count());
		
			//查询图片信息
			$this->assign('pic_show',$mod->where("id={$picid}")->select());
			
			//获取评论总数
			//$reply = new \app\index\controller\Picreply();
			$this->assign('pic_reply_count',M('pic_reply')->where("pic_id={$picid} and uid={$uid}")->count());
			//获取当前图片的总赞数
			$this->assign('pic_dzan_count',M('pic_dzan')->where("pic_id={$picid} and puid={$uid}")->count());
			//获取登录用户是否对该图片有做点赞 点赞状态
			$this->assign('pic_dzan_status',M('pic_dzan')->field('status')->where("pic_id={$picid} and zuid={$uid}")->select());
			
			//实例化已点赞分页类 
			$page = new \app\index\org\Page(M('pic_dzan')->where("pic_id={$picid} and puid={$uid}")->count(),5);
			//获取当前图片的点赞列表
			$this->assign('pic_dzan_list',M('pic_dzan')->where("pic_id={$picid} and puid={$uid}")->order("id desc")->limit($page->limit())->select());
			//显示已点赞人的分页条信息
			$this->assign('zanpageshow',$page->show());
			
			
			//实例化已评论分页类
			$page = new \app\index\org\Page(M('pic_reply')->where("pic_id={$picid} and uid={$uid}")->count(),5);
			//获取当前图片的评论列表
			$this->assign('pic_reply',M('pic_reply')->where("pic_id={$picid} and uid={$uid}")->order("reply_time desc")->limit($page->limit())->select());
			//显示已评论的分页条信息
			$this->assign('replypageshow',$page->show());
			
			
			//显示该图片所在的相册名称
			$this->assign('photo_name',M('photo')->where("id={$photoid} and uid={$uid}")->select());
			
			//实例化该图片所在相册的所有图片分页类
			$page = new \app\index\org\Page(M('pic')->where("photo_id={$photoid} and uid={$uid}")->count(),9);
			$p = $page->page;
			$this->assign('page',$p);
			//显示该图片所在相册的所有图片信息
			$this->assign('photo_pic_list',M('pic')->where("photo_id={$photoid} and uid={$uid}")->limit($page->limit())->select());
			
			//dump(M('pic')->where("photo_id={$photoid} and uid={$uid}")->select());
			//exit();
			//获取当前相册id下的所有图片的总张数
			$this->assign('photo_pic_listcount',M('pic')->where("photo_id={$photoid} and uid={$uid}")->count());
			//显示该图片所在相册的小图片分页条信息
			$this->assign('picpageshow',$page->show());
			
			
			//获取该图片在点赞表中是否有人点赞
			//$dzannum = M('pic_dzan')->where("puid={$uid} and pic_id={$picid}")->order("id desc")->select();
			//通过登录用户id和图片id获取哪些 人给这张图片点过赞
			$pzuid = M('pic_dzan')->where("puid={$uid} and pic_id={$picid}")->order("id desc")->select();
			//dump($pzuid);
			if(!empty($pzuid)){
				//echo 'dddd';
				foreach($pzuid as $key=>$vo){
					$zuid = $vo['zuid'];
					//dump($zuid);
					//获取点赞用户的用户名
					$zuidname[] = M('user')->where("id={$zuid}")->find();
					//获取点赞用户的用户头像
					$zpicname[] = M('user_details')->where("uid={$zuid}")->find();
				}
				$this->assign('uname',$zuidname);
				$this->assign('zpicname',$zpicname);
			}
			//dump($zuidname);
			//$this->assign('uname',$zuidname);
			//echo 'ssssssssssssww';
			//$this->assign('zpicname',$zpicname);
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
			
			
			//根据登录用户id获取用户的详细信息
			$this->assign('userdetail',M('user_details')->where("uid={$uid}")->find());
			
			
			
			//渲染模版
			return $this->fetch();
			
			
		}
		
		
		//===========================================================================================================
		//将多张图片信息添加到数据库中
		public function insert()
		{
			
			//dump($_FILES);
			//exit();
			if($_FILES['picname']['error'][0]!=4){
				// 实例化
				$mod = M("pic");
				// 执行文件上传操作
				$info = $this->doUpload();
				
				if (!$info['error'] == 0) {
					return $info;
				}
				//dump(count($info));
				for($i = 0; $i < count($info)-1; $i++ ){
					// 将配图添加到数据库
					$pic['picname'] = $info[$i]['savename'];
					$pic['uid'] = session('id');
					$pic['addtime'] = time();
					$pic['photo_id'] = I('post.photoid');
					if(!empty($pic['photo_id'])){
						//执行添加
						$m[] = $mod->add($pic);
					}else{
						return $this->error("请新建相册专辑！",'index');
					}
				}
				
				if(count($m)>0){
					//将该用户中的该相册的第一张图片修改成相册默认图片名
					$mm = M("photo");
					$photoid = I('post.photoid');
					$uid = session('id');
					//dump($photoid);
					$photo = $mm ->where("uid={$uid} and id={$photoid}")->order("id")->limit(1)->select();
					//dump($photo);
					if($photo[0]['photoname'] == 'default.png'){
						//dump($photo);
						$photo[0]["id"] = $photoid;
						$photo[0]['photoname'] = $info[0]['savename'];
						$photo[0]['addtime'] = time();
						$mm->save($photo[0]);
					}
					//dump($photo);
					//echo 'ssssssss';
					//return $this->success('上传成功','picadd');
					return $this->redirect("Photo/index");
				}else{
					return $this->error("图片上传失败！");
				}
			}else{
				return $this->error("请上传图片！",'picadd');
			}
			
		}
		
		//===========================================================================================================
		
		/* //添加图片信息
		public function insert1()
		{
			//配置文件上传信息
			$config = array();
			$config['maxSize'] = 3145728 ;// 设置附件上传大小
			$config['exts']    = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$config['rootPath']= './uploads/pic/'; // 设置附件上传目录
			$config['autoSub'] =false; //不创建子目录
			$config['callcack'] =false; //不创建子目录
			
			//实例化上传类
			$upload = new \org\Upload($config,"LOCAL");
			//执行上传
			$info = $upload->upload();
			//dump($info);
			
			
			//判断上传是否成功
			if(!$info){
				//上传错误提示错误信息
				return $this->error($upload->getError());
			}else{
				// 上传成功
				//echo $info['picname']['savename'];
				//echo 'sssss';
				//实例化
				$mod = M('pic');
				
				//dump($_POST['photoid']);
				//执行添加内容
				$data['uid'] = session('id'); //获取登录用户的id
				$data['photo_id'] = $_POST['photoid'];
				//$data['uid'] = session('uid');  //获取登录用户的id
				$data['picname'] = $info['picname']['savename'];
				$data['descrip'] = "";
				$data['addtime'] = time();
				
				//初始化
				//$mod->create();
				
				//执行添加
				$m = $mod->add($data);
				//dump($m);
				//echo 'aaa';
				//return $this->fetch('Pic/picadd');
				if($m>0){
					//将该用户中的该相册的第一张图片修改成相册默认图片名
					$mm = M("photo");
					$photoid = $_POST['photoid'];
					$uid = session('id');
					//dump($photoid);
					$photo = $mm ->where("uid={$uid} and id={$photoid}")->order("id")->limit(1)->select();
					//dump($photo);
					if($photo[0]['photoname'] == 'default.png'){
						//dump($photo);
						$photo[0]["id"] = $photoid;
						$photo[0]['photoname'] = $info['picname']['savename'];
						$photo[0]['addtime'] = time();
						
						
						
						$mm->save($photo[0]);
					}
					//dump($photo);
					//echo 'ssssssss';
					return $this->success('上传成功','picadd');
					
					//return $this->redirect('Pic/picadd');
				}else{
					return $this->error('上传失败','picadd');
				}
				
				
			}
		}	 */
		
		//执行修改操作
		public function update($picid=-1)
		{
			//实例化
			$mod = M("pic");
			
			$data['id'] = I('post.picid');
			$data['uid'] = I('post.uid');
			$data['descrip'] = I('post.descrip');
			$data['addtime'] = time();
			
			//初始化
			//$m = $mod->create();
			//dump($m);
			//exit();
			//$mod->addtime = time();
			//dump($mod);
			//echo 'fffffff';
			//保存
			$mod->save($data);
			
		}
		
		//执行删除操作
		public function del($picid=-1)
		{
			//获取picid
			$picid = $_REQUEST['picid'];
			$photoid = $_REQUEST['photoid'];
			//实例化
			$mod = M('pic');
			
			$info = $mod->find($picid);
			
			$picname = $info['picname'];
			//$photoid = $info['photo_id'];
			$uid = session('id');
			$url = "./uploads/pic/".$picname;
			//echo APP_INDEX."uploads/pic/".$picname;
			//执行删除操作
			$m = $mod->delete($picid);
			if($m>0){
				//$this->redirect('index');
				//查询该用户的该相册中是否还有图片
				$pnum = $mod->where("uid={$uid} and photo_id={$photoid}")->order("id")->limit(1)->select();
				
				//将该相册的用户第一张图
				$mm = M('photo');
				$photo = $mm ->where("uid={$uid} and id={$photoid}")->select();
				//$mm->create();
				//dump($pnum);
				//exit();
				if($pnum>0){
					//将该相册的用户第一张图
					
					//初始化
					if(!empty($pnum[0]['picname'])){
						$photo[0]['photoname'] = $pnum[0]['picname'];
					}else{
						$photo[0]['photoname'] = 'default.png';
					}	
					//保存
					$mm->save($photo[0]);
				}else{
					//如果该用户的该相册中没有图片 将默认图片default.png传给相册默认图
					
					//初始话
					/* $photo[0]['photoname'] = 'default.png';
					//保存
					$mm->save($photo[0]); */
					
				}
				//删除图片
				unlink($url);
			}
			//删除该图片的所有赞
			M('pic_dzan')->where("pic_id={$picid}")->delete();
			//删除该图片的所有评论
			M('pic_reply')->where("pic_id={$picid}")->delete();
			return $this->success('删除成功','index');
		}
		
		//修改相册封面方法
		public function updatefm()
		{
			//获取picid
			$picid = I('post.picid');
			//获取photoid
			$photoid = I('post.photoid');
			//通过picid查询到该图片的名称
			$pic = M('pic')->find($picid);
			
			//通过photoid查询到这条相册信息
			$photo = M('photo')->find($photoid);
			
			$photo['photoname'] = $pic['picname'];
			
			M('photo')->save($photo);
			
			
		}
		
		
		//图片上传页面
		public function picadd()
		{
			//加载相册信息
			$photo = new \app\index\controller\Photo();
			$photo->index();
			
			return $this->fetch();
			
		}
		
		//执行上传
		private  function doUpload()
		{
		   //配置上传信息
			$config = array();
			$config['maxSize'] = 3145728 ;// 设置附件上传大小
			$config['exts']    = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$config['rootPath']= './uploads/pic/'; // 设置附件上传目录
			$config['autoSub'] =false; //不创建子目录
			// $config['callcack'] =false; 
			// $config['callback'] =false; 
			$upload = new \org\Upload($config,"LOCAL");
			$info = $upload->upload();
			if(!$info){
				//上传错误提示错误信息
				return $this->error($upload->getError());
			}else{
				//上传成功
				//执行图片缩放
				// $img = \org\Image::init(); //获取GD库图片处理对象
				//打开图片
				// $img->open("./uploads/weibo/".$info['pic']['savename']);
				// dump($info);die();
				//进行缩放后另存为s_前缀
				// $img->thumb(200,200)->save("./uploads/weibo/s_".$info['pic']['savename']);
				//执行信息封装
				// $pic['picname'] = $info['pic']['savename'];
				$info['error'] = 0;
				return $info;
			}
		}
		
		
		
		
	}
	
	
	