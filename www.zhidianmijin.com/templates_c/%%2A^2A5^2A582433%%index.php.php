<?php /* Smarty version 2.6.6, created on 2009-06-28 07:36:44
         compiled from qinglv/index.php */ ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td width="79%" class="ttd"><span class="red">��    ���Զ���:</span><br>
    ������<strong>�������</strong>����ѵ��������ܱ�֤��İ�����������������Ϊ�����ǿ�ѧ��������������������𣿲����Ż��ţ�����һ�¿�����~~~~~<BR></td>
    <td width="21%" class="ttd"><img src="diary_book/images/pdxz.jpg" width="134" height="84"></td>
</tr>
<form name="form1"  method="post" action="?m=5&sm=1">
<input type="hidden" name="act" value="ok" />
  <tr>
    <td colspan="2" class="new">
�ҵ�������
  <SELECT name="p1" class="style3">
  <OPTION value=������>������</OPTION>
  <OPTION value=��ţ��>��ţ��</OPTION>
  <OPTION value=˫����>˫����</OPTION>
  <OPTION value=��з��>��з��</OPTION>
  <OPTION value=ʨ����>ʨ����</OPTION>
  <OPTION value=��Ů��>��Ů��</OPTION>
  <OPTION value=�����>�����</OPTION>
  <OPTION value=��Ы��>��Ы��</OPTION>
  <OPTION value=������>������</OPTION>
  <OPTION value=Ħ����>Ħ����</OPTION>
  <OPTION value=ˮƿ��>ˮƿ��</OPTION>
  <OPTION value=˫����>˫����</OPTION>
  </SELECT>
  ��/��������
  :
  <SELECT name="p2" class="style3">
  <OPTION value=������ selected>������</OPTION>
  <OPTION value=��ţ��>��ţ��</OPTION>
  <OPTION value=˫����>˫����</OPTION>
  <OPTION value=��з��>��з��</OPTION>
  <OPTION value=ʨ����>ʨ����</OPTION>
  <OPTION value=��Ů��>��Ů��</OPTION>
  <OPTION value=�����>�����</OPTION>
  <OPTION value=��Ы��>��Ы��</OPTION>
  <OPTION value=������>������</OPTION>
  <OPTION value=Ħ����>Ħ����</OPTION>
  <OPTION value=ˮƿ��>ˮƿ��</OPTION>
  <OPTION value=˫����>˫����</OPTION>
  </SELECT>
  <input type="submit" name="Submit1" value="��ʼ���" style="cursor:hand;">
    </form></td>
    </tr>
</tbody>
</table>
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
<form name="form1" onSubmit="return Check(this)" method="post" action="?m=5&sm=2">
<input type="hidden" name="act" value="ok" />
  <tr>
    <td colspan="2" class="new">
����������������
  <input name="name1" type="text" id="name1" size="20" onKeyUp="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" maxLength="4"> 
  �����������˵�����:
  <input name="name2" type="text" id="name2" size="20" onKeyUp="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" maxLength="4"> 
  <input type="submit" name="Submit1" value="��ʼ����" style="cursor:hand;"></form></td>
    </tr>
</tbody>
</table>

  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td width="81%" class="ttd"><span class="red">��������������:</span><br>
    ���ݡ��׾�����"��"��"��"���ۣ����������ıʻ�����һ��������������񡢵ظ��˸��ܸ�������������ϵ��������������������������ۣ�������ĸ��������ơ� </td>
    <td width="19%" class="ttd"><img src="diary_book/images/xmpd.jpg" width="105" height="140"></td>
</tr>
<form name="form1" onSubmit="return Check(this)" method="post" action="?m=5&sm=5">
<input type="hidden" name="act" value="ok" />
  <tr>
    <td colspan="2" class="new">
����������������<input name="name1" type="text" id="name1" size="20" onKeyUp="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" maxLength="4">&nbsp;<select size="1" name="xing1">
<option value="1" selected="selected">����</option>
<option value="2">����</option>
          </select>&nbsp;<select size="1" name="sex1">
<option value="��" >����</option>
<option value="Ů" >Ů��</option>
          </select>
  <tr>
    <td colspan="2" class="new">������һ������:  <input name="name2" type="text" id="name2" size="20" onKeyUp="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" maxLength="4">&nbsp;<select size="1" name="xing2">
