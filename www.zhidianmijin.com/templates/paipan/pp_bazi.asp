<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<TITLE>����������������-��������</TITLE>

<!--#include file="top.asp"--><!--#include file="../inc/conn.asp"--><!--#include file="../inc/getuc.asp"-->
<div id="right">
<!--#include file="right.asp"-->
</div>
<div id="left">
<div style="width:100%">
<%if request("act")="ok" then%>
<!--#include file=inc/yzy.asp-->
<!--#include file=inc/sizhu.asp-->
<!--#include file=inc/yy.asp-->
<!--#include file=inc/pp_bz.asp-->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" id="paipanTable">
    <tbody>
      <tr>
        <td colspan="2" class="ttop">�������̽��</td>
      </tr>
      <tr>
        <td class="new"><strong>������</strong></td>
        <td class="new"><%=name%>��<strong>�����أ�</strong><%=area%>����<strong>���̷�ʽ��</strong>��ͨ��ʽ����</td>
      </tr> <tr>
        <td class="new">
          <strong>������</strong></td>
        <td class="new"><%=borntime%>��<%if taiyang="0" then%><%else%><strong>��̫������ʱ�䣺</strong><%=truedate%>&nbsp;<%end if%>  <strong>ũ����</strong><%call form_load(truedate,ntime,cyue,cri,cnian)
response.Write(ntime)%></td>
      </tr>
      <tr>
        <td colspan="2" class="new">&nbsp;</td>
      </tr>   <tr>
        <td class="new"><strong>̥Ԫ��</strong> </td>
        <td class="new"><% call taiy(tm,dm)%></td>
      </tr>   <tr>
        <td class="new"><strong>������</strong></td>
        <td class="new"><%call mingg(dm,tdz,minggongx)%></td>
      </tr>   <tr>
        <td colspan="2" class="new">&nbsp;</td>
      </tr>   <tr>
        <td class="new"><%call xunkong(ygz,yxk,yxs)
	call xunkong(mgz,mxk,mxs)
	call xunkong(dgz,dxk,dxs)
	call xunkong(tgz,txk,txs)%><strong>Ѯ�գ�</strong></td>
        <td class="new"><font color=blue><%=yxk%>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<%=mxk%>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<%=dxk%>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<%=txk%></font></td>
      </tr>
      <tr>
        <td class="new"><strong>���ˣ�</strong></td>
        <td class="new">�����ڳ�����<%=qysj%>��ʼ����</td>
      </tr>
      <tr>
        <td class="new"><strong>���ˣ�</strong>	</td>
        <td class="new">�����ڹ���<%=zysj%>����</td>
      </tr>
      <tr>
        <td width="9%" valign="middle" class="new"><strong><%if sex=1 then
	response.write "Ǭ�죺"
	else
	response.write "���죺"
	end if%> </strong> </td>
        <td width="91%" class="new"><font color=blue><% call sshen(ty,dtg)%>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <% call sshen(tm,dtg)%>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <%response.write "��Ԫ"%>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <% call sshen(ttg,dtg)%></font><br><font color=red><strong><%=ygz%></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><%=mgz%></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><%=dgz%></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><%=tgz%></strong>&nbsp;&nbsp;&nbsp;<strong>��<%=dxk%>�գ�</strong></font><br><%  
	  dim dc1(2),dc2(2),dc3(2),dc4(2)
  dc1(0)=left(dc(dy),1)
  dc2(0)=left(dc(dm),1)
  dc3(0)=left(dc(ddz),1)
  dc4(0)=left(dc(tdz),1)
  dc1(1)=mid(dc(dy),2,1)
  dc2(1)=mid(dc(dm),2,1)
  dc3(1)=mid(dc(ddz),2,1)
  dc4(1)=mid(dc(tdz),2,1)
  dc1(2)=mid(dc(dy),3,1)
  dc2(2)=mid(dc(dm),3,1)
  dc3(2)=mid(dc(ddz),3,1)
  dc4(2)=mid(dc(tdz),3,1)
