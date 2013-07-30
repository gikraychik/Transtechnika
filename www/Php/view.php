﻿<?php
//$modes - массив чисел
//[0]: 0 - не выводится левая колонка; 1 - выводится левая колонка
//[1]: 1 - не выводятся новости; 1 - выводятся новости

//$modes
//[0]: KeyWords; если $modes[0]=="" => оно равно $title
function head($title, $modes)
{
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); //Дата в прошлом 
	header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1 
	header("Pragma: no-cache"); // HTTP/1.1 
	header("Last-Modified: ".gmdate("D, d M Y H:i:s")."GMT");
	header("X-Accel-Expires: 0");
	if (!isset($modes))
	{
		$modes = array ($title);
	}
	if ($modes[0] == "")
	{
		$modes[0] = $title;
	}
	$text =  "<html>\n";
	$text.= "<head>\n<title>".$title."</title>\n
<meta name='Generator' content='BinN S.Builder 3.712' />\n
<meta name='KeyWords' content='".$modes[0]."' />\n
<meta name='Description' content='НПП \"Транстехника\" предлагает преобразователи напряжения (инверторы), источники бесперебойного питания (ups), а также системы автономного электроснабжения.' />\n
<meta http-equiv=\"Expires\" content=\"Mon, 26 Jul 1997 05:00:00 GMT\" />\n
<meta http-equiv=\"Pragma\" content=\"no-cache\" />\n
<META http-equiv='Content-Type' content='text/html; charset=utf-8'><link rel='stylesheet' type='text/css' href='/transteh.css?=4' />\n
</head>\n";
	$text.= "<body > <center>
<div id=\"main\">
   <div id=\"top\"></div>
   <div id=\"menu\"><div id=\"menu2\">
   <a href=\"/index.php\" title=\"главная\" class=\"menu\">ГЛАВНАЯ</a>
   &nbsp;&nbsp;|&nbsp;&nbsp; 
   <a href=\"/cat/\" title=\"КАТАЛОГ ПРОДУКЦИИ\" class=\"menu\">КАТАЛОГ ПРОДУКЦИИ</a>
   &nbsp;&nbsp;|&nbsp;&nbsp;
   <a href=\"/contacts.php\" title=\"КОНТАКТЫ\" class=\"menu\">КОНТАКТЫ</a>
   &nbsp;&nbsp;|&nbsp;&nbsp;
   <a href=\"/dilers.php\" title=\"ПАРТНЕРЫ\" class=\"menu\">ПАРТНЕРЫ</a>
