﻿<?php
include_once("Php/view.php");
head("Контакты");
?>
   <div id="text"><div>
      <table cellpadding="0" cellspacing="0" width="100%"><tr>
	  <td align="center">
	    <!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (начало) -->
<div id="ymaps-map-id_135834471976161733836" style="width: 450px; height: 350px;"></div>
<div style="width: 450px; text-align: right;"></div>
<script type="text/javascript">
function fid_135834471976161733836(ymaps) {
    var map = new ymaps.Map("ymaps-map-id_135834471976161733836", {
        center: [30.418572499999957, 59.928083702004244],
        zoom: 16,
        type: "yandex#map"
    });
    map.controls
        .add("zoomControl")
        .add("mapTools")
        .add(new ymaps.control.TypeSelector(["yandex#map", "yandex#satellite", "yandex#hybrid", "yandex#publicMap"]));
    map.geoObjects
        .add(new ymaps.Placemark([30.418572, 59.927459], {
            balloonContent: ""
        }, {
            preset: "twirl#lightblueDotIcon"
        }));
};
</script>
<script type="text/javascript" src="http://api-maps.yandex.ru/2.0-stable/?lang=ru-RU&coordorder=longlat&load=package.full&wizard=constructor&onload=fid_135834471976161733836"></script>
<!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (конец) -->
Россия, Санкт-Петербург <br>
Проспект Шаумяна д.49, офис 212<br> 
Тел./Факс +7 (812) 444-61-16<br><br>
<p>С вопросами обращайтесь на следующий адрес электронной почты: &nbsp;<A href="mailto:info@npptranstech.com">info@npptranstech.com</A></p>
	  </td>
	  </tr></table>
   </div>
<?php tail(); ?>