<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<TITLE>��ھ���������ϵͳ-��������
</TITLE>
<!--#include file="top.asp"--><!--#include file="../inc/conn.asp"--><!--#include file="../inc/getuc.asp"-->
<div id="right">
<!--#include file="right.asp"-->
</div>
<div id="left">
<div style="width:100%">
<%if request("act")="ok" then%><!--#include file="inc/sizhu.asp"-->
<!--#include file="inc/jieqi.asp"-->
<%
function wuxing(x)
   select case x
          case "��","��","��","î"  wuxing="ľ���"
          case "��","��","��","��" wuxing="��ˮ��"
		  case "��","��","��","��","��","δ" wuxing="��ľ��"
		  case "��","��","��","��" wuxing="���ˮ"
		  case "��","��","��","��" wuxing="ˮ��ľ"
   end select
end function
name=request("name")
jg=request("jg")
Response.Cookies("ciduppname")=name
zhanshi=request("zhanshi")
Response.Cookies("ciduppzhanshi")=zhanshi
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
df=request("df")
zhouye=trim(request("zhouye"))
Pf=request("pf")
Nyangli=y&"��"&m&"��"&d&"��"&h&"ʱ"&mins&"��"
zhouye=request.Form("zhouye")
sex=request("sex")
Gsarrage=request("guishen")
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
if phn=1 then
if suishu<=0 then
response.write "�����������"
response.end
end if
hangn=tg(hntg)&dz(hndz)
end if
'response.write hangn&suishu
%>

<%dates=y&"-"&m&"-"&d
Ytime=dates&" "&h&":"&m&":00"
if not isdate(dates) then
response.write dates&"����һ���Ϸ�������"
response.end
end if
'response.write ytime
call sizhu(y,m,d,h,mins,ygz,mgz,dgz,tgz)
call form_load(ytime,ntime,cyue,cri,cnian)
call makejq(ytime,prejq,nextjq)
nJQ=RIGHT(NEXTjQ,2)
%>
 <%call xunkong(ygz,yxk,yxs)
	call xunkong(mgz,mxk,mxs)
	call xunkong(dgz,dxk,dxs)
	call xunkong(tgz,hxk,hxs)
	'response.write yxk
	%>

<%'�ط�
select case request("dftag")
case 2 dzindex=request("nums")
       Df=dz((dzindex+11)mod 12)
case 1 df=dz(request("df"))
case 3 randomize
       df=dz(round(rnd*11) mod 12)
end select 
%>

<% '�½�
select case pf
case 1 select case  nJQ
       case "����","��ˮ" yuej="��"
       case "����","����" yuej="��"
       case "����","����" yuej="��"
        case "����","С��" yuej="��"
         case "â��","����" yuej="δ"
       case "С��","����" yuej="��"
        case "����","����" yuej="��"
         case "��¶","���" yuej="��"
      case "��¶","˪��" yuej="î"
       case "����","Сѩ" yuej="��"
        case "��ѩ","����" yuej="��"
       case "С��","��" yuej="��"

		END SELECT
case 2 select case njq
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
end select  '�½�
%>


<%'����
shizhi=right(tgz,1)
riganorder=Tgorder(dgz)-1
szorder=DzOrder(shizhi)
yjorder=dzorder(yuej)
dforder=dzorder(df)
jsorder=(yjorder+(dforder-szorder)+12) mod 12
if jsorder=0 then
jsorder=12
end if
jiangs=dz(jsorder-1)
js=jsname(jsorder-1)
%>

<% '����
if zhouye=2 then 
if szorder>=4 and  szorder<10 then
 zhouye=1
 else
 zhouye=0
end if 
end if  'Ĭ�ϵ���ҹѡ��
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
							 startGs="î"
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
StartGsOrder=DzOrder(startgs)
if StartGsOrder>=6 and StartGsOrder<=11 then
dir=0
else
dir=1
end if 'ȷ������˳��
'response.Write(zhouye)
if dir then
gsorder=(12+dforder-startgsorder) mod 12
else
gsorder=(12+startgsorder-dforder) mod 12
end if
gsdz=uisdz(gsorder)
guiren=guishen(gsorder)
%>

