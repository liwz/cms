<?php /* Smarty version 2.6.6, created on 2013-05-14 14:44:24
         compiled from chouqian/index.php */ ?>
<SCRIPT language=javascript>
    <!--
    function valid_checkdream(){
        if(  document.formjm.word.value.length==""  )
        {window.alert("�Բ����������εĹؼ��֣�");
            document.formjm.word.focus();
            return false;
        } ;
        if(  document.formjm.word.value.length>20  )
        {window.alert("�Բ����뽫����������20�������ڣ�");
            document.formjm.word.focus();
            return false;
        } ;
        win = window.open('','dream','scrollbars=yes,top=0,left=0,width=580,height=510');
        formjm.submit();
        return ;
    }
    function submitchecken() {
        if (document.formzw.zwdm.value == "") {
            alert("����������ָ�ƴ��룡");
            document.formzw.zwdm.focus();
            return false;
        }
        if (document.formzw.zwdm.value.length != 5) {
            alert("ָ�ƴ����������Ӧ��Ϊ5��X��O����ĸ��");
            document.formzw.zwdm.focus();
            return false;
        }
        return true;
    }
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
    function checkjx()
    {
        var word=document.theform.word.value;
        if (word=='' || word.length>20)
        {
            alert('������20λ���ڵ����֣�');
            document.theform.word.focus()
            return false;
        }
    }
    //-->
</SCRIPT>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
        <tr>
            <TD vAlign=top class=new style="PADDING-BOTTOM: 8px">���ܣ����������Ҫ���й����������������ݡ�����������ǩ���ƴ�����ǩ��������ǩ��������ǩ���ص���ǩ�������ռ�����ԡ�����Դӱ�����Ե��������͵�����ռ�������������ǩ��������߽�ǩ��ռ������������һ���ۺ��������ռ����ȫ��������ǩռ��һӦ��ȫ����һ�����������ҵ��Լ���Ҫ�Ĳ��ԡ�</TD>
        </tr>
    </TBODY>
</TABLE>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
        <tr>
            <TD colspan="3"  vAlign=top class=ttop style="PADDING-BOTTOM: 1px">��������</TD>
        </tr>
        <tr>
            <TD align="center" vAlign=top class=new style="PADDING-BOTTOM: 1px"><a href="?m=3&sm=2"><img src="<?php echo $this->_tpl_vars['siteTheme']; ?>
/images/gylq.gif" width="176" height="89" border="0"></a></TD>
            <TD align="center" vAlign=top class=new style="PADDING-BOTTOM: 1px"><a href="?m=3&sm=4"><img src="<?php echo $this->_tpl_vars['siteTheme']; ?>
/images/yzlq.gif" width="172" height="88" border="0"></a></TD>
            <TD align="center" vAlign=top class=new style="PADDING-BOTTOM: 1px"><a href="?m=3&sm=3"><img src="<?php echo $this->_tpl_vars['siteTheme']; ?>
/images/dxlq.gif" width="174" height="88" border="0"></a></TD>
        </tr>
        <tr>
            <TD align="center" vAlign=top class=new style="PADDING-BOTTOM: 1px"><a href="?m=3&sm=1"><img src="<?php echo $this->_tpl_vars['siteTheme']; ?>
/images/dmgdm.gif" width="174" height="88" border="0"></a></TD>
            <TD align="center" vAlign=top class=new style="PADDING-BOTTOM: 1px"><a href="?m=3&sm=5"><img src="<?php echo $this->_tpl_vars['siteTheme']; ?>
/images/thlq.gif" width="174" height="86" border="0"></a></TD>
            <TD align="center" vAlign=top class=new style="PADDING-BOTTOM: 1px">&nbsp;</TD>
        </tr>
    </TBODY>
</TABLE>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
        <tr>
            <TD  vAlign=top class=ttop style="PADDING-BOTTOM: 1px">���ֽ���</TD>
        </tr>
        <tr>
            <TD vAlign=top class=new style="PADDING-BOTTOM: 1px"><span class="red">�������:</span>(��������ഫΪ��������������������ٰ�ʮ��ǩ�����ձʻ��Դ������ٰ�ʮ��س֮��ռ������ǩ�ľ䷨���̲�һ��Ԣ����Զ���仯����жϼ��ף��൱׼���� )</TD>
        </tr><form name="form1" onSubmit="return Check(this)" method="post" action="?m=3&sm=6">
            <input type="hidden" name="act" value="ok" />
            <tr>
                <td class="new">
                �������������庺�ֳ�ǩռ����<input name="name1" type="text" id="name1" size="20" onKeyUp="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" maxLength="3">��������ֻȡǰ������ <input type="submit" name="Submit1" value="�ύ" style="cursor:hand;"><hr noshade color="#CCCCCC"></td>
            </tr></form> <tr>
                <TD vAlign=top class=new style="PADDING-BOTTOM: 1px"><span class="red">�ܹ�����:</span></TD>
            </tr><form method="post" action="?m=3&sm=8" name="formjm" onSubmit="return valid_checkdream()" target="dream">

                <input type="hidden" name="act" value="ok" />
                <tr>
                    <td class="new">
                        �������������ݵĹؼ��� ��<input name="word" type="text" id="word" size="20" onKeyUp="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" maxLength="20">
                        <select size="1" name="act">
                            <option selected="" value="1">����</option>
                            <option value="2">��ϸ</option>
                        </select>  <input type="submit" name="Submit1" value="��ʼ����" style="cursor:hand;"></td>
                    </tr></form><form name="formzw" onSubmit="return submitchecken()" method="post" action="zwsm.php">
                        <input type="hidden" name="act" value="ok" />
                    </form>
                    <form name="theform" onSubmit="return checkjx();" method="post" action="?m=3&sm=9">
                        <input type="hidden" name="act" value="ok" />
                    </form>
                </TABLE>
