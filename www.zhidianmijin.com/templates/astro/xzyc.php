  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
      <tr>
        <TD class=new style="PADDING-BOTTOM: 1px" vAlign=top>��������鿴�˳�
          (<a href="?m=2&sm=9&type=today&xz=<?$xz?>">����</a> <a href="?m=2&sm=9&type=nextday&xz=<?$xz?>">����</a> <a href="?m=2&sm=9&type=week&xz=<?$xz?>">����</a> <a href="?m=2&sm=9&type=month&xz=<?$xz?>">����</a> <a href="?m=2&sm=9&type=year&xz=<?$xz?>">����</a> <a href="?m=2&sm=9&type=yearlove&xz=<?$xz?>">���갮������</a>) </TD>
      </tr>
      <tr>
        <TD class=new style="PADDING-BOTTOM: 1px" vAlign=top><span class="new" style="PADDING-BOTTOM: 1px">��<a href="?m=2&sm=9&type=<?$yctype ?>&xz=1">ĵ����</a>��<a href="?m=2&sm=9&type=<?$yctype ?>&xz=2">��ţ��</a>��<a href="?m=2&sm=9&type=<?$yctype ?>&xz=3">˫����</a>��<a href="?m=2&sm=9&type=<?$yctype ?>&xz=4">��з��</a>��<a href="?m=2&sm=9&type=<?$yctype ?>&xz=5">ʨ����</a>��<a href="?m=2&sm=9&type=<?$yctype ?>&xz=6">��Ů��</a>��<a href="?m=2&sm=9&type=<?$yctype ?>&xz=7">�����</a>��<a href="?m=2&sm=9&type=<?$yctype ?>&xz=8">��Ы��</a>��<a href="?m=2&sm=9&type=<?$yctype ?>&xz=9">������</a>��<a href="?m=2&sm=9&type=<?$yctype ?>&xz=10">ħ����</a>��<a href="?m=2&sm=9&type=<?$yctype ?>&xz=11">ˮƿ��</a>��<a href="?m=2&sm=9&type=<?$yctype ?>&xz=12">˫����</a></span></TD>
      </tr>
    </TBODY>
  </TABLE>

  <? if ($yctype=="today") ?>
  <table width="100%" border="0" cellspacing="1" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td colspan="6" class="ttop">
<? if ($xing<>"") ?>
<?$xing?><?$ming?>(<?$nian1 ?>-<?$yue1 ?>-<?$ri1 ?>) �ҵ�������<?$myxz?>
<?/if?>

 ��ǰ������<?$rs.xzmc?>�����˳�</td>
    </tr>
  <tr>
    <td width="17%" rowspan="4" class="new"><img src="<? $siteTheme ?>/images/xz_<?$rs.id ?>.gif" width="100" height="100"><br>      </td>
    <td width="14%" rowspan="4" class="new"><span class="red"><?$rs.xzmc?><br>
        <?$rs.xzrq?></span></td>
    <td width="16%" bgcolor="e7e7e7" class="new">��������:</td>
    <td width="24%" class="new"><img src="<? $siteTheme ?>/images/x_<?$rs.aqys?>.gif"></td>
    <td width="14%" bgcolor="e7e7e7" class="new">�ۺ�����:</td>
    <td width="15%" class="new"><img src="<? $siteTheme ?>/images/x_<?$rs.zhys?>.gif"></td>
  </tr>
  <tr>
    <td bgcolor="e7e7e7" class="new">����״��:</td>
    <td class="new"><img src="<? $siteTheme ?>/images/x_<?$rs.gzzk?>.gif"></td>
    <td bgcolor="e7e7e7" class="new">���Ͷ��:</td>
    <td class="new"><img src="<? $siteTheme ?>/images/x_<?$rs.nctz?>.gif"></td>
  </tr>
  <tr>
    <td bgcolor="e7e7e7" class="new">����ָ��:</td>
    <td class="new"><?$rs.jkzs?></td>
    <td bgcolor="e7e7e7" class="new">��̸ָ��:<br>    </td>
    <td class="new"><?$rs.stzs?></td>
  </tr>
  <tr>
    <td bgcolor="e7e7e7" class="new">��������:</td>
    <td class="new"><?$rs.xysz?></td>
    <td bgcolor="e7e7e7" class="new">��������:</td>
    <td class="new"><?$rs.spxz?></td>
  </tr>
  <tr>
    <td colspan="6" class="new"><?$rs.zhpg?><div align="right"><br>
      ��Ч���ڣ�<?$rs.yxqx?></div></td>
    </tr>
