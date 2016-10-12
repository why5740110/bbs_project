//点击联想到的内容，就把内容写入input框中
$('.s_input_val').live("click",function(){
	var s_input_val = $(this).text();
	$('#val').val(s_input_val);
	$('.p_search_hid').hide();
});

$('#val').bind("focus",function(){
	$('.p_search_hid').show();
}).bind('focusout',function(){
	setTimeout("$('.p_search_hid').hide()",200);
	//$('.p_search_hid').hide();
});

//---------------------------时时刷新下拉框的内容-----------------------------
var moren = $('.p_search_hid').children();
var ur1 = $('#aa').val();
var val = $('#val').val();

$('#val').bind('keyup',function(){
	var val = $('#val').val();
	if(val.length > 0){
		$.ajax({
			url:ur1,
			type:"post",
			data:{val:val},
			dataType:'json',
			async:true,
			success:function(res){
				//局部刷新div实现每输入一个就刷新下面div一次
				$('.p_search_hid').empty();
				var str = '';
				if(res.length>0){
					
					for(var i=0; i<res.length; i++){
						str += "<a href='javasript:void(0)' class='s_input_val'>"+res[i].nickname+"</a>";
						str += "<br>";
					}

					$('.p_search_hid').append(str);
				}else{
					
				}
			},
			error:function(){
				alert('no');
			}
		});

	}else{
		$('.p_search_hid').empty();
		$('.p_search_hid').append(moren);
	}	
});

//----------------------------------时时刷新结束-------------------------------------

//-----------------------搜索框搜索------------------------------------
url_index = $('#search_index').val();
$('.s_search').bind('mouseover',function(){
	//alert(1);
	$(this).css('background-position','0px 0px');

}).bind('mouseout',function(){
	$(this).css('background-position','0px -42px');

}).bind('click',function(){
	//点击之后就跳转到详情页面。
	var s_val = $('#val').val();
	window.location.href=url_index+"?search_val="+s_val;
})


//通过历史记录搜索
$('.search_history').bind('click',function(){
	//alert($(this).attr('value'));
	var s_val = $(this).attr('value');
	window.location.href=url_index+"?search_val="+s_val;

})

