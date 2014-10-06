<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}
?>
<!--<pre>--><?//print_r($arResult)?><!--</pre>-->
<div id = "carousel">
	<ul>
		<? foreach ($arResult['ITEMS'] as $vol): ?>
			<? $img = CFile::ResizeImageGet($vol['DETAIL_PICTURE'], array(
					'width' => 130,
					'height' => 95
			)) ?>
			<li class = "item">
				<a href = "<?= $vol['DETAIL_PAGE_URL'] ?>">
					<img src = "<?= $img['src'] ?>"/>
				</a>
			</li>
		<? endforeach ?>
	</ul>
</div>

