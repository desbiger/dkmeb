<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?> <?$APPLICATION->IncludeComponent(
	"bitrix:furniture.catalog.random",
	".default",
	Array(
		"IBLOCK_TYPE" => "products",
		"IBLOCKS" => array("2"),
		"PARENT_SECTION" => "",
		"DETAIL_URL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "180",
		"CACHE_NOTES" => "",
		"CACHE_GROUPS" => "Y"
	)
);?>