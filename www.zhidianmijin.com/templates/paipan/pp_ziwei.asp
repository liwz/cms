<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<TITLE>��΢������������ϵͳ-��������
</TITLE>
<!--#include file="top.asp"--><!--#include file="../inc/conn.asp"-->
<div id="right">
<!--#include file="right.asp"-->
</div>
<div id="left">
<div style="width:100%">
<%if request("act")="ok" then%>
<%on error resume next%>
<%
 server.ScriptTimeout=100
 name=request("name")
 sex=request("sex")
 DateType=request("DateType")
 y=request("year")
 m=request("month")
 d=request("date")
 h=request("hour")
 minutes=request("minute")


 Runyue=request("data_month_other")
 dlevel=request("data_level")
 starLevel=request("data_star_level")
 liunian=request.form("liunian")
%>

<!--#include file="inc/sizhu.asp"-->
<!--#include file="inc/jieqi.asp"-->
<!--#include file="inc/zwcom.asp"-->
<!--#include file="inc/yy.asp"-->
<%
 if DateType="0" then
  NongLI=y&"��"&m&"��"&d&"��"&dz(hindex)&"ʱ"
 call setdate(y,m,d,Yy,Ym,Yd)
 call sizhu(yy,Ym,Yd,h,minutes,ygz,mgz,dgz,tgz)
 else
  call sizhu(y,m,d,h,minutes,ygz,mgz,dgz,tgz)
 call form_load(y&"-"&m&"-"&d&" "&h&":"&minutes&":00",ntime,cyue,cri,cyear)
 y=cyear
 m=cyue
 d=cri
  NongLI=ntime
 end if
%>
<%
if (sex=0 and (tgorder(ygz)mod 2)=1) or (sex=1 and (tgorder(ygz)mod 2)=0) then
ORDERS=1
ELSE
ORDERS=0
END IF   '������Ů˳ٽ��������Ů��ٽ

%>
<%
hIndex=((h+1)/2)mod 12  'ʱ���ļǷ�

%>
<%'��12��������ɺ��������·���ͬ
dim DpTg(11)
tm=int(((y mod 5)-2)*2-1)

if tm<0 then
tm=tm+10
end if

'response.Write(tm)
for i=0 to 11
dm=(i+11) mod 12
if dm=0 then
dm=12
end if
TgIndex=(tm+dm-2)mod 10 ' �����������Ӧ�����
DpTg(i)=Tg(TgIndex)
next
ytg=left(ygz,1)
%>

<%'����������
dim Minggong(11)
dim shenGong(11)
MingGIndex=(m-1-hIndex+12)mod 12
ShenGIndex=(m-1+HiNdex+12)mod 12
for i=0 to 11
shengong(i)="&nbsp&nbsp"
next
minggong(MinggIndex)="����"
shengong(shengIndex)="(��)"

'��12����������Ϊ��׼������
for i=1 to 11
MgIndex=(MinggIndex-i+12)mod 12
minggong(mgindex)=segong(i-1)
next
%>

<%'���оֺ���������
wxIndex=(minggindex+2)mod 12
wxgz=dptg(wxindex)&dz(wxindex)
wxNayin=nayins(wxgz)

select case right(trim(wxnayin),1)
     case "��"  WxJU="������"
	             Jindex=6
     case "��"  wxju="�����"
	            Jindex=5
     case "ˮ"  wxju="ˮ����"
	 	            Jindex=2
	 case "ľ"  wxju="ľ����"
	 	            Jindex=3
	 case "��"  wxju="���ľ�"
	 	            Jindex=4
   end select
'call nayin("��δ")


%>

<%'����ޱ����
dim zwxing(11)
dim tfxing(11)
zwTemp=d mod jindex
zwInt=d\jindex

if zwTemp=0 then
zwindex=(zwint-1)mod 12

else if (zwTemp mod 2)=1 then
      zwindex=(zwint+1-jindex+zwtemp+12)mod 12
      else
	  zwindex=(zwint+1+jindex+zwtmp)mod 12
	  end if
end if   '��������������ޱ�ǵ��乬
zwxing(zwindex)="��ޱ"
select case ytg
case "��"  zwxing(zwindex)="��ޱ���ơ�"
case "��"  zwxing(zwindex)="��ޱ��Ȩ��"
end select
tianjiindex=(zwindex+11)mod 12
zwxing(tianjiindex)="���"
select case ytg
   case "��" zwxing(tianjiindex)="�����»��"
   case "��" zwxing(tianjiindex)="�����Ȩ��"
   case "��" zwxing(tianjiindex)="������ơ�"
   case "��" zwxing(tianjiindex)="������ɡ�"
   end select
taiyangindex=(zwindex+9)mod 12
zwxing(taiyangindex)="̫��"
select case ytg
case "��" zwxing(taiyangindex)=zwxing(taiyangindex)&"���ɡ�"
case "��" zwxing(taiyangindex)=zwxing(taiyangindex)&"��»��"
case "��" zwxing(taiyangindex)=zwxing(taiyangindex)&"��Ȩ��"
end select

