<?php
session_start();
if (!isset($_SESSION['user']) || !isset($_SESSION['subtotal'])) {
    header("Location: login.php");
    exit();
}

$taxRate = 0.09;  // Florence sales tax 9%
$_SESSION['tax'] = $_SESSION['subtotal'] * $taxRate;
$_SESSION['total'] = $_SESSION['subtotal'] + $_SESSION['tax'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tax Calc</title>
</head>
<body>
    <h2>Tax Calculation</h2>
    <p>Subtotal: $<?php echo number_format($_SESSION['subtotal'], 2); ?></p>
    <p>Tax: $<?php echo number_format($_SESSION['tax'], 2); ?></p>
    <p>Total: $<?php echo number_format($_SESSION['total'], 2); ?></p>
    <a href="index.php">Continue Shopping</a> |
    <a href="checkout.php">Proceed to Checkout</a>
</body>
</html>
