<table cellspacing="1" cellpadding="0" border="0" class="tablebgcolor4">
    <TBODY>
        <? if (!isset($list) && !count($list)) ?>
        <script>
        alert('û���ҵ���ؽ�������');window.close()</script>
        <? else ?>

        <TR class="tdbgcolor">
            <TD height="25" align="right" width="100%">
                ���ҵ�<FONT COLOR="#FF0000">
                <? $allshu ?></FONT>
                �����ν������Ϊ<font color="#FF0000">
                <? $mpage ?></font>
                ҳ��Ŀǰ�ǵ�<font color="#FF0000">
                <? $currentPage ?></font>
            ҳ</TD>
        </TR>
        <TR class="tdbgcolor2">
            <TD>

                <div align="center">
                    <table border="0" width="100%" cellspacing="0" cellpadding="0">
                        <tbody>
                            <? foreach key=i name=name item=item from=$list ?>
                            <tr>
                                <td style="line-height:200%">
                                    <font color="green">
                                    ��<? $i+1 ?>.<? $item.jmlb ?>��</font>
                                    <font color="red">
                                    ��<? $item.title ?>��</font>
                                    <br />

                                    <? $item.content|replace:$word:"<font color=red>
                                    $word</font>
                                    " ?>
                                </td>
                            </tr>
                            <? /foreach ?>
                        </tbody>
                    </table>
                </div>
                <hr size="1" color="#d2d0d0" />

                <!--��ҳ��ʼ-->
                <div align="center">
                    <script>
                        PageCount=<? $mpage ?> //��ҳ��
                        topage=<? $currentPage ?>   //��ǰͣ��ҳ
                        if (topage>1){document.write("<a href='?m=3&sm=8&act=<? $smarty.request.act ?>&word=<? $smarty.request.word ?>&page=<? $currentPage-1 ?>' title='��һҳ'> ��һҳ</a>");}
                            for (var i=1; i <= PageCount; i++) {
                                if (i <= topage+6 && i >= topage-6 || i==1 || i==PageCount){
                                    if (i > topage+7 || i < topage-5 && i!=1 && i!=2 ){document.write(" ... ");}
                                    if (topage==i){document.write("<font color=#d2d0d0> "+ i +" </font> ");}
                                        else{
                                            document.write(" <a href='?m=3&sm=8&act=<? $smarty.request.act ?>&word=<? $smarty.request.word ?>&page="+i+"'> ["+ i +"]</a> ");
                                        }
                                    }
                                }
                                if (PageCount-topage>=1){document.write("<a href='?m=3&sm=8&act=<? $smarty.request.act ?>&word=<? $smarty.request.word ?>&page=<? $currentPage+1 ?>' title='��һҳ'>��һҳ</a>");}
                                </script>
                            </div>
                            <!--��ҳ����-->
                        </TD>
                    </TR>
                    <? /if ?>
                </TBODY>
            </table>
            <br />
            <a href="javascript:window.close()">
            [�ر�ҳ��]</a>
