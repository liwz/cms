<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <tbody>
        <? if (isset($smarty.request.act) && $smarty.request.act=="jq") ?>
            <tr>
                <td align="center" class="new">
                    <img src="<? $siteTheme ?>/images/th/<? $thlqid ?>.gif">
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
            <? else ?>
            <tr>
                <td align="center" class="new">
                    <img src="<? $siteTheme ?>/images/mz1.gif" width="160" height="240">
                </td>
                <td width="50%" align="center" class="new">
                    <? if (isset($smarty.request.act) && $smarty.request.act == "ok") ?>
                        ���ճ��˵�&nbsp;<font style="color: #FF0000;FONT-SIZE: 26px;font-weight: bold;">
                        <? $num ?></font>
                        &nbsp;ǩ<br>
                        <br>
                        <? if ($mzclicknum=="")  ?>
                            <a href="?m=3&sm=5&act=ok&mzclicknum=<? $mzclicknum+1 ?>&thlqid=<? $num ?>" title="���������������Ȼ������￪ʼ�S���}��">
                                <img src=<? $siteTheme ?>/images/qian.gif width=97 height=189 border=0>
                            </a>
                            <br>
                            <br>
                            ��������������ʥ����������ǩ���������ͼ�꿪ʼ����ʥ��
                        <? else ?>
                            <? if ($mzclicknum<3 and $gysmile<>"4")  ?><a href="?m=3&sm=5&act=ok&mzclicknum=<? $mzclicknum+1 ?>&thlqid=<? $num ?>" title="���������������Ȼ������￪ʼ�S���}��">
                                <? /if ?><img src=<? $siteTheme ?>/images/sign<? $picnum ?>.gif width=100 height=77 border=0>
                            </a>
                            <br>
                            <br>
                            <? if ($mzclicknum<>"")  ?><?if ($gysmile <> "4" )  ?>ʥ��<br>
                            <? else ?>Ц��<br>
                            <? /if ?>
                            <? /if ?><br>
                            <?if ($mzclicknum==3 and $gysmile<>"4") ?><a href="?m=3&sm=5&act=jq&thlqid=<? $num ?>">
                                <font color=blue>
                                ��ϲ������������������ʥ�����������쿴ǩ�ʣ�</font>
                            </a>
                            <? else ?>��������������ʥ����������ǩ��Ŀǰ�����Ѿ�����<? $mzclicknum ?>��<?if ($gysmile == "4") ?><br>
                            <a href="?m=3&sm=5">
                                <font color=red>
                                ���ǣ�������Ц���ˣ���ǩ��׼������������³�ǩ��</font>
                            </a>
                            <br>
                            <? /if ?>
                            <? /if ?><? /if ?>
                        <? else ?>
                            <br>
                            <br>
                            <a href="?m=3&sm=5&act=ok" title="���������������Ȼ������￪ʼ��ǩ">
                                <img src="<? $siteTheme ?>/images/qian.gif" width="97" height="189" border="0" />
                            </a>
                            <br />
                            <DIV align="left" class="new2">
                            ������ڼsһǧ������ǰ��������Ї����������һ���غ��O�冾����Ĭ��һ��Ů�ӡ���������С�����A֪������������ؾ����а���ġ�</DIV>
                        <? /if ?></td>
                        <td class="new" align="center">
                            <img src="<? $siteTheme ?>/images/mz2.gif" width="160" height="240" border="0" />
                        </td>
                    </tr>

                    <? /if ?>
                </tbody>
            </table>