</tbody>
</table><?elseif ($yctype=="nextday") ?>  <table width="100%" border="0" cellspacing="1" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td colspan="6" class="ttop">
<?if ($xing<>"") ?>
<?$xing?><?$ming?>
(<?$nian1 ?>-<?$yue1 ?>-<?$ri1 ?>) �ҵ�������<?$myxz ?>
<?/if?>
 ��ǰ������<?$rs.xzmc?>�����˳�</td>
    </tr>
  <tr>
    <td width="17%" rowspan="4" class="new"><img src="<? $siteTheme ?>/images/xz_<?$rs.id?>.gif" width="100" height="100"><br>      </td>
    <td width="14%" rowspan="4" class="new"><span class="red"><?$rs.xzmc?><br>
        <?$rs.xzrq?></span></td>
    <td width="16%" bgcolor="e7e7e7" class="new">��������:</td>
    <td width="24%" class="new"><img src="<? $siteTheme ?>/images/x_<?$rs.aqys?>.gif"></td>
    <td width="14%" bgcolor="e7e7e7" class="new">�ۺ�����:</td>
    <td width="15%" class="new"><img src="<? $siteTheme ?>/images/x_<?$rs.zhys?>.gif"></td>
  </tr>
  <tr>
    <td bgcolor="e7e7e7" class="new">����״��:</td>
    <td class="new"><img src="<? $siteTheme ?>/images/x_<?$rs.gzzk?>.gif"></td>
    <td bgcolor="e7e7e7" class="new">���Ͷ��:</td>
    <td class="new"><img src="<? $siteTheme ?>/images/x_<?$rs.nctz?>.gif"></td>
  </tr>
  <tr>
    <td bgcolor="e7e7e7" class="new">����ָ��:</td>
    <td class="new"><?$rs.jkzs?></td>
    <td bgcolor="e7e7e7" class="new">��̸ָ��:<br>    </td>
    <td class="new"><?$rs.stzs?></td>
  </tr>
  <tr>
    <td bgcolor="e7e7e7" class="new">��������:</td>
    <td class="new"><?$rs.xysz?></td>
    <td bgcolor="e7e7e7" class="new">��������:</td>
    <td class="new"><?$rs.spxz?></td>
  </tr>
  <tr>
    <td colspan="6" class="new"><?$rs.zhpg?><div align="right"><br>
      ��Ч���ڣ�<? $rs.yxqx?></div></td>
    </tr>
