<?php
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
			
<h1>Зарядные устройства Victron Energy</h1><div id="cat_div">
<table cellpadding="0" cellspacing="1" widtd="100%">
<tr>
   <td id="cat_t1" rowspan="2">Модель</td>
   <td id="cat_t1" rowspan="2">Диапазон<BR> входных<BR> напряже-<BR>ний, В</td>
   <td id="cat_t1" rowspan="2">Часто-<BR>та, Гц</td>
   <td id="cat_t1" colspan="3">Зарядное напряжение<BR> пост. ток, В</td>
   <td id="cat_t1" rowspan="2">Ток<BR> зарядки,<BR> А</td>
   <td id="cat_t1" rowspan="2">Мин.<BR> емкость<BR> батарей,<BR> А/час</td>
   <td id="cat_t1" rowspan="2">Габариты<BR>HxWxD, мм</td>
   <td id="cat_t1" rowspan="2">Масса,<BR> кг</td>
   <td id="cat_t1" rowspan="2">Цена,<BR> EUR</td>
   <td id="cat_t1" rowspan="2">Цена,<BR> РУБ</td>
</tr>
<TR>
	<td id="cat_t1">"погло-<BR>щение"</td>
	<td id="cat_t1">"напол-<BR>нение"</td>
	<td id="cat_t1">"хране-<BR>ние"</td>
</TR><tr>
<td id="cat_t2" style="text-align:left;"><a href="bp12.7.php" title="Blue Power 12/7 " class="cat">Blue Power 12/7 </a></td>
<td id="cat_t2">90-265 перем. тока или 90-350 пост. тока</td>
<td id="cat_t2">45-65 или пост. ток</td>
<td id="cat_t2">14.4</td>
<td id="cat_t2">14.0</td>
<td id="cat_t2">13.2</td>
<td id="cat_t2">7.0</td>
<td id="cat_t2">24</td>
<td id="cat_t2">50x 85x 199</td>
<td id="cat_t2">0.85</td>
<td id="cat_t2">--</td>
<td id="cat_t2">--</td>
</tr><tr>
<td id="cat_t3" style="text-align:left;"><a href="bp12.10.php" title="Blue Power 12/10" class="cat">Blue Power 12/10</a></td>
<td id="cat_t3">90-265 перем. тока или 90-350 пост. тока</td>
<td id="cat_t3">45-65 или пост. ток</td>
<td id="cat_t3">14.4</td>
<td id="cat_t3">14.0</td>
<td id="cat_t3">13.2</td>
<td id="cat_t3">10.0</td>
<td id="cat_t3">36</td>
<td id="cat_t3">50x 85x 199</td>
<td id="cat_t3">0.85</td>
<td id="cat_t3">--</td>
<td id="cat_t3">--</td>
</tr><tr>
<td id="cat_t2" style="text-align:left;"><a href="bp12.15.php" title="Blue Power 12/15 " class="cat">Blue Power 12/15 </a></td>
<td id="cat_t2">90-265 перем. тока или 90-350 пост. тока</td>
<td id="cat_t2">45-65 или пост. ток</td>
<td id="cat_t2">14.4</td>
<td id="cat_t2">14.0</td>
<td id="cat_t2">13.2</td>
<td id="cat_t2">15.0</td>
<td id="cat_t2">55</td>
<td id="cat_t2">50x 85x 199</td>
<td id="cat_t2">0.85</td>
<td id="cat_t2">--</td>
<td id="cat_t2">--</td>
</tr><tr>
<td id="cat_t3" style="text-align:left;"><a href="bp24.5.php" title="Blue Power 24/5 " class="cat">Blue Power 24/5 </a></td>
<td id="cat_t3">90-265 перем. тока или 90-350 пост. тока</td>
<td id="cat_t3">45-65 или пост. ток</td>
<td id="cat_t3">28.8</td>
<td id="cat_t3">28.0</td>
<td id="cat_t3">26.4</td>
<td id="cat_t3">5.0</td>
<td id="cat_t3">16</td>
<td id="cat_t3">50x 85x 199</td>
<td id="cat_t3">0.85</td>
<td id="cat_t3">--</td>
<td id="cat_t3">--</td>
</tr><tr>
<td id="cat_t2" style="text-align:left;"><a href="bp24.8.php" title="Blue Power 24/8 " class="cat">Blue Power 24/8 </a></td>
<td id="cat_t2">90-265 перем. тока или 90-350 пост. тока</td>
<td id="cat_t2">45-65 или пост. ток</td>
<td id="cat_t2">28.8</td>
<td id="cat_t2">28.0</td>
<td id="cat_t2">26.4</td>
<td id="cat_t2">8.0</td>
<td id="cat_t2">24</td>
<td id="cat_t2">50x 85x 199</td>
<td id="cat_t2">0.85</td>
<td id="cat_t2">--</td>
<td id="cat_t2">--</td>
</tr><tr>
<td id="cat_t3" style="text-align:left;"><a href="bp12.7(2).php" title="Blue Power 12/7 водозащищенный " class="cat">Blue Power 12/7 водозащищенный </a></td>
<td id="cat_t3">200-265</td>
<td id="cat_t3">45-65</td>
<td id="cat_t3">14.4</td>
<td id="cat_t3">13.7</td>
<td id="cat_t3">N/A</td>
<td id="cat_t3">7.0</td>
<td id="cat_t3">15</td>
<td id="cat_t3">43x 80x 155 	</td>
<td id="cat_t3">1.10</td>
<td id="cat_t3"></td>
<td id="cat_t3"></td>
</tr><tr>
<td id="cat_t2" style="text-align:left;"><a href="bp12.17.php" title="Blue Power 12/17 водозащищенный " class="cat">Blue Power 12/17 водозащищенный </a></td>
<td id="cat_t2">200-265</td>
<td id="cat_t2">45-65</td>
<td id="cat_t2">14.4</td>
<td id="cat_t2">13.7</td>
<td id="cat_t2">N/A</td>
<td id="cat_t2">17.0</td>
<td id="cat_t2">35</td>
<td id="cat_t2">47x 99x 193 		</td>
<td id="cat_t2">1.40</td>
<td id="cat_t2">--</td>
<td id="cat_t2">--</td>
</tr><tr>
<td id="cat_t3" style="text-align:left;"><a href="bp24.3.php" title="Blue Power 24/3 водозащищенный " class="cat">Blue Power 24/3 водозащищенный </a></td>
<td id="cat_t3">200-265</td>
<td id="cat_t3">45-65</td>
<td id="cat_t3">28.8</td>
<td id="cat_t3">27.4</td>
<td id="cat_t3">N/A</td>
<td id="cat_t3">3.0</td>
<td id="cat_t3">6</td>
<td id="cat_t3">43x 80x 155		</td>
<td id="cat_t3">1.10</td>
<td id="cat_t3">--</td>
<td id="cat_t3">--</td>
</tr><tr>
<td id="cat_t2" style="text-align:left;"><a href="bp24.12.php" title="Blue Power 24/12 водозащищенный " class="cat">Blue Power 24/12 водозащищенный </a></td>
<td id="cat_t2">200-265</td>
<td id="cat_t2">45-65</td>
<td id="cat_t2">28.8</td>
<td id="cat_t2">27.4</td>
<td id="cat_t2">N/A</td>
<td id="cat_t2">12.0</td>
<td id="cat_t2">24</td>
<td id="cat_t2">47x 99x 193		</td>
<td id="cat_t2">1,40</td>
<td id="cat_t2">--</td>
<td id="cat_t2">--</td>
</tr></table></div>
	  </td>
	  </tr></table>
   </div>

<?php tail($modes); ?>