<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="<?php echo U('gonggao/insert'); ?>?navTabId=linkList&callbackType=closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  //窗体组件采用这个 iframeCallback(this, navTabAjaxDone); ?>
        <div class="pageFormContent" layoutH="60">
        	<dl>
				<dt>排序：</dt>
				<dd><input type="text" class="digits" min="1" max="100"  size="10" style="width:100%"  name="order"/></dd>
			</dl>

			<dl>
				<dt>公告标题：</dt>
				<dd><input type="text" style="width:100%" name="title"/></dd>
			</dl>
			
			<dl>
				<dt>状态：</dt>
				<dd>
					<input type="radio" value="1" checked name="status"/>显示
					<input type="radio" value="0"  name="status"/>隐藏
				</dd>
			</dl>
			<dl>
				<dt>内容：</dt>
				<dd><textarea rows="10" cols="50" name="content"></textarea></dd>
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
