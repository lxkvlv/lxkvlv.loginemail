<?
global $MESS;
$PathInstall = str_replace("\\", "/", __FILE__);
$PathInstall = substr($PathInstall, 0, strlen($PathInstall)-strlen("/index.php"));
IncludeModuleLangFile($PathInstall."/install.php");
include($PathInstall."/version.php");

if (class_exists("lxkvlv_loginemail")) return;

class lxkvlv_loginemail extends CModule
{
	var $MODULE_ID = "lxkvlv.loginemail";
	var $MODULE_VERSION;
	var $MODULE_VERSION_DATE;
	var $MODULE_NAME;
	var $MODULE_DESCRIPTION;
	var $PARTNER_NAME;
	var $PARTNER_URI;
	
	function lxkvlv_loginemail()
	{
		$arModuleVersion = array();

		$path = str_replace("\\", "/", __FILE__);
		$path = substr($path, 0, strlen($path) - strlen("/index.php"));
		include($path."/version.php");

		if (is_array($arModuleVersion) && array_key_exists("VERSION", $arModuleVersion))
		{
			$this->MODULE_VERSION = $arModuleVersion["VERSION"];
			$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
			$this->MODULE_NAME = $arModuleVersion["MODULE_NAME"];
			$this->MODULE_DESCRIPTION = $arModuleVersion["MODULE_DESCRIPTION"];
		}

		$this->PARTNER_NAME = GetMessage("lxkvlvloginemail_partner_name");
		$this->PARTNER_URI = "https://lxkvlv.xyz/";

	}

	function DoInstall()
	{	
		if ($GLOBALS["APPLICATION"]->GetGroupRight("main") >= "W")
		{
			$GLOBALS["APPLICATION"]->IncludeAdminFile(GetMessage("lxkvlvloginemail_install_title"), $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/lxkvlv.loginemail/install/step.php");
		}
	}

	function DoUninstall()
	{
		if ($GLOBALS["APPLICATION"]->GetGroupRight("main") >= "W")
		{
			$GLOBALS["APPLICATION"]->IncludeAdminFile(GetMessage("lxkvlvloginemail_uninstall_title"), $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/lxkvlv.loginemail/install/unstep.php");
		}
	}

}
?>