wuquindex=(zwindex+8)mod 12
if minggindex=3 or minggindex=5 then
zwxing(wuquindex)="������������"
else
zwxing(wuquindex)="����"
end if
select case ytg
case "��" zwxing(wuquindex)=zwxing(wuquindex)&"���ơ�"
case "��" zwxing(wuquindex)=zwxing(wuquindex)&"��»��"
case "��" zwxing(wuquindex)=zwxing(wuquindex)&"��Ȩ��"
case "��" zwxing(wuquindex)=zwxing(wuquindex)&"���ɡ�"
end select
zwxing((zwindex+7)mod 12)="��ͬ"
select case ytg
   case "��" zwxing((zwindex+7)mod 12)="��ͬ��»��"
   case "��" zwxing((zwindex+7)mod 12)="��ͬ��Ȩ��"
   case "��" zwxing((zwindex+7)mod 12)="��ͬ���ơ�"
  end select
zwxing((zwindex+4)mod 12)="����"
select case ytg
            case "��" zwxing((zwindex+4)mod 12)="���꡾»��"
			case  "��" zwxing((zwindex+4)mod 12)="���꡾�ɡ�"
			end select
'�츮����
TfIndex=(12-zwindex)mod 12
tfxing(tfindex)="�츮"

taiyinindex=(tfindex+1)mod 12
tfxing(taiyinindex)="̫��"
select case ytg
  case "��"  tfxing(taiyinindex)=tfxing(taiyinindex)&"��»��"
  case "��"  tfxing(taiyinindex)=tfxing(taiyinindex)&"���ɡ�"
  case  "��" tfxing(taiyinindex)=tfxing(taiyinindex)&"���ơ�"
  case  "��" tfxing(taiyinindex)=tfxing(taiyinindex)&"��Ȩ��"
 end select

tanlangindex=(tfindex+2)mod 12
if minggindex=10 then
tfxing(tanlangindex)="̰�ǣ�������"
else
tfxing(tanlangindex)="̰��"
end if
select case ytg
case "��"  tfxing(tanlangindex)= tfxing(tanlangindex)&"��»��"
case "��" tfxing(tanlangindex)= tfxing(tanlangindex)&"��Ȩ��"
case "��" tfxing(tanlangindex)= tfxing(tanlangindex)&"���ɡ�"
end select
jumenindex=(tfindex+3)mod 12
if minggindex=11 or minggindex=9 then
tfxing(jumenindex)="����(����)"
else
tfxing(jumenindex)="����"
end if

select case ytg
    case "��" tfxing(jumenindex)=tfxing(jumenindex)&"���ɡ�"
	case "��" tfxing(jumenindex)=tfxing(jumenindex)&"��»��"
	case "��" tfxing(jumenindex)=tfxing(jumenindex)&"��Ȩ��"
	end select
tfxing((tfindex+4)mod 12)="����"

tianliangindex=(tfindex+5)mod 12
if ytg="��" then
tfxing(tianliangindex)="������Ȩ��"
else
tfxing(tianliangindex)="����"
end if
tfxing((tfindex+6)mod 12)="��ɱ"
if minggindex=4 then
tfxing((tfindex+10)mod 12)="�ƾ�(����)"
else
tfxing((tfindex+10)mod 12)="�ƾ�"
end if

select case ytg
case "��" tfxing((tfindex+10)mod 12)=tfxing((tfindex+10)mod 12)&"��Ȩ��"
case "��" tfxing((tfindex+10)mod 12)=tfxing((tfindex+10)mod 12)&"��»��"
end select
%>
<%'�Ĳ��������Ĳ���������ʱ������˳������ʱ
dim wenchang(11)
wenchang((12-hindex+10)mod 12)="�Ĳ�"
select case ytg
       case "��" wenchang((12-hindex+10)mod 12)="�Ĳ����ơ�"
	   case "��" wenchang((12-hindex+10)mod 12)="�Ĳ����ɡ�"
	   end select
if minggindex=1 or minggindex=7 then
wenchang((hindex+4)mod 12)="����(����)"
else
wenchang((hindex+4)mod 12)="����"
end if

select case ytg
 case "��"  wenchang((hindex+4)mod 12)=wenchang((hindex+4)mod 12)&"���ɡ�"
 case  "��"  wenchang((hindex+4)mod 12)=wenchang((hindex+4)mod 12)&"���ơ�"
	  end select
engindex=(12-hindex+10+d-2)mod 12 '��������Ĳ�˳�������գ��˺�һ���Ƕ��⣬����˳�������գ��˺�һ�������
tianguiindex=(((hindex+4)mod 12)+d-2)mod 12'������
djindex=(11+hindex)mod 12
tkindex=(11-hindex+12)mod 12
apindex=(hindex+6)mod 12 '̨��
hxindex=(hindex+8)mod 12 'ھ��
if wenchang(apindex)<>"" then
wenchang(apindex) =wenchang(apindex)&"̨��"
else
wenchang(apindex) ="̨��"
end if

if wenchang(hxindex)<>"" then
wenchang(hxindex) =wenchang(hxindex)&"ھ��"
else
wenchang(hxindex) ="ھ��"
end if
if wenchang(djindex)<>"" then '���ؽ�
wenchang(djindex)=wenchang(djindex)&"�ؽ�"
else
wenchang(djindex)="�ؽ�"
end if

if wenchang(tkindex)<>"" then '����ս�
wenchang(tkindex)=wenchang(tkindex)&"��ս�"
else
wenchang(tkindex)="��ս�"
end if
%>
<%'�������
dim huoling(11)
select case right(ygz,1)
       case "��","��","��" hxbg="��î"
	                       xiaoxian="��"
	   case "��","��","��"  hxbg="����"
	                        xiaoxian="��"
       case "��","î","δ" hxbg="����"
	                       xiaoxian="��"
       case "��","��","��" hxbg="î��"
	                      xiaoxian="δ"
      ' case �ٴ�ʼ��������
      ' case ˳����ʱ�����硣
