<?php 
$var1 = 32;
$var2 = 45;

$newvar = $var1;
$var1 = $var2;
$var2 = $newvar;

echo $var1   . PHP_EOL ; // Output: 45
echo $var2   . PHP_EOL ; // Output: 32

?>