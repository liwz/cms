<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
  <TBODY>
       <tr>
      <TD class=ttop style="PADDING-BOTTOM: 1px" vAlign=top>�Ƶ���ѯ</TD>
    </tr>  <tr>
      <TD class=new3 vAlign=top><div class="date">			<select id="CalYear" onChange="javascript:ChgYear(this);">
									<script language="javascript" type="text/javascript">InitCalYear();</script>
								  </select>
									��
									<select id="CalMonth" onChange="javascript:ChgMonth(this);">
										<script language="javascript" type="text/javascript">InitCalMonth();</script>
									</select>
									��	
								</div></TD>
    </tr><tr>
      <TD class=new3 vAlign=top><div class="date">	
	
								<div id="CalBody"><script language="javascript" type="text/javascript">InitCalendar();</script></div></div></TD>
    </tr>
  </TBODY>
</TABLE><table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
  <TBODY>
       <tr>
      <TD colspan="2" vAlign=top class=ttop style="PADDING-BOTTOM: 1px">�����˳�</TD>
    </tr> <tr>
      <TD colspan="2" vAlign=top class=new style="PADDING-BOTTOM: 8px"><div class="date">ѡ������:
          <select id="obSelect" name="select">
            <option value="1">������</option>
            <option value="2">��ţ��</option>
            <option value="3">˫����</option>
            <option value="4">��з��</option>
            <option value="5">ʨ����</option>
            <option value="6">��Ů��</option>
            <option value="7">�����</option>
            <option value="8">��Ы��</option>
            <option value="9">������</option>
            <option value="10">Ħ����</option>
            <option value="11">ˮƿ��</option>
            <option value="12">˫����</option>
			    </select>
				  <script>
				function setSelect()
				{
						var v=getcookie('default_astro');
						var astro_id= v.substr(3,v.length);
						if (astro_id == "") astro_id=1;
						document.getElementById("ob_"+astro_id).selected = true;
				}
				setSelect();
			</script>
</div></TD>
    </tr>
    <tr>
      <TD class=new style="PADDING-BOTTOM: 8px" vAlign=top>��<A href="javascript:lucktoday()">��������</A></TD>
      <TD class=new style="PADDING-BOTTOM: 8px" vAlign=top>��<A href="javascript:lucktommorrow()">��������</A></TD>
    </tr>
    <tr>
      <TD class=new style="PADDING-BOTTOM: 8px" vAlign=top>��<A href="javascript:luckweek()">��������</A></TD>
      <TD class=new style="PADDING-BOTTOM: 8px" vAlign=top>��<A href="javascript:luckmonth()">��������</A></TD>
    </tr>
    <tr>
      <TD class=new style="PADDING-BOTTOM: 8px" vAlign=top>��<A href="javascript:luckyear()">��������</A></TD>
      <TD class=new style="PADDING-BOTTOM: 8px" vAlign=top>��<A href="../tarot.asp" target="_blank">����ռ��</A></TD>
    </tr>
  </TBODY>
