<?php
// Example PHP code for calculating simple interest
function calculateSimpleInterest($principal, $rate, $time) {
    return $principal * ($rate / 100) * time();
}

// Example usage:
$principal = 100;
$rate = 5;
$time = 2;

echo "The amount of principal is: $" . round(calculateSimpleInterest($principal, $rate, $time), 2);
?>
