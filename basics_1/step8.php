<?php
$grocery = array('Eggs', 'Milk', 'Cheese', 'Water Pack', 'Tissues', 'Watermelon');

$first_three = array_slice($grocery, 0, 3);
$last_item = end($grocery);

$message = "Hello Sir, do you have " . join(", ", $first_three) . "? Also, if you sell fruits, can I find a $last_item?";
// i can also use implode() function to join the first three items of the array into a comma

echo $message;
?>
