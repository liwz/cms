<?exit?>
<!--{if empty($_SGLOBAL['inajax'])}-->
<div id="footer">
	<div id="footer_top">
		<p class="good_link">
			<a href="{S_URL}/index.php">$_SCONFIG[sitename]</a> | 
			<a href="#action/site/type/map#">վ���ͼ</a> | 
			<a href="#action/site/type/link#">��������</a> | 
			<a href="mailto:$_SCONFIG[adminemail]">��ϵ����</a>
		</p>
		<form action="{S_URL}/batch.search.php" method="post">
		<input type="hidden" name="formhash" value="<!--{eval echo formhash();}-->" />
		<input type="hidden" name="searchname" id="searchname" value="subject" />
		<input type="hidden" value="news" name="type">
		<p class="footer_search">
			<select name="searchtxt" id="searchtxt" onchange="changetype();">
				<option value="����">����</option>
				<option value="����">����</option>
				<option value="����">����</option>
			</select>
			<input class="input_tx" type="text" value="" name="searchkey" size="30"/>
			<input class="input_search" type="submit" value="����" name="searchbtn"/>
		</p>
		</form>
	</div>
	<div class="copyright">
		<p id="copyright">
		Powered by <a href="http://www.supesite.com" target="_blank">SupeSite</a> <em title="<?=S_RELEASE?>"><?=S_VER?></em> &copy; 2001-2009 <a href="http://www.comsenz.com" target="_blank">Comsenz Inc.</a>
		</p>
		<p>
		<!--{eval debuginfo();}-->
		</p>
	</div>
</div><!--footer end-->
<script language="javascript">
function changetype() {
	if($('searchtxt').value == '����') {
		$('searchname').value = 'subject';
	}else if($('searchtxt').value == '����') {
		$('searchname').value = 'message';
	}else if($('searchtxt').value == '����') {
		$('searchname').value = 'author';
	}
}
</script>
</body>
</html>
<!--{/if}-->