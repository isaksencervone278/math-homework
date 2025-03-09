<?php
function getRandomHomework($min, $max) {
    // Generate a random number between $min and $max
    $randomNumber = mt_rand($min, $max);
    
    // Return the math problem based on the random number
    switch ($randomNumber) {
        case 1:
            return "What is 2 + 2?";
        case 2:
            return "What is 5 - 3?";
        case 3:
            return "What is 10 x 2?";
        default:
            return "What is 4 / 2?";
    }
}

// Get a random math problem and display it to the user
$randomProblem = getRandomHomework(1, 4);
echo $randomProblem;
?>