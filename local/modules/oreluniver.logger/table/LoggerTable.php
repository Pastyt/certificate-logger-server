<?php

namespace Table;

use Bitrix\Main\Entity\DataManager;
use Bitrix\Main\Entity\IntegerField;
use Bitrix\Main\Entity\StringField;
use Bitrix\Main\Entity\DatetimeField;
use Bitrix\Main\Localization\Loc;

class LoggerTable extends DataManager
{

    // название таблицы
    public static function getTableName()
    {
        return 'logger_table';
    }
    // создаем поля таблицы
    public static function getMap()
    {
        return array(
            new IntegerField('ID', array(
                'autocomplete' => true,
                'primary' => true
            )),// autocomplite с первичным ключом
            new StringField('MESSAGE', array(
                'required' => true,
            )),
            new StringField('CERTID', array(
                'required' => true,
               )),
            new DatetimeField('TIME',array(
                'required' => true)),
        );
    }
}