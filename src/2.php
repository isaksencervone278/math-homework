<?php
// Define an array of weekly math homework assignments
$mathHomework = array(
    "Find the area and perimeter of a rectangle with a length of 5cm and a width of 3cm.",
    "Simplify the expression: $(2x^2 + 5x - 3)/(x + 2)$",
    "Solve the equation: $x^2 + 4x - 5 = 0$"
);

// Randomly select a math homework assignment from the array
$randomHomework = $mathHomework[array_rand($mathHomework)];

echo $randomHomework; // Output the selected math homework assignment
?>