<?php /* Smarty version 2.6.6, created on 2010-01-14 09:18:11
         compiled from yuce/hdjr.php */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'selectStepOptions', 'yuce/hdjr.php', 8, false),array('modifier', 'replace', 'yuce/hdjr.php', 102, false),)), $this); ?>

  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
  <TBODY>
    <tr> <form name="form1" method="post" action="?m=6&sm=6">
    <input name="act" type="hidden" value="crz">
      <TD vAlign=top class=new style="PADDING-BOTTOM: 8px;width:100%">������ѯ:<select name="yy" size="1" id="yy" style="font-size: 9pt">
          >
          <?php echo selectStepOptions(array('start' => $this->_tpl_vars['_thisYear'],'end' => 2020,'selected' => $this->_tpl_vars['_thisYear']), $this);?>

        </select>��
<select name="mm" size="1" id="mm" style="font-size: 9pt">
  <?php echo selectStepOptions(array('start' => 1,'end' => 12,'selected' => $this->_tpl_vars['_thisMonth']), $this);?>

</select>��
<select name="dd" size="1" id="dd" style="font-size: 9pt">
  <?php echo selectStepOptions(array('start' => 1,'end' => 31,'selected' => $this->_tpl_vars['_thisDay']), $this);?>

</select>�� <input type="submit" name="Submit" value="��ѯ">        </TD></form>
    </tr>
    <tr>
       <form name="form1" method="post" action="?m=6&sm=6">
         <TD vAlign=top class=new style="PADDING-BOTTOM: 8px">ѡ����:<select name="upto" >
                <option value="3">3������</option>
                <option value="7">һ������</option>
                <option value="30">һ������</option>
                <option value="90">��������</option>
                <option value="180">������</option>
                <option value="365">������</option>
            </select>
            <select name="weekday" >
                <option value="-">���ڣ�</option>
                <?php if (isset($this->_foreach['name'])) unset($this->_foreach['name']);
$this->_foreach['name']['total'] = count($_from = (array)$this->_tpl_vars['weeklyInfo']);
$this->_foreach['name']['show'] = $this->_foreach['name']['total'] > 0;
if ($this->_foreach['name']['show']):
$this->_foreach['name']['iteration'] = 0;
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['weekday']):
        $this->_foreach['name']['iteration']++;
        $this->_foreach['name']['first'] = ($this->_foreach['name']['iteration'] == 1);
        $this->_foreach['name']['last']  = ($this->_foreach['name']['iteration'] == $this->_foreach['name']['total']);
?>
                  <option value="<?php echo $this->_tpl_vars['i']; ?>
"><?php echo $this->_tpl_vars['weekday']; ?>
</option>
                <?php endforeach; unset($_from); endif; ?>
            </select>
           <select name="tp" size="1">
             <option value="0" ="">��</option>
             <option value="1" ="">��</option>
           </select>
           <select name="word" size="1">
<option value="����" ="">����</option>
<option value="����" ="">����</option>
<option value="��Ȣ" ="">��Ȣ</option>
<option value="��լ" ="">��լ</option>
<option value="��ѧ" ="">��ѧ</option>
<option value="�ɲ�" ="">�ɲ�</option>
<option value="����" ="">����</option>
<option value="����" ="">����</option>
<option value="����" ="">����</option>
<option value="����" ="">����</option>
<option value="����" ="">����</option>
<option value="��" ="">��</option>
<option value="����" ="">����</option>
<option value="����" ="">����</option>
<option value="����" ="">����</option>
</select>
<input type="submit" name="Submit2" value="��ѯ">
<input name="Submit22" type="button" style="color:#FF0000" onClick="(location='?m=6&sm=6&act=xrz&word=��Ȣ&upto=365&tp=0')" value="��鼪��">
<input name="act" type="hidden" value="xrz"></TD>
       </form>
    </tr>
