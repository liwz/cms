<script language="javascript">
<!--
function checkname()
{
while(document.theform.xing.value.indexOf(" ")!=-1){
document.theform.xing.value=document.theform.xing.value.replace(" ","");
}
while(document.theform.xing.value.indexOf("	")!=-1){
document.theform.xing.value=document.theform.xing.value.replace("	","");
}
if (document.theform.xing.value.length < 1 || document.theform.xing.value.length>10)
{
alert("��������Ӧ��1-10������֮�䣡");
document.theform.xing.focus();
return (false);
}
}
//-->
</script><table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
  
<form method="POST" action="" onSubmit="return checkname();" name="theform"><tr>
        <TD class=new style="PADDING-BOTTOM: 8px" vAlign=top>���������ϣ�
          <input maxLength="10" type="text" name="xing" size="16" value="<?$xing?>" /> <input type="submit" value="��ʼ����" style="cursor:hand;" /><input type="hidden" name="act" value="ok" />
      </TD>
      </tr></form>
    </TBODY>
  </TABLE><table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
      <tr>
        <TD width="33%" vAlign=top class=ttd style="PADDING-BOTTOM: 8px">���ϣ�&nbsp;<strong><?$sxing?></strong></TD>
        <TD width="33%" vAlign=top class=ttd style="PADDING-BOTTOM: 8px">���壺&nbsp;<strong><?$sxing|GbToBig?></strong></TD>
        <TD class=ttd style="PADDING-BOTTOM: 8px" vAlign=top>ƴ����&nbsp;<strong><?$sxing1|c?></strong></TD>
      </tr>
<tr>
        <TD colspan="3" vAlign=top class=new style="PADDING-BOTTOM: 8px"><strong>��ϸ����:</strong></TD>
      </tr> </tr>
<tr>
        <TD colspan="3" vAlign=top class=new style="PADDING-BOTTOM: 8px">
    <?if ($intro) ?><?$intro?><?else?>ϵͳû���ҵ����յ����ϣ�<?/if?></TD>
      </tr>
    </TBODY>
  </TABLE>
