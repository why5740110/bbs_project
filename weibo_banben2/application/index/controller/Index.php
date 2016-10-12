<?php
namespace app\index\controller;

//use \think\Controller;
use \think\Model;

class Index extends Common
{
    public function index()
    {
        // dump(session("userinfo"));die();
        // 当前登录用户信息(原生sql语句)
        //$userinfo = M()->query("select d.* from wb_user_details d where d.uid=1");
        // dump($userinfo); die();
        // 模拟session信息
        //session('userinfo', $userinfo[0]);
        //dump(session("userinfo"));die();
        // 分配用户信息
        $id = session('userinfo')['uid'];

        $this->assign('userinfo', session("userinfo"));
        // 获取可能感兴趣的人方法
        $this->xqr($id);
        // 获取关注粉丝数
        $this->fsi($id);
        // 分配友情连接方法
        $this->links();
        // 实例化广告类
        $guanggao = new \app\index\controller\Guanggao();
        // 显示右侧广告
        $guanggao->right();
        // 显示底部广告
        $guanggao->buttom();
        // 博文显示方法
        $this->article_show();
        // 获取当前用户分组
        $this->user_group();
        // 获取当前用户分组下的所有信息
        $this->user_fen_group();
        // 渲染模板
    	return $this->fetch();
    }

    /**
     * 获取评论
     *     思路：
     *          1. 获取当前文章id
     *          2. 查看文章id对应的评论表所有数据
     */

    /**
     * 获取当前用户下所有好友的分组
     */
    public function user_fen_group()
    {
        // 获取当前用户id
        $id = session("userinfo")['uid'];
        // 获取当前用户所有好友在分组表中的好友
        $haoyoulist = M("haoyou_group")->field("guanzhuid,gid")->where("uid={$id}")->select();
        // 遍历并把每个好友的详细信息放入进去
        // 定义一个空数组
        $haoyouliebiao = array();
        for ( $i = 0; $i < count($haoyoulist); $i++ ) {
            $a = M("user_details")->where("id={$haoyoulist[$i]['guanzhuid']}")->find();
            $a['gid'] = $haoyoulist[$i]['gid'];
            $haoyouliebiao[] = $a;
        }
        $this->assign("haoyouliebiao", $haoyouliebiao);
        return $haoyouliebiao;
    }

    /**
     * 获取当前用户分组
     */
    public function user_group()
    {
        // 获取当前用户信息
        $id = session("userinfo")['uid'];
        // 查询用户分组表总用户所有组
        $user_group_list = M("user_group")->where("uid={$id}")->select();
        // 分配到前台
        $this->assign("user_group_list", $user_group_list);
        // 返回真
        return true;
    }

