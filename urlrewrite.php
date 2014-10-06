<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/products/(.*)/(.*)/.*#",
		"RULE" => "SECTION_ID=\$1&ELEMENT_ID=\$2",
		"ID" => "",
		"PATH" => "/products/detail_page.php",
	),
	array(
		"CONDITION" => "#^/products/(.*)/.*#",
		"RULE" => "SECTION_ID=\$1&ELEMENT_ID=\$2",
		"ID" => "",
		"PATH" => "/products/index.php",
	),
	array(
		"CONDITION" => "#^/services/#",
		"RULE" => "",
		"ID" => "bitrix:catalog",
		"PATH" => "/services/index.php",
	),
	array(
		"CONDITION" => "#^/news/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/news/index.php",
	),
);

?>