<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <tbody>
        <? if (isset($smarty.request.act) && $smarty.request.act=="jq") ?>
        <tr>
            <td align="center" class="new">
                <img src="<? $siteTheme ?>/images/gy/<? $gyqid ?>.gif">
                <br>
                <hr>
            </td>
        </tr>
        <tr>
            <td class="new">
                ������ǩ��<? $jieqian ?>
                <br>
                <br>
                <A href="?m=3">
                    <font color=red>
                    ������ﷵ�س�ǩ��ҳ��</font>
                </A>
            </td>
        </tr>
        <?  else ?>
        <tr>
            <td align="center" class="new">
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="152" height="240">
                    <param name="movie" value="<? $siteTheme ?>/images/gy.swf" />
                    <param name="quality" value="high" />
                    <embed src="<? $siteTheme ?>/images/gy.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="152" height="240">
                    </embed>
                </object>
            </td>
            <td width="50%" align="center" class="new">
                <? if (isset($smarty.request.act) && $smarty.request.act == "ok") ?>
                ���ճ��˵�&nbsp;<font style="color: #FF0000;FONT-SIZE: 26px;font-weight: bold;">
                <? $num ?></font>
                &nbsp;ǩ<br>
                <br>
                <? if ($gyclicknum=="")  ?>
                <a href="?m=3&sm=2&act=ok&gyclicknum=<? $gyclicknum+1 ?>&gyqid=<? $num ?>" title="���������������Ȼ������￪ʼ�S���}��">
                    <img src=<? $siteTheme ?>/images/sign<? $picnum ?>.gif width=100 height=77 border=0>
                </a>
                <br>
                <br>
                ��������������ʥ����������ǩ���������ͼ�꿪ʼ����ʥ��
                <? else ?>
                <? if ($gyclicknum<3 and $gysmile<>"4")  ?><a href="?m=3&sm=2&act=ok&gyclicknum=<? $gyclicknum+1 ?>&gyqid=<? $num ?>" title="���������������Ȼ������￪ʼ�S���}��">
                    <? /if ?><img src=<? $siteTheme ?>/images/sign<? $picnum ?>.gif width=100 height=77 border=0>
                </a>
                <br>
                <br>
                <? if ($gyclicknum<>"")  ?><? if ($gysmile <> "4")  ?><?$gyclicknum?>�� ʥ��<br>
                <? else  ?>Ц��<br>
                <? /if ?>
                <? /if ?><br>
                <? if ($gyclicknum==3 and $gysmile<>"4")  ?><a href="?m=3&sm=2&act=jq&gyqid=<? $num ?>">
                    <font color=blue>
                    ��ϲ������������������ʥ�����������쿴ǩ�ʣ�</font>
                </a>
                <? else ?>��������������ʥ����������ǩ��Ŀǰ�����Ѿ�����<? $gyclicknum ?>��<? if ($gysmile == "4") ?><br>
                <a href="?m=3&sm=2">
                    <font color=red>
                    ���ǣ�������Ц���ˣ���ǩ��׼������������³�ǩ��</font>
                </a>
                <br>
                <? /if ?>
                <? /if ?><? /if ?>
                <? else ?>
                <br>
                <a href="?m=3&sm=2&act=ok" title="���������������Ȼ������￪ʼ��ǩ">
                    <img src="<? $siteTheme ?>/images/qian.gif" width="97" height="189" border="0" />
                </a>
                <DIV align="left" class="new2">
                    1.��ǩǰ�Ⱥ���Ĭ��ȿ���� �������������顣
                    <br />
                    2.Ĭ���Լ�����������ʱ�������䣬���ھ�ס��ַ��
                    <br />
                    3.����ָ�����飬���������ҵ���˳̡����ꡢ����������......�ȡ�
                    <br />
                4.�������ǩͲ��ʼ��ǩ��</DIV>
                <? /if ?>
            </td>
            <td class="new" align="center">
                <img src="<? $siteTheme ?>/images/guanyin.jpg" width="145" height="240" border="0" />
            </td>
        </tr>

        <? /if ?>
    </tbody>
</table>
