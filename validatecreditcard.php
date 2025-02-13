<?php
session_start();
include 'functions/validation.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cardNumber = test_input($_POST['card_number'] ?? '');
    $cardType = validateCreditCard($cardNumber);

    if ($cardType) {
        $_SESSION['payment_status'] = "Your $cardType ending with " . substr($cardNumber, -4) . " has been charged.";
        header("Location: thankyou.php");
        exit();
    } else {
        $_SESSION['payment_status'] = "Invalid card. Please try again.";
        header("Location: checkout.php");
        exit();
    }
}
?>
