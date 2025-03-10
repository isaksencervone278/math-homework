<?php
function getRandomHomework($max) {
    $number = mt_rand(1, $max);
    $operator = ['+', '-', '*', '/'];
    $question = "What is " . $number . $operator[mt_rand(0, 3)] . "?";
    return $question;
}
?>