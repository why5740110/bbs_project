<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="<?php echo U('gonggao/update'); ?>?navTabId=linkList&callbackType=closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  //窗体组件采用这个 iframeCallback(this, navTabAjaxDone); ?>
		<input type="hidden" value="<?php echo $vo['id']; ?>" name="id" />
        <div class="pageFormContent" layoutH="60">
        	<dl>
				<dt>排序：</dt>
				<dd><input type="text" class="digits" min="1" max="100"  size="10" style="width:100%" name="order" value="<?php echo $vo['order']; ?>" name="order"/></dd>
			</dl>

			<dl>
				<dt>公告标题：</dt>
				<dd><input type="text" style="width:100%" value="<?php echo $vo['title']; ?>" name="title"/></dd>
			</dl>
			
			<dl>
				<dt>状态：</dt>
				<dd>
					<input type="radio" value="1" <?php if($vo['status']==1) echo "checked"; ?> name="status"/>显示
					<input type="radio" value="0" <?php if($vo['status']==0) echo "checked"; ?> name="status"/>隐藏
				</dd>
			</dl>
			<dl>
				<dt>内容：</dt>
				<dd><textarea rows="10" cols="50" name="content"><?php echo $vo['content']; ?></textarea></dd>
			</dl>
			
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>

