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

<div class="column">
	<div class="col1">

		<div class="global_module margin_bot10 bg_fff">
			<div class="global_module3_caption"><h3>
			���λ�ã�<a href="{S_URL}/">��ҳ</a>
				&gt;&gt; $title</h3></div>
			<ul class="news_list">
				<!--{loop $listvalue $value}-->
				<li>
					<h4><a href="$value[url]">$value[subject]</a></h4>
					<p class="news_list_caption">������: $value[author]&nbsp;&nbsp;��ʼʱ��: $value[starttime]&nbsp;&nbsp;����ʱ��: $value[endtime]</p>
					<p>$value[message]</p>
				</li>
				<!--{/loop}-->
			</ul>
			<div class="more_notice"><a href="#action/announcement#">���๫��</a></div>
			
		</div>

	</div><!--col1 end-->

	<div class="col2">
		<!--{block name="announcement" parameter="order/displayorder/limit/0,7/cachetime/96400/subjectlen/30/cachename/announce/tpl/data"}-->
		<div class="global_module margin_bot10 bg_fff">
			<div class="global_module2_caption"><h3>���¹���</h3></div>
			<ul class="global_tx_list3">
				<!--{loop $_SBLOCK['announce'] $value}-->
				<li><a href="$value[url]">$value[subject]</a></li>
				<!--{/loop}-->
			</ul>
		</div>

	</div><!--col2 end-->
</div><!--column end-->

<!--{template footer}-->