$('.history_link').bind('mouseover',function(){
	$(this).css({background:"#ccc",cursor:"pointer"});
}).bind('mouseout',function(){
	$(this).css('background','');
});

$('.search_history').bind('click',function(){

});

//给x添加绑定事件
var url_clear_one = $('#clear_one').val();
$('.clear_history').bind('mouseover',function(){
	$(this).css('color','red');
}).bind('mouseout',function(){
	$(this).css('color','');
}).bind('click',function(){
	var clear_node = $(this).parent();
	var clear_id = $(this).attr('value');
	//alert(clear_id);
	$.ajax({
			url:url_clear_one,
			type:"post",
			data:{clear_id:clear_id},
			dataType:'json',
			async:true,
			success:function(res){
				if(res == '1'){
					clear_node.remove();
				}else{
					alert('删除失败');
				}
			},
			error:function(){
				alert('no');
			}
		});
});

//给清除按钮添加点击事件
var url_clear_all = $('#clear_all').val();
$("#do_clear_all").bind("click",function(){
	$.ajax({
			url:url_clear_all,
			type:"post",
			data:{va:1},
			dataType:'json',
			async:true,
			success:function(res){
				if(res == '1'){
					$('.clear_all').empty();
				}else{
					alert('删除失败');
				}
			},
			error:function(){
				
			}
		});
})