    /**
     * 博文显示方法
     *  查找所有关注者和自己发布的微博
     *      思路：1. 多表查询关注粉丝表中当前用户和当期用户所有关注人微博并按时间倒序排列
     *            2. 分配到前台
     *            3. 查询所有微博所属图片遍历出来
     */
    public function article_show()
    {
        // $mod = M("link");
        // 获取总条数
        // J-UI页大小
        // $numPerPage = isset($_REQUEST['numPerPage'])?$_REQUEST['numPerPage']:5; 
        // 实例化分页对象
     
        // 获取当前用户id
        $id = session('userinfo')['uid'];
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
        // 统计总条数
        $total = M("Article")->where("uid in({$b}) and status=1")->count();
        // 实例化分页类
        $page = new \app\index\org\Page( $total, 3 );
        // 查询
        $article = M("Article")->where("uid in({$b}) and status=1")->order("time desc")->limit($page->limit())->select();
        // 分配显示页
        $this->assign("showpage", $page->show());
        // 获取每个博文各个信息
        for ( $i = 0; $i < count($article); $i++ ) {
            // 获取每个博文表的uid 获取用户信息
            $articleuid = $article[$i]['uid'];
            $niche = M("User_details")->field("nickname")->where("uid={$articleuid}")->find();
            $article[$i]['nickname'] = $niche['nickname'];
            // 获取每个博文的转发次数

            // 获取每个博文所有评论条数
            $pinluntiaoshu = M("reply")->where("article_id={$article[$i]["id"]}")->count();
            $article[$i]['count_reply'] = $pinluntiaoshu;
            // 获取每个博文所有评论
            $reply[$i] = M("reply")->where("article_id={$article[$i]["id"]}")->order("time desc")->limit(3)->select();
            // dump($reply);die();
            for ( $k = 0; $k < count($reply[$i]); $k++ ) {
                $nickname = M("user_details")->field("nickname")->where("id={$reply[$i][$k]['uid']}")->find();
                $reply[$i][$k]['nickname'] = $nickname['nickname'];
                // $reply[$k]['nickname'] = $nickname['nickname'];
            }
            $article[$i]['reply'] = $reply[$i];
            // 获取每个博文的点赞次数
            $article[$i]['dianzan'] = M("article_dzan")->where("article_id={$article[$i]['id']}")->count()+0;
            // 获取每个博文的收藏次数
            $article[$i]['shoucang'] = M("article_shoucang")->where("article_id={$article[$i]['id']}")->count()+0;
            // 获取每个博文表的图片
            $picid = $article[$i]['id'];
            $c = M("Article_pic")->where("article_id={$picid}")->select();
            // 将图片获取到
            for ( $j = 0; $j < count($c); $j++ ) {
                // 将图片名以数组形式放到微博相应下
                $article[$i]['pic'][$j] = $c[$j]['articlepic'];
            }
        }

        // 将当前用户所有关注人和自己的微博分配到前台
        $this->assign("article", $article);
        // dump($article);die();
    }

    /**
     * ajax发布微博方法
     */
    public function insert()
    {
        // 实例化
        $mod = M("Article");
        // 获取内容
        $data['content'] = htmlspecialchars($_POST['content']);
        // 补偿时间
        $data['time'] = time();
        // 获取session中用户id
        $data['uid'] = session('userinfo')['uid'];
        // 将数据添加到微博表中
        // 封装一下数据
        $mod->create($data);
        // // 执行添加操作
        $insert_id = $mod->add(); 
        // 判断有无图片
        if ( !$_FILES['pic']['error'][0]=='4' ) {
            $pic['article_id'] = $insert_id;
            // 执行文件上传操作
            $info = $this->doUpload();
            if (!$info['error'] == 0) {
                return $info;
            }
            for ( $i = 0; $i < count($info)-1; $i++ ) {
                // 将配图添加到数据库
                $pic['articlepic'] = $info[$i]['savename'];
                $a = M("Article_pic")->add($pic);
                if (!$a) {
                    return $this->error("微博图片上传失败了！");
                } 
            }

            if ( $insert_id>0 && $a>0 ) {
                return $this->success("发布成功!", "Index/index");

            }

        } else {

            return $this->success("发布成功！", "Index/index");
        }
    }

    /**
     *   获取好友数方法(返回好友数组)
     *      思路：
     *          1. 获取粉丝表中所有uid等于当前用户id的 得到所有粉丝的id
     *          2. 获取当前用户所有关注的id   
     *          3. 在遍历判断粉丝列表的id等于当前用户， 当前用户在关注列表中的粉丝栏中   
     */
    public function haoyou($id=0)
    {
        // 获取粉丝关注列表(返回好友数)
        $fanslist = M("fans")->where("uid={$id}")->select();
        // 定义一个空数组arr遍历放入粉丝id
        $arr = array();
        for ( $i = 0; $i < count($fanslist); $i++ ) {
            $arr[$i] = (int)$fanslist[$i]['fansid'];
        }
        // 获取关注列表
        $gzhulist = M("fans")->where("fansid={$id}")->select();
        // 遍历获取好友数
        $brr = array();
        // 好友id列表为$brr 总数为$hyshu
        for ( $i = 0; $i < count($gzhulist); $i++ ) {
            if ( $gzhulist[$i]['fansid'] == $id && in_array($gzhulist[$i]['uid'], $arr) ) {
                $brr[$i] = (int)$gzhulist[$i]['uid'];
            }
        }
        return $brr;
    }

