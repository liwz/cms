<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<TITLE>���Ŷݼ���������ϵͳ</TITLE>
<!--#include file="top.asp"--><!--#include file="../inc/conn.asp"--><!--#include file="../inc/getuc.asp"-->
<div id="right">
<!--#include file="right.asp"-->
</div>
<div id="left">
<div style="width:100%">
<%if request("act")="ok" then%><%
 name=request("name")
 sex=request("sex")
birthyear=request("birthyear")
zhanshi=request("zhanshi")
Pmethod=request("R1")
nian=request("year")
yue=request("month")
ri=request("date")
shi=request("hour")
fen=request("minute")
order=request("order")
zhuanf=trim(request.Form("r1"))
%>
<!--#include file="inc/sizhu.asp"-->
<!--#include file="inc/jieqi.asp"-->

<%

times=nian&"-"&yue&"-"&ri&" "&shi&":"&fen&":00"
NowTime=nian&"-"&yue&"-"&ri
if not isdate(NowTime) then
response.Write(NowTIME&"����һ���Ϸ�������,������ѡ������") 
RESPONSE.END
END IF
call sizhu(nian,yue,ri,shi,fen,ygz,mgz,dgz,tgz)
call xunkong(dgz,rxunk,rxunshou)
call xunkong(tgz,txunk,txunshou)
call xunkong(ygz,yxunk,yxunshou)
call xunkong(mgz,mxunk,mxunshou)
'response.Write(ygz)
%>
<%set fo=server.CreateObject("scripting.filesystemobject")
path=server.MapPath("temp\cal.txt")
set cal=fo.opentextfile(path)
   tag=true 
   i=0
while (not cal.atendofstream) and tag
str=cal.readline
strarr=split(str,",")
    
	 'response.Write(strarr(1))
  
	'response.Write(time1&"<br>")
	'response.Write(time2&"<br>")
	
	  if trim(strarr(1))=trim(nian) then
	    time1=strarr(1)&"-"&strarr(2)&"-"&strarr(3)&" "&strarr(6)&":"&strarr(7)&":00"
	time2=strarr(1)&"-"&strarr(2)&"-"&strarr(8)&" "&strarr(10)&":"&strarr(9)&":00"
	
	 if datediff("s",time1,times)>=0 then
	    i=i+1
		'response.Write("ddddd")
		jiaoj=time1
	 else
	   
	    tag=false
	 end if
	 if datediff("s",time2,times)>=0 then
	   i=i+1
	  ' response.Write("aaaaa")
	  jiaoj=time2
	' response.Write(times&time2&"<br>")
	   end if
	   end if
wend

i=(i+21)mod 24
 jieqq=nian&"��"&yue&"��"&ri&"��"&jq(i)
 NjieQi=jq(i)
 jieqq1=jiaoj&jq(i)
select case njieqi
case "����","��ˮ","����" tqindex=1
case "����","����","����" tqindex=2
case "����","С��","â��" tqindex=3
case "����","С��","����"  tqindex=4
case "����","����","��¶" tqindex=5
case  "���","��¶","˪��" tqindex=6
case "����","Сѩ","��ѩ" tqindex=7
case "����","С��","��" tqindex=0
end select

%>
<%
tiangan1=left(dgz,1)
dizhi1=right(dgz,1)
for i=0 to 9 
if tg(i)=tiangan1 then
tgi=i
exit for
end if
next  '���������

for i=0 to 11 
if dz(i)=dizhi1 then
dzi=i
exit for
end if
next  '��õ�֧���
%>

<% J=0
for i=0 to 59 
TgIndex=i mod 10
DzIndex=i mod 12
if tg(TgIndex)&dz(DzIndex)=dgz then
exit for
end if
j=j+1
next
j=j \ 5
select case j
case 0,3,6,9  yuan="��Ԫ"
case 1,4,7,10 yuan="��Ԫ"
case 2,5,8,11 yuan="��Ԫ"
end select
%>

