<?php
$num = $_POST['num'];

echo "n의 배수만 출력: ";
  for($a=0;$a<=100;$a++){
    if($a%$num==0){
      echo $a."<br>";
    }
  }
 
?>
