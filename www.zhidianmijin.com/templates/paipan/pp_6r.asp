<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<TITLE>��������-��������</TITLE>
<!--#include file="top.asp"--><!--#include file="../inc/getuc.asp"-->

<div id="right">
<!--#include file="right.asp"-->
</div>
<div id="left">
<div style="width:100%">
<%if request("act")="ok" then%>
<!--#include file="inc/sizhu.asp"-->
<!--#include file="inc/jieqi.asp"-->
<%
name=request.Form("name")
Response.Cookies("ciduppname")=name
zhanshi=request("zhanshi")
Response.Cookies("ciduppzhanshi")=zhanshi
jg=request("jg")
y=request("y")
m=request("m")
d=request("d")
mins=request("min")
h=request("h")
birthyear=request("birthyear")
Response.Cookies("ciduppyear")=birthyear
sex=request("sex")
Response.Cookies("ciduppsex")=sex
phn=request("pai")
gsarrage=request("guishen")
scpf=request("scpf")
df=request("df")
zhouye=request("zhouye")
Pf=request("pf")
Nyangli=y&"��"&m&"��"&d&"��"&h&"ʱ"&mins&"��"
sex=request("sex")
if birthyear>y then
response.Write("�������󣬷������¿�ʼ")
response.end
end if
%>

<%'����
dys=(birthyear-1924)mod 12
dys=(dys+12) mod 12
tys=(birthyear-1924)mod 10
tys=(tys+10)mod 10
ygzs=tg(tys)&dz(dys)
call xunkong(ygzs,yxks,yxss)
'response.write yxss
suishu=y-birthyear+1
if sex then
hntg=(2+suishu-1) mod 10
hndz=(dzorder(yxss)+suishu)mod 12
else
hntg=(9+suishu-1) mod 10
hndz=(dzorder(yxss)-4+suishu)mod 12
end if

hangn=tg(hntg)&dz(hndz)
'response.write hangn&suishu
%>

<%dates=y&"-"&m&"-"&d
Ytime=dates&" "&h&"��"&m&"��00"
if not isdate(dates) then
response.write dates&"����һ���Ϸ�������"
response.end
end if
'response.write ytime
call sizhu(y,m,d,h,mins,ygz,mgz,dgz,tgz)
call form_load(ytime,ntime,cyue,cri,cyear)
call makejq(ytime,prejq,nextjq)
call xunkong(ygz,yxk,yxs)
	call xunkong(mgz,mxk,mxs)
	call xunkong(dgz,dxk,dxs)
	call xunkong(hgz,hxk,hxs)
nJQ=RIGHT(NEXTjQ,2)
%>


<% '�½�

select case njq
       case "��ˮ","����" yuej="��"
       case "����","����" yuej="��"
       case "����","����" yuej="��"
       case "С��","â��" yuej="��"
       case "����","С��" yuej="δ"
       case "����","����" yuej="��"
       case "����","��¶" yuej="��"
       case "���","��¶" yuej="��"
       case "˪��","����" yuej="î"
       case "Сѩ","��ѩ" yuej="��"
       case "����","С��" yuej="��"
       case "��","����"   yuej="��" 
end select
'�½�
%>
<%dim tianpan(11)
yjorder=Dzorder(yuej)
  szorder=Dzorder(tgz)
  xd=yjorder-szorder
  szindex=(1-szorder+12)mod 12
  szindex=(szindex+yjorder-1)mod 12
  for i=0 to 11 

      iindex =(szindex+12+i-1) mod 12
      tianpan(i)=dz(iindex)
  next
 shizhi=right(tgz,1)
%>

<%'�Ŀ�
 select case left(dgz,1)
 case  "��" Jk="��"  
 case  "��" Jk="��" 
 case  "��","��" Jk="��" 
 case  "��","��" Jk="δ"
 case  "��"  Jk="��"    
 case  "��" Jk="��" 
 case  "��"  Jk="��" 
 case  "��" Jk="��" 
 end select
 
 jk1index=dzorder(jk) mod 12
 jk3index=dzorder(dgz) mod 12
 Jk1=tianpan(jk1index)
   jk2index=dzorder(jk1)mod 12
 jk2=tianpan(jk2index)
 jk3=tianpan(jk3index)
   jk4index=dzorder(jk3)mod 12
   jk4=tianpan(jk4index)
