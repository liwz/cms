<?php /* Smarty version 2.6.6, created on 2009-07-09 06:50:02
         compiled from sm/nm.php */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'layin', 'sm/nm.php', 22, false),array('modifier', 'tgdzwh', 'sm/nm.php', 22, false),array('modifier', 'siji', 'sm/nm.php', 22, false),array('modifier', 'DiZhi', 'sm/nm.php', 31, false),)), $this); ?>
 
<table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">    <tbody>
<tr>
<td  width="6%" rowspan="6" bgcolor="#FFFFFF" class="new">

<b><?php echo $this->_tpl_vars['xing1']; ?>
</b><br /><br />
<?php if (( $this->_tpl_vars['xing2'] )): ?>
<b><?php echo $this->_tpl_vars['xing2']; ?>
</b> <br /><br />
<?php endif; ?>
<b><?php echo $this->_tpl_vars['ming1']; ?>
</b> <br /><br />
<?php if (( $this->_tpl_vars['ming2'] )): ?>
   <b><?php echo $this->_tpl_vars['ming2']; ?>
</b> <br /><br />
<?php endif; ?>

</td>
<td  width="12%" rowspan="2" bgcolor="#FFFFFF" class="new">����ʱ�䣺</td>
  <td  width="9%" bgcolor="#FFFFFF" class="new">(����)</td>
  <td  width="12%" bgcolor="#FFFFFF" class="new"><?php echo $this->_tpl_vars['nian1']; ?>
��</td>
  <td  width="10%" bgcolor="#FFFFFF" class="new"><?php echo $this->_tpl_vars['yue1']; ?>
��</td>
  <td  width="10%" bgcolor="#FFFFFF" class="new"><?php echo $this->_tpl_vars['ri1']; ?>
��</td>
  <td  width="11%" bgcolor="#FFFFFF" class="new"><?php echo $this->_tpl_vars['hh1']; ?>
��</td>
  <td width="30%"  rowspan="6" bgcolor="#FFFFFF" class="new" style="padding-left:4px;padding-right:4px;">������<?php echo $this->_tpl_vars['sx']; ?>
��<?php echo ((is_array($_tmp=$this->_tpl_vars['ygz'])) ? $this->_run_mod_handler('layin', true, $_tmp) : layin($_tmp)); ?>
��������<?php echo $this->_tpl_vars['mainw'];  echo $this->_tpl_vars['mainq']; ?>
���������Ϊ<b><?php echo ((is_array($_tmp=$this->_tpl_vars['dg1'])) ? $this->_run_mod_handler('tgdzwh', true, $_tmp) : tgdzwh($_tmp)); ?>
</b>������<?php echo ((is_array($_tmp=$this->_tpl_vars['yue1'])) ? $this->_run_mod_handler('siji', true, $_tmp) : siji($_tmp)); ?>
����<br />
    ��ͬ��<?php echo $this->_tpl_vars['tnwh']; ?>
������<?php echo $this->_tpl_vars['ynwh']; ?>
����<br />�������и��� : <?php echo $this->_tpl_vars['wnum1']; ?>
����<?php echo $this->_tpl_vars['wnum2']; ?>
��ľ��<?php echo $this->_tpl_vars['wnum3']; ?>
��ˮ��<?php echo $this->_tpl_vars['wnum4']; ?>
����<?php echo $this->_tpl_vars['wnum5']; ?>
����
��</td>
 </tr>
 <tr>
  <td bgcolor="#FFFFFF" class="new" >(ũ��)</td>
  <td bgcolor="#FFFFFF" class="new" ><?php echo $this->_tpl_vars['nian2']; ?>
��</td>
  <td bgcolor="#FFFFFF" class="new" ><?php echo $this->_tpl_vars['yue2']; ?>
��</td>
  <td bgcolor="#FFFFFF" class="new" ><?php echo $this->_tpl_vars['ri2']; ?>
��</td>
  <td bgcolor="#FFFFFF" class="new" ><?php echo ((is_array($_tmp=$this->_tpl_vars['hh2'])) ? $this->_run_mod_handler('DiZhi', true, $_tmp) : DiZhi($_tmp)); ?>
ʱ</td>
 </tr>

 <tr>
  <td  colspan="2" bgcolor="#FFFFFF" class="new">���֣�</td>
  <td bgcolor="#FFFFFF" class="new" ><?php echo $this->_tpl_vars['ygz']; ?>
��</td>
  <td bgcolor="#FFFFFF" class="new" ><?php echo $this->_tpl_vars['mgz']; ?>
��</td>
  <td bgcolor="#FFFFFF" class="new" ><?php echo $this->_tpl_vars['dgz']; ?>
��</td>
  <td bgcolor="#FFFFFF" class="new" ><?php echo $this->_tpl_vars['tgz']; ?>