<%'��Ԫ ���񣬹������
if riganorder>4 then
ryindex=(riganorder-4)*2-2
else
ryindex=(riganorder+1)*2-2
end if
jstgindex=(ryindex+jsorder-1)mod 10
'response.write riganorder&ryindex&gsorder
gstgindex=(ryindex+dzorder(gsdz)-1)mod 10
ryindex=(ryindex+dforder-1)mod 10

'response.write jsorder
gstg=tg(gstgindex)
jstg=tg(jstgindex)
renyuan=tg(ryindex)
%>

<%'����س
yyy=tgorder(renyuan)
myy=dzorder(gsdz)
dyy=dzorder(jiangs)
hyy=dzorder(df)
if (yyy mod 2)=1 then
yyy=1
else
yyy=-1
end if

if (myy mod 2)=1 then
myy=1
else
myy=-1
end if

if (dyy mod 2)=1 then
dyy=1
else
dyy=-1
end if

if (hyy mod 2)=1 then
hyy=1
else
hyy=-1
end if
yytag=yyy+myy+dyy+hyy
'response.write yytag
if yytag=2 then
 if myy=-1 then
   gsyy="����س��"
   end if
    if dyy=-1 then
   jsyy="����س��"
   end if  
   
   end if
if yytag=-2 then
 if myy=1 then
  gsyy="����س��"
   end if
    if dyy=1 then
   jsyy="����س��"
   end if
end if

if yytag=0 or yytag=-4 then
jsyy="����س��"
end if

if  yytag=4 then
gsyy="����س��"
end if
%>
<%'�Ĵ����
if dxs="����" or  dxs="����" then
kongmang="ˮ"
end if

if dxs="����" or  dxs="����" then
kongmang="��"
end if
%>
<%'14��˥
dim ws(3)
tag=0
wxry=wuxing(renyuan)
wxgs=wuxing(gsdz)
wxjs=wuxing(jiangs)
wxdf=wuxing(df)
wxstr=left(wxry,1)&left(wxgs,1)&left(wxjs,1)&left(wxdf,1)
'response.write wxstr
if instr(wxstr,mid(wxry,2,1))=0 then
ws(0)="��"
tag=tag+1
else
ke=left(wxry,1)
end if
if instr(wxstr,mid(wxgs,2,1))=0 then
ws(1)="��"
tag=tag+1
else
ke=left(wxgs,1)
end if
if instr(wxstr,mid(wxjs,2,1))=0 then
ws(2)="��"
tag=tag+1
else
ke=left(wxjs,1)
end if
if instr(wxstr,mid(wxdf,2,1))=0 then
ws(3)="��"
tag=tag+1
else
ke=left(wxdf,1)
end if
if tag=2 then
    if right(wxry,1)=ke then
	ws(0)=""
	end if

     if right(wxgs,1)=ke then
	ws(1)=""
	end if

     if right(wxjs,1)=ke then
	ws(2)=""
	end if

     if right(wxdf,1)=ke then
	ws(3)=""
	end if
end if
%>






<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" id="paipanTable">
    <tbody>
      <tr>
        <td class="ttop">��ھ���������ϵͳ
</td>
      </tr>
      <tr>
        <td class="new">����
  <strong>����</strong>��<%=name%>����
  <strong>����</strong>��<%=birthyear%>����<strong>�Ա�</strong>��
  <%if sex=1 then
	response.Write("��")
	else
	response.Write("Ů")
