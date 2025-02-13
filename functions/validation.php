<?php
// Function to sanitize input
function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Function to validate credit card
function validateCreditCard($number) {
    $number = preg_replace('/\D/', '', $number); // Remove non-numeric characters
    $length = strlen($number);

    if ($length == 16 && in_array(substr($number, 0, 2), ['51', '52', '53', '54', '55'])) {
        return "MASTERCARD";
    } elseif (($length == 13 || $length == 16) && substr($number, 0, 1) == '4') {
        return "VISA";
    } elseif ($length == 15 && in_array(substr($number, 0, 2), ['34', '37'])) {
        return "AMEX";
    } else {
        return false;
    }
}
?>
