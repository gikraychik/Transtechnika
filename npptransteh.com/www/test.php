<?php
include_once("Php/view.php");
head("ООО \"НПП \"Транстехника\" предлагает преобразователи напряжения (инверторы), источники бесперебойного питания (ups), а также системы автономного электроснабжения.");
?>
   <div id="text"><div>
      <table cellpadding="0" cellspacing="0" width="100%"><tr>
	  <td id="t1">
	  <?php out_left_news(); ?>
	  </td>
	  <td id="t2">
		<h1 align="center">Добро пожаловать!</h1>
		<a onclick="my_open();">Test</a>
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

	  </td>
	  </tr></table>
   </div>
   
<?php tail(); ?>