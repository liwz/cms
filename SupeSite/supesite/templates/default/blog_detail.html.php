<?exit?>
<!--{template header}-->
<!--{eval $ads3 = getad('system', 'uchblog', '3'); }-->
<!--{if !empty($ads3['pageheadad']) }-->
	<div class="ad_header">$ads3[pageheadad]</div>
<!--{/if}-->
</div><!--header end-->

<div id="nav">
	<div class="main_nav">
		<ul>
			<!--{if empty($_SCONFIG['defaultchannel'])}-->
			<li><a href="{S_URL}/index.php">��ҳ</a></li>
			<!--{/if}-->
			<!--{loop $channels['menus'] $key $value}-->
			<li <!--{if $key == 'uchblog' }--> class="current"<!--{/if}-->><a href="$value[url]">$value[name]</a></li>
			<!--{/loop}-->
		</ul>
	</div>
</div><!--nav end-->

<!--{if !empty($ads3['pagecenterad'])}-->
<div class="ad_pagebody">$ads3[pagecenterad]</div>
<!--{/if}-->

<div class="column" id="blog_detail">
	<div class="box_l">
		<div class="global_module margin_bot10 bg_fff">
			<div class="global_module2_caption"><h3>����</h3></div>
			<div class="blog_user">
				<a href="{S_URL}/space.php?uid=$blogdetail[uid]"><img src="{UC_API}/avatar.php?uid=$blogdetail[uid]&size=middle" alt="" /></a><br/>
				<a href="{S_URL}/space.php?uid=$blogdetail[uid]">$blogdetail[username]</a><br/>
				[<a href="{S_URL}/space.php?uid=$blogdetail[uid]&op=uchblog">�鿴TA��ȫ����־</a>]
			</div>
		</div>
	
		<!--{block name="uchblog" parameter="order/dateline DESC/uid/$blogdetail[uid]/limit/0,10/cachetime/86549/subjectlen/22/subjectdot/0/cachename/blog"}-->
		<div class="global_module margin_bot10 bg_fff">
			<div class="global_module2_caption"><h3>������־</h3></div>
			<ul class="global_tx_list3">
					<!--{loop $_SBLOCK['blog'] $value}-->
					<li><a href="$value[url]" title="$value[subjectall]">$value[subject]</a></li>
					<!--{/loop}-->
			</ul>
		</div>
		<!--{if !empty($ads3['siderad'])}-->
		<div class="global_module margin_bot10 bg_fff">
			<div class="global_module2_caption"><h3>������Դ</h3></div>
			<div class="ad_sidebar">
				$ads3[siderad]
			</div>

		</div>
		<!--{/if}-->
	</div><!--box_l end-->
	
	<div class="box_r global_module bg_fff">
		<div class="global_module3_caption"><h3>
			<em style="float:right; padding:0 5px 0 0;">
			<a href="$_SC[uchurl]/space.php?uid=$blogdetail[uid]&do=blog&id=$blogdetail[blogid]" title="ת��$channels[menus][uchblog][name]" class="vote" target="_blank">ת��$channels[menus][uchblog][name]</a>
			</em>
			���λ�ã�<a href="{S_URL}/">$_SCONFIG[sitename]</a>
			<!--{loop $guidearr $value}-->
			&gt;&gt; <a href="$value[url]">$value[name]</a>
			<!--{/loop}-->
			&gt;&gt; <a href="{S_URL}/space.php?uid=$blogdetail[uid]&op=uchblog">$blogdetail[username]����־</a>
			&gt;&gt; ��ϸ����</h3></div>
		<div id="blog_article">
			<h1>$blogdetail[subject]</h1>
			<div class="blog_tipinfo">����:#date('Y-n-d H:i', $blogdetail["dateline"])# | ����:<a href="{S_URL}/space.php?uid=$blogdetail[uid]&op=uchblog">$blogdetail[username]</a> | ��Դ:��վ | �鿴:$blogdetail[viewnum]�� | �ֺ�: <a href="javascript:doZoom('12');">С</a> <a href="javascript:doZoom('14');">��</a> <a href="javascript:doZoom('16');">��</a></div>
			<div id="blog_body">
				<!--{if !empty($ads3['viewinad'])}-->
				<div class="ad_article">
					$ads3[viewinad]
				</div>
				<!--{/if}-->
				$blogdetail[message]
			</div>
			<div class="blog_op">
				<a href="javascript:doPrint();">��ӡ</a>&nbsp;|&nbsp;<a href="javascript:;" onclick="bookmarksite(document.title, window.location.href)">�ղش�ҳ</a>&nbsp;|&nbsp;
				<a href="javascript:;" onclick="showajaxdiv('{S_URL}/batch.common.php?action=emailfriend&amp;uid=$blogdetail[uid]&amp;blogid=$blogdetail[blogid]', 400);">�Ƽ�������</a>&nbsp;|&nbsp;<a href="$_SC['uchurl']/cp.php?ac=common&op=report&idtype=blog&id=$blogdetail[blogid]" >�ٱ�</a>
			</div>
		</div>	
		
		<div class="comment">
			<!--{if !empty($blogcomment)}-->
			<!--{eval $i=0;}-->
			<!--{loop $blogcomment $value}-->
			<!--{if $i % 2 == 0}-->
			<div class="u_comment_list bg_f8">
			<!--{else}-->
			<div class="u_comment_list">
			<!--{/if}-->
				<div class="u_avatar"><a href="{S_URL}/space.php?uid=$value[authorid]"><img src="{UC_API}/avatar.php?uid=$value[authorid]&size=small" alt="" /></a></div>
				<div class="u_info">
					<p class="u_title"><a href="{S_URL}/space.php?uid=$value[authorid]">$value[author]</a>#date('Y-n-d H:i:s', $value["dateline"])#</p>
					<p class="u_txt">$value[message]</p>
				</div>
			</div>
			<!--{eval $i++}-->
			<!--{/loop}-->
			<!--{/if}-->
		</div>	
	
			<div id="comment_op"><a href="$_SC[uchurl]/space.php?uid=$blogdetail[uid]&do=blog&id=$blogdetail[blogid]" class="write" target="_blank">��Ҳ��˵����</a> <a href="$_SC[uchurl]/space.php?uid=$blogdetail[uid]&do=blog&id=$blogdetail[blogid]" class="view" target="_blank">�鿴ȫ���ظ�</a></div>	

	</div>
	</div>

