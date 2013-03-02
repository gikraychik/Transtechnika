﻿<?php
include_once("../../Php/view.php");
head("Зарядные устройства Phoenix", $modes);
?>
<div id="text"><div>
	<table cellpadding="0" cellspacing="0" width="100%">
	<tr>
	<td id="t1">
		<?php out_left_colomn(); ?>
	</td>
	<td id="t2">
		<h1>Phoenix 24/16 </h1>
<div id="cat_div">
<table cellpadding="0" cellspacing="1" width="100%">
<tr><td id="cat_t4">Диапазон входного напряжения перем. тока, В</td><td id="cat_t4">90-265</td></tr>
<tr><td id="cat_t4">Частота, Гц</td><td id="cat_t4">45-65 </td></tr>
<tr><td id="cat_t4">Коэффициент мощности</td><td id="cat_t4">1</td></tr>
<tr><td id="cat_t4">Зарядное напряжение, пост. ток, В в режиме "поглощения"</td><td id="cat_t4">28,8</td></tr>
<tr><td id="cat_t4">Зарядное напряжение, пост. ток, В в режиме "наполнения"</td><td id="cat_t4">27,6</td></tr>	
<tr><td id="cat_t4">Зарядное напряжение, пост. ток, В в режиме "хранения"</td><td id="cat_t4">26,4</td></tr>
<tr><td id="cat_t4">Ток зарядки сервисной батареи, А</td><td id="cat_t4">16,0</td></tr>
<tr><td id="cat_t4">Ток зарядки стартерной батареи, А</td><td id="cat_t4">4.0</td></tr>
<tr><td id="cat_t4">Характеристика зарядки</td><td id="cat_t4">{TOK_ZARYADKI_STARTERNOJ_BATARдаEI_A_344}</td></tr>
<tr><td id="cat_t4">Емкость батарей, Ач</td><td id="cat_t4">100-200</td></tr>
<tr><td id="cat_t4">Датчик температуры</td><td id="cat_t4">есть</td></tr>
<tr><td id="cat_t4">Может использоваться как источник питания</td><td id="cat_t4"></td></tr>
<tr><td id="cat_t4">Принудительное охлаждение</td><td id="cat_t4">есть</td></tr>
<tr><td id="cat_t4">Защита:</td><td id="cat_t4"><li> от короткого замыкания на выходе
</li><li> от обратной полярности батареи
</li><li> от повышенного напряжения батареи
</li><li> от перегрева
</li></td></tr>
<tr><td id="cat_t4">Диапазон рабочей температуры, °C</td><td id="cat_t4">от -20 до +60</td></tr>
<tr><td id="cat_t4">Допустимая влажность (без конденсации), %</td><td id="cat_t4">макс. 95</td></tr>
<tr><td id="cat_t4">Материал и цвет корпуса</td><td id="cat_t4">алюминий, синий</td></tr>
<tr><td id="cat_t4">Присоединение батареи</td><td id="cat_t4">шпильки M6</td></tr>
<tr><td id="cat_t4">Присоединение к 230 В перем. тока</td><td id="cat_t4">винтовой зажим 4 мм2 (AWG 6)</td></tr>
<tr><td id="cat_t4">Степень защиты</td><td id="cat_t4">IP 21</td></tr>
<tr><td id="cat_t4">Вес, кг</td><td id="cat_t4">3.80</td></tr>
</table></div>
<br><br><br>
<img src="http://npptranstech.com/images/phoenix/3.jpg" alt="" border="0" class='imgl'><h1>Характеристики четырехступенчатой адаптивной зарядки: объемная набивка - поглощение - наполнение - хранение</h1>

Особенность зарядного устройства Phoenix - контролируемая микропроцессором система адаптивного управления зарядкой батареи, которая может быть настроена под различные типы батарей. Это позволяет автоматически оптимизировать процесс зарядки в соответствии с вариантом использования аккумуляторной батареи.
<br><br>
<h1>Правильная дозировка зарядки: разное время режима поглощения</h1>

Если происходит только небольшой разряд батареи (например, когда энергосистема яхты подключена к береговой сети), для предотвращения ее избыточной зарядки время поглощения выдерживается небольшим. После глубокой разрядки батареи время поглощения автоматически увеличивается для обеспечения полной зарядки.
<br><br>
 
<h1>Предотвращение повреждения из-за повышенного газообразования: режим защиты батареи (см. рис.2 ниже)</h1>

Если при необходимости быстро зарядить батарею был выбран высокий ток зарядки в совокупности с высоким напряжением поглощения, зарядное устройство Phoenix позволит предотвратить повреждение батареи из-за повышенного газообразования, автоматически ограничивая темп увеличения напряжения как только будет достигнуто напряжение газообразования (см. кривую зарядки между 14,4 В и 15,0 В на рис.2 ниже).
<br><br>
<h1>Уменьшение профилактики и износа не используемой батареи: режим хранения</h1>

Режим хранения всегда включается, если аккумулятор в течение 24 часов не подвергался разрядке. В режиме хранения напряжение наполнения батареи уменьшается до 2,2 В на банку (13,2 В для батареи 12 В) для минимизации газовыделения и коррозии решеток положительных пластин. Один раз в неделю напряжение поднимается обратно до уровня поглощения, чтобы "компенсировать" заряд аккумулятора. Эта особенность предотвращает расслоение электролита и процесс сульфатации, главную причину преждевременного выхода из строя батареи.
<br><br>
 
<h1>Увеличение срока службы батареи: температурная компенсация</h1>

Все зарядные устройства Phoenix поставляются с датчиком температуры. При его подключении напряжение зарядки автоматически уменьшается с увеличением температуры батареи. Эта особенность рекомендуются для герметичных аккумуляторов и/или если ожидаются существенные колебания температуры батареи.
<br><br>
 
<h1>Контроль напряжения аккумулятора</h1>

Чтобы компенсировать потери напряжения, вызванные сопротивлением кабеля, зарядное устройство Phoenix контролирует и поддерживает напряжение непосредственно на батарее.
<br><br>
 
<h1>Компьютерный интерфейс.</h1>

Каждое зарядное устройство Phoenix может быть соединено с компьютером через интерфейс RS-485. Все параметры можно настраивать при помощи программы VEConfigure, которую можно бесплатно скачать на сайте www.victronenerqy.com, и канал передачи данных MK1b (см. Принадлежности). Зарядное устройство можно также присоединить к сети контроля и управления энергосистемой VE.Net или к любой другой компьютерной системе управления и мониторинга.
<br><br>
 
<h1>Узнайте больше об аккумуляторах и их зарядке</h1>

Чтобы узнать больше о батареях и их зарядке, обратитесь к брошюре Victron Energy "Электричество на борту" (англ. яз., www.victronenergy.com).
<br><br>
<h1>Кривые зарядки</h1>
<center><img src="/images/img06.gif">
</center>

	</td>
	</tr></table>
</div>

<?php tail($modes); ?>