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
		<div class="global_module margin_bot10 bg_fff">
			<div class="global_module3_caption"><h3>���λ�ã�����</h3></div>

			<div id="detail_search">
				<!--{if empty($searchname)}-->
				<!--{eval $searchname = 'subject'}-->
				<!--{/if}-->
				<form action="{S_URL}/batch.search.php" method="post">
				<input type="text" class="input_tx" size="50" name="searchkey" value="$searchkey" /> <input type="submit" class="input_search" name="authorsearchbtn" value="����" />
				<div class="search_catalog">
					<input id="title" name="searchname" type="radio" value="subject" <!--{if $searchname == 'subject'}-->checked="checked" <!--{/if}-->/><label for="title">����</label>
					<input id="content" name="searchname" type="radio" value="message" <!--{if $searchname == 'message'}-->checked="checked" <!--{/if}-->/><label for="content">����</label>
					<input id="author" name="searchname" type="radio" value="author" <!--{if $searchname == 'author'}-->checked="checked" <!--{/if}-->/><label for="author">����</label>
					<!--{if !empty($channels['menus']['bbs'])}-->
					<a title="������̳" href="$bbsurl/search.php" target="_blank">������̳</a>
					<!--{/if}-->
					<input type="hidden" value="news" name="type">
					<input type="hidden" name="formhash" value="<!--{eval echo formhash();}-->" />
				</div>
				</form>
			</div><!--search_bar end-->

			<!--{if !empty($iarr)}-->
			<ul id="sarch_list">
				<!--{loop $iarr $value}-->
				<li><strong>[{$lang[$value[type]]}]</strong> <a href="$value[url]">$value[subject]</a> (<a href="{S_URL}/space.php?uid=$value[uid]">$value[username]</a>��#date("Y-n-d H:i:s", $value["dateline"])#)</li>
				<!--{/loop}-->
			</ul>	
			<!--{if !empty($multipage)}-->
			$multipage
			<!--{/if}-->
			<!--{/if}-->
		</div>

</div><!--column end-->

<!--{template footer}-->