</div><!--column end-->

<!--{if !empty($ads3['pagefootad'])}-->
<div class="ad_pagebody">$ads3['pagefootad']</div>
<!--{/if}-->

<!--{if !empty($ads3['pagemovead']) || !empty($ads3['pageoutad'])}-->
<!--{if !empty($ads3['pagemovead'])}-->
<div id="coupleBannerAdv" style="z-index: 10; position: absolute; width:100px;left:10px;top:10px;display:none">
	<div style="position: absolute; left: 6px; top: 6px;">
		$ads3[pagemovead]
		<br />
		<img src="{S_URL}/images/base/advclose.gif" onMouseOver="this.style.cursor='hand'" onClick="closeBanner('coupleBannerAdv');">
	</div>
	<div style="position: absolute; right: 6px; top: 6px;">
		$ads3[pagemovead]
		<br />
		<img src="{S_URL}/images/base/advclose.gif" onMouseOver="this.style.cursor='hand'" onClick="closeBanner('coupleBannerAdv');">
	</div>
</div>
<!--{/if}-->
<!--{if !empty($ads3['pageoutad'])}-->
<div id="floatAdv" style="z-index: 10; position: absolute; width:100px;left:10px;top:10px;display:none">
	<div id="floatFloor" style="position: absolute; right: 6px; bottom:-700px">
		$ads3[pageoutad]
	</div>
</div>
<!--{/if}-->
<script type="text/javascript" src="{S_URL}/include/js/floatadv.js"></script>
<script type="text/javascript">
<!--{if !empty($ads3['pageoutad'])}-->
var lengthobj = getWindowSize();
lsfloatdiv('floatAdv', 0, 0, 'floatFloor' , -lengthobj.winHeight).floatIt();
<!--{/if}-->
<!--{if !empty($ads3['pagemovead'])}-->
lsfloatdiv('coupleBannerAdv', 0, 0, '', 0).floatIt();
<!--{/if}-->
</script>
<!--{/if}-->

<!--{if !empty($ads3['pageoutindex'])}-->
$ads3[pageoutindex]
<!--{/if}-->
<!--{template footer}-->