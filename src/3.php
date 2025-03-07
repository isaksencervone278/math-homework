<?php
// Define an array of numbers between 1 and 100
$numbers = range(1, 100);

// Shuffle the array to randomize the order of the numbers
shuffle($numbers);

// Return the first number in the array
echo $numbers[0];
?>