%>

<% '����
szorders=dzorder(tgz)
if zhouye=2 then 
if szorders>=4 and  szorders<10 then
 zhouye=1
 else
 zhouye=0
end if 
end if  'Ĭ�ϵ���ҹѡ��
'response.Write(szorders)
dim guishens(11)
if gsarrage then
  select case left(dgz,1)
       case  "��","��","��"  if zhouye then
	                         startGs="��"
							 else
							 startGs="δ"
							 end if
	   case  "��","��"       if zhouye then
	                         startGs="��"
							 else
							 startGs="��"
							 end if'������
	   case  "��","��"      if zhouye then
	                         startGs="��"
							 else
							 startGs="��"
							 end if'"��"��
	   case  "��","��"      if zhouye then
	                         startGs="��"
							 else
							 startGs="��"
							 end if'�Ⱥ�
	   case  "��"           if zhouye then
	                         startGs="��"
							 else
							 startGs="��"
							 end if'�绢

 end select
else
 select case left(dgz,1)
       case  "��"        if zhouye then
	                         startGs="δ"
							 else
							 startGs="��"
							 end if
	   case  "��","��"  if zhouye then
	                         startGs="��"
							 else
							 startGs="δ"
							 end if
	   case  "��"       if zhouye then
	                         startGs="��"
							 else
							 startGs="��"
							 end if'������
	   case  "��"       if zhouye then
	                         startGs="��"
							 else
							 startGs="��"
							 end if'������
	   case  "��"         if zhouye then
	                         startGs="��"
							 else
							 startGs="��"
							 end if'"��"��
	   case  "��"      if zhouye then
	                         startGs="��"
							 else
							 startGs="��"
							 end if'"��"��
	   case  "��"        if zhouye then
	                         startGs="î"
							 else
							 startGs="��"
							 end if'�Ⱥ�
	   case  "��"      if zhouye then
	                         startGs="��"
							 else
							 startGs="î"
							 end if'�Ⱥ�
	   case  "��"           if zhouye then
	                         startGs="��"
							 else
							 startGs="��"
							 end if'�绢

 end select
 
 end if
for i=0 to 11  '�ҳ������̵ı��
if tianpan(i)=startGs then
exit for
end if
next
'response.Write(startGs&i)
'ȷ��˳��
if i>=0 and i<=5  then
orders=1
else
orders=0
end if
if orders then
 for j=0 to 11 
 select case j
 case 0,4,9 guishens((i+j)mod 12)=left(guishen(j),1)
 case 1,2,3,5,6,7,8,10,11    guishens((i+j)mod 12)=right(guishen(j),1)  
 end select

 next 
 else
  for j=0 to 11
 select case j
 case 0,4,9                    guishens((i-j+12)mod 12)=left(guishen(j),1)
 case 1,2,3,5,6,7,8,10,11      guishens((i-j+12)mod 12)=right(guishen(j),1)  
 end select
 next
 end if
%>
<%'�Ŀι���
'response.write jk1index
gs1=guishens(jk1index)
gs2=guishens(jk2index)
gs3=guishens(jk3index)
gs4=guishens(jk4index)

%>
<%'����
'response.write dgz
schang=(tgorder(dgz)-1)*6+round(dzorder(dgz)/2)
 'response.write (round(3/2))
 'response.write schang
 'response.end
 scorder=(szorder-yjorder+13)mod 12
 if scorder=0 then
 scorder=12
 end if
set fo=server.createobject("scripting.filesystemobject")
path=server.mappath("temp\sanchuan.txt")
set fn=fo.opentextfile(path)
for i=1 to schang-1
fn.skipline
next
str=fn.readline
'response.Write("dd"&scorder&"<br>"&schang&"<br>")
'response.Write(str)
ScStr=split(str,",")
sanchuan=trim(ScStr(scorder))
chuan1=mid(sanchuan,2,1)
chuan2=mid(sanchuan,3,1)
chuan3=mid(sanchuan,4,1)
'response.Write(sanchuan)
for i= 0 to 11
if tianpan(i)=chuan1 then
chuan1index=i
end if

if tianpan(i)=chuan2 then
chuan2index=i
end if

