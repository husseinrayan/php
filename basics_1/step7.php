<?php
// $birth_year = 2009; can't drive 
$birth_year = 1998;
$current_year = 2023;

if ($current_year - $birth_year > 18) {
    echo "You can drive";
} else {
    echo "You're still a kid, go and play GTA";
}
?>