for tagk=0 to 2
  	if tagk<>0 then
  		response.Write("<br>������ ")
  		if jg="1" then%>��<%end if
  	end if
  	%><%=dc1(tagk)%><%
  	if dc1(tagk)<>"" then
		call sshen(tgorder(dc1(tagk))-1,dtg) 
  	else
		response.Write("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;")
  	end if
	%>&nbsp;&nbsp;&nbsp;&nbsp;<%=dc2(tagk)%><%
	if dc2(tagk)<>"" then
		call sshen(tgorder(dc2(tagk))-1,dtg)
	else
		response.Write("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;")
	end if	
	%>&nbsp;&nbsp;&nbsp;&nbsp;<%=dc3(tagk)%><%
	if dc3(tagk)<>"" then
		call sshen(tgorder(dc3(tagk))-1,dtg)
	else
		response.Write("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;")
	end if
	%>&nbsp;&nbsp;&nbsp;&nbsp;<%=dc4(tagk)%><%
	if dc4(tagk)<>"" then
		call sshen(tgorder(dc4(tagk))-1,dtg)
	else
		response.Write("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;")
	end if	
	%>
<%next%></td>
      </tr>
      <tr>
        <td class="new"><strong>������</strong></td>
        <td class="new"><font color=#408000>
          <% call nayin(ygz)%>
&nbsp;&nbsp;
      <% call nayin(mgz)%>
&nbsp;&nbsp;
      <% call nayin(dgz)%>
&nbsp;&nbsp;
      <% call nayin(tgz)%>
        </font></td>
      </tr><%if quanpai=1 then%>
      <tr>
        <td colspan="2" class="new">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" class="new"><strong>��ɷ��</strong></td>
      </tr>  <tr>
        <td colspan="2" class="new"><%
		  narr=niangan(tg(ty),dz(dy))&nianzhi(dz(dy),dz(dy),dy,sx)&yuezhi(dz(dm),tg(ty),dz(dy))&rigan(tg(dtg),dz(dy))&rizhi(dz(ddz),dz(dy),ddz)
		   
			 yarr=niangan(tg(ty),dz(dm))&nianzhi(dz(dy),dz(dm),dy,sx)&yuezhi(dz(dm),tg(tm),dz(dm))&rigan(tg(dtg),dz(dm))&rizhi(dz(ddz),dz(dm),ddz)
			rarr=niangan(tg(ty),dz(ddz))&nianzhi(dz(dy),dz(ddz),dy,sx)&yuezhi(dz(dm),tg(dtg),dz(ddz))&rigan(tg(dtg),dz(ddz))&rizhi(dz(ddz),dz(ddz),ddz)
			sarr=niangan(tg(ty),dz(tdz))&nianzhi(dz(dy),dz(tdz),dy,sx)&yuezhi(dz(dm),tg(ttg),dz(tdz))&rigan(tg(dtg),dz(tdz))&rizhi(dz(ddz),dz(tdz),ddz)
		    
			narr=narr&rizhu(tg(ty)&dz(dy),tg(dtg)&dz(ddz),0)&rizhus(tg(dtg)&dz(ddz),tg(ttg)&dz(tdz))
			
			yarr=yarr&rizhu(tg(tm)&dz(dm),tg(dtg)&dz(ddz),1)&rizhus(tg(dtg)&dz(ddz),tg(ttg)&dz(tdz))
			rarr=rarr&rizhu(tg(dtg)&dz(ddz),tg(dtg)&dz(ddz),0)&rizhus(tg(dtg)&dz(ddz),tg(ttg)&dz(tdz))
			sarr=sarr&rizhu(tg(ttg)&dz(tdz),tg(dtg)&dz(ddz),0)
			
			ssn=split(narr,"-")
			ssy=split(yarr,"-")
			ssr=split(rarr,"-")
			sss=split(sarr,"-")
			if ubound(ssn)>ubound(ssy) then
				longs=ubound(ssn)
			else
				longs=ubound(ssy)
			end if
			
			if ubound(ssr)>longs then
				longs=ubound(ssr)
			end if
			
			if ubound(sss)>longs then
				longs=ubound(sss)
			end if
			
			for iarr=1 to longs
			
			if iarr<=ubound(ssn) then
			  if len(trim(ssn(iarr)))=2 then
			     temps=ssn(iarr)&" &nbsp;&nbsp;&nbsp;&nbsp;"
			  else
			     temps=ssn(iarr)
			  end if
			else
			  temps="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
			end if
			if iarr=1 then
			  temps="<font color=blue>"&temps
			else
			  temps=""&temps
			end if
			
			if iarr<=ubound(ssy) then
			     if len(trim(ssy(iarr)))=2 then
			     	temps=temps&"&nbsp;"&ssy(iarr)&" &nbsp;&nbsp;&nbsp;&nbsp;"
			     else
			     	temps=temps&"&nbsp;"&ssy(iarr)
			     end if			
			else
					temps=temps&"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
			end if
			
			if iarr<=ubound(ssr) then
			
			 if len(trim(ssr(iarr)))=2 then
			     temps=temps&"&nbsp;"&ssr(iarr)&" &nbsp;&nbsp;&nbsp;&nbsp;"
			 else
			     temps=temps&"&nbsp;"&ssr(iarr)
			 end if			
			else
			temps=temps&"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
			end if
			
			if iarr<=ubound(sss) then
			 if len(trim(sss(iarr)))=2 then
			     temps=temps&"&nbsp;"&sss(iarr)&" &nbsp;&nbsp;&nbsp;&nbsp;"
			 else
			     temps=temps&"&nbsp;"&sss(iarr)
			 end if
			else
			temps=temps&"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
			end if
			response.Write(temps)
			if iarr<>longs then
				response.Write("<br>")
				if jg="1" then%>��<%end if
			end if
				'temps=""
			next
