<?php /* Smarty version 2.6.6, created on 2009-07-09 06:50:15
         compiled from sm/xmpd.php */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'selectStepOptions', 'sm/xmpd.php', 70, false),array('modifier', 'GbToBig', 'sm/xmpd.php', 114, false),array('modifier', 'truncate', 'sm/xmpd.php', 115, false),array('modifier', 'c', 'sm/xmpd.php', 115, false),array('modifier', 'getzywh', 'sm/xmpd.php', 117, false),array('modifier', 'getsancai', 'sm/xmpd.php', 142, false),)), $this); ?>
<?php if (( ! isset ( $_POST['act'] ) || $_POST['act'] <> 'ok' )): ?>
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
          <input name="name1" type="text" value="<?php echo $this->_tpl_vars['xing1'];  echo $this->_tpl_vars['xing2'];  echo $this->_tpl_vars['ming1'];  echo $this->_tpl_vars['ming2']; ?>
" />
          &nbsp;
          <select size="1" name="xing1">
<option value="1" <?php if (( ! $this->_tpl_vars['xing2'] )): ?>selected="selected"<?php endif; ?>>����</option>
<option value="2"<?php if (( $this->_tpl_vars['xing2'] <> "" )): ?>selected="selected"<?php endif; ?>>����</option>
          </select>
          &nbsp;
          <select size="1" name="sex1">
<option value="��" <?php if (( $this->_tpl_vars['xingbie'] == "��" )): ?>selected="selected"<?php endif; ?>>����</option>
<option value="Ů" <?php if (( $this->_tpl_vars['xingbie'] == "Ů" )): ?>selected="selected"<?php endif; ?>>Ů��</option>
          </select><br /><br /><div id="fs11" style="display:none">
<div class="divh2"></div>����/�������գ�<select size="1" name="y1"><?php echo selectStepOptions(array('start' => 1900,'end' => $this->_tpl_vars['_thisYear'],'selected' => $this->_tpl_vars['nian1'],'default' => 1980), $this);?>
</select>��<select name="m1" size="1"><?php echo selectStepOptions(array('start' => 1,'end' => 12,'selected' => $this->_tpl_vars['yue1'],'default' => $this->_tpl_vars['_thisMonth']), $this);?>
</select>��<select name="d1" size="1"><?php echo selectStepOptions(array('start' => 1,'end' => 31,'selected' => $this->_tpl_vars['ri1'],'default' => $this->_tpl_vars['_thisDay']), $this);?>
</select>��<select size="1" name="h1"> <?php echo selectStepOptions(array('start' => 0,'end' => 23,'selected' => $this->_tpl_vars['hh1']), $this);?>
 </select>��<select size="1" name="f1"><option value="0">δ֪</option>
		<?php echo selectStepOptions(array('start' => 0,'end' => 59,'selected' => $this->_tpl_vars['mm1']), $this);?>

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
<option value="��" <?php if (( $this->_tpl_vars['xingbie'] == "Ů" )): ?>selected="selected"<?php endif; ?>>����</option>
<option value="Ů" <?php if (( $this->_tpl_vars['xingbie'] == "��" )): ?>selected="selected"<?php endif; ?>>Ů��</option>
</select><input type="hidden" name="act" value="ok" /><br /><br /><div id="fs21" style="display:none">
����/�������գ�<select size="1" name="y2"><?php echo selectStepOptions(array('start' => 1900,'end' => $this->_tpl_vars['_thisYear'],'selected' => 1980), $this);?>
</select>��<select name="m2" size="1"><?php echo selectStepOptions(array('start' => 1,'end' => 12,'selected' => $this->_tpl_vars['_thisMonth']), $this);?>
</select>��<select name="d2" size="1"><?php echo selectStepOptions(array('start' => 1,'end' => 31,'selected' => $this->_tpl_vars['_thisDay']), $this);?>
</select>��<select size="1" name="h2"> <?php echo selectStepOptions(array('start' => 0,'end' => 23), $this);?>
 </select>��<select size="1" name="f2"><option value="0">δ֪</option>
		<?php echo selectStepOptions(array('start' => 0,'end' => 59,'selected' => $this->_tpl_vars['mm1']), $this);?>

		</select>��
       &nbsp;<a title="�����ֻ֪�����յ�ũ�����ڣ���Ҫ�����������ȥ��ѯ��������" style="CURSOR: hand" onClick="window.open('wannianli.htm','httpcnnongli','left=0,top=0,width=680,height=480,scrollbars=no,resizable=no,status=no')" href="#wnl1"><font color="#008000">ֻ֪��ũ���������˲�ѯ����</font></a>
<hr size="1">
</div>
<input type="submit" value="��ʼ����" style="cursor:hand;" />
      </td>
    </tr> </form>
  </tbody>
