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
<script>
function viewpoll(id) {
	if(id == 'viewpoll') {
		$('poll').style.display = 'none';
		$('poll_value').style.display = '';
	} else {
		$('poll').style.display = '';
		$('poll_value').style.display = 'none';
	}
}
</script>
<div class="column">
	<div class="col1">

		<div class="global_module margin_bot10 bg_fff">
			<div class="global_module3_caption">
			<h3>���λ��
				<a href="{S_URL}/">$_SCONFIG[sitename]</a>
				&gt;&gt; $title
			</h3></div>
			<div id="article">
				<h1>$poll[subject]</h1>
				<p id="article_extinfo">ͶƱ������$poll[votersnum] | ��ʼʱ�䣺$poll[dateline] | ����ʱ�䣺$poll[updatetime]</p>
				<div id="article_body">
					<p>ͶƱ˵��:$poll[summary]</p>
					<form id="pollform" action="#action/poll/php/1#" method="post">
					<div id="poll">
						<ul>
							<!--{loop $poll[options] $okey $options}-->
							<li>
							<!--{if $poll[ismulti]}-->
							<input type="checkbox" id="votekey-$okey" name="votekey[]" value="$okey" class="votekey" />
							<!--{else}-->
							<input type="radio" id="votekey-$okey" name="votekey[]" value="$okey" class="votekey"/>
							<!--{/if}-->
							<label for="votekey-$okey">$options[name]</label></li>
							<!--{/loop}-->
						</ul>
						<div class="poll_op">
							<input type="hidden" name="pollid" value="$poll[pollid]" />
							<input type="hidden" name="pollsubmit" value="yes" />
							<input class="input_search" id="dovote" name="pollbtn" type="submit" value="ͶƱ"/>
							<input class="input_search" type="button" value="�鿴" onclick="javascript:viewpoll('viewpoll');"/>
							<input type="hidden" name="formhash" value="<!--{eval echo formhash();}-->" />
						</div>
					</form>
					</div><!--poll end-->
					
					<div id="poll_value" style="display:none">
						<ul>
							<!--{loop $poll[options] $key $options}-->
							<!--{eval $rand = rand(1,9)}-->
							<li>
								<h6>$options[name]</h6>
								<div>
									<span class="polloptionbar "><strong class="pollcolor$rand" style="width:<!--{eval echo ($options[percent]+1)}-->%;">$options[percent]%</strong></span>
									<span class="pollnum">��Ʊ:$options[num] / $options[percent]%</span>
								</div>
							</li>
							<!--{/loop}-->
						</ul>
						<div class="poll_op">
							<input class="input_search" type="button" value="����"  onclick="javascript:viewpoll('return');"/>
						</div>
					</div><!--poll_value end-->
					

				</div>
			</div><!--article end-->



		</div>		
		
	</div><!--col1 end-->

	<div class="col2">
		
		<!--{block name="poll" parameter="order/dateline DESC/limit/0,10/cachetime/80000/cachename/poll/tpl/data"}-->
		<div class="global_module margin_bot10 bg_fff">
			<div class="global_module2_caption"><h3>����ͶƱ</h3></div>
			<ul class="global_tx_list3">
				<!--{if empty($_SBLOCK['poll'])}-->
					<li>��ʱû�е���</li>
				<!--{else}-->
					<!--{loop $_SBLOCK['poll'] $value}-->
					<li><a href="$value[url]">$value[subject]</a></li>
					<!--{/loop}-->
				<!--{/if}-->
			</ul>
		</div>

	</div><!--col2 end-->
</div><!--column end-->

<!--{template footer}-->