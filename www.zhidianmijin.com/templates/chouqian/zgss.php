<SCRIPT language=javascript>
    <!--
    function Check(theForm)
    {
        var name1 = theForm.name1.value;
        if (name1 == "")
        {
            alert("�������������庺�ֽ��в��㣡");
            theForm.name1.value="";
            theForm.name1.focus();
            return false;
        }
        if (name1.search(/[`1234567890-=\~!@#$%^&*()_+|<>;':",.?/ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz]/) != -1)
        {
            alert("�����������庺�֣�");
            theForm.name1.value = "";
            theForm.name1.focus();
            return false;
        }
    }
    function Check2(theForm)
    {
        var name2 = theForm.name2.value;
        if (name2 == "")
        {
            alert("�������������庺�ֽ��в��㣡");
            theForm.name2.value="";
            theForm.name2.focus();
            return false;
        }
        if (name2.search(/[`1234567890-=\~!@#$%^&*()_+|<>;':",.?/ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz]/) != -1)
        {
            alert("��������뷱�庺�֣�");
            theForm.name2.value = "";
            theForm.name2.focus();
            return false;
        }
    }
    //-->
</SCRIPT>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <tbody><tr>
        <td width="79%" class="ttd"><span class="red">�������:</span><br><br>
            ��������ഫ������ʱ�������ľ�ʦ�����������
            ������ʷ���أ�������϶����ģ������������������ñ����ˣ���ǡ���ô���
            �����ÿ�����⣬�ذ�����һ�ֶ�����ռ��������Ҫ�ϣ���Ҫ�����������쵻�棬Ȼ����ֽ��д�����֡��������֣����������������齻����Ҳ����˵����������ѵ������˽⣬��������������ָʾ���������򲻿ɴ桰��һ�桱����̬��
        ��������������ٰ�ʮ��س������䷨�����̲�һ��Ԣ����Զ����ռ���ߵ�˼·���кܴ���������ã��ر�����Щ��������������е��ˣ�����һ�ֲ��������ؼ����յĻ�Ȼ���ʸо���������ǿ�����Ϊ�жϼ��ף��������ˣ���ѡ���������׵�ָ���롣</td>
        <td width="21%" class="ttd"><img src="<? $siteTheme ?>/images/zgss.jpg" width="159" height="240"></td>
    </tr>
    <form name="form1" onSubmit="return Check(this)" method="post" action="">
        <input type="hidden" name="act" value="ok" />
        <tr>
            <td colspan="2" class="new">
            �������������庺�ֳ�ǩռ����<input name="name1" type="text" id="name1" size="20" onKeyUp="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" maxLength="3">��������ֻȡǰ������ <input type="submit" name="Submit1" value="�ύ" style="cursor:hand;"></form></td>
        </tr>
<? if ($str1<>"" and $str2<>"" and $str3<>"") ?>
        <tr bgcolor="#EFF8FE">
            <td class="new" colspan="2" valign="middle">
                <br>���������������Ϊ��<font color=blue><? $str1 ?>&nbsp;<? $str2 ?>&nbsp;<? $str3 ?></font><br><br>
                <font color=cc6600>��ʫԻ����</font><? $zhugetitle ?><br><br>
                <font color=cc6600>��ǩ�͡���</font><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<? $zhugecontent ?><br><br>
            </td>
        </tr>
<? /if ?>
</tbody>
</table>