</table>
<?php else: ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">  
  <tbody>    <tr>
      <td colspan="3" class=new bgcolor="#FFFFFF">������<?php echo $this->_tpl_vars['name1']; ?>
  �Ա�<?php echo $this->_tpl_vars['sex1']; ?>
&nbsp;<?php if (( $this->_tpl_vars['fs'] == 1 )): ?>����:<?php echo $this->_tpl_vars['y1']; ?>
��<?php echo $this->_tpl_vars['m1']; ?>
��<?php echo $this->_tpl_vars['d1']; ?>
��<?php echo $this->_tpl_vars['h1']; ?>
ʱ<?php echo $this->_tpl_vars['f1']; ?>
��<?php endif; ?></td>
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
            <td  align="center" bgcolor="#FFFFFF" class="new2"><?php echo $this->_tpl_vars['nxing1']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo ((is_array($_tmp=$this->_tpl_vars['nxing1'])) ? $this->_run_mod_handler('GbToBig', true, $_tmp) : GbToBig($_tmp)); ?>
</font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['nxing11'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 2) : smarty_modifier_truncate($_tmp, 2)))) ? $this->_run_mod_handler('c', true, $_tmp) : c($_tmp)); ?>
</font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo $this->_tpl_vars['bihua1']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ((is_array($_tmp=$this->_tpl_vars['nxing11'])) ? $this->_run_mod_handler('getzywh', true, $_tmp) : getzywh($_tmp)); ?>
</td>
          </tr>
          <tr>
         <?php if (( $this->_tpl_vars['nxing2'] <> '' )): ?>   <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo $this->_tpl_vars['nxing2']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo ((is_array($_tmp=$this->_tpl_vars['nxing2'])) ? $this->_run_mod_handler('GbToBig', true, $_tmp) : GbToBig($_tmp)); ?>
</font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo ((is_array($_tmp=$this->_tpl_vars['nxing22'])) ? $this->_run_mod_handler('c', true, $_tmp) : c($_tmp)); ?>
</font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo $this->_tpl_vars['bihua2']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ((is_array($_tmp=$this->_tpl_vars['nxing22'])) ? $this->_run_mod_handler('getzywh', true, $_tmp) : getzywh($_tmp)); ?>
</td>
          </tr><?php endif; ?>
          <tr>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo $this->_tpl_vars['nming1']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo ((is_array($_tmp=$this->_tpl_vars['nming1'])) ? $this->_run_mod_handler('GbToBig', true, $_tmp) : GbToBig($_tmp)); ?>
</font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo ((is_array($_tmp=$this->_tpl_vars['nming12'])) ? $this->_run_mod_handler('c', true, $_tmp) : c($_tmp)); ?>
</font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo $this->_tpl_vars['bihua3']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ((is_array($_tmp=$this->_tpl_vars['nming12'])) ? $this->_run_mod_handler('getzywh', true, $_tmp) : getzywh($_tmp)); ?>
</td>
          </tr>
          <?php if (( $this->_tpl_vars['nming2'] <> '' )): ?><tr>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo $this->_tpl_vars['nming2']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo ((is_array($_tmp=$this->_tpl_vars['nming2'])) ? $this->_run_mod_handler('GbToBig', true, $_tmp) : GbToBig($_tmp)); ?>
</font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo ((is_array($_tmp=$this->_tpl_vars['nming22'])) ? $this->_run_mod_handler('c', true, $_tmp) : c($_tmp)); ?>
</font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo $this->_tpl_vars['bihua4']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ((is_array($_tmp=$this->_tpl_vars['nming22'])) ? $this->_run_mod_handler('getzywh', true, $_tmp) : getzywh($_tmp)); ?>
</td>
          </tr><?php endif; ?>
        </tbody>
      </table></td>
      <td width="25%" colspan="-3" align="center" bgcolor="#FFFFFF"  class="new2">���-&gt; <?php echo $this->_tpl_vars['tiange1']; ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['tiange1'])) ? $this->_run_mod_handler('getsancai', true, $_tmp) : getsancai($_tmp)); ?>
)  ->(<font color=red><?php echo $this->_tpl_vars['tgjx']; ?>
</font>)<br />
      <p>�˸�-&gt; <?php echo $this->_tpl_vars['renge1']; ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['renge1'])) ? $this->_run_mod_handler('getsancai', true, $_tmp) : getsancai($_tmp)); ?>
) ->(<font color=red><?php echo $this->_tpl_vars['rgjx']; ?>
</font>)</p>        <p>�ظ�-&gt; <?php echo $this->_tpl_vars['dige1']; ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['dige1'])) ? $this->_run_mod_handler('getsancai', true, $_tmp) : getsancai($_tmp)); ?>
) ->(<font color=red><?php echo $this->_tpl_vars['dgjx']; ?>
</font>)</p></td>
      <td width="25%"  class="new2" align="center" bgcolor="#FFFFFF">���-&gt; <?php echo $this->_tpl_vars['waige1']; ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['waige1'])) ? $this->_run_mod_handler('getsancai', true, $_tmp) : getsancai($_tmp)); ?>
) ->(<font color=red><?php echo $this->_tpl_vars['wgjx']; ?>
</font>)<br />
      <p>��</p>        <p>�ܸ�-&gt; <?php echo $this->_tpl_vars['zhongge1']; ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['zhongge1'])) ? $this->_run_mod_handler('getsancai', true, $_tmp) : getsancai($_tmp)); ?>
) ->(<font color=red><?php echo $this->_tpl_vars['zgjx']; ?>
</font>)</p></td>
    </tr>
    <tr>
      <td colspan="3" class=new bgcolor="#FFFFFF">�����̺��ĸ��Է�����<?php echo $this->_tpl_vars['xg1']; ?>
