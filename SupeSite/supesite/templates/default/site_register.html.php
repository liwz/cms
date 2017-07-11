<?exit?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=$_SC[charset]" />
<title>$title $_SCONFIG[seotitle] - Powered by SupeSite</title>
<meta name="keywords" content="$keywords $_SCONFIG[seokeywords]" />
<meta name="description" content="$description $_SCONFIG[seodescription]" />
<meta name="generator" content="SupeSite 7.0.0" />
<meta name="author" content="SupeSite Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2009 Comsenz Inc." />
<link rel="stylesheet" type="text/css" href="{S_URL}/templates/$_SCONFIG[template]/css/common.css" />
$_SCONFIG[seohead]
<script type="text/javascript">
var siteUrl = "{S_URL}";
</script>
<script src="{S_URL}/include/js/ajax.js" type="text/javascript" language="javascript"></script>
<script src="{S_URL}/include/js/common.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript" src="{S_URL}/templates/$_SCONFIG[template]/js/common.js"></script>
</head>

<body>
<div id="ajaxwaitid"></div>
<div id="append_parent"></div>
<div id="header">
<h2><a href="{S_URL}/"><img src="{S_URL}/images/logo.gif" alt="$_SCONFIG[sitename]" /></a></h2>
</div><!--header end-->

<div id="nav">
	<div class="main_nav">
		<ul>
			<!--{if empty($_SCONFIG['defaultchannel'])}-->
			<li><a href="{S_URL}/index.php">��ҳ</a></li>
			<!--{/if}-->
			<!--{loop $channels['menus'] $key $value}-->
			<li><a href="$value[url]">$value[name]</a></li>
			<!--{/loop}-->
		</ul>
	</div>
</div><!--nav end-->

