<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td width="78%" class="ttd"><span class="red">���뼪��:</span>
    <br> <br>
    ���������ϵͳ���Է����ֻ����롢�绰���롢QQ����Ⱥ���������ס���Щ�˻��ʣ�����Ϊʲô���ܻ�Ӱ��һ���˵����ƣ���ʵ�������������ˮ��Ӱ���������˵�������һ���ġ���Ȼ��ֻ��һ�����룬����������������ϢϢ��أ�Ҳ������ܶ��˹�ͨ�����������ԡ������롺�ס���ϵ�ǳ��󣬵�ȷ��������� </td>
    <td width="22%" class="ttd"><img src="../images/hm.gif" width="142" height="155"></td>
</tr>
<form name="theform" onSubmit="return checkjx();" method="post" action="">
<input type="hidden" name="act" value="ok" />
  <tr>
    <td colspan="2" class="ttd">
������Ҫ�����ĺ��룺<input type="text" name="word" size="20" maxlength="20" onKeyUp="value=value.replace(/[^\d]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" />
�������ͣ�<input id="qq" type=radio name=k value="QQ����" checked>
          <label for="qq">QQ��</label> <input id="sj" type=radio name=k value="�ֻ�����">
          <label for="sj">�ֻ���</label> <input id="qt" type=radio name=k value="">
          <label for="qt">��������</label>
<input type="submit" name="Submit1" value="���̷���" style="cursor:hand;"></form></td>
    </tr>
<? if ($word) ?>
<tr bgcolor="#EFF8FE">
<td class="ttd" colspan="2" valign="middle">�������ĺ��룺<? $k ?> <span class="red"><? $word ?></span></td>
</tr><tr bgcolor="#EFF8FE">
<td class="ttd" colspan="2" valign="middle">���뼪�׷�����<font color=blue><strong><? $title ?></strong></font> <span class="red"><? $jx ?></span>
</td>
</tr><tr bgcolor="#EFF8FE">
<td class="new" colspan="2" valign="middle">���˸��Է�����<? $content ?>
</td>
</tr>
<? /if ?>
</tbody>
</table>
