<%function niangan(tgx,dza)
set fo=server.createobject("scripting.filesystemobject")
path=server.mappath("shensha")
path=path&"/niangan.txt"
shens=""
set fn=fo.opentextfile(path)
while not fn.atendofstream
  strss=fn.readline
  shensha=left(strss,5)
  ganzhi=right(strss,len(strss)-5)
  arr=split(ganzhi,",")
  for i=1 to ubound(arr)+1
     arr2=split(arr(i-1),":")
	' response.write arr(i-1)&"<br>"
	'response.write arr2(0)
	  if ubound(arr2)>0 then
	  if instr(arr2(0),tgx)>0 then
         if instr(arr2(1),dza)>0 then
	     'response.write shensha
		 shens=shens&"-"&shensha
		 exit for
		 else 
	     end if
	  end if
	  end if
  next
wend
niangan=shens
set fo=nothing
end function
'call niangan("��","��","î","��","��")
'response.End()
'�����Ϊ���Ļ����ɷ�ĺ������������Ϊ2�����ֱ������ ,֧%>

<%Function nianzhi(nz,dza,nzx,shunxu)
set fo=server.createobject("scripting.filesystemobject")
path=server.mappath("shensha")
path=path&"/nianzhi.txt"
set fn=fo.opentextfile(path)
tags=0
shens=""
shun=shunxu
while not fn.atendofstream
tags=tags+1
   if tags=3 and shun=0 then 
   fn.skipline
   else
   if tags=4 and shun=1 then
   fn.skipline
   end if
   end if
  strss=fn.readline
  shensha=left(strss,5)
  ganzhi=right(strss,len(strss)-5)
  arr=split(ganzhi,",")
  for i=1 to ubound(arr)+1
     arr2=split(arr(i-1),":")
	' response.write arr(i-1)&"<br>"
	'response.write arr2(0)
	  if ubound(arr2)>0 then
	  if instr(arr2(0),nz)>0 then
         if instr(arr2(1),dza)>0 then
	     shens=shens&"-"&shensha
		 exit for
	     end if
	  end if
	  end if
  next
wend
Pmz=(nzx+10) mod 12
Dkz=(nzx+2) mod 12
Smz=(nzx+3) mod 12
if dz(Pmz)=dza then
shens=shens&"-����"
end if
if dz(dkz)=dza then
shens=shens& "-����"
end if
if dz(smz)=dza then
shens=shens&"-ɥ��"
end if
set fo=nothing
fn.close

nianzhi= shens
end function
'call nianzhi("��","1","1","��",0)
'����֧Ϊ���ģ���ѯ��ɷ���������Ϊ�꣬�£��գ�ʱ֧��������Ů��־λ%>

<%

function yuezhi(yzx,tgx,dzy)
set fo=server.createobject("scripting.filesystemobject")
path=server.mappath("shensha")
path=path&"/yuezhi.txt"
shens=""
set fn=fo.opentextfile(path)
while not fn.atendofstream
  strss=fn.readline
  'response.write strss&"<br>"
  shensha=left(strss,5)
  ganzhi=right(strss,len(strss)-5)
  arr=split(ganzhi,",")
  for i=1 to ubound(arr)+1
     arr2=split(arr(i-1),":")
	' response.write arr(i-1)&"<br>"
	'response.write arr2(0)
	  if ubound(arr2)>0 then
	  if instr(arr2(0),yzx)>0 then
         if(instr(arr2(1),tgx)>0) or (instr(arr2(1),dzy)>0) then
	    shens=shens&"-"&shensha
		 exit for
	     end if
	  end if
	  end if
  next
wend
yuezhi= shens
set fo=nothing
fn.close
end function
'call yuezhi("��","î","��")
'����֧Ϊ��׼������ɷ
%>

<%function rigan(tgx,dza)
set fo=server.createobject("scripting.filesystemobject")
path=server.mappath("shensha")
path=path&"/rigan.txt"
shens=""
set fn=fo.opentextfile(path)
while not fn.atendofstream
  strss=fn.readline
  shensha=left(strss,5)
  ganzhi=right(strss,len(strss)-5)
  arr=split(ganzhi,",")
  for i=1 to ubound(arr)+1
     arr2=split(arr(i-1),":")
	' response.write arr(i-1)&"<br>"
	'response.write arr2(0)
	  if ubound(arr2)>0 then
	  if instr(arr2(0),tgx)>0 then
         if instr(arr2(1),dza)>0 then
	    shens=shens&"-"&shensha
		 exit for
	     end if
	  end if
	  end if
  next
wend
rigan= shens
set fo=nothing
end function
'call rigan("��","��")
'���ո�Ϊ��׼������ɷ
%>

<%
function rizhi(tgx,dza,nzx)
set fo=server.createobject("scripting.filesystemobject")
path=server.mappath("shensha")
path=path&"/rizhi.txt"
shens=""
set fn=fo.opentextfile(path)
while not fn.atendofstream
  strss=fn.readline
  shensha=left(strss,5)
  ganzhi=right(strss,len(strss)-5)
  arr=split(ganzhi,",")
  for i=1 to ubound(arr)+1
     arr2=split(arr(i-1),":")
	' response.write arr(i-1)&"<br>"
	'response.write arr2(0)
	  if ubound(arr2)>0 then
	  if instr(arr2(0),tgx)>0 then
         if instr(arr2(1),dza)>0 then
	     shens=shens&"-"&shensha
		 exit for
	     end if
	  end if
	  end if
  next