end select
hgindex=dzorder(left(hxbg,1)) '������
lgindex=dzorder(hxbg)    '������	
hgindex=(hgindex+hindex-1)mod 12
lgindex=(lgindex+hindex-1)mod 12
huoling(hgindex)="����"
huoling(lgindex)="����"

'����ϵ����
zpindex=(4+m-1)mod 12  '��
youbiindex=(10-m+1+12)mod 12 '����
tianyindex=(m)mod 12
tianxindex=(9+m-1)mod 12
if huoling(zpindex)<>"" then
huoling(zpindex)=huoling(zpindex)&"��"
else
huoling(zpindex)="��"
end if
if ytg="��" then
huoling(zpindex)=huoling(zpindex)&"���ơ�"
end if
if huoling(youbiindex)<>"" then
huoling(youbiindex)=huoling(youbiindex)&"����"
else
huoling(youbiindex)="����"
end if   '����Ϊ�����ұ�
if ytg="��" then
huoling(youbiindex)=huoling(youbiindex)&"��Ȩ��"
end if
if huoling(tianyindex)<>"" then
huoling(tianyindex)=huoling(tianyindex)&"��Ҧ"
else
huoling(tianyindex)="��Ҧ"
end if

if huoling(tianxindex)<>"" then
huoling(tianyindex)=huoling(tianxindex)&"����"
else
huoling(tianxindex)="����"
end if

select case m
       case 1,5,9  tianmindex=8
	               tianwindex=5
       case 7,11,3 tianmindex=2
	               tianwindex=2
       case 4,8,12 tianmindex=5
	               tianwindex=8
	   case 2,10,6 tianmindex=11
	                tianwindex=11
end select
if huoling(tianmindex)<>"" then
huoling(tianmindex)=huoling(tianmindex)&"����"
else
huoling(tianmindex)="����"
end if

if huoling(tianwindex)<>"" then
huoling(tianwindex)=huoling(tianwindex)&"����"
else
huoling(tianwindex)="����"
end if

select case m
        case 1,2 jieshenindex=8
        case 3,4 jieshenindex=10
		case 5,6 jieshenindex=0
		case 7,8 jieshenindex=2
		case 9,10 jieshenindex=4
		case 11,12 jieshenindex=6
end select

select case m
     case 1  tianyueindex=10
	          yinshaindex=2
	 case 2  tianyueindex=5
	          yinshaindex=0
	 case 3  tianyueindex=4
	          yinshaindex=10
	 case 4  tianyueindex=2
	          yinshaindex=8
	 case 5  tianyueindex=7
	          yinshaindex=6
	 case 6  tianyueindex=3
	          yinshaindex=4
	 case 7  tianyueindex=11
	          yinshaindex=2
	 case 8  tianyueindex=7
	          yinshaindex=0
	 case 9  tianyueindex=2
	          yinshaindex=10
	 case 10  tianyueindex=6
	          yinshaindex=8
	 case 11  tianyueindex=10
	          yinshaindex=6
	 case 12  tianyueindex=2
	          yinshaindex=4
end select 	

if huoling(jieshenindex)<>"" then
huoling(jieshenindex)=huoling(jieshenindex)&"����"
else
huoling(jieshenindex)="����"
end if

if huoling(tianyueindex)<>"" then
huoling(tianyueindex)=huoling(tianyueindex)&"����"
else
huoling(tianyueindex)="����"
end if
select case ytg
case "��" huoling(tianyueindex)=huoling(tianyueindex)&"���ɡ�"
case "��" huoling(tianyueindex)=huoling(tianyueindex)&"��Ȩ��"
end select
if huoling(yinshaindex)<>"" then
huoling(yinshaindex)=huoling(yinshaindex)&"��ɷ"
else
huoling(yinshaindex)="��ɷ"
end if

%>
<% '��ϵ������̨��̨���������һ��˳���������հ�֮
 '���������������һ�������������հ�֮
santindex=(zpindex+d-1)mod 12
bazuoindex=(youbiindex-((d-1) mod 12)+12)mod 12
if wenchang(santindex)<>"" then
wenchang(santindex)=wenchang(santindex)&"��̨"
else
wenchang(santindex)="��̨"
end if

if wenchang(bazuoindex)<>"" then
wenchang(bazuoindex)=wenchang(bazuoindex)&"����"
else
wenchang(bazuoindex)="����"
end if

if wenchang(engindex)<>"" then
wenchang(engindex)=wenchang(engindex)&"����"
else
wenchang(engindex)="����"
end if

if wenchang(tianguiindex)<>"" then
wenchang(tianguiindex)=wenchang(tianguiindex)&"���"
else
wenchang(tianguiindex)="���"
end if
%>

<%'��ϵ���� ������î��»�ȣ���������»��������»������»�ϣ���»�ں���»��
select case left(ygz,1)
   case  "��"  luncun="��"
   case  "��"  luncun="î"
   case  "��"  luncun="��"
   case  "��","��" luncun="��"
   case  "��" luncun="��"
   case  "��" luncun="��"
   case  "��" luncun="��"
   case  "��" luncun="��"
   case  "��"  luncun="��"
 end select
 lcindex=dzorder(luncun)-1
 lcindex=(lcindex+10)mod 12
 qingyindex=(lcindex+1)mod 12
 tuoluoindex=(lcindex+11)mod 12
 if minggindex=0 or minggindex=8 then
 mingzhu="»��(����)"
 else
 mingzhu="»��"
 end if
 if zwxing(lcindex)<>"" then
