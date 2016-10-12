<?php
	namespace app\index\controller;

	//use think\Controller;
	
	//自定义个人首页控制器
	class Person extends Common
	{
		//加载个人首页页面
		public function index()
		{
			//调用公共方法
			//$this->com();
			//调用广告控制器
			$guanggao = new \app\index\controller\Guanggao();
			//调用广告类的left方法
			$guanggao->left();
			//获取当前用户uid
			$uid = session('id');
			//获取该用户关注的好友总数量
			$this->assign('user_gz_count',M('fans')->where("fansid={$uid}")->count());
			//获取该用户的粉丝总数量
			$this->assign('user_fans_count',M('fans')->where("uid={$uid}")->count());
			
			
			//加载个人首页界面
			return $this->fetch();
			
		}
		
		//加载个人中心编辑页面
		public function pdetails()
		{
			//调用公共方法
			//$this->com();
			$guanggao = new \app\index\controller\Guanggao();
			//调用广告类的left方法
			$guanggao->left();
			//获取当前用户uid
			$uid = session('id');
			//获取该用户关注的好友总数量
			$this->assign('user_gz_count',M('fans')->where("fansid={$uid}")->count());
			//获取该用户的粉丝总数量
			$this->assign('user_fans_count',M('fans')->where("uid={$uid}")->count());
			
			//加载个人中心编辑页面
			return $this->fetch();
		}
		
		//修改个人信息资料
		public function update()
		{
			//C('default_return_type',"JSON");
			//$this->doUpload();
			//dump($_POST);
			//dump($_FILES);
			
			if($_FILES['picname']['error']==4){
				//未上传任何图片
				$mod = M("user_details");
				//echo 'ddd';
				
				$data['id'] = $_POST['id'];
				$data['picname'] = $_POST['jpicname'];
				$data['nickname'] = $_POST['nickname'];
				$data['sex'] = $_POST['sex'];
				$data['age'] = $_POST['age'];
				$data['address'] = $_POST['address'];
				$data['email'] = $_POST['email'];
				
				
				
				//unset($_POST['ajax']);
				unset($_POST['jpicname']);
				
				
				//$mod->create();
				
				$m = $mod->save($data);
				//dump($m);
				//判断
				if($m>0){
					return $this->redirect('Person/pdetails');
				}else{
					return $this->error("修改失败");
				}
				
			}else{
				//上传
				//调用上传函数
				$info = $this->doUpload();
				//判断
				//dump($_FILES);
				if(!empty($info)){
					return $info;
				}
				$mod = M("user_details");
				//获取表单中传的值
				$data['id'] = $_POST['id'];
				$data['picname'] = $_POST['picname'];
				$data['nickname'] = $_POST['nickname'];
				$data['sex'] = $_POST['sex'];
				$data['age'] = $_POST['age'];
				$data['address'] = $_POST['address'];
				$data['email'] = $_POST['email'];
				
				//获取原来图片的信息
				$jiutu = $_POST['jpicname'];
				unset($_POST['ajax']);
				unset($_POST['jpicname']);
				
				//$mod->create();
				
				$m = $mod->save($data);
				//判断
				if($m>0){
					if($jiutu != '123.jpg'){
						//删除原来图片
						unlink('./uploads/txpic/'.$jiutu);
					}
					return $this->redirect('Person/pdetails');
				}else{
					return $this->error("修改失败");
				}
				
				
			}
			
			
			
			
		}
		
		//执行上传
		private  function doUpload()
		{
		   //配置上传信息
			$config = array();
			$config['maxSize'] = 3145728 ;// 设置附件上传大小
			$config['exts']    = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$config['rootPath']= './uploads/txpic/'; // 设置附件上传目录
			$config['autoSub'] =false; //不创建子目录
			$config['callcack'] =false; 
			$config['callback'] =false; 
			
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
				$_POST['picname'] = $info['picname']['savename'];
				return null;
			}
		}
		
		
		
		
		
		
		//公共方法
		public function com()
		{
			//session('homeuser','zhang');
			//当前登录用户id
			//$uid = session('id');
			//根据当前用户id找到用户的详细信息
			//$this->assign('userlist',M('user_details')->where("uid={$uid}")->find());
			//根据当前用户id找到用户的用户名
			
			
		}
		
		
		
		
	}