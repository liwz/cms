<?php /* Smarty version 2.6.6, created on 2009-06-29 07:09:59
         compiled from yuce/snsn.php */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'selectStepOptions', 'yuce/snsn.php', 30, false),)), $this); ?>

  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td width="78%" class="ttd"><span class="red">������Ů:</span>
    <br> <br>��Ԥ��һ�£����ǻ������б�������Ů������<br>
    �����������ԡ��幬��ص�������ŮԤ����������ο�������̫�ţ� 
�����·���ũ��Ϊ׼�������£��ϰ������ϸ��·ݼ��㣬�°������¸��·ݼ��㡣  </td>
    <td width="22%" class="ttd"><img src="diary_book/images/snsn.jpg" width="140" height="80"></td>
</tr>
<?php if (( isset ( $_REQUEST['act'] ) && $_REQUEST['act'] == 'ok' )): ?>

  <tr>
    <td colspan="2" class="new"><font color="#0000FF"><?php echo $this->_tpl_vars['mqname']; ?>
</font>������<br>
    <?php if (( $_REQUEST['cs'] == 1 )): ?>
��ϲ�����������㣬��ܿ��ܻ���һ��&nbsp;<font color="#FF0000"><?php echo $this->_tpl_vars['baby']; ?>
</font>
<?php else: ?>
�����������<font color="#FF0000"><?php echo $this->_tpl_vars['baby']; ?>
</font>����ô��������ũ�� <font color="#0000FF">���� ��<?php echo $this->_tpl_vars['yuef']; ?>
&nbsp;&nbsp;���꣺<?php echo $this->_tpl_vars['nyuef']; ?>
</font> ���еĻ�����Ƚϴ�<?php endif; ?><br><br>
      <a class="red" href="?m=6&sm=9">���²���</a>  </td>
<?php else: ?>
  <tr>
    <td colspan="2" class="ttd"><font color="#FF0000">*����Ϊĸ���������䣬�·�ָ�����·ݣ���ũ��Ϊ׼�������£��ϰ������ϸ��·ݼ��㣬�°������¸��·ݼ��㡣</font>
   </td>
    </tr>  <tr>
    <td colspan="2" class="ttd"><font color="#0000ff">*��ҪԤ�ⱦ���Ա�</font>
   </td>
    </tr><form name="theform" method="post" action="">
<input type="hidden" name="act" value="ok" />
<input type="hidden" name="cs" value="1" /><tr>
    <td colspan="2" class="ttd">�ҵķ����У�<input name="mqname" type="text">&nbsp;,���근��(����)��:<select name="nn" size="1" style="font-size: 9pt">
      ><?php echo selectStepOptions(array('start' => 18,'end' => 45,'selected' => 22), $this);?>

     </select>&nbsp;,���е��·�(ũ��)��:<select name="yue" size="1" style="font-size: 9pt">
      ><?php echo selectStepOptions(array('start' => 1,'end' => 12), $this);?>

     </select>�� &nbsp;<input name="sub" type="submit" value="��ʼ����">
   </td></form>
    </tr> <tr>
    <td colspan="2" class="ttd"><font color="#0000ff">*��Ҫ��ѯ�ʺϻ��е��·ݣ�</font>
   </td>
    </tr><form name="theform" method="post" action="">
<input type="hidden" name="act" value="ok" />
<input type="hidden" name="cs" value="2" /><tr>
    <td colspan="2" class="new">�ҵķ����У�<input name="mqname" type="text">&nbsp;,���근��(����)��:<select name="nn" size="1" style="font-size: 9pt">
      >
      <?php echo selectStepOptions(array('start' => 18,'end' => 45,'selected' => 22), $this);?>

     </select>&nbsp;,�Ҽƻ�����:<select name="snsn" size="1" style="font-size: 9pt">
       <option value="��">С����</option>
       <option value="Ů">С����</option>

     </select>
     &nbsp;
     <input name="sub" type="submit" value="��ʼ����">
   </td></form>
    </tr><?php endif; ?>
</tbody>
</table>
 