<?php /* Smarty version 2.6.6, created on 2009-07-03 14:22:03
         compiled from sm/xm.php */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'GbToBig', 'sm/xm.php', 16, false),array('modifier', 'c', 'sm/xm.php', 17, false),array('modifier', 'getzywh', 'sm/xm.php', 19, false),array('modifier', 'getsancai', 'sm/xm.php', 43, false),)), $this); ?>

<table width="100%" border="0" cellpadding="0" cellspacing="0"   style="MARGIN-BOTTOM: 10px; table-layout:fixed;word-wrap:break-word;">  
  <tbody>
    <tr>
      <td colspan="5" bgcolor="#FFFFFF"><table height='100%' width="100%" border="0" cellpadding="0" cellspacing="0"  style="border:1px 0 1px 0; table-layout:fixed;word-wrap:break-word;">
        <tbody>
          <tr>
            <td bgcolor="#FFFFFF"></td>
            <td align="center" bgcolor="#FFFFFF"><font color="ababab">����</font></td>
            <td align="center" bgcolor="#FFFFFF"><font color="ababab">ƴ��</font></td>
            <td align="center" bgcolor="#FFFFFF"><font color="ababab">�����ʻ�</font></td>
            <td align="center" bgcolor="#FFFFFF"><font color="ababab">��������</font></td>
            </tr>
          <tr>
            <td  align="center" bgcolor="#FFFFFF" class="new2"><?php echo $this->_tpl_vars['xing1']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo ((is_array($_tmp=$this->_tpl_vars['xing1'])) ? $this->_run_mod_handler('GbToBig', true, $_tmp) : GbToBig($_tmp)); ?>
</font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo ((is_array($_tmp=$this->_tpl_vars['xing1'])) ? $this->_run_mod_handler('c', true, $_tmp) : c($_tmp)); ?>
</font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo $this->_tpl_vars['bihua1']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ((is_array($_tmp=$this->_tpl_vars['xing11'])) ? $this->_run_mod_handler('getzywh', true, $_tmp) : getzywh($_tmp)); ?>
</td>
          </tr>
          <tr>
         <?php if (( $this->_tpl_vars['xing22'] <> "" )): ?>   <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo $this->_tpl_vars['xing2']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo ((is_array($_tmp=$this->_tpl_vars['xing2'])) ? $this->_run_mod_handler('GbToBig', true, $_tmp) : GbToBig($_tmp)); ?>
</font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo ((is_array($_tmp=$this->_tpl_vars['xing22'])) ? $this->_run_mod_handler('c', true, $_tmp) : c($_tmp)); ?>
</font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo $this->_tpl_vars['bihua2']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ((is_array($_tmp=$this->_tpl_vars['xing22'])) ? $this->_run_mod_handler('getzywh', true, $_tmp) : getzywh($_tmp)); ?>
</td>
          </tr><?php endif; ?>
          <tr>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo $this->_tpl_vars['ming1']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo ((is_array($_tmp=$this->_tpl_vars['ming1'])) ? $this->_run_mod_handler('GbToBig', true, $_tmp) : GbToBig($_tmp)); ?>
</font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo ((is_array($_tmp=$this->_tpl_vars['ming1'])) ? $this->_run_mod_handler('c', true, $_tmp) : c($_tmp)); ?>
</font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo $this->_tpl_vars['bihua3']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ((is_array($_tmp=$this->_tpl_vars['ming11'])) ? $this->_run_mod_handler('getzywh', true, $_tmp) : getzywh($_tmp)); ?>
</td>
          </tr>
          <?php if (( $this->_tpl_vars['ming22'] <> "" )): ?><tr>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo $this->_tpl_vars['ming2']; ?>
</td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo ((is_array($_tmp=$this->_tpl_vars['ming2'])) ? $this->_run_mod_handler('GbToBig', true, $_tmp) : GbToBig($_tmp)); ?>
</font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><font color="aaaaaa"><?php echo ((is_array($_tmp=$this->_tpl_vars['ming22'])) ? $this->_run_mod_handler('c', true, $_tmp) : c($_tmp)); ?>
</font></td>
            <td align="center" bgcolor="#FFFFFF" class="new2"><?php echo $this->_tpl_vars['bihua4']; ?>
