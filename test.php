<?php

/*
1.	Create any 5 variables each of the following datatypes  integer,
string, float, boolean and write comments on each variable
*/

	$a = 10; //integer
	$b = "ten"; //string
 	$c = 10.0; // float
	$d = True; //boolen


/*
2. Create any 3 constants, use define () function
*/
	define ("DB_SSN", "1234567890");
	define ("DB_NAME","Micky");
	define ("DB_BIRTH","01-01-1900");

/*
3.	Create an array variable of a student info (variable name $student_info)
with the following keys:  name, email, phone #, city, gender
*/
	$student_info = array(
		"Name" => "Trump",
		"Email" => "Donald.Trump@gmail.com",
		"PhoneNumber" => "123-456-7890",
		"City" => "New York",
		"Gender" => "Male"
	);

/*
4.	Create the following variables, observe the output,
and let me know the issues  $2year = 2020;  $name$ = "John";
*/

//To be honest, I don't quite understand this question. The output told errors.
//In order to make other codes run collectly, I modify it right.
	$year = 2020;
	$name = "John";

	echo "$year, $name";
	echo "<hr>";
/*
5.  create an array variable $fruits with 5-6 fruit names, make sure Mango is one of the fruit. 
exercise 1: print all the keys and values of the $fruit array. (hint: use foreach())
*/
	$fruits = array("Apple","Peach","Mango","Pear","Blackberry");

	foreach($fruits as $key => $fruit){
		echo "$key"."$fruit"."<br>";
	}
	echo "<hr>";
/*
exercise 2: print the keys and values of the $fruit array,
and stop the iteration when value='Mango' (hint: use break;) 
*/
	foreach($fruits as $key => $fruit){
		echo "$key"."$fruit"."<br>";
		if ($fruit == "Mango"){
			break;
		}
	}
	echo "<hr>";
/*
exercise 3: print the keys and values of the $fruit array,
and skip the iteration when value='Mango' (hint: use continue;)
*/
	foreach($fruits as $key => $fruit){
		if ($fruit == "Mango"){
			continue;
		}
		echo "$key"."$fruit"."<br>";
	}
	echo "<hr>";


/*
6.	Assume we are using the time as 24 hour format 
exercise 1: create if, else if and else conditions and print the following:    
 if the hour is in between 6-11, print the greeting "Good morning" 
 if the hour is in between 11-12, print the greeting "Good after morning"
 if the hour is in between 16-19, print the greeting "Good evening"
 if the hour is greater than 21, print the message "Good night"
(hint: use logical operators)

*/
//How about 12-16? I made it good afternoon.
	$time = 22;
	if (($time >= 6)&&($time<=11)){
		 echo "Good morning";
	}elseif (($time>11)&&($time<=12)){
		echo "Good After morning";
	}elseif (($time>12)&&($time<=16)){
		echo "Good Afternoon";
	}elseif (($time>16)&&($time<=19)){
		echo "Good evening";
	}else{
		echo "Good night";
	}

?>