</tbody>
</table><? elseif ($yctype=="week")  ?>  <table width="100%" border="0" cellspacing="1" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td class="ttop">
<? if ($xing<>'')?>
<?$xing?><?$ming?>(<?$nian1 ?>-<?$yue1 ?>-<?$ri1 ?>) �ҵ�������<?$myxz ?>
<?/if?>
 ��ǰ������<?$rs.xzmc?>�����˳�</td>
    </tr>
  <tr>
    <td class="new">
      <table width="100%" border="0">
        <tr>
          <td width="16%"><img src="<? $siteTheme ?>/images/xz_<?$rs.id?>.gif" width="100" height="100"></td>
          <td width="20%" class="new">  <span class="red"> <?$rs.xzmc?><br>
        <?$rs.xzrq?></span></td>
          <td width="64%" class="new"><span class="red"><?$rs.title?>(<?$rs.yxqx?>)</span></td>
        </tr>
      </table>
    </td>
    </tr>
  <tr>
    <td class="new"><strong>��������</strong>:<img src="<? $siteTheme ?>/images/x_<?$rs.ztzs?>.gif"><BR>
      <?$rs.ztys?>
      <hr noshade color="#CCCCCC"></td>
    </tr>
  <tr>
    <td class="new"><strong>��������</strong>:<br>
      �ж���:<img src="<? $siteTheme ?>/images/x_<?$rs.aqzs1?>.gif"><BR>
      <?$rs.aqys1?><br>
      û����:<img src="<? $siteTheme ?>/images/x_<?$rs.aqzs2?>.gif"><BR>
      <?$rs.aqys2?>
      <hr noshade color="#CCCCCC"></td>
    </tr>
  <tr>
    <td class="new"><strong>��������</strong>:<img src="<? $siteTheme ?>/images/x_<?$rs.jkzs?>.gif"><BR>
      <?$rs.jkys?>
      <hr noshade color="#CCCCCC"></td>
    </tr>
  <tr>
    <td class="new"><strong>����ѧҵ��</strong>:<img src="<? $siteTheme ?>/images/x_<?$rs.gzzs?>.gif"><BR>
      <?$rs.gzys?>
      <hr noshade color="#CCCCCC"></td>
    </tr>
  <tr>
    <td class="new"><strong>����ָ��</strong>:<img src="<? $siteTheme ?>/images/x_<?$rs.xyzs?>.gif"><BR>
      <?$rs.xyys?>
      <hr noshade color="#CCCCCC"></td>
  </tr>
  <tr>
    <td class="new"><strong>������</strong>: <?$rs.hxri?><BR>
      <?$rs.hxsm?>
      <hr noshade color="#CCCCCC"></td>
  </tr>
  <tr>
    <td class="new"><strong>��÷��</strong>: <?$rs.hmri?><BR>
      <?$rs.hmsm?></td>
  </tr>
</tbody>
</table>
<? elseif ($yctype=="month")  ?>  <table width="100%" border="0" cellspacing="1" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td class="ttop">
<?if ($xing<>'') ?>
<?$xing?><?$ming?>(<?$nian1 ?>-<?$yue1 ?>-<?$ri1 ?>) �ҵ�������<?$myxz ?>
<?/if?>
 ��ǰ������<?$rs.xzmc?>�����˳�</td>
    </tr>
  <tr>
    <td class="new">
      <table width="100%" border="0">
        <tr>
          <td width="16%"><img src="<? $siteTheme ?>/images/xz_<?$rs.id?>.gif" width="100" height="100"></td>
          <td width="20%" class="new">  <span class="red"> <?$rs.xzmc?><br>
        <?$rs.xzrq?></span></td>
          <td width="64%" class="new"><span class="red">��Ч����:(<?$rs.yxqx?>)</span></td>
        </tr>
      </table>
    </td>
    </tr>
  <tr>
    <td class="new"><strong>��������</strong>:<img src="<? $siteTheme ?>/images/x_<?$rs.ztzs?>.gif"><BR>
      <?$rs.ztys?>
      <hr noshade color="#CCCCCC"></td>
    </tr>
  <tr>
    <td class="new"><strong>��������</strong>:<img src="<? $siteTheme ?>/images/x_<?$rs.aqzs?>.gif"><BR>
      <?$rs.aqys?>
      <hr noshade color="#CCCCCC"></td>
    </tr>
  <tr>
    <td class="new"><strong>Ͷ�������</strong>:<img src="<? $siteTheme ?>/images/x_<?$rs.tzzs?>.gif"><BR>
      <?$rs.tzys?>
      <hr noshade color="#CCCCCC"></td>
    </tr>
  <tr>
    <td class="new"><strong>��ѹ��ʽ</strong>:<BR>
      <?$rs.jyfs?>
      <hr noshade color="#CCCCCC"></td>
    </tr>
  <tr>
    <td class="new"><strong>������</strong>:<BR>
      <?$rs.xyw?></td>
  </tr>
  
