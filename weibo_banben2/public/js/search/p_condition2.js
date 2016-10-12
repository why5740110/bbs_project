$('#h_city_close').bind('click',function(){
	$('.h_city').hide();
});

//condition2的提交的URL
var ur_s_c = $("#search_index").val();

//对用户类型隐藏框做特效
$('.h_user_type').bind("mouseover",function(){
	$(this).css("background",'#ccc');
}).bind('mouseout',function(){
	
	$(this).css('background','');

}).bind('click',function(){
	$('#yh').text($(this).text());
	$('.h_user').hide();
});

//对性别做特效
$('.h_user_sex').bind("mouseover",function(){
	$(this).css("background",'#ccc');
}).bind('mouseout',function(){
	
	$(this).css('background','');

}).bind('click',function(){
	$('#xb').text($(this).text());
	$('.h_sex').hide();
	//做完特效后，用ajax做数据的刷新，而且要带有其他条件的参数
	var s_v = $("#s_v").val();
	var s_s = $("#xb").text();
	var s_a = $("#nl").text();
	var s_c = $(".dq").text();
	//alert(s_v+s_s+s_a+s_c);
	window.location.href=ur_s_c+"?s_v="+s_v+"&s_s="+s_s+"&s_a="+s_a+"&s_c="+s_c;


	
});

//对用户的年龄做特效
$('.h_user_age').bind("mouseover",function(){
	$(this).css("background",'#ccc');
}).bind('mouseout',function(){
	
	$(this).css('background','');

}).bind('click',function(){
	$('#nl').text($(this).text());
	$('.h_age').hide();
	//做完特效后，用ajax做数据的刷新，而且要带有其他条件的参数
	var s_v = $("#s_v").val();
	var s_s = $("#xb").text();
	var s_a = $("#nl").text();
	var s_c = $(".dq").text();
	//alert(s_v+s_s+s_a+s_c);
	window.location.href=ur_s_c+"?s_v="+s_v+"&s_s="+s_s+"&s_a="+s_a+"&s_c="+s_c;
});

