<?php
function getRandomNumber($min, $max) {
    return mt_rand($min, $max);
}

$randomNumber = getRandomNumber(1, 50);
echo "Your random number is: $randomNumber";
?>