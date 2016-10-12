var int_user = null;
var int_age = null;
var int_sex = null;

$("#dq").bind("click",function(){
	$(".h_city").show();
});

//用户类型列表的特效
$("#yh").bind("mouseover",function(){
	$(".h_user").show();
}).bind("mouseout",function(){
	int_user = setTimeout("$('.h_user').hide()",100);
});

$(".h_user").bind("mouseover",function(){
	clearTimeout(int_user);
}).bind("mouseleave",function(){
	$(this).hide();
});

//性别特效
$("#nl").bind("mouseover",function(){
	$(".h_age").show();
}).bind("mouseout",function(){
	int_age = setTimeout("$('.h_age').hide()",100);
});

$(".h_age").bind("mouseover",function(){
	clearTimeout(int_age);
}).bind("mouseleave",function(){
	$(this).hide();
});

//年龄
$("#xb").bind("mouseover",function(){
	$(".h_sex").show();
}).bind("mouseout",function(){
	int_sex = setTimeout("$('.h_sex').hide()",100);
});

$(".h_sex").bind("mouseover",function(){
	clearTimeout(int_sex);
}).bind("mouseleave",function(){
	$(this).hide();
});
