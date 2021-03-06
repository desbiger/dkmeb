<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}
?>
<!--<pre>--><? //print_r($arResult)?><!--</pre>-->
<div class = "tovar_detail">
	<h2><?= $arResult['NAME'] ?></h2>

	<div class = "img_conent">
		<? $img = CFile::ResizeImageGet($arResult['DETAIL_PICTURE']['ID'], array(
				'width' => 300,
				'height' => 800
		)) ?>
		<img src = "<?= $img['src'] ?>" alt = ""/>
	</div>
	<table class="base_about">
		<?$not_whow = array(
				'SOSTIOT',
				'SPECIALOFFER',
				'AKSS',
				'SHOW_ON_SLIDER',
		)?>
		<? foreach ($arResult['PROPERTIES'] as $vol): ?>
			<? if ($vol['VALUE'] && !in_array($vol['CODE'], $not_whow)): ?>
				<tr>
					<td <?= $vol['CODE'] == 'PRICE' ? " class='price'" : '' ?>><?= $vol['NAME'] ?></td>
					<td <?= $vol['CODE'] == 'PRICE' ? " class='price'" : '' ?>><?=
							$vol['CODE'] == 'PRICE' ? preg_replace("|^([0-9]+)([0-9]{3})(.*)|", "$1 $2$3", $vol['VALUE']) . " руб." : $vol['VALUE'] ?></td>
				</tr>
			<? endif ?>
		<? endforeach ?>
	</table>
	<?= $arResult['DETAIL_TEXT'] ?>
	<!--	   --><? //= count($arResult['PROPERTIES']['SOSTIOT']['VALUE'])?>
	<? if (is_array($arResult['PROPERTIES']['SOSTIOT']['VALUE'])): ?>
		<div style = "clear: both"></div>
		<h3>Все размеры:</h3>
		<hr/>
		<table class = "akss">
			<tr>
				<td>Наименование</td>
				<td style = "width: 96px">ДхШхВ</td>
				<td>Цена, руб.</td>
			</tr>
			<!--			<tr>-->
			<!--				<td>--><? //= $arResult['NAME'] ?><!--</td>-->
			<!--				<td style = "text-align: center">--><? //= $arResult['PROPERTIES']['SIZE']['VALUE'] ?><!--</td>-->
			<!--				<td style="text-align: right" class = "price">-->
			<? //= preg_replace("|^([0-9]+)([0-9]{3})(.*)|", "$1 $2$3", $arResult['PROPERTIES']['PRICE']['VALUE'])
				//
			?><!--</td>-->
			<!--			</tr>-->
			<? foreach ($arResult['PROPERTIES']['SOSTIOT']['VALUE'] as $vol): ?>
				<? $obj = CIBlockElement::GetByID($vol);
				$el     = $obj->GetNextElement();

				$element = $el->GetFields();
				$element['PROP'] = $el->GetProperties()
				?>
				<!--					<pre>--><? //print_r($element)?><!--</pre>-->
				<tr>
					<td><?= $element['NAME'] ?></td>
					<td style = "text-align: center"><?= $element['PROP']['SIZE']['VALUE'] ?></td>
					<td style = "text-align: right" class = "price"><?=
							preg_replace("|^([0-9]+)([0-9]{3})(.*)|", "$1 $2$3", $element['PROP']['PRICE']['VALUE'])
						?></td>
				</tr>
			<? endforeach ?>
		</table>
	<? endif ?>
	<? if (is_array($arResult['PROPERTIES']['AKSS']['VALUE'])): ?>
		<div style = "clear: both"></div>
		<h3>Аксессуары:</h3>
		<hr/>
		<table class = "akss">
			<tr>
				<td>Наименование</td>
				<td style = "width: 96px"></td>
				<td>Цена, руб.</td>
			</tr>
			<? foreach ($arResult['PROPERTIES']['AKSS']['VALUE'] as $vol): ?>
				<? $el   = CIBlockElement::GetList(null, array('ID' => $vol))
						->GetNextElement();
				$element = $el->GetFields();
				$element['PROP'] = $el->GetProperties()
				?>
				<tr>
					<td><?= $element['NAME'] ?></td>
					<td><?= $element['PROP']['SIZE']['VALUE']?></td>
					<td style = "text-align: right" class = "price"><?=
							preg_replace("|^([0-9]+)([0-9]{3})(.*)|", "$1 $2$3", $element['PROP']['PRICE']['VALUE'])
						?></td>
				</tr>
			<? endforeach ?>
		</table>
	<? endif ?>
</div>