<%
select case NjieQi
  case "����","����"  YyJu="һ����"
  case "С��"         YyJu="������"
  case "��","����"  YyJu="������"
  case "��ˮ"         YyJu="������"
  case "����","����"  YyJu="��һ��"
  case "����"         YyJu="�����"
  case "����","С��"  YyJu="�����"
  case "â��"         YyJu="������"
  case "����","��¶"  YinJu="������"
  case "С��"         YinJu="�˶���" 
                     
  case "����","���"  YinJu="��һ��"
  case "����"          YinJu="�����"
  case "��¶","����"  YinJu="������"
  case "����"         YinJu="һ����"
  case "˪��","Сѩ"  YinJu="��˶�"
  case "��ѩ"         YinJu="����һ"
end select
if YyJu<>"" then
select case yuan
case "��Ԫ" JuXu=mid(YyJu,2,1)
case "��Ԫ" JuXu=left(YyJu,1)
case "��Ԫ" JuXu=RIGHT(YyJu,1)
end select 
DunJu="����"&JuXu&"��"
yinyang=true   '����
else
yinyang=false '����
select case yuan
case "��Ԫ" JuXu=mid(YinJu,2,1)
case "��Ԫ" JuXu=left(YinJu,1)
case "��Ԫ" JuXu=RIGHT(YinJu,1)
end select 
DunJu="����"&JuXu&"��"
end if'��������ݾ�

if trim(request("jutag"))=1 then
ju=request("ju")
if ju>0 then
dunju="����"&ju&"��"
else
dunju="����"&abs(ju)&"��"
end if

end if
%>
<%dim sqly(8)
  DIM lIUyIA(8)
  dim bamens(7)
  dim bashens(7)
  dim jiuxings(7)
  dim tp(7)
  dim tpj(7)
  dim tianqin(7)
  'dim dpjs(8)
select case JuXu
case "һ" JuX=1
case "��" JuX=2
case "��" JuX=3
case "��" JuX=4
case "��" JuX=5
case "��" JuX=6
case "��" JuX=7
case "��" JuX=8
case "��" JuX=9
end select

if trim(request("jutag"))=1 then
jux=abs(ju)
end if

%>

<%
if yinyang then
ijk=0
for i=jux-1 to jux+7
sqindex=i mod 9
sqly(sqindex)=left(liuyi(ijk),1)
LiuYiA(sqindex)=liuyi(ijk)
ijk=ijk+1
'dpjs(sqindex)
next
else
ijk=10

for i=jux-1 to jux+7
sqindex=i mod 9
ijk=(ijk+8) mod 9
sqly(sqindex)=left(liuyi(ijk),1)
LiuYiA(sqindex)=liuyi(ijk)

next
end if  '��������
%>
<%zHuFu=0
FOR I=0 TO 8
IF INSTR(LiuYiA(I),tXunShou)>0 then
ZhuFu=i+1
exit for
end if
NEXT
select case zhufu
case 1 zfindex=1
case 8 zfindex=2
case 3 zfindex=3
case 4 zfindex=4
case 9 zfindex=5
case 2 zfindex=6
case 7 zfindex=7
case 6 zfindex=8
case 5 zfindex=6
end select 'ת���ŷ�
zhifu=jiuxing(zfindex-1)  'ֵ��
if zfindex=9 then
zfindex1=tqindex+1
else
zfindex1=zfindex  'ֵʹ
end if'ֱ����ֱʹ  ����5��ô��
'response.write zfindex&zfindex1&zhufu
zhishi=bamen(zfindex1-1)

if zhuanf="fg" then  '�ɹ��ŷ�
zhifu=Fjiuxing(zhufu-1)
zhishi=Fjiumen(zhufu-1)

end if
sg=left(tgz,1) 'ʱ��
if sg="��" then
select case tgz
case "����" sg="��"
case "����" sg="��"
case "����" sg="��"
case "����" sg="��"
case "�׳�" sg="��"
case "����" sg="��"
end select
end if
'response.write txunshou
 for ia=0 to 8
if sqly(ia)=sg then
sgIndex=ia+1
exit for
end if  '���ʱ�����ڵĹ�sgindex
next
'response.write sg
'response.write sgindex&sg
select case sgindex
case 1 zfindexa=0
case 8 zfindexa=1
case 3 zfindexa=2
case 4 zfindexa=3
case 9 zfindexa=4
case 2 zfindexa=5
case 7 zfindexa=6
case 6 zfindexa=7
case 5 zfindexa=5
end select
'response.write zfindex
if sgindex=5 then
   trindex=6
   else
   trindex=zfindex
   end if
   
  ' response.Write zfindexa&trindex
  ' response.write jiuxing(trindex-1)
