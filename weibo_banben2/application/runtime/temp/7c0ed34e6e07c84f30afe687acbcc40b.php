<?php if (!defined('THINK_PATH')) exit();?><script>
	//获取下拉位置的value值来修改上传文件的提醒
	$(function(){
		//获取下拉框val值
		var select = $("select[name='position']").change(function(){
			//alert($(this).val());
			switch($(this).val()){
				case "left":
				case "right":
					$('#alt').html("提醒:上传220X220px 1M以内的图片");
				break;
				
				case "top":
				case "middle":
				case "buttom":
					$('#alt').html("提醒:上传980X200px 1M以内的图片");
				break;
			}
		});
	});
</script>

<div class="pageContent">
	<form method="post" action="<?php echo U('Guanggao/doAdd'); ?>?navTabId=guanggaolist&callbackType=closeCurrent"  class="pageForm required-validate" 
		onsubmit="return iframeCallback(this,dialogAjaxDone);" enctype="multipart/form-data" ><?php  //窗体组件采用这个validateCallback iframeCallback(this, navTabAjaxDone); ?>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>标题：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="title"/></dd>
			</dl>
			<dl>
				<dt>上传图片：</dt>
				<dd>
                    <input type="file"  name="imagename" />
					
                </dd>
			</dl>
			
			<dl>
				<dt>&nbsp;</dt>
				<dd>
					<span id="alt" style="color:red;">提醒:上传200X400px 1M以内的图片</span>
                </dd>
			</dl>
			
			
			<dl>
				<dt>链接：</dt>
				<dd><input type="text" class="required" size="10" style="width:100%" name="link"/></dd>
			</dl>
			<dl>
				<dt>排序：</dt>
				<dd>
					<select name="orderid">
							<option value="4">第一个</option>
							<option value="3">第二个</option>
							<option value="2">第三个</option>
							<option value="1">第四个</option>
							<option value="0">第五个</option>
					</select>
				</dd>
			</dl>
			<dl>
				<dt>位置：</dt>
				<dd>
					<select name="position">
						<option value="left">左侧</option>
						<option value="right">右侧</option>
						<option value="top">顶部</option>
						<option value="buttom">底侧</option>
						<option value="middle">中间</option>
					</select>
				</dd>
			</dl>
			
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">添加</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>

