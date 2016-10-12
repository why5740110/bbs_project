<?php
namespace app\search\controller;
use think\Controller;


class Index extends Common
{
    public function index()
    {
        return $this->fetch();
    }

    public function search()
    {
    	//这里写搜索内容并返回一个包含
    	$type = $_POST['name'];
    	$val = $_POST['val'];
    	

    	switch($type){
    		case 1:
    			//综合信息查询
    		break;
    		case 2:
    			$mod = M('user');
    			$data['username'] = array('like',"%$val%");
    			$list = $mod ->where($data) -> select();
    			return json_encode($list);
    			
    		break;	
    		case 3:
				//博文查询
    			$mod = M('article');
    			$data['content'] = array('like',"%$val%");
    			$list = $mod -> where($data) -> select();
                return json_encode($list);
    		break;

    	}

    }
}
