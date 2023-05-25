<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use \Bitrix\Main\Localization\Loc;

$arActivityDescription = [
    "NAME" => Loc::getMessage("HELLOWORLD_DESCR_NAME"),
    "DESCRIPTION" => Loc::getMessage("HELLOWORLD_DESCR_DESCR"),
    "TYPE" => "activity",
    "CLASS" => "HelloWorldActivity",
    "JSCLASS" => "BizProcActivity",
    "CATEGORY" => [
        "ID" => "other",
    ],
    "RETURN" => [
        "Text" => [
            "NAME" => Loc::getMessage("HELLOWORLD_DESCR_FIELD_TEXT"),
            "TYPE" => "string",
        ],
    ],
];