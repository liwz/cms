<?php /* Smarty version 2.6.6, created on 2009-06-28 14:07:38
         compiled from yuce/sanshishu.php */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'selectStepOptions', 'yuce/sanshishu.php', 95, false),)), $this); ?>
<SCRIPT language=JavaScript>
<!--
function IsCn(Str)
{
    for(i=0;i<Str.length;i++) {
        if(41125<Str.charCodeAt(i) || Str.charCodeAt(i)<20224) {
            return false;
        }
    }
    return true;
}
function submitchecken() {
	if (document.cidu.youname1.value == "") {
		alert("���������ϡ�");
		document.cidu.youname1.focus();
		return false;
		}
	if (IsCn(document.cidu.youname1.value)==false) {
		alert("�������,Ӧ�ö�Ϊ���֡�");
		document.cidu.youname1.focus();
		return false;
		}
	if (document.cidu.youname1.value.length > 2) {
		alert("�����������,���ܶ���2�֡�");
		document.cidu.youname1.focus();
		return false;
		}

	if (document.cidu.youname2.value == "") {
		alert("����������");
		document.cidu.youname2.focus();
		return false;
		}
	if (IsCn(document.cidu.youname2.value)==false) {
		alert("�������,Ӧ�ö�Ϊ���֡�");
		document.cidu.youname2.focus();
		return false;
		}
	if (document.cidu.youname2.value.length > 2) {
		alert("�����������,���ܶ���2�֡�");
		document.cidu.youname2.focus();
		return false;
		}
	if (document.cidu.nn.value.length != 4) {
		alert("���λ��������,����Ϊ4λ��");
		document.cidu.nian.focus();
		return false;
		}
	
	re="���������룡";
 	y=document.cidu.nian.value;
 	m=document.cidu.yue.value;

 	h=document.cidu.hh.value;

	if (y==""||y<1901||y>2050) {
		alert("��Ӧ��1901��2050֮�䡣"+re);
		document.cidu.nian.focus();
		return false;
		}
	if (m>12||m<1) {
		alert("��Ӧ��1��12֮�䡣"+re);
		document.cidu.yue.focus();
		return false;
		}


	if (h>23||h<0) {
		alert("ʱӦ��0��23֮�䡣"+re);
		document.cidu.hh.focus();
		return false;
		}
	return true;
	}
//-->
</SCRIPT>

  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td width="79%" class="ttd"><span class="red">&lt;&lt;������-����ƪ&gt;&gt; ������Ĳ�����������������?</span>
    <br>
����:�������Ǵ�˵��һ�����Կ�����ǰ��,�����ͺ�������.���������˵�һ�ж�����.�������ƪ��ר�Ŵ����澫ѡ����,�����㵽��Ĳ��������������͵�,��˵��׼��Ŷ,���԰�~~</td>
    <td width="21%" class="ttd"><img src="diary_book/images/sss.gif"></td>
</tr>
<form method="post" action="?m=6&sm=8" name=cidu  onsubmit="return submitchecken();">
  <tr>
    <td colspan="2" class="new"><div align=center>
  	�գ�<input type=txt name=youname1 size=4 value=""  onKeypress="if ((event.keyCode != 13 && event.keyCode < 160)) event.returnValue = false;">
  	����<input type=txt name=youname2 size=4 value=""  onKeypress="if ((event.keyCode != 13 && event.keyCode < 160)) event.returnValue = false;">
  	�Ա�<select name="sex" size="1" style="font-size: 9pt">
  	<option value="��" selected>��</option>
  	<option value="Ů" >Ů</option>
  	    </select>
  	������ũ������!:<input name="nx" size="1" type=hidden value="����"><select name="nn" size="1" id="nn" style="font-size: 9pt">            
        <?php echo selectStepOptions(array('start' => 1900,'end' => 2158,'selected' => $this->_tpl_vars['_thisYear']), $this);?>
        
        
      </select>��
      <select size="1" name="yue" style="font-size: 9pt">           
        <?php echo selectStepOptions(array('start' => 1,'end' => 12,'selected' => $this->_tpl_vars['_thisMonth']), $this);?>
            
      </select>��
   <select size="1" name="ri" style="font-size: 9pt">         
        <?php echo selectStepOptions(array('start' => 1,'end' => 31,'selected' => $this->_tpl_vars['_thisDay']), $this);?>
          
    </select>��
      <select size="1" name="hh" style="font-size: 9pt">
      <?php echo selectStepOptions(array('start' => 0,'end' => 23), $this);?>
  
      </select>��
      <input type="submit" name="btnAdd" value="����"></td>
    </tr><tr bgcolor="#EFF8FE">
  <td class="new" colspan="2" valign="middle"><div align="center"><A href='#' style='cursor:hand;' onclick="window.open('wannianli.htm','cidunongli','left=160,top=100,width=700,height=400,scrollbars=no,resizable=no,status=no')" title="�����ֻ֪�����յĹ������ڣ���Ҫ�����������ȥ��ѯũ������">[<font color=red>��ѯũ������</font>]</a></div></td>
</tr>
<?php if (( $_REQUEST['nn'] )): ?>

<tr bgcolor="#EFF8FE">
<td class="new" colspan="2" valign="middle">
<br><br>&nbsp;Ԥ�������£�<br><br>&nbsp;��Ĳ�����<font size='6' color=red>��<?php echo $this->_tpl_vars['content']; ?>
��</font><br><br>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['content1']; ?>


</td>
</tr><?php endif; ?>
</tbody>
</table>