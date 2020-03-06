<?php
	/*1.	Create a PHP script which displays the capital and country name from
	the below array $ceu. Sort the list by the capital of the country.

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
 "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
 "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
  "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
	"Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
	"United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
	"Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest",
	"Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

  Sample Output : 
	The capital of Netherlands is Amsterdam
 The capital of Greece is Athens
 The capital of Germany is Berlin */

		$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
	 "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
	 "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
		"Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
		"Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
		"United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
		"Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest",
		"Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

		foreach ($ceu as $capital => $country){
			echo 'The capital of '."$country". ' is '."$capital"."<br>";
		}
?>