for ib=0 to 7
zf=(zfindexa+ib)mod 8
zfindexb=(zfindex-1+ib+8)mod 8
if zfindexb=5 then
   tianqindex=zf
   end if
jiuxings(zf)=left(jiuxing(zfindexb),2)'����

next
'response.Write(jiuxings(0))
'response.write zfindexa&"<Br>"
'response.write zhufu&"<Br>"
for i=0 to 7
tianqin(i)="&nbsp;&nbsp;"
next
tianqingindex=(zfindexb+1) mod 9
'response.Write(zhufu)
tianqin(tianqindex)="<font color=red>��</font>"
'if zhufu=5 then  '�湬������
' for i=0 to 7 
' if jiuxings(i)="����" then
' itag=i
' exit for
' end if
' next
' for j=0 to 7
' jiuxings((i+j)mod 8)=left(jiuxing((tqindex+j)mod 8),2)
' next
'tianqin(itag)=mid(jiuxings(itag),2,1) 
'jiuxings(itag)="����"
'
'else
'tianqin(tqindex)="��"
'end if                  '������
%>
<%for i=0 to 9
if tg(i)=left(tgz,1) then
Iindex=i
exit for
end if
next

'response.write left(tgz,1)&Iindex
select case Txunshou
case "����" sg1="��"
case "����" sg1="��"
case "����" sg1="��"
case "����" sg1="��"
case "�׳�" sg1="��"
case "����" sg1="��"
end select
for i=0 to 7
if sqly(i)=sg1 then
xsindext=i+1
exit for
end if
next
'response.Write(sg1)
'response.write Txunshou
'response.write Txunshou&xindex&zfindex1
select case zhishi
case "����" xsindex=1
case "����" xsindex=2
case "����" xsindex=3
case "����" xsindex=4
case "����" xsindex=6
case "����" xsindex=7
case "����" xsindex=8
case "����" xsindex=9
end select 
'response.Write(yinyang&xsindex&iindex)
'response.Write(xsindext&"dd"&iindex)
if yinyang then
bmindex=(xsindext+iindex) mod 9
'response.write iindex
'response.write zhufu
else
bmindex=(xsindext-iindex+9)mod 9
end if

'response.write "b="&Iindex&"<br>a="&xsindex&"<br>bm="&bmindex
if bmindex=0 then
bmindex=9
end if
'response.write bmindex
'response.write Txunshou&iindex&xsindex

select case bmindex
case 1 bmindexa=0
case 8 bmindexa=1
case 3 bmindexa=2
case 4 bmindexa=3
case 9 bmindexa=4
case 2 bmindexa=5
case 7 bmindexa=6
case 6 bmindexa=7
case 5 bmindexa=5
end select
'if yinyang then
'response.write bmindex
'response.write bmindexa&zfindex
'response.write BmIndex
for i=0 to 7
bamenindex=(bmindexa+i)mod 8
zfindexb=(zfindex1-1+i)mod 8
'response.Write(zfindexb)
bamens(bamenindex)=bamen(zfindexb)

select case bamens(bamenindex)
case "����", "����", "����" bamens(bamenindex)="<font color=red>"&bamens(bamenindex)&"</font>"
end select 
next     
'response.write zfindex1'�����㷨
%>
<%' �������
dim sqtag(8)
for i=0 to 7
select case jiuxings(i) 
case "����"  tpi=0 
case "����"  tpi=7 
case "���"  tpi=2
case "�츨"  tpi=3
case "��Ӣ"  tpi=8
case "����"  tpi=1
case "����"  tpi=6
case "����"  tpi=5
case "����"  tpi=4
end select
tp(i)=sqly(tpi)

'response.write tpi&jiuxings(i) 
sqtag(tpi)=true
next

for i=0 to 8
if not sqtag(i) and zhufu<>5 then
tpj(tianqindex)=sqly(i) 
exit for
else if not sqtag(i) and zhufu=5 then
    
	tpj(tianqindex)=sqly(i)
	
     exit for
     end if
end if
next'�������
for i=0 to 7 
if trim(tpj(i))="" then
tpj(i)="&nbsp;&nbsp;"

end if
next
%>
<%'����
if yinyang then

