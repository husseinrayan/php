<?php
$course_name = "Learn PHP ";
$enrolled_students = 42;
$price = 50.7;
$on_discount = false;

// Output the course information
echo "Course title: " . $course_name . "\n";
echo "Enrolled Students: " . $enrolled_students . "\n";
echo "Course price: " . $price . " $ USD\n";
echo "Course on discount: " . ($on_discount ? "Yes" : "No") . "\n";
?>