<?php if (( isset ( $_REQUEST['act'] ) && $_REQUEST['act'] == 'crz' )): ?>
<tr>
      <TD colspan="2" vAlign=top class=new style="PADDING-BOTTOM: 8px"><strong>����ͳ����</strong><span class="red"><?php echo $this->_tpl_vars['cxdate']; ?>
 ũ��:<?php echo $this->_tpl_vars['rs']['nn']; ?>
 <?php echo $this->_tpl_vars['weeklyInfo'][$this->_tpl_vars['rs']['xq']]; ?>
 <?php $this->assign('rsxz', ($this->_tpl_vars['rs']['xz']-1));  echo $this->_tpl_vars['astroInfo'][$this->_tpl_vars['rsxz']]; ?>
</span></TD>
        </tr>
 </TBODY>
</TABLE> 
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY><tr>
        <TD width="17%" vAlign=top class=new style="PADDING-BOTTOM: 8px"><strong>���</strong></TD>
        <TD width="83%" vAlign=top class=new style="PADDING-BOTTOM: 8px"><?php echo $this->_tpl_vars['rs']['suici']; ?>
</TD>
      </tr>
      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><STRONG>����λ</STRONG></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px">ϲ��<?php echo $this->_tpl_vars['zsfw']['xs']; ?>

                                                             ����<?php echo $this->_tpl_vars['zsfw']['cs']; ?>

                                                             ����<?php echo $this->_tpl_vars['zsfw']['fs']; ?>

                                                             ����<?php echo $this->_tpl_vars['zsfw']['hs']; ?>

                                                             <br><?php echo $this->_tpl_vars['zsfw']['jxrsdj']; ?>

                                                             <br>��ϲ�����֮λ����֮�������˱�֮����ʱ����֮������ʱ�����ã�
        </TD>
      </tr>
      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><STRONG>ÿ��̥��ռ��</STRONG></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><?php echo $this->_tpl_vars['rs']['tszf']; ?>
</TD>
      </tr>
      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><STRONG>����</STRONG></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><?php echo $this->_tpl_vars['rs']['wuhang']; ?>
</TD>
      </tr>
      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><img src="<?php echo $this->_tpl_vars['siteTheme']; ?>
/images/ic01.gif" width="26" height="23"></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><?php echo $this->_tpl_vars['rs']['cong']; ?>
</TD>
      </tr>
      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><STRONG>����ټ�</STRONG></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><?php echo $this->_tpl_vars['rs']['pzbj']; ?>
</TD>
      </tr>
      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><STRONG>��������</STRONG></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><?php echo $this->_tpl_vars['rs']['jsyq']; ?>
</TD>
      </tr>
      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><img src="<?php echo $this->_tpl_vars['siteTheme']; ?>
/images/ic02.gif" width="26" height="23"></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><?php echo ((is_array($_tmp=$this->_tpl_vars['rs']['yi'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['word'], "<font color=red><b>".($this->_tpl_vars['word'])."</b></font>") : smarty_modifier_replace($_tmp, $this->_tpl_vars['word'], "<font color=red><b>".($this->_tpl_vars['word'])."</b></font>")); ?>
</TD>
      </tr>
      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><STRONG>�����˼�</STRONG></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><?php echo $this->_tpl_vars['rs']['xsyq']; ?>
</TD>
      </tr>
      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><img src="<?php echo $this->_tpl_vars['siteTheme']; ?>
/images/ic03.gif" width="26" height="23"></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><?php echo ((is_array($_tmp=$this->_tpl_vars['rs']['ji'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['word'], "<font color=blue><b>".($this->_tpl_vars['word'])."</b></font>") : smarty_modifier_replace($_tmp, $this->_tpl_vars['word'], "<font color=blue><b>".($this->_tpl_vars['word'])."</b></font>")); ?>
</TD>
      </tr>
      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><STRONG>��ϸʱ��</STRONG></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><?php echo $this->_tpl_vars['rs']['xx']; ?>
</TD>
      </tr>
      </TBODY>
  </TABLE>
  <?php elseif (( isset ( $_REQUEST['act'] ) && $_REQUEST['act'] == 'xrz' )): ?>
  <?php if (( ! $this->_tpl_vars['allshu'] )): ?><tr>
      <TD colspan="2" vAlign=top class=new style="PADDING-BOTTOM: 8px"><strong>��<?php echo $this->_tpl_vars['_nowDate']; ?>
