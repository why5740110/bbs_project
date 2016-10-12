<?php
namespace app\search\controller;
use think\Controller;


class History extends Controller
{
    public function index()
    {   
        $uid = session('id');
        //$this->assign('history',M('search_history')->where("uid = {$uid}")->select());
        $his['uid'] = $uid;
        $his['status'] = 1;
        $history = M('search_history') -> where($his) ->order('lasttime desc') ->limit(10) -> select();
        $this -> assign("history",$history);

    }

    public function clear_one()
    {
        $id = $_POST['clear_id'];

        $mod = M('search_history');
        $data['status'] = 0;
        $m=$mod -> where("id={$id}") ->save($data);
        if($m>0){
            return "1";
        }else{
            return "2";
        }
        
    }
    public function clear_all()
    {   
        $data = array();
        $data['status'] = 3;
        $uid = session('id');
        $m1 = M('search_history') -> where("uid=$uid") -> save($data);

        $data['status'] = 0;
        $m2 = M('search_history') -> where("uid=$uid") -> save($data);

        if($m2 > 0){
            return 1;
        }
        
    }


}