zwxing(lcindex)=zwxing(lcindex)&""&mingzhu
else
zwxing(lcindex)=mingzhu
end if

 if zwxing(tuoluoindex)<>"" then
zwxing(tuoluoindex)=zwxing(tuoluoindex)&"����"
else
zwxing(tuoluoindex)="����"
end if

 if zwxing(qingyindex)<>"" then
zwxing(qingyindex)=zwxing(qingyindex)&"����"
else
zwxing(qingyindex)="����"
end if

select case left(ygz,1)
 case  "��","��","��"       tiankui="��"
							 tianji="δ"
							
	   case  "��","��"
	                         tiankui="��"
							
							 tianji="��"
							 '������
	   case  "��","��"
	                         tiankui="��"
							
							 tianji="��"
							'"��"��
	   case  "��","��"
	                         tiankui="î"
							
							 tianji="��"
							 '�Ⱥ�
	   case  "��"
	                         tiankui="��"
							
							 tianji="��"
							'�绢

 end select
 tiankuiindex=dzorder(tiankui)-1
 tianjiindex=dzorder(tianji)-1
 tiankuiindex=(tiankuiindex+10)mod 12
 tianjiindex=(tianjiindex+10)mod 12
 'response.Write(tiankui&tianji)
  if zwxing(tiankuiindex)<>"" then
zwxing(tiankuiindex)=zwxing(tiankuiindex)&"���"
else
zwxing(tiankuiindex)="���"
end if

  if zwxing(tianjiindex)<>"" then
zwxing(tianjiindex)=zwxing(tianjiindex)&"����"
else
zwxing(tianjiindex)="����"
end if

select case left(ygz,1)
 case "��"  tianguan=7
            tianfu=9
 case "��"  tianguan=4
            tianfu=8
 case "��"  tianguan=5
            tianfu=0
 case "��"  tianguan=2
            tianfu=11
 case "��"  tianguan=3
            tianfu=3
 case "��"  tianguan=9
            tianfu=2
 case "��"  tianguan=11
            tianfu=6
 case "��" tianguan=7
            tianfu=5
 case "��" tianguan=10
            tianfu=6
 case "��" tianguan=6
            tianfu=5
end select
tianfuindex=(tianfu+10)mod 12
tianguanindex=(tianguan+10)mod 12

  if zwxing(tianfuindex)<>"" then
zwxing(tianfuindex)=zwxing(tianfuindex)&"�츣"
else
zwxing(tianfuindex)="�츣"
end if

 if zwxing(tianguanindex)<>"" then
zwxing(tianguanindex)=zwxing(tianguanindex)&"���"
else
zwxing(tianguanindex)="���"
end if


%>
<%dim boshis(11)  '12��ʿ
'response.Write(orders)
if orders then
for i=0 to 11
boshis((lcindex+2+i)mod 12)=boshi(i)
next
else
for i=0 to 11
boshis((lcindex+14-i)mod 12)=boshi(i)
next
end if
ydzorder=dzorder(ygz)
tianxuindex=(6+ydzorder-1)mod 12
tiankuindex=(19-ydzorder)mod 12
longciindex=(4+ydzorder-1)mod 12
fenggeindex=(15-ydzindex)mod 12
hongluanindex=(16-ydzorder)mod 12
tianxiindex=(hongluanindex+6)mod 12
boshis(tianxuindex)=boshis(tianxuindex)&"����"
boshis(tiankuindex)=boshis(tiankuindex)&"���"
boshis(longciindex)=boshis(longciindex)&"����"
boshis(fenggeindex)=boshis(fenggeindex)&"���"
boshis(hongluanindex)=boshis(hongluanindex)&"���"
boshis(tianxiindex)=boshis(tianxiindex)&"��ϲ"

'response.write boshis(hongluanindex)&hongluanindex
select case right(ygz,1)
       case  "��","î","��"  guchen="��"
	                         guaxiu="��"
	   case  "��","��","δ" guchen="��"
	                          guaxiu="��"
       case  "��","��","��"  guaxiu="��"
	                         guchen="δ"
	   case  "��","��","��"  guchen="��"
	                         guaxiu="��"


end select	
guchenindex=dzorder(guchen)-1
guaxiuindex=dzorder(guaxiu)-1
boshis(guchenindex)=boshis(guchenindex)&"�³�"
boshis(guaxiuindex)=boshis(guaxiuindex)&"����"
ygzorders=dzorder(ygz)
'select case  (ygzorder-1)mod 3
  ' case 0   beilianindex=(21-ygzorder)mod 12
  ' case 1    beilianindex=(23-ygzorder)mod 12
   'case 2   beilianindex=(25-ygzorder)mod 12
'end select
beilianindex=(ygzorders+8)mod 12
select case right(ygz,1)
case  "��","��","î","��" poshui="��"
case  "��","��","��","��" poshui="��"
case  "��","��","��","δ" poshui="��"
end select
poshuiindex=dzorder(poshui)-1
boshis(poshuiindex)=boshis(poshuiindex)&"����"
boshis(beilianindex)=boshis(beilianindex)&"����"
tiancaiindex=(((minggindex+2)mod 12)+ydzorder-1)mod 12
tianshouindex=(((shengindex+2)mod 12)+ydzorder-1)mod 12
boshis(tiancaiindex)=boshis(tiancaiindex)&"���"
boshis(tianshouindex)=boshis(tianshouindex)&"����"