<div class="column global_module bg_fff">
	<div class="global_module3_caption"><h3>���λ�ã�<a href="#">�û�ע��</a></h3></div>
		<div class="regi_caption">
			<h1>ע�᱾վ�ʺ�</h1>
			<p><span style="color:#F00; vertical-align:middle;">*</span> ��������д������Ϣ����ע�ᡣע����ɺ󣬸��ʺŽ���Ϊ���ڱ�վ��ͨ���ʺţ����������ܱ�վ�ṩ�ĸ��ַ���</p>
		</div>
	<div class="regi_content">
		<form id="registerform" name="registerform" action="{S_URL}/do.php?action=register" method="post">
		<table>
			<tbody>
				<!--{if empty($_SCONFIG['noseccode'])}-->
				<tr>
					<th width="100">��֤��</th>
					<td>
						<script>seccode();</script> 
						<p style="padding-bottom:6px;">�����������4λ��ĸ�����֣��������<a href="javascript:updateseccode();">����һ��</a></p>
						<input id="seccode" class="input_tx" type="text" autocomplete="off" tabindex="1" onblur="checkSeccode()" size="12" value="" name="seccode"/>
						<span id="checkseccode" class="warning">&nbsp;</span>
					</td>
				</tr>
				<!--{/if}-->
				<tr>
					<th width="100">�û���</th>
					<td><input size="30" type="text" onblur="checkUserName()" class="input_tx" value="" id="username" name="username" tabindex="2" /> <span id="checkusername" class="warning">&nbsp;</span></td>
				</tr>
				<tr>
					<th>����</th>
					<td>
					<p><input size="30" type="password" onblur="checkPassword()" onkeyup="checkPwd(this.value);"class="input_tx" value=""  name="password" id="password" tabindex="3" /> <span id="checkpassword">&nbsp;</span></p>
					<style>
						.psdiv0,.psdiv1,.psdiv2,.psdiv3,.psdiv4{position:relative;height:30px;color:#666}/*����ǿ������*/
						.strongdepict{position:absolute; width:300px;left:0px;top:3px}/*����ǿ�ȹ̶�����*/
						.strongbg{position:absolute;left:0px;top:22px;width:235px!important;width:234px;height:10px;background-color:#E0E0E0; font-size:0px;line-height:0px}/*��ɫǿ�ȱ���*/
						.strong{float:left;font-size:0px;line-height:0px;height:10px}/*ɫ�鱳��*/
						
						.psdiv0 span{display:none}
						.psdiv1 span{display:inline;color:#F00}
						.psdiv2 span{display:inline;color:#C48002}
						.psdiv3 span{display:inline;color:#2CA4DE}
						.psdiv4 span{display:inline;color:#063}
						
						.psdiv0 .strong{ width:0px}
						.psdiv1 .strong{ width:25%;background-color:#F00}
						.psdiv2 .strong{ width:50%;background-color:#F90}
						.psdiv3 .strong{ width:75%;background-color:#2CA4DE}
						.psdiv4 .strong{ width:100%;background-color:#063}
					</style>
					<div class="psdiv0" id="chkpswd">
						<div class="strongdepict">���밲ȫ�̶ȣ�<span id="chkpswdcnt">̫��</span></div>
						<div class="strongbg">
							<div class="strong"></div>			
						</div>
					</div>
					</td>
				</tr>
				<tr>
					<th>ȷ������</th>
					<td><input size="30" type="password" onblur="checkPassword2()" class="input_tx" value="" id="password2" name="password2" tabindex="4" /> <span class="warning" id="checkpassword2">&nbsp;</span></td>
				</tr>
				<tr>
					<th>����</th>
					<td><input size="30" type="text" class="input_tx" id="email" name="email" value="@" tabindex="5" /><br />��׼ȷ�����������䣬���������룬������ʹ���ʼ�֪ͨ����ʱ���ᷢ���ʼ��������䡣</td>
				</tr>
				<!--{if $register_rule}-->
				<tr><th>��������</th>
					<td><div name="rule" style="border:1px solid #C3C3C3;width:500px;height:100px; margin-bottom:5px;overflow:auto;padding:5px;">$register_rule</div>
					<input type="checkbox" name="accede" id="accede" value="1"><label for="accede">�����Ķ�����ͬ�����Ϸ�������</label>
					<script type="text/javascript">
						function checkClause() {
							if($('accede').checked) {
								return true;
							} else {
								alert("������ͬ�������������ע��");
								return false;
							}
						}
					</script>
					</td>
				</tr>
				<!--{/if}-->
				<tr>
					<th></th>
					<td>
					<input type="hidden" name="formhash" value="<!--{eval echo formhash();}-->" />
					<input type="hidden" name="refer" value="$refer" />
					<input type="hidden" id="registersubmit" name="registersubmit" value="ע��" />
					<input type="submit" value="ע��" class="input_search" onclick="ajaxpost('registerform', 'registerstatus', 'register');return false;" tabindex="6" /></td>
				</tr>
				<tr><th>&nbsp;</th><td id="registerstatus" style="color:red; font-weight:bold;"></td></tr>
			</tbody>
		</table>
		</form>
		</div>
	</div><!--register end-->
	</div><!--column end-->
</div>
</div><!--pagebody end-->

<script type="text/javascript">
<!--

	$('username').focus();
	function register(show_id, result) {
		if(result) {
			$('registersubmit').disabled = true;
			window.location.href = "$refer";
		} else {
			updateseccode();
		}
	}
	var lastUserName = lastPassword = lastEmail = lastSecCode = '';
	function checkUserName() {
		if($('username').value.length == 0) return;
		var userName = trim($('username').value);
		if(userName == lastUserName) {
			return;
		} else {
			lastUserName = userName;
		}
		var cu = $('checkusername');
		var unLen = userName.replace(/[^\x00-\xff]/g, "**").length;

		if(unLen < 3 || unLen > 15) {
			warning(cu, unLen < 3 ? '�û���С��3���ַ�' : '�û������� 15 ���ַ�');
			return;
		}
		ajaxresponse('checkusername', 'op=checkusername&username=' + (is_ie && document.charset == 'utf-8' ? encodeURIComponent(userName) : userName));
	}
	function checkPassword(confirm) {
		var password = $('password').value;
		if(!confirm && password == lastPassword) {
			return;
		} else {
			lastPassword = password;
		}
		var cp = $('checkpassword');
		if(password == '' || /[\'\"\\]/.test(password)) {
			warning(cp, '����ջ�����Ƿ��ַ�');
			return false;
		} else {
			cp.style.display = '';
			cp.innerHTML = '<img src="images/base/check_right.gif" width="13" height="13">';
			if(!confirm) {
				checkPassword2(true);
			}
			return true;
		}
	}
	function checkPassword2(confirm) {
		var password = $('password').value;
		var password2 = $('password2').value;
		var cp2 = $('checkpassword2');
		if(password2 != '') {
			checkPassword(true);
		}
		if(password == '' || (confirm && password2 == '')) {
			cp2.style.display = 'none';
			return;
		}
		if(password != password2) {
			warning(cp2, '������������벻һ��');
		} else {
			cp2.style.display = '';
			cp2.innerHTML = '<img src="images/base/check_right.gif" width="13" height="13">';
		}
	}
	function checkSeccode() {
		var seccodeVerify = $('seccode').value;
		if(seccodeVerify == lastSecCode) {
			return;
		} else {
			lastSecCode = seccodeVerify;
		}
		ajaxresponse('checkseccode', 'op=checkseccode&seccode=' + (is_ie && document.charset == 'utf-8' ? encodeURIComponent(seccodeVerify) : seccodeVerify));
	}
	function ajaxresponse(objname, data) {
		var x = new Ajax('XML', objname);
		x.get('{S_URL_ALL}/do.php?action=register&' + data, function(s){
			var obj = $(objname);
			if(trim(s) == 'succeed') {
				obj.style.display = '';
				obj.innerHTML = '<img src="images/base/check_right.gif" width="13" height="13">';
				obj.className = "warning";
			} else {
				warning(obj, s);
			}
		});
	}
	function warning(obj, msg) {
		if((ton = obj.id.substr(5, obj.id.length)) != 'password2') {
			$(ton).select();
		}
		obj.style.display = '';
		obj.innerHTML = '<img src="images/base/check_error.gif" width="13" height="13"> &nbsp; ' + msg;
		obj.className = "warning";
	}

	function checkPwd(pwd){

		if (pwd == "") {
			$("chkpswd").className = "psdiv0";
			$("chkpswdcnt").innerHTML = "";
		} else if (pwd.length < 3) {
			$("chkpswd").className = "psdiv1";
			$("chkpswdcnt").innerHTML = "̫��";
		} else if(!isPassword(pwd) || !/^[^%&]*$/.test(pwd)) {
			$("chkpswd").className = "psdiv0";
			$("chkpswdcnt").innerHTML = "";
		} else {
			var csint = checkStrong(pwd);
			switch(csint) {
				case 1:
					$("chkpswdcnt").innerHTML = "����";
					$( "chkpswd" ).className = "psdiv"+(csint + 1);
					break;
				case 2:
					$("chkpswdcnt").innerHTML = "һ��";
					$( "chkpswd" ).className = "psdiv"+(csint + 1);
					break;
				case 3:		
					$("chkpswdcnt").innerHTML = "��ǿ";
					$("chkpswd").className = "psdiv"+(csint + 1);
					break;
			}
		}
	}
	function isPassword(str){
		if (str.length < 3) return false;
		var len;
		var i;
		len = 0;
		for (i=0;i<str.length;i++){
			if (str.charCodeAt(i)>255) return false;
		}
		return true;
	}
	function charMode(iN){ 
		if (iN>=48 && iN <=57) //���� 
		return 1; 
		if (iN>=65 && iN <=90) //��д��ĸ 
		return 2; 
		if (iN>=97 && iN <=122) //Сд 
		return 4; 
		else 
		return 8; //�����ַ� 
	} 
	//�������ǰ���뵱��һ���ж�����ģʽ 
	function bitTotal(num){ 
		modes=0; 
		for (i=0;i<4;i++){ 
			if (num & 1) modes++; 
			num>>>=1; 
		} 
		return modes; 
	} 

	//���������ǿ�ȼ��� 
	function checkStrong(pwd){ 
		modes=0; 
		for (i=0;i<pwd.length;i++){ 
			//����ÿһ���ַ������ͳ��һ���ж�����ģʽ. 
			modes|=charMode(pwd.charCodeAt(i)); 
		} 
		return bitTotal(modes);
	}
//-->
</script>

<!--{template footer}-->