<?php 
function count_word($text, $word) {
    $count = 0;
    $words = explode(" ", $text);
    $num_words = count($words);
    $i = 0;
    while ($i < $num_words) {
      if ($words[$i] == $word) {
        $count++;
      }
      $i++;
    }
    return $count;
  }
  $text = "i love php, but i hate css";
$word = "i";
echo count_word($text, $word) . PHP_EOL ; // Output: 2

?>