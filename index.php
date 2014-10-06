<?
	require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
	$APPLICATION->SetPageProperty("keywords_inner", "Торговое оборудование, холодильное оборудование, винные стеллажи, офисная мебель, мебель для кухни, корпусная мебель, производство");
	$APPLICATION->SetTitle("ДК-Мебель");
?><font face="Arial"> 	 
  <p align="center"><strong>Добро пожаловать на сайт производственной компании &laquo;ДК-Мебель&raquo;</strong></p>
 
  <p align="justify">   Компания «ДК-Мебель» является российским производителем торгового, торгово-выставочного оборудования (торговые витрины, стенды, стеллажи, прилавки), офисной мебели, а также корпусной мебели для дома. Наша компания рада предложить свои услуги по изготовлению торговых витрин для супермаркетов, книжных и ювелирных магазинов, бутиков, аптек, а также для магазинов сувениров, косметики, одежды, обуви, автозапчастей и многих других.</p>
 
  <p align="justify">   Компания «ДК-Мебель» более 15 лет специализируется на комплексном оснащении предприятий розничной торговли и осуществляет полный комплекс работ по проектированию и оснащению магазинов и складов «под ключ».</p>
 
  <p align="justify"></p>
 
  <p align="justify">   Являясь торгово-сервисным партнером крупнейших отечественных и зарубежных производителей &ndash; Arneg, Brandford, Интэко-Мастер, КС Русь, Kifato – мы предлагаем нашим клиентам только высококачественное новое торговое оборудование: стеллажи, витрины, холодильные горки и прилавки, кассовые боксы, широкий выбор сопутствующих товаров, а также все типы стеллажей и мезонинные конструкции для складов.</p>
 	</font> 
<p align="justify" style="margin: 0cm 0cm 10pt;"><font face="Arial"><span style="line-height: 115%;"><hr/></span></font></p>
 <font face="Arial"> 	 
  <p align="left"><font face="Times New Roman"> </font></p>
 </font> 	 
<p align="left"></p>
 	<font face="Arial"> 		 
  <p align="justify"><font face="Times New Roman"> </font></p>
 		 
  <p align="justify" style="margin: 0cm 0cm 10pt; text-indent: 35.4pt;"><font face="Times New Roman"></font></p>
 	</font> 	 
<p align="justify"><font face="Arial"></font></p>
 	 
<p><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"katalog",
	Array(
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => "",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(),
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrFilter",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "N",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
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
		"PAGE_ELEMENT_COUNT" => "30",
		"LINE_ELEMENT_COUNT" => "3",
		"PROPERTY_CODE" => array(),
		"OFFERS_LIMIT" => "5",
		"PRICE_CODE" => array(),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"BASKET_URL" => "/personal/basket.php",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"USE_PRODUCT_QUANTITY" => "N",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => array(),
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N"
	)
);?> 	</p>
 	 
<h2 />
 <? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>