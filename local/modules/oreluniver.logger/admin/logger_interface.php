<?php
setlocale(LC_ALL, 'ru_RU.utf8');

use Bitrix\Main\Localization\Loc;

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_admin_before.php');

Loc::loadMessages(__FILE__);

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_admin_after.php');

$logs = \Table\LoggerTable::getList(['select' => ['*']])->fetchCollection();

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

<table>
    <tr>
        <th>Сообщение</th>
        <th>ID сертификата</th>
        <th>Время</th>
    </tr>
    <?foreach ($logs as $log) : ?>
        <tr>
            <td><?=$log->get('MESSAGE')?></td>
            <td><?=$log->get('CERTID')?></td>
            <td><?=$log->get('TIME')?></td>
        </tr>
    <?endforeach;?>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

Статус: Сертификат подписан <br><br>
<button> Отозвать сертификат </button>

<?$CAdminTabControl->Buttons();?>

<?$CAdminTabControl->End();?>

<? require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/epilog_admin.php'); ?>
