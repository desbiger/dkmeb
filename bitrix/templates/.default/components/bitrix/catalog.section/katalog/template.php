<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}
?>


<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "sections_list", Array(
				"IBLOCK_TYPE" => "products",
			// Тип инфоблока
				"IBLOCK_ID" => "2",
			// Инфоблок
				"SECTION_ID" => $_REQUEST["SECTION_ID"],
			// ID раздела
				"SECTION_CODE" => "",
			// Код раздела
				"COUNT_ELEMENTS" => "N",
			// Показывать количество элементов в разделе
				"TOP_DEPTH" => "1",
			// Максимальная отображаемая глубина разделов
				"SECTION_FIELDS" => array( // Поля разделов
						0 => "",
						1 => "",
				),
				"SECTION_USER_FIELDS" => array( // Свойства разделов
						0 => "",
						1 => "",
				),
				"SECTION_URL" => "",
			// URL, ведущий на страницу с содержимым раздела
				"CACHE_TYPE" => "N",
			// Тип кеширования
				"CACHE_TIME" => "36000000",
			// Время кеширования (сек.)
				"CACHE_GROUPS" => "Y",
			// Учитывать права доступа
				"ADD_SECTIONS_CHAIN" => "Y",
			// Включать раздел в цепочку навигации
				"VIEW_MODE" => "LINE",
			// Вид списка подразделов
				"SHOW_PARENT_NAME" => "Y",
			// Показывать название раздела
		), false);?>
<? foreach ($arResult['ITEMS'] as $vol): ?>
	<div class = "product">
		<a href = "<?= $vol['DETAIL_PAGE_URL'] ?>">
			<?= $vol['NAME'] ?><br/>

			<div class = "product_picture">
				<? $img = CFile::ResizeImageGet($vol['DETAIL_PICTURE']['ID'], array(
						'width' => 155,
						'height' => 127
				)) ?>
				<img src = "<?= $img['src'] ?>" alt = ""/>
			</div>
		</a>
	</div>

<? endforeach ?>

<? if ($arResult['UF_GALLERY']): ?>
	<? $APPLICATION->IncludeComponent(
	"bitrix:catalog.element", 
	"photo_gallery", 
	array(
		"IBLOCK_TYPE" => "products",
		"IBLOCK_ID" => "6",
		"ELEMENT_ID" => $arResult["UF_GALLERY"],
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrFilter",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "N",
		"PAGE_ELEMENT_COUNT" => "30",
		"LINE_ELEMENT_COUNT" => "3",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "PHOTOS",
		),
		"OFFERS_LIMIT" => "5",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"BROWSER_TITLE" => "-",
		"SET_META_KEYWORDS" => "Y",
		"META_KEYWORDS" => "-",
		"SET_META_DESCRIPTION" => "Y",
		"META_DESCRIPTION" => "-",
		"ADD_SECTIONS_CHAIN" => "N",
		"DISPLAY_COMPARE" => "N",
		"SET_STATUS_404" => "N",
		"CACHE_FILTER" => "N",
		"PRICE_CODE" => array(
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"BASKET_URL" => "/personal/basket.php",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"USE_PRODUCT_QUANTITY" => "N",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => array(
		),
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"ELEMENT_CODE" => "",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"ADD_ELEMENT_CHAIN" => "N",
		"USE_ELEMENT_COUNTER" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_IBLOCK_ID" => "",
		"LINK_PROPERTY_SID" => "",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#"
	),
	false
); ?>
<? endif ?>