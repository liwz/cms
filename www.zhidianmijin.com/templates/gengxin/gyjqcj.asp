<!-- #include file="conn.asp" --><!-- #include file="cjf.asp" --><!--#include file="inc/CHAR.INC"-->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE></TITLE>
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<LINK href="images/style.css" 
type=text/css rel=stylesheet>
<META content="MSHTML 6.00.3790.0" name=GENERATOR></HEAD>
<BODY style="FONT-SIZE: 12px; v-text-align: center" leftMargin=0 topMargin=3 
align="center" marginheight="0" marginwidth="0">
<table width="98%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#CCCCCC">
   <form name="form1" method="get" action="gyjqcj.asp">
 <tr bgcolor="3972B4"> 
      <td colspan="3" bgcolor="e7e7e7"> <div align="center"><strong><font color="#000000">�ɼ�</font></strong></div></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td width="17%">&nbsp;</td>
      <td width="83%">
      ��<input name="id1" type="text" id="id1" size="10">
      ��
      
      <input name="id2" type="text" id="id2" size="10">
      <input name="Submit" type="submit" <%if request("act")="cj" then%>disabled value="�������ݲɼ���....."<%else%>value="��ʼ�ɼ�"<%end if%> class="Submit" >
     <input name="act" type="hidden" value="cj"></td>
    </tr>
    </form>
</table><br>
<table width="98%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#CCCCCC">
    <tr bgcolor="3972B4">
      <td width="100%" colspan="3" bgcolor="e7e7e7"><%if request("act")="cj" then%>
	   <%
Dim id1,id2,Co,Msg,ID
Server.ScriptTimeOut=99999
id1=Request("id1")
id2=Request("id2")
If id1="" or Not IsNumeric(id1) Then id1=1
ID=id1
Co=Request("Co")
If Co="" or Not IsNumeric(Co) Then Co=1
id3=Request("id3")
If id3="" or Not IsNumeric(id3) Then id3=1
If id1="" or Not IsNumeric(id1) Or id2="" Or Not IsNumeric(id2) Then
   Response.write "&nbsp;�������ID�����д���<A HREF=# onclick=""Javascript:history.back(-1)""><FONT  COLOR=#FF0000>������ﷵ��</FONT></A>"
   Response.End
End If


If id1=id2 Then
   Msg="���ݲɼ����!"   
   MusicMake
Else
   Msg="���ڲɼ���,��ȴ�......<br><br>"
   MusicMake
   MakeNextPage
End IF

Sub MusicMake
Response.write "<b><font color=#FF0000>"&id1&"</font>/<font color=#FF0000>"&id2&"</font>&nbsp;&nbsp;"
Response.write Msg&"</b>"
Response.write "<IE:Download ID=""oDownload"" STYLE=""behavior:url(#default#download)"" />"

MakeIMG
End Sub

Sub MakeIMG
Dim k:k=0
Response.write "<table border=0 width=100% align=center><tr>"
Response.write  "<td width=100%  valign=top>"

set rs=server.CreateObject("ADODB.RecordSet")
sql="select * from cjxm where id=16"
rs.open sql,conn,1,3
url=rs("cjurl")
body=rs("cjbody")
cjxm1=rs("cjxm1")
rs.close

url=bqtf1(url)
body=bqtf1(body)
cjxm1=bqtf1(cjxm1)




url1=Split(url,"[id]")
body1=Split(body,"|")
cjxm1t=Split(cjxm1,"|")




url="http://life.httpcn.com/sm/vip_qian_gy.asp?n0=4&n1=59&qianci=8&y=2007&m=12&d=21&hh=8&fen=11&name=��Ҫ&b=��&x=&ztyisno=ON&pid=&cid="
On Error Resume Next 

zlp=GetHttp(url) 

'�ɼ������Ϣ��ʼ
body=GetStr(zlp,body1(0),body1(1))
cjxm1=GetStr(body,cjxm1t(0),cjxm1t(1))
cjxm1=bqtf2(cjxm1)
cjxm1=DSConvert(cjxm1,0)


'��ʼд������



'===================================================
'RString=DeHttpdata(zlp,"'[^<>'']*','[^<>'']*','[^<>""]*'")
Response.Write ""&id1&"<br>"
Response.Write "�⣺"&cjxm1&"<br>"
response.flush
Response.write "<span id=last></span></td><td  valign=top><span id=showImport></span></td></tr></table>"

End Sub

Sub MakeNextPage
Response.write "<meta http-equiv=""refresh"" content=""0;url='gyjqcj.asp?act=cj&id1="&id1+1&"&id2="&id2&"&id3="&id3&"&Co="&Co+1&"'"">"
End Sub
%>
<%end if%></td>
    </tr>
</table>
</BODY></HTML>

<script language="JavaScript" type="text/JavaScript">
function SwitchNewsType(NewsType)
{
	switch (NewsType)
	{
	case "PicNews":
		document.getElementById('PicNews').style.display='';
	break;

	}
}

</script>



