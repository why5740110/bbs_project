//给要搜索的内容名称一个点击效果,如果是高级搜索则弹出框
$("li").bind("click",function(){
	$(".sel").removeClass("sel");
	$(this).addClass("sel");

	if($(this).val() == 4){
		//显示隐藏的div
		$('.gaoji').show();
		$('.gj_close').show();

		//高级选项框弹出来以后，需要为整体蒙上一层灰色，并且取消冒泡。

		$('.big').show();
	}
});

//点击关闭按钮，还要调整选中项
$('.gj_close').bind('click',function(){
	$('.gaoji').hide();
	$('.gj_close').hide();
	$('.big').hide();

	$('li').eq(0).addClass('sel');
	$('li').eq(3).removeClass('sel');
});

