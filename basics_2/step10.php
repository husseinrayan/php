<?php

// Define a function to check if a given string is a palindrome
function is_palindrome($str) {
    // Remove all non-alphanumeric characters and convert to lowercase
    $str = preg_replace("/[^a-zA-Z0-9]/", "", strtolower($str));
    // Reverse the string
    $reverse_str = strrev($str);
    // Compare the original and reversed strings
    return ($str === $reverse_str);
}

// Define the input string
$input_string = "nurses run";

// Check if the input string is a palindrome
if (is_palindrome($input_string)) {
    echo $input_string . " is a palindrome" . PHP_EOL;
} else {
    echo $input_string . " is not a palindrome" . PHP_EOL;
}

?>