%>

 <%select case wxju
    case "ˮ����" changsh="��"
	case "ľ����" changsh="��"
	case "���ľ�" changsh="��"
    case   "�����" changsh="��"
	case "������" changsh="��"
 end select
changshindex=dzorder(changsh)-1
if orders then
for i=0 to 11
dptg((i+changshindex)mod 12)=changsheng(i)&""&dptg((i+changshindex)mod 12)
next
else
for i=0 to 11
dptg((changshindex-i+12)mod 12)=changsheng(i)&""&dptg((changshindex-i+12)mod 12)
next
end if
%>

<%select case left(ygz,1)

  case "��","��" jiekong="����"
  case "��","��" jiekong="��δ"
  case "��","��" jiekong="����"
  case "��","��" jiekong="��î"
  case "��","��" jiekong="�ӳ�"
  end select
jieluindex=dzorder(left(jiekong,1))-1
kongmangindex=dzorder(jiekong)-1
if wenchang(jieluindex)<>"" then
wenchang(jieluindex)=wenchang(jieluindex)&"��·����"
else
wenchang(jieluindex)="��·"
end if

if wenchang(kongmangindex)<>"" then
wenchang(kongmangindex)=wenchang(kongmangindex)&"����"
else
wenchang(kongmangindex)="����"
end if
%>
<%call xunkong(ygz,xk,xunshou)
select case xunshou
      case "����"  xunzhong="�纥"
	  case "����"  xunzhong="����"
	  case "����"  xunzhong="��δ"
      case "����"  xunzhong="����"
	  case "�׳�"  xunzhong="��î"
	  case "����"  xunzhong="�ӳ�"
end select	

xunzhongindex=dzorder(left(xunzhong,1))-1
kongwangindex=dzorder(xunzhong)-1

if wenchang(xunzhongindex)<>"" then
wenchang(xunzhongindex)=wenchang(xunzhongindex)&"Ѯ��"
else
wenchang(xunzhongindex)="Ѯ��"
end if

if wenchang(kongwangindex)<>"" then
wenchang(kongwangindex)=wenchang(kongwangindex)&"����"
else
wenchang(kongwangindex)="����"
end if
%>

<%'�����
xushuig=(minggindex+2)mod 12
xushui=jindex-1
if orders then
for i=0 to 11
xushui=xushui+1
dptg((i+xushuig)mod 12)=xushui&"��"&(xushui+9)&""&dptg((i+xushuig)mod 12)
xushui=xushui+9
next
else
for i=0 to 11
xushui=xushui+1
dptg((xushuig-i+12)mod 12)=xushui&"��"&(xushui+9)&""&dptg((xushuig-i+12)mod 12)
xushui=xushui+9
next
end if
%>

<%


%>

<%'������
dim lyxing(11)
select case right(ygz,1)
      case "��","��","��" liunian="��"
	  case "��","��","��" liunian="��"
	  case "��","��","��" liunian="��"
	  case "��","î","δ" liunian="î"
end select
startly=dzorder(liunian)-1
for i=0 to 11
lyxing((startly+i)mod 12)=liunianxing2(i)
next
%>

<%'��С��
xiaoxianindex=dzorder(xiaoxian)-1
if sex then
for i=0 to 11
lyxing((xiaoxianindex+i)mod 12)=lyxing((xiaoxianindex+i)mod 12)&"��"&(i+1)&string(2-len(i+1)," ")&"��"
next
else
for i=0 to 11
lyxing((xiaoxianindex+i)mod 12)=lyxing((xiaoxianindex+i)mod 12)&"��"&(i+1)&string(2-len(i+1)," ")&"��"
next

end if
%>

<%'̫��һ��һ�滻����ǰ�����ǻ�����

'ɥ�Ź������ٷ���С�Ĵ�����¼̣�

'�׻���������ͣ������Ӻ��뵱��
for i=0 to 11
lyxing((ydzorder-1+i)mod 12)=lyxing((ydzorder-1+i)mod 12)&liunianxing(i)
next
'������
ydzorder=dzorder(ygz)-1
'response.Write(m&"<Br>")
''response.Write(hindex&"<Br>")
'response.Write(ydzorder&"<Br>")
doujunindex=(((ydzorder-m+12)mod 12)+hindex)mod 12
'doujungong=dz(doujunindex)
'response.write doujunindex&"<Br>"
%>

<%set fo=server.CreateObject("scripting.filesystemobject")
path=server.MapPath("temp")
path=path&"/mpx.txt"
ii=ydzorder+1
for i=0 to 11
set fn=fo.opentextfile(path)
while not fn.atendofstream
str=fn.readline
strarr=split(str,",")
'response.Write(replace("dd����",strarr(1),strarr(1)&strarr(ii)))
tfxing(i)=replace(tfxing(i),strarr(1),strarr(1)&strarr(ii))
zwxing(i)=replace(zwxing(i),strarr(1),strarr(1)&strarr(ii))
wenchang(i)=replace(wenchang(i),strarr(1),strarr(1)&strarr(ii))
huoling(i)=replace(huoling(i),strarr(1),strarr(1)&strarr(ii))
boshis(i)=replace(boshis(i),strarr(1),strarr(1)&strarr(ii))
minggong(i)=replace(minggong(i),strarr(1),strarr(1)&strarr(ii))
wend
fn.close
next%>
<%

