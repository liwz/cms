<?php /* Smarty version 2.6.6, created on 2009-06-28 07:25:06
         compiled from qinglv/pd_name.php */ ?>
<SCRIPT language=javascript>
<!--
function Check(theForm)
{
var name1 = theForm.name1.value;
if (name1 == "") 
{
alert("����������������");
theForm.name1.value="";
theForm.name1.focus();
return false;
}
if (name1.search(/[`1234567890-=\~!@#$%^&*()_+|<>;':",.?/ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz]/) != -1) 
{
alert("�����������庺�֣�");
theForm.name1.value = "";
theForm.name1.focus();
return false;
}
var name2 = theForm.name2.value;
if (name2 == "") 
{
alert("�����������˵����֣�");
theForm.name2.value="";
theForm.name2.focus();
return false;
}
if (name2.search(/[`1234567890-=\~!@#$%^&*()_+|<>;':",.?/ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz]/) != -1) 
{
alert("�����������庺�֣�");
theForm.name2.value = "";
theForm.name2.focus();
return false;
}

}

//-->
</SCRIPT>

  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td width="79%" class="ttd"><span class="red">������Թ�ϵ��ʾ:</span><br>
    �������о��������˶��ٰ��أ���������Ҳû��������ȫ˵�ƣ������и�Ȥζ��Ϸ��ͨ�������ʻ���������Ͱ��˵Ĺ�ϵ������������</td>
    <td width="21%" class="ttd"><img src="diary_book/images/pd_name.jpg" width="139" height="104"></td>
</tr>
<form name="form1" onSubmit="return Check(this)" method="post" action="">
<input type="hidden" name="act" value="ok" />
  <tr>
    <td colspan="2" class="new">
����������������
  <input name="name1" type="text" id="name1" size="20" onKeyUp="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" maxLength="4"> 
  �����������˵�����:
  <input name="name2" type="text" id="name2" size="20" onKeyUp="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" maxLength="4"> 
  <input type="submit" name="Submit1" value="��ʼ����" style="cursor:hand;"></form></td>
    </tr>
<?php if (( isset ( $_REQUEST['act'] ) && $_REQUEST['act'] == 'ok' )): ?>
<tr bgcolor="#EFF8FE">
<td class="new" colspan="2" valign="middle">
<br>˫��������<font color=blue><?php echo $this->_tpl_vars['strname1']; ?>
&nbsp;<?php echo $this->_tpl_vars['strname2']; ?>
 </font><br><br>
<font color=cc6600>��ϵ���ܣ�</font><?php echo $this->_tpl_vars['intro']; ?>
<font color=red>(��������)</font><br><br>
</td>
</tr><?php endif; ?>
</tbody>
</table>