&nbsp;&nbsp;|&nbsp;&nbsp;
   <a href=\"/onsklad.php\" title=\"В НАЛИЧИИ\" class=\"menu\">В НАЛИЧИИ</a>
   </div></div>";
   out($text);
	
}
function tail($modes)
{
	$text = "<br>&nbsp;&nbsp;&nbsp;".get_counter()."</div><DIV id=foot></DIV>
<DIV id=foot2>Санкт-Петербург, Проспект Шаумяна, дом 49, офис 212<br> Тел.: &nbsp;+7 (812) 444-61-16; +7 (921) 937-35-76  <BR> Факс: +7 (812) 444-61-16</DIV>
</div>
</center>
</body>
</html></body></html>";
out($text);
}
function get_counter($modes)
{
	return "<!--LiveInternet counter--><script type=\"text/javascript\"><!--
document.write(\"<a href='http://www.liveinternet.ru/click' \"+
\"target=_blank><img src='//counter.yadro.ru/hit?t29.10;r\"+
escape(document.referrer)+((typeof(screen)==\"undefined\")?\"\":
\";s\"+screen.width+\"*\"+screen.height+\"*\"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+\";u\"+escape(document.URL)+
\";\"+Math.random()+
\"' alt='' title='LiveInternet: показано количество просмотров и\"+
\" посетителей' \"+
\"border='0' width='88' height='120'><\/a>\");
//--></script><!--/LiveInternet-->";
}
function out_left_colomn($modes)
{
	$text = "<div id=\"m1\"><a href=\"/cat/invertor_ve/\" class=\"menu2\" title=\"Инверторы Victron Energy\">Инверторы Victron Energy</a></div> <div id=\"m1\"><a href=\"/cat/zariad_ve/\" class=\"menu2\" title=\"Инверторы/зарядные устройства Victron Energy\">Инверторы/зарядные устройства</a></div> <div id=\"m1\"><a href=\"/cat/zve/\" class=\"menu2\" title=\"Зарядные устройства Blue Power\">Зарядные устройства Blue Power</a></div> <div id=\"m1\"><a href=\"/cat/zc/\" class=\"menu2\" title=\"Зарядные устройства Centaur\">Зарядные устройства Centaur</a></div> <div id=\"m1\"><a href=\"/cat/zpowerman/\" class=\"menu2\" title=\"Автоматические переключатели\">Автоматические переключатели</a></div> <div id=\"m1\"><a href=\"/cat/zphoenix/\" class=\"menu2\" title=\"Аксессуары\">Зарядные устройства Phoenix</a></div> <div id=\"m1\"><a href=\"/cat/zscylla/\" class=\"menu2\" title=\"Зарядные устройства Skylla\">Зарядные устройства Skylla</a></div> <div id=\"m1\"><a href=\"/cat/tr/\" class=\"menu2\" title=\"Разделительные трансформаторы\">Разделительные трансформаторы</a></div> <div id=\"m1\"><a href=\"/cat/conve/\" class=\"menu2\" title=\"Конвертеры пост. тока Orion\">Конвертеры пост. тока Orion</a></div> <div id=\"m1\"><a href=\"/cat/battr/\" class=\"menu2\" title=\"Аккумуляторные батареи\">Аккумуляторные батареи</a></div> <div id=\"m1\"><a href=\"/cat/dop/\" class=\"menu2\" title=\"Дополнительное оборудование\">Дополнительное оборудование</a></div> <div id=\"m1\"><a href=\"/sistema_otoplenia_vagonov.php\" class=\"menu2\" title=\"Система отопления вагонов\">Система отопления вагонов</a></div>\n";
	out($text);
}
function out_left_news($modes)
{
	if ($modes[0] == 0)  //left colomn from page index.php
	{
		$bzagl = "<div id=\"bzagl\">НОВОСТИ</div>\n";
		$typeday = "newsd";
		$typetext = "newst";
		$archive = "<div id=\"news_more\"><a href=\"/news.php\" class=\"news_more\">Архив новостей</a></div>\n";
	}
	else if ($modes[0] == 1)  //large text from page news.php
	{
		$bzagl = "";
		$typeday = "newsdate";
		$typetext = "newstext";
		$archive = "";
	}
	else
	{
		$text = "Error in view.php";
		out($text);
		break;
	}
	$text = $bzagl;
	$text .= "<div id=\"".$typeday."\">31.05.2013</div>\n
	<div id=\"".$typetext."\">Подписан договор на поставку комплектующих и запчастей для варшавского метрополитена с фирмой Energomasimex Polska. Срок выполнения контракта - октябрь 2013 года.</div>\n";
	$text .= "<div id=\"".$typeday."\">26.02.2013</div>\n
	<div id=\"".$typetext."\">Были проведены переговоры с польской фирмой Энергомашимпэкс о поставках комплектующих и запчастей.<br>
Достигнута договоренность о поставки российских запчастей на Варшавский метрополитен через Энергомашимпэкс. С российской стороны поставку будут осуществлять совместными усилиями ООО \"НПП \"Транстехника\", ООО \"Метроимэкс\" и ЗАО \"Петроклима\"</div>\n";
	$text .= "<div id=\"".$typeday."\">10.02.2013</div>\n
	<div id=\"".$typetext."\">Сегодня НПП «Транстехника» исполняется год!<br>
	Несмотря на столь юный возраст, мы успели воплотить в жизнь несколько проектов, позволяющих нам гордиться собой и уверенно смотреть в будущее. Среди них оснащение системой бесперебойного аварийного питания Центра репродуктивной медицины (г. Санкт-Петербург),поставка запасных частей для Варшавского метрополитена, оснащение системой отопления на жидком топливе пассажирских вагонов для ОАО «Газпром», участие в строительстве вагонов для ООО «Вагонремсервис».<br>
	Поэтому, мы надеемся, что этой датой начинается долгая и плодотворная жизнь ООО «НПП «Транстехника»!  
	</div>\n";
	if ($modes[0] == 1)  //if news.php
	{
		$text .= "<div id=\"".$typeday."\">10.12.2012</div>\n
		<div id=\"".$typetext."\">04.12.12 был организован корпоративный выезд нашей компании в Италию на футбольный матч Милан-Зенит. Благодаря голу Данни и нашей поддержке Зенит одержал победу 1-0!</div>\n";
	}
	$text .= $archive;
	out($text);
}
function out($text)
{
	iconv( "windows-1251", "UTF-8", $text);
	echo $text;
}
?>
