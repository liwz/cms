<?exit?>
<!--{template header}-->
</div>
<!-- ����վ��header.html.phpģ���ļ� -->

<div id="nav">
	<div class="main_nav">
		<ul>
			<!--{if empty($_SCONFIG['defaultchannel'])}-->
			<li><a href="{S_URL}/index.php">��ҳ</a></li>
			<!--{/if}-->
			<!--{loop $channels['menus'] $key $value}-->
			<li <!--{if $key == $_SGET['name'] }--> class="current"<!--{/if}-->><a href="$value[url]">$value[name]</a></li>
			<!--{/loop}-->
		</ul>
	</div>
</div><!--nav end-->
<div class="column">
<div class="col1">
	<!-- ģ��ʹ�÷�����ʼ -->
<h3>��ӭʹ��SupeSite�Զ���Ƶ��</h3>
��Ƶ��ģ��ҳ���У�������ͨ�� SupeSite ǿ���ģ�鹦�ܣ�����������ϣ���Discuz!��̳��UCHome�����������Ϣ���������ۺ�չʾ���������Լ���Ƶ��ҳ�档<br />
�����������һ��ģ��ʹ�÷�����<br />
��ʾ�ľ���������Ѷģ�飬����ҳ��ʾվ��������Ѷ��ģ�巶��(������ʱ��ݼ�����ÿҳ��ʾ20��������ʾ����ժҪ)�������ο���������ʹ��Dreamweaver�ȱ༭���Ա�ģ����п��ӻ��༭��
	<!-- ģ����� -->
	<!-- ������ģ�����,���������������ݻ�ȡ������$_SBLOCK[������]��,ʹ��ģ�������������� -->
	<!--{block name="spacenews" parameter="perpage/20/showattach/1/showdetail/1/order/i.replynum DESC/limit/0,1/subjectlen/34/subjectdot/1/messagelen/220/messagedot/1/cachetime/18600/cachename/headnews"}-->
		<div class="global_module margin_bot10 bg_fff">
       <div class="global_module3_caption">
			<h3>��Ѷ</h3>
       </div>
			<!-- ����ʹ��loop������ģ���ȡ������$_SBLOCK[������]����ѭ����ʾ -->
			<!--{loop $_SBLOCK['headnews'] $value}-->
			<ul class="global_tx_list4">
				<h5><a target="_blank" href="$value[url]">$value[subject]</a></h5>
				<p>$value[message]</p>
			</ul>
			<!--{/loop}-->
			<!-- ����Ϊ��ҳ��Ϣ$_SBLOCK[������_multipage] -->
			$_SBLOCK[headnews_multipage]
			<!-- ģ��ʹ�÷������� -->
	</div>
</div>
	<div class="col2">
		<div id="user_login">
			<script src="{S_URL}/batch.panel.php?rand={eval echo rand(1, 999999)}" type="text/javascript" language="javascript"></script>
		</div><!--user_login end-->
    </div>
</div>




<!-- ����վ��footer.html.phpģ���ļ� -->
<!--{template footer}-->