end if%>����
  <strong>ռ��</strong>��<%=zhanshi%>
  <br>����
  <B>����</B>�� <%=NYANGLI%>����<B>ũ��</B>��<%=ntime%>
  <br>����
  <B>����</B>��<%=nextjq%> 
  <br>����
  <strong>��֧</strong>��<font color="#FF0000"> <%=ygz%>&nbsp;&nbsp;<%=mgz%>&nbsp;&nbsp;<%=dgz%>&nbsp;&nbsp;<%=tgz%></font>����<strong>�½�</strong>��<%=yuej%>��
  <br>����
  <strong>Ѯ�գ�</strong> <%=yxk%>&nbsp&nbsp<%=mxk%>&nbsp&nbsp<%=dxk%>&nbsp&nbsp<%=hxk%>����
  <%if kongmang<>"" then%>
  <B>�Ĵ������ <%=kongmang%>
  <%else%>
          www.114xk.cn
  <%end if%>
          
          <%if phn=1 then%>
    <br>����
          <B>����</B>�� <%=ygzs%>
          <%end if%>
          <%if phn=1 then%>
    <br>����
          <B>����</B>�� <%=hangn%>
          <%end if%>
    <br>
  &nbsp;
  <br>����
  <B>��Ԫ</B>�� <%=renyuan%>
  <%'=ws(0)%> 
  <br>����
  <B>����</B>�� <%=gstg%><%=gsdz%>(<%=guiren%>)
  <font color="#0000FF"><%=gsyy%><%'=ws(1)%></font>
 
  <br>����
  <B>����</B>�� <%=jstg%><%=jiangs%>(<%=js%>)<font color="#0000FF"><%=jsyy%> </font>
  <%'=ws(2)%>
  <br>����
  <B>�ط�</B>�� <%=df%>
  <%'=ws(3)%></td>

      </tr>

    </table>
<%else%><%
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
  <td width="100%" class="ttop">��ھ���������ϵͳ</td>
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
      ռ�£� <input type="text" name="zhanshi" maxlength="12" size="12" value="<%=zhanshi%>"></td>
  </tr>
  <tr>
    <td class="new">����ʱ�䣺 
      
      <select name="y" size="1" id="y" style="font-size: 9pt">
        >
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

<tr>
<td  class="new"><INPUT name=dftag type=radio value=1>
            �ط֡���
            <SELECT name=df>
            <OPTION selected value=0>��</OPTION>
            <OPTION value=1>��</OPTION>
            <OPTION value=2>��</OPTION>
            <OPTION value=3>î</OPTION>
            <OPTION value=4>��</OPTION>
            <OPTION value=5>��</OPTION>
            <OPTION value=6>��</OPTION>
            <OPTION value=7>δ</OPTION>
            <OPTION value=8>��</OPTION>
            <OPTION value=9>��</OPTION>
            <OPTION value=10>��</OPTION>
            <OPTION value=11>��</OPTION>
          </SELECT>
          <INPUT name=dftag type=radio value=2>
            ����
            <input name="nums" type="text" id="nums" size="6">
            
            <INPUT name=dftag type=radio value=3 checked>
            ����ط�</td>
</tr><tr>
<td  class="new">�������У�<input 
      checked name=ZhouYe type=radio value=2>
            �Զ�
            <input name=ZhouYe type=radio value=1>
            ��
            <input name=ZhouYe type=radio 
      value=0>
            ҹ</td>
</tr><tr>
<td  class="new"><input id=gs1 name="GuiShen" type="radio" value="1" checked="" />
<label for="gs1"style="cursor:hand;" >�����ţ��</label>��
<input id=gs2 type="radio" name="GuiShen" value="0" >
<label for="gs2"style="cursor:hand;" >�������ţ</label>
              <input type="radio" id=pf1 name="Pf" value="1" checked><label for="pf1"style="cursor:hand;" >���ڻ���</label>
       
            <input type="radio" id=pf2 name="Pf" value="0"><label for="pf2"style="cursor:hand;" >��������</label></td>
</tr>  <tr>
<td align="center" class="new"><input type="submit" value="���߰�������" name="submit" style="cursor:hand;" /> </td>
</tr>
</form>
</table>
  <%end if%>
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" >
    <tbody>
   
      <tr>
        <td width="100%" class="ttop">��ھ���Դ��</td>
      </tr>
      <tr>
        <td class="new"><br />
