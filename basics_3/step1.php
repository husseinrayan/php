<?php
$i = 1;
while ($i <= 8) {
  $j = 1;
  while ($j <= $i) {
    echo "*";
    $j++;
  }
  echo "" . PHP_EOL;
  $i++;
}
?>