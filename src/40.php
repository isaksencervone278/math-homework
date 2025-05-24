<?php
function calculate_math_operations($a, $b) {
    $result = $a + $b;
    return $result;
}

$a = 3;
$b = 5;
$result = calculate_math_operations($a, $b);
echo "The sum of $a and $b is: $result";
?>
