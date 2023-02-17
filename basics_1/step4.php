<?php
$name = "Rayan";
$position = "Full Stack web develloper";
$github_url = "https://github.com/husseinrayan";

// Using double quotation " and the .
echo "Hello, I'm $name, I'm a $position. Please check my github link $github_url.\n";

// Using double quotation " and without using the .
echo "Hello, I'm {$name}, I'm a {$position}. Please check my github link {$github_url}.\n";

// Without using the double quotation ".
echo 'Hello, I\'m ' . $name . ', I\'m a ' . $position . '. Please check my github link ' . $github_url . '.';

?>
