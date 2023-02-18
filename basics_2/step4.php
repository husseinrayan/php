<?php
function isArmstrong($number) {
    $sum = 0;
    $temp = $number;
  
    while ($temp != 0) {
      $remainder = $temp % 10;
      $sum = $sum + ($remainder ** 3);
      $temp = (int) $temp / 10;
    }
  
    if ($number == $sum) {
      return true;
    } else {
      return false;
    }
  }
  echo isArmstrong(153) ? '153 is an Armstrong number' : '153 is not an Armstrong number';
echo "\n";
echo isArmstrong(12345) ? '12345 is an Armstrong number' : '12345 is not an Armstrong number';
echo "\n";
?>