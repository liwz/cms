<?php /* Smarty version 2.6.6, created on 2009-10-15 11:23:05
         compiled from common/displayUserInfo.php */ ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
  <TBODY>
    <tr>
      <TD style="PADDING-BOTTOM: 10px" vAlign=top>��ǰ��������Ϣ (<font color="#FF0000">�Ҳ�˵��鿴��ϸ</font>)</TD>
    </tr>
    <tr>
      <TD style="PADDING-BOTTOM: 8px" vAlign=top>����:<font color="#FF0000"><?php echo $this->_tpl_vars['xing'];  echo $this->_tpl_vars['ming']; ?>
</font> �Ա�:<?php echo $this->_tpl_vars['xingbie']; ?>

          <?php if (( $this->_tpl_vars['xuexing'] <> '' )): ?>
Ѫ��:<?php echo $this->_tpl_vars['xuexing']; ?>
 
          <?php endif; ?>
����:<font color="#0000ff"><?php echo $this->_tpl_vars['nian1']; ?>
��<?php echo $this->_tpl_vars['yue1']; ?>
��<?php echo $this->_tpl_vars['ri1']; ?>
��<?php echo $this->_tpl_vars['hh1']; ?>
ʱ<?php echo $this->_tpl_vars['mm1']; ?>
��</font> ����<?php echo $this->_tpl_vars['_thisYear']-$this->_tpl_vars['nian1']; ?>
�� ����:<?php echo $this->_tpl_vars['sx']; ?>
&nbsp;����:<?php echo $this->_tpl_vars['xingzuo']; ?>
&nbsp;
<input name="button2" type="button" class="button" style="cursor:hand;COLOR: #ff0000;FONT-WEIGHT: bold;" onClick="(location='?clearCookie')" value="���²���" />
     </TD>
    </tr>
  </TBODY>
</TABLE>