</tbody>
</table>
<? elseif ($yctype=="year")  ?>
<table width="100%" border="0" cellspacing="1" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
  <tbody>
    <tr>
      <td class="ttop"><? if ($xing<>'') ?>

          <?$xing?><?$ming?>(<?$nian1 ?>-<?$yue1 ?>-<?$ri1 ?>) �ҵ�������<?$myxz ?>
        <?/if?>
        ��ǰ������<?$rs.xzmc?>�����˳�</td>
    </tr>
    <tr>
      <td class="new"><table width="100%" border="0">
        <tr>
          <td width="16%"><img src="<? $siteTheme ?>/images/xz_<?$rs.id?>.gif" width="100" height="100"></td>
          <td width="18%" class="new"><span class="red"> <?$rs.xzmc?><br>
                  <?$rs.xzrq?></span></td>
          <td width="66%" class="new"><span class="red"><?$rs.title?>(<?$rs.yxqx?>)</span></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td class="new"><strong>����ſ�</strong>:<img src="<? $siteTheme ?>/images/x_<?$rs.ztzs?>.gif"><br>
          <?$rs.ztzk?>
          <hr noshade color="#CCCCCC"></td>
    </tr>
    <tr>
      <td class="new"><strong>����ѧҵ</strong>:<img src="<? $siteTheme ?>/images/x_<?$rs.gkzs?>.gif"><br>
          <?$rs.gkxy?>
          <hr noshade color="#CCCCCC"></td>
    </tr>
    <tr>
      <td class="new"><strong>����ְ��</strong>:<img src="<? $siteTheme ?>/images/x_<?$rs.gzzs?>.gif"><br>
          <?$rs.gzzc?>
          <hr noshade color="#CCCCCC"></td>
    </tr>
    <tr>
      <td class="new"><strong>��Ǯ���</strong>:<img src="<? $siteTheme ?>/images/x_<?$rs.jqzs?>.gif"><br>
          <?$rs.zqlc?>
          <hr noshade color="#CCCCCC"></td>
    </tr>
    <tr>
      <td class="new"><strong>��������</strong>:<img src="<? $siteTheme ?>/images/x_<?$rs.lazs?>.gif"><br>
          <?$rs.lzfy?></td>
    </tr>
  </tbody>
</table>
<? elseif ($yctype=="yearlove")  ?>  <table width="100%" border="0" cellspacing="1" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td class="ttop">
<?if ($xing<>'')?><?$xing?><?$ming?>(<?$nian1 ?>-<?$yue1 ?>-<?$ri1 ?>) �ҵ�������<?$myxz ?>
<?/if?>
 ��ǰ������<?$rs.xzmc?>���갮������</td>
    </tr>
  <tr>
    <td class="new">
      <table width="100%" border="0">
        <tr>
          <td width="16%"><img src="<? $siteTheme ?>/images/xz_<?$rs.id?>.gif" width="100" height="100"></td>
          <td width="18%" class="new">  <span class="red"> <?$rs.xzmc?><br>
        <?$rs.xzrq?></span></td>
          <td width="66%" class="new"><span class="red">��Ч����:(<?$rs.yxqx?>)</span></td>
        </tr>
      </table>
    </td>
    </tr>
  <tr>
    <td class="new"><strong>����ſ�</strong>:<BR>
      <?$rs.ztzk?>
      <hr noshade color="#CCCCCC"></td>
    </tr>
  <tr>
    <td class="new"><strong>Ů��ƪ</strong>:<BR>
      <?$rs.nv?>
      <hr noshade color="#CCCCCC"></td>
    </tr><tr>
    <td class="new"><strong>����ƪ</strong>:<BR>
      <?$rs.nan?>
     </td>
    </tr>
  <tr>

  
</tbody>
</table>
<?/if?>