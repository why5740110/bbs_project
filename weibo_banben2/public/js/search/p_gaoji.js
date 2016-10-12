$("li").eq("3").bind("click",function(){
	$(".big").show();
	$(".gjk").show();
});



$(".g_top").mousedown(function(e)//e鼠标事件 
{ 
	$(this).css("cursor","move");//改变鼠标指针的形状 

	var offset = $(this).offset();//DIV在页面的位置 
	var x = e.pageX - offset.left;//获得鼠标指针离DIV元素左边界的距离 
	var y = e.pageY - offset.top;//获得鼠标指针离DIV元素上边界的距离 
	$(document).bind("mousemove",function(ev)//绑定鼠标的移动事件，因为光标在DIV元素外面也要有效果，所以要用doucment的事件，而不用DIV元素的事件 
	{ 
		$(".gjk").stop();//加上这个之后 

		var _x = ev.pageX - x;//获得X轴方向移动的值 
		var _y = ev.pageY - y;//获得Y轴方向移动的值 
		var offset = $(".gjk").offset();
		
		//$(".gjk").css({top:_y+"px",left:_x+"px"});

		if(ev.pageY < 200){
			$(".gjk").css({top:Math.max(0,_y)+"px"});
		}else{
			$(".gjk").css({top:Math.min(240,_y)+"px"});
		}
					
		if(ev.pageX < 550){
			$(".gjk").css({left:Math.max(0,_x)+"px"});
		}else{
			$(".gjk").css({left:Math.min(805,_x)+"px"});
		}
		
	}); 

}); 

$(document).mouseup(function() 
{ 
	$(".gjk").css("cursor","default"); 
	$(this).unbind("mousemove"); 
});

//城市级联
var ur_city = $(".ur_city").val();
var ur_form = $('.ur_form').val();

$(".g_city").live("change",function(){
                    //alert($(this).val());
                    var id = $(this).val();//获取选择的id值
                    //获取当前下拉框
                    var selectob = $(this);
                    //清除后面的下拉框
                    selectob.nextAll(".city > select").remove();    
                    //执行Ajax发送
                    $.ajax({
                        url :ur_city,
                        type:"post",
                        async:true,
                        data:"id="+id,
                        dataType:"json",
                        success:function(res){
                            //判断是否有信息
                            if(res.length>0){
                                var str = "<select name='g_city2'>";
                                //遍历
                                for(var i=0;i<res.length;i++){
                                    str += "<option value='"+res[i].id+"'>";
                                    str += res[i].name;
                                    str += "</option>";
                                }
                                str += "</select>";
                                //添加到当前下拉框的后面
                                selectob.after(str);
                            }
                        },
                        error:function(){
                            alert('Ajax请求失败！');
                        }
                    });
});

$('.qx').bind("click",function(){
	$(".big").hide();
	$(".gjk").hide();
});

var ur_gj = $("#ur_gj").val();
//alert(ur_gj);
 $('.tj').bind('click',function(){
 	var formData=$("form").serialize();
    var s_v = $("#s_v_g").val();
    var s_s = $("#xb_g").val();
    var s_a = $("#nl_g").val();
    //alert(s_v+s_s+s_a);
    window.location.href=ur_gj+"?s_v="+s_v+"&s_s="+s_s+"&s_a="+s_a;
 });

