<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}
?>

<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "sections_list", Array(
	"IBLOCK_TYPE" => "products",	// Тип инфоблока
	"IBLOCK_ID" => "2",	// Инфоблок
	"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
	"SECTION_CODE" => "",	// Код раздела
	"COUNT_ELEMENTS" => "N",	// Показывать количество элементов в разделе
	"TOP_DEPTH" => "1",	// Максимальная отображаемая глубина разделов
	"SECTION_FIELDS" => array(	// Поля разделов
		0 => "",
		1 => "",
	),
	"SECTION_USER_FIELDS" => array(	// Свойства разделов
		0 => "",
		1 => "",
	),
	"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
	"CACHE_TYPE" => "N",	// Тип кеширования
	"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
	"CACHE_GROUPS" => "Y",	// Учитывать права доступа
	"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
	"VIEW_MODE" => "LINE",	// Вид списка подразделов
	"SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
	),
	false
);?>
<? foreach ($arResult['ITEMS'] as $vol): ?>
	<div class = "product">
		<a href = "<?= $vol['DETAIL_PAGE_URL'] ?>">
			<?= $vol['NAME'] ?><br/>

			<div class = "product_picture">
				<? $img = CFile::ResizeImageGet($vol['DETAIL_PICTURE']['ID'], array(
						'width' => 120,
						'height' => 120
				)) ?>
				<img src = "<?= $img['src'] ?>" alt = ""/>
			</div>
		</a>
	</div>

<? endforeach ?>