%></td>
      </tr>
      <tr>
        <td class="new"><strong>������</strong></td>
        <td class="new"><%dyy=qyday
		   
		  for i=0 to 9
		   if dyy=qyday then
			dayun="1-"&(dyy-1)
			else
			dayun=dyy-10
			end if
		   if sx=1 then
		   t=(tm+i) mod 10
		   d=(dm+i)mod 12
		   else
		   t=(tm-i+10) mod 10
		   d=(dm-i+12) mod 12
		   end if
		  '�г�����%>
              <font color=#408000>
                <%gz=tg(t)&dz(d)
		  call nayin(gz)%>
              </font>
              <%dyy=dyy+10
		  next%></td>
      </tr>
      <tr>
        <td class="new"><strong>ʮ�� </strong></td>
        <td class="new"><%dyy=qyday
		  for i=0 to 9
		   if dyy=qyday then
			dayun="1-"&(dyy-1)
			else
			dayun=dyy-10
			end if
		   if sx=1 then
		   t=(tm+i) mod 10
		   d=(dm+i)mod 12
		   else
		   t=(tm-i+10) mod 10
		   d=(dm-i+12) mod 12
		   end if
		  '�г�����%>
              <font color=blue>
                <%call sshen(t,dtg)%>&nbsp;&nbsp;              </font>
              <%dyy=dyy+10
		  next%>      </td>
      </tr>
      <tr>
        <td class="new"><strong>���ˣ�</strong></td>
        <td class="new"> <%dyy=qyday
		  for i=0 to 9
		   if dyy=qyday then
			dayun="1-"&(dyy-1)
			else
			dayun=dyy-10
			end if
		   if sx=1 then
		   t=(tm+i) mod 10
		   d=(dm+i)mod 12
		   else
		   t=(tm-i+10) mod 10
		   d=(dm-i+12) mod 12
		   end if
		  '�г�����%>
              <font color="#FF0000"><%=tg(t)&dz(d)%></font>&nbsp;&nbsp;
          <%dyy=dyy+10
		  next%></td>
      </tr>
      <tr>
        <td class="new"></td>
        <td class="new"><%dyy=qyday
		   
		  for i=0 to 9
		   if dyy=qyday then
			dayun="1-"&(dyy-1)
			else
			dayun=dyy-10
			end if
		   if sx=1 then
		   t=(tm+i) mod 10
		   d=(dm+i)mod 12
		   else
		   t=(tm-i+10) mod 10
		   d=(dm-i+12) mod 12
		   end if
		  '�г�����%>
              <font color=blue><%=dayun&"��"%></font>&nbsp;&nbsp;
          <%dyy=dyy+10
		  next%></td>
      </tr>
      <tr>
        <td class="new"><strong>ʼ�ڣ�</strong> </td>
        <td class="new"><%dayu=year(truedate)
		   
		   tag=true
		  for i=0 to 9 
		  if i<2 then
		  if i=0 then
		  dayunn=dayu
		  else
		  dayunn=dayu+qyday
		  end if
		  else
		 dayunn=dayunn+10
		  end if 
		  tag=false
		  %>              <font color="#FF0000"><%=dayunn%></font>&nbsp;&nbsp;<%  
		  next%></td>
      </tr>
      <tr>
        <td class="new"><strong>����:</strong></td>
        <td class="new"><%
		t=(ty-1)mod 10
		 d=(dy-1)mod 12
	     t1=t
		d1=d
	    starx=year(truedate)
		stary=starx+qyday
        substar=qyday
		 for i=1 to 10
		
		 %>
            
                <%
		if not liutag then
		liutag=true
