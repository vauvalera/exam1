<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>


	<?foreach($arResult["ITEMS"] as $arItem):?>
 <div class="review-block">

							<div class="review-text">	
								<div class="review-block-title"><span class="review-block-name"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></span><span class="review-block-description"><?=$arItem["ACTIVE_FROM"]?>, <?=$arItem["PROPERTIES"]["POSITION"]["VALUE"];?>, <?=$arItem["PROPERTIES"]["COMPANY"]["VALUE"];?></span></div>
								
								<div class="review-text-cont">
								<?echo $arItem["PREVIEW_TEXT"];?>	
								</div>
							</div>
							<div class="review-img-wrap"><a href="#"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="img"></a></div>

</div>
	<?endforeach;?>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