for i=0 to 11
zwxing(i)=zwxing(i)&string(20-lenb(zwxing(i)),"-")
tfxing(i)=tfxing(i)&string(20-lenb(tfxing(i)),"-")
wenchang(i)=wenchang(i)&string(abs(20-lenb(wenchang(i))),"-")
boshis(i)=boshis(i)&string(20-lenb(boshis(i)),"-")
minggong(i)=minggong(i)&string(20-lenb(minggong(i)),"-")
huoling(i)=huoling(i)&string(20-lenb(huoling(i)),"-")
lyxing(i)=lyxing(i)&string(22-lenb(lyxing(i)),"-")
'response.write len(wenchang(i))&"<br>"
next
%><table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" id="paipanTable">
    <tbody>
      <tr>
        <td class="ttop">��΢������������ϵͳ</td>
      </tr>
      <tr>
        <td class="new">
����
  <table width="90%" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor=#0EA7F1>
    <tr>
      <td width="25%" bgcolor="#FFFFFF"><%=zwxing(3)%></font>��</td>
      <td width="25%" bgcolor="#FFFFFF"><%=zwxing(4)%></font>��</td>
      <td width="25%" bgcolor="#FFFFFF"><%=zwxing(5)%></font>��</td>
      <td width="25%" bgcolor="#FFFFFF"><%=zwxing(6)%></font>��</td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><%=tfxing(3)%></font>��</td>
      <td bgcolor="#FFFFFF"><%=tfxing(4)%></font>��</td>
      <td bgcolor="#FFFFFF"><%=tfxing(5)%></font>��</td>
      <td bgcolor="#FFFFFF"><%=tfxing(6)%></font>��</td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><%=wenchang(5)%></font>��</td>
      <td bgcolor="#FFFFFF"><%=wenchang(6)%></font>��</td>
      <td bgcolor="#FFFFFF"><%=wenchang(7)%></font>��</td>
      <td bgcolor="#FFFFFF"><%=wenchang(8)%></font>��</td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><%=huoling(5)%></font>��</td>
      <td bgcolor="#FFFFFF"><%=huoling(6)%></font>��</td>
      <td bgcolor="#FFFFFF"><%=huoling(7)%></font>��</td>
      <td bgcolor="#FFFFFF"><%=huoling(8)%></font>��</td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><%=minggong(3)&shengong(3)%></font>��</td>
      <td bgcolor="#FFFFFF"><%=minggong(4)&shengong(4)%></font>��</td>
      <td bgcolor="#FFFFFF"><%=minggong(5)&shengong(5)%></font>��</td>
      <td bgcolor="#FFFFFF"><%=minggong(6)&shengong(6)%></font>��</td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><%=boshis(5)%></font>��</td>
      <td bgcolor="#FFFFFF"><%=boshis(6)%></font>��</td>
      <td bgcolor="#FFFFFF"><%=boshis(7)%></font>��</td>
      <td bgcolor="#FFFFFF"><%=boshis(8)%></font>��</td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><%=DpTg(5)%>��</font></td>
      <td bgcolor="#FFFFFF"><%=DpTg(6)%>��</font></td>
      <td bgcolor="#FFFFFF"><%=DpTg(7)%>δ</font></td>
      <td bgcolor="#FFFFFF"><%=DpTg(8)%>��</font></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><%=lyxing(5)%></font>��</td>
      <td bgcolor="#FFFFFF"><%=lyxing(6)%></font>��</td>
      <td bgcolor="#FFFFFF"><%=lyxing(7)%></font>��</td>
      <td bgcolor="#FFFFFF"><%=lyxing(8)%></font>��</td>
    </tr>
  </table>  </td>
      </tr>
      <tr>
        <td class="new"><table width="90%" align="center" cellpadding="5" cellspacing="1" bgcolor=#C98B30>
          <tr>
            <td width="25%" bgcolor="#FFFFFF"><%=zwxing(2)%></font>��</td>
            <td bgcolor="#FFFFFF">................</font>........................</font></td>
            <td width="25%" bgcolor="#FFFFFF"><%=zwxing(7)%></font>��</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><%=tfxing(2)%></font>��</td>
            <td bgcolor="#FFFFFF">....<a target="_blank" href="pp"><font color=aaaaaa></font></a>.......</td>
            <td bgcolor="#FFFFFF"><%=tfxing(7)%></font>��</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><%=wenchang(4)%></font>��</td>
            <td bgcolor="#FFFFFF"> <strong>�Ա�</strong>��
              <%if sex=1 then
	response.Write("��")
	else
	response.Write("Ů")
	end if%></td>
            <td bgcolor="#FFFFFF"><%=wenchang(9)%></font>��</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><%=huoling(4)%></font>��</td>
            <td bgcolor="#FFFFFF"><strong>������</strong><%=NongLi%></font> <font color="#FF0000"><%=wxju%></font></font></td>
            <td bgcolor="#FFFFFF"><%=huoling(9)%></font>��</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><%=minggong(2)&shengong(2)%></font>��</td>
            <td bgcolor="#FFFFFF"><strong><font color="#000000"><%=YGZ%>--<%=MGZ%>--<%=DGZ%>--<%=TGZ%></font></strong></font><font color="#000000"><strong></font></font></td>
            <td bgcolor="#FFFFFF"><%=minggong(7)&shengong(7)%></font>��</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><%=boshis(4)%></font>��</td>
            <td bgcolor="#FFFFFF"><strong>���궷����</strong><%=dz(doujunindex)%>..........................</font></td>
            <td bgcolor="#FFFFFF"><%=boshis(9)%></font>��</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><%=DpTg(4)%>��</font></td>
            <td bgcolor="#FFFFFF">&nbsp;</font>................</font>........................</font></td>
            <td bgcolor="#FFFFFF"><%=DpTg(9)%>��</font></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><%=lyxing(4)%></font>��</td>
            <td bgcolor="#FFFFFF">................</font>........................</font></td>
            <td bgcolor="#FFFFFF"><%=lyxing(9)%></font>��</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td class="new"><table width="90%" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor=#C20385>
          <tr>
            <td width="25%" bgcolor="#FFFFFF"><%=zwxing(1)%></font>��</td>
            <td bgcolor="#FFFFFF">&nbsp;</font>................</font>........................</font></td>
            <td width="25%" bgcolor="#FFFFFF"><%=zwxing(8)%></font>��</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><%=tfxing(1)%></font>��</td>
            <td bgcolor="#FFFFFF">&nbsp;</font>................</font>........................</font></td>
            <td bgcolor="#FFFFFF"><%=tfxing(8)%></font>��</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><%=wenchang(3)%></font>��</td>
            <td bgcolor="#FFFFFF">&nbsp;</font>................</font>........................</font></td>
            <td bgcolor="#FFFFFF"><%=wenchang(10)%></font>��</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><%=huoling(3)%></font>��</td>
            <td bgcolor="#FFFFFF">....<a target="_blank" href="pp"><font color=aaaaaa></font></a>.......</td>
            <td bgcolor="#FFFFFF"><%=huoling(10)%></font>��</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><%=minggong(1)&shengong(1)%></font>��</td>
            <td bgcolor="#FFFFFF">&nbsp;</font>................</font>........................</font></td>
            <td bgcolor="#FFFFFF"><%=minggong(8)&shengong(8)%></font>��</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><%=boshis(3)%></font>��</td>
            <td bgcolor="#FFFFFF">&nbsp;</font>................</font>........................</font></td>
            <td bgcolor="#FFFFFF"><%=boshis(10)%></font>��</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><%=DpTg(3)%>î</font></td>
            <td bgcolor="#FFFFFF">&nbsp;</font>................</font>........................</font></td>
            <td bgcolor="#FFFFFF"><%=DpTg(10)%>��</font></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><%=lyxing(3)%></font>��</td>
            <td bgcolor="#FFFFFF">................</font>........................</font></td>
            <td bgcolor="#FFFFFF"><%=lyxing(10)%></font>��</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td class="new"><table width="90%" height="30" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor=#7B5851>
          <tr>
            <td width="25%" bgcolor="#FFFFFF"><%=zwxing(0)%></font>��</td>
            <td width="25%" bgcolor="#FFFFFF"><%=zwxing(11)%></font>��</td>
            <td width="25%" bgcolor="#FFFFFF"><%=zwxing(10)%></font>��</td>
            <td width="25%" bgcolor="#FFFFFF"><%=zwxing(9)%></font>��</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><%=tfxing(0)%></font>��</td>
            <td bgcolor="#FFFFFF"><%=tfxing(11)%></font>��</td>
            <td bgcolor="#FFFFFF"><%=tfxing(10)%></font>��</td>
            <td bgcolor="#FFFFFF"><%=tfxing(9)%></font>��</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><%=wenchang(2)%></font>��</td>
            <td bgcolor="#FFFFFF"><%=wenchang(1)%></font>��</td>
            <td bgcolor="#FFFFFF"><%=wenchang(0)%></font>��</td>
            <td bgcolor="#FFFFFF"><%=wenchang(11)%></font>��</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><%=huoling(2)%></font>��</td>
            <td bgcolor="#FFFFFF"><%=huoling(1)%></font>��</td>
            <td bgcolor="#FFFFFF"><%=huoling(0)%></font>��</td>
            <td bgcolor="#FFFFFF"><%=huoling(11)%></font>��</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><%=minggong(0)&shengong(0)%></font>��</td>
            <td bgcolor="#FFFFFF"><%=minggong(11)&shengong(11)%></font>��</td>
            <td bgcolor="#FFFFFF"><%=minggong(10)&shengong(10)%></font>��</td>
            <td bgcolor="#FFFFFF"><%=minggong(9)&shengong(9)%></font>��</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><%=boshis(2)%></font>��</td>
            <td bgcolor="#FFFFFF"><%=boshis(1)%></font>��</td>
            <td bgcolor="#FFFFFF"><%=boshis(0)%></font>��</td>
            <td bgcolor="#FFFFFF"><%=boshis(11)%></font>��</td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><%=DpTg(2)%>��</font></td>
            <td bgcolor="#FFFFFF"><%=DpTg(1)%>��</font></td>
            <td bgcolor="#FFFFFF"><%=DpTg(0)%>��</font></td>
            <td bgcolor="#FFFFFF"><%=DpTg(11)%>��</font></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><%=lyxing(2)%></font>��</td>
            <td bgcolor="#FFFFFF"><%=lyxing(1)%></font>��</td>
            <td bgcolor="#FFFFFF"><%=lyxing(0)%></font>��</td>
            <td bgcolor="#FFFFFF"><%=lyxing(11)%></font>��</td>
          </tr>
        </table></td>
      </tr>
    </table>
