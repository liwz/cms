<?php /* Smarty version 2.6.6, created on 2009-06-27 03:05:29
         compiled from sm/x.php */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'GbToBig', 'sm/x.php', 32, false),array('modifier', 'c', 'sm/x.php', 33, false),)), $this); ?>
<script language="javascript">
<!--
function checkname()
{
while(document.theform.xing.value.indexOf(" ")!=-1){
document.theform.xing.value=document.theform.xing.value.replace(" ","");
}
while(document.theform.xing.value.indexOf("	")!=-1){
document.theform.xing.value=document.theform.xing.value.replace("	","");
}
if (document.theform.xing.value.length < 1 || document.theform.xing.value.length>10)
{
alert("��������Ӧ��1-10������֮�䣡");
document.theform.xing.focus();
return (false);
}
}
//-->
</script><table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
  
<form method="POST" action="" onSubmit="return checkname();" name="theform"><tr>
        <TD class=new style="PADDING-BOTTOM: 8px" vAlign=top>���������ϣ�
          <input maxLength="10" type="text" name="xing" size="16" value="<?php echo $this->_tpl_vars['xing']; ?>
" /> <input type="submit" value="��ʼ����" style="cursor:hand;" /><input type="hidden" name="act" value="ok" />
      </TD>
      </tr></form>
    </TBODY>
  </TABLE><table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
      <tr>
        <TD width="33%" vAlign=top class=ttd style="PADDING-BOTTOM: 8px">���ϣ�&nbsp;<strong><?php echo $this->_tpl_vars['sxing']; ?>
</strong></TD>
        <TD width="33%" vAlign=top class=ttd style="PADDING-BOTTOM: 8px">���壺&nbsp;<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['sxing'])) ? $this->_run_mod_handler('GbToBig', true, $_tmp) : GbToBig($_tmp)); ?>
</strong></TD>
        <TD class=ttd style="PADDING-BOTTOM: 8px" vAlign=top>ƴ����&nbsp;<strong><?php echo ((is_array($_tmp=$this->_tpl_vars['sxing1'])) ? $this->_run_mod_handler('c', true, $_tmp) : c($_tmp)); ?>
</strong></TD>
      </tr>
<tr>
        <TD colspan="3" vAlign=top class=new style="PADDING-BOTTOM: 8px"><strong>��ϸ����:</strong></TD>
      </tr> </tr>
<tr>
        <TD colspan="3" vAlign=top class=new style="PADDING-BOTTOM: 8px">
    <?php if (( $this->_tpl_vars['intro'] )):  echo $this->_tpl_vars['intro'];  else: ?>ϵͳû���ҵ����յ����ϣ�<?php endif; ?></TD>
      </tr>
    </TBODY>
  </TABLE>