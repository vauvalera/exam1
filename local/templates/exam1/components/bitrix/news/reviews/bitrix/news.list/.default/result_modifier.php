<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach($arResult['ITEMS'] as &$arItem){
    if (empty($arItem['PREVIEW_PICTURE'])){
        $arItem["PREVIEW_PICTURE"]["SRC"] = "/local/templates/exam1/img/rew/no_photo.jpg";
    }
}   
?>