�� �ᵽ��ھ��Ͳ����Բ�˵�����ɣ���Ϊ��ھ���ȫ�ƾ���&quot;��������ν�ھ�&quot;����ˣ���֪��ھ���Դ�ڴ�������̥�γɵ��µ�һ��Ԥ���ѧ��<br />
&nbsp; &nbsp;�����ɾݴ�˵Դ���Ϲž�����Ů������Ͼ�ֻ�Ǵ�˵����ʷ�ϼ��صľ��Ƕ������ʡ���Խ�����Ԭ����Խ���顷�����д�����֮���֣����ɴ˿�֪������Ӧ���ڶ���ʱ�ڳ��֡�<br />
&nbsp; &nbsp;�����ɷ�չ��ս��ʱ�ڣ��ɰ�۲֮�������ΰ��ľ��¼ҡ���ѧ�������򻯶��γ�һ��ո�µ�Ԥ����ϵ--&quot;��������ν�ھ�&quot;������&quot;�������&quot;��&quot;С����&quot;��&quot;����ʱ��&quot;����������<br />
������ھ����������������䴫�˺���пڿ��ഫ���������֣�һֱ��Ϊ������֪���������ڿ��Կ������йؽ�ھ�����������ľ�������ʱ�ڵġ���������ν�ھ�������Ҳ�ǽ�ھ�Ψһ�ĹŰ�ר���������ݲβ�룬�����˼���ʱ���ĺۼ�������ƪ��֮��ľ���к�ǿ�������Ʋ�Ӧ�ò���һ��������������Ӧ���Ǽ��������Ľ�ھ���ʦ�ǻ۵Ľᾧ��<br />
������ھ�������֮��Ĵ�������Զ����������̨�����в�Ϊ��������ʱ���ľ�Զ���ڴ����ϳ�����һЩ��ͬ��С֧�ɣ��е��ؿھ���ɷ���е��������������е���������ʱ�Կ��ڵ�Ӱ��ȵȣ���һ��ͬ�������ھ��İ����ߴ����������鷳�£������ڵ�����Ϊֹ��ȫ���о���ھ�����ѧ�����������޼�����̸���Ͼ�ͨ�ˡ�<br />
��ھ��Ͽεļ��ֲ��<br />
����һ�������ĺû��ߵͣ��޷���׼ȷ�ʵ����⡣&quot;��ھ�&quot;��Ȼ������һ�����֣�Ҳ�϶���������Ȼ�ĵ���ǰ���ᵽ��ھ��Ĵ����г����˷ֻ���֧�����⣬������ÿ�������ڶϿ���ʹ�õķ�����ͬ���Ӷ�ʹ׼ȷ�ʳ�Ϊ����һ��������ѵĲ��С�<br />
������ھ��Ͽη�Ϊ���¼��ֲ�Σ�<br />
������һ�ֲ�ξ����ÿھ�����Ӳ�ף��򵥵������嶯����������ɷ���Լ��������ճ��ֳ���˥�����ֶϿη����ǵ�ǰ�ڽ�ھ������ĶϿμ��ܣ���������㣬Ҳ����򵥵ķ�����Ӧ����һ�㡣<br />
�����ڶ���Σ����ǿ��Բ��ÿھ�����ɷ�����������ճ�����˥���������Ӧ�������嶯��׼ȷ���жϿ�����˥��������ʹ�����������������س���ж����壬�ﵽ���ֲ�ε����Ѿ������ˣ������ַ����Ͽ�׼ȷ�ʿ�Ѹ�����������˾����ľ��硣<br />
����������Σ������Ѿ����뻯�����Ը��ֽ�ھ������۾���ȫ���ڻ��ͨ���ﵽ���Բ��������嶯������������������ֻƾ����֮������������£����ֲ���Ѿ��ǳ�Խ�˽�ھ��Ľ��ޣ��������Ӧ�ø�������������ھ�����˵���׵�һ�仰���Ǹ�֧��ϵ�������ġ�<br />
��������������ξ��ǵ����ھ������״���������������Ҫ�۱���ʵ�Ļ������������Ͻ�����̬����ʦ���ϵ�ѭѭ���ա��߱������ϼ��㣬ѧ���úý�ھ��Ͳ���һ�������ˡ�<br />
������ھ����õ����쿿����һ�������죡 <br></td>
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
