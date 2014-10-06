<div class = "left_block">
	<h2>Новости</h2>
	<? foreach ($arResult['ITEMS'] as $news): ?>
		<?
		$this->AddEditAction($news['ID'], $news['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($news['ID'], $news['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
		?>

		<p id = "<?= $this->GetEditAreaId($news['ID']); ?>">
			<i><?= $news['DATE_ACTIVE_FROM'] ?></i>
			<a href = "<?= $news['DETAIL_PAGE_URL'] ?>"><?= $news['NAME'] ?></a>
		</p>
	<? endforeach ?>
</div>