if tianpan(i)=chuan3 then
chuan3index=i
end if
next

scgs1=guishens(chuan1index)
scgs2=guishens(chuan2index)
scgs3=guishens(chuan3index)
%>

<%'������ɣ�����ʱ������ͬ

C1tgIndex=dzorder(chuan1)-1
C2tgindex=dzorder(chuan2)-1
C3tgindex=dzorder(chuan3)-1
'response.Write(c1tgindex&c2tgindex)
riganorder=tgorder(dgz)-1
if riganorder>4 then
ryindex=(riganorder-4)*2-2
else
ryindex=(riganorder+1)*2-2
end if
if scpf then   'ʱѮ�ݸɡ��ŷ�
c1tgindexl=(c1tgindex+ryindex)mod 10
c2tgindexl=(c2tgindex+ryindex)mod 10
c3tgindexl=(c3tgindex+ryindex)mod 10
tg1=tg(c1tgindexl)
tg2=tg(c2tgindexl)
tg3=tg(c3tgindexl)
else
'��Ѯ�ݸ�
'response.write dxs
rtgindex=tgorder(dxs)-1
rdzindex=dzorder(dxs)-1
c1tgindex=(c1tgindex-rdzindex+12)mod 12
c2tgindex=(c2tgindex-rdzindex+12)mod 12
c3tgindex=(c3tgindex-rdzindex+12)mod 12

if c1tgindex<10 then
tg1=tg(c1tgindex)
else
tg1="&nbsp&nbsp"
end if
if c2tgindex<10 then
tg2=tg(c2tgindex)
else
tg2="&nbsp&nbsp"
end if
if c3tgindex<10 then
tg3=tg(c3tgindex)
else
tg3="&nbsp&nbsp"
end if


end if
%>

<%'����
rtgorder=tgorder(dgz)
rtg=round((rtgorder)/2+0.01)
'response.write round(rtg)
'response.write rtg&rtgorder
'response.write rtg
'response.write rtgorder
select case  chuan1
   case  "��","î"  b1=1 
   case  "��","��"  b1=2 
   case  "��","��","��","δ"  b1=3  
   case  "��","��"  b1=4 
   case  "��","��"  b1=5
end select

select case  chuan2
    case "��","î" b2=1 
    case "��","��" b2=2 
    case "��","��","��","δ" b2=3  
    case "��","��" b2=4 
    case "��","��" b2=5
end select

select case  chuan3
    case "��","î" b3=1 
    case "��","��" b3=2 
    case "��","��","��","δ" b3=3  
    case "��","��" b3=4 
    case "��","��" b3=5
end select
'response.write rtg
LqIndex1=(rtg-b1+5)mod 5
LqIndex2=(rtg-b2+5)mod 5
LqIndex3=(rtg-b3+5)mod 5
LQ1=LIUQIN(LqIndex1)
LQ2=LIUQIN(LqIndex2)
LQ3=LIUQIN(LqIndex3)
%>


