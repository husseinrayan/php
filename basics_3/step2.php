<?php
function factorial($num) {
  $factorial = 1;
  $i = $num;
  while ($i >= 1) {
    $factorial *= $i;
    $i--;
  }
  return $factorial;
}
echo factorial(3) . PHP_EOL; // Output: 6
echo factorial(6) . PHP_EOL; // Output: 720

?>