for i=0 to 7
ij=(zfindexa+i)mod 8
bashens(ij)=bashen(i)
select case bashens(i)
case "ֱ��","����", "�ŵ�" ,"����" bashens(i)="<font color=red>"&bashens(i)&"</font>"
end select
next
else

for i=0 to 7
ij=(zfindexa+i)mod 8
ik=(8-i)mod 8
bashens(ij)=bashen(ik)
select case bashens(i)
case "ֱ��","����", "�ŵ�" ,"����" bashens(i)="<font color=red>"&bashens(i)&"</font>"
end select
next
end if
'response.write "zhufu"&zhufu
%>



<% '�ɹ��ŷ�

DIM fgJx(8)
Dim FgBm(8)
dim fGtp(8)
dim fgtpJS(8)
dim FgDpJs(8)
if zhuanf="fg" then  '�ɹ��ŷ�
for ia=0 to 8
if sqly(ia)=sg then
Fgsg=ia
exit for
end if
next
'response.write fgsg&"<br>"&zhufu&"<br>"
if bmindex=0 then
bmindex=9
end if
if yinyang then  '���ž���˳��
  for i=0 TO 8
  FgJx((i+FgSg)mod 9)=FJIUXing((i+zhufu-1)mod 9)
  NEXT
  
  for i=0 to 8
  FgBm((I+bmIndex-1)mod 9)=FjiuMen((zhufu+i-1)mod 9)
  next
  
    for i=0 to 8 '���̾���
  FgtpjS((i+FgSg)mod 9)=Fjiushen(i)
  next
   for i=0 to 8 '���̾���
  FgdpjS((i+zhufu-1)mod 9)=Fjiushen(i)
  next
else  '���ž�������
for i=0 TO 8
  FgJx((i+FgSg)mod 9)=FJIUXing((zhufu-i+8)mod 9)
  'response.Write((zhufu-i+8)mod 9)
  NEXT
  
   for i=0 to 8'����
  FgBm((I+bmIndex-1)mod 9)=FjiuMen((zhufu-i+8)mod 9)
  
  next

  for i=0 to 8 '����
  FgtpjS((i+FgSg)mod 9)=Fyjiushen((9-i)mod 9)
  next
   for i=0 to 8 '���̾���
  FgdpjS((i+zhufu-1)mod 9)=Fyjiushen((9-i)mod 9)
  next
end if '���ž��ǽ�β
'if yinyang then 
'response.write Fjiumen(zhufu-1)
'������ɵ�
 for i=0 to 8
select case FgJx(i)
case "��" FgTpIndex=0
case "��" FgTpIndex=1
case "��" FgTpIndex=2
case "��" FgTpIndex=3
case "��" FgTpIndex=4
case "��" FgTpIndex=5
case "��" FgTpIndex=6
case "��" FgTpIndex=7
case "Ӣ" FgTpIndex=8
end select
FgTp(i)=sqly(FgTpIndex)
next '�������

end if '�ɹ���β
'response.Write(txunshou&)

for i= 0 to 8
select case sqly(i)
case "��","��","��"  sqly(i)="<font color=red>"&sqly(i)&"</font>"
end select
next 

for i= 0 to 7
select case tpj(i)
case "��","��","��" tpj(i)="<font color=red>"&tpj(i)&"</font>"
end select
select case tp(i)
case "��","��","��" tp(i)="<font color=red>"&tp(i)&"</font>"
end select


select case jiuxings(i)
case "�츨", "����", "����", "����" jiuxings(i)="<font color=red>"&jiuxings(i)&"</font>"
                                     
end select 
next
%>
 



<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" id="paipanTable">
    <tbody>
      <tr>
        <td class="ttop"><strong>���Ŷݼ���������ϵͳ</strong></td>
      </tr>
      <tr>
        <td class="new"><strong>������</strong><%=request("name")%> <strong>������:</strong><%=request("birthyear")%><strong> �Ա�</strong>
          <% if sex=1 then
	response.Write("��")
	else
	response.Write("Ů")
	end if
	%>          <strong>&nbsp;ռ�£�</strong><%=zhanshi%></td>
        </tr>
      <tr>
        <td class="new"><strong>����ʱ��</strong>��<%=times%>����<strong>ũ��ʱ�䣺</strong><% call form_load(times,ntime,cyue,cri,cnian)
	response.Write(ntime)
	%>
