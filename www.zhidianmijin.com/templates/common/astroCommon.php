
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
      <tr>
        <TD align="left" class=new style="PADDING-BOTTOM: 1px">
<?if ($xing<>"")?>
<?include file="common/astroIndexLink.php"?>
<?else?>
  <? if ($currentAstro) ?><p>��ǰ������<font color=#990000><? $currentAstro ?></font></p> <? /if ?>
<form action="" method="post">��ѯ�ҵ�����:<select name="y" size="1" id="y" style="font-size: 9pt"> 
           <?selectStepOptions start=1900 end=$_thisYear selected=1980?>
          </select>��
<select name="m" size="1" id="m" style="font-size: 9pt">
  <?selectStepOptions start=1 end=12 selected=$_thisMonth?>
</select>��
<select name="d" size="1" id="d" style="font-size: 9pt">
  <?selectStepOptions start=1 end=31 selected=$_thisDay?>
</select>��(��������)
<input name="Input2" type="submit" value="��ѯ" class="bot01"   /><input name="act" type="hidden" value="xzcx"><?if (isset($smarty.request.act) && $smarty.request.act=="xzcx")?>&nbsp;��ѯ���:<?$smarty.request.y|cat:"-"|cat:$smarty.request.m|cat:"-"|cat:$smarty.request.d|Constellation?></form>
<?/if?><?/if?></TD>
      </tr>
      <tr>
        <TD align="left" class=new style="PADDING-BOTTOM: 1px"><span class="red">�������</span>��<a href="?m=2&sm=1&flag=4&astro=������">ĵ����</a>��<a href="?m=2&sm=1&flag=4&astro=��ţ��">��ţ��</a>��<a href="?m=2&sm=1&flag=4&astro=˫����">˫����</a>��<a href="?m=2&sm=1&flag=4&astro=��з��">��з��</a>��<a href="?m=2&sm=1&flag=4&astro=ʨ����">ʨ����</a>��<a href="?m=2&sm=1&flag=4&astro=��Ů��">��Ů��</a>��<a href="?m=2&sm=1&flag=4&astro=�����">�����</a>��<a href="?m=2&sm=1&flag=4&astro=��Ы��">��Ы��</a>��<a href="?m=2&sm=1&flag=4&astro=������">������</a>��<a href="?m=2&sm=1&flag=4&astro=ħ����">ħ����</a>��<a href="?m=2&sm=1&flag=4&astro=ˮƿ��">ˮƿ��</a>��<a href="?m=2&sm=1&flag=4&astro=˫����">˫����</a></TD>
      </tr>
    </TBODY>
  </TABLE>

