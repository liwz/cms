<form method="POST" action="" onSubmit="return checkbz();" name="theform">   <tr>
        <TD class=new style="PADDING-BOTTOM: 8px" vAlign=top><strong>�������գ�</strong>
        <select size="1" name="y">
            <?selectStepOptions start=1950 end=$_thisYear selected=$nian1 default=1980?></select>��
        <select name="m" size="1"><?selectStepOptions start=1 end=12 selected=$yue1 default=$_thisMonth?></select>��
        
        <select name="d" size="1"><?selectStepOptions start=1 end=31 selected=$ri1 default=$_thisDay?></select>��
        
        <select size="1" name="hh"> <?selectStepOptions start=0 end=23 selected=$hh1?> </select>��
        
        <select size="1" name="fen"><option value="0">δ֪</option>
		<?selectStepOptions start=0 end=59 selected=$mm1?>
		</select>��
       </TD>
      </tr>  <tr>
        <TD class=new style="PADDING-BOTTOM: 8px" vAlign=top><strong>������</strong>
          <input onkeyup="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" name="name" type="text" value="<?$xing?><?$ming ?>" />
          &nbsp;
          <select size="1" name="b">
<option value="��" <?if ($xingbie=="��")  ?>selected="selected"<?/if?>>����</option>
<option value="Ů" <?if ($xingbie=="Ů")  ?>selected="selected"<?/if?>>Ů��</option>
          </select>&nbsp;<input type="hidden" name="act" value="ok" /><input name="cs" type="submit" value="��ʼ����" />
       </TD>
      </tr></form>