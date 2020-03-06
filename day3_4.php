<?php
/*
4.	Write a PHP function to change the following array's all values to upper or
 lower case.
 Sample arrays :
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
 Expected Output : Values are in lower case.
 Array ( [A] => blue [B] => green [c] => red )
 Values are in upper case.
 Array ( [A] => BLUE [B] => GREEN [c] => RED )

  use array_map()


*/
	function upper($x){
		$x = strtoupper ($x);
		return $x;
	}

	function lower($x){
		$x = strtolower($x);
		return $x;
	}


	$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

	print_r ("Values are in lower case.<br>");
	print_r (array_map("lower",$Color));
	echo "<br>";
	print_r ("Values are in upper case.<br>");
	print_r (array_map("upper",$Color));

?>
