<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2015 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// [ 应用入口文件 ]
// 自定义函数__PUBLIC__
$self = $_SERVER['PHP_SELF'];
$urldir = substr($self,0,strpos($self,"public"));
define("APP_PUBLIC",$urldir."public");
define("APP_INDEX",$urldir."public/");

// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');
// 开启调试模式
define('APP_DEBUG', true);
// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