��ʼ<?php echo $this->_tpl_vars['upto']; ?>
���ڣ�û�з���Ҫ�� "<?php echo $this->_tpl_vars['word']; ?>
" �ļ�¼</strong></TD>
        </tr>
 </TBODY>
</TABLE>
<?php else: ?>
<tr>
      <TD colspan="2" vAlign=top class=new style="PADDING-BOTTOM: 8px"><strong>��<?php echo $this->_tpl_vars['_nowDate']; ?>
��ʼ<?php echo $this->_tpl_vars['upto']; ?>
���ڣ�����<?php echo $this->_tpl_vars['allshu']; ?>
�����ӷ���Ҫ�� "<?php echo $this->_tpl_vars['word']; ?>
"  <?php if (( $this->_tpl_vars['allshu'] > 20 )): ?>����ֻ�г����20����¼<?php endif; ?></strong></TD>
        </tr>
 </TBODY>
</TABLE> 
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
    <?php if (isset($this->_foreach['name'])) unset($this->_foreach['name']);
$this->_foreach['name']['total'] = count($_from = (array)$this->_tpl_vars['list']);
$this->_foreach['name']['show'] = $this->_foreach['name']['total'] > 0;
if ($this->_foreach['name']['show']):
$this->_foreach['name']['iteration'] = 0;
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['rs']):
        $this->_foreach['name']['iteration']++;
        $this->_foreach['name']['first'] = ($this->_foreach['name']['iteration'] == 1);
        $this->_foreach['name']['last']  = ($this->_foreach['name']['iteration'] == $this->_foreach['name']['total']);
?>
      <tr>
        <TD width="6%" vAlign=top class=new style="PADDING-BOTTOM: 8px"><div align="center"><STRONG><?php echo $this->_tpl_vars['i']+1; ?>
</STRONG></div></TD>
        <TD width="94%" vAlign=top class=new style="PADDING-BOTTOM: 8px"><a href=?m=6&sm=6&yy=<?php  echo substr($this->_tpl_vars['rs']['gn'],0, 4)  ?>&mm=<?php  echo substr($this->_tpl_vars['rs']['gn'],5, 2)  ?>&dd=<?php  echo substr($this->_tpl_vars['rs']['gn'],8, 2)  ?>&act=crz&word=<?php echo $this->_tpl_vars['word']; ?>
><font color=red>��Ԫ<?php echo $this->_tpl_vars['rs']['gn']; ?>
 , ũ�� <?php echo $this->_tpl_vars['rs']['nn']; ?>
 <?php echo $this->_tpl_vars['weeklyInfo'][$this->_tpl_vars['rs']['xq']]; ?>
 <?php $this->assign('rsxz', ($this->_tpl_vars['rs']['xz']-1));  echo $this->_tpl_vars['astroInfo'][$this->_tpl_vars['rsxz']]; ?>
</font></a> </TD>
      </tr>
      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><img src="<?php echo $this->_tpl_vars['siteTheme']; ?>
/images/ic01.gif" width="26" height="23"></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><?php echo $this->_tpl_vars['rs']['cong']; ?>
</TD>
      </tr>

      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><img src="<?php echo $this->_tpl_vars['siteTheme']; ?>
/images/ic02.gif" width="26" height="23"></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><?php echo ((is_array($_tmp=$this->_tpl_vars['rs']['yi'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['word'], "<font color=red><b>".($this->_tpl_vars['word'])."</b></font>") : smarty_modifier_replace($_tmp, $this->_tpl_vars['word'], "<font color=red><b>".($this->_tpl_vars['word'])."</b></font>")); ?>
</TD>
      </tr>
      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><img src="<?php echo $this->_tpl_vars['siteTheme']; ?>
