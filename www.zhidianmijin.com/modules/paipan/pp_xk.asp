<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<TITLE>���շ�����������-��������</TITLE>
<!--#include file="top.asp"--><!--#include file="../inc/conn.asp"-->
<div id="right">
<!--#include file="right.asp"-->
</div>
<div id="left">
<div style="width:100%">
<%if request("act")="ok" then%><%
  Gm=trim(request("gm"))
  Dy=request("dy")
  
  Sx=trim(request("sx"))
  pljsx=request("pljsx")
  nian=request("nian")
Response.Cookies("ciduppyear")=nian
  sex=request("sex")
Response.Cookies("ciduppsex")=sex
  y=request("year")
  mont=request("month")
  SxId=left(Sx,(len(Sx)-4))
  SxName=right(Sx,4)
  shan=left(SxName,1)
  xiang=left(right(sxname,2),1)
  tixing=0
%>
<!--#include file="inc/xkfunc.asp"-->

<%
  select case shan
     case "��","δ","��","��","��","��","��","��","��","��","��","��","��","��" tixing=1
  end select
  dim Jiu(7)
    dim sx1(23)
	  sx1(0)="��"
      sx1(1)="��"
      sx1(2)="��"
      sx1(3)="��"
      sx1(4)="��"
      sx1(5)="��"
      sx1(6)="��"
      sx1(7)="î"
      sx1(8)="��"
      sx1(9)="��"
      sx1(10)="��"
      sx1(11)="��"
      sx1(12)="��"
      sx1(13)="��"
      sx1(14)="��"
      sx1(15)="δ"
      sx1(16)="��"
      sx1(17)="��"
      sx1(18)="��"
      sx1(19)="��"
      sx1(20)="��"
      sx1(21)="��"
      sx1(22)="Ǭ"
      sx1(23)="��"
  jiu(0)=1
  jiu(1)=8
  jiu(2)=3
  jiu(3)=4
  jiu(4)=9
  jiu(5)=2
  jiu(6)=7
  jiu(7)=6
  Bgid=(sxid\3)
  BgYu=sxid mod 3'�������Ԫ��,����Ԫ����Ԫ����Ԫ��
  bgidx=(jiu(bgid)+4)mod 9
  bgidy=9-bgidx
  %><%
  select case dy
       case 0 DaYun="һ��"
       case 1 DaYun="����"
       case 2 DaYun="����"
	   case 3 DaYun="����"
	   case 4 DaYun="����"
	   case 5 DaYun="����"
	   case 6 DaYun="����"
       case 7 DaYun="����"
	   case 8 DaYun="����"
end select	
%>
<%Dim DaXie(8)
Dim SP(8)
Dim Xp(8)
Dim Yp(8)
Dim Yporder(8)
DaXie(0)="һ"
DaXie(1)="��"
DaXie(2)="��"
DaXie(3)="��"
DaXie(4)="��"
DaXie(5)="��"
DaXie(6)="��"
DaXie(7)="��"
DaXie(8)="��"
for i=0 to 8
YpIndex=(i+dy)mod 9
Yp(i)=Daxie(YPindex)
yporder(i)=ypindex+1
next

'����
%>

 <%
 sp1=yporder(bgidx)
 xp1=yporder(bgidy)
 %>

 <%
 
   for i=0 to 7
   if jiu(i)=sp1 then
   kki=i
   exit for
   end if
   next  
   for i=0 to 7
   if jiu(i)=xp1 then
   kkj=i
   exit for
   end if
   next  
   if sp1=5 then
   kki=dy
   end if
   if xp1=5 then
   kkj=dy
   end if'
  ' response.write sp1&xp1&"<br>"
  'response.write kki&kkj&"<br>"
  ' response.write bgyu&"<bg>"
   %>

<%
if gm="��������" then
'response.write shan&xiang
 shangx=kki*3+bgyu
 xiangx=kkj*3+bgyu
 shan=sx1(shangx)
 xiang=sx1(xiangx)
' response.write xiangx
 'response.write shan&xiang
 if sp1<>5 then
