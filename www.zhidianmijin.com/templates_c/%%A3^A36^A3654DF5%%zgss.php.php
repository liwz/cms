<?php /* Smarty version 2.6.6, created on 2013-05-14 13:13:41
         compiled from chouqian/zgss.php */ ?>
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
        <td width="21%" class="ttd"><img src="<?php echo $this->_tpl_vars['siteTheme']; ?>
/images/zgss.jpg" width="159" height="240"></td>
    </tr>
    <form name="form1" onSubmit="return Check(this)" method="post" action="">
        <input type="hidden" name="act" value="ok" />
        <tr>
            <td colspan="2" class="new">
            �������������庺�ֳ�ǩռ����<input name="name1" type="text" id="name1" size="20" onKeyUp="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" maxLength="3">��������ֻȡǰ������ <input type="submit" name="Submit1" value="�ύ" style="cursor:hand;"></form></td>
        </tr>
<?php if (( $this->_tpl_vars['str1'] <> "" && $this->_tpl_vars['str2'] <> "" && $this->_tpl_vars['str3'] <> "" )): ?>
        <tr bgcolor="#EFF8FE">
            <td class="new" colspan="2" valign="middle">
                <br>���������������Ϊ��<font color=blue><?php echo $this->_tpl_vars['str1']; ?>
&nbsp;<?php echo $this->_tpl_vars['str2']; ?>
&nbsp;<?php echo $this->_tpl_vars['str3']; ?>
</font><br><br>
                <font color=cc6600>��ʫԻ����</font><?php echo $this->_tpl_vars['zhugetitle']; ?>
<br><br>
                <font color=cc6600>��ǩ�͡���</font><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['zhugecontent']; ?>
<br><br>
            </td>
        </tr>
<?php endif; ?>
</tbody>
</table>