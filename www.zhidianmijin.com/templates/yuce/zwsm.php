<SCRIPT language="JavaScript">
<!--
function submitchecken() {
if (document.form1.zwdm.value == "") {
alert("����������ָ�ƴ��룡");
document.form1.zwdm.focus();
return false;
}
if (document.form1.zwdm.value.length != 5) {
alert("ָ�ƴ����������Ӧ��Ϊ5��X��O����ĸ��");
document.form1.zwdm.focus();
return false;
}
return true;
}
//-->
</SCRIPT>

  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td width="63%" class="ttd"><span class="red">ָ��Ԥ��:</span>
    <br>
    ���о����淢�֣��˵��Ը������������ġ�������ֵ��ǣ��˵�ָ��Ҳ����������ġ������Ͼ����Ҳ�������ָ����ȫ��ͬ���ˣ����ԡ�ָ�ơ��ͱ�������������ϵ���Ҫ����֮һ����Ȼ���ǵ����������Ŵ�����ɣ������Ż����ᷢ���仯��ֻ��ָ��ʼ�ղ��ᷢ���仯��ָ�ƣ����¿ɷ�Ϊ�����ơ����ֽж�����ᣩ�͡����ơ����ֽ����������֡�������״�Ĳ�ͬ�����Ը������Ҳ����ͬ���벻���֪����֮��� 
����Ĳ���������ͨ��ָ���о��˵��Ը񣬸���ʹ�����Լ������˵��Ը���һ�����˽⣬��������̩Ȼ��֮���������£�<font color=red>�����֣�Ů���֡�</font><font color=blue>��Ĵָ��ʼ����������ᣩ��O(OPQ��O��������0����������X��XYZ��X����������5��ָ�ƴ��룬Ȼ�󰴡����̲��㡷��ť�����������</font></td>
    <td width="37%" class="ttd"><img src="<? $siteTheme ?>/images/zw.gif" width="258" height="200"></td>
</tr>
<form name="form1" onSubmit="return submitchecken()" method="post" action="">
<input type="hidden" name="act" value="ok" />
  <tr>
    <td colspan="2" class="new">
����������ָ�ƴ��룺<input name="zwdm" type="text" id="zwdm" size="20" maxLength="5"> 
<input type="submit" name="Submit1" value="���̲���" style="cursor:hand;"></form></td>
    </tr>
<? if ($rs) ?>

<tr bgcolor="#EFF8FE">
<td class="new" colspan="2" valign="middle">
����ָ�ƴ���Ϊ��<font color=blue><? $rs.zhiwen ?></font><br><br>
�Ը������<font color=ff1100><? $rs.jiexi ?></font>
</td>
</tr><? /if ?>
</tbody>
</table>
