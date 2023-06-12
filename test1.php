<?php
$a = 0;
$b = 0;
$c = 0;
  for($a;$a<=100;$a++){
    if($a%2==0){
    $b += $a;
    }
  else{
    $c += $a;
  }
  }
  echo $_GET['num']."<br>";
  echo $_GET['data2'];
?>