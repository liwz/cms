
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
  <TBODY>
    <tr> <form name="form1" method="post" action="?m=6&sm=6">
    <input name="act" type="hidden" value="crz">
      <TD vAlign=top class=new style="PADDING-BOTTOM: 8px;width:100%">������ѯ:<select name="yy" size="1" id="yy" style="font-size: 9pt">
          >
          <?selectStepOptions start=$_thisYear end=2020 selected=$_thisYear?>
        </select>��
<select name="mm" size="1" id="mm" style="font-size: 9pt">
  <?selectStepOptions start=1 end=12 selected=$_thisMonth?>
</select>��
<select name="dd" size="1" id="dd" style="font-size: 9pt">
  <?selectStepOptions start=1 end=31 selected=$_thisDay?>
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
                <? foreach name=name key=i item=weekday from=$weeklyInfo ?>
                  <option value="<?$i?>"><?$weekday?></option>
                <? /foreach ?>
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
<?	if (isset($smarty.request.act) && $smarty.request.act=="crz") ?>
<tr>
      <TD colspan="2" vAlign=top class=new style="PADDING-BOTTOM: 8px"><strong>����ͳ����</strong><span class="red"><? $cxdate ?> ũ��:<? $rs.nn ?> <? $weeklyInfo[$rs.xq] ?> <?assign var="rsxz" value="`$rs.xz-1`"?><? $astroInfo[$rsxz] ?></span></TD>
        </tr>
 </TBODY>
</TABLE> 
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY><tr>
        <TD width="17%" vAlign=top class=new style="PADDING-BOTTOM: 8px"><strong>���</strong></TD>
        <TD width="83%" vAlign=top class=new style="PADDING-BOTTOM: 8px"><? $rs.suici ?></TD>
      </tr>
      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><STRONG>����λ</STRONG></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px">ϲ��<? $zsfw.xs ?>
                                                             ����<? $zsfw.cs ?>
                                                             ����<? $zsfw.fs ?>
                                                             ����<? $zsfw.hs ?>
                                                             <br><? $zsfw.jxrsdj ?>
                                                             <br>��ϲ�����֮λ����֮�������˱�֮����ʱ����֮������ʱ�����ã�
        </TD>
      </tr>
      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><STRONG>ÿ��̥��ռ��</STRONG></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><? $rs.tszf ?></TD>
      </tr>
      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><STRONG>����</STRONG></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><? $rs.wuhang ?></TD>
      </tr>
      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><img src="<? $siteTheme ?>/images/ic01.gif" width="26" height="23"></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><? $rs.cong ?></TD>
      </tr>
      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><STRONG>����ټ�</STRONG></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><? $rs.pzbj ?></TD>
      </tr>
      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><STRONG>��������</STRONG></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><? $rs.jsyq ?></TD>
      </tr>
      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><img src="<? $siteTheme ?>/images/ic02.gif" width="26" height="23"></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><? $rs.yi|replace:$word:"<font color=red><b>$word</b></font>" ?></TD>
      </tr>
      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><STRONG>�����˼�</STRONG></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><? $rs.xsyq ?></TD>
      </tr>
      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><img src="<? $siteTheme ?>/images/ic03.gif" width="26" height="23"></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><? $rs.ji|replace:$word:"<font color=blue><b>$word</b></font>" ?></TD>
      </tr>
      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><STRONG>��ϸʱ��</STRONG></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><? $rs.xx ?></TD>
      </tr>
      </TBODY>
  </TABLE>
  <? elseif (isset($smarty.request.act) && $smarty.request.act=="xrz") ?>
  <? if (!$allshu)  ?><tr>
      <TD colspan="2" vAlign=top class=new style="PADDING-BOTTOM: 8px"><strong>��<? $_nowDate ?>��ʼ<? $upto ?>���ڣ�û�з���Ҫ�� "<? $word ?>" �ļ�¼</strong></TD>
        </tr>
 </TBODY>
</TABLE>
<? else ?>
<tr>
      <TD colspan="2" vAlign=top class=new style="PADDING-BOTTOM: 8px"><strong>��<? $_nowDate ?>��ʼ<? $upto ?>���ڣ�����<? $allshu ?>�����ӷ���Ҫ�� "<? $word ?>"  <? if ($allshu>20)  ?>����ֻ�г����20����¼<? /if ?></strong></TD>
        </tr>
 </TBODY>
</TABLE> 
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
    <? foreach name=name key=i item=rs from=$list ?>
      <tr>
        <TD width="6%" vAlign=top class=new style="PADDING-BOTTOM: 8px"><div align="center"><STRONG><? $i+1 ?></STRONG></div></TD>
        <TD width="94%" vAlign=top class=new style="PADDING-BOTTOM: 8px"><a href=?m=6&sm=6&yy=<?php?> echo substr($this->_tpl_vars['rs']['gn'],0, 4) <?/php?>&mm=<?php?> echo substr($this->_tpl_vars['rs']['gn'],5, 2) <?/php?>&dd=<?php?> echo substr($this->_tpl_vars['rs']['gn'],8, 2) <?/php?>&act=crz&word=<? $word ?>><font color=red>��Ԫ<? $rs.gn ?> , ũ�� <? $rs.nn ?> <? $weeklyInfo[$rs.xq] ?> <?assign var="rsxz" value="`$rs.xz-1`"?><? $astroInfo[$rsxz] ?></font></a> </TD>
      </tr>
      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><img src="<? $siteTheme ?>/images/ic01.gif" width="26" height="23"></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><? $rs.cong ?></TD>
      </tr>

      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><img src="<? $siteTheme ?>/images/ic02.gif" width="26" height="23"></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><? $rs.yi|replace:$word:"<font color=red><b>$word</b></font>" ?></TD>
      </tr>
      <tr>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><img src="<? $siteTheme ?>/images/ic03.gif" width="26" height="23"></TD>
        <TD vAlign=top class=new style="PADDING-BOTTOM: 8px"><?$rs.ji|replace:$word:"<font color=blue><b>$word</b></font>" ?></TD>
      </tr>
      <tr>
        <TD colspan="2" vAlign=top class=new><hr noshade color="#CCCCCC"></TD>
        </tr>
        <? /foreach ?>
<? /if ?> 
      </TBODY>
  </TABLE>
  <? /if ?>
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