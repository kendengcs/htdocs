<?php
  /*
  Name：Ken Deng
  Date: 03-09-2020
  */

  $NameAge = array("Peter" =>33,"Ben"=>25,"Joe"=>22,"Mike"=>30,"John"=>33);
  asort($NameAge);

  foreach($NameAge as $name => $age) {
    echo $name. ",";
  }
  echo "<br>";
  ksort($NameAge);

  foreach($NameAge as $name => $age) {
    echo $name. ",";
  }

  echo "<br>";

  ksort($NameAge);
  foreach($NameAge as $name => $age){
      echo $age. ",";
  }

  echo "<br>";

  krsort($NameAge);
  foreach($NameAge as $name => $age){
      echo $age. ",";
  }
?>
