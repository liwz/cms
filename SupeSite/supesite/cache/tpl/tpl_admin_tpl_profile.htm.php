<?php if(!defined('IN_SUPESITE')) exit('Access Denied'); ?><table summary="" id="pagehead" cellpadding="0" cellspacing="0" border="0" width="100%">
<tr>
<td><h1>��������</h1></td>
<td class="actions">
&nbsp;
</td>
</tr>
</table>
<div class="colorarea01">
<table cellspacing="2" cellpadding="2" class="helptable">
<tr>
<td>
<ul>
<li>����д�������Ǳ��ܵģ�ȡ�����붼�����͵������䡣</li>
</ul>
</td>
</tr>
</table>
</div>
<form action="<?=$cpurl?>?action=profile&op" method="post">
<input type="hidden" name="formhash" value="<?php echo formhash();; ?>" />
<table cellspacing="0" cellpadding="0" width="100%" class="maintable">
<tr>
<th >��¼����</th>
  <td ><input type="password" name="password" /></td>
</tr>
<tr>
<th>��ʵ����</th>
<td><input type="text" name="email" value="<?=$email?>" /></td>
</tr>
</table>
<div class="buttons">
<input type="submit" class="submit" value="�ύ����" name="updateemailvalue"/>
<input type="reset" value="����" name="thevaluereset"/>
</div>
</form>