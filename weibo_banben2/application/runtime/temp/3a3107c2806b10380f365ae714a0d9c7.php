<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="<?php echo U('user/index'); ?>" method="post">
	<input type="hidden" name="pageNum" value="<?php echo (isset($currentPage) && ($currentPage !== '')?$currentPage:'1'); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo $numPerPage; ?>" /><!--每页显示多少条-->
	<input type="hidden" name="_order" value="<?php echo (isset($_REQUEST['_order']) && ($_REQUEST['_order'] !== '')?$_REQUEST['_order']:'1'); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo (isset($_REQUEST['_sort']) && ($_REQUEST['_sort'] !== '')?$_REQUEST['_sort']:'1'); ?>"/>
</form>
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" method="post">
	<input type="hidden" name="numPerPage" value="<?php echo $numPerPage; ?>" /><!--每页显示多少条-->
	<div class="searchBar">
		<table class="searchContent">
			<tr>
				<td>
					<b>搜索</b> &nbsp; 关键字：<input type="text" name="keyword" value="<?php echo (isset($_POST['keyword']) && ($_POST['keyword'] !== '')?$_POST['keyword']:''); ?>" /> 
				</td>
				<td>
					<div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div>
				</td>
			</tr>
		</table>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="add" href="<?php echo U('user/add'); ?>" target="dialog" width="550" height="300" rel="useradd" title="添加学生信息"><span>添加</span></a></li>
			<li><a class="delete" href="<?php echo U('user/del'); ?>?id={item_id}&navTabId=stulist" target="ajaxTodo" title="确定要执行操作吗?"><span>屏蔽/恢复</span></a></li>
			<li><a class="edit" href="<?php echo U('user/edit'); ?>?id={item_id}"  width="550" height="300" target="dialog"><span>修改</span></a></li>
			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li>
		</ul>
	</div>
	<table class="table" width="100%" layoutH="112">
		<thead>
			<tr>
				<th width="40"  orderField="id">id号</th>
				<th width="50">帐号</th>
				<th width="50">昵称</th>
				<th width="50">性别</th>
				<th width="50">年龄</th>
				<th width="50">email</th>
				<th width="50">注册ip</th>
				<th width="50">状态</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($list as $v): ?>
				<tr target="item_id" rel="<?php echo $v['uid']; ?>">
					<td><?php echo $v['uid']; ?></td>
					<td><?php echo $v['username']; ?></td>
					<td><?php echo $v['nickname']; ?></td>
					<td><?php echo ($v['sex']=='1')?"男":"女"; ?></td>
					<td><?php echo $v['age']; ?></td>
					<td><?php echo $v['email']; ?></td>
					<td><?php echo $v['ip']; ?></td>
					<td><?php echo ($v['status']=='1')?"正常":"屏蔽"; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<div class="panelBar">
		<div class="pages">
			<span>显示</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage:this.value})">
				<option value="5" <?php if($numPerPage==5) echo "selected"; ?>>5</option>
				<option value="10" <?php if($numPerPage==10) echo "selected"; ?>>10</option>
				<option value="15" <?php if($numPerPage==15) echo "selected"; ?>>15</option>
				<option value="20" <?php if($numPerPage==20) echo "selected"; ?>>20</option>
				<option value="25" <?php if($numPerPage==25) echo "selected"; ?>>25</option>
				<option value="30" <?php if($numPerPage==30) echo "selected"; ?>>30</option>
			</select>
			<span>共<?php echo (isset($totalCount) && ($totalCount !== '')?$totalCount:'0'); ?>条</span>
		</div>
		<div class="pagination" targetType="navTab" totalCount="<?php echo (isset($totalCount) && ($totalCount !== '')?$totalCount:'0'); ?>" numPerPage="<?php echo $numPerPage; ?>" pageNumShown="5" currentPage="<?php echo (isset($currentPage) && ($currentPage !== '')?$currentPage:'0'); ?>"></div>
	</div>
</div>
