<? if(!defined('UC_ROOT')) exit('Access Denied');?>
<? include $this->gettpl('header');?>

<script src="js/common.js" type="text/javascript"></script>
<div class="container">

	<div class="note">
		<p class="i">�����ͬ��Ӧ�õĻ������á����Ի�ȡӦ�õĻ������ã����Ұѵ�ǰ���ý��֪ͨ��Ӧ��</p>
	</div>

	<? if($status) { ?>
		<div class="<? if($status > 0) { ?>correctmsg<? } else { ?>errormsg<? } ?>"><p><? if($status == 1) { ?>�ɹ����»��ֶһ�������<? } elseif($status == -1) { ?>�һ�ǰ��Ӧ����ͬ�����������á�<? } ?></p></div>
	<? } ?>
	<div class="hastabmenu">
		<ul class="tabmenu">
			<li class="tabcurrent"><a href="#" class="tabcurrent">���»��ֶһ�����</a></li>
		</ul>
		<div class="tabcontentcur">
			<form id="creditform" action="admin.php?m=credit&a=ls&addexchange=yes" method="post">
			<input type="hidden" name="formhash" value="<?=FORMHASH?>">
			<table class="dbtb">
				<tr>
					<td class="tbtitle">�һ�����:</td>
					<td>
						<select onchange="switchcredit('src', this.value)" name="appsrc">
							<option>��ѡ��</option><?=$appselect?>
						</select><span id="src"></span>
						&nbsp;&gt;&nbsp;
						<select onchange="switchcredit('desc', this.value)" name="appdesc">
							<option>��ѡ��</option><?=$appselect?>
						</select><span id="desc"></span>
					</td>
				</tr>
				<tr>
					<td class="tbtitle">�һ�����:</td>
					<td>
						<input name="ratiosrc" size="3" value="<?=$ratiosrc?>" class="txt" style="margin-right:0" />
						&nbsp;:&nbsp;
						<input name="ratiodesc" size="3" value="<?=$ratiodesc?>" class="txt" />
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" value="�� ��" class="btn" /> &nbsp;
						<input type="button" value="ͬ��Ӧ�õĻ�������" class="btn" onclick="location.href='admin.php?m=credit&a=sync&sid=<?=$sid?>'" />
					</td>
				</tr>
			</table>
			<div style="display: none">
			<script type="text/javascript">
			var credit = new Array();
			<? foreach((array)$creditselect as $select) {?><?=$select?><? } ?>
			<? if($appsrc) { ?>
				setselect($('creditform').appsrc, <?=$appsrc?>);
				switchcredit('src', <?=$appsrc?>);
			<? } ?>
			<? if($appdesc) { ?>
				setselect($('creditform').appdesc, <?=$appdesc?>);
				switchcredit('desc', <?=$appdesc?>);
			<? } ?>
			<? if($creditsrc) { ?>
				setselect($('creditform').creditsrc, <?=$creditsrc?>);
			<? } ?>
			<? if($creditdesc) { ?>
				setselect($('creditform').creditdesc, <?=$creditdesc?>);
			<? } ?>
			</script>
			</div>
			</form>
		</div>
	</div>
	<br />
	<h3>���ֶһ�</h3>
	<div class="mainbox">
		<? if($creditexchange) { ?>
			<form action="admin.php?m=credit&a=ls&delexchange=yes" method="post">
			<input type="hidden" name="formhash" value="<?=FORMHASH?>">
			<table class="datalist fixwidth" onmouseover="addMouseEvent(this);">
				<tr>
					<th><input type="checkbox" name="chkall" id="chkall" onclick="checkall('delete[]')" class="checkbox" /><label for="chkall">ɾ��</label></th>
					<th style="padding-right: 11px; text-align: right">�һ�����</th>
					<th></th>
					<th style="text-align: center">�һ�����</th>
				</tr>
				<? foreach((array)$creditexchange as $key => $exchange) {?>
					<tr>
						<td class="option"><input type="checkbox" name="delete[]" value="<?=$key?>" class="checkbox" /></td>
						<td align="right"><?=$exchange['appsrc']?> <?=$exchange['creditsrc']?></td>
						<td>&nbsp;&gt;&nbsp;<?=$exchange['appdesc']?> <?=$exchange['creditdesc']?></td>
						<td align="center"><?=$exchange['ratiosrc']?> : <?=$exchange['ratiodesc']?></td>
					</tr>
				<?}?>
				<tr class="nobg">
					<td><input type="submit" value="�� ��" class="btn" /></td>
				</tr>
			</table>
			</form>
		<? } else { ?>
			<div class="note">
				<p class="i">Ŀǰû����ؼ�¼!</p>
			</div>
		<? } ?>
</div>

<? include $this->gettpl('footer');?>