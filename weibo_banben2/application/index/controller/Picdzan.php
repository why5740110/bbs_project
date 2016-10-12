<?php
	namespace app\index\controller;

	//use think\Controller;
	
	//自定义图片点赞控制器
	class Picdzan extends Common
	{
		//加在点赞页面
		public function index()
		{
			//将登录用户的用户名存入到session中
			//session('homeuser','zhang');
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
			
			$m = M('pic_dzan')->where("zuid={$uid}")->group("puid")->select();
			//$pic = M('pic_dzan')->where("zuid={$uid}")->select();
			/* foreach($m as $vo){
				$puid = $vo['puid'];
				//$this->assign('picidlist',M('pic_dzan')->where("puid={$puid}")->select());
				//获取发布图片用的图片数
				$picname[] = M('pic')->where("uid={$puid}")->select();
				//通过puid的值获取到用户名
				$username[] = M('user')->field("username")->where("id={$puid}")->find();
				//$this->assign('userlist',M('user')->field("username")->where("id={$puid}")->find());
				
			} */
			if(!empty($m)){
				foreach($m as $key=>$vo){
					//获取发布图片的用户puid
					$puid[] = $vo['puid'];
					
					$pic[] = M('pic_dzan')->where("puid={$puid[$key]} and zuid={$uid}")->limit(5)->select();
					//$puid_id[] = $puid;
					//dump($pic[$key]);
					//$this->assign('picidlist',M('pic_dzan')->where("puid={$puid[$key]}")->select());
					//获取发布图片用的图片数
					foreach($pic[$key] as $v_picid){
						//dump($v_picid['pic_id']);
						$picname = M('pic')->where("uid={$puid[$key]} and id={$v_picid['pic_id']}")->select();
						//dump($picname);
						if(!empty($picname)){
							$pname[] = $picname[0]['picname']; 
						}
					}
				}
				
				//echo 'dddd';
				//dump($pic);
				reset($m);
				//dump($m);
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
					
					//通过登录用户id获取到用户的头像
					$userlist[$yh] = M('user_details')->where("uid={$uid}")->find();
					//通过用户id获取到用户的用户名
					$username[$yh] = M('user')->where("id={$yh}")->find();
					
				}
				
				$this->assign('userlist',$userlist);
				$this->assign('username',$username);
				$this->assign('res',$res);
				$this->assign('listpage','');
				
			}else{
				
				$this->assign('res',array());
				$this->assign('listpage','目前没有点赞...');
			}
			return $this->fetch();
		}
		
		//添加点赞信息
		public function insert()
		{
			//实例化
			//echo 'ssssssss';
			//exit();
			$mod = M('pic_dzan');
			$zuid = session('id');
			//判断登录用户是否存在该图片的点赞数据表中
			$zan = $mod->where("pic_id={$_POST['id']} and zuid={$zuid}")->select();
			//dump($zan);
			//exit();
			if($zan){
				//echo 'ddd';
				//如果存在 返回true
				return true;
			}else{
				//echo 'sssss';
				//如果不存在 将点赞信息添加到点赞数据表中
				
				$data['zuid'] = $zuid;
				$data['puid'] = $_POST['puid'];
				$data['pic_id'] = $_POST['id'];
				$data['status'] = 2;
				//dump($data);
				//exit();
				//初始化
				$mod->create();
				//dump('ssssssssss');
				//echo 'sssssssss';
				//将点赞人的登录用户id赋值
				//$mod->zuid = 1;
				//$mod->puid = $_POST['puid'];
				//$mod->pic_id = $_POST['id'];
				//$mod->status = 2;
				
				
				
				//执行添加
				$mod->add($data); 
				
				return false;
				
			}
		}
		 
		
		
		
	}