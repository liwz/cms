
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td width="78%" class="ttd"><span class="red">������Ů:</span>
    <br> <br>��Ԥ��һ�£����ǻ������б�������Ů������<br>
    �����������ԡ��幬��ص�������ŮԤ����������ο�������̫�ţ� 
�����·���ũ��Ϊ׼�������£��ϰ������ϸ��·ݼ��㣬�°������¸��·ݼ��㡣  </td>
    <td width="22%" class="ttd"><img src="<? $siteTheme ?>/images/snsn.jpg" width="140" height="80"></td>
</tr>
<? if (isset($smarty.request.act) && $smarty.request.act=="ok") ?>

  <tr>
    <td colspan="2" class="new"><font color="#0000FF"><? $mqname?></font>������<br>
    <? if ($smarty.request.cs==1) ?>
��ϲ�����������㣬��ܿ��ܻ���һ��&nbsp;<font color="#FF0000"><? $baby?></font>
<? else ?>
�����������<font color="#FF0000"><? $baby?></font>����ô��������ũ�� <font color="#0000FF">���� ��<? $yuef?>&nbsp;&nbsp;���꣺<? $nyuef?></font> ���еĻ�����Ƚϴ�<? /if ?><br><br>
      <a class="red" href="?m=6&sm=9">���²���</a>  </td>
<? else  ?>
  <tr>
    <td colspan="2" class="ttd"><font color="#FF0000">*����Ϊĸ���������䣬�·�ָ�����·ݣ���ũ��Ϊ׼�������£��ϰ������ϸ��·ݼ��㣬�°������¸��·ݼ��㡣</font>
   </td>
    </tr>  <tr>
    <td colspan="2" class="ttd"><font color="#0000ff">*��ҪԤ�ⱦ���Ա�</font>
   </td>
    </tr><form name="theform" method="post" action="">
<input type="hidden" name="act" value="ok" />
<input type="hidden" name="cs" value="1" /><tr>
    <td colspan="2" class="ttd">�ҵķ����У�<input name="mqname" type="text">&nbsp;,���근��(����)��:<select name="nn" size="1" style="font-size: 9pt">
      ><?selectStepOptions start=18 end=45 selected=22?>
     </select>&nbsp;,���е��·�(ũ��)��:<select name="yue" size="1" style="font-size: 9pt">
      ><?selectStepOptions start=1 end=12?>
     </select>�� &nbsp;<input name="sub" type="submit" value="��ʼ����">
   </td></form>
    </tr> <tr>
    <td colspan="2" class="ttd"><font color="#0000ff">*��Ҫ��ѯ�ʺϻ��е��·ݣ�</font>
   </td>
    </tr><form name="theform" method="post" action="">
<input type="hidden" name="act" value="ok" />
<input type="hidden" name="cs" value="2" /><tr>
    <td colspan="2" class="new">�ҵķ����У�<input name="mqname" type="text">&nbsp;,���근��(����)��:<select name="nn" size="1" style="font-size: 9pt">
      >
      <?selectStepOptions start=18 end=45 selected=22?>
     </select>&nbsp;,�Ҽƻ�����:<select name="snsn" size="1" style="font-size: 9pt">
       <option value="��">С����</option>
       <option value="Ů">С����</option>

     </select>
     &nbsp;
     <input name="sub" type="submit" value="��ʼ����">
   </td></form>
    </tr><? /if ?>
</tbody>
</table>
 