else
		end if
		%>
		
		<%if substar>0 then
		t1=(t1+1)mod 10
		d1=(d1+1)mod 12
		substar=substar-1
		 %><font color="#0000ff"><%=tg(t1)&dz(d1)%>&nbsp;&nbsp;</font>
                <%else
            end if
			%>
              <%for j= 0 to 10
		    t2=(((stary+i+j*10-1925) mod 10)+10)mod 10
			d2=(((stary+i+j*10-1925) mod 12)+12) mod 12	
		   %><font color="#0000ff"><%=tg(t2)&dz(d2)%>&nbsp;&nbsp;</font>
              <%next
		  '����%>
           <br><%if jg="1" then%>��<%end if%>
            <%next
		'�����ŷ�%></td>
      </tr>
<%end if%>
    </table>
<%else%>

  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" >
<tbody><form name="theform" onSubmit="return checkjx();" method="post" action="">
<input type="hidden" name="act" value="ok" /><tr>
  <td width="100%" class="ttop">����������������ϵͳ    </td>
    </tr>
  <tr>
    <td class="new">������
      <input name="name" type="text" id="name" value="<%=xing&ming%>" size="12"> 
      �����أ� 
      <input name="area" type="text" id="csd" size="25"> 
      �Ա�: 
      <input name="sex" type="radio" value="1" checked>
      ��
      <input type="radio" name="sex" value="0">
      Ů </td>
  </tr>
  <tr>
    <td class="new">������ 
      <select name="DateType" size="1" style="font-size: 9pt">
  	<option value="1"<%if DateType="1" then%> selected<%end if%>>����</option>
  	<option value="0"<%if DateType="0" then%> selected<%end if%>>����</option>
  	</select>
      <select name="year" size="1" id="year" style="font-size: 9pt">
        >
        <%for i=1950 to year(date())%>
        <option value="<%=i%>" <%if i=1981 then%> selected<%end if%>><%=i%></option>
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
  <option value="<%=i%>" ><%=DiZhi(i)%>&nbsp;<%=i%></option>
  <%next%>
</select>
��
<select name="minute" size="1" id="minute" style="font-size: 9pt">
  <option value="0">δ֪</option>
  <%for i=0 to 59%>
  <option value="<%=i%>"><%=i%></option>
  <%next%>
</select>
�� </td>
  </tr><!--
onkeyup="value=value.replace(/[^\d]/g,'')" 
-->
<tr id="fs1" style="display:none">
<td class="new">��̫��ʱ�������������ڵ������ȣ� 
<input name=jd1 type="text" value="120" size="10" maxlength="4" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" /> 
�� 
<input name=jd2 type="text" value="0" size="10" maxlength="4" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))" /> 
�� ��<a href="jingdu.asp" target="_blank"><font color="red">�������Ȳ�ѯ</font></a>�� </td>
</tr>
<tr id="fs2"  style="display:block">
<td class="new">��ͨ��ʽ�������������������ֵ</td>
</tr>
<tr>
<td  class="new">
<input id=taiyang name="taiyang" type="radio" onClick="javacript:fs1.style.display='none';fs2.style.display='block';" value="0" checked="" />
<label for="taiyang"style="cursor:hand;" >����ͨ��ʽ��</label>����������
<input id=taiyang1 type="radio" name="taiyang" value="1" onClick="javacript:fs1.style.display='block';fs2.style.display='none';" />
<label for="taiyang1"style="cursor:hand;" >����̫��ʱ����</label></td>
</tr>
<tr>
<td  class="new"><input id=jp name="quanpai" type="radio" value="0" />
<label for="jp"style="cursor:hand;" >����</label>������

<input name="quanpai" type="radio" id=wq value="1" checked />
<label for="wq" style="cursor:hand;" >
ȫ��</label></td>
</tr> 
<td align="center" class="new"><input type="submit" value="���߰�������" name="submit" style="cursor:hand;" /> </td>
</tr>
</form>
</table><%end if%>
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" >
    <tbody>
   
      <tr>
        <td width="100%" class="ttop">�������ֳ����������</td>
      </tr>
      <tr>
        <td class="new"><P><BR><FONT color=#0000ff><STRONG>�Ƚٰ���<BR></STRONG></FONT>�ȼ�ٲ����ո���ͬ��֮��������ո�֮������׼��ף��ȣ����ң��٣�������»����î���У�֮�࣬����һ���˴򲻹��˼ң����ֵܰ�æ��׳�������ܴ���˼ҡ��ո���������ʤ�βƹ���ʳ֮���ģ������Ƚ���Ϊϲ�������вƶ�������ϲ�Ƚٰ���˲ƣ����й�ɱ����������ϲ�Ƚٰ���й�ɱ��������ʳ����������ϲ�Ƚٰ���й��Ҳ����������֮��������֮���ֵ����飬���ѵ���������ϵ���ã��������Ǳؿ��ֵ�����֮�����ոɱ�ǿ���ּ��Ƚ���������Ϊ��Ҳ��</P>