</td>
    </tr>
  </tbody>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">  
  <tbody> <tr>
      <td colspan="3" class=new bgcolor="#FFFFFF">������<?php echo $this->_tpl_vars['name2']; ?>
  �Ա�<?php echo $this->_tpl_vars['sex2']; ?>
 &nbsp;<?php if (( $this->_tpl_vars['fs'] == 1 )): ?>����:<?php echo $this->_tpl_vars['y2']; ?>
��<?php echo $this->_tpl_vars['m2']; ?>
��<?php echo $this->_tpl_vars['d2']; ?>
��<?php echo $this->_tpl_vars['h2']; ?>
ʱ<?php echo $this->_tpl_vars['f2']; ?>
��<?php endif; ?></td>
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
            <td  align="center" bgcolor="#FFFFFF" class="new2"><?php echo $this->_tpl_vars['n2xing1']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo ((is_array($_tmp=$this->_tpl_vars['n2xing1'])) ? $this->_run_mod_handler('GbToBig', true, $_tmp) : GbToBig($_tmp)); ?>
</font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['n2xing11'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 2) : smarty_modifier_truncate($_tmp, 2)))) ? $this->_run_mod_handler('c', true, $_tmp) : c($_tmp)); ?>
</font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo $this->_tpl_vars['nbihua1']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ((is_array($_tmp=$this->_tpl_vars['n2xing11'])) ? $this->_run_mod_handler('getzywh', true, $_tmp) : getzywh($_tmp)); ?>
</td>
          </tr>
          <tr>
         <?php if (( $this->_tpl_vars['n2xing2'] <> '' )): ?>   <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo $this->_tpl_vars['n2xing2']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo ((is_array($_tmp=$this->_tpl_vars['n2xing2'])) ? $this->_run_mod_handler('GbToBig', true, $_tmp) : GbToBig($_tmp)); ?>
</font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo ((is_array($_tmp=$this->_tpl_vars['n2xing22'])) ? $this->_run_mod_handler('c', true, $_tmp) : c($_tmp)); ?>
</font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo $this->_tpl_vars['nbihua2']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ((is_array($_tmp=$this->_tpl_vars['n2xing22'])) ? $this->_run_mod_handler('getzywh', true, $_tmp) : getzywh($_tmp)); ?>
</td>
          </tr><?php endif; ?>
          <tr>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo $this->_tpl_vars['n2ming1']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo ((is_array($_tmp=$this->_tpl_vars['n2ming1'])) ? $this->_run_mod_handler('GbToBig', true, $_tmp) : GbToBig($_tmp)); ?>
</font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo ((is_array($_tmp=$this->_tpl_vars['n2ming12'])) ? $this->_run_mod_handler('c', true, $_tmp) : c($_tmp)); ?>
</font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo $this->_tpl_vars['nbihua3']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ((is_array($_tmp=$this->_tpl_vars['n2ming12'])) ? $this->_run_mod_handler('getzywh', true, $_tmp) : getzywh($_tmp)); ?>
</td>
          </tr>
          <?php if (( $this->_tpl_vars['n2ming2'] <> '' )): ?><tr>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo $this->_tpl_vars['n2ming2']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo ((is_array($_tmp=$this->_tpl_vars['n2ming2'])) ? $this->_run_mod_handler('GbToBig', true, $_tmp) : GbToBig($_tmp)); ?>
