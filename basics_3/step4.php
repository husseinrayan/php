<?php
function sum_digits($num) {
    $sum = 0;
    $num_str = (string) $num; // convert the number to a string
    $num_len = strlen($num_str);
    $i = 0;
    while ($i < $num_len) {
      $digit = (int) $num_str[$i]; // convert the current character to an integer
      $sum += $digit;
      $i++;
    }
    return $sum;
  }
  $num1 = 12345;
$num2 = 9999;
echo sum_digits($num1) . PHP_EOL; // Output: 15
echo sum_digits($num2) . PHP_EOL; // Output: 36

?>