<?php if(!defined('IN_SUPESITE')) exit('Access Denied'); ?>
<?php if($allowlogin) { ?>
<div class="block style1" id="menus_0">
<h2>��������</h2>
<ul class="folder">
<li <?=$menuactive['avatar']?>><a href="<?=CPURL?>?action=avatar">ͷ�����</a></li>
<li <?=$menuactive['profile']?>><a href="<?=CPURL?>?action=profile">��������</a></li>
<li <?=$menuactive['password']?>><a href="<?=CPURL?>?action=password">��������</a></li>
</ul>
</div>
<?php } ?>

<?php if($menus['1']) { ?>
<div class="block style1" id="menus_1">
<h2>ϵͳ����</h2>
<ul class="folder">
<?php if($menus['1']['settings']) { ?>
<li<?=$menuactive['settings']?>><a href="<?=CPURL?>?action=settings">ϵͳ����</a></li>
<?php } ?>

<?php if($menus['1']['channel']) { ?>
<li<?=$menuactive['channel']?>><a href="<?=CPURL?>?action=channel">Ƶ������</a></li>
<?php } ?>

<?php if($menus['1']['html']) { ?>
<li<?=$menuactive['html']?>><a href="<?=CPURL?>?action=html">��̬����</a></li>
<?php } ?>

<?php if($menus['1']['tpl']) { ?>
<li<?=$menuactive['tpl']?>><a href="<?=CPURL?>?action=tpl">ģ��༭</a></li>
<?php } ?>

<?php if($menus['1']['css']) { ?>
<li<?=$menuactive['css']?>><a href="<?=CPURL?>?action=css">��ʽ���༭</a></li>
<?php } ?>

<?php if($menus['1']['crons']) { ?>
<li<?=$menuactive['crons']?>><a href="<?=CPURL?>?action=crons">�ƻ�����</a></li>
<?php } ?>

<?php if($menus['1']['database']) { ?>
<li<?=$menuactive['database']?>><a href="<?=CPURL?>?action=database">���ݿ�</a></li>
<?php } ?>

<?php if($menus['1']['words']) { ?>
<li<?=$menuactive['words']?>><a href="<?=CPURL?>?action=words">�������</a></li>
<?php } ?>

<?php if($menus['1']['attachmenttypes']) { ?>
<li<?=$menuactive['attachmenttypes']?>><a href="<?=CPURL?>?action=attachmenttypes">��������</a></li>
<?php } ?>

<?php if($menus['1']['prefields']) { ?>
<li<?=$menuactive['prefields']?>><a href="<?=CPURL?>?action=prefields">Ԥ��ֵ</a></li>
<?php } ?>

<?php if($menus['1']['sitemap']) { ?>
<li<?=$menuactive['sitemap']?>><a href="<?=CPURL?>?action=sitemap">SITEMAP</a></li>
<?php } ?>

<?php if($menus['1']['polls']) { ?>
<li<?=$menuactive['polls']?>><a href="<?=CPURL?>?action=polls">ͶƱ</a></li>
<?php } ?>

<?php if($menus['1']['customfields']) { ?>
<li<?=$menuactive['customfields']?>><a href="<?=CPURL?>?action=customfields">��Ѷ�Զ����ֶ�</a></li>
<?php } ?>

<?php if($menus['1']['announcements']) { ?>
<li<?=$menuactive['announcements']?>><a href="<?=CPURL?>?action=announcements">�������</a></li>
<?php } ?>

<?php if($menus['1']['ad']) { ?>
<li<?=$menuactive['ad']?>><a href="<?=CPURL?>?action=ad">���</a></li>
<?php } ?>

<?php if($menus['1']['friendlinks']) { ?>
<li<?=$menuactive['friendlinks']?>><a href="<?=CPURL?>?action=friendlinks">��������</a></li>
<?php } ?>

<?php if($menus['1']['cache']) { ?>
<li<?=$menuactive['cache']?>><a href="<?=CPURL?>?action=cache">�������</a></li>
<?php } ?>
</ul>
</div>
<?php } ?>
<?php if($menus['2']) { ?>
<div class="block style1" id="menus_2">
<h2>��Ϣ����</h2>
<ul class="folder">
<?php if($menus['2']['spacenews']) { ?>
<li<?=$menuactive['spacenews']?>><a href="<?=CPURL?>?action=spacenews">��Ѷ����</a></li>
<?php } ?>

<?php if($models) { ?>
<?php if(is_array($models)) { foreach($models as $value) { ?>
<?php if($menus['2']['modelmanages']) { ?>
<li><a href="<?=CPURL?>?action=modelmanages&mid=<?=$value['mid']?>"><?=$value['modelalias']?>����</a></li>
<?php } ?>
<?php } } ?>
<?php } ?>
<?php if($menus['2']['categories']) { ?>
<li<?=$menuactive['categories']?>><a href="<?=CPURL?>?action=categories">��Ѷ����</a></li>
<?php } ?>

<?php if($models) { ?>
<?php if(is_array($models)) { foreach($models as $value) { ?>
<?php if($menus['2']['modelcategories']) { ?>
<li><a href="<?=CPURL?>?action=modelcategories&mid=<?=$value['mid']?>"><?=$value['modelalias']?>����</a></li>
<?php } ?>
<?php } } ?>
<?php } ?>
<?php if($menus['2']['check']) { ?>
<li<?=$menuactive['check']?>><a href="<?=CPURL?>?action=check">��Ѷ�ȼ����</a></li>
<?php } ?>

<?php if($models) { ?>
<?php if(is_array($models)) { foreach($models as $value) { ?>
<?php if($menus['2']['modelfolders']) { ?>
<li><a href="<?=CPURL?>?action=modelfolders&mid=<?=$value['mid']?>"><?=$value['modelalias']?>�ȼ����</a></li>
<?php } ?>
<?php } } ?>
<?php } ?>
</ul>
</div>
<?php } ?>
<?php if($menus['3']) { ?>
<div class="block style1" id="menus_3">
<h2>�û�����</h2>
<ul class="folder">
<?php if($menus['3']['member']) { ?>
<li<?=$menuactive['member']?>><a href="<?=CPURL?>?action=member">�û�����</a></li>
<?php } ?>

<?php if($menus['3']['usergroups']) { ?>
<li<?=$menuactive['usergroupsadd']?>><a href="<?=CPURL?>?action=usergroups&op=add">�����û���</a></li>
<?php } ?>

<?php if($menus['3']['usergroups']) { ?>
<li<?=$menuactive['usergroups']?>><a href="<?=CPURL?>?action=usergroups">�û���</a></li>
<?php } ?>

<?php if($menus['3']['delmembers']) { ?>
<li<?=$menuactive['delmembers']?>><a href="<?=CPURL?>?action=delmembers">�ָ������û�</a></li>
<?php } ?>
</ul>
</div>
<?php } ?>
<?php if($menus['4']) { ?>
<div class="block style1" id="menus_4">
<h2>ģ�����</h2>
<ul class="folder">
<?php if($menus['4']['blocks']) { ?>
<li<?=$menuactive['blocksadd']?>><a href="<?=CPURL?>?action=blocks&op=add">����ģ��</a></li>
<?php } ?>

<?php if($menus['4']['blocks']) { ?>
<li<?=$menuactive['blocks']?>><a href="<?=CPURL?>?action=blocks">ģ�����</a></li>
<?php } ?>

<?php if($menus['4']['styles']) { ?>
<li<?=$menuactive['stylesadd']?>><a href="<?=CPURL?>?action=styles&op=add">�����·��</a></li>
<?php } ?>

<?php if($menus['4']['styles']) { ?>
<li<?=$menuactive['styles']?>><a href="<?=CPURL?>?action=styles">ģ����</a></li>
<?php } ?>

<?php if($menus['4']['styletpl']) { ?>
<li<?=$menuactive['styletpl']?>><a href="<?=CPURL?>?action=styletpl">���ģ��</a></li>
<?php } ?>
</ul>
</div>
<?php } ?>
<?php if($menus['5']) { ?>
<div class="block style1" id="menus_5">
<h2>����ά��</h2>
<ul class="folder">
<?php if($menus['5']['items']) { ?>
<li<?=$menuactive['items']?>><a href="<?=CPURL?>?action=items">�������</a></li>
<?php } ?>

<?php if($menus['5']['comments']) { ?>
<li<?=$menuactive['comments']?>><a href="<?=CPURL?>?action=comments">���۹���</a></li>
<?php } ?>

<?php if($menus['5']['attachments']) { ?>
<li<?=$menuactive['attachments']?>><a href="<?=CPURL?>?action=attachments">�ϴ���������</a></li>
<?php } ?>

<?php if($menus['5']['tags']) { ?>
<li<?=$menuactive['tags']?>><a href="<?=CPURL?>?action=tags">TAG����</a></li>
<?php } ?>

<?php if($menus['5']['reports']) { ?>
<li<?=$menuactive['reports']?>><a href="<?=CPURL?>?action=reports">�ٱ���Ϣ����</a></li>
<?php } ?>
</ul>
</div>
<?php } ?>
<?php if($menus['6']) { ?>
<div class="block style1" id="menus_6">
<h2>�ɼ�����</h2>
<ul class="folder">
<?php if($menus['6']['robots']) { ?>
<li<?=$menuactive['robotsadd']?>><a href="<?=CPURL?>?action=robots&op=add">�����»�����</a></li>
<?php } ?>

<?php if($menus['6']['robots']) { ?>
<li<?=$menuactive['robots']?>><a href="<?=CPURL?>?action=robots">�ɼ���</a></li>
<?php } ?>

<?php if($menus['6']['robotmessages']) { ?>
<li<?=$menuactive['robotmessages']?>><a href="<?=CPURL?>?action=robotmessages">�ɼ����¹���</a></li>
<?php } ?>
</ul>
</div>
<?php } ?>
<?php if($menus['7']) { ?>
<div class="block style1" id="menus_7">
<h2>ģ�͹���</h2>
<ul class="folder">
<?php if($menus['7']['models']) { ?>
<li<?=$menuactive['modelsadd']?>><a href="<?=CPURL?>?action=models&op=add">�½�ģ��</a></li>
<?php } ?>

<?php if($menus['7']['models']) { ?>
<li<?=$menuactive['models']?>><a href="<?=CPURL?>?action=models">ģ�͹���</a></li>
<?php } ?>

<?php if($menus['7']['models']) { ?>
<li<?=$menuactive['modelsimport']?>><a href="<?=CPURL?>?action=models&op=import">ģ�ͱ���</a></li>
<?php } ?>
</ul>
</div>
<?php } ?>
<?php if($menus['8']) { ?>
<div class="block style1" id="menus_8">
<h2>�ۺ�����</h2>
<ul class="folder">
<?php if($menus['8']['bbs']) { ?>
<li<?=$menuactive['bbs']?>><a href="<?=CPURL?>?action=bbs">��̳����</a></li>
<?php } ?>

<?php if($menus['8']['bbsforums']) { ?>
<li<?=$menuactive['bbsforums']?>><a href="<?=CPURL?>?action=bbsforums">���ۺ�</a></li>
<?php } ?>

<?php if($menus['8']['threads']) { ?>
<li<?=$menuactive['threads']?>><a href="<?=CPURL?>?action=threads">���������ۺ�</a></li>
<?php } ?>

<?php if($menus['8']['uchome']) { ?>
<li<?=$menuactive['uchome']?>><a href="<?=CPURL?>?action=uchome">UCHome����</a></li>
<?php } ?>
</ul>
</div>
<?php } ?>
<script>cpmenus(<?=$acid?>);</script>