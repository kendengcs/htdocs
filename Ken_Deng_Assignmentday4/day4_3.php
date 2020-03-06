<?php
/*
1.	Use date function and show the following outputs
	It was (find the day here) 10 days ago.  (ex: It was Monday 10 days ago.)
	It will be (find the day here) 10 days later.
	print today’s date like this :
		05 March 2020, 11:05:00 AM
		05 March, 2020 (Thursday)

*/
  echo "It was ".date((l),strtotime("-10 days"))."10 days ago.<br>";
  echo "It was ".date((l),strtotime("+10 days"))."10 days later.<br>";
  echo "Today's date<br>".date("d M Y, h:i:sa")."<br>";
  echo date("d M, Y (l)");

 ?>
