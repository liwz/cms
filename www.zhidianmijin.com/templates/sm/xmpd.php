<?if (!isset($smarty.post.act) || $smarty.post.act<>"ok")?>
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
</SCRIPT><table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">  
  <tbody>
  <form name="form1" method="post" onSubmit="return Check(this)"  action=""> <tr>
      <td class=new bgcolor="#FFFFFF">��Բ��� <input name="fs" type="radio" onClick="javacript:document.getElementById('fs11').style.display='none';document.getElementById('fs21').style.display='none';" value="0" checked="" />�����԰�����ϳ̶ȡ�<input type="radio" name="fs" value="1" onClick="javacript:document.getElementById('fs11').style.display='block';document.getElementById('fs21').style.display='block';" />ͬʱ���԰�����ϳ̶�

    </tr>  <tr>
      <td class=new bgcolor="#FFFFFF"><strong>�������һ��������</strong>
          <input name="name1" type="text" value="<?$xing1?><?$xing2?><?$ming1?><?$ming2?>" />
          &nbsp;
          <select size="1" name="xing1">
<option value="1" <?if (!$xing2) ?>selected="selected"<?/if?>>����</option>
<option value="2"<?if ($xing2<>"") ?>selected="selected"<?/if?>>����</option>
          </select>
          &nbsp;
          <select size="1" name="sex1">
<option value="��" <?if ($xingbie=="��") ?>selected="selected"<?/if?>>����</option>
<option value="Ů" <?if ($xingbie=="Ů") ?>selected="selected"<?/if?>>Ů��</option>
          </select><br /><br /><div id="fs11" style="display:none">
<div class="divh2"></div>����/�������գ�<select size="1" name="y1"><?selectStepOptions start=1900 end=$_thisYear selected=$nian1 default=1980?></select>��<select name="m1" size="1"><?selectStepOptions start=1 end=12 selected=$yue1 default=$_thisMonth?></select>��<select name="d1" size="1"><?selectStepOptions start=1 end=31 selected=$ri1 default=$_thisDay?></select>��<select size="1" name="h1"> <?selectStepOptions start=0 end=23 selected=$hh1?> </select>��<select size="1" name="f1"><option value="0">δ֪</option>
		<?selectStepOptions start=0 end=59 selected=$mm1?>
		</select>��&nbsp;<a title="�����ֻ֪�����յ�ũ�����ڣ���Ҫ�����������ȥ��ѯ��������" style="CURSOR: hand" onClick="window.open('wannianli.htm','httpcnnongli','left=0,top=0,width=680,height=480,scrollbars=no,resizable=no,status=no')" href="#wnl1"><font color="#008000">ֻ֪��ũ���������˲�ѯ����</font></a>
<hr size="1">
</div><br /><strong>������ڶ���������</strong>
          <input type="text" name="name2" />
          &nbsp;
          <select size="1" name="xing2">
<option value="1">����</option>
<option value="2">����</option>
</select>
          &nbsp;
          <select size="1" name="sex2">
<option value="��" <?if ($xingbie=="Ů") ?>selected="selected"<?/if?>>����</option>
<option value="Ů" <?if ($xingbie=="��") ?>selected="selected"<?/if?>>Ů��</option>
</select><input type="hidden" name="act" value="ok" /><br /><br /><div id="fs21" style="display:none">
����/�������գ�<select size="1" name="y2"><?selectStepOptions start=1900 end=$_thisYear selected=1980?></select>��<select name="m2" size="1"><?selectStepOptions start=1 end=12 selected=$_thisMonth?></select>��<select name="d2" size="1"><?selectStepOptions start=1 end=31 selected=$_thisDay?></select>��<select size="1" name="h2"> <?selectStepOptions start=0 end=23?> </select>��<select size="1" name="f2"><option value="0">δ֪</option>
		<?selectStepOptions start=0 end=59 selected=$mm1?>
		</select>��
       &nbsp;<a title="�����ֻ֪�����յ�ũ�����ڣ���Ҫ�����������ȥ��ѯ��������" style="CURSOR: hand" onClick="window.open('wannianli.htm','httpcnnongli','left=0,top=0,width=680,height=480,scrollbars=no,resizable=no,status=no')" href="#wnl1"><font color="#008000">ֻ֪��ũ���������˲�ѯ����</font></a>
