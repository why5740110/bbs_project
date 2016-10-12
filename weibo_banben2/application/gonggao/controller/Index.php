<?php
namespace app\gonggao\controller;
use think\Controller;


class Index extends Controller
{
    public function index()
    {   
        //$gid = $_GET['gid'];
        $gid = 1;
       	$gg = M('gonggao') -> where("id = {$gid}") -> find();
        $this -> assign("gg",$gg);
        $this -> assign("gid",$gid);
        $this -> r_show();
        return $this -> fetch();

    }

    public function r_add()
    {	
    	$data['uid'] = session("id");
    	$data['gid'] = $_POST['gid'];
    	$data['content'] = $_POST['g_content'];
    	$m = M('gg_reply') -> add($data);
    	$this -> assign('gid',"1");
    	//$this -> assign('gid',$_POST['gid']);
    	$this -> fetch();
    }

    public function r_show()
    {
    	$mod = M('gg_reply');
    	//$gid = $_GET['gid'];
    	$gid = 1;
    	$res = $mod -> where("gid = {$gid}") ->select();
    	$this -> assign('res',$res);
    }


}
