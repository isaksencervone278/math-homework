
<?php

// Function to generate a random number between 1 and 20
function getRandomNumber() {
    return rand(1, 20);
}

// Function to generate a random math problem
function getRandomMathProblem($number) {
    $problem = "What is the value of " . $number . " times itself?";
    return $problem;
}

// Get a random number between 1 and 20
$randomNumber = getRandomNumber();

// Generate a random math problem for the number
$mathProblem = getRandomMathProblem($randomNumber);

// Print the math problem
echo $mathProblem . "\n";

?>