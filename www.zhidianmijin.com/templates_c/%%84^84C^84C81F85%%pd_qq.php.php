<?php /* Smarty version 2.6.6, created on 2009-06-28 07:38:55
         compiled from qinglv/pd_qq.php */ ?>
<SCRIPT language=javascript>
<!--
function Check(theForm)
{
var qq1 = theForm.qq1.value;
if (qq1 == "") 
{
alert("������QQ��");
theForm.qq1.value="";
theForm.qq1.focus();
return false;
}
var qq2 = theForm.qq2.value;
if (qq2 == "") 
{
alert("������Է�QQ��");
theForm.qq2.value="";
theForm.qq2.focus();
return false;
}
}

//-->
</SCRIPT>
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td width="79%" class="ttd"><span class="red">QQ�����ϵ��ʾ:</span><br>
    ��֪��QQ���Ѹ��ҵĹ�ϵ�����Ͻ������ȤζС���԰�~~~ ^_^</td>
    <td width="21%" class="ttd"><img src="diary_book/images/qqpd.jpg" width="120" height="90"></td>
</tr>
<form name="form1" onSubmit="return Check(this)" method="post" action="">
<input type="hidden" name="act" value="ok" />
  <tr>
    <td colspan="2" class="new">
�ҵ�QQ��
  <input name="qq1" type="text" id="qq1" size="20"  onKeyUp="value=value.replace(/[^\d]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" />
  �Է�QQ:
  <input name="qq2" type="text" id="qq2" size="20"  onKeyUp="value=value.replace(/[^\d]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" />
  <input type="submit" name="Submit1" value="��ʼ����" style="cursor:hand;"></form></td>
    </tr>
<?php if (( isset ( $_REQUEST['act'] ) && $_REQUEST['act'] == 'ok' )): ?>
<tr bgcolor="#EFF8FE">
<td class="new" colspan="2" valign="middle">
<br>˫��QQ��<font color=blue><?php echo $this->_tpl_vars['strname1']; ?>
&nbsp;<?php echo $this->_tpl_vars['strname2']; ?>
 </font><br><br>
<font color=cc6600>��ϵ���ܣ�</font><?php echo $this->_tpl_vars['intro']; ?>
 <font color=red>(��������)</font><br><br>
</td>
</tr><?php endif; ?>
</tbody>
</table>