function $(id){
	return document.getElementById(id);
}
var ur = $('ur').value;
var ur2= $('ur2').value;
var ur3= $('ur3').value;

var name,pwd1,pwd2;
window.onload = function(){
	$('regname').focus();
	var cname1,cname2,cpwd1,cpwd2,cemail;
	//设置激活按钮
	function chkreg(){
		if((cname1 == 'yes') && (cname2 == 'yes') && (cpwd1 == 'yes') && (cpwd2 == 'yes') && (cemail == 'yes')){
			$('regbtn').disabled = false;
		}else{
			$('regbtn').disabled = true;
		}                                                                                                                                                
	}
	//验证用户名
	$('regname').onkeyup = function (){
		name = $('regname').value;
		cname2 = '';
		if(name.match(/^[a-zA-Z_]*/) == ''){
			$('name').innerHTML = '<font color=red>必须以字母或下划线开头</font>';
			cname1 = '';
		}else if(name.length < 2){
			$('name').innerHTML = '<font color=red>注册名称必须大于等于2位</font>';
			cname1 = '';
		}else{
			$('name').innerHTML = '<font color=green>注册名称符合标准</font>';
			cname1 = 'yes';
		}
		chkreg();
	}
	//验证是否存在该用户
	$('regname').onblur = function(){
		name = $('regname').value;
		if(cname1 == 'yes'){
			xmlhttp.open("GET",ur+"?name="+name,true);
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState == 4){
					if(xmlhttp.status == 200){
						var msg = xmlhttp.responseText;
						
						if(msg == '1'){
						
							$('name').innerHTML="<font color=green>恭喜您，该用户名可以使用!</font>";
							cname2 = 'yes';
							chkreg();
						}else if(msg == '2'){
							$('name').innerHTML="<font color=red>用户名被占用！</font>";
							cname2 = '';
						}else{
							$('name').innerHTML="<font color=red>"+msg+"</font>";
							cname2 = '';
						}
					}
				}
				
				chkreg();
			}
			xmlhttp.send();
		}
	}
	//验证密码
	$('regpwd1').onkeyup = function(){
		pwd = $('regpwd1').value;
		pwd2 = $('regpwd2').value;
		if(pwd.length < 6){
			$('pw1').innerHTML = '<font color=red>密码长度最少需要6位</font>';
			cpwd1 = '';
		}else if(pwd.length >= 6 && pwd.length < 12){
			$('pw1').innerHTML = '<font color=green>密码符合要求。密码强度：弱</font>';
			cpwd1 = 'yes';
		}else if((pwd.match(/^[0-9]*$/)!=null) || (pwd.match(/^[a-zA-Z]*$/) != null )){
			$('pw1').innerHTML = '<font color=green>密码符合要求。密码强度：中</font>';
			cpwd1 = 'yes';
		}else{
			$('pw1').innerHTML = '<font color=green>密码符合要求。密码强度：高</font>';
			cpwd1 = 'yes';
		}
		if(pwd2 != '' && pwd != pwd2){
			$('pw2').innerHTML = '<font color=red>两次密码不一致!</font>';
			cpwd2 = '';
		}else if(pwd2 != '' && pwd == pwd2){
			$('pw2').innerHTML = '<font color=green>密码输入正确</font>';
			cpwd2 = 'yes';
		}
		chkreg();
	}
	//验证确认密码
	$('regpwd2').onkeyup = function(){
		pwd1 = $('regpwd1').value;
		pwd2 = $('regpwd2').value;
		if(pwd1 != pwd2){
			$('pw2').innerHTML = '<font color=red>两次密码不一致!</font>';
			cpwd2 = '';
		}else{
			$('pw2').innerHTML = '<font color=green>密码输入正确</font>';
			cpwd2 = 'yes';
			chkreg();
		}
	}
	//验证email
	$('email').onkeyup = function(){
		emailreg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		$('email').value.match(emailreg);
		if($('email').value.match(emailreg) == null){
			$('emaildiv').innerHTML = '<font color=red>错误的email格式</font>';
			cemail = '';
		}else{
			$('emaildiv').innerHTML = '<font color=green>输入正确</font>';
			cemail = 'yes';
			
		}
		chkreg();
	}

	$('regbtn').onclick=function(){
			var code = $('code').value;
			//alert(code);
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState == 4){
					if(xmlhttp.status == 200){
						var res = xmlhttp.responseText;
						
						if(res == '1'){
							alert("恭喜您注册成功！请登录");
							window.location.href=ur3;
						}else if(res = "2"){
							alert('验证码错误请重新填写');
						}
					}
				}
			}
			xmlhttp.open("GET",ur2+"?name="+name+"&pwd="+pwd1+"&code="+code,true);
			xmlhttp.send();	
	}

}