</TABLE>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="b1" style="table-layout:fixed;word-wrap:break-word;">
  <TBODY>
    <tr>
      <TD colspan="3" vAlign=top class=ttop style="PADDING-BOTTOM: 1px">�������</TD>
    </tr>
  <form action=../astro/astro_show.asp method=post target=_blank>
    <tr>
      <TD width="37%" vAlign=top class=new3 style="PADDING-BOTTOM: 8px"><input type=hidden name=flag value=1>
        <span class="new3" style="PADDING-BOTTOM: 8px">
        <select name="astro_m" id="astro_m"  style="width:65px">
          <option value="ĵ����">�а���</option>
          <option>��ţ��</option>
          <option>˫����</option>
          <option>��з��</option>
          <option>ʨ����</option>
          <option>��Ů��</option>
          <option>�����</option>
          <option>��Ы��</option>
          <option>������</option>
          <option>ħ����</option>
          <option>ˮƿ��</option>
          <option>˫����</option>
        </select>
        </span></TD>
      <TD width="35%" vAlign=top class=new3 style="PADDING-BOTTOM: 8px"><span class="new" style="PADDING-BOTTOM: 8px">
        <select name="astro_f" style="width:65px">
          <option value="ĵ����">Ů����</option>
          <option>��ţ��</option>
          <option>˫����</option>
          <option>��з��</option>
          <option>ʨ����</option>
          <option>��Ů��</option>
          <option>�����</option>
          <option>��Ы��</option>
          <option>������</option>
          <option>ħ����</option>
          <option>ˮƿ��</option>
          <option>˫����</option>
        </select>
      </span></TD>
      <TD width="28%" vAlign=top class=new style="PADDING-BOTTOM: 8px"><span class="new" style="PADDING-BOTTOM: 8px">
        <input name="Input" type="submit" value="����"/>
      </span></TD>
    </tr>
  </form>
  <form action=../astro/astro_show.asp method=post target=_blank>
    <tr>
      <TD class=new3 style="PADDING-BOTTOM: 8px" vAlign=top><input type=hidden name=flag value=2>
          <select name="astro_m">
            <option value="������"  style="width:65px">�а���</option>
            <option>��ţ��</option>
            <option>˫����</option>
            <option>��з��</option>
            <option>ʨ����</option>
            <option>��Ů��</option>
            <option>�����</option>
            <option>��Ы��</option>
            <option>������</option>
            <option>ħ����</option>
            <option>ˮƿ��</option>
            <option>˫����</option>
        </select></TD>
      <TD class=new3 style="PADDING-BOTTOM: 8px" vAlign=top><span class="new" style="PADDING-BOTTOM: 8px">
        <select name="astro_f">
          <option value="������" style="width:65px">Ů����</option>
          <option>��ţ��</option>
          <option>˫����</option>
          <option>��з��</option>
          <option>ʨ����</option>
          <option>��Ů��</option>
          <option>�����</option>
          <option>��Ы��</option>
          <option>������</option>
          <option>ħ����</option>
          <option>ˮƿ��</option>
          <option>˫����</option>
        </select>
      </span></TD>
      <TD class=new style="PADDING-BOTTOM: 8px" vAlign=top><span class="new" style="PADDING-BOTTOM: 8px">
        <input name="Input" type="submit" value="����"/>
      </span></TD>
    </tr>
  </form>
  <form action=../astro/astro_show.asp method=post target=_blank>
    <tr>
      <TD class=new3 style="PADDING-BOTTOM: 8px" vAlign=top><input type=hidden name=flag value=3>
          <span class="new3" style="PADDING-BOTTOM: 8px">
          <select name="xiao_m"  style="width:65px">
            <option value=�� selected>����</option>
            <option>ţ</option>
            <option>��</option>
            <option>��</option>
            <option>��</option>
            <option>��</option>
            <option>��</option>
            <option>��</option>
            <option>��</option>
            <option>��</option>
            <option>��</option>
            <option value=��>��</option>
          </select>
        </span></TD>
      <TD class=new3 style="PADDING-BOTTOM: 8px" vAlign=top><span class="new" style="PADDING-BOTTOM: 8px">
        <select name="xiao_f" style="width:65px">
          <option value=�� selected>Ů��</option>
          <option>ţ</option>
          <option>��</option>
          <option>��</option>
          <option>��</option>
          <option>��</option>
          <option>��</option>
          <option>��</option>
          <option>��</option>
          <option>��</option>
          <option>��</option>
          <option value=��>��</option>
        </select>
      </span></TD>
      <TD class=new style="PADDING-BOTTOM: 8px" vAlign=top><span class="new" style="PADDING-BOTTOM: 8px">
        <input name="Input" type="submit" value="����"/>
      </span></TD>
    </tr>
  </form>
  <tr>
    <td colspan="3"></TBODY>
</TABLE>