<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" id="paipanTable">
    <tbody>
      <tr>
        <td class="ttop">�������̽��</td>
      </tr>
      <tr>
        <td class="new"><strong>������</strong><%=request("name")%> <strong>������:</strong><%=request("birthyear")%><strong> �Ա�</strong> 
          <% if request("sex")=1 then
	response.Write("��")
	else
	response.Write("Ů")
	end if
	%> <strong>ռ�£�</strong><%=zhanshi%></td>
        </tr>
      <tr>
        <td class="new"><strong>������</strong><font color="#ff0000"><%=NYANGLI%></font> <strong>ũ����</strong><font color="#ff0000"><%=ntime%></font></td>
      </tr>
      <tr>
        <td class="new"><strong>������</strong><font color="#0000ff"><%=nextjq%></font></td>
      </tr>
      <tr>
        <td class="new"><strong>��֧��</strong><%=ygz%>&nbsp;&nbsp;<%=mgz%>&nbsp;&nbsp;<%=dgz%>&nbsp;&nbsp;<%=tgz%> <strong>�½���</strong><%=yuej%>��</td>
      </tr>
      <tr>
        <td class="new"><strong>Ѯ�գ�</strong>
         <font color="#ff3300"> <%
	response.write yxk
	%>&nbsp;&nbsp;<%=mxk%>&nbsp;&nbsp;<%=dxk%>&nbsp;&nbsp;<%=hxk%></font></td>
      </tr> <%if phn=1 then%>
  <tr> 
   <td class="new"><strong>������</strong><%=ygzs%></td>
  </tr>
  <tr> 
     <td class="new"><strong>���꣺</strong><%=hangn%></td>
  </tr>
  <%end if%>
      <tr>
        <td class="new"><table align="center">
          <tr align="center">
            <td class="new" width="20" align="right">&nbsp;</td>
            <td class="new" width="23"><%=guishens(6)%> </td>
            <td class="new" width="27"><%=guishens(7)%> </td>
            <td class="new" width="25"><%=guishens(8)%> </td>
            <td class="new" width="23"><%=guishens(9)%> </td>
            <td class="new" align="left">&nbsp;</td>
          </tr>
          <tr align="center">
            <td class="new" height="20" align="right">&nbsp;</td>
            <td class="new"><%=tianpan(6)%> </td>
            <td class="new"><%=tianpan(7)%> </td>
            <td class="new"><%=tianpan(8)%> </td>
            <td class="new"><%=tianpan(9)%> </td>
            <td class="new" align="left">&nbsp;</td>
          </tr>
          <tr align="center">
            <td class="new" height="20" align="right"><%=guishens(5)%></td>
            <td class="new"><%=tianpan(5)%> </td>
            <td class="new" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td class="new"><%=tianpan(10)%> </td>
            <td class="new" align="left"><%=guishens(10)%></td>
          </tr>
          <tr align="center">
            <td class="new" align="right"><%=guishens(4)%></td>
            <td class="new"><%=tianpan(4)%> </td>
            <td class="new" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td class="new"><%=tianpan(11)%> </td>
            <td class="new" align="left"><%=guishens(11)%></td>
          </tr>
          <tr align="center">
            <td class="new" align="right">&nbsp;</td>
            <td class="new"><%=tianpan(3)%> </td>
            <td class="new"><%=tianpan(2)%> </td>
            <td class="new"><%=tianpan(1)%> </td>
            <td class="new"><%=tianpan(0)%></td>
            <td class="new" align="left">&nbsp;</td>
          </tr>
          <tr align="center">
            <td class="new" align="right">&nbsp;</td>
            <td class="new"><%=guishens(3)%> </td>
            <td class="new"><%=guishens(2)%> </td>
            <td class="new"><%=guishens(1)%> </td>
            <td class="new"><%=guishens(0)%> </td>
            <td class="new" align="left">&nbsp;</td>
          </tr>
        </table>
          <table height="70" align="center">
            <tr>
              <td  class="new">&nbsp; <%=gs4%>&nbsp;&nbsp; <%=gs3%>&nbsp;&nbsp; <%=gs2%>&nbsp;&nbsp; <%=gs1%> <br>
                &nbsp; <%=jk4%>&nbsp;&nbsp; <%=jk3%>&nbsp;&nbsp; <%=jk2%>&nbsp;&nbsp; <%=jk1%> <br>
                &nbsp; <%=jk3%>&nbsp;&nbsp; <%=right(dgz,1)%>&nbsp;&nbsp; <%=jk1%>&nbsp;&nbsp; <%=left(dgz,1)%> </td>
            </tr>
          </table></td>
      </tr>   <tr> 
    <td align="center" class="new">
    	<%=lq1%>&nbsp;&nbsp;
    	<%=tg1%>&nbsp;&nbsp;
    	<%=chuan1%>&nbsp;&nbsp;
    	<%=scgs1%>
    	<br>
    	<%=lq2%>&nbsp;&nbsp;
    	<%=tg2%>&nbsp;&nbsp;
    	<%=chuan2%>&nbsp;&nbsp;
    	<%=scgs2%>
    	<br>
    	<%=lq3%>&nbsp;&nbsp;
    	<%=tg3%>&nbsp;&nbsp;
    	<%=chuan3%>&nbsp;&nbsp;
    	<%=scgs3%>
    </td>
  </tr>
    </table>