<br><strong>����</strong>��<%=jieqq1&yuan%>&</a>
<br><strong>��֧��</strong><%=ygz&"  "&mgz&"  "&dgz&"  "&tgz%>
<br><strong>����Ѯ��</strong>��<strong><%=yxunk%></strong>(��)&nbsp;<strong><%=mxunk%></strong>(��)&nbsp;<strong><%=rxunk%></strong>(��)&nbsp;<strong><%=txunk%></strong>(ʱ)
<br>&nbsp;
<br>�˾�Ϊ<strong><%=DunJu%></strong>&nbsp;&nbsp;ֱ��<strong>:<%=zhifu%></strong>&nbsp;&nbsp;ֱʹ<strong>:<%=zhishi%></strong>
</td>      </tr>
      <tr>
        <td align="center" class="new"><br>
  <%
  if zhuanf="zp" then%>
<br>�������������������������Щ������������Щ�������������
<br>����������������<%=bashens(3)%>����������<%=bashens(4)%>����������<%=bashens(5)%>������
<br>������������<%=tianqin(3)%>��<%=jiuxings(3)%>��<%=tp(3)%>��<%=tianqin(4)%>��<%=jiuxings(4)%>��<%=tp(4)%>��<%=tianqin(5)%>��<%=jiuxings(5)%>��<%=tp(5)%>��
<br>������������<%=tpj(3)%>��<%=bamens(3)%>��<%=sqly(3)%>��<%=tpj(4)%>��<%=bamens(4)%>��<%=sqly(8)%>��<%=tpj(5)%>��<%=bamens(5)%>��<%=sqly(1)%>��
<br>�������������������������੤�����������੤������������
<br>����������������<%=bashens(2)%>������������������������<%=bashens(6)%>������
<br>������������<%=tianqin(2)%>��<%=jiuxings(2)%>��<%=tp(2)%>����������������<%=tianqin(6)%>��<%=jiuxings(6)%>��<%=tp(6)%>��
<br>������������<%=tpj(2)%>��<%=bamens(2)%>��<%=sqly(2)%>������������<%=sqly(4)%>��<%=tpj(6)%>��<%=bamens(6)%>��<%=sqly(6)%>��
<br>�������������������������੤�����������੤������������
<br>����������������<%=bashens(1)%>����������<%=bashens(0)%>����������<%=bashens(7)%>������
<br>������������<%=tianqin(1)%>��<%=jiuxings(1)%>��<%=tp(1)%>��<%=tianqin(0)%>&nbsp;&nbsp;<%=jiuxings(0)%>��<%=tp(0)%>��<%=tianqin(7)%>��<%=jiuxings(7)%>��<%=tp(7)%>��
<br>������������<%=tpj(1)%>��<%=bamens(1)%>��<%=sqly(7)%>��<%=tpj(0)%>��<%=bamens(0)%>��<%=sqly(0)%>��<%=tpj(7)%>��<%=bamens(7)%>��<%=sqly(5)%>��
<br>�������������������������ة������������ة�������������<br>
<br>
  
  <%else%>
