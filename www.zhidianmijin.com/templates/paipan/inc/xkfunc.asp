
<%
function plj(shanx)
sx=shanx
SxId=left(Sx,(len(Sx)-4))
SxName=right(Sx,4)
shan=left(SxName,1)
dim pojun(11)
pojun(0)="�ƾ�"
pojun(1)="<font color=red>����</font>"
pojun(2)="����"
pojun(3)="�ƾ�"
pojun(4)="<font color=red>����</font>"
pojun(5)="<font color=red>̰��</font>" 
pojun(6)="�ƾ�"
pojun(7)="<font color=red>��</font>"
pojun(8)="����"
pojun(9)="�ƾ�"
pojun(10)="<font color=red>����</font>"
pojun(11)="»��"
%>
<%dim sk(11)
if sxid mod 2=1 then
tag=true
else
tag=false
end if
sxid=cint(sxid)+1
          starts=round((sxid)/2)
		  
		  if starts=0 then
		  starts=1
		  end if
		 
          if tag then
          for i=0 to 11
          sk((starts+i-1)mod 12)=pojun(i)
          next
          else
        for i=0 to 11
          sk((starts-i+12-1)mod 12)=pojun(i)
          next
       end if
        

%>
<table width="600" align="center">
  <tr>
    <td align="center">ˮ���ڣ�<%=shan%></td>
  </tr>
  <tr>
    <td height="156" align="center" valign="top">�������Щ����Щ����Щ�����<br>
      ��<%=sk(5)%>��<%=sk(6)%>��<%=sk(7)%>��<%=sk(8)%>��<br>
      ���ȱ����綡��δ���������<br>
      �������੤���੤���੤���� <br>
      ��<%=sk(4)%>��&nbsp;&nbsp;&nbsp;&nbsp;��&nbsp;&nbsp;&nbsp;&nbsp;��<%=sk(9)%>��<br>
      �����㩦 &nbsp;&nbsp; �� &nbsp;&nbsp; ��������<br>
      �������੤���੤���੤���� <br>
      ��<%=sk(3)%>��&nbsp;&nbsp;&nbsp;&nbsp;��&nbsp;&nbsp;&nbsp;&nbsp;��<%=sk(10)%>��<br>
      ��î�ҩ� &nbsp;&nbsp; �� &nbsp;&nbsp; ����Ǭ��<br>
      �������੤���੤���੤���� <br>
      ��<%=sk(2)%>��<%=sk(1)%>��<%=sk(0)%>��<%=sk(11)%>��<br>
      �����ש����ީ��ӹ辶���ɩ�<br>
      �������ة����ة����ة�����</td>
  </tr>
</table>
<%end function %>



<%function minggua(y,s,ys,ms)
nian=y
sex=s
lyp=9-((nian-110)mod 9)
if lyp=0 then
lyp=9
end if
if sex="male" then
ming=9-((nian-110)mod 9)
else
ming=(nian-104)mod 9
end if
if ming=0 then
ming=9
end if
if ming=5 then
if sex="male" then
ming=2
else
ming=8
end if
end if
'response.Write(ming)
%>
<%dim mg(8)
  dim ly(8)
ly(0)=lyp
mg(0)=ming
for i=1 to 8
mg(i)=(mg(0)+i)mod 9
ly(i)=(ly(0)+i)mod 9
if mg(i)=0 then
mg(i)=9
end if

if ly(i)=0 then
ly(i)=9
end if
next

if sex="male" then
sex="��"
else
sex="Ů"
end if
%>
<%
nian=ys
yue=ms
%>
<%dim dz(11)
dim liuy(8)
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
dy=(nian-724)mod 12
dizhi=dz(dy)
select case dizhi
case "��","��","î","��"  lyz=8
case "��","��","��","δ"  lyz=5
case "��","��","��","��"  lyz=2
end select
lyz=(lyz-yue+1+9)mod 9
if lyz=0 then
lyz=9
end if
liuy(0)=lyz
%>
<%for i=1 to 8
 liuy(i)=(liuy(0)+i)mod 9
 if liuy(i)=0 then
 liuy(i)=9
 end if
next
for i=0 to 8
select case mg(i)
   case 1 mg(i)="<font color=red>һ</font>"
   case 2 mg(i)="<font color=red>��</font>" 
   case 3 mg(i)="<font color=red>��</font>" 
   case 4 mg(i)="<font color=red>��</font>" 
   case 5 mg(i)="<font color=red>��</font>" 
   case 6 mg(i)="<font color=red>��</font>" 
   case 7 mg(i)="<font color=red>��</font>" 
   case 8 mg(i)="<font color=red>��</font>" 
   case 9 mg(i)="<font color=red>��</font>" 
end select
next
for i=0 to 8
ly(i)="<font color=green>"&ly(i)&"</font>"
liuy(i)="<font color=blue>"&liuy(i)&"</font>"
next
%>
<table width="194" height="200" align="center">
  <tr> 
    <td height="22" align="center" valign="top"><p><%=nian%><strong>��</strong><%=dz((yue+1)mod 12)%><strong>��</strong></p>
     
      <p><strong>���꣺</strong><%=nian%><strong> �Ա�:</strong><%=sex%></p></td>
  </tr>
  <tr> 
    <td height="141" align="center" valign="top">�������Щ����Щ�����<br>
      ��<%=ly(8)%>&nbsp;<%=liuy(8)%>&nbsp;��<%=ly(4)%>&nbsp;<%=liuy(4)%>&nbsp;��<%=ly(6)%>&nbsp;<%=liuy(6)%>&nbsp;��<br>
      ��&nbsp;<%=mg(8)%> �� <%=mg(4)%> �� <%=mg(6)%> ��<br>
      �������੤���੤����<br>
      ��<%=ly(7)%>&nbsp;<%=liuy(7)%> ��<%=ly(0)%>&nbsp;<%=liuy(0)%>&nbsp;��<%=ly(2)%>&nbsp;<%=liuy(2)%>&nbsp;��<br>
      ��&nbsp;<%=mg(7)%> �� <%=mg(0)%> �� <%=mg(2)%> ��<br>
      �������੤���੤����<br>
      ��<%=ly(3)%>&nbsp;<%=liuy(3)%> ��<%=ly(5)%>&nbsp;<%=liuy(5)%>&nbsp;��<%=ly(1)%>&nbsp;<%=liuy(1)%>&nbsp;��<br>
      �� <%=mg(3)%> �� <%=mg(5)%> �� <%=mg(1)%> ��<br>
      �������ة����ة�����</td>
  </tr>
</table>
<%end function%>