<%else%>

  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" >
<tbody><form name="form1"  onsubmit="return submitchecken();" method="post" action="">
<input type="hidden" name="act" value="ok" /><tr>
  <td width="100%" class="ttop">��΢������������ϵͳ</td>
    </tr>

  <tr>
<td align="center" class="new">�������գ� 
      <input name="DateType" type="hidden" value="1"> <input name="data_month_other" type="hidden" value="0">
	  <input type="hidden" name="liunian" value="2007">
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

<tr>
<td align="center" class="new">�Ա�:
  <input name="sex" type="radio" value="1" checked>
��
<input type="radio" name="sex" value="0">
Ů ���ࣺ<input type="radio" value="1" name="mode" checked="" />����
<input type="radio" value="2" name="mode" disabled="" />����
<input type="radio" value="3" name="mode" disabled="" />����
<input type="radio" value="4" name="mode" />
������</td>
</tr>  <tr>
<td align="center" class="new"><input type="submit" value="��΢������������" name="submit" style="cursor:hand;" /> </td>
</tr>
</form>
</table>
  <%end if%>
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" >
    <tbody>
   
      <tr>
        <td width="100%" class="ttop">��΢������������ϵͳ
</td>
      </tr>
      <tr>
        <td class="new"><p>��΢���������й���ͳ����ѧ������Ҫ��֧��֮һ���������˳������ꡢ�¡��ա�ʱȷ��ʮ������λ�ã��������̣���ϸ�������Ⱥ��ϣ�ǣϵ������س����Ԥ��һ���˵���Ա���̡����׻����ġ�<BR>
            <BR>
            ����������������ԣ���ԨԴ���磬������ͬԴ������,�ʲ���Ϊ�й���ͳ����ѧ�������ɱ𣻶�����΢�����������Ⱦ��е�������۵�����ɫ�ʣ��־���ע����ỷ�����˼ʹ�ϵ�Ľ������̣����й������Ļ���׿���س������С����������֮�ף��ųơ����µ�һ��������<BR>
            <BR>
            ��΢���������ĳ�������Ȼʱ���˺�һ�Ĺ����������<A href="/view/148051.htm" target="_blank">��</A>��ѧ˵��������һ�����������������Ļ����ϣ��Դ��ڱ���������������΢ԫ������ס����ǵ���λ���ص㼰��������������˶��Ĺ��ɣ����費ͬ���������壬����֪�˵����ˣ���������Լ��ķ������ص㡣<BR>
            <BR>
            ��΢�����������Ļ�������ʱ��һ���˵ĳ����ꡢ�¡��ա�ʱ�������������ڣ������ƶ��������ĵ�λ���˸�ƶ�����ݾ̣�Ȼ�������г��ֵܹ������޹�����Ů�����Ʋ��������򹬡�Ǩ�ƹ������ѹ�����ҵ������լ�������¹�����ĸ����������ͼ���Ӷ��۲����λ����Ⱥ��ϣ���֪�䶷�����������ͨ��<strong>�Ļ���</strong>�����ơ���»����Ȩ�����ɣ���ǣ����ע����ֱ仯�Ĺ켣��<BR>
            <BR>
            ��΢�����������ص��ǣ�<BR>
            <BR>
            �����ɽ��˵������׼�������ݾ����������˵�������ǳ���İ��ա�<BR>
            <BR>
            ������΢����ͨ������ʮ������ϵͳ��ȫ���Ԥ��һ����һ���Ĵ��۸��ӵ�����ϵ�͸����������߼���ϵ���ܣ���������ס���ʽ�����ֱ仯����ֽϸߵ������Ժ�����ԡ�<BR>
            <BR>
            ����Ϊ��ˣ�����Ԥ�ⷽ�����ǽ�����Ŀ��ʶ���Ĳ��߻�ä�߿�����ָ���㡢�ſڿ��ӵģ�����䲻��<strong>����</strong>���У�����������Ҳ����Ϊ��ˣ���΢���������˵�ӹ���ԡ������ԡ������ԣ������������Եġ��׾��ȡ����������ȡ�������ϢԤ���ȡ��Ĳ����γɸ߳������ִ������̶Ƚϸߵ�̨���ۡ������ǵȵ�εȻ�ɷ硣<BR>
            <BR>
            Դ���� <BR>
            <BR>
            ��΢�����ݴ�˵��Լ���ڱ���ʱ�ڣ��ɵ��ҵ�һλ��Ҫ������ң���ϣ�ģ�����������΢������ǰ���ǡ�ʮ�˷��ǡ���������������������������Լ����ƽ�������֡�������ͬʱ�����ܵ�ӡ��ռ������Ӱ�졣�����о�������������ȴ�����ڰ��֣���˶���Դ���ʹ��е�������������ϵ�ȱ������̫������ <BR>
            <BR>
            �伮�� <BR>
            <BR>
            ���ڶ���������ֹ������о�����������Խ��٣����µ������͸��١�Ŀǰ��Ϊ���еĶ����伮�Ǵ�Լ200��ǰ�ġ�����ȫ�顷�롶����ȫ����������һЩ�����ĸ��ģ��硶̫΢�����������踳���ȵȡ���һЩ��̨�ִ��˵Ķ��������У��Ƚ�ϵͳ�͹淶�������ʱ��½���׵ġ���΢�������塷���ſ���ġ���΢���������ϸ�����90�����֮ͤ�ġ���������΢����������΢�����ڴ�½һ��ʱ���������ڸ���ԭ�������й��о��ϲ㣬���Ÿĸ￪�ŵĽ��У�һЩ��̨�����ҵĶ������������˴�½������Ĵٽ��˴�½����΢�����о��ķ�չ�� <BR>
        </p>
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
