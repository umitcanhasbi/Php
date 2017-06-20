<?php
	// this program can find the price of an item from hepsiburada.com with url
	include('simple_html_dom.php'); // include the library
	$html = file_get_html($_GET["url"]); //retrieve dom
	$ret = $html->find('div[itemprop]'); //find the div whic holds the current price
	$current = $ret[0];// first element hold the price with extra informations
	$current = str_replace("( / adet)"," ",$current); // get rid of extra informations
	$num1 = strpos($current,"TL");
	$current = str_replace("TL"," ",$current);
	$len = strlen($current);
	$result = substr($current,$num1,$len);
	echo "Sonuc = " . $result . "TL"; // print the result
	$html->clear();
?>

