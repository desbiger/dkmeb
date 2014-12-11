<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}
?>
<!--<pre>--><? //print_r($arResult)?><!--</pre>-->
<div style = "clear: both"></div>
<h2>Фотогалерея</h2>
<? foreach ($arResult['PROPERTIES']['PHOTOS']['VALUE'] as $vol): ?>
	<? $img = CFile::ResizeImageGet($vol, array(
			'width' => 230,
			'height' => 230
	), BX_RESIZE_IMAGE_EXACT) ?>
	<a href = "<?= CFile::GetPath($vol) ?>" rel="123" class = "fancy">
		<img src = "<?= $img['src'] ?>" alt = ""/>
	</a>
<? endforeach ?>


