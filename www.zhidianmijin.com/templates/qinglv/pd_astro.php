
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td width="79%" class="ttd"><span class="red">�����Զ���:</span><br>
    ������<strong>�������</strong>����ѵ��������ܱ�֤��İ�����������������Ϊ�����ǿ�ѧ��������������������𣿲����Ż��ţ�����һ�¿�����~~~~~<BR></td>
    <td width="21%" class="ttd"><img src="<? $siteTheme ?>/images/pdxz.jpg" width="134" height="84"></td>
</tr>
<form name="form1"  method="post" action="">
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
<? if (isset($smarty.request.act) && $smarty.request.act=="ok") ?>

<tr bgcolor="#EFF8FE">
<td class="new" colspan="2" valign="middle">
<br>˫��������<font color=blue><? $title ?> </font><br><br>
<font color=red><? $content1 ?></font><br><br>
<? $content2 ?> <br>
</td>
</tr><? /if ?>
</tbody>
</table>
