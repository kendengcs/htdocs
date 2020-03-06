<?php
/*
1.	Write a PHP script to calculate and display average temperature,
five lowest and highest temperatures.
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63,
75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
 Expected Output : Average Temperature is : 70.6
 List of seven lowest temperatures : 60, 62, 63, 63, 64,
 List of seven highest temperatures : 76, 78, 79, 81, 85, 

*/

	$Temperature = array( 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63,
	75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
	echo "Average Tempertature is :";
	echo round(array_sum($Temperature)/count($Temperature),1);
	echo "<br>";

	echo "List of seven lowest temperatures :";
	sort($Temperature);
	for($x=0; $x<5; $x++){
		echo "$Temperature[$x],";

	}
	echo "<br>";
	echo "List of seven highest temperatures :";
	rsort($Temperature);
	for($x=0; $x<5; $x++){
		echo "$Temperature[$x],";

	}

?>
