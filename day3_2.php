<?php
/*
1.	Write a PHP script to sort the following associative array:
array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
 a) ascending order sort by value
 b) ascending order sort by Key
 c) descending order sorting by Value
 d) descending order sorting by Key

*/


	$NameAge = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
	asort($NameAge);
	echo ("ascending order sort by value.<br>");
	print_r($NameAge);
	echo ("<br>");	echo ("<br>");
	ksort($NameAge);
	echo ("ascending order sort by Key.<br>");
	print_r($NameAge);
	echo ("<br>");	echo ("<br>");
	arsort($NameAge);
	echo ("adescending order sorting by Value.<br>");
	print_r($NameAge);
	echo ("<br>");	echo ("<br>");
	krsort($NameAge);
	echo("descending order sorting by Key.<br>");
	print_r($NameAge);

?>
