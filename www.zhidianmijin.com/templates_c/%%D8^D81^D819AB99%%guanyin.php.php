<?php /* Smarty version 2.6.6, created on 2009-06-28 00:17:20
         compiled from chouqian/guanyin.php */ ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <tbody>
        <?php if (( isset ( $_REQUEST['act'] ) && $_REQUEST['act'] == 'jq' )): ?>
        <tr>
            <td align="center" class="new">
                <img src="diary_book/images/gy/<?php echo $this->_tpl_vars['gyqid']; ?>
.gif">
                <br>
                <hr>
            </td>
        </tr>
        <tr>
            <td class="new">
                ������ǩ��<?php echo $this->_tpl_vars['jieqian']; ?>

                <br>
                <br>
                <A href="?m=3">
                    <font color=red>
                    ������ﷵ�س�ǩ��ҳ��</font>
                </A>
            </td>
        </tr>
        <?php else: ?>
        <tr>
            <td align="center" class="new">
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="152" height="240">
                    <param name="movie" value="diary_book/images/gy.swf" />
                    <param name="quality" value="high" />
                    <embed src="diary_book/images/gy.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="152" height="240">
                    </embed>
                </object>
            </td>
            <td width="50%" align="center" class="new">
                <?php if (( isset ( $_REQUEST['act'] ) && $_REQUEST['act'] == 'ok' )): ?>
                ���ճ��˵�&nbsp;<font style="color: #FF0000;FONT-SIZE: 26px;font-weight: bold;">
                <?php echo $this->_tpl_vars['num']; ?>
</font>
                &nbsp;ǩ<br>
                <br>
                <?php if (( $this->_tpl_vars['gyclicknum'] == "" )): ?>
                <a href="?m=3&sm=2&act=ok&gyclicknum=<?php echo $this->_tpl_vars['gyclicknum']+1; ?>
&gyqid=<?php echo $this->_tpl_vars['num']; ?>
" title="���������������Ȼ������￪ʼ�S���}��">
                    <img src=diary_book/images/sign<?php echo $this->_tpl_vars['picnum']; ?>
.gif width=100 height=77 border=0>
                </a>
                <br>
                <br>
                ��������������ʥ����������ǩ���������ͼ�꿪ʼ����ʥ��
                <?php else: ?>
                <?php if (( $this->_tpl_vars['gyclicknum'] < 3 && $this->_tpl_vars['gysmile'] <> '4' )): ?><a href="?m=3&sm=2&act=ok&gyclicknum=<?php echo $this->_tpl_vars['gyclicknum']+1; ?>
&gyqid=<?php echo $this->_tpl_vars['num']; ?>
" title="���������������Ȼ������￪ʼ�S���}��">
                    <?php endif; ?><img src=diary_book/images/sign<?php echo $this->_tpl_vars['picnum']; ?>
.gif width=100 height=77 border=0>
                </a>
                <br>
                <br>
                <?php if (( $this->_tpl_vars['gyclicknum'] <> "" )):  if (( $this->_tpl_vars['gysmile'] <> '4' )):  echo $this->_tpl_vars['gyclicknum']; ?>
�� ʥ��<br>
                <?php else: ?>Ц��<br>
                <?php endif; ?>
                <?php endif; ?><br>
                <?php if (( $this->_tpl_vars['gyclicknum'] == 3 && $this->_tpl_vars['gysmile'] <> '4' )): ?><a href="?m=3&sm=2&act=jq&gyqid=<?php echo $this->_tpl_vars['num']; ?>
">
                    <font color=blue>
                    ��ϲ������������������ʥ�����������쿴ǩ�ʣ�</font>
                </a>
                <?php else: ?>��������������ʥ����������ǩ��Ŀǰ�����Ѿ�����<?php echo $this->_tpl_vars['gyclicknum']; ?>
��<?php if (( $this->_tpl_vars['gysmile'] == '4' )): ?><br>
                <a href="?m=3&sm=2">
                    <font color=red>
                    ���ǣ�������Ц���ˣ���ǩ��׼������������³�ǩ��</font>
                </a>
                <br>
                <?php endif; ?>
                <?php endif;  endif; ?>
                <?php else: ?>
                <br>
                <a href="?m=3&sm=2&act=ok" title="���������������Ȼ������￪ʼ��ǩ">
                    <img src="diary_book/images/qian.gif" width="97" height="189" border="0" />
                </a>
                <DIV align="left" class="new2">
                    1.��ǩǰ�Ⱥ���Ĭ��ȿ���� �������������顣
                    <br />
                    2.Ĭ���Լ�����������ʱ�������䣬���ھ�ס��ַ��
                    <br />
                    3.����ָ�����飬���������ҵ���˳̡����ꡢ����������......�ȡ�
                    <br />
                4.�������ǩͲ��ʼ��ǩ��</DIV>
                <?php endif; ?>
            </td>
            <td class="new" align="center">
                <img src="diary_book/images/guanyin.jpg" width="145" height="240" border="0" />
            </td>
        </tr>

        <?php endif; ?>
    </tbody>
</table>