<hr size="1">
</div>
<input type="submit" value="��ʼ����" style="cursor:hand;" />
      </td>
    </tr> </form>
  </tbody>
</table>
<?else?>
<table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">  
  <tbody>    <tr>
      <td colspan="3" class=new bgcolor="#FFFFFF">������<?$name1?>  �Ա�<?$sex1?>&nbsp;<?if ($fs==1)?>����:<?$y1?>��<?$m1?>��<?$d1?>��<?$h1?>ʱ<?$f1?>��<?/if?></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0"  style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
        <tbody>
          <tr>
            <td bgcolor="#FFFFFF"></td>
            <td align="center" bgcolor="#FFFFFF"><font color="ababab">����</font></td>
            <td align="center" bgcolor="#FFFFFF"><font color="ababab">ƴ��</font></td>
            <td align="center" bgcolor="#FFFFFF"><font color="ababab">�ʻ�</font></td>
            <td align="center" bgcolor="#FFFFFF"><font color="ababab">����</font></td>
            </tr>
          <tr>
            <td  align="center" bgcolor="#FFFFFF" class="new2"><?$nxing1?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?$nxing1|GbToBig?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?$nxing11|truncate:2|c?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?$bihua1?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?$nxing11|getzywh?></td>
          </tr>
          <tr>
         <?if ($nxing2<>'' ) ?>   <td align="center" bgcolor="#FFFFFF" class="new2"><?$nxing2?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?$nxing2|GbToBig?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?$nxing22|c?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?$bihua2?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?$nxing22|getzywh?></td>
          </tr><?/if?>
          <tr>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?$nming1?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?$nming1|GbToBig?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?$nming12|c?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?$bihua3?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?$nming12|getzywh?></td>
          </tr>
          <?if ($nming2<>'' )?><tr>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?$nming2?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?$nming2|GbToBig?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?$nming22|c?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?$bihua4?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?$nming22|getzywh?></td>
          </tr><?/if?>
        </tbody>
      </table></td>
      <td width="25%" colspan="-3" align="center" bgcolor="#FFFFFF"  class="new2">���-&gt; <?$tiange1?> (<?$tiange1|getsancai?>)  ->(<font color=red><?$tgjx?></font>)<br />
      <p>�˸�-&gt; <?$renge1?> (<?$renge1|getsancai?>) ->(<font color=red><?$rgjx?></font>)</p>        <p>�ظ�-&gt; <?$dige1?> (<?$dige1|getsancai?>) ->(<font color=red><?$dgjx?></font>)</p></td>
      <td width="25%"  class="new2" align="center" bgcolor="#FFFFFF">���-&gt; <?$waige1?> (<?$waige1|getsancai?>) ->(<font color=red><?$wgjx?></font>)<br />
      <p>��</p>        <p>�ܸ�-&gt; <?$zhongge1?> (<?$zhongge1|getsancai?>) ->(<font color=red><?$zgjx?></font>)</p></td>
    </tr>
    <tr>
      <td colspan="3" class=new bgcolor="#FFFFFF">�����̺��ĸ��Է�����<?$xg1?></td>
    </tr>
  </tbody>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">  
  <tbody> <tr>
      <td colspan="3" class=new bgcolor="#FFFFFF">������<?$name2?>  �Ա�<?$sex2?> &nbsp;<?if ($fs==1)?>����:<?$y2?>��<?$m2?>��<?$d2?>��<?$h2?>ʱ<?$f2?>��<?/if?></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0"  style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
        <tbody>
          <tr>
            <td bgcolor="#FFFFFF"></td>
            <td align="center" bgcolor="#FFFFFF"><font color="ababab">����</font></td>
            <td align="center" bgcolor="#FFFFFF"><font color="ababab">ƴ��</font></td>
            <td align="center" bgcolor="#FFFFFF"><font color="ababab">�ʻ�</font></td>
            <td align="center" bgcolor="#FFFFFF"><font color="ababab">����</font></td>
            </tr>
          <tr>
            <td  align="center" bgcolor="#FFFFFF" class="new2"><?$n2xing1?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?$n2xing1|GbToBig?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?$n2xing11|truncate:2|c?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?$nbihua1?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?$n2xing11|getzywh?></td>
          </tr>
          <tr>
         <?if ($n2xing2<>'' ) ?>   <td align="center" bgcolor="#FFFFFF" class="new2"><?$n2xing2?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?$n2xing2|GbToBig?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?$n2xing22|c?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?$nbihua2?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?$n2xing22|getzywh?></td>
          </tr><?/if?>
          <tr>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?$n2ming1?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?$n2ming1|GbToBig?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?$n2ming12|c?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?$nbihua3?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?$n2ming12|getzywh?></td>
          </tr>
          <?if ($n2ming2<>'' )?><tr>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?$n2ming2?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?$n2ming2|GbToBig?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?$n2ming22|c?></font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?$nbihua4?></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?$n2ming22|getzywh?></td>
          </tr><?/if?>
        </tbody>
      </table></td>
      <td width="25%" colspan="-3" align="center" bgcolor="#FFFFFF"  class="new2">���-&gt; <?$ntiange1?> (<?$ntiange1|getsancai?>) 
 ->(<font color=red><?$ntgjx?></font>)<br />
      <p>�˸�-&gt; <?$nrenge1?> (<?$nrenge1|getsancai?>)
       ->(<font color=red><?$nrgjx?></font>)</p>        <p>�ظ�-&gt; <?$ndige1?> (<?$ndige1|getsancai?>)
 ->(<font color=red><?$ndgjx?></font>)</p></td>
      <td width="25%"  class="new2" align="center" bgcolor="#FFFFFF">���-&gt; <?$nwaige1?> (<?$nwaige1|getsancai?>)
       ->(<font color=red><?$nwgjx?></font>)<br />
      <p>��</p>        <p>�ܸ�-&gt; <?$nzhongge1?> (<?$nzhongge1|getsancai?>)
       ->(<font color=red><?$nzgjx?></font>)</p></td>
    </tr>
    <tr>
      <td colspan="3" class=new bgcolor="#FFFFFF">�����̺��ĸ��Է�����<?$xg2?></td>
    </tr>
  </tbody>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
      <tr>
        <TD class=ttd>����������[<?$name1?>]��[<?$name2?>]����������������£�</TD>
      </tr>      <tr>
        <TD class=new><span class="red">����Ե��ָ����<?$zf?></span></TD>
        </tr>  <tr>
        <TD class=new><?if ($sex1==$sex2)?><font color=red>��վ�ǰ��й�����ѧ��һЩ���㷽��������ģ���ʱ��֧��ͬ��Ե�ݵĲ���</font><?else?><font color=green>
		 <?if ($zf<60)?>���ǵ����������ܲ���̫�ϣ��������������������ø�������˴˵�Ŭ��Ҳ�������Ǹ��ƹ�ϵ����ס��������Ϊ��
		<?elseif ($zf<70 and zf>=60) ?>
		���ǵ����������ϳ̶����������������������������ø��󣬼���Ŭ�����ƹ�ϵ��������ǵĹ�ϵ�а����ģ� 
		<?elseif ($zf<80 and $zf>=70)?>���ǵ�����������һ�㣡 
		<?elseif ($zf<80 and $zf>=70)?>���ǵ����������ϳ̶Ȼ�����Ӵ�� 
		<?elseif ($zf<90 and $zf>=80)?>
		���ǵ����������ϳ̶��൱���� 
		<?elseif ($zf>=90)?>
		���ǵ����������ϳ̶�̫���ˣ�����ϲ��</font><?if ($name1==$name2)?><br /><font color=#0000ff>^_^ ������ͬ��ͬ�������Ӵ��</font> <?/if?><?/if?>
		<?/if?></TD>
        </tr>
    </TBODY>
</TABLE>
<?/if?>