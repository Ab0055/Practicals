<?php
function sumOfDigits($num) {
    $sum = 0;
    while ($num > 0) {
        $sum += $num % 10; // Extract the last digit and add to sum
        $num = (int)($num / 10); // Remove the last digit
    }
    return $sum;
}

// Example Usage
$number = 1234; // You can change this number
echo "Sum of the digits of $number is: " . sumOfDigits($number);
?>