</font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo ((is_array($_tmp=$this->_tpl_vars['n2ming22'])) ? $this->_run_mod_handler('c', true, $_tmp) : c($_tmp)); ?>
</font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo $this->_tpl_vars['nbihua4']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ((is_array($_tmp=$this->_tpl_vars['n2ming22'])) ? $this->_run_mod_handler('getzywh', true, $_tmp) : getzywh($_tmp)); ?>
</td>
          </tr><?php endif; ?>
        </tbody>
      </table></td>
      <td width="25%" colspan="-3" align="center" bgcolor="#FFFFFF"  class="new2">���-&gt; <?php echo $this->_tpl_vars['ntiange1']; ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['ntiange1'])) ? $this->_run_mod_handler('getsancai', true, $_tmp) : getsancai($_tmp)); ?>
) 
 ->(<font color=red><?php echo $this->_tpl_vars['ntgjx']; ?>
</font>)<br />
      <p>�˸�-&gt; <?php echo $this->_tpl_vars['nrenge1']; ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['nrenge1'])) ? $this->_run_mod_handler('getsancai', true, $_tmp) : getsancai($_tmp)); ?>
)
       ->(<font color=red><?php echo $this->_tpl_vars['nrgjx']; ?>
</font>)</p>        <p>�ظ�-&gt; <?php echo $this->_tpl_vars['ndige1']; ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['ndige1'])) ? $this->_run_mod_handler('getsancai', true, $_tmp) : getsancai($_tmp)); ?>
)
 ->(<font color=red><?php echo $this->_tpl_vars['ndgjx']; ?>
</font>)</p></td>
      <td width="25%"  class="new2" align="center" bgcolor="#FFFFFF">���-&gt; <?php echo $this->_tpl_vars['nwaige1']; ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['nwaige1'])) ? $this->_run_mod_handler('getsancai', true, $_tmp) : getsancai($_tmp)); ?>
)
       ->(<font color=red><?php echo $this->_tpl_vars['nwgjx']; ?>
</font>)<br />
      <p>��</p>        <p>�ܸ�-&gt; <?php echo $this->_tpl_vars['nzhongge1']; ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['nzhongge1'])) ? $this->_run_mod_handler('getsancai', true, $_tmp) : getsancai($_tmp)); ?>
)
       ->(<font color=red><?php echo $this->_tpl_vars['nzgjx']; ?>
</font>)</p></td>
    </tr>
    <tr>
      <td colspan="3" class=new bgcolor="#FFFFFF">�����̺��ĸ��Է�����<?php echo $this->_tpl_vars['xg2']; ?>
</td>
    </tr>
  </tbody>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
      <tr>
        <TD class=ttd>����������[<?php echo $this->_tpl_vars['name1']; ?>
]��[<?php echo $this->_tpl_vars['name2']; ?>
]����������������£�</TD>
      </tr>      <tr>
        <TD class=new><span class="red">����Ե��ָ����<?php echo $this->_tpl_vars['zf']; ?>
</span></TD>
        </tr>  <tr>
        <TD class=new><?php if (( $this->_tpl_vars['sex1'] == $this->_tpl_vars['sex2'] )): ?><font color=red>��վ�ǰ��й�����ѧ��һЩ���㷽��������ģ���ʱ��֧��ͬ��Ե�ݵĲ���</font><?php else: ?><font color=green>
		 <?php if (( $this->_tpl_vars['zf'] < 60 )): ?>���ǵ����������ܲ���̫�ϣ��������������������ø�������˴˵�Ŭ��Ҳ�������Ǹ��ƹ�ϵ����ס��������Ϊ��
		<?php elseif (( $this->_tpl_vars['zf'] < 70 && zf >= 60 )): ?>
		���ǵ����������ϳ̶����������������������������ø��󣬼���Ŭ�����ƹ�ϵ��������ǵĹ�ϵ�а����ģ� 
		<?php elseif (( $this->_tpl_vars['zf'] < 80 && $this->_tpl_vars['zf'] >= 70 )): ?>���ǵ�����������һ�㣡 
		<?php elseif (( $this->_tpl_vars['zf'] < 80 && $this->_tpl_vars['zf'] >= 70 )): ?>���ǵ����������ϳ̶Ȼ�����Ӵ�� 
		<?php elseif (( $this->_tpl_vars['zf'] < 90 && $this->_tpl_vars['zf'] >= 80 )): ?>
		���ǵ����������ϳ̶��൱���� 
		<?php elseif (( $this->_tpl_vars['zf'] >= 90 )): ?>
		���ǵ����������ϳ̶�̫���ˣ�����ϲ��</font><?php if (( $this->_tpl_vars['name1'] == $this->_tpl_vars['name2'] )): ?><br /><font color=#0000ff>^_^ ������ͬ��ͬ�������Ӵ��</font> <?php endif;  endif; ?>
		<?php endif; ?></TD>
        </tr>
    </TBODY>
</TABLE>
<?php endif; ?>