<?php /* Smarty version 2.6.6, created on 2009-07-10 01:57:08
         compiled from chouqian/mazu.php */ ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <tbody>
        <?php if (( isset ( $_REQUEST['act'] ) && $_REQUEST['act'] == 'jq' )): ?>
            <tr>
                <td align="center" class="new">
                    <img src="diary_book/images/th/<?php echo $this->_tpl_vars['thlqid']; ?>
.gif">
                </td>
            </tr>
            <tr>
                <td class="new">
                    <A href="?m=3">
                        <font color=red>
                        ������ﷵ�س�ǩ��ҳ��</font>
                    </A>
                </td>
            </tr>
            <?php else: ?>
            <tr>
                <td align="center" class="new">
                    <img src="diary_book/images/mz1.gif" width="160" height="240">
                </td>
                <td width="50%" align="center" class="new">
                    <?php if (( isset ( $_REQUEST['act'] ) && $_REQUEST['act'] == 'ok' )): ?>
                        ���ճ��˵�&nbsp;<font style="color: #FF0000;FONT-SIZE: 26px;font-weight: bold;">
                        <?php echo $this->_tpl_vars['num']; ?>
</font>
                        &nbsp;ǩ<br>
                        <br>
                        <?php if (( $this->_tpl_vars['mzclicknum'] == "" )): ?>
                            <a href="?m=3&sm=5&act=ok&mzclicknum=<?php echo $this->_tpl_vars['mzclicknum']+1; ?>
&thlqid=<?php echo $this->_tpl_vars['num']; ?>
" title="���������������Ȼ������￪ʼ�S���}��">
                                <img src=diary_book/images/qian.gif width=97 height=189 border=0>
                            </a>
                            <br>
                            <br>
                            ��������������ʥ����������ǩ���������ͼ�꿪ʼ����ʥ��
                        <?php else: ?>
                            <?php if (( $this->_tpl_vars['mzclicknum'] < 3 && $this->_tpl_vars['gysmile'] <> '4' )): ?><a href="?m=3&sm=5&act=ok&mzclicknum=<?php echo $this->_tpl_vars['mzclicknum']+1; ?>
&thlqid=<?php echo $this->_tpl_vars['num']; ?>
" title="���������������Ȼ������￪ʼ�S���}��">
                                <?php endif; ?><img src=diary_book/images/sign<?php echo $this->_tpl_vars['picnum']; ?>
.gif width=100 height=77 border=0>
                            </a>
                            <br>
                            <br>
                            <?php if (( $this->_tpl_vars['mzclicknum'] <> "" )):  if (( $this->_tpl_vars['gysmile'] <> '4' )): ?>ʥ��<br>
                            <?php else: ?>Ц��<br>
                            <?php endif; ?>
                            <?php endif; ?><br>
                            <?php if (( $this->_tpl_vars['mzclicknum'] == 3 && $this->_tpl_vars['gysmile'] <> '4' )): ?><a href="?m=3&sm=5&act=jq&thlqid=<?php echo $this->_tpl_vars['num']; ?>
">
                                <font color=blue>
                                ��ϲ������������������ʥ�����������쿴ǩ�ʣ�</font>
                            </a>
                            <?php else: ?>��������������ʥ����������ǩ��Ŀǰ�����Ѿ�����<?php echo $this->_tpl_vars['mzclicknum']; ?>
��<?php if (( $this->_tpl_vars['gysmile'] == '4' )): ?><br>
                            <a href="?m=3&sm=5">
                                <font color=red>
                                ���ǣ�������Ц���ˣ���ǩ��׼������������³�ǩ��</font>
                            </a>
                            <br>
                            <?php endif; ?>
                            <?php endif;  endif; ?>
                        <?php else: ?>
                            <br>
                            <br>
                            <a href="?m=3&sm=5&act=ok" title="���������������Ȼ������￪ʼ��ǩ">
                                <img src="diary_book/images/qian.gif" width="97" height="189" border="0" />
                            </a>
                            <br />
                            <DIV align="left" class="new2">
                            ������ڼsһǧ������ǰ��������Ї����������һ���غ��O�冾����Ĭ��һ��Ů�ӡ���������С�����A֪������������ؾ����а���ġ�</DIV>
                        <?php endif; ?></td>
                        <td class="new" align="center">
                            <img src="diary_book/images/mz2.gif" width="160" height="240" border="0" />
                        </td>
                    </tr>

                    <?php endif; ?>
                </tbody>
            </table>