<?exit?>
<!--{template header}-->
<!--{eval $ads3 = getad('system', 'news', '3'); }-->
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
			<li <!--{if $key == 'news' }--> class="current"<!--{/if}-->><a href="$value[url]">$value[name]</a></li>
			<!--{/loop}-->
		</ul>
	</div>
	<!--{block name="category" parameter="type/news/isroot/1/order/c.displayorder/limit/0,100/cachetime/80800/cachename/category"}-->
	<ul class="ext_nav clearfix">
		<!--{eval $dot = '|'}-->
		<!--{eval $total = count($_SBLOCK['category'])}-->
		<!--{eval $i = 1;}-->
		<!--{loop $_SBLOCK['category'] $value}-->
		<li><a href="$value[url]">$value[name]</a><!--{if $total != $i}--> $dot <!--{/if}--></li>
		<!--{eval $i++;}-->
		<!--{/loop}-->
	</ul>
</div><!--nav end-->

<!--{if !empty($ads3['pagecenterad'])}-->
<div class="ad_pagebody">$ads3[pagecenterad]</div>
<!--{/if}-->

<div id="image_show" class="column global_module bg_fff">
	<div class="global_module3_caption">
	<h3>���λ�ã�
	<a href="{S_URL}/">��ҳ</a>
	&gt;&gt; �鿴����
	</h3></div>
	<div id="article" class="comment_caption">
		<h1><a href="#action/viewnews/itemid/$item[itemid]#">$item[subject]</a></h1>
		<p id="article_extinfo">�鿴��: $item[viewnum] |  ������: $item[replynum] |  ����: $item[goodrate] |  ����: $item[badrate]</p>
	</div>

	<div class="comment">
		<!--{loop $iarr $value}-->
		<div class="comment_list">
			<div class="comment_list_caption">
				<div class="box_l"><!--{if empty($value[authorid])}-->$value[author]<!--{else}--><a href="{S_URL}/space.php?uid=$value[authorid]" class="author">$value[author]</a><!--{/if}--> (#date("Y-n-d H:i:s", $value["dateline"])#, ����:<strong>$value[rates]</strong>)</div>
				<div class="box_r"><!--{if empty($value[authorid]) && $value[authorid] == $_SGLOBAL['supe_uid'] || $_SGLOBAL['member']['groupid'] == 1}-->
					<a href="#action/viewcomment/itemid/$value[itemid]/cid/$value[cid]/op/delete/php/1#">ɾ��</a> | 
					<!--{/if}--><a href="javascript:;" onclick="getQuote($value[cid])">����</a>
				</div>
			</div>
			<!--{if !empty($value['message'])}-->
				<div class="comment_content">$value[message]</div>
				<!--{else}-->
				<div class="scoresnum">��$value[rates]��</div>
				<!--{/if}-->
		</div>
		<!--{/loop}-->
		<!--{if $multipage}-->
			$multipage
		<!--{/if}-->	
	

			<div class="block" id="xspace-rates">
				<div id="xspace-rates" class="block">
				<div id="xspace-rates-bg">
					<div id="xspace-rates-star" class="xspace-rates0">&nbsp;</div>
					<div id="xspace-rates-a">
						<a href="javascript:;" onmouseover="rateHover(-5);" onmouseout="rateOut();" onclick="setRateXML('-5', '$news[itemid]');">-5</a>
						<a href="javascript:;" onmouseover="rateHover(-3);" onmouseout="rateOut();" onclick="setRateXML('-3', '$news[itemid]');">-3</a>
						<a href="javascript:;" onmouseover="rateHover(-1);" onmouseout="rateOut();" onclick="setRateXML('-1', '$news[itemid]');">-1</a>
						<a href="javascript:;" onmouseover="rateHover(0);" onmouseout="rateOut();" onclick="setRateXML('0', '$news[itemid]');">-</a>
						<a href="javascript:;" onmouseover="rateHover(1);" onmouseout="rateOut();" onclick="setRateXML('1', '$news[itemid]');">+1</a>
						<a href="javascript:;" onmouseover="rateHover(3);" onmouseout="rateOut();" onclick="setRateXML('3', '$news[itemid]');">+3</a>
						<a href="javascript:;" onmouseover="rateHover(5);" onmouseout="rateOut();" onclick="setRateXML('5', '$news[itemid]');">+5</a>
					</div>
					<input type="hidden" id="xspace-rates-value" name="rates" value="0" />
				</div>
				<p>���֣�<span id="xspace-rates-tip">0</span></p>
				</div>
			</div>
		
		<div id="sign_msg">
			<form  action="#action/viewcomment/itemid/$item[itemid]/php/1#" method="post">
			<script language="javascript" type="text/javascript" src="{S_URL}/batch.formhash.php?rand={eval echo rand(1, 999999)}"/></script>
			<fieldset>
			<legend>��������</legend>
			<textarea id="message" name="message" onfocus="showcode()" onkeydown="ctlent(event,'postcomm');"></textarea><br />
			<!--{if empty($_SCONFIG['noseccode'])}-->
			<div class="security_code">
				<label for="seccode">��֤�룺</label><input type="text" id="seccode" name="seccode" maxlength="4" style="width:85px;" /> <img id="xspace-imgseccode" src="{S_URL}/do.php?action=seccode" onclick="javascript:newseccode(this);" alt="seccode" title="�����壿�����һ��" /> <a class="c_blue" title="�����壿�����һ��" href="javascript:newseccode($('xspace-imgseccode'));">��һ��</a>
			</div>
			<!--{/if}-->
			
				<!--{if $_SGLOBAL['supe_uid']&&$_SCONFIG['allowfeed']}-->
				<div id="add_event_box"><label for="add_event">�����¼�</label>
				<input type="checkbox" name="addfeed" <!--{if ($_SCONFIG['customaddfeed']&2)}-->checked="checked"<!--{/if}-->>		
				</div>
				<!--{/if}-->
			
			<input type="submit" value="�ύ" id="submit" class="input_search"/>
			<input type="hidden" value="submit" name="submitcomm" />
			<input type="hidden" id="itemid" name="itemid" value="$item[itemid]" />
			</fieldset>
			</form>
		</div><!--sign_msg end-->	
		
	</div>
</div>
<!--{if !empty($ads3['pagefootad'])}-->
<div class="ad_pagebody">$ads3[pagefootad]</div>
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