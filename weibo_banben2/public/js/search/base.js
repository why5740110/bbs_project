//
var ur = $('#aa').attr('value');
//alert(ur);
//实现时时刷新下拉框
$('input').bind('keyup',function(){
	var val = $('#tex').val();
	//alert(num.length);
	if(val.length > 0){
		$(".xiala").show();
		//用ajax无刷新获取后台数据在下拉框中显示

		//将选中的li给一个class=sel，选取这个li的值
		var sel = $(".sel").val();
		//得到了name的值和val的值以后就可以按照name = value在后台查了，ajax

		$.ajax({
			url:ur,
			type:"post",
			data:{name:sel,val:val},
			dataType:'json',
			async:true,
			success:function(res){
				//局部刷新div实现每输入一个就刷新下面div一次
				$('.xiala').empty();
				var str = '';
				if(res.length>0){
					if(sel == 2){
						for(var i=0; i<res.length; i++){
							str += res[i].username;
							str += "<br>";
						}
					}

					if(sel == 3){
						for(var i=0; i<res.length; i++){
							str += res[i].content;
							str += "<br>";
						}

					}
					$('.xiala').append(str);
				}
			},
			error:function(){
				alert('no');
			}
		});

	}else{
		$(".xiala").hide();
	}

});

//给搜索按钮一个效果
$('.s_search').bind('mouseover',function(){
	//alert(1);
	$(this).css('background-position','0px 0px');

}).bind('mouseout',function(){
	$(this).css('background-position','0px -42px');

}).bind('click',function(){
	//点击之后就跳转到详情页面。

})

