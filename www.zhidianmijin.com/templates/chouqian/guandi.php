<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <tbody><? if (isset($smarty.request.act) && $smarty.request.act == "jq")?>
        <tr><td align="center" class="new"><img src="<? $siteTheme ?>/images/guandimg/<? $gdlqid?>.gif"></td></tr><tr><td class="new"><A href="?m=3"><font color=red>������ﷵ�س�ǩ��ҳ��</font></A> </td>
        </tr><? else  ?>
        <tr><td align="center" class="new"><img src="<? $siteTheme ?>/images/gd2.gif" width="160" height="240"></td>
            <td width="50%" align="center" class="new">
                <? if (isset($smarty.request.act) && $smarty.request.act == "ok") ?>
                   ���ճ��˵�&nbsp;<font style="color: #FF0000;FONT-SIZE: 26px;font-weight: bold;"><? $num ?></font>&nbsp;ǩ<br><br>
                    <? if ($gdclicknum=='') ?>
                        <a href="?m=3&sm=1&act=ok&gdclicknum=<? $gdclicknum+1 ?>&gdlqid=<? $num ?>" title="���������������Ȼ������￪ʼ�S���}��"><img src=<? $siteTheme ?>/images/qian.gif width=97 height=189 border=0></a><br>
                        <br>��������������ʥ����������ǩ���������ͼ�꿪ʼ����ʥ��
                    <? else ?> 
                        <? if ($gdclicknum<3 and $gysmile<>"4") ?><a href="?m=3&sm=1&act=ok&gdclicknum=<? $gdclicknum+1 ?>&gdlqid=<? $num?>" title="���������������Ȼ������￪ʼ�S���}��"><? /if ?>
                        <img src=<? $siteTheme ?>/images/sign<? $picnum?>.gif width=100 height=77 border=0></a><br><br>
                        <? if ($gdclicknum<>"") ?>
                            <? if ($gysmile <> "4") ?>ʥ��<br>
                            <? else ?>Ц��<br>
                            <? /if ?>
                        <? /if ?><br>
                        <? if ($gdclicknum==3 and $gysmile<>"4") ?><a href="?m=3&sm=1&act=jq&gdlqid=<? $num?>"><font color=blue>��ϲ������������������ʥ�����������쿴ǩ�ʣ�</font></a>
                        <? else  ?>��������������ʥ����������ǩ��Ŀǰ�����Ѿ�����<? $gdclicknum?>��
                            <? if ($gysmile == "4") ?><br>
                        <a href="?m=3&sm=1"><font color=red>���ǣ�������Ц���ˣ���ǩ��׼������������³�ǩ��</font></a><br>
                           <? /if ?>
                        <? /if ?>
                    <? /if ?>
                <? else ?>
                    <br><br>
                    <a href="?m=3&sm=1&act=ok" title="���������������Ȼ������￪ʼ��ǩ"><img src="<? $siteTheme ?>/images/qian.gif" width="97" height="189" border="0" /></a>
                    <br />
                    <DIV align="left" class="new2">1.��ǩǰ�������ү�����ݣ������������۾���ǩ��<BR>
                    2.Ĭ���Լ�����������ʱ�������䡢���ھ�ס��ַ�� <BR>3.����ָ�����飬���������ҵ���˳̡����ꡢ����������......�ȡ�   <BR>4.�������ǩͲ��ʼ��ǩ��   </DIV>
                <? /if ?></td>
                <td class="new" align="center">  <img src="<? $siteTheme ?>/images/gd1.gif" width="160" height="240" border="0" /></td>
                </tr>

            <? /if ?>
            </tbody></table>