wend
Pmz=(nzx+10) mod 12
Dkz=(nzx+2) mod 12
Smz=(nzx+3) mod 12
if dz(Pmz)=dza then
shens=shens&"-����"
end if
if dz(dkz)=dza then
shens=shens&"-����"
end if
if dz(smz)=dza then
shens=shens&"-ɥ��"
end if
rizhi= shens
set fo=nothing
end function
'call rizhi("��","��",1)
'����֧Ϊ��׼������ɷ
'a="d,ddd,d"
'b=split(a,",")
'response.write ubound(b)
%>
<%function rizhu(zhu,rizh,yuetag)
set fo=server.createobject("scripting.filesystemobject")
path=server.mappath("shensha")
path=path&"/rizhu.txt"
set fn=fo.opentextfile(path)
yzhi=right(zhu,1)
itag=0    '������
while not fn.atendofstream
itag=itag+1
  strss=fn.readline
  shensha=left(strss,5)
  ganzhi=right(strss,len(strss)-5)
  arr=split(ganzhi,",")
  if itag<=5 then
  for i=1 to ubound(arr)+1
     arr2=split(arr(i-1),":")
	' response.write arr(i-1)&"<br>"
	'response.write arr2(0)
	  if ubound(arr2)>0 then
	  if instr(arr2(0),zhu)>0 then
         if(instr(arr2(1),rizh)>0 or trim(arr2(1))="") then
	     shens=shens&"-"&shensha
		 exit for
	     end if
	  end if
	  end if
  next
  else if yuetag=1 then
        yzhi=right(trim(zhu),1)
        for i=1 to ubound(arr)+1
     arr2=split(arr(i-1),":")
	' response.write arr(i-1)&"<br>"
	'response.write arr2(0)
	  if ubound(arr2)>0 then
	  if instr(arr2(0),yzhi)>0 then
         if(instr(arr2(1),rizh)>0) then
	     shens=shens&"-"&shensha
		 exit for
	     end if
	  end if
	  end if
  next
        
        end if    

  end if
wend
rizhu=shens
set fo=nothing
end function '������Ϊ��
'call rizhu("����","����",1)
%>
<%
function rizhus(x,y)
set fo=server.createobject("scripting.filesystemobject")
path=server.mappath("shensha")
path=path&"/rizhus.txt"
set fn=fo.opentextfile(path)
while not fn.atendofstream
  strss=fn.readline
  shensha=left(strss,5)
  ganzhi=right(strss,len(strss)-5)
  arr=split(ganzhi,",")
  for i=1 to ubound(arr)+1
     arr2=split(arr(i-1),":")
	' response.write arr(i-1)&"<br>"
	'response.write arr2(0)
	  if ubound(arr2)>0 then
	  if instr(arr2(0),x)>0 or trim(arr2(0))="" then
         if instr(arr2(1),y)>0 then
	     shens=shens&"-"&shensha
		 exit for
	     end if
	  end if
	  end if
  next
wend
rizhus= shens
set fo=nothing
end function
'call rizhus("�ﺥ","���")
'��������ʱ������ɷ
%>

<%
function sqgr(x,y,z,w)
gss="����,����,����,����,����,����,����,����"
sq1="î����"
sq2="�ұ���"
two=0
three=0
three1=0
if instr(gss,x)>0 then
two=two+1
gss=replace(gss,x,"")
end if
if instr(gss,y)>0 then
two=two+1
gss=replace(gss,y,"")
end if
if instr(gss,z)>0 then
two=two+1
gss=replace(gss,z,"")
end if
if instr(gss,w)>0 then
two=two+1
gss=replace(gss,w,"")
end if
if two>1 then 
response.write "���ɷ"
end if
if instr(sq1,right(x,1)) then
three=three+1
sq1=replace(sq1,right(x,1),"")
end if 
if instr(sq1,right(y,1)) then
three=three+1
sq1=replace(sq1,right(y,1),"")
end if
if instr(sq1,right(z,1)) then
three=three+1
sq1=replace(sq1,right(z,1),"")
end if
if instr(sq1,right(w,1)) then
three=three+1
sq1=replace(sq1,right(w,1),"")
end if

if instr(sq2,left(x,1))>0 then
three1=three1+1
sq2=replace(sq2,left(x,1),"")

end if 
if instr(sq2,left(y,1))>0 then
three1=three1+1
sq2=replace(sq2,left(y,1),"")
end if 
if instr(sq2,left(z,1))>0 then
three1=three1+1
sq2=replace(sq2,left(z,1),"")
end if 
if instr(sq2,left(w,1))>0 then
three1=three1+1
sq2=replace(sq2,left(w,1),"")
end if 
if three>2 or three1>2 then
response.write "�������"
end if
end function
'call sqgr("����","����","dd","����")
'��������ʱ������ɷ
'w=1
'q=1

'response.write w and q 
%>