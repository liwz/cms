<?php /* Smarty version 2.6.6, created on 2009-08-28 07:22:29
         compiled from common/enterAllInfoForm.php */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'selectStepOptions', 'common/enterAllInfoForm.php', 29, false),)), $this); ?>

<table width="100%" border="0" cellspacing="0" cellpadding="0" id="inputInfoTable" style="table-layout:fixed;word-wrap:break-word;">
 <form method="post" action="" name="sm"  onSubmit="return checkbz();">  <TBODY>
       <tr>
      <TD class=ttop style="PADDING-BOTTOM: 1px" vAlign=top> �����������̿�ʼ��ѵ�������</TD>
    </tr> <tr>
      <TD class=new style="PADDING-BOTTOM: 8px" vAlign=top><font color=red><b>&nbsp;����˵����</b></font>���������������ģ����ձ������빫��������������/������ũ��������/�������������Ϊ<?php echo $this->_tpl_vars['_thisYear']; ?>
��<?php echo $this->_tpl_vars['_thisMonth']; ?>
��<?php echo $this->_tpl_vars['_thisDay']; ?>
�գ�����ǹ����������������Ѫ�ͣ�Ѫ�Ϳ���ѡ��������������ֵȣ�����ʱ�ֿ���ѡ����Ӱ���������Խ��������ϵͳ���������ʮ��ǿ����������ܣ� <A href="javascript:;" class="red" onClick="window.external.AddFavorite('http://www.zhidianmijin.com','�������-ָ���Խ�')">[<u>����ָ���Խ��������������ղؼУ�</u>]</A></TD>
    </tr>
    <tr>
      <TD class=new style="PADDING-BOTTOM: 8px" vAlign=top><div align="center"><a title="�����ֻ֪�����յ�ũ�����ڣ���Ҫ�����������ȥ��ѯ��������" style="CURSOR: hand" onClick="window.open('wannianli.htm','nongli','left=0,top=0,width=780,height=540,scrollbars=no,resizable=no,status=no')" href="#wnl"><font color="red">[ֻ֪��ũ�����˲鹫��]</font></a>&nbsp;<a title="��֪������ʱ����ô��" style="CURSOR: hand" onClick="window.open('htm_nobirth.htm','nobirth','left=0,top=0,width=600,height=480,scrollbars=yes,resizable=no,status=no')" href="#nobirth"><font color="red">[��֪������ʱ����ô��]</font></a>&nbsp;</div></TD>
    </tr>
    <tr>
      <TD align="center" vAlign=top class=new style="PADDING-BOTTOM: 8px">�գ�<input type="txt" name="xing" size="4" value="" onKeypress="if ((event.keyCode != 13 && event.keyCode < 160)) event.returnValue = false;">
  	����<input type="txt" name="ming" size="4" value="" onKeypress="if ((event.keyCode != 13 && event.keyCode < 160)) event.returnValue = false;">
  	<select name="xingbie" size="1" style="font-size: 9pt">
	<option value="" selected>�Ա�</option>
	<option value="��">��</option>
	<option value="Ů">Ů</option>
  	</select>
  	<select name="xuexing" size="1" style="font-size: 9pt">
  	<option value="">Ѫ��</option>
  	<option value="A">A��</option>
  	<option value="B">B��</option>
  	<option value="O">O��</option>
  	<option value="AB">AB��</option>
  	</select>
  	��������:
       <select name="nian" size="1" style="font-size: 9pt">
      ><?php echo selectStepOptions(array('start' => 1950,'end' => $this->_tpl_vars['_thisYear'],'selected' => 1980), $this);?>

     </select>��
     <select size="1" name="yue" style="font-size: 9pt">
      <?php echo selectStepOptions(array('start' => 1,'end' => 12,'selected' => $this->_tpl_vars['_thisMonth']), $this);?>

     </select>��
     <select size="1" name="ri" style="font-size: 9pt">
      <?php echo selectStepOptions(array('start' => 1,'end' => 31,'selected' => $this->_tpl_vars['_thisDay']), $this);?>

     </select>��
     <select size="1" name="hh" style="font-size: 9pt">
       <?php echo selectStepOptions(array('start' => 1,'end' => 23), $this);?>

     </select>��
     <select size="1" name="mm" style="font-size: 9pt">
       <option value="0">δ֪</option>
		<?php echo selectStepOptions(array('start' => 1,'end' => 59), $this);?>

     </select>�� </TD>
    </tr>
    <tr>
      <TD align="center"  vAlign=middle class=new style="PADDING-BOTTOM: 8px">
	  &nbsp;<input type="submit" value="��������" style='cursor:hand;COLOR: #ff0000;' class="button">
	  <input type="button" value="�Ƶ���ѯ" onClick="(location='?m=6&sm=6')" style="cursor:hand;" class="button" /> 
	  <input type="button" value="��Ф�˳�" onClick="(location='?m=2')" style="cursor:hand;" class="button" />
	  <input type="button" value="�����˳�" style='cursor:hand;' onClick="(location='?m=2&sm=9')" class="button"> <input type="button" value="��ǩ����" onClick="(location='?m=3')" style="cursor:hand;COLOR: #0000ff;" class="button" />
	 <input type="button" value="���β���" onClick="(location='?m=3')" style="cursor:hand;COLOR: #0000ff;" class="button" />
</TD></tr>
  </TBODY></form>
</TABLE>