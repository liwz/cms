<?php /* Smarty version 2.6.6, created on 2009-06-28 14:16:16
         compiled from yuce/xjyc.php */ ?>

  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td width="79%" class="ttd"><span class="red">�ľ�Ԥ��:</span>
    <br>
���ǻ�Ī�����ľ���Ϊ���������ܷ��겻���������Լ�Ҫ�������������ľ�Ԥ����ʲô���ľ���ԭ���ľ���������ʲô�����������ľ�������ô˵�ɣ�</td>
    <td width="21%" class="ttd"><img src="diary_book/images/xjyc.gif" width="128" height="128"></td>
</tr>
<form name="form1" onSubmit="return submitchecken()" method="post" action="">
<input type="hidden" name="act" value="ok" />
  <tr>
    <td colspan="2" class="new">&nbsp;�ľ�ʱ�䣺<select id="stime" style="WIDTH: 100px" name="stime" size="1">
<option value="1" selected="">23-01[��ʱ]</option>
<option value="2">01-03[��ʱ]</option>
<option value="3">03-05[��ʱ]</option>
<option value="4">05-07[îʱ]</option>
<option value="5">07-09[��ʱ]</option>
<option value="6">09-11[��ʱ]</option>
<option value="7">11-13[��ʱ]</option>
<option value="8">13-15[δʱ]</option>
<option value="9">15-17[��ʱ]</option>
<option value="10">17-19[��ʱ]</option>
<option value="11">19-21[��ʱ]</option>
<option value="12">21-23[��ʱ]</option>
</select> <input type="submit" value="��ʼ����" style="cursor:hand;" /></form></td>
    </tr>

<?php if (( $this->_tpl_vars['rs'] )): ?>
<tr bgcolor="#EFF8FE">
<td class="new" colspan="2" valign="middle">
<br><br>&nbsp;Ԥ�������£�<br><br>&nbsp;<font color=blue><?php echo $this->_tpl_vars['rs']['content']; ?>
</font><br><br>
</td>
</tr><?php endif; ?>
</tbody>
</table>