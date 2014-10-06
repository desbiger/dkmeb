<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?> 
<p><font face="Arial">Обратитесь к нашим специалистам и получите профессиональную консультацию по вопросам создания и покупки мебели (от дизайна, разработки технического задания до доставки мебели к Вам домой).</font></p>
 <font face="Arial"> </font> 
<p><font face="Arial">Вы можете обратиться к нам по телефону, по электронной почте или договориться о встрече в нашем офисе. Будем рады помочь вам и ответить на все ваши вопросы. </font></p>
 <font face="Arial"> </font> 
<h3><font face="Arial">Телефоны:                </font></h3>
 <font face="Arial"> </font> 
<ul><font face="Arial"> </font> 
  <li><b><font face="Arial">+7 (915) 216-15-40</font></b></li>
 <font face="Arial"> </font> </ul>
 
<p><strong><font face="Arial"></font></strong></p>
 
<ul> 
  <li><font face="Arial"><strong>(8332) 78-89-15</strong></font></li>
 
  <li><font face="Arial"><strong>(8332) 56-69-91</strong></font></li>
 
  <li><font face="Arial"><strong>(8332) 56-51-26</strong></font></li>
 <font face="Arial"><strong> 		</strong></font></ul>
 <font face="Arial"> </font> 
<p><font face="Arial"> 	</font></p>
 <font face="Arial"> </font> 
<ul><font face="Arial"> </font></ul>
 <font face="Arial"> </font> 
<h3><font face="Arial">Email</font></h3>
 <font face="Arial"> </font> 
<ul><font face="Arial"> </font> 
  <li><a href="mailto:info@dkmeb.ru" ><font face="Arial">info@dkmeb.ru</font></a><font face="Arial"> &mdash; общие вопросы</font></li>
 <font face="Arial"> </font> 
  <li><a href="mailto:sales@dkmeb.ru" ><font face="Arial">sales@dkmeb.ru</font></a><font face="Arial"> — приобретение продукции</font></li>
 <font face="Arial"> </font></ul>
 <font face="Arial"> </font> 
<h3><font face="Arial">Офис</font></h3>
 <font face="Arial"> </font> 
<p><font face="Arial">141006, г. Мытищи, ул. Шараповский проезд, д. 3 е, ТК &quot;Маргарита&quot; </font></p>
 <font face="Arial"> </font> 
<p align="left"><font face="Arial"><?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	Array(
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:5:{s:10:\"yandex_lat\";d:55.909330660470076;s:10:\"yandex_lon\";d:37.738732023545204;s:12:\"yandex_scale\";i:12;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.764131044891485;s:3:\"LAT\";d:55.91803043549356;s:4:\"TEXT\";s:19:\"\"ДК Мебель\"\";}}s:9:\"POLYLINES\";a:0:{}}",
		"MAP_WIDTH" => "740",
		"MAP_HEIGHT" => "500",
		"CONTROLS" => array(0=>"ZOOM",1=>"MINIMAP",2=>"TYPECONTROL",3=>"SCALELINE",),
		"OPTIONS" => array(0=>"ENABLE_DRAGGING",),
		"MAP_ID" => ""
	)
);?></font></p>
 <font face="Arial"> </font> 
<h3><font face="Arial">Офис</font></h3>
 <font face="Arial"> </font> 
<p><font face="Arial">610014, г. Киров, ул. Ивана Попова, д. 61</font></p>
 <font face="Arial"> </font> 
<p><font face="Arial"><?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	Array(
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:58.5822301052922;s:10:\"yandex_lon\";d:49.639603240195434;s:12:\"yandex_scale\";i:12;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:49.63047299999998;s:3:\"LAT\";d:58.57496125915514;s:4:\"TEXT\";s:32:\"\"ДК Мебель\" - Киров\";}}}",
		"MAP_WIDTH" => "740",
		"MAP_HEIGHT" => "500",
		"CONTROLS" => array(0=>"ZOOM",1=>"MINIMAP",2=>"TYPECONTROL",3=>"SCALELINE",),
		"OPTIONS" => array(0=>"ENABLE_DRAGGING",),
		"MAP_ID" => ""
	)
);?></font></p>
 
<p align="left"></p>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>