</td><td align="center" bgcolor="#FFFFFF" class="new2"><?php echo ((is_array($_tmp=$this->_tpl_vars['ming22'])) ? $this->_run_mod_handler('getzywh', true, $_tmp) : getzywh($_tmp)); ?>
</td>
          </tr><?php endif; ?>
        </tbody>
      </table></td>
      <td width="25%"  class="new2" align="center" bgcolor="#FFFFFF">���-&gt; <?php echo $this->_tpl_vars['tiange']; ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['tiange'])) ? $this->_run_mod_handler('getsancai', true, $_tmp) : getsancai($_tmp)); ?>
)<br />
      <p>�˸�-&gt; <?php echo $this->_tpl_vars['renge']; ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['renge'])) ? $this->_run_mod_handler('getsancai', true, $_tmp) : getsancai($_tmp)); ?>
)</p>        <p>�ظ�-&gt; <?php echo $this->_tpl_vars['dige']; ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['dige'])) ? $this->_run_mod_handler('getsancai', true, $_tmp) : getsancai($_tmp)); ?>
)</p></td>
      <td width="25%"  class="new2" align="center" bgcolor="#FFFFFF">���-&gt; <?php echo $this->_tpl_vars['waige']; ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['waige'])) ? $this->_run_mod_handler('getsancai', true, $_tmp) : getsancai($_tmp)); ?>
)<br />
      <p>��</p>        <p>�ܸ�-&gt; <?php echo $this->_tpl_vars['zhongge']; ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['zhongge'])) ? $this->_run_mod_handler('getsancai', true, $_tmp) : getsancai($_tmp)); ?>
)</p></td>
    </tr>
  </tbody>
</table><table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
      <tr>
        <TD class=ttd><p><font color="#0000FF">���<?php echo $this->_tpl_vars['tiangee']; ?>
�Ľ�����</font><font color="#ff0000">��������������������ģ����������Ӱ�첻��</font>
</TD>
      </tr>
<tr>
        <TD class=ttd>
<?php echo $this->_tpl_vars['tgyy']; ?>
&nbsp;<font color=red>(<?php echo $this->_tpl_vars['tgjx']; ?>
)</font></TD>
      </tr> <tr>
        <TD class=ttd>�� ��ϸ���ͣ�
<br />
<?php echo $this->_tpl_vars['tgxx']; ?>
</TD>
      </tr>      <tr>
        <TD class=ttd><p><font color="#0000FF">�˸�<?php echo $this->_tpl_vars['rengee']; ?>
�Ľ�����</font><font color="#ff0000">�˸����ֳ����ˣ����������������ĵ㣬Ӱ���˵�һ�����ˡ�</font>
</TD>
      </tr>
 <tr>
        <TD class=ttd>
<?php echo $this->_tpl_vars['rgyy']; ?>
&nbsp;<font color=red>(<?php echo $this->_tpl_vars['rgjx']; ?>
)</font></TD>
      </tr> <tr>
        <TD class=ttd>�� ��ϸ���ͣ�
<br />
<?php echo $this->_tpl_vars['rgxx']; ?>
</TD>
      </tr>  <tr>
        <TD class=ttd><p><font color="#0000FF">�ظ�<?php echo $this->_tpl_vars['digee']; ?>
�Ľ�����</font><font color="#ff0000">�ظ����ֳ�ǰ�ˣ�Ӱ�������꣨36�꣩��ǰ�Ļ����</font>
</TD>
      </tr> 
<tr>
        <TD class=ttd>
<?php echo $this->_tpl_vars['dgyy']; ?>
&nbsp;<font color=red>(<?php echo $this->_tpl_vars['dgjx']; ?>
)</font></TD>
      </tr> <tr>
        <TD class=ttd>�� ��ϸ���ͣ�
<br />
<?php echo $this->_tpl_vars['dgxx']; ?>
</TD>
      </tr> <tr>
        <TD class=ttd><p><font color="#0000FF">�ܸ�<?php echo $this->_tpl_vars['zhonggee']; ?>
�Ľ�����</font><font color="#ff0000">�ܸ��ֳƺ��ˣ�Ӱ�������꣨36�꣩�Ժ�����ˡ�</font>
</TD>
      </tr> 
<tr>
        <TD class=ttd>
<?php echo $this->_tpl_vars['zgyy']; ?>
&nbsp;<font color=red>(<?php echo $this->_tpl_vars['zgjx']; ?>
)</font></TD>
      </tr> <tr>
        <TD class=ttd>�� ��ϸ���ͣ�
<br />
<?php echo $this->_tpl_vars['zgxx']; ?>
</TD>
      </tr> <tr>
        <TD class=ttd><p><font color="#0000FF">���<?php echo $this->_tpl_vars['waigee']; ?>
�Ľ�����</font><font color="#ff0000">����ֳƱ��Ӱ���˵��罻�������ǻ۵ȣ����������ص�ȥ����</font>
</TD>
      </tr> 
 <tr>
        <TD class=ttd>
<?php echo $this->_tpl_vars['wgyy']; ?>
&nbsp;<font color=red>(<?php echo $this->_tpl_vars['wgjx']; ?>
)</font></TD>
      </tr> <tr>
        <TD class=new>�� ��ϸ���ͣ�
<br />
<?php echo $this->_tpl_vars['wgxx']; ?>
</TD>
      </tr>
    </TBODY>
</TABLE>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
      <tr>
        <TD class=ttd>

