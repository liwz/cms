<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<TITLE> ��̫��ʱ������-��������
</TITLE>
<!--#include file="top.asp"--><!--#include file="../inc/conn.asp"-->
<SCRIPT src="comefrom.js"></SCRIPT><body topmargin=50 leftmargin=0 onload=init()><div id="right">
<!--#include file="right.asp"-->
</div>
<div id="left">
<div style="width:100%"><%
'��������

nx=trim(request("nx"))
xx=trim(request("xx"))
sex=trim(request("sex"))
riqi=trim(request("y"))&"-"&trim(request("m"))&"-"&trim(request("d"))

if len(riqi)<6 then riqi=trim(request("riqi"))
if riqi="" then
	riqi=year(now())&"-"&month(now())&"-"&day(now())
else
	riqi=FormatDateTime(riqi, 1) 'ת����ʱ���ʽ
end if

nian=year(riqi)
yue=month(riqi)
ri=day(riqi)

hh=trim(request("hh"))
fen=trim(request("fen"))

if nian="" then nian=year(now())
if yue="" then yue=month(now())
if ri="" then ri=day(now())
if hh="" then hh=hour(now())
if fen="" then fen=minute(now())

hh1=hh

province1=trim(request("province1"))
city1=trim(request("city1"))
jingdu=trim(request("jingdu"))

if not isnumeric(jingdu) then jingdu=0
on error resume next
	db1="laisuanmingjingdu.asp"
	Set conn1 = Server.CreateObject("ADODB.Connection")
	connstr1="Provider=Microsoft.Jet.OLEDB.4.0;Data Source=" & Server.MapPath(db1)
	conn1.Open connstr1

if province1<>"" and city1<>"" then
	set rs=server.createobject("ADODB.recordset")
	strsql="select * from jd where sheng='"&province1&"' and xian='"&city1&"'"
	rs.open strsql,conn1,1,1 
	if not rs.eof then
		id=rs("id")
		jingdu=rs("jingdu")
		shi=rs("shi")
		cxsjk="yes"
	end if
else
	shi=4*(jingdu-120)/60
end if

if cxsjk="" then
		province1=""
		city1=""
end if
if cxsjk="" and jingdu<>0 then
	set rs=server.createobject("ADODB.recordset")
	strsql="select * from jd where jingdu="&jingdu&" order by jingdu"
	rs.open strsql,conn1,1,1 
	if not rs.eof then
	do while not rs.eof
		id2=rs("id")
		sheng2=rs("sheng")
		xian2=rs("xian")
		jingdu2=rs("jingdu")
		dilimess=dilimess&"<b>"&sheng2&"</b>-<b>"&xian2&"</b> "
	rs.movenext
	loop
		dilimess="<hr size=1 color=>�þ��������ĵص�������� "&dilimess
	else
	set rs=server.createobject("ADODB.recordset")
	strsql="select * from jd where jingdu>="&jingdu&" order by jingdu"
	rs.open strsql,conn1,1,1 
	if not rs.eof then
		id2=rs("id")
		sheng2=rs("sheng")
		xian2=rs("xian")
		jingdu2=rs("jingdu")
		dilimess="<hr size=1 color=>����þ��ȵĵص�������� <b>"&sheng2&"</b>-<b>"&xian2&"</b>(����Ϊ"&jingdu2&") "
	end if
	set rs=server.createobject("ADODB.recordset")
	strsql="select * from jd where jingdu<="&jingdu&" order by jingdu desc"
	rs.open strsql,conn1,1,1 
	if not rs.eof then
		id2=rs("id")
		sheng2=rs("sheng")
		xian2=rs("xian")
		jingdu2=rs("jingdu")
		dilimess=dilimess&"�� <b>"&sheng2&"</b>-<b>"&xian2&"</b>(����Ϊ"&jingdu2&") ��"
	end if
	end if
end if

miao=0
sj1=nian&"��"&yue&"��"&ri&"�� "&hh1&"��"&fen&"��"&miao&""
sj11=nian&"-"&yue&"-"&ri&" "&hh1&":"&fen&":"&miao&""

sj11=FormatDateTime(sj11, 0) 'ת����ʱ���ʽ
sj00=sj11

xialing=trim(request("xialing"))
if xialing="yes" then sj11=DateAdd("s", -3600, sj11)	'����ʱ�䴦��

sj22=DateAdd("s", shi*3600, sj11)	'����ƽ̫��ʱ���ֵ

set rs=server.createobject("ADODB.recordset")
strsql="select * from yr where yue="&yue&" and ri="&ri&""
rs.open strsql,conn1,1,1 
if not rs.eof then
	id=rs("id")
	shi=rs("shi")
end if
conn1.close
set conn1=nothing

sj33=DateAdd("s", shi*3600, sj22)	'����ƽ̫��ʱ���ֵ
nian3=year(sj33)
yue3=month(sj33)
ri3=day(sj33)
hh3=hour(sj33)
fen3=minute(sj33)
miao3=second(sj33)
%>
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" >
<tbody><form method="POST"  action="taiyang.asp" name=form1 onSubmit="return submitchecken();">
<input type="hidden" name="act" value="ok" /><tr>
  <td width="100%" class="ttop"> ��̫��ʱ������</td>
    </tr>

  <tr>
<td class="new">�������ڣ�<select name="y" size="1" id="y" style="font-size: 9pt">
        <%for i=1950 to year(date())%>
        <option value="<%=i%>" <%if i=year(date()) then%> selected<%end if%>><%=i%></option>
        <%next%>
      </select>