<option value="1">����</option>
<option value="2">����</option>
</select>&nbsp;<select size="1" name="sex2">
<option value="��" >����</option>
<option value="Ů" selected >Ů��</option>
</select>
<input type="submit" name="Submit1" value="��ʼ����" style="cursor:hand;">
  </form>
    </tr></tbody>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td width="81%" class="ttd"><span class="red">��Ф���:</span><br>
    ��������ţ�������á������ߡ����򡢺����������ʮ���֡������ֶ��������������ֵģ��������������������˵ĵ���������������ܺ����ദ������˵�����Ͳ���ô�����ˡ����Ƿ񻹶����İ�����ԥ���������Ǿͽ����������ǵ���Ф�䲻��ɣ�<BR></td>
    <td width="19%" class="ttd"><img src="diary_book/images/sxpd.jpg" width="120" height="90"></td>
</tr>
<form name="form1"  method="post" action="?m=5&sm=4">
<input type="hidden" name="act" value="sxok" />
  <tr>
    <td colspan="2" class="new">
�ҵ���Ф��
  <SELECT name="p5" class="style3">
<OPTION value=��>��</OPTION>
<OPTION value=ţ>ţ</OPTION>
<OPTION value=��>��</OPTION>
<OPTION value=��>��</OPTION>
<OPTION value=��>��</OPTION>
<OPTION value=��>��</OPTION>
<OPTION value=��>��</OPTION>
<OPTION value=��>��</OPTION>
<OPTION value=��>��</OPTION>
<OPTION value=��>��</OPTION>
<OPTION value=��>��</OPTION>
<OPTION value=��>��</OPTION>
</SELECT>
  ��/������Ф
  :
  <SELECT name="p6" class="style3">
<OPTION value=�� selected>��</OPTION>
<OPTION value=ţ>ţ</OPTION>
<OPTION value=��>��</OPTION>
<OPTION value=��>��</OPTION>
<OPTION value=��>��</OPTION>
<OPTION value=��>��</OPTION>
<OPTION value=��>��</OPTION>
<OPTION value=��>��</OPTION>
<OPTION value=��>��</OPTION>
<OPTION value=��>��</OPTION>
<OPTION value=��>��</OPTION>
<OPTION value=��>��</OPTION>
</SELECT>
  <input type="submit" name="Submit1" value="��ʼ���" style="cursor:hand;">
    </form></td>
    </tr>
</tbody>
</table>  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td width="79%" class="ttd"><span class="red">Ѫ�����:</span><br>
    Ѫ����ԣ�����Ѫ�Ͳ����������˵�Ե�ֺͻ����� <BR></td>
    <td width="21%" class="ttd"><img src="diary_book/images/xxpd.jpg" width="140" height="94"></td>
</tr>
<form name="form1"  method="post" action="?m=5&sm=4">
<input type="hidden" name="act" value="xxok" />
  <tr>
    <td colspan="2" class="new">
�ҵ�Ѫ�ͣ�
  <SELECT name="p3" class="style3">
<OPTION value=AB>AB��</OPTION>
<OPTION value=A>A��</OPTION>
<OPTION value=B>B��</OPTION>
<OPTION value=O>O��</OPTION>
</SELECT>
  ��/����Ѫ��
  :
  <SELECT name="p4" class="style3">
<OPTION value=AB>AB��</OPTION>
<OPTION value=A>A��</OPTION>
<OPTION value=B>B��</OPTION>
<OPTION value=O>O��</OPTION>
</SELECT>
  <input type="submit" name="Submit1" value="��ʼ���" style="cursor:hand;">
    </form></td>
    </tr>
</tbody>
</table> <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td width="79%" class="ttd"><span class="red">QQ�����ϵ��ʾ:</span><br>
    ��֪��QQ���Ѹ��ҵĹ�ϵ�����Ͻ������ȤζС���԰�~~~ ^_^</td>
    <td width="21%" class="ttd"><img src="diary_book/images/qqpd.jpg" width="120" height="90"></td>
</tr><SCRIPT language=javascript>
<!--
function Check2(theForm2)
{
var qq1 = theForm2.qq1.value;
if (qq1 == "") 
{
alert("������QQ��");
theForm2.qq1.value="";
theForm2.qq1.focus();
return false;
}
var qq2 = theForm2.qq2.value;
if (qq2 == "") 
{
alert("������Է�QQ��");
theForm2.qq2.value="";
theForm2.qq2.focus();
return false;
}
}

//-->
</SCRIPT>  
<form name="form1" onSubmit="return Check2(this)" method="post" action="?m=5&sm=3">
<input type="hidden" name="act" value="ok" />
  <tr>
    <td colspan="2" class="new">
�ҵ�QQ��
  <input name="qq1" type="text" id="qq1" size="20"  onKeyUp="value=value.replace(/[^\d]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" />
  �Է�QQ:
  <input name="qq2" type="text" id="qq2" size="20"  onKeyUp="value=value.replace(/[^\d]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" />
  <input type="submit" name="Submit1" value="��ʼ����" style="cursor:hand;"></form></td>
    </tr>
</tbody>
</table>