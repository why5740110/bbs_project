<?php
namespace app\search\controller;
use think\Controller;


class Person extends Common
{
    public function index()
    {   
        //获取城市级联
    	$this -> assign("list",M("District") -> where("upid=0") -> select());
        if(empty($_GET['s_s'])){
            $this -> search_input();
        }else{
            $this -> condition2();
        }
        $his = new History();
        $his -> index();

        $hot = M("search_hot") -> where("status = 1") -> order("hot_height desc") -> limit("10") -> select();
        $this -> assign("hot",$hot);

        return $this -> fetch();
    }

    public function city($id=-1)
    {
    	//改变日志存储类型
        \think\Log::init(['type'=>'Test']);
        $mod = M("District");
        //获取对应的子信息
        $list = $mod->where("upid={$id}")->select();
        //响应结果
        return json_encode($list);
    }
    public function doForm()
    {
    	$data = $_POST;
    	return json_encode($data);
    }

    public function doCondition()
    {
        $data = $_GET;
        return json_encode($data);
    }

    public function search_nickname()
    {
        //这里写搜索内容并返回一个包含
        $val = $_POST['val'];
        $mod = M('user_details');
        $data['nickname'] = array('like',"%$val%");
        $list = $mod ->where($data) -> select();
        return json_encode($list);        
    }

    public function search_input()
    {
        //dump($_GET);
        //这里的get开始是没有的回报没有的错误，所以我先判断下。以后有好的方法再改
        if(empty($_GET['search_val'])){
            $_GET['search_val'] = '';
        }else{
            $input_val = $_GET['search_val'];
            //当用户搜索的信息不为空还要为他添加历史记录
            $uid = session('id');
            $mod = M('search_history');
            $res = $mod -> where("uid={$uid} and content='{$input_val}'") -> find();
            //dump($res);
            if($res){
                //数据库已有，把status改为1，num+1,更新lasttime,
                $data['id'] = $res['id'];
                $data['lasttime'] = time();
                $data['status'] = 1;
                $data['num'] = $res['num'] + 1;
                $mod -> save($data); 
            }else{
                //数据库没有直接插入
               $data['uid'] = session('id');
                $data['content'] = $input_val;
                $data['type'] = 'nickname';
                $lasttime = time();
                $data['lasttime'] = $lasttime;
                $data['num'] = 1;
                $mod -> add($data);
            }
        }

        if($_GET['search_val']){
            //dump($input_val);
            $mod = M('user_details');
            $data = array();
            $data['nickname'] = array('like',"%$input_val%");
            $content = $mod -> where($data) -> select();
       
            $this ->assign('content',$content);
            $this -> assign('s_v',$input_val);

        }else{
            //输出热搜内容
            $this -> assign('s_v',"");
            /*这里是没有搜索时输出的内容,由于尚未完善，这里的content就先
            这样,以后体系完善后可以更改为其他数据*/
            $num = M('user_details')->count();
            $r1 = M('user_details')->select();

            for($i=0;$i<1;$i++){
                $n = rand(0,$num-1);
                $content[] = $r1[$n];
            }

            $this -> assign('content',$content);
            $this -> assign('s_v',"");
            $this -> assign('s_c',"");
            $this -> assign('s_a',"");
            $this -> assign('s_s',"");  

        }

    }

    public function condition2()
    {
        $s_v = $_GET['s_v'];//nickname  link匹配
        $s_a = $_GET['s_a'];//age
        $s_c = $_GET['s_c'];//city
        $s_s = $_GET['s_s'];//性别
        //先写好查询语句，然后在拼装查询语句中需要的$data
        $data = array();
        $data['nickname'] = array('like',"%$s_v%");
        //$data['sex']
        switch($s_s){
            case "性别男性":
                $data['sex'] = "1";
            break;
            case "性别女性":
                $data['sex'] = "0";
            break;
            default:
                1;
            break;
        }
        //$data['age'] 
        switch($s_a){
            case "20岁以下":
                $data['age'] = array('between',"0,20");
            break;
            case "20岁~40岁":
                $data['age'] = array('between',"21,40");
            break;
            case "40岁以上":
                $data['age'] = array('between',"40,200");
            break;
            default:
                1;
            break;
        }
        
        //dump($data);
        $model = M("user_details");
        $content = $model -> where($data) ->select();

        $this -> assign('content',$content);
        $this -> assign('s_v',$s_v);
        $this -> assign('s_c',$s_c);
        $this -> assign('s_a',$s_a);
        $this -> assign('s_s',$s_s);    
    }

    public function gj()
    {
        //dump($_GET);
        switch($_GET['s_s']){
            case 1:
                $s_s = "不限性别";
            break;
            case 2:
                $s_s = "性别男性";
            break;
            case 2:
                $s_s = "性别女性";
            break;
        }

        switch($_GET['s_a']){
            case 1:
                $s_a = "不限年龄";
            break;
            case 2:
                $s_a = "20岁以下";
            break;
            case 3:
                $s_a = "20岁~40岁";
            break;
            case 4:
                $s_a = "40岁以上";
            break;
        }
        $s_v = $_GET['s_v'];
        $s_c = "1";//没给s_c的值不能让他为空所以随意给一个
        //dump($_GET);
        //添加历史
        $input_val = $_GET['s_v'];
            //当用户搜索的信息不为空还要为他添加历史记录
            $uid = session('id');
            $mod = M('search_history');
            $res = $mod -> where("uid={$uid} and content='{$input_val}'") -> find();
            //dump($res);
            if($res){
                //数据库已有，把status改为1，num+1,更新lasttime,
                $data['id'] = $res['id'];
                $data['lasttime'] = time();
                $data['status'] = 1;
                $data['num'] = $res['num'] + 1;
                $mod -> save($data); 
            }else{
                //数据库没有直接插入
               $data['uid'] = session('id');
                $data['content'] = $input_val;
                $data['type'] = 'nickname';
                $lasttime = time();
                $data['lasttime'] = $lasttime;
                $data['num'] = 1;
                $mod -> add($data);
            }

        $this -> assign('s_v',$s_v);
        $this -> assign('s_c',$s_c);
        $this -> assign('s_a',$s_a);
        $this -> assign('s_s',$s_s); 
        return $this -> fetch();

    }

}