select case shan
case "��","��","��","��" dyys=1
case "��","��","��","î","δ" dyys=2
case "��","Ǭ","��","��","��","��" dyys=6
case "��","��","��","��","��"  dyys=7
case  "��","��","��","��" dyys=9
end select
end if
if xp1<>5 then
'response.write dyys
select case xiang
case "��","��","��","��" dyyx=1
case "��","��","��","î","δ" dyyx=2
case "��","Ǭ","��","��","��","��" dyyx=6
case "��","��","��","��","��"  dyyx=7
case  "��","��","��","��" dyyx=9
end select
end if
else
dyy=dy
end if
if gm="��������" then
 sp(0)=dyys
 xp(0)=dyyx
 
 else
 sp(0)=yporder(bgidx)
 xp(0)=yporder(bgidy)
   
 end if'����й�ɽ����
 if sp1=5 then
sp(0)=5
end if
 if xp1=5 then
xp(0)=5
end if
%>

   <%
   SxIds=kki*3+bgyu
   SxIdx=kkj*3+bgyu'ɽ��õ����
  %>
  <%

  If (((SxIds-1)\3)mod 2)=1 then
    Orderx=true
	else
	Orderx=false
	end if    'ȷ������
   If sXIDs=0 then
   Orderx=true
   end if  
    If (((SxIdx-1)\3)mod 2)=1 then
    Ordery=true
	else
	Ordery=false
	end if    'ȷ������
   If sXIDx=0 then
   Ordery=true
   end if    '��Ϊ��
	'response.write order
  %>
<%

if Orderx then
for i=1 to 8
Sp(i)=(Sp(0)+i)mod 9
if sp(i)=0 then
sp(i)=9
end if
next
else
for i=1 to 8
Sp(i)=(Sp(0)-i+9)mod 9
if sp(i)=0 then
sp(i)=9
end if
next
end if
%>
<%

if Ordery then
for i=1 to 8
Xp(i)=(Xp(0)+i)mod 9
if xp(i)=0 then
xp(i)=9
end if
next
else
for i=1 to 8
Xp(i)=(Xp(0)-i+9)mod 9
if xp(i)=0 then
xp(i)=9
end if
next
end if
%>





<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" id="paipanTable">
    <tbody>
      <tr>
        <td class="ttop">���շ�����������</td>
      </tr>
      <tr>
        <td align="center" class="new"><strong><font color="#0000FF"><%=dayun%> <%=sxName%>
<br>
<%=gm%></font></strong>
<br>��������<a href=pp target=_blank><font color=aaaaaa></font></a>
<br>�������Щ����Щ�����
<br>��&nbsp;<%=sP(8)%> <%=xP(8)%> �� <%=sP(4)%> <%=xP(4)%> ��<%=sP(6)%>  <%=xP(6)%> &nbsp;��
<br>�� <%=yP(8)%> �� <%=yP(4)%> �� <%=yP(6)%>   ��
<br>�������੤���੤����
<br>��&nbsp;<%=sP(7)%> <%=xP(7)%> �� <%=sP(0)%> <%=xP(0)%> ��<%=sP(2)%>  <%=xP(2)%> &nbsp;��
<br>�� <%=yP(7)%> �� <%=yP(0)%> �� <%=yP(2)%>    ��
<br>�������੤���੤����
<br>��&nbsp;<%=sP(3)%> <%=xP(3)%> �� <%=sP(5)%> <%=xP(5)%>  ��<%=sP(1)%>  <%=xP(1)%> &nbsp;��
<br>�� <%=yP(3)%> �� <%=yP(5)%> �� <%=yP(1)%> ��
<br>�������ة����ة�����
<br>����<%response.Write(shan&"ɽ:")
  if tixing=1 then
 
  %>
      <font color="#0000CC">�˳�ɷ��¥�Ż�����˿����������������������˴󣬻����Ա��н϶ಣ���������������Ŵ�����������������������ȡ�������������Ե͡�</font> 
      <%else%>
      <font color="#0000CC">����ɽ��סլ�����뱣�أ������˿������ڿ��Ų��˹��������Ŵ��������������ڣ����Բ��������������Ʋ��˹��ͣ�������ɽ���� 
      </font>
    <%end if%>   
<br>
<%if request("pailong")=1 then%>
<br>��<strong>������</strong><p></p>
<%'response.Write(pljsx)
'response.end

call plj(pljsx)