��</td>
 </tr>
 <tr>
  <td  colspan="2" bgcolor="#FFFFFF" class="new">���У�</td>
  <td bgcolor="#FFFFFF" class="new" ><?php echo ((is_array($_tmp=$this->_tpl_vars['yg1'])) ? $this->_run_mod_handler('tgdzwh', true, $_tmp) : tgdzwh($_tmp));  echo ((is_array($_tmp=$this->_tpl_vars['yz1'])) ? $this->_run_mod_handler('tgdzwh', true, $_tmp) : tgdzwh($_tmp)); ?>
</td>
  <td bgcolor="#FFFFFF" class="new" ><?php echo ((is_array($_tmp=$this->_tpl_vars['mg1'])) ? $this->_run_mod_handler('tgdzwh', true, $_tmp) : tgdzwh($_tmp));  echo ((is_array($_tmp=$this->_tpl_vars['mz1'])) ? $this->_run_mod_handler('tgdzwh', true, $_tmp) : tgdzwh($_tmp)); ?>
</td>
  <td bgcolor="#FFFFFF" class="new" ><?php echo ((is_array($_tmp=$this->_tpl_vars['dg1'])) ? $this->_run_mod_handler('tgdzwh', true, $_tmp) : tgdzwh($_tmp));  echo ((is_array($_tmp=$this->_tpl_vars['dz1'])) ? $this->_run_mod_handler('tgdzwh', true, $_tmp) : tgdzwh($_tmp)); ?>
</td>
  <td bgcolor="#FFFFFF" class="new" ><?php echo ((is_array($_tmp=$this->_tpl_vars['tg1'])) ? $this->_run_mod_handler('tgdzwh', true, $_tmp) : tgdzwh($_tmp));  echo ((is_array($_tmp=$this->_tpl_vars['tz1'])) ? $this->_run_mod_handler('tgdzwh', true, $_tmp) : tgdzwh($_tmp)); ?>
</td>
 </tr>
 <tr>
  <td  colspan="2" bgcolor="#FFFFFF" class="new">������</td>
  <td bgcolor="#FFFFFF" class="new" ><?php echo ((is_array($_tmp=$this->_tpl_vars['ygz'])) ? $this->_run_mod_handler('layin', true, $_tmp) : layin($_tmp)); ?>
</td>
  <td bgcolor="#FFFFFF" class="new" ><?php echo ((is_array($_tmp=$this->_tpl_vars['mgz'])) ? $this->_run_mod_handler('layin', true, $_tmp) : layin($_tmp)); ?>
</td>
  <td bgcolor="#FFFFFF" class="new" ><?php echo ((is_array($_tmp=$this->_tpl_vars['dgz'])) ? $this->_run_mod_handler('layin', true, $_tmp) : layin($_tmp)); ?>
</td>
  <td bgcolor="#FFFFFF" class="new" ><?php echo ((is_array($_tmp=$this->_tpl_vars['tgz'])) ? $this->_run_mod_handler('layin', true, $_tmp) : layin($_tmp)); ?>
</td>
 </tr>
</tbody>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
  <tbody>
    <tr>
      <td  width="16%"  bgcolor="#FFFFFF" class="new">��Ф����</td>
      <td width="84%" colspan="6" bgcolor="#FFFFFF" class="new">���ݷ�����������ФΪ��<?php echo $this->_tpl_vars['sx']; ?>
��<br /> <?php echo $this->_tpl_vars['sxgx']; ?>
</td>
    </tr>
  </tbody>
</table><table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
  <tbody>
    <tr>
      <td  width="16%"  bgcolor="#FFFFFF" class="new">�Ը����</td>
      <td width="84%" colspan="6" bgcolor="#FFFFFF" class="new"> <?php echo $this->_tpl_vars['xgfx']; ?>
</td>
    </tr>
  </tbody>
</table><table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
  <tbody>
    <tr>
      <td  width="16%"  bgcolor="#FFFFFF" class="new">�������</td>
      <td width="84%" colspan="6" bgcolor="#FFFFFF" class="new"> <?php echo $this->_tpl_vars['aqfx']; ?>
</td>
    </tr>
  </tbody>
</table><table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
  <tbody>
    <tr>
      <td  width="16%"  bgcolor="#FFFFFF" class="new">��ҵ����</td>
      <td width="84%" colspan="6" bgcolor="#FFFFFF" class="new"> <?php echo $this->_tpl_vars['syfx']; ?>
</td>
    </tr>
  </tbody>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
  <tbody>
    <tr>
      <td  width="16%"  bgcolor="#FFFFFF" class="new">���˷���</td>
      <td width="84%" colspan="6" bgcolor="#FFFFFF" class="new"><?php echo $this->_tpl_vars['cyfx']; ?>
</td>
    </tr>
  </tbody>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">
  <tbody>
    <tr>
      <td  width="16%"  bgcolor="#FFFFFF" class="new">��������</td>
      <td width="84%" colspan="6" bgcolor="#FFFFFF" class="new"><?php echo $this->_tpl_vars['jkfx']; ?>
</td>
    </tr>
  </tbody>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
  <tbody>
    <tr>
      <td class="new"><div id="ft">˵��:�ո��������԰�������������Ϣ���з�����ΪƬ�����Ϣ�������ο���</div></td>
    </tr>
  </tbody>
</table>