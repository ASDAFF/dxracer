<?IncludeModuleLangFile(__FILE__);?>

<?
	function gd_version($MajorOnly=false) {
		$GDVer = gd_info();
		$GDVer = $GDVer["GD Version"];
		if (preg_match("/([0-9.]+)/", $GDVer, $GDVer)) {
			if ($MajorOnly===true) {
				$GDVer = explode(".", $GDVer[0]);
				return $GDVer[0];
			}
			return $GDVer[0];
		}
		return false;
	}
	$GD_Version_Major = IntVal(gd_version(true));
?>

<?if($GD_Version_Major>=1):?>
	<form action="<?echo $APPLICATION->GetCurPage()?>" method="get">
		<?=bitrix_sessid_post()?>
		<input type="hidden" name="lang" value="<?echo LANG?>" />
		<input type="hidden" name="id" value="webdebug.image" />
		<input type="hidden" name="install" value="Y" />
		<input type="hidden" name="step" value="2" />
		<div>
			<p><?=GetMessage("WEBDEBUG_IMAGE_INSTALL_STEP1_LINE1")?>: <strong><?=gd_version();?></strong>.</p>
			<p><?=GetMessage("WEBDEBUG_IMAGE_INSTALL_STEP1_LINE2")?>: <strong>1.0</strong>.</p>
			<p><?=GetMessage("WEBDEBUG_IMAGE_INSTALL_STEP1_LINE3")?>: <strong>2.0</strong>.</p>
			<br/>
			<input type="submit" name="" value="<?=GetMessage("MOD_INSTALL")?>" />
		</div>
	</form>
<?else:?>
	<p><?=GetMessage("WEBDEBUG_IMAGE_INSTALL_STEP1_ERROR1")?></p>
<?endif?>