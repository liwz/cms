<?php /* Smarty version 2.6.6, created on 2009-07-03 04:18:37
         compiled from common/astroCommon.php */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'selectStepOptions', 'common/astroCommon.php', 11, false),array('modifier', 'cat', 'common/astroCommon.php', 19, false),array('modifier', 'Constellation', 'common/astroCommon.php', 19, false),)), $this); ?>

  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
      <tr>
        <TD align="left" class=new style="PADDING-BOTTOM: 1px">
<?php if (( $this->_tpl_vars['xing'] <> "" )): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/astroIndexLink.php", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
  <?php if (( $this->_tpl_vars['currentAstro'] )): ?><p>��ǰ������<font color=#990000><?php echo $this->_tpl_vars['currentAstro']; ?>
</font></p> <?php endif; ?>
<form action="" method="post">��ѯ�ҵ�����:<select name="y" size="1" id="y" style="font-size: 9pt"> 
           <?php echo selectStepOptions(array('start' => 1900,'end' => $this->_tpl_vars['_thisYear'],'selected' => 1980), $this);?>

          </select>��
<select name="m" size="1" id="m" style="font-size: 9pt">
  <?php echo selectStepOptions(array('start' => 1,'end' => 12,'selected' => $this->_tpl_vars['_thisMonth']), $this);?>

</select>��
<select name="d" size="1" id="d" style="font-size: 9pt">
  <?php echo selectStepOptions(array('start' => 1,'end' => 31,'selected' => $this->_tpl_vars['_thisDay']), $this);?>

</select>��(��������)
<input name="Input2" type="submit" value="��ѯ" class="bot01"   /><input name="act" type="hidden" value="xzcx"><?php if (( isset ( $_REQUEST['act'] ) && $_REQUEST['act'] == 'xzcx' )): ?>&nbsp;��ѯ���:<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$_REQUEST['y'])) ? $this->_run_mod_handler('cat', true, $_tmp, "-") : smarty_modifier_cat($_tmp, "-")))) ? $this->_run_mod_handler('cat', true, $_tmp, $_REQUEST['m']) : smarty_modifier_cat($_tmp, $_REQUEST['m'])))) ? $this->_run_mod_handler('cat', true, $_tmp, "-") : smarty_modifier_cat($_tmp, "-")))) ? $this->_run_mod_handler('cat', true, $_tmp, $_REQUEST['d']) : smarty_modifier_cat($_tmp, $_REQUEST['d'])))) ? $this->_run_mod_handler('Constellation', true, $_tmp) : Constellation($_tmp)); ?>
</form>
<?php endif;  endif; ?></TD>
      </tr>
      <tr>
        <TD align="left" class=new style="PADDING-BOTTOM: 1px"><span class="red">�������</span>��<a href="?m=2&sm=1&flag=4&astro=������">ĵ����</a>��<a href="?m=2&sm=1&flag=4&astro=��ţ��">��ţ��</a>��<a href="?m=2&sm=1&flag=4&astro=˫����">˫����</a>��<a href="?m=2&sm=1&flag=4&astro=��з��">��з��</a>��<a href="?m=2&sm=1&flag=4&astro=ʨ����">ʨ����</a>��<a href="?m=2&sm=1&flag=4&astro=��Ů��">��Ů��</a>��<a href="?m=2&sm=1&flag=4&astro=�����">�����</a>��<a href="?m=2&sm=1&flag=4&astro=��Ы��">��Ы��</a>��<a href="?m=2&sm=1&flag=4&astro=������">������</a>��<a href="?m=2&sm=1&flag=4&astro=ħ����">ħ����</a>��<a href="?m=2&sm=1&flag=4&astro=ˮƿ��">ˮƿ��</a>��<a href="?m=2&sm=1&flag=4&astro=˫����">˫����</a></TD>
      </tr>
    </TBODY>
  </TABLE>
