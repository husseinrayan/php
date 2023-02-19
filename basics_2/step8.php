<?php

// Define a function to check if a given number is a power of two
function is_power_of_two($n) {
    // Check if $n is a power of 2 by counting the number of set bits in its binary representation
    // A number is a power of 2 if and only if it has exactly 1 bit set to 1 in its binary representation
    return (($n & ($n - 1)) == 0 && $n != 0);
}

// Define the input number
// $input_number = 7;
$input_number = 4;

// Check if the input number is a power of 2
if (is_power_of_two($input_number)) {
    echo $input_number . " is a power of 2" . PHP_EOL;
} else {
    echo $input_number . " is not a power of 2" . PHP_EOL;
}

?>
