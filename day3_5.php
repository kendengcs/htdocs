<?php
/*
5.If you have the following array, how do you extract the value 3 from the array?
$a = array(  "a"=>array(  "b"=>0,   "c=>1),    
"b"=>array(  "e"=>2, "o"=>array(  "b"=>3  ) ) );  

hint: refer multidimensional array.

*/
	 $a = array("a" => array("b"=>0,"c"=>1),
 							"b" =>array("e"=>2,"o"=>array("b"=>3)));

		foreach($a as $key => $a1){
			foreach($a1 as $key1 =>$a2){
				foreach($a2 as $key2 =>$a3){
					echo $a3;
				}
			}
		}

?>
