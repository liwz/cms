<?php /* Smarty version 2.6.6, created on 2009-06-27 09:50:47
         compiled from astro/xzyc.php */ ?>
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
      <tr>
        <TD class=new style="PADDING-BOTTOM: 1px" vAlign=top>��������鿴�˳�
          (<a href="?m=2&sm=9&type=today&xz=<?php echo $this->_tpl_vars['xz']; ?>
">����</a> <a href="?m=2&sm=9&type=nextday&xz=<?php echo $this->_tpl_vars['xz']; ?>
">����</a> <a href="?m=2&sm=9&type=week&xz=<?php echo $this->_tpl_vars['xz']; ?>
">����</a> <a href="?m=2&sm=9&type=month&xz=<?php echo $this->_tpl_vars['xz']; ?>
">����</a> <a href="?m=2&sm=9&type=year&xz=<?php echo $this->_tpl_vars['xz']; ?>
">����</a> <a href="?m=2&sm=9&type=yearlove&xz=<?php echo $this->_tpl_vars['xz']; ?>
">���갮������</a>) </TD>
      </tr>
      <tr>
        <TD class=new style="PADDING-BOTTOM: 1px" vAlign=top><span class="new" style="PADDING-BOTTOM: 1px">��<a href="?m=2&sm=9&type=<?php echo $this->_tpl_vars['yctype']; ?>
&xz=1">ĵ����</a>��<a href="?m=2&sm=9&type=<?php echo $this->_tpl_vars['yctype']; ?>
&xz=2">��ţ��</a>��<a href="?m=2&sm=9&type=<?php echo $this->_tpl_vars['yctype']; ?>
&xz=3">˫����</a>��<a href="?m=2&sm=9&type=<?php echo $this->_tpl_vars['yctype']; ?>
&xz=4">��з��</a>��<a href="?m=2&sm=9&type=<?php echo $this->_tpl_vars['yctype']; ?>
&xz=5">ʨ����</a>��<a href="?m=2&sm=9&type=<?php echo $this->_tpl_vars['yctype']; ?>
&xz=6">��Ů��</a>��<a href="?m=2&sm=9&type=<?php echo $this->_tpl_vars['yctype']; ?>
&xz=7">�����</a>��<a href="?m=2&sm=9&type=<?php echo $this->_tpl_vars['yctype']; ?>
&xz=8">��Ы��</a>��<a href="?m=2&sm=9&type=<?php echo $this->_tpl_vars['yctype']; ?>
&xz=9">������</a>��<a href="?m=2&sm=9&type=<?php echo $this->_tpl_vars['yctype']; ?>
&xz=10">ħ����</a>��<a href="?m=2&sm=9&type=<?php echo $this->_tpl_vars['yctype']; ?>
&xz=11">ˮƿ��</a>��<a href="?m=2&sm=9&type=<?php echo $this->_tpl_vars['yctype']; ?>
&xz=12">˫����</a></span></TD>
      </tr>
    </TBODY>
  </TABLE><?php if (( $this->_tpl_vars['yctype'] == 'today' )): ?>
  <table width="100%" border="0" cellspacing="1" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td colspan="6" class="ttop">
<?php if (( $this->_tpl_vars['xing'] <> "" )): ?>
<?php echo $this->_tpl_vars['xing'];  echo $this->_tpl_vars['ming']; ?>
(<?php echo $this->_tpl_vars['nian1']; ?>
-<?php echo $this->_tpl_vars['yue1']; ?>
-<?php echo $this->_tpl_vars['ri1']; ?>
) �ҵ�������<?php echo $this->_tpl_vars['myxz']; ?>

<?php endif; ?>

 ��ǰ������<?php echo $this->_tpl_vars['rs']['xzmc']; ?>
�����˳�</td>
    </tr>
  <tr>
    <td width="17%" rowspan="4" class="new"><img src="diary_book/images/xz_<?php echo $this->_tpl_vars['rs']['id']; ?>
.gif" width="100" height="100"><br>      </td>
    <td width="14%" rowspan="4" class="new"><span class="red"><?php echo $this->_tpl_vars['rs']['xzmc']; ?>
<br>
        <?php echo $this->_tpl_vars['rs']['xzrq']; ?>
</span></td>
    <td width="16%" bgcolor="e7e7e7" class="new">��������:</td>
    <td width="24%" class="new"><img src="diary_book/images/x_<?php echo $this->_tpl_vars['rs']['aqys']; ?>
.gif"></td>
    <td width="14%" bgcolor="e7e7e7" class="new">�ۺ�����:</td>
    <td width="15%" class="new"><img src="diary_book/images/x_<?php echo $this->_tpl_vars['rs']['zhys']; ?>
.gif"></td>
  </tr>
  <tr>
    <td bgcolor="e7e7e7" class="new">����״��:</td>
    <td class="new"><img src="diary_book/images/x_<?php echo $this->_tpl_vars['rs']['gzzk']; ?>
.gif"></td>
    <td bgcolor="e7e7e7" class="new">���Ͷ��:</td>
    <td class="new"><img src="diary_book/images/x_<?php echo $this->_tpl_vars['rs']['nctz']; ?>
.gif"></td>
  </tr>
  <tr>
    <td bgcolor="e7e7e7" class="new">����ָ��:</td>
    <td class="new"><?php echo $this->_tpl_vars['rs']['jkzs']; ?>
</td>
    <td bgcolor="e7e7e7" class="new">��̸ָ��:<br>    </td>
    <td class="new"><?php echo $this->_tpl_vars['rs']['stzs']; ?>
</td>
  </tr>
  <tr>
    <td bgcolor="e7e7e7" class="new">��������:</td>
    <td class="new"><?php echo $this->_tpl_vars['rs']['xysz']; ?>
</td>
    <td bgcolor="e7e7e7" class="new">��������:</td>
    <td class="new"><?php echo $this->_tpl_vars['rs']['spxz']; ?>
</td>
  </tr>
  <tr>
    <td colspan="6" class="new"><?php echo $this->_tpl_vars['rs']['zhpg']; ?>
<div align="right"><br>
      ��Ч���ڣ�<?php echo $this->_tpl_vars['rs']['yxqx']; ?>
</div></td>
    </tr>
</tbody>
</table><?php elseif (( $this->_tpl_vars['yctype'] == 'nextday' )): ?>  <table width="100%" border="0" cellspacing="1" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td colspan="6" class="ttop">
<?php if (( $this->_tpl_vars['xing'] <> "" )): ?>
<?php echo $this->_tpl_vars['xing'];  echo $this->_tpl_vars['ming']; ?>

(<?php echo $this->_tpl_vars['nian1']; ?>
-<?php echo $this->_tpl_vars['yue1']; ?>
-<?php echo $this->_tpl_vars['ri1']; ?>
) �ҵ�������<?php echo $this->_tpl_vars['myxz']; ?>

<?php endif; ?>
 ��ǰ������<?php echo $this->_tpl_vars['rs']['xzmc']; ?>
�����˳�</td>
    </tr>
  <tr>
    <td width="17%" rowspan="4" class="new"><img src="diary_book/images/xz_<?php echo $this->_tpl_vars['rs']['id']; ?>
.gif" width="100" height="100"><br>      </td>
    <td width="14%" rowspan="4" class="new"><span class="red"><?php echo $this->_tpl_vars['rs']['xzmc']; ?>
<br>
        <?php echo $this->_tpl_vars['rs']['xzrq']; ?>
</span></td>
    <td width="16%" bgcolor="e7e7e7" class="new">��������:</td>
    <td width="24%" class="new"><img src="diary_book/images/x_<?php echo $this->_tpl_vars['rs']['aqys']; ?>
.gif"></td>
    <td width="14%" bgcolor="e7e7e7" class="new">�ۺ�����:</td>
    <td width="15%" class="new"><img src="diary_book/images/x_<?php echo $this->_tpl_vars['rs']['zhys']; ?>
.gif"></td>
  </tr>
  <tr>
    <td bgcolor="e7e7e7" class="new">����״��:</td>
    <td class="new"><img src="diary_book/images/x_<?php echo $this->_tpl_vars['rs']['gzzk']; ?>
.gif"></td>
    <td bgcolor="e7e7e7" class="new">���Ͷ��:</td>
    <td class="new"><img src="diary_book/images/x_<?php echo $this->_tpl_vars['rs']['nctz']; ?>
.gif"></td>
  </tr>
  <tr>
    <td bgcolor="e7e7e7" class="new">����ָ��:</td>
    <td class="new"><?php echo $this->_tpl_vars['rs']['jkzs']; ?>
</td>
    <td bgcolor="e7e7e7" class="new">��̸ָ��:<br>    </td>
    <td class="new"><?php echo $this->_tpl_vars['rs']['stzs']; ?>
</td>
  </tr>
  <tr>
    <td bgcolor="e7e7e7" class="new">��������:</td>
    <td class="new"><?php echo $this->_tpl_vars['rs']['xysz']; ?>
</td>
    <td bgcolor="e7e7e7" class="new">��������:</td>
    <td class="new"><?php echo $this->_tpl_vars['rs']['spxz']; ?>
</td>
  </tr>
  <tr>
    <td colspan="6" class="new"><?php echo $this->_tpl_vars['rs']['zhpg']; ?>
<div align="right"><br>
      ��Ч���ڣ�<?php echo $this->_tpl_vars['rs']['yxqx']; ?>
</div></td>
    </tr>
</tbody>
</table><?php elseif (( $this->_tpl_vars['yctype'] == 'week' )): ?>  <table width="100%" border="0" cellspacing="1" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td class="ttop">
<?php if (( $this->_tpl_vars['xing'] <> '' )): ?>
<?php echo $this->_tpl_vars['xing'];  echo $this->_tpl_vars['ming']; ?>
(<?php echo $this->_tpl_vars['nian1']; ?>
-<?php echo $this->_tpl_vars['yue1']; ?>
-<?php echo $this->_tpl_vars['ri1']; ?>
) �ҵ�������<?php echo $this->_tpl_vars['myxz']; ?>

<?php endif; ?>
 ��ǰ������<?php echo $this->_tpl_vars['rs']['xzmc']; ?>
�����˳�</td>
    </tr>
  <tr>
    <td class="new">
      <table width="100%" border="0">
        <tr>
          <td width="16%"><img src="diary_book/images/xz_<?php echo $this->_tpl_vars['rs']['id']; ?>
.gif" width="100" height="100"></td>
          <td width="20%" class="new">  <span class="red"> <?php echo $this->_tpl_vars['rs']['xzmc']; ?>
<br>
        <?php echo $this->_tpl_vars['rs']['xzrq']; ?>
</span></td>
          <td width="64%" class="new"><span class="red"><?php echo $this->_tpl_vars['rs']['title']; ?>
(<?php echo $this->_tpl_vars['rs']['yxqx']; ?>
)</span></td>
        </tr>
      </table>
    </td>
    </tr>
  <tr>
    <td class="new"><strong>��������</strong>:<img src="diary_book/images/x_<?php echo $this->_tpl_vars['rs']['ztzs']; ?>
.gif"><BR>
      <?php echo $this->_tpl_vars['rs']['ztys']; ?>

      <hr noshade color="#CCCCCC"></td>
    </tr>
  <tr>
    <td class="new"><strong>��������</strong>:<br>
      �ж���:<img src="diary_book/images/x_<?php echo $this->_tpl_vars['rs']['aqzs1']; ?>
.gif"><BR>
      <?php echo $this->_tpl_vars['rs']['aqys1']; ?>
<br>
      û����:<img src="diary_book/images/x_<?php echo $this->_tpl_vars['rs']['aqzs2']; ?>
.gif"><BR>
      <?php echo $this->_tpl_vars['rs']['aqys2']; ?>

      <hr noshade color="#CCCCCC"></td>
    </tr>
  <tr>
    <td class="new"><strong>��������</strong>:<img src="diary_book/images/x_<?php echo $this->_tpl_vars['rs']['jkzs']; ?>
.gif"><BR>
      <?php echo $this->_tpl_vars['rs']['jkys']; ?>

      <hr noshade color="#CCCCCC"></td>
    </tr>
  <tr>
    <td class="new"><strong>����ѧҵ��</strong>:<img src="diary_book/images/x_<?php echo $this->_tpl_vars['rs']['gzzs']; ?>
.gif"><BR>
      <?php echo $this->_tpl_vars['rs']['gzys']; ?>

      <hr noshade color="#CCCCCC"></td>
    </tr>
  <tr>
    <td class="new"><strong>����ָ��</strong>:<img src="diary_book/images/x_<?php echo $this->_tpl_vars['rs']['xyzs']; ?>
.gif"><BR>
      <?php echo $this->_tpl_vars['rs']['xyys']; ?>

      <hr noshade color="#CCCCCC"></td>
  </tr>
  <tr>
    <td class="new"><strong>������</strong>: <?php echo $this->_tpl_vars['rs']['hxri']; ?>
<BR>
      <?php echo $this->_tpl_vars['rs']['hxsm']; ?>

      <hr noshade color="#CCCCCC"></td>
  </tr>
  <tr>
    <td class="new"><strong>��÷��</strong>: <?php echo $this->_tpl_vars['rs']['hmri']; ?>
<BR>
      <?php echo $this->_tpl_vars['rs']['hmsm']; ?>
</td>
  </tr>
</tbody>
</table>
<?php elseif (( $this->_tpl_vars['yctype'] == 'month' )): ?>  <table width="100%" border="0" cellspacing="1" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td class="ttop">
<?php if (( $this->_tpl_vars['xing'] <> '' )): ?>
<?php echo $this->_tpl_vars['xing'];  echo $this->_tpl_vars['ming']; ?>
(<?php echo $this->_tpl_vars['nian1']; ?>
-<?php echo $this->_tpl_vars['yue1']; ?>
-<?php echo $this->_tpl_vars['ri1']; ?>
) �ҵ�������<?php echo $this->_tpl_vars['myxz']; ?>

<?php endif; ?>
 ��ǰ������<?php echo $this->_tpl_vars['rs']['xzmc']; ?>
�����˳�</td>
    </tr>
  <tr>
    <td class="new">
      <table width="100%" border="0">
        <tr>
          <td width="16%"><img src="diary_book/images/xz_<?php echo $this->_tpl_vars['rs']['id']; ?>
.gif" width="100" height="100"></td>
          <td width="20%" class="new">  <span class="red"> <?php echo $this->_tpl_vars['rs']['xzmc']; ?>
<br>
        <?php echo $this->_tpl_vars['rs']['xzrq']; ?>
</span></td>
          <td width="64%" class="new"><span class="red">��Ч����:(<?php echo $this->_tpl_vars['rs']['yxqx']; ?>
)</span></td>
        </tr>
      </table>
    </td>
    </tr>
  <tr>
    <td class="new"><strong>��������</strong>:<img src="diary_book/images/x_<?php echo $this->_tpl_vars['rs']['ztzs']; ?>
.gif"><BR>
      <?php echo $this->_tpl_vars['rs']['ztys']; ?>

      <hr noshade color="#CCCCCC"></td>
    </tr>
  <tr>
    <td class="new"><strong>��������</strong>:<img src="diary_book/images/x_<?php echo $this->_tpl_vars['rs']['aqzs']; ?>
.gif"><BR>
      <?php echo $this->_tpl_vars['rs']['aqys']; ?>

      <hr noshade color="#CCCCCC"></td>
    </tr>
  <tr>
    <td class="new"><strong>Ͷ�������</strong>:<img src="diary_book/images/x_<?php echo $this->_tpl_vars['rs']['tzzs']; ?>
.gif"><BR>
      <?php echo $this->_tpl_vars['rs']['tzys']; ?>

      <hr noshade color="#CCCCCC"></td>
    </tr>
  <tr>
    <td class="new"><strong>��ѹ��ʽ</strong>:<BR>
      <?php echo $this->_tpl_vars['rs']['jyfs']; ?>

      <hr noshade color="#CCCCCC"></td>
    </tr>
  <tr>
    <td class="new"><strong>������</strong>:<BR>
      <?php echo $this->_tpl_vars['rs']['xyw']; ?>
</td>
  </tr>
  
</tbody>
</table>
<?php elseif (( $this->_tpl_vars['yctype'] == 'year' )): ?>
<table width="100%" border="0" cellspacing="1" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
  <tbody>
    <tr>
      <td class="ttop"><?php if (( $this->_tpl_vars['xing'] <> '' )): ?>

          <?php echo $this->_tpl_vars['xing'];  echo $this->_tpl_vars['ming']; ?>
(<?php echo $this->_tpl_vars['nian1']; ?>
-<?php echo $this->_tpl_vars['yue1']; ?>
-<?php echo $this->_tpl_vars['ri1']; ?>
) �ҵ�������<?php echo $this->_tpl_vars['myxz']; ?>

        <?php endif; ?>
        ��ǰ������<?php echo $this->_tpl_vars['rs']['xzmc']; ?>
�����˳�</td>
    </tr>
    <tr>
      <td class="new"><table width="100%" border="0">
        <tr>
          <td width="16%"><img src="diary_book/images/xz_<?php echo $this->_tpl_vars['rs']['id']; ?>
.gif" width="100" height="100"></td>
          <td width="18%" class="new"><span class="red"> <?php echo $this->_tpl_vars['rs']['xzmc']; ?>
<br>
                  <?php echo $this->_tpl_vars['rs']['xzrq']; ?>
</span></td>
          <td width="66%" class="new"><span class="red"><?php echo $this->_tpl_vars['rs']['title']; ?>
(<?php echo $this->_tpl_vars['rs']['yxqx']; ?>
)</span></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td class="new"><strong>����ſ�</strong>:<img src="diary_book/images/x_<?php echo $this->_tpl_vars['rs']['ztzs']; ?>
.gif"><br>
          <?php echo $this->_tpl_vars['rs']['ztzk']; ?>

          <hr noshade color="#CCCCCC"></td>
    </tr>
    <tr>
      <td class="new"><strong>����ѧҵ</strong>:<img src="diary_book/images/x_<?php echo $this->_tpl_vars['rs']['gkzs']; ?>
.gif"><br>
          <?php echo $this->_tpl_vars['rs']['gkxy']; ?>

          <hr noshade color="#CCCCCC"></td>
    </tr>
    <tr>
      <td class="new"><strong>����ְ��</strong>:<img src="diary_book/images/x_<?php echo $this->_tpl_vars['rs']['gzzs']; ?>
.gif"><br>
          <?php echo $this->_tpl_vars['rs']['gzzc']; ?>

          <hr noshade color="#CCCCCC"></td>
    </tr>
    <tr>
      <td class="new"><strong>��Ǯ���</strong>:<img src="diary_book/images/x_<?php echo $this->_tpl_vars['rs']['jqzs']; ?>
.gif"><br>
          <?php echo $this->_tpl_vars['rs']['zqlc']; ?>

          <hr noshade color="#CCCCCC"></td>
    </tr>
    <tr>
      <td class="new"><strong>��������</strong>:<img src="diary_book/images/x_<?php echo $this->_tpl_vars['rs']['lazs']; ?>
.gif"><br>
          <?php echo $this->_tpl_vars['rs']['lzfy']; ?>
</td>
    </tr>
  </tbody>
</table>
<?php elseif (( $this->_tpl_vars['yctype'] == 'yearlove' )): ?>  <table width="100%" border="0" cellspacing="1" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
<tbody><tr>
  <td class="ttop">
<?php if (( $this->_tpl_vars['xing'] <> '' )):  echo $this->_tpl_vars['xing'];  echo $this->_tpl_vars['ming']; ?>
(<?php echo $this->_tpl_vars['nian1']; ?>
-<?php echo $this->_tpl_vars['yue1']; ?>
-<?php echo $this->_tpl_vars['ri1']; ?>
) �ҵ�������<?php echo $this->_tpl_vars['myxz']; ?>

<?php endif; ?>
 ��ǰ������<?php echo $this->_tpl_vars['rs']['xzmc']; ?>
���갮������</td>
    </tr>
  <tr>
    <td class="new">
      <table width="100%" border="0">
        <tr>
          <td width="16%"><img src="diary_book/images/xz_<?php echo $this->_tpl_vars['rs']['id']; ?>
.gif" width="100" height="100"></td>
          <td width="18%" class="new">  <span class="red"> <?php echo $this->_tpl_vars['rs']['xzmc']; ?>
<br>
        <?php echo $this->_tpl_vars['rs']['xzrq']; ?>
</span></td>
          <td width="66%" class="new"><span class="red">��Ч����:(<?php echo $this->_tpl_vars['rs']['yxqx']; ?>
)</span></td>
        </tr>
      </table>
    </td>
    </tr>
  <tr>
    <td class="new"><strong>����ſ�</strong>:<BR>
      <?php echo $this->_tpl_vars['rs']['ztzk']; ?>

      <hr noshade color="#CCCCCC"></td>
    </tr>
  <tr>
    <td class="new"><strong>Ů��ƪ</strong>:<BR>
      <?php echo $this->_tpl_vars['rs']['nv']; ?>

      <hr noshade color="#CCCCCC"></td>
    </tr><tr>
    <td class="new"><strong>����ƪ</strong>:<BR>
      <?php echo $this->_tpl_vars['rs']['nan']; ?>

     </td>
    </tr>
  <tr>

  
</tbody>
</table>
<?php endif; ?>