<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><?$APPLICATION->IncludeComponent("bitrix:main.include", "left_menu", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"AREA_FILE_SHOW" => "sect",	// Показывать включаемую область
		"AREA_FILE_SUFFIX" => "inc",	// Суффикс имени файла включаемой области
		"EDIT_TEMPLATE" => "standard.php",	// Шаблон области по умолчанию
		"AREA_FILE_RECURSIVE" => "Y",	// Рекурсивное подключение включаемых областей разделов
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>