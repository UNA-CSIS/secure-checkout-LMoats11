<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$prices = ["game1" => 20, "game2" => 40, "game3" => 30];
$_SESSION['order'] = [];

$total = 0;
foreach ($prices as $game => $price) {
    $qty = isset($_POST[$game]) ? max(0, intval($_POST[$game])) : 0;
    $_SESSION['order'][$game] = $qty;
    $total += $qty * $price;
}

$_SESSION['subtotal'] = $total;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Summary</title>
</head>
<body>
    <h2>Order Summary</h2>
    <p>Subtotal: $<?php echo number_format($_SESSION['subtotal'], 2); ?></p>
    <a href="index.php">Continue Shopping</a> |
    <a href="tax.php">Proceed to Tax </a>
</body>
</html>
s