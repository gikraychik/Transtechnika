<?php
include_once("../../Php/view.php");
head("Конвертеры пост. тока Victron Energy", $modes);
?>
<div id="text"><div>
	<table cellpadding="0" cellspacing="0" width="100%">
	<tr>
	<td id="t1">
		<?php out_left_colomn(); ?>
	</td>
	<td id="t2">
		<h1>Конвертеры пост. тока Victron Energy</h1><div id="cat_div">
<table cellpadding="0" cellspacing="1" widtd="100%">
<tr>
   <td id="cat_t1" TITLE="Модель">Модель</td>
<td id="cat_t1" TITLE="Гальваническая развязка">Гальва-<BR>ническая<BR> раз-<BR>вязка</td>
<td id="cat_t1" TITLE="Диапазон входного напряжения, В">Диапазон<BR> входного<BR> напряже-<BR>ния, В</td>
<td id="cat_t1" TITLE="Выходное напряжение, В">Выходн.<BR> напряж.,<BR> В</td>
<td id="cat_t1" TITLE="Макс. выходной ток, А">Макс.<BR> выходн.<BR> ток, А</td>
<td id="cat_t1" TITLE="Вентиляторное охлаждение (с контролем температуры)">Вент.<BR> охлаж-<BR>дение</td>
<td id="cat_t1" TITLE="Ток холостого хода, мА">Ток<BR> холосто-<BR>го хода,<BR> мА</td>
<td id="cat_t1" TITLE="Габариты HeightxWidtdxDeptd, мм">Габариты<BR>HxWxD, мм</td>
<td id="cat_t1" TITLE="Масса, кг">Масса,<BR> кг</td>
<td id="cat_t1" TITLE="Цена, EUR">Цена,<BR> EUR</td>
<td id="cat_t1" TITLE="Цена, РУБ">Цена,<BR> РУБ</td>
</tr><tr>
<td id="cat_t2" style="text-align:left;"><a href="o24.12.5.php" title="Orion 24/12-5 " class="cat">Orion 24/12-5 </a></td>
<td id="cat_t2">--</td>
<td id="cat_t2">18-35</td>
<td id="cat_t2">13,2</td>
<td id="cat_t2">5.0</td>
<td id="cat_t2">--</td>
<td id="cat_t2">< 5</td>
<td id="cat_t2">49x 88x 68</td>
<td id="cat_t2">0.17</td>
<td id="cat_t2">--</td>
<td id="cat_t2">--</td>
</tr><tr>
<td id="cat_t3" style="text-align:left;"><a href="o24.12.8.php" title="Orion 24/12-8" class="cat">Orion 24/12-8</a></td>
<td id="cat_t3">--</td>
<td id="cat_t3">18-35</td>
<td id="cat_t3">13,2</td>
<td id="cat_t3">8.0</td>
<td id="cat_t3">--</td>
<td id="cat_t3">< 5</td>
<td id="cat_t3">49x 88x 68</td>
<td id="cat_t3">0.25</td>
<td id="cat_t3">--</td>
<td id="cat_t3">--</td>
</tr><tr>
<td id="cat_t2" style="text-align:left;"><a href="o24.12.12.php" title="Orion 24/12-12 " class="cat">Orion 24/12-12 </a></td>
<td id="cat_t2">--</td>
<td id="cat_t2">20-35</td>
<td id="cat_t2">13,2</td>
<td id="cat_t2">12.0</td>
<td id="cat_t2">--</td>
<td id="cat_t2">< 5</td>
<td id="cat_t2">49x 88x 68</td>
<td id="cat_t2">0.26</td>
<td id="cat_t2">--</td>
<td id="cat_t2">--</td>
</tr><tr>
<td id="cat_t3" style="text-align:left;"><a href="o24.12.20.php" title="Orion 24/12-20" class="cat">Orion 24/12-20</a></td>
<td id="cat_t3">--</td>
<td id="cat_t3">20-35</td>
<td id="cat_t3">13.8</td>
<td id="cat_t3">20.0</td>
<td id="cat_t3">--</td>
<td id="cat_t3">ок. 25</td>
<td id="cat_t3">49x 88x 126</td>
<td id="cat_t3">0.48</td>
<td id="cat_t3">--</td>
<td id="cat_t3">--</td>
</tr><tr>
<td id="cat_t2" style="text-align:left;"><a href="o24.12.30.php" title="Orion 24/12-30 " class="cat">Orion 24/12-30 </a></td>
<td id="cat_t2">--</td>
<td id="cat_t2">20-35</td>
<td id="cat_t2">13.8</td>
<td id="cat_t2">30.0</td>
<td id="cat_t2">есть </td>
<td id="cat_t2">ок. 25</td>
<td id="cat_t2">49x 88x 151</td>
<td id="cat_t2">0,60</td>
<td id="cat_t2">--</td>
<td id="cat_t2">--</td>
</tr><tr>
<td id="cat_t3" style="text-align:left;"><a href="o24.12.60.php" title="Orion 24/12-60 " class="cat">Orion 24/12-60 </a></td>
<td id="cat_t3">--</td>
<td id="cat_t3">20-35</td>
<td id="cat_t3">13.8</td>
<td id="cat_t3">60,0</td>
<td id="cat_t3">есть </td>
<td id="cat_t3">ок. 50</td>
<td id="cat_t3">88x 100x 180</td>
<td id="cat_t3">1,2</td>
<td id="cat_t3">--</td>
<td id="cat_t3">--</td>
</tr><tr>
<td id="cat_t2" style="text-align:left;"><a href="o12.24.7.php" title="Orion 12/24-7 " class="cat">Orion 12/24-7 </a></td>
<td id="cat_t2">--</td>
<td id="cat_t2">9-18</td>
<td id="cat_t2">24</td>
<td id="cat_t2">7.0</td>
<td id="cat_t2">нет</td>
<td id="cat_t2">< 15</td>
<td id="cat_t2">49x 88x 98</td>
<td id="cat_t2">0.30</td>
<td id="cat_t2">--</td>
<td id="cat_t2">--</td>
</tr><tr>
<td id="cat_t3" style="text-align:left;"><a href="o12.24.10.php" title="Orion 12/24-10 " class="cat">Orion 12/24-10 </a></td>
<td id="cat_t3">--</td>
<td id="cat_t3">9-18</td>
<td id="cat_t3">24</td>
<td id="cat_t3">10,0</td>
<td id="cat_t3">нет</td>
<td id="cat_t3">< 15</td>
<td id="cat_t3">49x 88x 126</td>
<td id="cat_t3">0,40</td>
<td id="cat_t3">--</td>
<td id="cat_t3">--</td>
</tr><tr>
<td id="cat_t2" style="text-align:left;"><a href="ox.y.100.php" title="Orion xx/yy-100Вт " class="cat">Orion xx/yy-100Вт </a></td>
<td id="cat_t2">есть</td>
<td id="cat_t2">12 (9-18) 24 (20-35) 48 (30-60) 96 (60-120)</td>
<td id="cat_t2">12,5 24</td>
<td id="cat_t2">N/A</td>
<td id="cat_t2">--</td>
<td id="cat_t2">N/A</td>
<td id="cat_t2">49x 88x 152</td>
<td id="cat_t2">0,50</td>
<td id="cat_t2">--</td>
<td id="cat_t2">--</td>
</tr><tr>
<td id="cat_t3" style="text-align:left;"><a href="ox.y.200.php" title="Orion xx/yy-200Вт" class="cat">Orion xx/yy-200Вт</a></td>
<td id="cat_t3">есть</td>
<td id="cat_t3">12 (9-18) 24 (20-35) 48 (30-60) 96 (60-120)</td>
<td id="cat_t3">12,5 24</td>
<td id="cat_t3">N/A</td>
<td id="cat_t3">есть</td>
<td id="cat_t3">N/A</td>
<td id="cat_t3">49x 88x 182</td>
<td id="cat_t3">0,60</td>
<td id="cat_t3">--</td>
<td id="cat_t3">--</td>
</tr><tr>
<td id="cat_t2" style="text-align:left;"><a href="ox.y.360.php" title="Orion xx/yy-360Вт " class="cat">Orion xx/yy-360Вт </a></td>
<td id="cat_t2">есть</td>
<td id="cat_t2">12 (9-18) 24 (20-35) 48 (30-60) 96 (60-120)</td>
<td id="cat_t2">12,5 24</td>
<td id="cat_t2">N/A</td>
<td id="cat_t2">есть</td>
<td id="cat_t2">N/A</td>
<td id="cat_t2">64x 163x 160</td>
<td id="cat_t2">1,40</td>
<td id="cat_t2">--</td>
<td id="cat_t2">--</td>
</tr><tr>
<td id="cat_t3" style="text-align:left;"><a href="o7.35.12.3.php" title="Orion 7-35/12-3 импульсный стабилизатор " class="cat">Orion 7-35/12-3 импульсный стабилизатор </a></td>
<td id="cat_t3">есть</td>
<td id="cat_t3">7-35</td>
<td id="cat_t3">12,6</td>
<td id="cat_t3">3.0</td>
<td id="cat_t3">--</td>
<td id="cat_t3">N/A</td>
<td id="cat_t3">64x 163x 160</td>
<td id="cat_t3">1,40</td>
<td id="cat_t3">--</td>
<td id="cat_t3">--</td>
</tr><tr>
<td id="cat_t2" style="text-align:left;"><a href="o12.27.6.12.php" title="Orion 12/27,6-12 зарядное устройство 24 В " class="cat">Orion 12/27,6-12 зарядное устройство 24 В </a></td>
<td id="cat_t2">есть</td>
<td id="cat_t2">9-18</td>
<td id="cat_t2">27,6</td>
<td id="cat_t2">12.0</td>
<td id="cat_t2">есть </td>
<td id="cat_t2">N/A</td>
<td id="cat_t2">64x 163x 160</td>
<td id="cat_t2">1,40</td>
<td id="cat_t2">--</td>
<td id="cat_t2">--</td>
</tr></table></div>

	</td>
	</tr></table>
</div>

<?php tail($modes); ?>