end if
%>
<br>
<%
if request("mingua")=1 then
%>
<br>��<strong><font color=red>����</font>��<font color=green>����</font>��<font color=blue>����</font></strong><p></p>
<%'response.Write(pljsx)
'response.end
call minggua(nian,sex,y,mont)
%>
<%
end if%>
</td>

      </tr>

    </table>
<%else%><%
dim dz(11)
dz(0)="��"
dz(1)="��"
dz(2)="��"
dz(3)="î"
dz(4)="��"
dz(5)="��"
dz(6)="��"
dz(7)="δ"
dz(8)="��"
dz(9)="��"
dz(10)="��"
dz(11)="��"

%>
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" >
<tbody><form name="form1"  method="post" action="">
<input type="hidden" name="act" value="ok" /><tr>
  <td width="100%" class="ttop">���շ�����������</td>
    </tr>
  <tr>
    <td class="new">ѡ�� 
        <input name="feixing" type="checkbox" id="feixing" value="checkbox" checked>
        ������&nbsp;&nbsp;������ 
            <select id = select5 name=gm style="WIDTH: 80px">
              <option value = "��������" selected >��������</option>
              <option value = "��������" >��������</option>
            </select>
���ˣ�
<select id = select6 name=dy style="WIDTH: 55px">
  <option value = 0 >һ��</option>
  <option value = 1 >����</option>
  <option value = 2 >����</option>
  <option value = 3 >����</option>
  <option value = 4 >����</option>
  <option value = 5 >����</option>
  <option value = 6 selected >����</option>
  <option value = 7 >����</option>
  <option value = 8 >����</option>
</select>
ɽ��
<select id=select7 name=sx style="WIDTH: 80px">
  <option value = 0��ɽ���� selected>��ɽ����</option>
  <option value = 1��ɽ���� >��ɽ����</option>
  <option value = 2��ɽ���� >��ɽ����</option>
  <option value = 3��ɽδ�� >��ɽδ��</option>
  <option value = 4��ɽ���� >��ɽ����</option>
  <option value = 5��ɽ���� >��ɽ����</option>
  <option value = 6��ɽ���� >��ɽ����</option>
  <option value = 7îɽ���� >îɽ����</option>
  <option value = 8��ɽ���� >��ɽ����</option>
  <option value = 9��ɽ���� >��ɽ����</option>
  <option value = 10��ɽǬ�� >��ɽǬ��</option>
  <option value = 11��ɽ���� >��ɽ����</option>
  <option value = 12��ɽ���� >��ɽ����</option>
  <option value = 13��ɽ���� >��ɽ����</option>
  <option value = 14��ɽ���� >��ɽ����</option>
  <option value = 15δɽ���� >δɽ����</option>
  <option value = 16��ɽ���� >��ɽ����</option>
  <option value = 17��ɽ���� >��ɽ����</option>
  <option value = 18��ɽ���� >��ɽ����</option>
  <option value = 19��ɽî�� >��ɽî��</option>
  <option value = 20��ɽ���� >��ɽ����</option>
  <option value = 21��ɽ���� >��ɽ��ɽ</option>
  <option value = 22Ǭɽ���� >Ǭɽ����</option>
  <option value = 23��ɽ���� >��ɽ����</option>
</select></td>
  </tr>

<tr> 
<td class="new">ѡ�� 
        <input name="pailong" type="checkbox" id="pailong" value="1">
         ������&nbsp;&nbsp;ˮ���ڣ� 
            <select id=pljsx name=pljsx style="WIDTH:40px">
              <option value = 0��ɽ���� selected>��</option>
              <option value = 1��ɽ���� >��</option>
              <option value = 2��ɽ���� >��</option>
              <option value = 3��ɽδ�� >��</option>
              <option value = 4��ɽ���� >��</option>
              <option value = 5��ɽ���� >��</option>
              <option value = 6��ɽ���� >��</option>
              <option value = 7îɽ���� >î</option>
              <option value = 8��ɽ���� >��</option>
              <option value = 9��ɽ���� >��</option>
              <option value = 10��ɽǬ�� >��</option>
              <option value = 11��ɽ���� >��</option>
              <option value = 12��ɽ���� >��</option>
              <option value = 13��ɽ���� >��</option>
              <option value = 14��ɽ���� >��</option>
              <option value = 15δɽ���� >δ</option>
              <option value = 16��ɽ���� >��</option>
              <option value = 17��ɽ���� >��</option>
              <option value = 18��ɽ���� >��</option>
              <option value = 19��ɽî�� >��</option>
              <option value = 20��ɽ���� >��</option>
              <option value = 21��ɽ���� >��</option>
              <option value = 22Ǭɽ���� >Ǭ</option>
              <option value = 23��ɽ���� >��</option>
            </select></td>
