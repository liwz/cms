<?php /* Smarty version 2.6.6, created on 2009-08-05 23:26:57
         compiled from chouqian/huangdaxian.php */ ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <tbody>
        <?php if (( isset ( $_REQUEST['act'] ) && $_REQUEST['act'] == 'jq' )): ?>
        <tr>
            <td class="new">
                <font color=red>
                �ƴ�����ǩ��</font>
                <?php echo $this->_tpl_vars['qianshu']; ?>
&nbsp;<?php echo $this->_tpl_vars['hdxname']; ?>
&nbsp;<?php echo $this->_tpl_vars['title']; ?>

                <br>
                <br>
                <font color=red>
                ����:</font>
                <br>
                <br>
                <?php echo $this->_tpl_vars['shi']; ?>
<br>
                <br>
                <font color=red>
                ��ǩ:</font>
                <br>
                <?php echo $this->_tpl_vars['content']; ?>
<A href="?m=3">
                    <br>
                    <br>
                    <font color=red>
                    ������ﷵ�س�ǩ��ҳ��</font>
                </A>
            </td>
        </tr>
        <?php else: ?>
        <tr>
            <td align="center" class="new">
                <img src="<?php echo $this->_tpl_vars['siteTheme']; ?>
/images/huangdaxian2.jpg" width="150" height="209">
            </td>
            <td width="50%" align="center" class="new">
                <?php if (( isset ( $_REQUEST['act'] ) && $_REQUEST['act'] == 'ok' )): ?>
                ���ճ��˵�&nbsp;<font style="color: #FF0000;FONT-SIZE: 26px;font-weight: bold;">
                <?php echo $this->_tpl_vars['num']; ?>
</font>
                &nbsp;ǩ<br>
                <br>
                <?php if (( $this->_tpl_vars['gyclicknum'] == "" )): ?>
                <a href="?m=3&sm=3&act=ok&gyclicknum=<?php echo $this->_tpl_vars['gyclicknum']+1; ?>
&gyqid=<?php echo $this->_tpl_vars['num']; ?>
" title="���������������Ȼ������￪ʼ�S���}��">
                    <img src=<?php echo $this->_tpl_vars['siteTheme']; ?>
/images/sign<?php echo $this->_tpl_vars['picnum']; ?>
.gif width=100 height=77 border=0>
                </a>
                <br>
                <br>
                ��������������ʥ����������ǩ���������ͼ�꿪ʼ����ʥ��
                <?php else: ?>
                <?php if (( $this->_tpl_vars['gyclicknum'] < 3 && $this->_tpl_vars['gysmile'] <> '4' )): ?><a href="?m=3&sm=3&act=ok&gyclicknum=<?php echo $this->_tpl_vars['gyclicknum']+1; ?>
&gyqid=<?php echo $this->_tpl_vars['num']; ?>
" title="���������������Ȼ������￪ʼ�S���}��">
                    <?php endif; ?><img src=<?php echo $this->_tpl_vars['siteTheme']; ?>
/images/sign<?php echo $this->_tpl_vars['picnum']; ?>
.gif width=100 height=77 border=0>
                </a>
                <br>
                <br>
                <?php if (( $this->_tpl_vars['gyclicknum'] <> "" )):  if (( $this->_tpl_vars['gyclicknum'] <> "" )):  if (( $this->_tpl_vars['gysmile'] <> '4' )): ?>ʥ��<br>
                <?php else: ?>Ц��<br>
                <?php endif; ?>
                <?php endif; ?><br>
                <?php if (( $this->_tpl_vars['gyclicknum'] == 3 && $this->_tpl_vars['gysmile'] <> '4' )): ?><a href="?m=3&sm=3&act=jq&gyqid=<?php echo $this->_tpl_vars['num']; ?>
">
                    <font color=blue>
                    ��ϲ������������������ʥ�����������쿴ǩ�ʣ�</font>
                </a>
                <?php else: ?>��������������ʥ����������ǩ��Ŀǰ�����Ѿ�����<?php echo $this->_tpl_vars['gyclicknum']; ?>
��<?php if (( $this->_tpl_vars['gysmile'] == '4' )): ?><br>
                <a href="?m=3&sm=3">
                    <font color=red>
                    ���ǣ�������Ц���ˣ���ǩ��׼������������³�ǩ��</font>
                </a>
                <br>
                <?php endif; ?>
                <?php endif;  endif; ?>
                <?php endif; ?>
                <?php else: ?><br>
                <a href="?m=3&sm=3&act=ok" title="���������������Ȼ������￪ʼ��ǩ">
                    <img src="<?php echo $this->_tpl_vars['siteTheme']; ?>
/images/hfxcq.gif" width="163" height="165" border="0" />
                </a>
                <DIV align="left" class="new2">
                    1.��ǩǰ�Ⱦ��ֺ�˫�ֺ�ʮ��Ĭ�� �����ɴ��ɡ�ָ���Խ򡱡�<br />
                    2.Ĭ���Լ��������������ڣ����䡢���ھ�ס��ַ��<br />
                    3.����ָ������顣���������ҵ���˳̡����ꡢ����������......
                    �ȵȡ�
                    <br />
                4.�������ǩͲ��ʼ��ǩ��</DIV>
                <?php endif; ?>
            </td>
            <td class="new" align="center">
                <img src="<?php echo $this->_tpl_vars['siteTheme']; ?>
/images/huangdaxian1.jpg" width="150" height="209" border="0" />
            </td>
        </tr>

        <?php endif; ?>
    </tbody>
</table>