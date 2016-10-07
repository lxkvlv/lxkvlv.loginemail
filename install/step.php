<?if(!check_bitrix_sessid()) return;?>
<?

RegisterModule("lxkvlv.loginemail");

RegisterModuleDependences(
"main", "OnBeforeUserRegister",
"lxkvlv.loginemail", "CLoginemail", "OnBeforeUserRegisterHandler"
);

RegisterModuleDependences(
"main", "OnBeforeUserUpdate",
"lxkvlv.loginemail", "CLoginemail", "OnBeforeUserUpdateHandler"
);

echo CAdminMessage::ShowNote(GetMessage("MOD_INST_OK"));
?>
<form action="<?echo $APPLICATION->GetCurPage()?>" method="get">

<p>
	<input type="hidden" name="lang" value="<?echo LANG?>" />
	<input type="submit" name="" value="<?echo GetMessage("MOD_BACK")?>" />
</p>
<form>