<br>�����������������������Щ����������Щ�����������
<br>������������<%=fgtpjs(3)%><%=fgjX(3)%> &nbsp;<%=fgtp(3)%>��<%=fgtpjs(8)%><%=fgjX(8)%> &nbsp;<%=fgtp(8)%>��<%=fgtpjs(1)%> <%=fgjX(1)%>&nbsp; <%=fgtp(1)%>��
<br>������������ &nbsp;&nbsp;&nbsp;<%=fgBm(3)%> &nbsp;&nbsp;&nbsp;�� &nbsp;&nbsp;&nbsp;<%=fgBm(8)%> &nbsp;&nbsp;&nbsp;�� &nbsp;&nbsp;&nbsp;<%=fgBm(1)%> &nbsp;&nbsp;&nbsp;��
<br>������������<%=fgdpjs(3)%>�� &nbsp;<%=sqly(3)%>��<%=fgdpjs(8)%>��&nbsp; <%=sqly(8)%>��<%=fgdpjs(1)%>�� 
&nbsp;<%=sqly(1)%>��
<br>�����������������������੤���������੤����������
<br>����������
��<%=fgtpjs(2)%><%=fgjX(2)%> &nbsp;<%=fgtp(2)%>��<%=fgtpjs(4)%><%=fgjX(4)%> &nbsp;<%=fgtp(4)%>��<%=fgtpjs(6)%><%=fgjX(6)%> &nbsp;<%=fgtp(6)%>��
<br>������������ &nbsp;&nbsp;&nbsp;<%=fgBm(2)%> &nbsp;&nbsp;&nbsp;��&nbsp;&nbsp;&nbsp; <%=fgBm(4)%> &nbsp;&nbsp;&nbsp;�� &nbsp;&nbsp;&nbsp;<%=fgBm(6)%> &nbsp;&nbsp; ��
<br>������������<%=fgdpjs(2)%>�� &nbsp;<%=sqly(2)%>��<%=fgdpjs(4)%>�� &nbsp;<%=sqly(4)%>��<%=fgdpjs(6)%>�� &nbsp;<%=sqly(6)%>��
<br>�����������������������੤���������੤����������
<br>������������<%=fgtpjs(7)%><%=fgjX(7)%> &nbsp;<%=fgtp(7)%>��<%=fgtpjs(0)%><%=fgjX(0)%>&nbsp; <%=fgtp(0)%>��<%=fgtpjs(5)%><%=fgjX(5)%>&nbsp;&nbsp;<%=fgtp(5)%>��
<br>������������ &nbsp;&nbsp;&nbsp;<%=fgBm(7)%> &nbsp;&nbsp;&nbsp;��&nbsp;&nbsp;&nbsp; <%=fgBm(0)%> &nbsp;&nbsp;&nbsp;�� &nbsp;&nbsp;&nbsp;<%=fgBm(5)%> &nbsp;&nbsp; ��
<br>������������<%=fgdpjs(7)%>��&nbsp; <%=sqly(7)%>��<%=fgdpjs(0)%>�� &nbsp;<%=sqly(0)%>��<%=fgdpjs(5)%>Ǭ&nbsp; <%=sqly(5)%>��
<br>�����������������������ة����������ة�����������<br> <br>
    
  <%end if%></td>

      </tr>
      
      
       <%if phn=1 then%>
  
  <%end if%>
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
<tbody><form name="form1"   onsubmit="return submitchecken();" method="post" action="">
<input type="hidden" name="act" value="ok" /><tr>
  <td width="100%" class="ttop"><strong>���Ŷݼ���������ϵͳ</strong></td>
    </tr>
  <tr>
    <td class="new">������
      <input name="name" type="text" id="name" value="<%=xing&ming%>" size="12"> 
      ����ʱ�䣺 
      <select name=birthyear>
              <%for i=1922 to year(date())%>
              <option value="<%=i%>"<%if i=1981 then%> selected<%end if%>><%=i%></option>
              <%next%>
            </select> 
      �Ա�: 
      <input name="sex" type="radio" value="1" checked>
      ��
      <input type="radio" name="sex" value="0">
      Ů <input type=hidden name=cm value=8> 
      ռ�£� <input name="zhanshi" type="text" id="zhanshi" value="<%=zhanshi%>" size="12" maxlength="12"></td>
  </tr>
<tr id="fs1" style="display:block"> 

    <td class="new">����ʱ�䣺 
      
      <select name="year" size="1" id="year" style="font-size: 9pt">
        >
        <%for i=1950 to year(date())%>
        <option value="<%=i%>" <%if i=year(date()) then%> selected<%end if%>><%=i%></option>
        <%next%>
      </select>
��
<select name="month" size="1" id="month" style="font-size: 9pt">
  <%for i=1 to 12%>
  <option value="<%=i%>"<%if i=month(date()) then%> selected<%end if%>><%=i%></option>
  <%next%>
</select>
��
<select name="date" size="1" id="date" style="font-size: 9pt">
  <%for i=1 to 31%>
  <option value="<%=i%>" <%if i=day(date()) then%> selected<%end if%>><%=i%></option>
  <%next%>
</select>
��
<select name="hour" size="1" id="hour" style="font-size: 9pt">
  <%for i=0 to 23%>
  <option value="<%=i%>" <%if i=hour(now()) then%> selected<%end if%>><%=i%></option>
  <%next%>
