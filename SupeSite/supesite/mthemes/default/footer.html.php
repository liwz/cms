<?exit?>
<!--{if empty($_SGLOBAL['inajax'])}-->
<div id="footer">
	<p id="copyright">
		Powered by <a href="http://www.supesite.com" target="_blank">SupeSite</a> <em title="<?=S_RELEASE?>"><?=S_VER?></em> &copy; 2001-2009 <a href="http://www.comsenz.com" target="_blank">Comsenz Inc.</a>
	</p>
	<p>
		<a href="{S_URL}/index.php">$_SCONFIG[sitename]</a> | 
		<a href="#action/site/type/map#">վ���ͼ</a> | 
		<a href="#action/site/type/link#">��������</a> | 
		<a href="mailto:$_SCONFIG[adminemail]">��ϵ����</a>
	</p>
	<p>
	<!--{eval debuginfo();}-->
	</p>
</div><!--footer end-->

</body>
</html>
<!--{/if}-->