    /**
     *  共同好友方法
     *      思路：1. 获取所有好友的好友，
     *            2. 放入数组
     *            3. 统计每个id出现的次数
     *            4. 将每个id写入数组，出现次数也写入数组
     */
    public function gthy($id=0)
    {
        // 1 .获取所有好友
        $hy = $this->haoyou($id);
        // 1. 遍历获取好友的好友
        sort($hy);
        // 空数组，用于存放好友
        $arr = array();
        for ( $i = 0; $i < count($hy); $i++ ) {
            if ( $this->haoyou($hy[$i]) ) {
                $brr[] = $this->haoyou($hy[$i]);
            }
            // 将共同好友遍历存入$arr中
            for ( $j = 0; $j < count($brr[$i]); $j++ ) {
                if ( $brr[$i][$j] != $id ) {
                    $arr[] = $brr[$i][$j];                    
                }
            }
        }

        // 将共同好友进行处理 统计所有推荐的共同好友
        $crr = array_count_values($arr);
        arsort($crr);
        return $crr;
    }

    // 可能感兴趣的人方法
    public function xqr($id=0)
    {
         // 可能感兴趣的人==============
            // 调用自定义方法共同好友 ( 共同好友id为键，有几个共同好友为值 )
            $hy = $this->haoyou($id);
            // 判断如果$gthylist为真
            $gthylist = $this->gthy($id);
            
            if ($this->gthy($id)) {

                // 定义一个空数组用于存放好友信息
                $hyxx = array();
                // 查找所有关注者id 去除掉gthylist中的已关注id
                $gzid = M("fans")->where("fansid={$id}")->select();
                // 遍历获取所有关注者id
                $gzhuid = array();
                for ( $i = 0; $i < count($gzid); $i++ ) {
                    $gzhuid[] = (int)$gzid[$i]["uid"];
                }
                // 将共同好友列表做处理
                $keylist = array_keys($gthylist);
                
                $key = array_diff( $keylist, $gzhuid);
                shuffle($key);
                $keyli = array_slice($key,0,3);
                if ( $keyli ) {
                    for ( $i = 0; $i < count($keyli); $i++ ) {
                        $hyxx[$i] = M("user_details")->where("uid={$keyli[$i]}")->find();
                        
                        $d = $hyxx[$i]['uid'];
                        // 将共同好友字段存入数组中
                        $hyxx[$i]['gthy'] = $gthylist[$d];
                    }
                    // 将好友信息分配到前台
                    $this->assign('hyxx', $hyxx);
                    // 数组条数分配到前台 用于前台对二维数组遍历
                    $tiaoshu = count($hyxx);
                    $this->assign('tiaoshu', $tiaoshu);    
                } else {
                    return false;
                }
            }                

        // 可能感兴趣的人==============
    }

    // 获取粉丝数和关注数
    public function fsi($id=0)
    {
        // 关注粉丝数====微博条数======
            // 粉丝数
            $fans = M('fans')->where("uid={$id}")->count();
            $guanzhu = M('fans')->where("fansid={$id}")->count();
            $this->assign('fans', $fans);
            $this->assign('guanzhu', $guanzhu);
            // 微博条数
            $weiboshu = M("article")->where("uid={$id}")->count();
            $this->assign('weiboshu', $weiboshu);
        // 关注粉丝数====微博条数======
    }

    // 友情链接获取
    public function links()
    {
        // 友情连接查询分配============
            // 实例化Link表并查询数据
            $linkList = M('link')->where('status=1')->order('order_id asc')->select();
            // 分配数据
            $this->assign("linkList", $linkList);
        // 友情连接查询分配============
    }

    //执行上传
    private  function doUpload()
    {
       //配置上传信息
        $config = array();
        $config['maxSize'] = 3145728 ;// 设置附件上传大小
        $config['exts']    = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $config['rootPath']= './uploads/weibo/'; // 设置附件上传目录
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
