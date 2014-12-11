<!DOCTYPE html>
<html>
<head>
	<? $APPLICATION->ShowHead() ?>
	<title><? $APPLICATION->ShowTitle() ?></title>

	<link href = "/include/css/style.css" type = "text/css" rel = "stylesheet">
	<link href = "/bitrix/templates/base/fancybox/jquery.fancybox-1.3.4.css" type = "text/css" rel = "stylesheet">
	<script type = "text/javascript" src = "/include/js/jquery-1.6.2.min.js"></script>
	<script type = "text/javascript" src = "/bitrix/templates/base/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script type = "text/javascript" src = "/bitrix/templates/base/js/jquery.carouFredSel-5.5.5-packed.js"></script>
	<script type = "text/javascript">
		$(function () {
			$('.fancy').fancybox();

			var screen = $(window).height();
			if ((screen - 291) > $('.content').height()) {
				$('.content').height(screen - 291);
			}

			$('#carousel ul').carouFredSel({

				prev: '#prev',
				next: '#next',
				pagination: "#pager",
				auto: 3000,
				scroll: 825,
				pauseOnHover: true
			});

		})
	</script>
</head>
<body>
<? $APPLICATION->ShowPanel() ?>
<div class = "wrapper">
<div class = "header">
	<div class = "phones">
		<i>г. Москва +7 (915) 216-15-40</i>
		<i>г. Киров (8332) 78-89-15; 56-69-91; 56-51-26</i>
	</div>
	<div class = "banners">
		<h1>
			<a href = "/">
				<img src = "/include/img/images/logo_03.jpg" alt = "" height = "95"/>
			</a>
		</h1>
		<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"slider_on_index", 
	array(
		"IBLOCK_TYPE" => "products",
		"IBLOCK_ID" => "2",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"COUNT_ELEMENTS" => "Y",
		"TOP_DEPTH" => "3",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_USER_FIELDS" => array(
			0 => "UF_SLIDER",
			1 => "",
		),
		"SECTION_URL" => "",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y"
	),
	false
);?>
		<!--		--><? // $GLOBALS['arrFilter']['PROPERTY_SHOW_ON_SLIDER_VALUE'] = 'да' ?>
		<!--		--><? //$APPLICATION->IncludeComponent("bitrix:catalog.section", "slider_on_base", array(
			//						"IBLOCK_TYPE" => "products",
			//						"IBLOCK_ID" => "2",
			//						"SECTION_ID" => "",
			//						"SECTION_CODE" => "",
			//						"SECTION_USER_FIELDS" => array(
			//								0 => "",
			//								1 => "",
			//						),
			//						"ELEMENT_SORT_FIELD" => "sort",
			//						"ELEMENT_SORT_ORDER" => "asc",
			//						"ELEMENT_SORT_FIELD2" => "id",
			//						"ELEMENT_SORT_ORDER2" => "desc",
			//						"FILTER_NAME" => "arrFilter",
			//						"INCLUDE_SUBSECTIONS" => "Y",
			//						"SHOW_ALL_WO_SECTION" => "Y",
			//						"PAGE_ELEMENT_COUNT" => "30",
			//						"LINE_ELEMENT_COUNT" => "3",
			//						"PROPERTY_CODE" => array(
			//								0 => "SHOW_ON_SLIDER",
			//								1 => "",
			//						),
			//						"OFFERS_LIMIT" => "5",
			//						"SECTION_URL" => "",
			//						"DETAIL_URL" => "",
			//						"SECTION_ID_VARIABLE" => "SECTION_ID",
			//						"AJAX_MODE" => "N",
			//						"AJAX_OPTION_JUMP" => "N",
			//						"AJAX_OPTION_STYLE" => "Y",
			//						"AJAX_OPTION_HISTORY" => "N",
			//						"CACHE_TYPE" => "N",
			//						"CACHE_TIME" => "36000000",
			//						"CACHE_GROUPS" => "Y",
			//						"SET_META_KEYWORDS" => "Y",
			//						"META_KEYWORDS" => "-",
			//						"SET_META_DESCRIPTION" => "Y",
			//						"META_DESCRIPTION" => "-",
			//						"BROWSER_TITLE" => "-",
			//						"ADD_SECTIONS_CHAIN" => "N",
			//						"DISPLAY_COMPARE" => "N",
			//						"SET_TITLE" => "Y",
			//						"SET_STATUS_404" => "N",
			//						"CACHE_FILTER" => "N",
			//						"PRICE_CODE" => array(),
			//						"USE_PRICE_COUNT" => "N",
			//						"SHOW_PRICE_COUNT" => "1",
			//						"PRICE_VAT_INCLUDE" => "Y",
			//						"BASKET_URL" => "/personal/basket.php",
			//						"ACTION_VARIABLE" => "action",
			//						"PRODUCT_ID_VARIABLE" => "id",
			//						"USE_PRODUCT_QUANTITY" => "N",
			//						"ADD_PROPERTIES_TO_BASKET" => "Y",
			//						"PRODUCT_PROPS_VARIABLE" => "prop",
			//						"PARTIAL_PRODUCT_PROPERTIES" => "N",
			//						"PRODUCT_PROPERTIES" => array(),
			//						"PAGER_TEMPLATE" => ".default",
			//						"DISPLAY_TOP_PAGER" => "N",
			//						"DISPLAY_BOTTOM_PAGER" => "Y",
			//						"PAGER_TITLE" => "Товары",
			//						"PAGER_SHOW_ALWAYS" => "Y",
			//						"PAGER_DESC_NUMBERING" => "N",
			//						"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			//						"PAGER_SHOW_ALL" => "Y",
			//						"AJAX_OPTION_ADDITIONAL" => "",
			//						"PRODUCT_QUANTITY_VARIABLE" => "quantity"
			//				), false);
		?>


	</div>
	<?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", array(
			"ROOT_MENU_TYPE" => "top",
			"MENU_CACHE_TYPE" => "N",
			"MENU_CACHE_TIME" => "3600",
			"MENU_CACHE_USE_GROUPS" => "Y",
			"MENU_CACHE_GET_VARS" => array(),
			"MAX_LEVEL" => "1",
			"CHILD_MENU_TYPE" => "left",
			"USE_EXT" => "N",
			"DELAY" => "N",
			"ALLOW_MULTI_SELECT" => "N"
	), false);?>


