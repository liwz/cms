<?php /* Smarty version 2.6.6, created on 2009-06-28 07:35:34
         compiled from qinglv/pd_sxxx.php */ ?>

  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td width="81%" class="ttd"><span class="red">��Ф���:</span><br>
    ��������ţ�������á������ߡ����򡢺����������ʮ���֡������ֶ��������������ֵģ��������������������˵ĵ���������������ܺ����ദ������˵�����Ͳ���ô�����ˡ����Ƿ񻹶����İ�����ԥ���������Ǿͽ����������ǵ���Ф�䲻��ɣ�<BR></td>
    <td width="19%" class="ttd"><img src="diary_book/images/sxpd.jpg" width="120" height="90"></td>
</tr>
<form name="form1"  method="post" action="">
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
<?php if (( isset ( $_REQUEST['act'] ) && $_REQUEST['act'] == 'sxok' )): ?>
<tr bgcolor="#EFF8FE">
<td class="new" colspan="2" valign="middle">
<br>�����Ф��<font color=blue><?php echo $this->_tpl_vars['title']; ?>
</font><br><br>
<font color=red><?php echo $this->_tpl_vars['content1']; ?>
</font><br><br>
<?php echo $this->_tpl_vars['content2']; ?>
<br>

</td>
</tr><?php endif; ?>
</tbody>
</table>  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td width="79%" class="ttd"><span class="red">Ѫ�����:</span><br>
    Ѫ����ԣ�����Ѫ�Ͳ����������˵�Ե�ֺͻ����� <BR></td>
    <td width="21%" class="ttd"><img src="diary_book/images/xxpd.jpg" width="140" height="94"></td>
</tr>
<form name="form1"  method="post" action="">
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
<?php if (( isset ( $_REQUEST['act'] ) && $_REQUEST['act'] == 'xxok' )): ?>
<tr bgcolor="#EFF8FE">
<td class="new" colspan="2" valign="middle">
<br>�����Ф��<font color=blue><?php echo $this->_tpl_vars['title1']; ?>
</font><br><br>
<font color=red><?php echo $this->_tpl_vars['title2']; ?>
</font><br><br>
<?php echo $this->_tpl_vars['content']; ?>
<br>

</td>
</tr><?php endif; ?>
</tbody>
</table>