</select>
��
<select name="minute" size="1" id="minute" style="font-size: 9pt">
  <option value="0">δ֪</option>
  <%for i=0 to 59%>
  <option value="<%=i%>"<%if i=minute(now()) then%> selected<%end if%>><%=i%></option>
  <%next%>
</select>
��&nbsp;&nbsp;</td>
  </tr>
<tr id="fs2" style="display:none"> 
<td class="new"><span class="style4">������</span> <span class="style4">&nbsp;&nbsp;
<select name="Nian" size="1">
<Option value=0>����</option><Option value=1>�ҳ�</option><Option value=2>����</option><Option value=3>��î</option><Option value=4>�쳽</option><Option value=5>����</option><Option value=6>����</option><Option value=7>��δ</option><Option value=8>����</option><Option value=9>����</option><Option value=10>����</option><Option value=11>�Һ�</option><Option value=12>����</option><Option value=13>����</option><Option value=14>����</option><Option value=15>��î</option><Option value=16>����</option><Option value=17>����</option><Option value=18>����</option><Option value=19>��δ</option><Option value=20>����</option><Option value=21>����</option><Option value=22>����</option><Option value=23>����</option><Option value=24>����</option><Option value=25>����</option><Option value=26>����</option><Option value=27>��î</option><Option value=28>�ɳ�</option><Option value=29>����</option><Option value=30>����</option><Option value=31>��δ</option><Option value=32>����</option><Option value=33>����</option><Option value=34>����</option><Option value=35>����</option><Option value=36>����</option><Option value=37>����</option><Option value=38>����</option><Option value=39>��î</option><Option value=40>�׳�</option><Option value=41>����</option><Option value=42>����</option><Option value=43>��δ</option><Option value=44>����</option><Option value=45>����</option><Option value=46>����</option><Option value=47>����</option><Option value=48>����</option><Option value=49>���</option><Option value=50>����</option><Option value=51>��î</option><Option value=52>����</option><Option value=53>����</option><Option value=54>����</option><Option value=55>��δ</option><Option value=56>����</option><Option value=57>����</option><Option value=58>����</option><Option value=59>�ﺥ</option> 
</select>
�� 
<select name="Yue" size="1">
<Option value=1>����</option><Option value=2>î��</option><Option value=3>����</option><Option value=4>����</option><Option value=5>����</option><Option value=6>δ��</option><Option value=7>����</option><Option value=8>����</option><Option value=9>����</option><Option value=10>����</option> 
<Option value="11">����</Option>
<Option value="12">����</Option>
</select>
�� 
<select name="Ri" size="1">
<Option value=0>����</option><Option value=1>�ҳ�</option><Option value=2>����</option><Option value=3>��î</option><Option value=4>�쳽</option><Option value=5>����</option><Option value=6>����</option><Option value=7>��δ</option><Option value=8>����</option><Option value=9>����</option><Option value=10>����</option><Option value=11>�Һ�</option><Option value=12>����</option><Option value=13>����</option><Option value=14>����</option><Option value=15>��î</option><Option value=16>����</option><Option value=17>����</option><Option value=18>����</option><Option value=19>��δ</option><Option value=20>����</option><Option value=21>����</option><Option value=22>����</option><Option value=23>����</option><Option value=24>����</option><Option value=25>����</option><Option value=26>����</option><Option value=27>��î</option><Option value=28>�ɳ�</option><Option value=29>����</option><Option value=30>����</option><Option value=31>��δ</option><Option value=32>����</option><Option value=33>����</option><Option value=34>����</option><Option value=35>����</option><Option value=36>����</option><Option value=37>����</option><Option value=38>����</option><Option value=39>��î</option><Option value=40>�׳�</option><Option value=41>����</option><Option value=42>����</option><Option value=43>��δ</option><Option value=44>����</option><Option value=45>����</option><Option value=46>����</option><Option value=47>����</option><Option value=48>����</option><Option value=49>���</option><Option value=50>����</option><Option value=51>��î</option><Option value=52>����</option><Option value=53>����</option><Option value=54>����</option><Option value=55>��δ</option><Option value=56>����</option><Option value=57>����</option><Option value=58>����</option><Option value=59>�ﺥ</option> 
</select>
�� 
<select name="Shi" size="1">
<Option value=0>��ʱ</option><Option value=1>��ʱ</option><Option value=2>��ʱ</option><Option value=3>îʱ</option><Option value=4>��ʱ</option><Option value=5>��ʱ</option><Option value=6>��ʱ</option><Option value=7>δʱ</option><Option value=8>��ʱ</option><Option value=9>��ʱ</option><Option value=10>��ʱ</option><Option value=11>��ʱ</option> 
</select>
ʱ 
<select name="ju" id="ju">
<option value="1" selected="">��һ��</option>
<option value="2">������</option>
<option value="3">������</option>
<option value="4">���ľ�</option>
<option value="5">�����</option>
<option value="6">������</option>
<option value="7">���߾�</option>
<option value="8">���˾�</option>
<option value="9">���ž�</option>
<option value="-1">��һ��</option>
<option value="-2">������</option>
<option value="-3">������</option>
<option value="-4">���ľ�</option>
<option value="-5">�����</option>
<option value="-6">������</option>
<option value="-7">���߾�</option>
<option value="-8">���˾�</option>
<option value="-9">���ž�</option>
</select>
��</span></td>
</tr>
<tr> 
<td class="new"> <input id=gl type="radio" name="jutag" value="0" checked="" onClick="javacript:fs1.style.display='block';fs2.style.display='none';fs3.style.display='block';" />
<label for="gl"style="cursor:hand;" >���������</label>������
  <input id=sz type="radio" name="jutag" value="1" onClick="javacript:fs1.style.display='none';fs2.style.display='block';fs3.style.display='none';" />
  <label for="sz"style="cursor:hand;" >���������</label></td>
