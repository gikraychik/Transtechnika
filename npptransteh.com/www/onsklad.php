﻿<?php
include_once("Php/view.php");
head("Товары в наличии");
?>
   <div id="text"><div>
      <table cellpadding="0" cellspacing="0" width="100%"><tr>
	  <td id="t2">
	    <h1 align = "center">Товары в наличии</h1>
		<div align = "center">
		<script language="javascript">
		<!--
		function my_open()
		{
			w = getClientWidth();
			h = getClientHeight();
			iWidth = 600;
			iHeigth = 450;
			x = (w - iWidth) / 2;
			y = (h - iHeigth) / 2;
			var newWin = window.open("http://npptranstech.com/images/new/block.JPG", "window1", "width="+iWidth+",height="+iHeigth+",resizable=yes,scrollbars=yes,status=yes,left="+x+",top="+y);
			return true;
		}
		function getClientWidth()
		{
			return document.compatMode=='CSS1Compat' && !window.opera?document.documentElement.clientWidth:document.body.clientWidth;
		}
		function getClientHeight()
		{
			return document.compatMode=='CSS1Compat' && !window.opera?document.documentElement.clientHeight:document.body.clientHeight;
		}
		//-->
		</script>
		<table cellpadding="2" cellspacing="0" border = "1" width="400px">
		<tr align = "center">
			<td>Номер</td>
			<td>Наименование</td>
			<td>Модель</td>
			<td>Кол-во</td>
			<td>Год пр-ва</td>
			<td>Цена за шт. в рублях</td>
		</tr>
		<tr>
			<td align="center">1</td>
			<td>Трансформатор</td>
			<td>ПОБС 3МП</td>
			<td align="center">36</td>
			<td align="center">2009</td>
			<td align="center">1200</td>
		</tr>
		<tr>
			<td align="center">2</td>
			<td>Блоки конденсатор</td>
			<td>КБМШ-5</td>
			<td align="center">9</td>
			<td align="center">2008</td>
			<td align="center">500</td>
		</tr>
		<tr>
			<td align="center">3</td>
			<td>Блок БКР-76 конденсаторов и резисторов</td>
			<td>БКР-76</td>
			<td align="center">16</td>
			<td align="center">2007</td>
			<td align="center">1000</td>
		</tr>
		<tr>
			<td align="center">4</td>
			<td>Блок питания штепсельный</td>
			<td>БПШ</td>
			<td align="center">13</td>
			<td align="center">2008</td>
			<td align="center">1000</td>
		</tr>
		<tr>
			<td align="center">5</td>
			<td>Реле</td>
			<td>НМШ 2-900</td>
			<td align="center">2</td>
			<td align="center">2009</td>
			<td align="center">850</td>
		</tr>
		<tr>
			<td align="center">6</td>
			<td>Реле Электромагнитное</td>
			<td>Д 3-3,5</td>
			<td align="center">10</td>
			<td align="center">2009</td>
			<td align="center">1500</td>
		</tr>
		<tr>
			<td align="center">7</td>
			<td>Реле Электромагнитное</td>
			<td>Д 3-2700</td>
			<td align="center">10</td>
			<td align="center">2009</td>
			<td align="center">1500</td>
		</tr>
		<tr>
			<td align="center">8</td>
			<td>Реле</td>
			<td>НМШ1-560</td>
			<td align="center">6</td>
			<td align="center">2009</td>
			<td align="center">1200</td>
		</tr>
		<tr>
			<td align="center">9</td>
			<td>Реле Электромагнитное</td>
			<td>ПЛЗУ 73/1000</td>
			<td align="center">12</td>
			<td align="center">2009</td>
			<td align="center">1000</td>
		</tr>
		<tr>
			<td align="center">10</td>
			<td>Блок фазоконтрольный</td>
			<td>ФК 75</td>
			<td align="center">18</td>
			<td align="center">2009</td>
			<td align="center">1000</td>
		</tr>
		<tr>
			<td align="center">11</td>
			<td>Реле Электромагнитное</td>
			<td>ПЛЗМУ 40-2200</td>
			<td align="center">36</td>
			<td align="center">2009</td>
			<td align="center">1000</td>
		</tr>
		<tr>
			<td align="center">12</td>
			<td>Реле Электромагнитное</td>
			<td>РЭЛ 1-400</td>
			<td align="center">4</td>
			<td align="center">2009</td>
			<td align="center">600</td>
		</tr>
		<tr>
			<td align="center">13</td>
			<td>Блок Контрольный</td>
			<td>БК 75</td>
			<td align="center">16</td>
			<td align="center">2009</td>
			<td align="center">1800</td>
		</tr>
		<tr>
			<td align="center">14</td>
			<td>Устройство контроля тональных рельсовых цепей</td>
			<td>УК ТРЦ 5</td>
			<td align="center">23</td>
			<td align="center">2008</td>
			<td align="center">&nbsp;</td>
		</tr>
		<tr>
			<td align="center">15</td>
			<td>Стэнд проверочный</td>
			<td>СПУПРМ</td>
			<td align="center">1</td>
			<td align="center">2007</td>
			<td align="center">30000</td>
		</tr>
		<tr>
			<td align="center">16</td>
			<td>Защитный блок</td>
			<td>3Б ДСШ</td>
			<td align="center">20</td>
			<td align="center">2007</td>
			<td align="center">1000</td>
		</tr>
		<tr>
			<td align="center">17</td>
			<td>Устройства резервирования предохранителей</td>
			<td>УРПМ 1-2</td>
			<td align="center">3</td>
			<td align="center">2011</td>
			<td align="center">&nbsp;</td>
		</tr>
		<tr>
			<td align="center">18</td>
			<td>Реле Электромагнитное</td>
			<td>ОЛ 2-88</td>  <!--here is the problem; old version ОЛ 28-->
			<td align="center">14</td>
			<td align="center">2009</td>
			<td align="center">1000</td>
		</tr>
		<tr>
			<td align="center">19</td>
			<td>Реактор</td>
			<td>РОБС 3М</td>
			<td align="center">19</td>
			<td align="center">2008</td>
			<td align="center">1000</td>
		</tr>
		<tr>
			<td align="center">20</td>
			<td>Преобразователь напряжения</td>
			<td>Преобразователь<br>12-220 В 150 Вт</td>
			<td align="center">200</td>
			<td align="center">2010</td>
			<td align="center">750</td>
		</tr>
		<tr>
			<td align="center">21</td>
			<td>Тональный звонок </td>
			<td>ТВУ-60</td>
			<td align="center">300</td>
			<td align="center">2008, 2009</td>
			<td align="center">300</td>
		</tr>
		<tr>
			<td align="center">22</td>
			<td><div style="cursor: pointer;" onclick="my_open();"><a>Блокиратор замка двери купе</a></div></td>
			<td>&nbsp;</td>
			<td>1060</td>
			<td>&nbsp;</td>
			<td>890</td>
		</tr>
		</table>
		<br>
		Оплата производится только по безналичному расчету.
		</div>
	</tr></table>
   </div>
   
<?php tail(); ?>