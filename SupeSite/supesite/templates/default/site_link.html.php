<?exit?>
<!--{template header}-->
</div><!--header end-->

<div id="nav">
	<div class="main_nav">
		<ul>
			<!--{if empty($_SCONFIG['defaultchannel'])}-->
			<li><a href="{S_URL}/index.php">��ҳ</a></li>
			<!--{/if}-->
			<!--{loop $channels['menus'] $key $value}-->
			<li><a href="$value[url]">$value[name]</a></li>
			<!--{/loop}-->
		</ul>
	</div>
</div><!--nav end-->

<!--{block name="friendlink" parameter="order/displayorder/limit/0,100/cachetime/11600/namelen/32/cachename/friendlink/tpl/data"}-->
<div class="column global_module bg_fff">
	<div class="global_module3_caption"><h3>���λ�ã�<a href="#action/site/type/link#">����</a></h3></div>

	<!--{eval $imglink=$txtlink="";}-->
	<!--{loop $_SBLOCK['friendlink'] $value}-->
	<!--{if $value[logo]}-->
	<!--{eval $imglink .= "<a href=\"".$value[url]."\" target=\"_blank\"><img src=\"".$value[logo]."\" alt=\"".$value[description]."\"  border=\"0\" /></a>\n";}-->
	<!--{else}-->
	<!--{eval $txtlink .= "<li><a href=\"".$value[url]."\" title=\"".$value[description]."\" target=\"_blank\">".$value[name]."</a></li>\n";}-->
	<!--{/if}-->
	<!--{/loop}-->
	<!--{if !empty($imglink)}-->
	<div class="links_img">
		$imglink
	</div>
	<!--{/if}-->
	<!--{if !empty($txtlink)}-->
	<div class="links_tx">
		<ul class="s_clear">
			$txtlink
		</ul>
	</div>
	<!--{/if}-->

</div>

<!--{template footer}-->