<SCRIPT language=javascript>
    <!--
    function valid_checkdream(){
        if(  document.form1.word.value.length==""  )
        {window.alert("�Բ����������εĹؼ��֣�");
            document.form1.word.focus();
            return false;
        } ;
        if(  document.form1.word.value.length>20  )
        {window.alert("�Բ����뽫����������20�������ڣ�");
            document.form1.word.focus();
            return false;
        } ;
        win = window.open('','dream','scrollbars=yes,top=0,left=0,width=580,height=510');
        form1.submit();
        return ;
    }
    //-->
</SCRIPT>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <tbody><tr>
        <td width="79%" class="ttd"><span class="red">�ܹ�����:</span><br>
            <br>
            �ܹ������ܹ����������ܳ������常�����ڽ����������ܴ��ķ⽨�ƶ����кܴ��ס��ܹ�������Ļ������г�ߵĵ�λ�������ԡ��᲻���μ��ܹ��ӡ�֮�ԣ������ܴ������Ļ���ʧ�䡣
        �����ܹ���һ���ڿ�������ƵƵ���ֵ��������̳��������Ļ����й����ܹ�Ҳ�Ͳ��ɱ����ֱ��������ϵ�������Σ���������Ϊ���ܹ�֮�Ρ�,���μ��ܹ�������ˣ��ܹ������е��ܹ��������ܹ�����</td>
        <td width="21%" class="ttd"><img src="<? $siteTheme ?>/images/zg.gif" width="150" height="218"></td>
    </tr>
    <form method="post" action="?m=3&sm=8" name="form1" onSubmit="return valid_checkdream()" target="dream">
        <input type="hidden" name="act" value="ok" />
        <tr>
            <td colspan="2" class="new">
                �������������ݵĹؼ��� ��<input name="word" type="text" id="word" size="20" onKeyUp="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" maxLength="20">
                <select size="1" name="act">
                    <option selected="" value="1">����</option>
                    <option value="2">��ϸ</option>
                </select>  <input type="submit" name="Submit1" value="��ʼ����" style="cursor:hand;">
            </form></td>
        </tr>
    </tbody>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <tbody><? section name=id loop=$list ?>
        <tr>
            <td width="12%" class="new">&nbsp;<strong><? $list[id][0] ?></strong></td><td width="88%" class="new">
			<? section name=id1 loop=$list[id][1] ?><A onClick="window.open(this.href,'','location=no,menu=no,scrollbars=yes,resizable=no,top=0,left=0,width=580,height=510');return false;" href="?m=3&sm=8&act=1&word=<? $list[id][1][id1] ?>" target="_blank"><? $list[id][1][id1] ?></A>&nbsp;
                <? /section ?>
            </td>
        </tr><? /section ?>
    </table>

