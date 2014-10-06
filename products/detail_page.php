<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Детальная страница товара");
?> 
<p><?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"",
	Array(
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "-"
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.element",
	"tovar_detail",
	Array(
		"IBLOCK_TYPE" => "products",
		"IBLOCK_ID" => "2",
		"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
		"ELEMENT_CODE" => "",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => "",
		"PROPERTY_CODE" => array(0=>"PRICE",1=>"ARTNUMBER",2=>"SIZE",3=>"SOSTIOT",4=>"AKSS",5=>"MATERIAL",6=>"MANUFACTURER",7=>"S_SIZE",8=>"",),
		"OFFERS_LIMIT" => "0",
		"TEMPLATE_THEME" => "blue",
		"ADD_PICT_PROP" => "-",
		"LABEL_PROP" => "-",
		"DISPLAY_NAME" => "Y",
		"ADD_DETAIL_TO_SLIDER" => "N",
		"DISPLAY_COMPARE" => "N",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_BTN_COMPARE" => "Сравнение",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"USE_VOTE_RATING" => "N",
		"BRAND_USE" => "N",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"USE_ELEMENT_COUNTER" => "Y",
		"PRICE_CODE" => array(),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"BASKET_URL" => "/personal/basket.php",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"USE_PRODUCT_QUANTITY" => "N",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => array(),
		"LINK_IBLOCK_TYPE" => "",
		"LINK_IBLOCK_ID" => "",
		"LINK_PROPERTY_SID" => "",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity"
	)
);?></p>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>