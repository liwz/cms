<?php /* Smarty version 2.6.6, created on 2009-06-27 03:02:08
         compiled from common/enterDateTimeNameSex.php */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'selectStepOptions', 'common/enterDateTimeNameSex.php', 4, false),)), $this); ?>
<form method="POST" action="" onSubmit="return checkbz();" name="theform">   <tr>
        <TD class=new style="PADDING-BOTTOM: 8px" vAlign=top><strong>�������գ�</strong>
        <select size="1" name="y">
            <?php echo selectStepOptions(array('start' => 1950,'end' => $this->_tpl_vars['_thisYear'],'selected' => $this->_tpl_vars['nian1'],'default' => 1980), $this);?>
</select>��
        <select name="m" size="1"><?php echo selectStepOptions(array('start' => 1,'end' => 12,'selected' => $this->_tpl_vars['yue1'],'default' => $this->_tpl_vars['_thisMonth']), $this);?>
</select>��
        
        <select name="d" size="1"><?php echo selectStepOptions(array('start' => 1,'end' => 31,'selected' => $this->_tpl_vars['ri1'],'default' => $this->_tpl_vars['_thisDay']), $this);?>
</select>��
        
        <select size="1" name="hh"> <?php echo selectStepOptions(array('start' => 0,'end' => 23,'selected' => $this->_tpl_vars['hh1']), $this);?>
 </select>��
        
        <select size="1" name="fen"><option value="0">δ֪</option>
		<?php echo selectStepOptions(array('start' => 0,'end' => 59,'selected' => $this->_tpl_vars['mm1']), $this);?>

		</select>��
       </TD>
      </tr>  <tr>
        <TD class=new style="PADDING-BOTTOM: 8px" vAlign=top><strong>������</strong>
          <input onkeyup="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" name="name" type="text" value="<?php echo $this->_tpl_vars['xing'];  echo $this->_tpl_vars['ming']; ?>
" />
          &nbsp;
          <select size="1" name="b">
<option value="��" <?php if (( $this->_tpl_vars['xingbie'] == "��" )): ?>selected="selected"<?php endif; ?>>����</option>
<option value="Ů" <?php if (( $this->_tpl_vars['xingbie'] == "Ů" )): ?>selected="selected"<?php endif; ?>>Ů��</option>
          </select>&nbsp;<input type="hidden" name="act" value="ok" /><input name="cs" type="submit" value="��ʼ����" />
       </TD>
      </tr></form>