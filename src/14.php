 Here is your PHP code:

<?php
  function getRandomIntInclusive($min, $max) {
    return mt_rand($min, $max);
}
function generateMathHomework() {
    $num1 = getRandomIntInclusive(0, 25);
    $num2 = getRandomIntInclusive(0, 25);
    if ($num1 > $num2) {
        return "$num1 + $num2";
    } else if ($num1 < $num2) {
        return "$num2 - $num1";
    } else {
        return "Both numbers are equal. Try again.";
    }
}
echo generateMathHomework();
?>