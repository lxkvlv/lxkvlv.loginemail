<?
IncludeModuleLangFile(__FILE__);

class CLoginemail extends CUser
{

	function OnBeforeUserRegisterHandler(&$arArgs)
	{

		if ($arArgs['EMAIL'] != $arArgs['LOGIN']){
			$arArgs['LOGIN'] = $arArgs['EMAIL'];
		}

	}
	
	function OnBeforeUserUpdateHandler(&$arArgs)
	{

		if ($arArgs['EMAIL'] != $arArgs['LOGIN']){
			$arArgs['LOGIN'] = $arArgs['EMAIL'];
		}

	}

}
?>