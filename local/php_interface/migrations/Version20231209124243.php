<?php

namespace Sprint\Migration;


class Version20231209124243 extends Version
{
    protected $description = "clothe(4xS)";

    protected $moduleVersion = "4.6.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $helper->Iblock()->saveIblockType(array (
  'ID' => 'catalog',
  'SECTIONS' => 'Y',
  'EDIT_FILE_BEFORE' => NULL,
  'EDIT_FILE_AFTER' => NULL,
  'IN_RSS' => 'N',
  'SORT' => '100',
  'LANG' => 
  array (
    'ru' => 
    array (
      'NAME' => 'Каталоги',
      'SECTION_NAME' => 'Разделы',
      'ELEMENT_NAME' => 'Товары',
    ),
    'en' => 
    array (
      'NAME' => 'Catalog',
      'SECTION_NAME' => 'Sections',
      'ELEMENT_NAME' => 'Products',
    ),
  ),
));
        $iblockId = $helper->Iblock()->getIblockIdIfExists('clothess', 'catalog');

    }

    public function down()
    {
        //your code ...
    }
}
