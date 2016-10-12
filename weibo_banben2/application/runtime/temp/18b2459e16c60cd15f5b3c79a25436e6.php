<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="<?php echo U('Pic/index'); ?>" method="post">
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
					<b>搜索</b> &nbsp; 图片ID：<input type="text" name="keyword" value="<?php echo (isset($_POST['keyword']) && ($_POST['keyword'] !== '')?$_POST['keyword']:''); ?>" /> 
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
			<!-- <li><a class="add" href="<?php echo U('Guanggao/add'); ?>" target="dialog" width="550" height="300" rel="guanggaoadd" title="添加学生信息"><span>添加</span></a></li> -->
			<li><a class="delete" href="<?php echo U('Pic/del'); ?>?id={item_id}&navTabId=piclist" target="ajaxTodo" title="删除"><span>删除</span></a></li><!-- 
			<li><a class="edit" href="<?php echo U('Guanggao/edit'); ?>?id={item_id}"  width="550" height="300" target="dialog"><span>修改</span></a></li>
			<li class="line">line</li> -->
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li>
		</ul>
	</div>
	<table class="list" border="1" width="1150" class="table" layoutH="112">
			<!--<caption><a href="<?php echo U('Guanggao/add'); ?>">点击添加广告信息</a></caption>-->
			<tr>
				<th align="center" orderField="id">编号</th>
				<th align="center" orderField="picname">图片</th>
				<th align="center">所属专辑id</th>
				<th align="center">所属用户id</th>
				<th align="center">图片描述</th>
				<th align="center">发布时间</th>
			</tr>
			
			<?php foreach($piclist as $vo): ?>
			<tr height="50" class="gtr" align="center" target="item_id" rel="<?php echo $vo['id']; ?>">
				<td class="gid"><?php echo $vo['id']; ?></td>
				<td><img src="<?php echo APP_PUBLIC; ?>/uploads/pic/<?php echo $vo['picname']; ?>" height="50"></td>
				<td><?php echo $vo['photo_id']; ?></td>
				<td><?php echo $vo['uid']; ?></td>
				<td><?php echo $vo['descrip']; ?></td>
				<td><?php echo date('Y-m-d',$vo['addtime']); ?></td>
			</tr>
			<?php endforeach; ?>
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
