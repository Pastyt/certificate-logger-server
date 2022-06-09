<?php
setlocale(LC_ALL, 'ru_RU.utf8');

use Bitrix\Main\Localization\Loc;

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_admin_before.php');

Loc::loadMessages(__FILE__);

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_admin_after.php');

$aTabs = [
    ['DIV'   => 'edit1',
     'TAB'   => 'Логгер',
     'TITLE' => 'Логгер'
    ],
];
$CAdminTabControl = new CAdminTabControl('tabControl', $aTabs);


$CAdminTabControl->Begin();?>
<?$CAdminTabControl->BeginNextTab();?>
<!--Здесь код страницы-->
dfsdf
<?$CAdminTabControl->Buttons();?>

<?$CAdminTabControl->End();?>

<? require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/epilog_admin.php'); ?>
