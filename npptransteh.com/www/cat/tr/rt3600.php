﻿<?php
include_once("../../Php/view.php");
head("Разделительные трансформаторы", $modes);
?>
<div id="text"><div>
	<table cellpadding="0" cellspacing="0" width="100%">
	<tr>
	<td id="t1">
		<?php out_left_colomn(); ?>
	</td>
	<td id="t2">
	<h1>Разделительный трансф. 3600 Вт </h1>
<div id="cat_div">
<table cellpadding="0" cellspacing="1" width="100%">
<tr><td id="cat_t4">Входное и выходное напряжение, В</td><td id="cat_t4">115 / 230 </td></tr>
<tr><td id="cat_t4">Частота, Гц</td><td id="cat_t4">50/60</td></tr>
<tr><td id="cat_t4">Номинальный ток, А</td><td id="cat_t4">32 / 16</td></tr>
<tr><td id="cat_t4">Мягкий запуск</td><td id="cat_t4">есть</td></tr>
<tr><td id="cat_t4">Тип трансформатора</td><td id="cat_t4">Тороидальный (низкий шум, малый вес)</td></tr>	
<tr><td id="cat_t4">Предохранитель на входе</td><td id="cat_t4">есть</td></tr>
<tr><td id="cat_t4">Степень защиты</td><td id="cat_t4">IP 21</td></tr>
<tr><td id="cat_t4">Материал корпуса</td><td id="cat_t4">алюминий</td></tr>
<tr><td id="cat_t4">Вес, кг</td><td id="cat_t4">23.00</td></tr>
</table></div>
<br><br><br>
<img src="http://npptranstech.com/images/transformers/2.jpg" alt="" border="0" class='imgl'><h1>Безопасность и предотвращение гальванической коррозии</h1>

Разделительный трансформатор гальванически разделяет береговую сеть переменного тока и судновую сеть.
<br><br>
Это очень важно для безопасности и позволяет обойтись без гальванических изоляторов.
<br><br>
 
<h1>Безопасность</h1>

Безопасность гарантируется при условии, что оборудование береговой сети функционирует нормально. В случае короткого замыкания или утечки тока на землю сгорит предохранитель или отключится устройство защитного отключения (УЗО). Подключение нулевого провода береговой сети к металлическим частям судна вызовет гальваническую коррозию (см. ниже). При непосредственном подключении берегового питания на борт в случае нарушения изоляции УЗО не сработает.
<br><br<
 
<h1>Гальваническая коррозия</h1>

Гальваническая коррозия происходит, когда два различных металла соединены и у них имеется контакт с жидкостью, проводящей электричество (т.е. являющейся электролитом). Морская и, в меньшей степени, пресная вода являются такими жидкостями. Чем более химически активные металлы в этой паре, тем больше будет коррозия, и наоборот: менее активные (более благородные, например, золото) материалы меньше подвергаются коррозии. Степень гальванической коррозии зависит от нескольких параметров, включающих соотношение площадей, проводимость жидкости, температуру, характер материалов и т.д.
<br><br>
 
<h1>Коррозия возможна при любом материале корпуса судна</h1>

Существует неправильное мнение, что гальваническая коррозия происходит только в металлических и алюминиевых корпусах судов. На самом деле это может произойти на любом судне, когда какая-то металлическая часть (например, гребной вал и винт) попадает в контакт с водой. Как только судно подключается к береговой электросети, гальваническая коррозия быстро разрушает ваши защитные аноды и накидывается на гребной вал, винт и другие металлические части, находящиеся в контакте с водой.
<br><br>
Конечно весьма заманчиво не подключать провод заземления, однако это чрезвычайно опасно, поскольку ни защитный выключатель, ни предохранитель не сработают в случае короткого замыкания на металлическую часть судна.

 <br><br>
<h1>Лучшее решение</h1>

Для того, чтобы избежать гальванической коррозии и в тоже время предотвратить опасные ситуации на борту, лучше всего на входе питания от береговой сети установить разделительный трансформатор.
<br><br>
<center><img src="/images/img08.gif">
</center>
<br><br>
Разделительный трансформатор разрывает электрическую цепь между береговым источником и судном. Напряжение от береговой сети подается на первичную обмотку трансформатора, а судно подключено ко вторичной. При этом в случае короткого замыкания сработают защитный выключатель или предохранитель.
<br><br>
 
<h1>Плавный старт</h1>

Все разделительные трансформаторы Victron Energy имеют систему плавного старта. Такой режим подключения нагрузки не позволяет перегореть предохранителю береговой сети из-за мощного первичного броска тока трансформатора.
<br><br>
 
<h1>Когда судно на берегу</h1>

Когда судно находится на берегу, для наибольшей безопасности рекомендуется соединить нейтраль вторичной обмотки трансформатора с заземлением.
<br><br>
<center><img src="/images/img09.gif">
</center>

	</td>
	</tr></table>
</div>

<?php tail($modes); ?>