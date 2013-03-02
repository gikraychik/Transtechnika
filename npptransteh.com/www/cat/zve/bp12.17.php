﻿<?php
include_once("../../Php/view.php");
head("Зарядные устройства Victron Energy", $modes);
?>
<div id="text"><div>
	<table cellpadding="0" cellspacing="0" width="100%">
	<tr>
	<td id="t1">
		<?php out_left_colomn(); ?>
	</td>
	<td id="t2">
		<h1>Blue Power 12/17 водозащищенный </h1>
<div id="cat_div">
<table cellpadding="0" cellspacing="1" width="100%">
<tr><td id="cat_t4">Диапазон входных напряжений, В</td><td id="cat_t4">200-265</td></tr>
<tr><td id="cat_t4">Частота, Гц</td><td id="cat_t4">45-65</td></tr>
<tr><td id="cat_t4">Зарядное напряжение, пост. ток, В в режиме "поглощения"</td><td id="cat_t4">14.4</td></tr>
<tr><td id="cat_t4">Зарядное напряжение, пост. ток, В в режиме "наполнения"</td><td id="cat_t4">13.7</td></tr>
<tr><td id="cat_t4">Зарядное напряжение, пост. ток, В в режиме "хранения"</td><td id="cat_t4">N/A</td></tr>	
<tr><td id="cat_t4">Ток зарядки, А</td><td id="cat_t4">17.0</td></tr>
<tr><td id="cat_t4">Характеристика зарядки</td><td id="cat_t4">3-х ступенчатая с макс. временем поглощения 18 час</td></tr>
<tr><td id="cat_t4">Минимальная емкость батарей, Ач</td><td id="cat_t4">35</td></tr>
<tr><td id="cat_t4">Ток останова, А</td><td id="cat_t4">1,7</td></tr>
<tr><td id="cat_t4">Может использоваться как источник питания</td><td id="cat_t4">да </td></tr>
<tr><td id="cat_t4">Защита:</td><td id="cat_t4"><li> от обратной полярности батареи (предохранитель в кабеле к батарее)
</li><li> от короткого замыкания на выходе
</li><li> от перегрева
</li></td></tr>
<tr><td id="cat_t4">Диапазон рабочей температуры, °C</td><td id="cat_t4">от -20 до +60</td></tr>
<tr><td id="cat_t4">Допустимая влажность (без конденсации), %</td><td id="cat_t4">до 100</td></tr>
<tr><td id="cat_t4">Материал и цвет корпуса</td><td id="cat_t4">алюминий, синий</td></tr>
<tr><td id="cat_t4">Присоединение батареи</td><td id="cat_t4">черный и красный кабели 1,5 м</td></tr>
<tr><td id="cat_t4">Присоединение к 230 В перем. тока</td><td id="cat_t4">кабель 1,5 м с разъемом Schuko </td></tr>
<tr><td id="cat_t4">Степень защиты</td><td id="cat_t4">IP 67</td></tr>
<tr><td id="cat_t4">Вес, кг</td><td id="cat_t4">1,40</td></tr>
</table></div>
<br><br><br>
<img src="http://npptranstech.com/images/bluepower/5.jpg" alt="" border="0" class='imgl'><h1>Универсальный вход: 90-265 В переменного тока или 90-350 В постоянного тока</h1>
Зарядное устройство будет работать независимо от того, какое питание подано.
<br><br>
<h1>Адаптивная 4-х ступенчатая зарядка: объемная набивка большим током - поглощение - наполнение - хранение</h1>
Особенностью зарядного устройства Blue Power является контролируемое микропроцессором адаптивное управление зарядкой аккумуляторной батареи. Это позволяет автоматически оптимизировать процесс зарядки в соответствии с вариантом использования аккумулятора.
<br><br>
<h1>Уменьшение профилактики и износа не используемой батареи: режим хранения</h1>
Режим хранения всегда включается, если аккумулятор в течение 24 часов не подвергался разрядке. В режиме хранения напряжение наполнения батареи уменьшается до 2,2 В на банку (13,2 В для батареи 12 В) для минимизации газовыделения и коррозии решеток положительных пластин. Один раз в неделю напряжение поднимается обратно до уровня поглощения, чтобы "компенсировать" заряд аккумулятора. Эта особенность предотвращает расслоение электролита и процесс сульфатации, главную причину преждевременного выхода из строя батареи.
<br><br>
<h1>Защита от перегрева и бесшумный вентилятор охлаждения</h1>
При возрастании температуры до 60°C выходной ток будет уменьшаться, но зарядное устройство Blue Power не выйдет из строя.
<br>
Работу устройства и вентилятора охлаждения практически не слышно.
<br><br>
<h1>Два светодиода для индикации состояния</h1>
<br><br>
    * Желтый светодиод: объемная набивка (мигает быстро), поглощение (мигает медленно), наполнение (горит постоянно)<br>

    * Зеленый светодиод: устройство включено<br>

 <br>
<h1>Узнайте больше об аккумуляторах и их зарядке</h1>

Чтобы узнать больше о батареях и их зарядке, обратитесь к брошюре Victron Energy "Беспредельная энергия" (англ. яз., www.victronenergy.com).

	</td>
	</tr></table>
</div>

<?php tail($modes); ?>