<%else%>
<SCRIPT language=JavaScript>
<!--
function submitchecken() {
	if (document.form1.name.value == "") {
		alert("����������������");
		document.form1.name.focus();
		return false;
		}
	if (document.form1.birthyear.value == "") {
		alert("��ѡ��������");
		document.form1.birthyear.focus();
		return false;
		}
	if (document.form1.sex.value == "") {
		alert("��ѡ�������Ա�");
		document.form1.sex.focus();
		return false;
		}
	if (document.form1.zhanshi.value == "") {
		alert("������������ռ���顣");
		document.form1.zhanshi.focus();
		return false;
		}
	re="���������룡";
 	y=document.form1.y.value;
 	m=document.form1.m.value;
 	d=document.form1.d.value;

	if ((m==4||m==6||m==9||m==11)&&d>30) {
		alert(m+"��ֻ��30�졣"+re);
		document.form1.d.focus();
		return false;
		}
	if (y%4!=0&&m==2&&d>28) {
		alert(y+"����ƽ�꣬2��ֻ��28�졣"+re);
		document.form1.d.focus();
		return false;
		}
	if (m==2&&d>29) {
		alert(y+"�������꣬2��ֻ��29�졣"+re);
		document.form1.d.focus();
		return false;
		}
	showwait();
	return true;
	}
function showwait() {
waitting.style.display="";
waitting.style.visibility="visible";
	return true;
	}
//-->
</SCRIPT>
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" >
<tbody><form name="form1"  onsubmit="return submitchecken();" method="post" action="">
<input type="hidden" name="act" value="ok" /><tr>
  <td width="100%" class="ttop">������������ϵͳ    </td>
    </tr>
  <tr>
    <td class="new">������
      <input name="name" type="text" id="name" value="<%=xing&ming%>" size="12"> 
      ����ʱ�䣺 
      <select name=birthyear>
              <%for i=1922 to year(date())%>
              <option value="<%=i%>"<%if i=nian1 then%> selected<%end if%>><%=i%></option>
              <%next%>
            </select> 
      �Ա�: 
      <input name="sex" type="radio" value="1" checked>
      ��
      <input type="radio" name="sex" value="0">
      Ů <input type=hidden name=cm value=8> 
      ռ�£� <input type="text" name="zhanshi" maxlength="12" size="12" value="<%=zhanshi%>"></td>
  </tr>
  <tr>
    <td class="new">����ʱ�䣺 
      
      <select name="y" size="1" id="y" style="font-size: 9pt">
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
<select name="h" size="1" id="h" style="font-size: 9pt">
  <%for i=0 to 23%>
  <option value="<%=i%>" <%if i=hour(now()) then%> selected<%end if%>><%=i%></option>
  <%next%>
</select>
��
<select name="min" size="1" id="min" style="font-size: 9pt">
  <option value="0">δ֪</option>
  <%for i=0 to 59%>
  <option value="<%=i%>"<%if i=minute(now()) then%> selected<%end if%>><%=i%></option>
  <%next%>
</select>
��&nbsp;&nbsp;<input name=pai type=checkbox value=1>
            ������ </td>
  </tr>
<td  class="new">
<input id=gs1 name="GuiShen" type="radio" value="1" checked="" />
<label for="gs1"style="cursor:hand;" >�����ţ��</label>����������
<input id=gs2 type="radio" name="GuiShen" value="0" >
<label for="gs2"style="cursor:hand;" >�������ţ</label></td>
</tr>
<tr>
<td  class="new">�������У�<input 
      checked name=ZhouYe type=radio value=2>
            �Զ�
            <input name=ZhouYe type=radio value=1>
            ��
            <input name=ZhouYe type=radio 
      value=0>
            ҹ
            <input name="scpf" type="radio" value="1">
            ʱѮ�ݸ�
            <input name="scpf" type="radio" value="0" checked>
            ��Ѯ�ݸ�</td>
