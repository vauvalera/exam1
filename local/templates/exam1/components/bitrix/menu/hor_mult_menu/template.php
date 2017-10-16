<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<nav class="nav">

            <div class="inner-wrap">
                <div class="menu-block popup-wrap">
                    <a href="" class="btn-menu btn-toggle"></a>
                    <div class="menu popup-block">
<ul>
	
<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li><a href="<?=$arItem["LINK"]?>">			
			<?=$arItem["TEXT"]?>
			</a>
				<ul class>
			<?if(isset($arItem['PARAMS']['TEXT1'])):?>
			<div class="menu-text">
			<?=$arItem['PARAMS']['TEXT1']?>
			</div>
			<?endif?>
		<?else:?>
			<li><a href="<?=$arItem["LINK"]?>">
			<?=$arItem["TEXT"]?></a>
				<ul>
			<?if(isset($arItem['PARAMS']['TEXT2'])):?>
			<div class="menu-text">
			<?=$arItem['PARAMS']['TEXT2']?>
			</div>
			<?endif;?>
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>
			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li <?if(!empty($arItem['PARAMS']['IMG'])):?>
						class="main-page"
			    <?endif;?>><a href="<?=$arItem["LINK"]?>"
				
				><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
				
					</div>
                    <div class="menu-overlay"></div>
                </div>
            </div>
        </nav>
<div class="menu-clear-left"></div>
<?endif?>