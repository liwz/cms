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
if (theForm.name1.value.length < 2 || theForm.name1.value.length>4)
{
alert("��������Ӧ��2-4����֮�䣡");
theForm.name1.focus();
return (false);
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
if (theForm.name2.value.length < 2 || theForm.name2.value.length>4)
{
alert("��������Ӧ��2-4����֮�䣡");
theForm.name2.focus();
return (false);
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
  <td width="81%" class="ttd"><span class="red">��������������:</span><br>
    ���ݡ��׾�����"��"��"��"���ۣ����������ıʻ�����һ��������������񡢵ظ��˸��ܸ�������������ϵ��������������������������ۣ�������ĸ��������ơ� </td>
    <td width="19%" class="ttd"><img src="<? $siteTheme ?>/images/xmpd.jpg" width="105" height="140"></td>
</tr>
<form name="form1" onSubmit="return Check(this)" method="post" action="">
<input type="hidden" name="act" value="ok" />
  <tr>
    <td colspan="2" class="new">
����������������<input name="name1" type="text" id="name1" size="20" onKeyUp="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" maxLength="4">&nbsp;<select size="1" name="xing1">
<option value="1" <? if ($xing2=="" ) ?>selected="selected"<? /if ?>>����</option>
<option value="2"<? if ($xing2<>"" ) ?>selected="selected"<? /if ?>>����</option>
          </select>&nbsp;<select size="1" name="sex1">
<option value="��" <? if ($xingbie=="��" ) ?>selected="selected"<? /if ?>>����</option>
<option value="Ů" <? if ($xingbie=="Ů" ) ?>selected="selected"<? /if ?>>Ů��</option>
          </select>
  <tr>
    <td colspan="2" class="new">������һ������:  <input name="name2" type="text" id="name2" size="20" onKeyUp="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" maxLength="4">&nbsp;<select size="1" name="xing2">
<option value="1">����</option>
<option value="2">����</option>
</select>&nbsp;<select size="1" name="sex2">
<option value="��" <? if ($xingbie=="Ů" ) ?>selected="selected"<? /if ?>>����</option>
<option value="Ů" <? if ($xingbie=="��" ) ?>selected="selected"<? /if ?>>Ů��</option>
</select>
<input type="submit" name="Submit1" value="��ʼ����" style="cursor:hand;">
  </form>
    </tr></tbody>
</table>
<?if (isset($smarty.post.act) && $smarty.post.act=="ok") ?>
<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#5391EE"  style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">  
  <tbody>    <tr>
      <td colspan="3" class=new bgcolor="#FFFFFF">������<?  $name1 ?>  �Ա�<?  $sex1 ?>  </td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="2" cellspacing="1"  style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
        <tbody>
          <tr>
            <td bgcolor="#FFFFFF"></td>
            <td align="center" bgcolor="#FFFFFF"><font color="ababab">����</font></td>
            <td align="center" bgcolor="#FFFFFF"><font color="ababab">ƴ��</font></td>
            <td align="center" bgcolor="#FFFFFF"><font color="ababab">�ʻ�</font></td>
            <td align="center" bgcolor="#FFFFFF"><font color="ababab">����</font></td>
            </tr>
          <tr>
            <td  align="center" bgcolor="#FFFFFF" class="new2"><?  $nxing1 ?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?  $nxing1|GbToBig ?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?  $nxing11|truncate:2|c ?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?  $bihua1 ?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?  $nxing11|getzywh ?></td>
          </tr>
          <tr>
         <? if ($nxing2<>"") ?>   <td align="center" bgcolor="#FFFFFF" class="new2"><?  $nxing2 ?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?  $nxing2|GbToBig ?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?  $nxing22|c ?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?  $bihua2 ?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?  $nxing22|getzywh ?></td>
          </tr><? /if ?>
          <tr>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?  $nming1 ?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?  $nming1|GbToBig ?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?  $nming12|c ?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?  $bihua3 ?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?  $nming12|getzywh ?></td>
          </tr>
          <? if ($nming2<>"") ?><tr>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?  $nming2 ?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?  $nming2|GbToBig ?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?  $nming22|c ?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?  $bihua4 ?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?  $nming22|getzywh ?></td>
          </tr><? /if ?>
        </tbody>
      </table></td>
      <td width="25%" colspan="-3" align="center" bgcolor="#FFFFFF"  class="new2">���-&gt; <?  $tiange1 ?> (<?  $tiange1|getsancai ?>) 
 ->(<font color=red><?  $tgjx ?></font>)<br />
      <p>�˸�-&gt; <?  $renge1 ?> (<?  $renge1|getsancai ?>)
 ->(<font color=red><?  $rgjx ?></font>)</p>        <p>�ظ�-&gt; <?  $dige1 ?> (<?  $dige1|getsancai ?>)
 ->(<font color=red><?  $dgjx ?></font>)</p></td>
      <td width="25%"  class="new2" align="center" bgcolor="#FFFFFF">���-&gt; <?  $waige1 ?> (<?  $waige1|getsancai ?>)
 ->(<font color=red><?  $wgjx ?></font>)<br />
      <p>��</p>        <p>�ܸ�-&gt; <?  $zhongge1 ?> (<?  $zhongge1|getsancai ?>)
 ->(<font color=red><?  $zgjx ?></font>)</p></td>
    </tr>
    <tr>
      <td colspan="3" class=new bgcolor="#FFFFFF">�����̺��ĸ��Է�����<?  $xg1 ?><? $tiangee1 ?>=<? $rengee1 ?>=<? $digee1 ?></td>
    </tr>
  </tbody>
</table>

<table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#5391EE"  style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">  
  <tbody> <tr>
      <td colspan="3" class=new bgcolor="#FFFFFF">������<?  $name2 ?>  �Ա�<?  $sex2 ?>  </td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="2" cellspacing="1"  style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
        <tbody>
          <tr>
            <td bgcolor="#FFFFFF"></td>
            <td align="center" bgcolor="#FFFFFF"><font color="ababab">����</font></td>
            <td align="center" bgcolor="#FFFFFF"><font color="ababab">ƴ��</font></td>
            <td align="center" bgcolor="#FFFFFF"><font color="ababab">�ʻ�</font></td>
            <td align="center" bgcolor="#FFFFFF"><font color="ababab">����</font></td>
            </tr>
          <tr>
            <td  align="center" bgcolor="#FFFFFF" class="new2"><?  $n2xing1 ?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?  $n2xing1|GbToBig ?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?  $n2xing11|truncate:2|c ?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?  $nbihua1 ?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?  $n2xing11|getzywh ?></td>
          </tr>
          <tr>
         <? if ($n2xing2<>"") ?>   <td align="center" bgcolor="#FFFFFF" class="new2"><?  $n2xing2 ?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?  $n2xing2|GbToBig ?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?  $n2xing22|c ?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?  $nbihua2 ?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?  $n2xing22|getzywh ?></td>
          </tr><? /if ?>
          <tr>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?  $n2ming1 ?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?  $n2ming1|GbToBig ?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?  $n2ming12|c ?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?  $nbihua3 ?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?  $n2ming12|getzywh ?></td>
          </tr>
          <? if ($n2ming2<>"") ?><tr>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?  $n2ming2 ?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?  $n2ming2|GbToBig ?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?  $n2ming22|c ?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?  $nbihua4 ?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?  $n2ming22|getzywh ?></td>
          </tr><? /if ?>
        </tbody>
      </table></td>
      <td width="25%" colspan="-3" align="center" bgcolor="#FFFFFF"  class="new2">���-&gt; <?  $ntiange1 ?> (<?  $ntiange1|getsancai ?>) 
 ->(<font color=red><?  $tgjx ?></font>)<br />
      <p>�˸�-&gt; <?  $nrenge1 ?> (<?  $nrenge1|getsancai ?>)
 ->(<font color=red><?  $rgjx ?></font>)</p>        <p>�ظ�-&gt; <?  $ndige1 ?> (<?  $ndige1|getsancai ?>)
 ->(<font color=red><?  $dgjx ?></font>)</p></td>
      <td width="25%"  class="new2" align="center" bgcolor="#FFFFFF">���-&gt; <?  $nwaige1 ?> (<?  $nwaige1|getsancai ?>)
 ->(<font color=red><?  $wgjx ?></font>)<br />
      <p>��</p>        <p>�ܸ�-&gt; <?  $nzhongge1 ?> (<?  $nzhongge1|getsancai ?>)
 ->(<font color=red><?  $zgjx ?></font>)</p></td>
    </tr>
    <tr>
      <td colspan="3" class=new bgcolor="#FFFFFF">�����̺��ĸ��Է�����<?  $xg1 ?></td>
    </tr>
  </tbody>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
      <tr>
        <TD class=ttd>����������[<?  $name1 ?>]��[<?  $name2 ?>]����������������£�</TD>
      </tr>      <tr>
        <TD class=new>����Ե��ָ����<span class="pf"><?  $zf  ?></span></TD>
        </tr>  <tr>
        <TD class=new><? if ($sex1==$sex2) ?><font color=red>��վ�ǰ��й�����ѧ��һЩ���㷽��������ģ���ʱ��֧��ͬ��Ե�ݵĲ���</font><?  else ?><font color=green>
		 <? if ($zf<60) ?>���ǵ����������ܲ���̫�ϣ��������������������ø�������˴˵�Ŭ��Ҳ�������Ǹ��ƹ�ϵ����ס��������Ϊ��
		<? elseif ($zf<70 and $zf>=60) ?>
		���ǵ����������ϳ̶����������������������������ø��󣬼���Ŭ�����ƹ�ϵ��������ǵĹ�ϵ�а����ģ� 
		<?  elseif ( $zf<80 and $zf>=70) ?>���ǵ�����������һ�㣡 
		<?  elseif ( $zf<80 and $zf>=70) ?>���ǵ����������ϳ̶Ȼ�����Ӵ�� 
		<?  elseif ($zf<90 and $zf>=80) ?>
		���ǵ����������ϳ̶��൱���� 
		<?  elseif ( $zf>=90) ?>
		���ǵ����������ϳ̶�̫���ˣ�����ϲ��</font><? if ($name1==$name2) ?><br /><font color=#0000ff>^_^ ������ͬ��ͬ�������Ӵ��</font> <? /if ?><? /if ?>
		<? /if ?></TD>
        </tr>
    </TBODY>
</TABLE>
<? /if ?>

