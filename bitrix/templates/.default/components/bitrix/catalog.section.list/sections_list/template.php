<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}
	$section = CIBlockSection::GetByID($_REQUEST['SECTION_ID'])->Fetch();
?>
	<h1><?=$section['NAME']?></h1>
<!--			<pre>--><?// print_r($arResult) ?><!--</pre>-->
<? foreach ($arResult['SECTIONS'] as $vol): ?>
	<? $img = CFile::ResizeImageGet($vol['PICTURE']['ID'], array(
			'width' => 180,
			'height' => 125
	)) ?>
	<div class = "razdel_box">
		<div class = "title">
			<a href = "<?= $vol['SECTION_PAGE_URL'] ?>"><?= $vol['NAME'] ?></a>
		</div>
		<div class = "img">
			<a href = "<?= $vol['SECTION_PAGE_URL'] ?>">
				<img src = "<?= $img['src'] ?>" alt = ""/>
			</a>
		</div>
	</div>
<? endforeach ?>