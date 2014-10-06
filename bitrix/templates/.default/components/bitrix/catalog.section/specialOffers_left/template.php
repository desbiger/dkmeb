<!--<pre>--><?//print_r($arResult)?><!--</pre>-->
<div class = "left_block" style="background: none!important;">
	<h2>Спецпредложения</h2>
	<? foreach ($arResult['ITEMS'] as $news): ?>
		<?
		$img = CFile::ResizeImageGet($news['DETAIL_PICTURE']['ID'], array(
				'width' => 120,
				'height' => 120
		));
		$this->AddEditAction($news['ID'], $news['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($news['ID'], $news['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
		?>
		<p style = "text-align: center" id = "<?= $this->GetEditAreaId($news['ID']); ?>">
			<a href = "<?= $news['DETAIL_PAGE_URL'] ?>">
				<img src = "<?=$img['src']?>" alt = ""/>
				<br/>
				<?=$news['NAME']?>
			</a>
		</p>
	<? endforeach ?>
</div>