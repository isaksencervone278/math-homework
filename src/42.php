<?php
// This is a sample PHP script for creating and solving linear equations.
function solveLinearEquation($coefficients, $constants) {
    // Calculate the determinant of the coefficient matrix
    $det = array_det_coefficients($coefficients);
    
    // If the determinant is zero, then the coefficients are linearly dependent,
    // so the system does not have a unique solution. Therefore, we return an empty array.
    if ($det == 0) {
        return [];
    }
    
    // Calculate the inverse of the coefficient matrix
    $inverse = array_invert_coefficients($coefficients);
    
    // Multiply the coefficients with the inverse to get the solution
    $solution = array_mult_matrix_multiply($coefficients, $constants, $inverse);
    
    return $solution;
}

// Example usage
$coefficients = [1, 2, -3];
$constants = [-5, 0, 6];

$result = solveLinearEquation($coefficients, $constants);

if (is_array($result)) {
    echo "The solution is: " . implode(", ", $result) . PHP_EOL;
}
