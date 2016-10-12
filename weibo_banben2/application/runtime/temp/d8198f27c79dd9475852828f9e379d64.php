<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="<?php echo U('Weibo/index'); ?>" method="post">
	<input type="hidden" name="pageNum" value="<?php echo (isset($currentPage) && ($currentPage !== '')?$currentPage:'1'); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo $numPerPage; ?>" /><!--每页显示多少条-->
	<input type="hidden" name="_order" value="<?php echo (isset($_REQUEST['_order']) && ($_REQUEST['_order'] !== '')?$_REQUEST['_order']:''); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo (isset($_REQUEST['_sort']) && ($_REQUEST['_sort'] !== '')?$_REQUEST['_sort']:''); ?>"/>
</form>
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" method="post">
	<input type="hidden" name="numPerPage" value="<?php echo $numPerPage; ?>" /><!--每页显示多少条-->
	<div class="searchBar">
		<table class="searchContent">
			<tr>
				<td>
					<b>搜索</b> &nbsp; 姓名：<input type="text" name="keyword" size="6" value="<?php echo (isset($_POST['keyword']) && ($_POST['keyword'] !== '')?$_POST['keyword']:''); ?>" /> 
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
			<li><a class="delete" href="<?php echo U('weibo/wb_huifu'); ?>?id={item_id}&navTabId=wb_hsz_list" target="ajaxTodo" title="确定要回复吗?"><span>回复</span></a></li>
			<li class="line">line</li>
		</ul>
	</div>
	<table class="list" width="100%" layoutH="112">
		<thead>
			<tr>
				<th width="30">发布人</th>
				<th width="60">图片</th>
				<th width="150">转发内容</th>
				<th width="150">内容</th>
				<th width="30">是否转发</th>
				<th width="90">发布时间</th>
				<th width="30">转发量</th>
				<th width="30">收藏量</th>
				<th width="30">点赞次数</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($list as $vo): ?>
				<tr target="item_id" rel="<?php echo $vo['id']; ?>">
					<td><?php echo $vo['nickname']; ?></td>
					<td><?php if($vo['articlepic']): ?><img width="60" src="<?php echo APP_PUBLIC; ?>/uploads/weibo/<?php echo $vo['articlepic']; ?>"><?php endif; ?></td>
					<td><?php echo $vo['truecontent']; ?></td>
					<td><?php echo $vo['content']; ?></td>
					<td><?php echo ($vo['istrue']=="2")?"是":"否"; ?></td>
                    <td><?php echo date("Y-m-d H:i:s",$vo['time']); ?></td>
					<td><?php echo $vo['turn']; ?></td>
					<td><?php echo $vo['keep']; ?></td>
					<td><?php echo $vo['comment']; ?></td>
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
