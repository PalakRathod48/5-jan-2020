<?php
$num = 17;
$a = 0;

for($i = 2; $i < $num; $i++) {
  if($num % $i == 0){
    $a++;
    break;
  }
}

if ($a == 0){
  echo "Number is a prime number.";
} else {
  echo "Number is not a prime number.";
}
?>