</tr>

<tr> 
<td class="new">ѡ�� 
        <input name="mingua" type="checkbox" id="mingua" value="1">
        ���ꡢ���¡�����&nbsp;&nbsp;���� 
            <select name="year" id="year">
              <%yea=year(now)
		  for i=0 to 100%>
              <option value=<%=yea-i%>><%=yea-i%></option>
              <%next%>
            </select>
        ���£� 
        <select name="month" id="month">
          <option value=<%=mon%>><%=dz((mon+1)mod 12)%>��</option>
          <%
		  for i=1 to 12
		  j=(i+1)mod 12
		  %>
          <option value=<%=i%>><%=dz(j)%>��</option>
          <%next%>
        </select></td>
</tr>
<tr> 
<td class="new">����ʱ�䣺 
      <select name=birthyear>
              <%for i=1922 to year(date())%>
              <option value="<%=i%>"<%if i=1981 then%> selected<%end if%>><%=i%></option>
              <%next%>
            </select> 
      �Ա�: 
      <input name="sex" type="radio" value="1" checked>
      ��
      <input type="radio" name="sex" value="0">
      Ů <input type=hidden name=cm value=8> </td>
</tr>
 <tr align="center"> 
<td class="new">ע������������ɽ��ɷ��������֮ͤ����"����������ѧ"���ݣ�������л��</td>
</tr><tr align="center"> 
<td class="new">
 <input type="submit" value="��ʼ����" id=submit1 name=submit1>          �� 
          <input type="reset" value="�����趨" id=submit1 name=reset>
  </td>
</tr>
</tbody>
</form>
</table>
  <%end if%>
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" >
    <tbody>
   
      <tr>
        <td width="100%" class="ttop">���շ�����������</td>
      </tr>
      <tr>
        <td class="new"><p>������ʱ�䣬�վ��ǿռ䣬����ѧ����һ���о�ʱ��Ϳռ�Ϊ���츣��ѧ�ʡ�<BR>
          ����
          ����ѧ��������ϵ���ɣ���ͼ�����飬���ԡ�<BR>
          ����
          ��ͼ����Ҫ������ǣ�һ��Ϊˮ������Ϊ������Ϊľ���ľ�Ϊ����ʮΪ������ͼΪ���졣<BR>
          ����
          �������Ҫ������ǣ�������һ���������ߣ�����Ϊ�磬����Ϊ�㡣����Ϊ���졣<BR>
          ����
          ������������ԣ��к�����ԣ��������ͼ�����������顣�Ⱥ�����Եķ�λһ��Ҫ���Ρ�<BR>
          ����
          ���ں�ͼ������Ե����ݺܶ��鼮�����ˣ��ҾͲ���˵�ˣ������Ҫ��ס���ǣ���Щ������Ҫ�Ļ�����һ��Ҫ����˽⣬�������Ķ����ͺ��������ˡ�<BR>
          ����
          �����շ�ˮ��Ҫ�õ����ǣ���ˮΪһ������������Ϊ�������ϣ���ľΪ������������ľΪ�ľӶ��ϣ���Ϊ�������У�Ǭ��Ϊ��������������Ϊ�˾Ӷ��������Ϊ�ž����ϡ�<BR>
          ����
          ���շ�ˮѧ��ʵ�������е��ĵĲ����ǣ�һ���������������ǣ��������֣��ģ�������<BR>
          ����
          ���շ�ˮ�����ؼ��ǣ������졣������Ҳ����ͷ����ƽ����Ҫ��ˮ������<BR>
          ����
          �������Ǿ�ֱ�ӽ�������֮�ţ���ѧ����������ѧ�ѣ����ϰѺ�ͼ�����顢���ԵĻ���֪ʶ���գ���Ϊ�����������Щ�����������ˡ� </p>
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