<font color="#0000FF">�����������Ӱ��:</font> ����������������Ϊ��<font color="#ff0000"><?php echo $this->_tpl_vars['sancai']; ?>
</font>�����������������յ������ݴ˻����������һ����Ӱ�졣</TD>
      </tr><tr><td class=ttd><?php echo $this->_tpl_vars['scyy']; ?>
 (<?php echo $this->_tpl_vars['scjx']; ?>
)
</td></tr><tr><td class=new><?php echo $this->_tpl_vars['sancaicontent']; ?>

</td></tr>
    </TBODY>
</TABLE>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
      <tr>
        <TD width="24%" class=ttd>
<font color="#0000FF">�Ի����˵�Ӱ��:</font></TD>
        <TD width="76%" class=ttd><?php echo $this->_tpl_vars['jcy']; ?>
 <?php echo $this->_tpl_vars['jcyjx']; ?>
</TD>
      </tr><tr><td class=ttd>
<font color="#0000FF">�Գɹ��˵�Ӱ��:</font></td>
        <td class=ttd><?php echo $this->_tpl_vars['cgy']; ?>
 <?php echo $this->_tpl_vars['cgyjx']; ?>
</td>
      </tr>
      <tr><td class=ttd>
<font color="#0000FF">���˼ʹ�ϵ��Ӱ��:</font></td>
        <td class=ttd><?php echo $this->_tpl_vars['rjgx']; ?>
 <?php echo $this->_tpl_vars['rjgxjx']; ?>
</td>
      </tr><tr><td class=new>
<font color="#0000FF">���Ը��Ӱ��:</font></td>
        <td class=new><?php echo $this->_tpl_vars['xg']; ?>
</td>
      </tr>
    </TBODY>
</TABLE><table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
      <tr>
        <TD width="24%" class=ttd>
<font color="#0000FF">�˸�<?php echo $this->_tpl_vars['rengee']; ?>
����������ʾ:</font></TD>
        <TD width="76%" class=ttd><?php echo $this->_tpl_vars['rgas']; ?>
</TD>
      </tr><tr><td class=ttd>
<font color="#0000FF">�ظ�<?php echo $this->_tpl_vars['digee']; ?>
����������ʾ:</font></td>
        <td class=ttd><?php echo $this->_tpl_vars['dgas']; ?>
</td>
      </tr>
      <tr><td class=ttd>
<font color="#0000FF">�ܸ�<?php echo $this->_tpl_vars['zhonggee']; ?>
����������ʾ:</font></td>
        <td class=ttd><?php echo $this->_tpl_vars['zgas']; ?>
</td>
      </tr><tr><td class=new>
<font color="#0000FF">�ظ�<?php echo $this->_tpl_vars['waigee']; ?>
����������ʾ:</font></td>
        <td class=new><?php echo $this->_tpl_vars['wgas']; ?>
</td>
      </tr>
    </TBODY>
</TABLE><table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
      <tr>

        <TD width="67%" class=new>���������飺<br /><br />
          <?php if (( $this->_tpl_vars['xmdf'] < 60 )): ?>������ֿ��ܲ��Ǻܺá�ǿ�ҽ����㻻���������ԣ�Ҳ����������˶��ı�ġ�
		<?php elseif (( $this->_tpl_vars['xmdf'] < 70 && $this->_tpl_vars['xmdf'] >= 60 )): ?>
		������ֿ��ܲ�̫�ã�������ܵĻ����������Ըı�һ�£�Ҳ������°빦��֮Ч��
		<?php elseif (( $this->_tpl_vars['xmdf'] < 80 && $this->_tpl_vars['xmdf'] >= 70 )): ?>������ֿ��ܲ�̫���룬Ҫ��Ӯ�óɹ�������ȱ��˸�������ļ����ͺ�ˮ��������������ĸ�����Ҳδ�����ɡ�
		<?php elseif (( $this->_tpl_vars['xmdf'] < 80 && $this->_tpl_vars['xmdf'] >= 70 )): ?>�������һ�㡣��Ȼ����·;�л�����һЩ���ѣ���ֻҪŬ�������ǻ��кܶ��ջ�ġ�������������ĸ�����Ҳδ�����ɡ�
		<?php elseif (( $this->_tpl_vars['xmdf'] < 90 && $this->_tpl_vars['xmdf'] >= 80 )): ?>
		�������ȡ�ò���������������õ���������������һ��˳���ģ�ף����ˣ�
		<?php elseif (( $this->_tpl_vars['xmdf'] >= 90 )): ?>
		�������ȡ�÷ǳ�����������������õ����ɹ��뾪ϲ����������һ������ǧ��ע�ⲻҪʧȥ�Ͻ��ġ�<?php endif; ?>
		<br><br>
		����������֣�</font><span class=pf><?php echo $this->_tpl_vars['xmdf']; ?>
��</span> </TD>
      </tr>
    </TBODY>
</TABLE>