��
<select name="m" size="1" id="m" style="font-size: 9pt">
  <%for i=1 to 12%>
  <option value="<%=i%>"<%if i=month(date()) then%> selected<%end if%>><%=i%></option>
  <%next%>
</select>
��
<select name="d" size="1" id="d" style="font-size: 9pt">
  <%for i=1 to 31%>
  <option value="<%=i%>" <%if i=day(date()) then%> selected<%end if%>><%=i%></option>
  <%next%>
</select>
��
<font color=red>(��������׼ʱ��) </font></td>
  </tr>

<tr>
<td class="new">����ʱ�䣺<select size="1" name="hh" style="font-size: 9pt"> <option value="0" <%if hh=0 then%>selected<%end if%>>�� 0</option> <option value="1" <%if hh-1=0 then%>selected<%end if%>>�� 1</option> <option value="2" <%if hh-2=0 then%>selected<%end if%>>�� 2</option> <option value="3" <%if hh-3=0 then%>selected<%end if%>>�� 3</option> <option value="4" <%if hh-4=0 then%>selected<%end if%>>�� 4</option> <option value="5" <%if hh-5=0 then%>selected<%end if%>>î 5</option> <option value="6" <%if hh-6=0 then%>selected<%end if%>>î 6</option> <option value="7" <%if hh-7=0 then%>selected<%end if%>>�� 7</option> <option value="8" <%if hh-8=0 then%>selected<%end if%>>�� 8</option> <option value="9" <%if hh-9=0 then%>selected<%end if%>>�� 9</option> <option value="10" <%if hh-10=0 then%>selected<%end if%>>�� 10</option> <option value="11" <%if hh-11=0 then%>selected<%end if%>>�� 11</option> <option value="12" <%if hh-12=0 then%>selected<%end if%>>�� 12</option> <option value="13" <%if hh-13=0 then%>selected<%end if%>>δ 13</option> <option value="14" <%if hh-14=0 then%>selected<%end if%>>δ 14</option> <option value="15" <%if hh-15=0 then%>selected<%end if%>>�� 15</option> <option value="16" <%if hh-16=0 then%>selected<%end if%>>�� 16</option> <option value="17" <%if hh-17=0 then%>selected<%end if%>>�� 17</option> <option value="18" <%if hh-18=0 then%>selected<%end if%>>�� 18</option> <option value="19" <%if hh-19=0 then%>selected<%end if%>>�� 19</option> <option value="20" <%if hh-20=0 then%>selected<%end if%>>�� 20</option> <option value="21" <%if hh-21=0 then%>selected<%end if%>>�� 21</option> <option value="22" <%if hh-22=0 then%>selected<%end if%>>�� 22</option> <option value="23" <%if hh-23=0 then%>selected<%end if%>>�� 23</option> </select>��<select size="1" name="fen" style="font-size: 9pt"><% for y=0 to 59%><option value="<%=y%>" <%if fen-y=0 then%>selected<%end if%>><%=y%></option><%next%></select>��<font color=red>(��24Сʱ��,00:00~23:59��) </font><input type=checkbox name=xialing value=yes <%if xialing="yes" then%>checked<%end if%>>
  ����ʱ��</td>
</tr>  <tr>
<td class="new">�����ص㣺<SELECT name=province onchange=select()></SELECT> <INPUT name=province1 style="color:ff0000;" size=6 value="<%=province1%>" ><SELECT name=city onchange=select()></SELECT> <INPUT name=city1 style="color:ff0000;" size=8 value="<%=city1%>" >&nbsp;�����������ѡ���У�����д�����ؾ��ȣ�<input type=txt name=jingdu size=8 value="<%=jingdu%>">��<%=dilimess%></td>
</tr>
<tr>
  <td class="new"><input type="submit" name="Submit3" value="��������" style='cursor:hand;'></td>
</tr>

</tr>
</form>
</table>
<%if request("act")="ok" then%>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" id="paipanTable">
    <tbody>
      <tr>
        <td class="ttop"> ��̫��ʱ����ʾ</td>
      </tr>
      <tr>
        <td class="new"><p>&nbsp;<br>
����ԭʼʱ�䣺<%=sj00%><p>
������׼ʱ�䣺<%=sj11%><p>
��ƽ̫��ʱ�䣺<%=sj22%><p>
����̫��ʱ�䣺<font color=red><%=sj33%></font><p>
<p>
����  </td>
      </tr>
    </table>
<%end if%>


  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" >
    <tbody>
   
      <tr>
        <td width="100%" class="ttop">����Ԥ���е�ʱ������ȷ����</td>
      </tr>
      <tr>
        <td class="new"><p>ʱ������Ӧ�ð���ʲô��׼ȷ���أ��ǰ�����ʱ��ȷ�������ǰ�����ʱ��ȷ������ʵΨһ�ı�׼����̫������ڵ�����ӽǣ�������ѧ����ν����̫��ʱ��������̫��ʱ��ƽ̫��ʱ+��ƽ̫��ʱ�������ʱ�����밴��������ص㣬��������ص�ƽ̫��ʱ���ٸ���ƽ̫��ʱ�������̫��ʱΪ׼�����ܼ򵥵����ñ���ʱ�䣬�����г��й�����Ҫ����֮ƽ̫��ʱ�뱱��ʱ����ձ�����ʱ��֮�ο��� </p>
          <p>&nbsp;</p></td>
      </tr>
  </table><table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
    <TBODY>
      <tr>
        <TD align="left" class=new style="PADDING-BOTTOM:5px"><script src="../images/urlcopy.js"></script></TD>
      </tr>
    </TBODY>
  </TABLE>
</div>
</div>
<!--#include file="../foot.asp"-->
</center>
</body></html>
