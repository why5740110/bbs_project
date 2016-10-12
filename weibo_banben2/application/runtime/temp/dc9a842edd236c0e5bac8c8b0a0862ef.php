<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="<?php echo U('user/update'); ?>?navTabId=stulist&callbackType=closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  //窗体组件采用这个 iframeCallback(this, navTabAjaxDone); ?>
		<div class="pageFormContent" layoutH="60">
			<input type="hidden" value="<?php echo $id; ?>" name="uid">
			<dl>
				<dt>密码：</dt>
				<dd><input type="password" class="required"  style="width:100%" name="pwd1"/></dd>
			</dl>
			<dl>
				<dt>密码：</dt>
				<dd><input type="password" class="required" style="width:100%" name="pwd2"/></dd>
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

