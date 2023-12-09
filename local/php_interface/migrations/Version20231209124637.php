<?php

namespace Sprint\Migration;


use Bitrix\Iblock\IblockTable;

class Version20231209124637 extends Version
{
    protected $description = "Миграция ИБ Одежда - (clothes -> clothes5) ";

    protected $moduleVersion = "4.6.1";
    private const CLOTHES_IBLOCK_ID = 2;
    private const CLOTHES_OLD_CODE = 'clothes';
    private const CLOTHES_NEW_CODE = 'clothes5';

    public function up()
    {
        IblockTable::update(self::CLOTHES_IBLOCK_ID, ['CODE' => self::CLOTHES_OLD_CODE]);
    }

    public function down()
    {
        IblockTable::update(self::CLOTHES_IBLOCK_ID, ['CODE' => self::CLOTHES_NEW_CODE]);
    }
}
