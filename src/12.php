
<?php

$numbers = array(1, 2, 3, 4, 5);

shuffle($numbers);

$randomNumber1 = $numbers[0];
$randomNumber2 = $numbers[1];
$randomNumber3 = $numbers[2];
$randomNumber4 = $numbers[3];
$randomNumber5 = $numbers[4];

echo "Your math homework for the week is: $randomNumber1 x $randomNumber2 = ";
$product = $randomNumber1 * $randomNumber2;
echo $product;
echo "\n";

?>