</tr>
<tr> 
<td class="new"><input id=zp type="radio" name="R1" value="zp" checked="" onClick="javacript:fs4.style.display='none';" //>
<label for="zp"style="cursor:hand;" >ת������</label>��������
  <input id=fg type="radio" name="R1" value="fg" onClick="javacript:fs4.style.display='block';" />
  <label for="fg"style="cursor:hand;" >��������</label></td>
</tr>
<tr id="fs4" style="display:none"> 
<td class="new"><input name="order" id=yx type="radio" value="1" checked="" />
 <label for="yx"style="cursor:hand;" > ��˳����</label>��������
    <input type="radio" id=qbx name="order" value="0" />
<label for="qbx"style="cursor:hand;" >ȫ��˳��</label></td>
</tr>
<tr align="center"> 
<td class="new"> 
<input name="Submit" type="submit" value="���Ŷݼ����" style="cursor:hand;" /></td>
</tr>
</tbody>
</form>
</table>
  <%end if%>
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" >
    <tbody>
   
      <tr>
        <td width="100%" class="ttop"><strong>���Ŷݼ�</strong>����˵��</td>
      </tr>
      <tr>
        <td class="new"><p>���Ŷݼף�ԭ�����й����ϵ�һ���飬������������Ϊ��һ��ռ���õ��飬���е�˵����˵�����Ŷݼס����ҹ��Ŵ�������ͬ����Ȼ�������У��������ڹ۲졢������֤���ܽ������һ�Ŵ�ͳ����Ļ��Ų������е�˵�����Ŷݼס�������Ĺ�����
          
          </p>
          <p>�����Ŷݼס��ĺ�����ʲô�أ������ɡ��桱�����š������ݼס���������ɡ����桱�����ң����������棻���š������ݣ������ˣ��ţ������������������ţ����ݡ������ص���˼�����ס�ָ���ף������ӣ����磬���꣬���磬�׳������������ݼס�����ʮ������Ϊ������ض����֣�����������֮�¡������ǡ������죬�������������ɣ������ԭ���Ǽ���ͬ���죬����ͬ����������ͬ����������ͬ�������׳�ͬ���ɣ�����ͬ������⻹�����Σ��壬����Ӣ���ǣ������ģ��ݾ��ǡ����Ŷݵ�ռ����Ҫ��Ϊ�죬�ţ������̣��������š����̵ľŹ��о��ǣ����̵İ˹����й��Ķ����������ţ����̵İ˹�����˸���λ����ֹ������ͬʱ���̵����ϣ�ÿ�����������ض����棨�ң����������ǣ��죬�������������ɣ������ǣ������������ݾ���ʱ�գ������ǣ����棬���ţ������ž֣���ռ�������ϵ����״������ѡ��ʱ�������͹������й������Ļ���һ�����е�����----���Ŷݼס� </p></td>
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