/images/ic03.gif" width="26" height="23"></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><?php echo ((is_array($_tmp=$this->_tpl_vars['rs']['ji'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['word'], "<font color=blue><b>".($this->_tpl_vars['word'])."</b></font>") : smarty_modifier_replace($_tmp, $this->_tpl_vars['word'], "<font color=blue><b>".($this->_tpl_vars['word'])."</b></font>")); ?>
</TD>
      </tr>
      <tr>
        <TD colspan="2" vAlign=top class=new><hr noshade color="#CCCCCC"></TD>
        </tr>
        <?php endforeach; unset($_from); endif; ?>
<?php endif; ?> 
      </TBODY>
  </TABLE>
  <?php endif; ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
  <TBODY>
    <tr>
      <TD align="left" class=new style="PADDING-BOTTOM:5px">�������ʽ��ͣ�<BR>
        <STRONG>��Ȣ </STRONG>����ȢŮ�ޣ����н����ļ��� <STRONG><BR>
        ���� </STRONG>��ָ����֮���롢���ݼ����Ȼ����µļ��ݡ��������� <STRONG><BR>
        ���� </STRONG>�������������ʽ <STRONG><BR>
        ���� </STRONG>��ָ������С��۹����� <STRONG><BR>
        �� </STRONG>����������������������Ը֮�� <STRONG><BR>
        ���� </STRONG>������ʱ����һ�ζ����ͷ���� <STRONG><BR>
        ���� </STRONG>��ָ����˯������֮�� <STRONG><BR>
        ���� </STRONG>�������ܳɺ󡢹�����λ֮�� <STRONG><BR>
        �ɲ� </STRONG>���޽��������ʽ������Ƹ�� <STRONG><BR>
        ���� </STRONG>����ʬ�����ײ�֮�� <STRONG><BR>
        ���� </STRONG>��ָ���Ǩ��ס��֮�� <STRONG><BR>
        ���� </STRONG>����ָ�����õ���������һ�㽨�����ݵġ���������ͬ����������������լ��������������լҲ���ֽ�����϶�����������լ����ʱ����լ����֮�� <STRONG><BR>
        ��� </STRONG>��ָ��ϴ��ɨլ�ᡢ����ֶ���� <STRONG><BR>
        ��լ </STRONG>����Ǩ����լ����ν���¾���ɵ���Ҳ <STRONG><BR>
        ���� </STRONG>��ָ��լ֮�������� <STRONG><BR>
        ���� </STRONG>����ֲ��ӹ���������̡�ͬ <STRONG><BR>
        ���� </STRONG>������ҵ��֮�⣬��Ʒ�кſ��������⡰��Ļ���񡱡�������ͬ��������(1)��ͷ����ʼӪҵ�򿪹�����(2)����������л��³���Ļ���� <STRONG><BR>
        ���� </STRONG>��������ʱ������ľ�Ƴ�����֮�� <STRONG><BR>
        ���� </STRONG>��������ʽ��һ�֣��׳�СƸ(��) <STRONG><BR>
        ��ж </STRONG>����������� <STRONG><BR>
        ���� </STRONG>������������Լ��������֮�� <STRONG><BR>
        ���� </STRONG>������������Լ��������֮�� <STRONG><BR>
        ���� </STRONG>��ָ�������������(����)֮�� <STRONG><BR>
        ���� </STRONG>��װ�Ͻ������ݶ�������ͬ���� <STRONG><BR>
        �ɲ� </STRONG>�����ݲ�ҵ�����������ʡ����⡢��ծ����������ֵ� <STRONG><BR>
        ��� </STRONG>������ʱ����һ�ζ����ͷ���� <STRONG><BR>
        ի�� </STRONG>�������ǰ����е�ի����ʽ <STRONG><BR>
        ���� </STRONG>���������� <STRONG><BR>
        ���� </STRONG>����Ů������ʮ�������еĳ�������ʽ <STRONG><BR>
        ���� </STRONG>�����������ſ� <STRONG><BR>
        �޷� </STRONG>�������Ĺ <STRONG><BR>
        ���� </STRONG>��ָ�������ƻ�����Ҷ� </TD>
    </tr>
  </TBODY>
</TABLE>