</tr> <tr>
<td align="center" class="new"><input type="submit" value="������������" name="submit" style="cursor:hand;" /> </td>
</tr>
</form>
</table><%end if%>
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" >
    <tbody>
   
      <tr>
        <td width="100%" class="ttop">˵��</td>
      </tr>
      <tr>
        <td class="new">����������������ռ�����׵�һ��������������ݼס�̫�Һϳ���ʽ��������ˮΪ�ף�ʮ����У��ɡ���ֱ�Ϊ��ˮ����ˮ������ȡ������ʮ�������������������ꡢ���硢�ɳ������������ӡ����磩����Ϊ���ɡ���������ʮ�ĿΣ��Կ��и�֧�����̡����������ת�����̺�ó���ֵ�ĸ�֧��ʱ�����������ס�<BR>
          <BR>
          ��������Դ���磬��������Խ�������Խ���顷���м��أ������顤����־�����С�����ʽ���ӹš����������ס����ơ�����ʫ��ƶ�ӡ��ƣ�������������ʱ�����ɹš���˵�����ƴ�ʱ�Ѿ���������������<BR>
          <BR>
          ���Ŀ�δ������Ҫ����¼���δ�ף�ڵġ����ɴ�š����������ƣ����Ǳࡶ��־������¼��֣�ԡ�ͨ־�ԡ��������ɣ�������ʮ���ҡ����꡶����־������ʮ�żң�Ǯ��������������Ŀ����һʮ�˼ң������ǲᣬ�����Ѿ��ӡ��˴��ο̱�����Ӱ�����������ڱ��������������������������������Ž�����ּ��Ω�����������ϡ��Ƹ�ز��֮���Է���ʮ�ա�ʮ������ʮ���¡�ʮ���ꡢ��ʮ����֮�ţ�������֮�壬����֮���飬Ω��һ֤��������������ʼ��ˮ��ˮ����һ��������֮˵�졣��<BR>
          <BR>
          ����������׫�����ɴ�ȫ���������ܻ�������������ģ���Ϊ��ϸ��������Ϻ���Ӱ�졣<BR>
          <BR>
          ����������֧֮�ɣ����ڲ�ռ�������ӣ��ĵ��޻����Ѿ�����ʷ����̭��<BR>
          �������ҹ��ŵ�����֮һ�������š�̫�Ҳ���Ϊ��ʽ������Ϊ����֮ĸ��ˮΪ����֮Դ��������ˮΪһ������ʮ�������������ɹʳ�Ϊ���ɡ�<BR>
          <BR>
          ����
          �䷨���½���ʱ�������ĿΣ����������������������ˣ��Ծ����׳ɰܡ�<BR>
          <BR>
          ����
          ������ռ���������ƣ��䷨�����Ѿã�������������޷�ȷ�������˶����Ѿ�ʢ�У��ɴ���֪����ʼ�ں�����ǰ��<BR>
          <BR>
          ����
          ���˱��Σ������ڻ���Ϊ��ά�±�׫�ġ���ټ�����񶨾�������˵���δ�ʱ�Ѿ��õ��������ײ��ϲ������ʱ����������鼮����α��ġ��ڼ�������Ԫ�ĳ�����֮��ף�������ġ����ɴ�ռ���͡����׻�Ԫ�����顣<BR>
          <BR>
          ����
          �������й��������չ��ʱ�ڣ��������鼮���ǲ�����������Ԭ������������У���ġ����ɴ�ȫ�����¹��׵ġ�������ָ�ϡ�����ϣ���ġ����ɽ�¼����Ϊ������<BR>
          <BR>
          ����
          �������ר�����࣬��Ҫ����˻��ġ�����ֱָ����.<BR>
          <BR>
          ����
          ����������о�������Ϊʱ�֣���ʱ��������������Ҫ��Τǧ��ġ�ǧ�����š���Ԭ��ɺ������������̽Դ���������������������ɽ�¼����ȡ�<BR>
          <BR>
          ����
          ������������ʷԭ�򣬴�ͳ�������о�һ���жϡ�<BR>
          <BR>
          ����
          �ĸ￪����������ѧ�Ĵ����ٶ����٣�������Ϊһ�Ŵ�ͳѧ�����������ߣ�ѧϰ�Ѷȴ����Զ������нϸ�����ĵ�ѧ�ߺ���Ϊ֮һ����������ר��ȴ��Ϊһ����<BR>
          <BR>
          ����
          ����������Ȼ�з뻯�ɵġ����񻻽���������س��̽�����������ġ����̲��֡����Բ����ɺ׾�ʿ�ġ�ʵ������Ԥ��ѧ��ͨ����ѧ����ΰ������������Ǭ������΢���������ע��ġ���������ֱָ����Ϊһ����<BR></td>
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
