<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <tbody>
        <?if (isset($smarty.request.act) && $smarty.request.act == "jq") ?>
        <tr>
            <td class="new">
                <font color=red>
                �ƴ�����ǩ��</font>
                <?$qianshu ?>&nbsp;<?$hdxname ?>&nbsp;<?$title ?>
                <br>
                <br>
                <font color=red>
                ����:</font>
                <br>
                <br>
                <?$shi ?><br>
                <br>
                <font color=red>
                ��ǩ:</font>
                <br>
                <?$content ?><A href="?m=3">
                    <br>
                    <br>
                    <font color=red>
                    ������ﷵ�س�ǩ��ҳ��</font>
                </A>
            </td>
        </tr>
        <? else ?>
        <tr>
            <td align="center" class="new">
                <img src="<? $siteTheme ?>/images/huangdaxian2.jpg" width="150" height="209">
            </td>
            <td width="50%" align="center" class="new">
                <? if (isset($smarty.request.act) && $smarty.request.act == "ok") ?>
                ���ճ��˵�&nbsp;<font style="color: #FF0000;FONT-SIZE: 26px;font-weight: bold;">
                <?$num ?></font>
                &nbsp;ǩ<br>
                <br>
                <? if ($gyclicknum=="") ?>
                <a href="?m=3&sm=3&act=ok&gyclicknum=<?$gyclicknum+1 ?>&gyqid=<?$num ?>" title="���������������Ȼ������￪ʼ�S���}��">
                    <img src=<? $siteTheme ?>/images/sign<?$picnum ?>.gif width=100 height=77 border=0>
                </a>
                <br>
                <br>
                ��������������ʥ����������ǩ���������ͼ�꿪ʼ����ʥ��
                <? else ?>
                <? if ($gyclicknum<3 and $gysmile<>"4") ?><a href="?m=3&sm=3&act=ok&gyclicknum=<?$gyclicknum+1 ?>&gyqid=<?$num ?>" title="���������������Ȼ������￪ʼ�S���}��">
                    <? /if ?><img src=<? $siteTheme ?>/images/sign<?$picnum ?>.gif width=100 height=77 border=0>
                </a>
                <br>
                <br>
                <? if ($gyclicknum<>"") ?><?if ($gyclicknum<>"") ?><? if ($gysmile <> "4") ?>ʥ��<br>
                <? else ?>Ц��<br>
                <? /if ?>
                <? /if ?><br>
                <?if ($gyclicknum==3 and $gysmile<>"4") ?><a href="?m=3&sm=3&act=jq&gyqid=<?$num ?>">
                    <font color=blue>
                    ��ϲ������������������ʥ�����������쿴ǩ�ʣ�</font>
                </a>
                <? else ?>��������������ʥ����������ǩ��Ŀǰ�����Ѿ�����<?$gyclicknum ?>��<? if ($gysmile == "4") ?><br>
                <a href="?m=3&sm=3">
                    <font color=red>
                    ���ǣ�������Ц���ˣ���ǩ��׼������������³�ǩ��</font>
                </a>
                <br>
                <? /if ?>
                <? /if ?><? /if ?>
                <? /if ?>
                <? else ?><br>
                <a href="?m=3&sm=3&act=ok" title="���������������Ȼ������￪ʼ��ǩ">
                    <img src="<? $siteTheme ?>/images/hfxcq.gif" width="163" height="165" border="0" />
                </a>
                <DIV align="left" class="new2">
                    1.��ǩǰ�Ⱦ��ֺ�˫�ֺ�ʮ��Ĭ�� �����ɴ��ɡ�ָ���Խ򡱡�<br />
                    2.Ĭ���Լ��������������ڣ����䡢���ھ�ס��ַ��<br />
                    3.����ָ������顣���������ҵ���˳̡����ꡢ����������......
                    �ȵȡ�
                    <br />
                4.�������ǩͲ��ʼ��ǩ��</DIV>
                <? /if ?>
            </td>
            <td class="new" align="center">
                <img src="<? $siteTheme ?>/images/huangdaxian1.jpg" width="150" height="209" border="0" />
            </td>
        </tr>

        <? /if ?>
    </tbody>
</table>
