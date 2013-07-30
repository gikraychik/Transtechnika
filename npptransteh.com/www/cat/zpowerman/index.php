<?php
include_once("../../Php/view.php");
head("Автоматические переключатели PowerMan", $modes);
?>
<div id="text"><div>
	<table cellpadding="0" cellspacing="0" width="100%">
	<tr>
	<td id="t1">
		<?php out_left_colomn(); ?>
	</td>
	<td id="t2">
		<h1>Автоматические переключатели PowerMan</h1><div id="cat_div">
<table cellpadding="0" cellspacing="1" width="100%">
<tr>
   <td id="cat_t1">Модель</td>
   <td id="cat_t1">Диапазон<BR> входн. напряж.<BR> перем. тока, В</td>
   <td id="cat_t1">Кол-во<BR> источников<BR> перем. тока</td>
   <td id="cat_t1">Макс.<BR> входной<BR> ток, А</td>
   <td id="cat_t1">Габариты<BR>HxWxD, мм</td>
   <td id="cat_t1">Масса,<BR> кг</td>
   <td id="cat_t1">Цена,<BR> EUR</td>
   <td id="cat_t1">Цена,<BR> РУБ</td>
</tr><tr>
<td id="cat_t3" style="text-align:left;"><a href="filax.php" title="Filax " class="cat">Filax </a></td>
<td id="cat_t3">190-240 В, 50 Гц</td>
<td id="cat_t3">2</td>
<td id="cat_t3">N/A</td>
<td id="cat_t3">200x 120x 75</td>
<td id="cat_t3">0.80</td>
<td id="cat_t3">--</td>
<td id="cat_t3">--</td>
</tr><tr>
<td id="cat_t2" style="text-align:left;"><a href="pm230.20.php" title="ESP PowerMan 230/20-0 " class="cat">ESP PowerMan 230/20-0 </a></td>
<td id="cat_t2">190-240 В, 50 Гц</td>
<td id="cat_t2">2</td>
<td id="cat_t2">20</td>
<td id="cat_t2">250x 200x 95 	</td>
<td id="cat_t2">1.50</td>
<td id="cat_t2">--</td>
<td id="cat_t2">--</td>
</tr><tr>
<td id="cat_t3" style="text-align:left;"><a href="pm230.32.php" title="ESP PowerMan 230/32-0 " class="cat">ESP PowerMan 230/32-0 </a></td>
<td id="cat_t3">190-240 В, 50 Гц</td>
<td id="cat_t3">2</td>
<td id="cat_t3">32</td>
<td id="cat_t3">380x 300x 120	</td>
<td id="cat_t3">3.00</td>
<td id="cat_t3">--</td>
<td id="cat_t3">--</td>
</tr><tr>
<td id="cat_t2" style="text-align:left;"><a href="pm230.64.php" title="ESP PowerMan 230/64-0 " class="cat">ESP PowerMan 230/64-0 </a></td>
<td id="cat_t2">190-240 В, 50 Гц</td>
<td id="cat_t2">2</td>
<td id="cat_t2">64</td>
<td id="cat_t2">460x 380x 180</td>
<td id="cat_t2">4.00</td>
<td id="cat_t2">--</td>
<td id="cat_t2">--</td>
</tr></table></div>

	</td>
	</tr></table>
</div>

<?php tail($modes); ?>