<?php
	namespace app\index\controller;

	use think\Controller;

	////自定义图片评论控制器
	class Picreply extends Controller
	{
		//显示评论信息
		public function index()
		{
			//实例化
			$mod = M('pic_reply');
			
			//$id 通过ajax
			$this->assign('pic_reply',$mod->select());
			
			//return $this->fetch();
		}
		
		//统计总评论数
		public function reply_count()
		{
			//实例化
			$mod = M('pic_reply');
			
			$this->assign('reply_count',$mod->count());
		}
		
		//添加内容
		public function insert()
		{
			//图片id
			$id = $_REQUEST['id'];
			//评论
			$reply = $_REQUEST['reply'];
			//发布图片用户id
			$uid = $_REQUEST['uid'];
			$time = date('Y-m-d',time());
			//dump($uid);
			//实例化
			$mod = M('pic_reply');
			$data['uid'] = $uid;
			$data['ruid'] = session('id');  //获取登录用户的id
			$data['reply'] = $reply;
			$data['pic_id'] = $id;
			$data['reply_time'] = time();
			
			//初始化
			$mod->create();
			//执行添加
			$mid = $mod->add($data);
			
			//通过$m获取评论用户的ruid值
			$rep = M('pic_reply')->where("id={$mid}")->find();
			//dump($m);
			//exit;
			//foreach($rep as $vr){
				//$ruid = $vr['ruid'];
				//通过$ruid获取该用户姓名信息
			$runame= M('user')->where("id={$rep['ruid']}")->find();
				//通过$ruid获取该用户的图片信息
			$ruserlist = M('user_details')->where("uid={$rep['ruid']}")->find();
				
			//}
			
			
			//$str = "<div style='border:1px solid #ccc;height:20px;'>".$reply."</div>";
		/* 	$str = "<dl class='reply_items clearfix'>";
			$str .= "<dt class='m_thumb m_thumb_b'>";
			$str .= "<a href=\"{:U('Picgz/index')}?uid={"+$rep['ruid']+"}\" action-type='get_card' action-data=''>";
			$str .= "<img src=\"{\$Think.const.APP_INDEX}uploads/pic/{"+$ruserlist['picname']+"}\">";
			$str .= "</a></dt<dd class='reply_cont'>";
			$str .= "<div class='contBox' node-type='reply_mini'>";
			$str .= "<p class='M_txtb'><span class='reply_nm'>";
			$str .= "<a href=\"{:U('Picgz/index')}?uid={"+$rep['ruid']+"}\" action-type='get_card'>{"+$runame['username']+"}</a>";
			$str .= "<a class='M_club' action-islogin='islogin' href='javascript:void(0);' target='_blank'></a>:</span>";
			$str .= "<span class='cont' node-type='comment_content1457278734167'>"+$reply+"</span>";
			$str .= "</p><p class='time_reply M_txtb'>";
			$str .= "<span class='time'>"+$time+"</span>";
			$str .= "<span class='del_lk M_linkc'>";
			$str .= "<a href='{javascript:void(0);}' node-type='comment_del_btn1457278734167' node-data='2664098951'>删除</a>";
			$str .= "</span></p></div></dd></dl>";
			
			
			
			return $str; */
			
		}
		
		//删除评论方法
		public function del($id=-1)
		{
			//获取传过来的图片的值
			$id = $_POST['id'];
			$replyid = $_POST['replyid'];
			//删除评论
			M('pic_reply')->delete($replyid);
			
		}
		
		
		
		
		
		
	}