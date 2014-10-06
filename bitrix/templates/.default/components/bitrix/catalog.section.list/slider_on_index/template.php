<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}
?>
<!--<pre>--><?//print_r($arResult)?><!--</pre>-->
<div id = "carousel">
	<ul>
		<? foreach ($arResult['SECTIONS'] as $vol): ?>
			<? if ($vol['UF_SLIDER']): ?>
				<? $img = CFile::ResizeImageGet($vol['PICTURE'], array(
						'width' => 160,
						'height' => 110
				)) ?>
					
				<li class = "item">
					<a href = "<?= $vol['SECTION_PAGE_URL'] ?>" title="<?=$vol['NAME']?>">
						<img src = "<?= $img['src'] ?>"/>
					</a>
				</li>
			<? endif ?>
		<? endforeach ?>
	</ul>
</div>