</div>
<div class = "center">

	<div class = "left">
		<?$APPLICATION->IncludeComponent("bitrix:menu", "left_menu", array(
				"ROOT_MENU_TYPE" => "catalog",
				"MENU_CACHE_TYPE" => "N",
				"MENU_CACHE_TIME" => "3600",
				"MENU_CACHE_USE_GROUPS" => "Y",
				"MENU_CACHE_GET_VARS" => array(),
				"MAX_LEVEL" => "1",
				"CHILD_MENU_TYPE" => "left",
				"USE_EXT" => "N",
				"DELAY" => "N",
				"ALLOW_MULTI_SELECT" => "N"
		), false);?>
		<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"news_left", 
	array(
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => "1",
		"SECTION_ID" => "",
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
		"PAGE_ELEMENT_COUNT" => "2",
		"LINE_ELEMENT_COUNT" => "3",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_LIMIT" => "5",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"META_KEYWORDS" => "-",
		"SET_META_DESCRIPTION" => "Y",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"ADD_SECTIONS_CHAIN" => "N",
		"DISPLAY_COMPARE" => "N",
		"SET_TITLE" => "Y",
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
		"SET_BROWSER_TITLE" => "Y"
	),
	false
);?>

		<div class = "left_block">
			<form action = "/search/">
				<input type = "text" name="q"/>
				<input type = "submit" value = "Найти"/>
			</form>
		</div>
		<? $GLOBALS['SpecailOffers']['PROPERTY_SPECIALOFFER_VALUE'] = 'да' ?>

		<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"specialOffers_left", 
	array(
		"IBLOCK_TYPE" => "products",
		"IBLOCK_ID" => "2",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"ELEMENT_SORT_FIELD" => "RAND",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "SpecailOffers",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "Y",
		"PAGE_ELEMENT_COUNT" => "2",
		"LINE_ELEMENT_COUNT" => "1",
		"PROPERTY_CODE" => array(
			0 => "SPECIALOFFER",
			1 => "PRICE",
			2 => "ARTNUMBER",
			3 => "SOSTIOT",
			4 => "SIZE",
			5 => "SHOW_ON_SLIDER",
			6 => "AKSS",
			7 => "MATERIAL",
			8 => "MANUFACTURER",
			9 => "",
		),
		"OFFERS_LIMIT" => "30",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"META_KEYWORDS" => "-",
		"SET_META_DESCRIPTION" => "Y",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"ADD_SECTIONS_CHAIN" => "N",
		"DISPLAY_COMPARE" => "N",
		"SET_TITLE" => "Y",
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
			0 => "SPECIALOFFER",
			1 => "SOSTIOT",
			2 => "SHOW_ON_SLIDER",
			3 => "AKSS",
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
		"SET_BROWSER_TITLE" => "Y"
	),
	false
);?>
	</div>
	<div class = "right">


		<div class = "content">