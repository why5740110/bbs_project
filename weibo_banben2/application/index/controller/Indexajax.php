<?php
// 公共处理前台ajax控制器
namespace app\index\controller;

use \think\Controller;

// 前台ajax接收处理类
class Indexajax extends Controller
{
	/**
	 * ajax评论
	 */
	public function showpinlun()
	{
		// 获取
		$data['uid'] = session("userinfo")['id'];
		$name = session("userinfo")['nickname'];
		$data['content'] = $_POST['content'];
		$data['article_id'] = $_POST['article_id'];
		$data['time'] = time();
		$insert = M("reply")->add($data);
		if ($insert) {
			return json_encode($name);
		} else {
			return json_encode("no");
		}
	}

	/**
	 *  ajax点赞
	 *      思路：
	 *			1. ajax发送点击的博文表id过来
	 *			2. 判断点赞表中当前用户点赞这篇文章有没有数据，有返回已赞，无添加一条数据
	 */
	public function dianzan()
	{
		// 获取当前用户id
		$id = session("userinfo")['id'];
		// 获取博文id
		$article_id = $_POST['article_id'];
		// 查询点赞表有没有这条数据
		$zan = M("article_dzan")->where("article_id={$article_id} and uid={$id}")->find();
		// 判断
		if ( $zan ) {
			
			// 取消点赞操作
			$id = $id+0;
			$article_id = $article_id+0;
			$quxiao = M("article_dzan")->where("article_id={$article_id} and uid={$id}")->delete();
			if ( $quxiao ) {
				return json_encode("取消点赞成功！");
			}

		} else {
			// 在点赞表中添加一条数据
			$data['uid'] = $id;
			$data['article_id'] = $article_id;
			$add = M("article_dzan")->add($data);
			if ($add) {
				return json_encode("点赞成功！");
			} else {
				return json_encode("点赞失败！");
			}
		}
	}

	/**
	 *  ajax收藏
	 *      思路：
	 *			1. ajax发送点击的博文表id过来
	 *			2. 判断收藏表中当前用户收藏这篇文章有没有数据，有返回已收藏，无添加一条数据
	 */
	public function shoucang()
	{
		// 获取当前用户id
		$id = session("userinfo")['id'];
		// 获取博文id
		$article_id = $_POST['article_id'];
		// 查询点赞表有没有这条数据
		$zan = M("article_shoucang")->where("article_id={$article_id} and uid={$id}")->find();
		// 判断
		if ( $zan ) {
			
			// 取消点赞操作
			$id = $id+0;
			$article_id = $article_id+0;
			$quxiao = M("article_shoucang")->where("article_id={$article_id} and uid={$id}")->delete();
			if ( $quxiao ) {
				return json_encode("取消收藏成功！");
			}

		} else {
			// 在点赞表中添加一条数据
			$data['uid'] = $id;
			$data['article_id'] = $article_id;
			$add = M("article_shoucang")->add($data);
			return json_encode("收藏成功！");
		}
	}

	/**
	 * 主页ajax瀑布流
	 */
	public function article()
	{
		// 获取当前用户id
		$id = session('userinfo')['id'];
        // 获取当前用户所有关注人的id
        $guanzhu = M("Fans")->field("uid")->where("fansid={$id}")->select();
        $a = count($guanzhu);
        for( $i = 0; $i < count($guanzhu); $i++ ) {
            $liebiao[] = $guanzhu[$i]['uid'];
        }
        // 将当前用户id放入将要查询微博id中
        $liebiao[$a] = $id;
        // 拆分用作下条查询
        $b = implode(",", $liebiao);
        $total = M("Article")->where("uid in({$b})")->where("status=1")->count();

        $page = new \app\index\org\Page( $total, 3 );
        $p = $_POST['p']+1;
        $page->page = $p;
        // 判断ajax传过来的
        // 分配当前页
        $article = M("Article")->where("uid in({$b})")->where("status=1")->order("time desc")->limit($page->limit())->select();
        // 获取每个博文各个信息
        for ( $i = 0; $i < count($article); $i++ ) {
            // 获取每个博文表的uid 获取用户信息
            $articleuid = $article[$i]['uid'];
            $niche = M("User_details")->field("nickname")->where("uid={$articleuid}")->find();
            $article[$i]['nickname'] = $niche['nickname'];
            // 获取每个博文的转发次数

            // 获取每个博文的点赞次数

            // 获取每个博文的收藏次数

            // 获取每个博文表的图片
            $picid = $article[$i]['id'];
            $c = M("Article_pic")->where("article_id={$picid}")->select();
            // 将图片获取到
            for ( $j = 0; $j < count($c); $j++ ) {
                // 将图片名以数组形式放到微博相应下
                $article[$i]['pic'][$j] = $c[$j]['articlepic'];
            }
        }
        $article['p'] = $p;
        return json_encode($article);
        // 将当前用户所有关注人和自己的微博分配到前台
        // $this->assign("article", $article);
        // dump($article);die();

	}

	/**
	 * 新建分组
	 */
	public function create_group()
	{
		// 获取当前用户id
		$data['uid'] = session("userinfo")['id'];
		// 获取新组名
		$data['groupname'] = $_POST['groupname'];
		// 执行添加
		$insert_id = M("user_group")->add($data);
		return json_encode($insert_id);
	}

	/**
	 * 关注好友
	 */
	public function guanzhu()
	{
		// 接收ajax传过来的当前用户id值
		$id = $_POST['id'];

		// 查找当前用户组
		$group = M("user_group")->where("uid={$id}")->select();
		return json_encode($group);
	}

	/**
	 * 已关注操作
	 */
	public function yiguanzhu()
	{
		// 获取当前用户id
		$id = session("userinfo")['id'];
		// 获取到要添加人的id
		$uid = $_POST['uid'];
		// 获取到组名
		$groupname = $_POST['groupname'];
		// 将好友信息添加到粉丝表中
		$data['fansid'] = $id;
		$data['uid'] = $uid;

		// 执行添加操作
		$fans_insert_id = M("fans")->add($data);

		// 查询当前分组属于当前用户的组名的id

		$user_group = M("user_group")->where("uid=1 and groupname='{$groupname}'")->find();
		$group_id = $user_group['id'];
		// 将用户添加到当前用户的好友组表中
		$test['uid'] = $id;
		$test['guanzhuid'] = $uid;
		$test['gid'] = $group_id;
		$haoyou_id = M("haoyou_group")->add($test);
		return json_encode($test);
	}
}