<P><STRONG><FONT color=#0000ff>�Ƚٶ�ƣ�</FONT></STRONG><BR>�ֽС��Ƚ����ơ����ո�ǿ�������ж�Ƚ٣���Ƚ�֮����ȴΪ���ף������ϼ������Ｋ�ط������в��Ǳ�Ϊ�ո�����ȴ���Ƚ�����ȥ���������硣�Ƚٹ��������ɱ�Ʒ��Ƚٷ�Ϊ����������Ƚٶ�ƣ�һ������ÿ����ģ����ù��ǿ���˷ѳ��ԣ���һ���ֶ���С�˶�ƣ��ֵ������壬�������ˣ�����������ƶ��ưܡ������ո�ǿ���Ƚٶ����Ϊ���������й�ɱ��֮���������˹�ɱ���硣 </P>
<P><BR><STRONG><FONT color=#0000ff>�ƶ�������</FONT></STRONG><BR>�ֽС�������˥���������ո�����ƫ����֮��ǿ����������ʤ��֮����Ʒ�������������С��Ҫ��һ�ٽﶫ�������ƶ������ߣ����������й�ɱ���������ɱ�����������������ʤ�ԡ�����������ʳ�ˣ�й���ո�Ԫ�����ڲ��ϣ�������ء��ƶ��������˼����бȽٰ���Ϊ�����������Ƚ��򷢣�������ӡ���༪��Ψ��Ƚ��Ʋ��Ի�ӡ�� </P>
<P><BR><STRONG><FONT color=#0000ff>̰�ƻ�ӡ��</FONT></STRONG><BR>�ֽС�������ӡ�����ո�����ϲӡ�������ոɣ���ϲ���ǣ���ƿɿ�ӡҲ����������ӡΪ���񣬶��������в��ǳ塢��ӡ�ǣ���Ϊ����֮�ף�������ˣ�һ�߱������磬����ְҵ����������ѧҵ�Ѿͣ���������»����������ĸ�ף������������࣬���߾�����Ǩ������Ϊ���鸡����ʵѧ��������ϱ������������ȣ��ط�һ�����ֿ��˲�ӡ���ں���������֮��������֮���������֣��򶪵���ְ��Ҳ�����º����������ɥ������������ӡ�����бȽ��ƲƷ��ѣ�������ͬ��</P>
<P><STRONG><FONT color=#0000ff>ӡ緻���</FONT></STRONG><BR>�ո�����������ƫӡ�����������ӡ�ǻ����ɲ��ǿ�ӡ��ϲ��ɱ��ӡ���������ոɱ�ǿ������ӡ����������������֮ӡ���գ�����Ϊ��������ϲ���ǿ�ȥ����֮ӡ���������ͬ��</P>
<P><STRONG><FONT color=#0000ff>��ӡ���� ��ɱӡ��������</FONT></STRONG><BR>���й�ɱ���գ���ӡ��й��ɱ֮������������ǿӡ����ϲ��ɱ��ӡ�����ƣ�����ӡ��ӡ��������˫ȫ��ɱ����ӡ��ӡ����ɱ��ɱӡ�����������Դ</P>
<P><STRONG><FONT color=#0000ff>�������٣�</FONT></STRONG><BR>������������������ϲ���������Ϊ��Ҳ��</P>
<P><STRONG><FONT color=#0000ff>�������ƣ�</FONT></STRONG><BR>���в��񣬱��Ƚٶ�ȥ����ϲ��ɱ��ȥ�Ƚ٣�ʹ��Ϊ�ո������˹�������Ҳ��</P>
<P><STRONG><FONT color=#0000ff>��ɱ���ӣ�</FONT></STRONG><BR>���м��й��ǣ�������ɱ���ҹ�ɱ�ɵ����˷��ոɣ����ײ��ɲ⡣�ո������Ƚٶ࣬ϲ��ɱ��죬�ո�����ӡ�Ƕ࣬���ɹ�ɱ����˥����ɱ���ӣ���Ȼƶ������ǿ����ɱ���ӣ���ȥ����ɱ����ȥɱ���٣��������������ɱ���ӣ�ϲӡ�ǻ���ɱ�����գ�ϲ�Ƚٴ����ոɶ��ܹ�ɱ֮�ˡ����ոɲ�������ϲʳ����ȥ��ɱ֮������������ϲӡ�ǻ���ɱ��������ʳ��Ҳ����֪�������ַ��й�������������ɡ�</P>
<P><STRONG><FONT color=#0000ff>�ٱ�Ϊ��</FONT></STRONG><BR>�ֽС���˥�������ո�˥�������ع��������ոɣ��˷ǹ�Ҳ��ʵ�˿���֮��Ҳ���ٶ��޹٣�����ɱ���죬�����ɲ⣬Ψϲӡ�ǻ�֮����������вƼ��˷�Ƶأ���������</P>
<P><STRONG><FONT color=#0000ff>��ʳй�㣺</FONT></STRONG><BR>�ո�ǿ���Ƚٶ࣬�޹�ɱ�����˹ٻ�ʳ��й�ո�֮���������кͣ���Ϊй�㣬����ϲ���в��ǣ���Ƚ�����ʳ����ʳ�����ǣ���Ϊ����Ҳ���ո�˥�����ٲ��˷���ʳ��й�ո�֮���������ϼ���Ҳ������ȡ�Ƚٴ���й������ӡ����ȥ��ʳ���������ͬ��</P>
<P><STRONG><FONT color=#0000ff>ƫӡ��ʳ��</FONT></STRONG><BR>�ֽС�ʳ����ɡ����ո�ǿ���޹�ɱ����ʳ��й���Գ��кͣ���������Ϊ����ȴ����ƫӡ����ȥʳ����ʹ�ոɸ�������Ϊ��Ҳ���˷Ƕ�ʳ��ƫӡҲ���˹١���ӡ����֮������ʳй����ã����˼�ӡ��Ҳ������֮�����˲��ǿ�ȥ��ƫӡΪ����</P>
<P><STRONG><FONT color=#0000ff>�˹ټ��٣�</FONT></STRONG><BR>�����˹�Ϊ�ã������˹���ʢ����ϲ���ǣ�Ե�˹��������ս���������ʤ�ԣ�����ͬ�ˡ����˹ټ���֮�����ѷֱ棬����������� </P>
<P><STRONG><FONT color=#0000ff>ʳ����ɱ��</FONT></STRONG><BR>�ո�˥����ʳ��������ɱ����ɱ�䲻�˼�֮��������ʳ����ȥ��ɱҲ�����ո�������ɱ��ǿ����ӡ�ǣ�Ψ��ʳ���Ʒ���ɱ����ΪȨ��Ҳ����ʫ�ƣ�ƫ�����ƻ�ΪȨ�����ֵ��Ʒ����ꡣ�˲���ʳ�����ɱ���˹������ɱ������ͬ��Ψ�ո�ǿ����ɱ����������Ҳ�������в�ɱ����������ɱҲ���ո�ǿ����ɱǿ�����ƣ��������ƹ�ͷ���������ʳ����ɱ���ƹ��ݣ���Ϊ���ף����ܷ���ո�˥����ɱ��ǿ��������Ҳ������ӡ緻�ɱ����Ϊ�ϡ�</P>
<P><STRONG><FONT color=#0000ff>���м�ɱ��</FONT></STRONG><BR>�ո�ǿ�����������У�ϲ����ɱ������ɱ�����ƣ������м�ɱ����Ȩ���ԡ�����ɱ���أ�����������֮������ӡ��֮�����������Ʒ��ˣ�����ӡ�ˣ���������ӡ�ˣ������в��˿�ӡ�����������м�ɱ�ߣ�����ɱΪ�ѣ���ӡ��ɱ����һ���ܺá�</P>
<P><STRONG><FONT color=#0000ff>���Ǵ��У�</FONT></STRONG><BR>�ո�ǿ���������У�ϲ�����٣���ϲ����ͨ��͸�ɣ��Ʒ����У������Ǵ��У�����֮��Ȩ�����������ض������������˲����٣���ɱ��٣��������硣Ψ���в�ϲ�����ڵ�֧����Ҳ����Ϊ����֮�ף������е��꣬������ͷ֮�������îΪ�У���ϲ�����壬������Ϊ�У���ϲ�����壬�������ͬ��</P>
<P><BR><BR></SPAN></P></td>
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
